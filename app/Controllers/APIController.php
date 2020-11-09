<?php  
/**
 * A sample Controller class
 */
namespace App\Controllers;
use Woski\Controller\WoskiController;
use Rakit\Validation\Validator;

class APIController extends BaseController
{	

	public function test() {
		return function ($req, $res) {
		   	 $res->render("index", 
		        [
		            "title"=>"Woski PHP"
		        ]);			
		};
    }


    public function registerMember() {
        return function ($req, $res) {
            $validator = new Validator;

            $validation = $validator->make($_POST + $_FILES, [
                "email" => 'required|email',
                "surname" => 'required',
                'firstName' => 'required',
                'otherName' => "required",
                "phone" => "required:numeric", 
                "dob" => "required", 
                'sex' => "required",
                'department' => "required",
                "address" => "required", 
                "type" => "required",
                'password'  => 'required|min:5',
                'confirm_password' => 'required|same:password',
            ]);
            

            $validation->setAliases([
                'firstName' => 'First Name',
                'email' => 'Email',
                'surname' => "Surname",
                'otherName' => "Other Names",
                'phone' => "Phone Number",
                'sex' => "Sex",
                'department' => 'Department',
                "address" => "Address",
                "type" => "Membership Type",
                "dob" => "Date of Birth",
                "password" => "Password",
                "confirm_password" => "Confirm Password"
            ]);


                // now you can set aliases using this way:
                $validation->validate();



                if ($validation->fails()) {
                     $errors = $validation->errors();

                    foreach($errors->firstOfAll() as $key => $err) {
                       $res->json(["message" => $err, "status" => false]);
                        return;
                    }
                } else {
                    $query = $this->Member->create([
                        "id" => NULL,
                        "email" => $_POST['email'],
                        "surname" => $_POST['surname'],
                        'firstName' => $_POST['firstName'],
                        'otherName' => $_POST['otherName'],
                        "phone" => $_POST['phone'], 
                        "dob" => $_POST['dob'], 
                        'sex' => $_POST['sex'],
                        'deptId' => $_POST['department'],
                        "address" => $_POST['address'], 
                        "type" => $_POST['type'],
                        'password'  => password_hash($_POST['password'], PASSWORD_DEFAULT)
                    ]);
                    
                    if($query) {
                        // log forensic
                        $this->ForensicData->create([
                            "id" => NULL,
                            "message"=>  $_POST['firstName']." ".$_POST['surname']." just registered as a ".$_POST['type'],
                            "type" => "MEMBER_REGISTERATION",
                            "createdAt" => time()
                        ]);

                         return $res->json(["message" => "Registeration successful", "status" => true]);
                    }
                   
                }
            }; 
    }




    public function loginMember() {
        return function ($req, $res) { 
            $validator = new Validator;

            $validation = $validator->make($_POST + $_FILES, [
                "email" => 'required|email',
                'password'  => 'required|min:5',
            ]);
            
            
            $validation->setAliases([
                'email' => 'Email',
                "password" => "Password",
            ]);
            
            
                
                $validation->validate();
            
                if ($validation->fails()) {
                    $errors = $validation->errors();
            
                    foreach($errors->firstOfAll() as $key => $err) {
                     $res->json(["message" => $err, "status" => false]);
                        return;
                    }
                }
            
                
                
                $member = $this->Member->findOneWhere(
                    [
                        "email" => $_POST['email']
                    ]
                );
            
            
                if(count($member) ==  0) {
                    return $res->json(["message" => "User doesnt exists", "status" => false]);
                }
            
                if(password_verify($_POST['password'],$member['password'] )) {
                    
                    // assigning session
                    $_SESSION['email'] = $member['email'];
                    $res->json(["message" => "Login Successful", "status" => true]);
                } else {
                    // log forensic
                    $this->ForensicData->create([
                        "id" => NULL,
                        "message"=> "Attempted but failed login on user ".$member['email'].".",
                        "type" => "FAILED_LOGIN",
                        "createdAt" => time()
                    ]);

                    return$res->json(["message" => "Wrong password", "status" => false]);
                }
        };     
     }


     public function registerCourse() {
		return function ($req, $res) {

            $member = $this->Member->findOneWhere(
                [
                    "id" => $_POST['memberId']
                ]);

            $count_query = 0;
            foreach ($_POST['courseId'] as $courseId) {
                $course = $this->Course->findOneWhere(["id"=>$courseId]);

                $query = $this->CourseReg->create([
                        "units" => $course['units'],
                        "courseId" => $course['id'],
                        "courseTitle" =>  $course['title'],
                        "memberId" => $_POST['memberId'],
                        "session" => $_POST['session'],
                        "semester" => $_POST['memberId'],
                ]);

                if($query) $count_query ++; 
            }

           if($count_query == count($_POST['courseId']) ){
                    // log forensic
                    $this->ForensicData->create([
                        "id" => NULL,
                        "message"=> $member['firstName']. " ".$member['surname']." just registered courses",
                        "type" => "COURSE_REGISTERATION",
                        "createdAt" => time()
                    ]);


                $res->json(["message" => "All selected courses registered successfully", "status" => true ]);
           }
		};
    }


    public function uploadPassport() {
        return function ($req, $res) { 
            $upload = new \App\Helpers\Upload("image","passport_photo", 2);

            $validator = new Validator;

            $validation = $validator->make($_POST + $_FILES, [
                'passport_photo'=> 'required|uploaded_file:0,500K,png,jpeg',
            ]);
            
            
            $validation->setAliases([
                'passport_photo' => 'Passport',
            ]);
            
            
                
                $validation->validate();
            
                if ($validation->fails()) {
                    $errors = $validation->errors();
            
                    foreach($errors->firstOfAll() as $key => $err) {
                     $res->json(["message" => $err, "status" => false]);
                     return;
                    }
                }
            

                $upload->pushImageTo(ROOT."/assets/uploads");

                try {
                   unlink(ROOT."/assets/uploads/".$_POST['old_passport']);
                } catch (\Exception $e) {
                }

                $query = $this->Member->update( [
                    "passport" => $upload->data['new_file_name'],
                ],
                [
                    "WHERE" => [
                        "email" => $_SESSION['email']
                    ]
                ]
                );
                $res->json(
                    [
                        "message" => "Passport uploaded", "status" =>  true
                    ]);
                
 
        };     
     } 
     
     public function forensicLogin() {
		return function ($req, $res) {
            if($_POST['username'] == "admin" && $_POST['password'] == "123") {
                $res->json(
                    [
                        "message" => "Login successful", "status" =>  true
                    ]);
            }else {
                $res->json(
                    [
                        "message" => "Login failed", "status" =>  false
                    ]);
            }
		};
    }     
}