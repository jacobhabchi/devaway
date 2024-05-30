<?php

namespace App\Models;

use CodeIgniter\Model;

//Model for DeveloperSkills table in database
//Stores all pairs of developers and their skills
class DeveloperSkillsModel extends Model
{
    protected $table            = 'developer_skills';
    protected $primaryKey       = 'pair_id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $allowedFields    = ['developer_id', 'skill_id'];

}
