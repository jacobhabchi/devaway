<?php

namespace App\Controllers;
use App\Models\DevelopersModel; 
use App\Models\BusinessesModel; 

class Login extends BaseController
{
    //return view for login form
    public function index(): string
    {
        return view('login');
    }

}
