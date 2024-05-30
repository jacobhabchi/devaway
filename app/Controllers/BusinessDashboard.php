<?php

namespace App\Controllers;

use App\Models\BusinessesModel;
use App\Models\DevelopersModel;
use App\Models\ContractsModel;


class BusinessDashboard extends BaseController
{
    public function index(): string
    {
        //load models
        $businessModel = new BusinessesModel();
        $developersModel = new DevelopersModel();
        $contractsModel = new ContractsModel();

        //store business ID based on session
        $business_id = $this->session->get('business_id');

        //match business in database with this ID
        $business = $businessModel->find($business_id);

        //find all fintracts this business has proposed
        $contracts = $contractsModel->where('business_id', $business_id)->findAll();

        //pass data to the view
        return view('business_dashboard', ['business' => $business, 'contracts' => $contracts]);
    }
}
