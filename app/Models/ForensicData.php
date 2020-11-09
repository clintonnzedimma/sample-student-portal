<?php
namespace App\Models;
use Woski\ORM\WoskiModel; 

class ForensicData extends WoskiModel {

    public $table = "forensic_logs";

    public $pk = "id";

    public $fields = ["id", "message", "type", "createdAt"];
 
}