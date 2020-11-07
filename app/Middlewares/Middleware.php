<?php  
/**
 * A sample Controller class
 */
namespace App\Middlewares;
use Woski\Controller\WoskiController;

class Middleware extends WoskiController
{

    public function authStudent() {
		return function ($req, $res, $pipe) {
               if(!isset($_SESSION['email'])) {
				   header("Location:/login");
                   return $pipe->block();
               }

		};
	}


	public function autoLogin() {
		return function ($req, $res, $pipe) {
			   if(isset($_SESSION['email'])) {
				   header("Location:/portal/home");
				   return $pipe->block();
			   }
	
		};
	}


	
	public function logout() {
		return function ($req, $res, $pipe) {
				   session_destroy();
				   header("Location:/login?o");
				   return $pipe->block();
			   
	
		};
	}


}