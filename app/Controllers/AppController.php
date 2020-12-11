<?php  
/**
 * A sample Controller class
 */
namespace App\Controllers;
use Woski\Controller\WoskiController;

class AppController extends BaseController
{	



	public function index() {
		return function ($req, $res) {
		   	 $res->render("index", 
		        [
		            "title"=>"Woski PHP"
		        ]);			
		};
	}

	public function LoginPage() {
		return function ($req, $res) {

		   	 $res->render("login", 
		        [
					"title" =>"Portal Login",
					"r" => isset($_GET['r']) ? $_GET['r'] : null
		        ]);			
		};
	}


	public function SignupPage() {
		return function ($req, $res) {

		   	 $res->render("registration", 
		        [
					"title" =>"Portal Registeration",
					"departments" => $this->Department->findAllWhere()
		        ]);			
		};
	}


	
	public function PortalHome() {
		return function ($req, $res) {
			
			$user = $this->Member->findOneWhere(
				["email" => $_SESSION['email'] ] ,
				[
					"INCLUDE" => [ 
						"MODEL" => 'CourseReg',
						"AS" => 'courses',
						"SORT" => [   
						  "ORDER_BY" => "id",
						  "DESC" => false
						]
					]
				]);



			$user_dpt = $this->Department->findOneWhere(
				["id" => $user['deptId'] ] 
			);

	

		   	 $res->render("portal_home", 
		        [
					"title"=> "Portal Home",
					"user" => $user,
					"user_dpt" => $user_dpt
		        ]);			
		};
	}

	public function CourseRegisteration() {
		return function ($req, $res) {
			$user = $this->Member->findOneWhere(
				["email" => $_SESSION['email'] ] ,
				[
					"INCLUDE" => [ 
						"MODEL" => 'CourseReg',
						"AS" => 'courses',
						"SORT" => [   
						  "ORDER_BY" => "id",
						  "DESC" => false
						]
					]
				]);


				
		   	 $res->render("course_reg", 
		        [
					"title" =>"Course Registeration",
					"courses" => $this->Course->findAllWhere(),
					"user" => $user
		        ]);			
		};
	}


	
	public function ForensicHome() {
		return function ($req, $res) {
		   	 $res->render("forensic_login", 
		        [
		            "title"=>"FORENSIC LOGIN"
		        ]);			
		};
	}

	public function ForensicLog() {
		return function ($req, $res) {
			$logs = $this->ForensicData->findAllWhere();

			
			foreach($logs as $key => $log) {
				echo "> Log: ". date("Y-m-d H:ia",$log['createdAt']);
				echo "<br>";
				echo $log['message'];
				echo "<br>";
				echo "<br>";
				echo "<br>";
			}
			
			
		};
	}

	
}

?>