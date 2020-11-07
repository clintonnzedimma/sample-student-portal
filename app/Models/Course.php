<?php
namespace App\Models;
use Woski\ORM\WoskiModel; 

class Course extends WoskiModel {

    public $table = "courses";

    public $pk = "id";

    public $fields = ["id", "title", "units"];
 
}