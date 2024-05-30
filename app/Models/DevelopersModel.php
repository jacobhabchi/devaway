<?php

namespace App\Models;

use CodeIgniter\Model;

//Model for Developers table in database
//Stores all developer data
class DevelopersModel extends Model
{
    protected $table            = 'developers';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $allowedFields    = ['first_name', 
                                    'last_name', 
                                    'email', 
                                    'password', 
                                    'hourly_rate', 
                                    'location', 
                                    'language', 
                                    'preferred_hours', 
                                    'contact_info',
                                    'bio', 
                                    'statement',
                                    'experience',
                                    'projects'
                                    ];

}
