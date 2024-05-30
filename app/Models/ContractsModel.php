<?php

namespace App\Models;

use CodeIgniter\Model;

//Model for Contracts table in database
//Stores all contract information
class ContractsModel extends Model
{
    protected $table            = 'contracts';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $allowedFields    = ['business_id', 
                                    'developer_id', 
                                    'company_name', 
                                    'project_name', 
                                    'description', 
                                    'est_duration',
                                    'start_date', 
                                    'end_date', 
                                    'hourly_rate',
                                    'weekly_hours', 
                                    'status',
                                ];

}
