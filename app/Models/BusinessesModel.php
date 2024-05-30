<?php

namespace App\Models;

use CodeIgniter\Model;

//Model for Businesses table in database
//Stores all information about businesses
class BusinessesModel extends Model
{
    protected $table            = 'businesses';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $allowedFields    = ['company_name', 
                                    'email', 
                                    'industry', 
                                    'password', 
                                    'budget', 
                                    'location' 
                                ];

}
