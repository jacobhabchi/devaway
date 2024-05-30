<?php

namespace App\Controllers;

use App\Models\DevelopersModel; 
use App\Models\SkillsModel;
use App\Models\DeveloperSkillsModel; 

class Talent extends BaseController
{
    public function index(): string
    {
        return view('talent');
    }

    public function searchTalent()
    {
        // Process input values from search/filter (case insensitive)
        $skillsFilter = $this->request->getPost('skills_filter');
        $searchInput = $this->request->getPost('search_input');
        $locationInput = strtolower($this->request->getPost('location'));
        $rateInput = $this->request->getPost('rate');
        $languageInput = $this->request->getPost('language');


        
        // Load models
        $developersModel = new DevelopersModel();
        $developerSkillsModel = new DeveloperSkillsModel();
        $skillsModel = new SkillsModel();

        // Empty array to store matching developer IDs
        $matchingDevelopers = [];

        if ($searchInput || $skillsFilter){

            if ($searchInput) {
                // Split the search into individual words
                $keywords = explode(' ', $searchInput);
            }

            if ($skillsFilter) {
                // Split the skills filter into individual words
                $keywords = explode(' ', $skillsFilter);
            }
            
            // Empty array to store all developer IDs
            $developerIds = [];

            
            // Loop through each keyword and find matching attributes
            foreach ($keywords as $keyword) {

                // Find skill id for skill keyword
                $skill = $skillsModel->where("description LIKE '%" . $keyword . "%'")->first();

                //Find developers with location keyword
                $developersWithLocation = $developersModel->where("location LIKE '%" . $keyword . "%'")->findAll();
                
                // Find developers with language keyword
                $developersWithLanguage = $developersModel->where("language LIKE '%" . $keyword . "%'")->findAll();
                
                // Find developers with hourly rate keyword
                $developersWithRate = $developersModel->where('hourly_rate <=', $keyword)->findAll();
                
                //Filter through developer statement, bio, experience, projects to find matching keyword
                $developersWithStatement = $developersModel->where("statement LIKE '%" . $keyword . "%'")->findAll();

                
                if ($skill) {
                    // Find developers with the matching skill
                    $developersWithSkill = $developerSkillsModel->where('skill_id', $skill['id'])->findAll();

                    // Extract developer IDs from the result and add them to the array
                    foreach ($developersWithSkill as $developer) {
                        $developerIds[] = $developer['developer_id'];
                    }
                }

                if ($developersWithStatement) {
                    // Find matches between search/filter and developer statement - add ID
                    foreach ($developersWithStatement as $developer) {
                        $developerIds[] = $developer['id'];
                    }
                }

                if ($developersWithLocation && $skillsFilter === null) {
                    //Find developers via location search - add ID
                    foreach ($developersWithLocation as $developer) {
                        $developerIds[] = $developer['id'];
                    }
                }

                if ($developersWithLanguage && $skillsFilter === null) {
                    //Find developers via language - add ID
                    foreach ($developersWithLanguage as $developer) {
                        $developerIds[] = $developer['id'];
                    }
                }

                if ($developersWithRate && $skillsFilter === null) {
                    //Find developers via hourly rate - add ID
                    foreach ($developersWithRate as $developer) {
                        $developerIds[] = $developer['id'];
                    }
                }

            }

            // Remove duplicate developer IDs
            $developerIds = array_unique($developerIds);
            

            foreach ($developerIds as $developerId) {
                $developer = $developersModel->find($developerId);
                $skills = [];

                // Find skills associated with the developer
                $developerSkills = $developerSkillsModel->where('developer_id', $developerId)->findAll();
                foreach ($developerSkills as $developerSkill) {
                    $skill = $skillsModel->find($developerSkill['skill_id']);
                    if ($skill) {
                        $skills[] = $skill['description'];
                    }
                }

                // Append the skills to the developer
                $developer['skills'] = $skills;
                $matchingDevelopers[] = $developer;
            }
            
        } else {
            // Fetch all developers along with their skills
            $matchingDevelopers = $developersModel->findAll();

            foreach ($matchingDevelopers as &$developer) {
                $skills = [];

                // Find skills associated with the developer
                $developerSkills = $developerSkillsModel->where('developer_id', $developer['id'])->findAll();
                foreach ($developerSkills as $developerSkill) {
                    $skill = $skillsModel->find($developerSkill['skill_id']);
                    if ($skill) {
                        $skills[] = $skill['description'];
                    }
                }

                // Append the skills to the developer
                $developer['skills'] = $skills;
            }
        }

        // Filtering developers based on hourly rate
        if ($rateInput) {
            $matchingDevelopers = array_filter($matchingDevelopers, fn($developer) => $developer['hourly_rate'] <= $rateInput);
        }

        // Filtering developers based on location
        if ($locationInput) {
            $matchingDevelopers = array_filter($matchingDevelopers, fn($developer) => strtolower($developer['location']) == $locationInput);
        }

        // Filtering developers based on location
        if ($languageInput) {
            $matchingDevelopers = array_filter($matchingDevelopers, fn($developer) => strtolower($developer['language']) == $languageInput);
        }

        

        // Pass the matching developers data to the view
        return view('talent', ['matchingDevelopers' => $matchingDevelopers, 'searchInput' => $searchInput, 'skillsFilter' => $skillsFilter]);

    }

}