<?php

namespace App\Controllers;

use App\Models\DevelopersModel; 

class Apply extends BaseController
{
    // index function to display application form
    public function index(): string
    {
        return view('apply');
    }

    public function apply()
    {
        // Retrieve input data from the form
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

        // Create an instance of the BusinessesModel
        $developersModel = new DevelopersModel();

        //hash the password for security
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);


        // Prepare data for insertion
        $data = [
            'first_name' => $firstName,
            'last_name' => $lastName,
            'email' => $email,
            'password' => $hashedPassword,
            'hourly_rate' => $rate,
            'location' => $location,
            'language' => $language,
            'preferred_hours' => $hours,
            'contact_info' => $contact,
            'statement' => $statement
        ];

        // Insert data into the database
        $developersModel->insert($data);

        //redirect user to login page
        return redirect()->to(base_url('login'));
    }
    
}