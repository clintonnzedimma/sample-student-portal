<?php
namespace App\Models;
use Woski\ORM\WoskiModel; 

class CourseReg extends WoskiModel {

    public $table = "reg_courses";

    public $pk = "id";

    public $fields = ['id', 'courseId', 'session', 'semester', 'units', 'memberId', 'matNum'];
    
}