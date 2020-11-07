<!DOCTYPE html>
<html>
<head>
    <title><?=$title?></title>
    
    <link rel="stylesheet" href="https://bootswatch.com/4/simplex/bootstrap.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/busy-load/dist/app.min.css" rel="stylesheet"> 

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.css">
</head>
<body>

<style>
        .image-container {
            position: relative;
        }

        .image {
            opacity: 1;
            display: block;
            width: 100%;
            height: auto;
            transition: .5s ease;
            backface-visibility: hidden;
        }

        .middle {
            transition: .5s ease;
            opacity: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            text-align: center;
        }

        .image-container:hover .image {
            opacity: 0.3;
        }

        .image-container:hover .middle {
            opacity: 1;
        }
 </style>

<nav class="navbar navbar-expand-lg ">
        <a class="navbar-brand" href="#"><img class="img-fluid" src="/assets/images/edwinclark.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
<!--                 <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        About Us
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li> -->
<!--                 <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Academic
                    </a>
                </li> -->
        </div>
    </nav>

<div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-body">
                        <div class="card-title mb-4">
                            <div class="d-flex justify-content-start">
                                <div class="image-container">
                                   
                                    <?php if ($user['passport']): ?>
                                        <img src="/assets/uploads/<?=$user['passport']?>" id="imgProfile" style="width: 150px; height: 150px" class="img-thumbnail" />
                                    <?php else: ?>
                                        <img src="http://placehold.it/150x150" id="imgProfile" style="width: 150px; height: 150px" class="img-thumbnail" />
                                    <?php endif ?>
                                    
                                    <div class="middle">
                                       <form id="passport">
                                           <input name="old_passport" value="<?=$user['passport']?>" hidden> 
                                        <input type="button"
                                        class="btn btn-secondary" id="btnChangePicture" value="Change" />
                                        <input  name="passport_photo" type="file" style="display: none;" id="profilePicture" name="file" />
                                       </form>
                                    </div>
                                </div>
                                <div class="userData ml-3">
                                    <h2 class="d-block" style="font-size: 1.5rem; font-weight: bold"><a href="javascript:void(0);"><?=$user['surname']?> <?=$user['firstName']?>  <?=$user['otherName']?></a></h2>
                                    <h6 class="d-block"><?=ucwords($user['type'])?></h6>

                                    <br>

                                    <b class="d-block"><?=ucwords($user['sex'])?></b>
                                    
                                </div>
                                <div class="ml-auto">
                                    <input type="button" class="btn btn-primary d-none" id="btnDiscard" value="Discard Changes" />


                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="basicInfo-tab" data-toggle="tab" href="#basicInfo" role="tab" aria-controls="basicInfo" aria-selected="true"><?=ucwords($user['type'])?> Info</a>
                                    </li>
                                <?php if($user['type'] == 'student') {?> 
                                    <li class="nav-item">
                                        <a class="nav-link" id="coursesContent-tab" data-toggle="tab" href="#coursesContent" role="tab" aria-controls="coursesContent" aria-selected="false">Courses</a>
                                    </li>
                                <?php } ?>  
                                </ul>
                                <div class="tab-content ml-1" id="myTabContent">
                                    <div class="tab-pane fade show active" id="basicInfo" role="tabpanel" aria-labelledby="basicInfo-tab">
                                        

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Full Name</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                            <?=$user['surname']?> <?=$user['firstName']?>  <?=$user['otherName']?>
                                            </div>
                                        </div>
                                        <hr />

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Date of Birth</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                            <?=date("d M Y",strtotime($user['dob']))?> 
                                            </div>
                                        </div>
                                        <hr />
                                        
                                        
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Email</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <?=$user['email']?>
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Department</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                               <?=$user_dpt['name'] ?>
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Phone</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <?=$user['phone'] ?>
                                            </div>
                                        </div>
                                        <hr />

                                    <!--     <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Something</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                Something
                                            </div>
                                        </div> -->
                                        <hr />                                                    <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Address</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <?=$user['address'] ?>
                                            </div>
                                        </div>
                                        <hr />                        

                                    </div>
                                    <div class="tab-pane fade" id="coursesContent" role="tabpanel" aria-labelledby="coursesContent-tab">
                                        <?php if (count($user['courses']) == 0 ):?>
                                            <div>
                                                <a href="/portal/course-reg" class="btn btn-warning"> 
                                                REGISTER YOUR COURSES
                                            </a>
                                            </div>

                                            <?php else: ?>
                                    <div class="container">
                                        <div class="row">
                                            <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>Course</th>
                                            <th>Units</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        <?php
                                        $i = 0;
                                        $totalUnits = 0;
                                         foreach ($user['courses'] as $key => $reg_course): ?>
                                               <?php 
                                                $i++;
                                                $totalUnits +=$reg_course['units']
                                                 ?> 
                                            <tr>
                                                <td><?=$i?></td>
                                                <td><?=$reg_course['courseTitle']?></td>
                                                <td><?=$reg_course['units']?></td>
                                            </tr>
                                       <?php endforeach ?>                                        
                                        </tbody>
                                    </table>

                                    <div align="right"><h4> <b>Total units </b> : <span id="totalUnits"><?=$totalUnits?></span> </h4></div>
                                        </div>
                                    </div>  
                                                

                                            <?php endif ?>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div> <h5><a href="/logout">Logout </a></h5></div>                        
                </div>
            </div>
        </div>
    </div>
</body>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://cdn.jsdelivr.net/npm/busy-load/dist/app.min.js"></script>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.js"></script>
<script>
$(document).ready(function () {
            $imgSrc = $('#imgProfile').attr('src');
            function readURL(input) {

                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#imgProfile').attr('src', e.target.result);
                    };

                    reader.readAsDataURL(input.files[0]);
                }
            }
            $('#btnChangePicture').on('click', function () {
                // document.getElementById('profilePicture').click();
                if (!$('#btnChangePicture').hasClass('changing')) {
                    $('#profilePicture').click();
                }
                else {
                    // change
                }
            });
            $('#profilePicture').on('change', function () {
                readURL(this);
                $('#btnChangePicture').addClass('changing');
                $('#btnChangePicture').attr('value', 'Save Passport');
                $('#btnChangePicture').attr('onclick', 'savePassport()');
                $('#btnDiscard').removeClass('d-none');
                $('#savePassport').removeClass('d-none');
                // $('#imgProfile').attr('src', '');
            });
            $('#btnDiscard').on('click', function () {
                // if ($('#btnDiscard').hasClass('d-none')) {
                $('#btnChangePicture').removeClass('changing');
                $('#btnChangePicture').attr('value', 'Change');
                $('#btnChangePicture').attr('onclick', null);
                $('#btnDiscard').addClass('d-none');
                $('#savePassport').addClass('d-none');
                $('#imgProfile').attr('src', $imgSrc);
                $('#profilePicture').val('');
                // }
            });
        });

function savePassport() {

    let form = $('form#passport')[0]; 
    let formData = new FormData(form);
    console.log(formData);


$.ajax({          
   url: "/api/user/change-passport",
   type:"POST",
   data : formData,
   contentType: false,
   processData: false,
   success : function(res) {
     console.log(res);
   
       
         if (res.status == true) {
             $.toast({
                 text: `<h6>${res.message}</h6>`,
                 showHideTransition: 'slide',
                 loader:false,
                 icon: 'success',
                 position: "top-right"
             });




               setTimeout(()=> {
                     window.location.href = `/portal/home`;
                 }, 1500);                       
         }  else {
               $.toast({
                     text: `<h6>${res.message}</h6>`,
                     showHideTransition: 'fade',
                     icon: 'error',
                     position: "top-right",
                     loader:false
                 });  


                 throw new Error(res.message);                          
         }
   }
 });    
}

<?php if (!$user['passport']): ?>
Swal.fire(
    'No passport',
    'Please upload your passport photograph by clicking the default passport',
    'question'
  )
<?php endif ?> 
 </script>
</html>