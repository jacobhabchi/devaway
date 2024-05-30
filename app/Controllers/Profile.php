<?php

namespace App\Controllers;

use App\Models\DevelopersModel;
use App\Models\SkillsModel;
use App\Models\DeveloperSkillsModel; 


class Profile extends BaseController
{
    //ensures that users must be logged in to view profiles, otherwise must log in / create account
    public function index(): string
    {
        // Check if a business session exists
        if (session()->has('business_id')) {
           
            // Load the models
            $developersModel = new DevelopersModel();
            $developerSkillsModel = new DeveloperSkillsModel();

            //get developer ID via button
            $developer_id = $this->request->getPost('developer');

            $developer = $developersModel->find($developer_id);

            $developer_skills = $developerSkillsModel->where('developer_id', $developer_id)->findAll();

            //pass data to the profile view
            return view('profile', ['developer' => $developer, 'developer_skills' => $developer_skills]);
        }
        // If no session found, show log in page
        else {
            return view('login');
        }

    }

}