<?php
namespace App\Models;
use Woski\ORM\WoskiModel; 

class Member extends WoskiModel {

    public $table = "members";

    public $pk = "id";

    public $fields = ['id', 'email', 'surname','firstName', 'otherName', 'sex', 'dob', 'schId', 'deptId', 'phone,', 'address', 'passport', 'type'];
    
    protected $has = [
        "CourseReg" => ["sourceKey" => 'id', "foreignKey" => 'memberId']
    ];
}