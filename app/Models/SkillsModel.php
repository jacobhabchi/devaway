<?php

namespace App\Models;

use CodeIgniter\Model;

//Model for Skills table in database
class SkillsModel extends Model
{
    protected $table            = 'skills';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $allowedFields    = ['description'];

}
