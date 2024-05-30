<?php

namespace App\Controllers;
use App\Models\BusinessesModel;
use App\Models\ContractsModel;


class Contract extends BaseController
{
    public function index(): string
    {
        //get developer ID from developer profile - contact
        $developer_id = $this->request->getPost('developer_id');
        //get business ID by session
        $business_id = $this->session->get('business_id');

        //load model
        $businessesModel = new BusinessesModel();

        //find all businesses with ID
        $business = $businessesModel->find($business_id);

        //pass data to contract view
        return view('contract', ['developer_id' => $developer_id, 'business' => $business]);
    }


//submission function handling the submission of a contract by a business and uptading database accordingly
    public function submit()
    {
        //extract form data
        $developer_id = $this->request->getPost('developer_id');
        $business_id = $this->request->getPost('business_id');
        $compnay_name = $this->request->getPost('company_name');
        $project_name = $this->request->getPost('project_name');
        $duration = $this->request->getPost('est_duration');
        $description = $this->request->getPost('description');
        $start_date = $this->request->getPost('start_date');
        $end_date = $this->request->getPost('end_date');
        $rate = $this->request->getPost('rate');
        $hours = $this->request->getPost('hours');

        //load contract model
        $contractsModel = new ContractsModel();

        //set values of data
        $data = [
            'business_id' => $business_id,
            'developer_id' => $developer_id,
            'company_name' => $compnay_name,
            'project_name' => $project_name,
            'est_duration' => $duration,
            'description' => $description,
            'start_date' => $start_date, 
            'end_date' => $end_date,
            'hourly_rate' => $rate,
            'weekly_hours' => $hours
        ];

        //insert data into contracts table via model
        $contractsModel->insert($data);

        //return success view
        return view('successful');

    }

    //handle accepted contracts by changing the status
    public function accepted()
    {
        $contract_id = $this->request->getPost('contract_id');
        $contractsModel = new ContractsModel();

        $contract = $contractsModel->find($contract_id);

        $contract['status'] = 'accepted';

        $contractsModel->save($contract);

        return redirect()->to('developer_dashboard');

    }
    
    //handle declined contracts by changing the status
    public function declined()
    {
        $contract_id = $this->request->getPost('contract_id');
        $contractsModel = new ContractsModel();

        $contract = $contractsModel->find($contract_id);

        $contract['status'] = 'declined';

        $contractsModel->save($contract);

        return redirect()->to('developer_dashboard');
    }
}