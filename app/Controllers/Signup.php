<?php

namespace App\Controllers;

use App\Models\BusinessesModel; 

class Signup extends BaseController
{
    public function index(): string
    {
        return view('signup');
    }

    public function signup()
    {
        // Retrieve input data from the form
        $companyName = $this->request->getPost('company_name');
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $budget = $this->request->getPost('budget');
        $location = $this->request->getPost('location');

        // Create an instance of the BusinessesModel
        $businessesModel = new BusinessesModel();

        //hash the password for security
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Prepare data for insertion
        $data = [
            'company_name' => $companyName,
            'email' => $email,
            'password' => $hashedPassword,
            'budget' => $budget,
            'location' => $location
        ];

        // Insert data into the database
        $businessesModel->insert($data);

        return redirect()->to(base_url('login'));
    }
}