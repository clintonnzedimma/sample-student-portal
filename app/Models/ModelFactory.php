<?php
namespace App\Models;


class ModelFactory{

    public  $Member;

    public  $Department;

    public  $Course;

    public  $CourseReg;
    
    public $ForensicData;

   public function __construct() { 
        $this->ForensicData = new ForensicData;   
    
        $this->Member = new Member;

        $this->Department = new Department;

        $this->Course = new Course;

        $this->CourseReg = new CourseReg;

    } 
}