<?php

namespace App\Controllers;
use App\Models\DevelopersModel; 
use App\Models\BusinessesModel; 

class Validate extends BaseController
{
    public function login()
    {
        //store email and password used on login
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        //load models
        $developersModel = new DevelopersModel();
        $businessesModel = new BusinessesModel();

        // Check if user is a developer
        $developer = $developersModel->where('email', $email)->first();
        if ($developer&& password_verify($password, $developer['password'])) {
            $this->session->set('developer_id', $developer['id']);
            return redirect()->to(base_url('developer_dashboard'));
        }
        // Check if user is a business
        $business = $businessesModel->where('email', $email)
                                ->first();
        if ($business && password_verify($password, $business['password'])) {
            $this->session->set('business_id', $business['id']);
            return redirect()->to(base_url('/'));
        }

        // If no match found, redirect back to login page with error message
        return redirect()->to(base_url('login'))->with('error', 'Invalid email or password');
        }

        public function logout()
        {
            // Check if developer session exists
            if ($this->session->has('developer_id')) {
                // Destroy developer session
                $this->session->remove('developer_id');
                return redirect()->to(base_url('login'));
            }
        
            // Check if business session exists
            if ($this->session->has('business_id')) {
                // Destroy business session
                $this->session->remove('business_id');
                return redirect()->to(base_url('login'));
            }
        
            // If no session found, redirect to login page
            return redirect()->to(base_url('login'));
        }
}