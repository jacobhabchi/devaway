<?php

namespace App\Controllers;
use App\Models\DevelopersModel;
use App\Models\SkillsModel;
use App\Models\DeveloperSkillsModel; 
use App\Models\ContractsModel;

class DeveloperDashboard extends BaseController
{
    //this function extracts developer skills from the DeveloperSkills table and passes them to the view for the developer in the current session
    public function index(): string
    {
        if (!$this->session->has('developer_id')) {
            // Redirect to the login page if not logged in
            return redirect()->to(base_url('login'));
        }

        // Load the models
        $developersModel = new DevelopersModel();
        $developerSkillsModel = new DeveloperSkillsModel();
        $contractsModel = new ContractsModel();

        // Retrieve the developer's ID from the session
        $developer_id = $this->session->get('developer_id');

        $contracts = $contractsModel->where('developer_id', $developer_id)->findAll();

        // Fetch the developer's data from the database
        $developer = $developersModel->find($developer_id);

        // Query the developer_skills table to get the skills associated with the developer_id
        $developerSkills = $developerSkillsModel->where('developer_id', $developer_id)->findAll();

        // Initialize an array to store skill data
        $skillData = [];

        // Load the SkillsModel
        $skillsModel = new SkillsModel();

        // Loop through each skill ID and fetch its description
        foreach ($developerSkills as $skill) {
            // Find the skill information based on skill_id
            $skillInfo = $skillsModel->find($skill['skill_id']);
            // Add skill data to the array
            if ($skillInfo !== null) {
                $skillData[] = ['id' => $skill['skill_id'], 'description' => $skillInfo['description']];
            }
        }
        return view('developer_dashboard', ['developer' => $developer, 'skillData' => $skillData, 'contracts' => $contracts]);
    
    }

    //addSkill funciton to handle developers adding skills. Ensures added skills are added to DevelperSkills table
    public function addSkill()
    {

        //get added skill
        $skill = $this->request->getPost('skill');

        $skillsModel = new SkillsModel();

        //check if skill already exists for this developer
        $existingSkill = $skillsModel->where('description', $skill)->first();

        // If the skill doesn't exist, add it to the skills table
        if (!$existingSkill) {
            $newSkillData = [
                'description' => $skill
            ];
            $newSkillId = $skillsModel->insert($newSkillData);
        } else {
            // Use the existing skill ID
            $newSkillId = $existingSkill['id'];
        }

        $developer_id = $this->session->get('developer_id');

        $developerSkillsModel = new DeveloperSkillsModel();

        // Check if the unique pair (developer_id, skill_id) already exists in the developers_skills table

        $existingPair = $developerSkillsModel   ->where('developer_id', $developer_id)
                                                ->where('skill_id', $newSkillId)
                                                ->first();

        // If the pair already exists, just redirect back to the developer dashboard (don't add)
        if ($existingPair) {
            return redirect()->to(base_url('developer_dashboard'));
        }

        // Prepare data for insertion into the developer_skills table
        $developerSkillData = [
            'developer_id' => $developer_id,
            'skill_id' => $newSkillId
        ];

        $developerSkillsModel->insert($developerSkillData);

        return redirect()->to(base_url('developer_dashboard'));

    }
    
    //function to remove developer skills - removes developer skill from database
    public function removeSkill()
    {
        //get skill to remove
        $skill_id = $this->request->getPost('skill_id');
        $developer_id = $this->session->get('developer_id');
    
        $developerSkillsModel = new DeveloperSkillsModel();
    
        // Find and delete the skill from developer_skills table
        $developerSkillsModel->where('developer_id', $developer_id)
                             ->where('skill_id', $skill_id)
                             ->delete();
    
        return redirect()->to(base_url('developer_dashboard'));
    }

    //function to update developers bio
    public function updateBio()
    {
        $bio = $this->request->getPost('bio');
        $developer_id = $this->session->get('developer_id');

        //update bio field in developers table
        $developersModel = new DevelopersModel();
        $developersModel->update($developer_id, ['bio' => $bio]);
    
        return redirect()->to(base_url('developer_dashboard'));

    }
    //function to update developers experience
    public function updateExperience()
    {
        $experience = $this->request->getPost('experience');
        $developer_id = $this->session->get('developer_id');
        //update experience field in developers table
        $developersModel = new DevelopersModel();
        $developersModel->update($developer_id, ['experience' => $experience]);
    
        return redirect()->to(base_url('developer_dashboard'));

    }
    
    //function to update developers projects
    public function updateProjects()
    {
        $projects = $this->request->getPost('projects');
        $developer_id = $this->session->get('developer_id');

        //update projects field in developers table
        $developersModel = new DevelopersModel();
        $developersModel->update($developer_id, ['projects' => $projects]);
    
        return redirect()->to(base_url('developer_dashboard'));

    }   

    //function to update developers details
    public function updateDetails()
    {
        // Retrieve all data from the form
        $firstName = $this->request->getPost('first_name');
        $lastName = $this->request->getPost('last_name');
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $rate = $this->request->getPost('hourly_rate');
        $location = $this->request->getPost('location');
        $language = $this->request->getPost('language');
        $hours = $this->request->getPost('preferred_hours');
        $contact = $this->request->getPost('contact_info');
        $statement = $this->request->getPost('statement');

        //get developer ID via session
        $developer_id = $this->session->get('developer_id');
    
        //update all respective fields for develoeprs data
        $developersModel = new DevelopersModel();
        $developersModel->update($developer_id, [
                                    'first_name' => $firstName,
                                    'last_name' => $lastName,
                                    'email' => $email,
                                    'password' => $password,
                                    'hourly_rate' => $rate,
                                    'location' => $location,
                                    'language' => $language,
                                    'preferred_hours' => $hours,
                                    'contact_info' => $contact,
                                    'statement' => $statement,
                                ]);
    
        return redirect()->to(base_url('developer_dashboard'));

    }


}