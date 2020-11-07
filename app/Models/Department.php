<?php
namespace App\Models;
use Woski\ORM\WoskiModel; 

class Department extends WoskiModel {

    public $table = "departments";

    public $pk = "id";

    public $fields = ['id', 'name', 'hod', "schId"];

    protected $has = [
        "Member" => ["sourceKey" => 'id', "foreignKey" => 'deptId']
    ];
    
}