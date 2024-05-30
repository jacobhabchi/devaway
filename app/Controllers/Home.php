<?php

namespace App\Controllers;

class Home extends BaseController
{
    //return view for home page
    public function index(): string
    {
        return view('home');
    }

}
