<!doctype html>
<html lang="en">

<head>
  <title>Registration Page</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- main css -->
  <link rel="stylesheet" href="/assets/css/main.css">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;900&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/busy-load/dist/app.min.css" rel="stylesheet"> 
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg">
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
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            About Us
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Academic
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Admission
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Student
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link btn btn-outline-secondary" href="login.html">Login</a>
        </li>
    </div>
  </nav>
  <form action="" class="container regForm py-2 ">
    <div class="text-center py-5">
      <h2 class="py-1">Registration</h2>
      <div class="mx-auto heading-line"></div>
    </div>

    <div class="row">
      <div class="form-group col-md-12">
        <label for="surname">Email</label>
        <input type="text" name="email" class="form-control" placeholder="Email">
      </div>
    </div>

    <div class="row d-flex">
<!--       <div class="form-group col-md-6">
        <label for="ids">ID</label>
        <input type="text" class="form-control" placeholder="">
      </div> -->
      <div class="form-group col-md-12">
        <label for="type">Type </label>
        <select name="type" class="form-control" id="type">
          <option value="student">Student</option>
          <option value="staff">Staff</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="form-group col-md-12">
        <label for="surname">Surname</label>
        <input type="text" name="surname" class="form-control" placeholder="Enter Surname...">
      </div>
    </div>
    <div class="row">
      <div class="form-group col-md-12">
        <label for="fname">First Name</label>
        <input type="text" name="firstName" class="form-control" placeholder="Enter First name...">
      </div>
    </div>
    <div class="row">
      <div class="form-group col-md-12">
        <label for="mname">Other Names</label>
        <input type="text" name="otherName" class="form-control" placeholder="Enter Middle name...">
      </div>
    </div>
    <div class="row">


      <div class="form-group col-md-12">
        <label for="phonenum">Phone No</label>
        <input type="tel" name="phone" class="form-control" placeholder="Enter Phone No...">
      </div>
    </div>
    <div class="row">
      <div class="form-group col-md-6">
        <label for="type">Birth Date </label>
        <input type="date" name="dob" class="form-control">
      </div>
      <div class="form-group col-md-6">
        <label for="gender">Sex </label>
        <select name="sex" class="form-control" id="gender">
          <option value="">Choose sex</option>
          <option value="male">Male</option>
          <option value="female">Female</option>
        </select>
      </div>
      <div class="form-group col-md-6">
        <label for="type">Department </label>
        <select name="department" class="form-control" id="type">
          <?php foreach ($departments as $key => $dpt) {?>
            <option value="<?=$dpt['id']?>"><?=$dpt['name']?></option>
          <?php }?> 
        </select>
      </div>
   <!--    <div class="form-group col-md-6">
        <label for="type">School </label>
        <select name="" class="form-control" id="type">
          <option value="">Science & Technology</option>
          <option value="">Humanites and Social Management Scienceas</option>
          <option value="">Law</option>
        </select>
      </div> -->

      <div class="class-form-group col-md-12">
        <label for="address">Address</label>
        <textarea name="address" class="form-control" rows="5" placeholder="Enter Address..."></textarea>
      </div>
    </div>

    <div class="row">
    <!--   <div class="col-sm-6 pt-5" align="center">
        <div class="photo_wrapper">
          <img src="/assets/images/default-profile.jpg" width="100%" id="uploadPreview">
        </div>
        <label id="camera_btn" class="camera_btn" for="fileToUpload" onselect="changeColor()">
          <span class="fa fa-camera"><span />
        </label>
        <input type="file" name="fileToUpload" onchange="PreviewImage();" id="fileToUpload" style="display: none"
          required>
      </div> -->

    </div>


    <div class="row">

      <div class="form-group col-md-12">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control" placeholder="Password">
      </div>


      <div class="form-group col-md-12">
        <label for="confirm_password">Confirm Password</label>
        <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password">
      </div>

    </div>  

    <div class="submit py-2">
      <button type="button" onclick="submitForm()" class="btn btn-lg btn-primary">Sign up</button>
      <!-- <button type="submit" class="btn btn-lg btn-outline-primary">Update</button> -->
    </div>

  </form>

  <!-- footer -->
  <footer class="footer">
    <div class="copyright text-center py-3 border-top text-muted mt-5">
      <p>Made by IGALANUGOR &copy; 2020</p>
    </div>
  </footer>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" integrity="sha512-3P8rXCuGJdNZOnUx/03c1jOTnMn3rP63nBip5gOP2qmUh5YAdVAvFZ1E+QLZZbC1rtMrQb+mah3AfYW11RUrWA==" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/busy-load/dist/app.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.js"></script>

    <script src="/assets/js/script.js"></script>
</body>


<script>
// registeration form
function submitForm () {
 
        let form = $('form')[0]; 
        let formData = new FormData(form);
        console.log(formData);



        $.ajax({          
          url: "/api/member/create",
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
                          $(".slider_area").busyLoad("show", {
                            background: "rgba(0, 105, 179, 0.99)",
                            spinner: "cubes",
                            animation: "slide",
                            text : "Registeration successful",
                            textPosition:"bottom",
                            textMargin: "3rem"
                          });  
                    }, 500);



                      setTimeout(()=> {
                            window.location.href = `/login?r=1`;
                        }, 100);                       
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



 </script>

</html>