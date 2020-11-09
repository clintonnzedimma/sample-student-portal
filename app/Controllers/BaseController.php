<?php  
/**
 * A sample Controller class
 */
namespace App\Controllers;
use Woski\Controller\WoskiController;


class BaseController extends WoskiController
{	

    public $Member;
    public $Course;
    public $CourseReg;
    public $Department;
    public $ForensicData;
    
    
    function __construct() {
        parent::__construct();
        $this->ModelFactory = new \App\Models\ModelFactory;
        $this->Member = $this->ModelFactory->Member;
        $this->Course = $this->ModelFactory->Course;
        $this->CourseReg = $this->ModelFactory->CourseReg;
        $this->Department = $this->ModelFactory->Department;
        $this->ForensicData = $this->ModelFactory->ForensicData;
    }


}
?>