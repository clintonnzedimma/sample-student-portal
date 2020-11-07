<?php
namespace App\Models;


class ModelFactory{

    public  $Member;

    public  $Department;

    public  $Course;

    public  $CourseReg;

   public function __construct() {  
        $this->Member = new Member;

        $this->Department = new Department;

        $this->Course = new Course;

        $this->CourseReg = new CourseReg;

    } 
}