<?php

namespace App\Controllers;

class How extends BaseController
{
    //return view for how page
    public function index(): string
    {
        return view('how');
    }
}