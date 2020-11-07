<!doctype html>
<html lang="en">

<head>
    <title><?=$title?></title>
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
                <li class="nav-item dropdown">
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
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                    <a class="nav-link btn btn-outline-secondary" href="registration.html">Register</a>
                </li>
        </div>
    </nav>
    <form action="" class="container">
        <div class="text-center py-5">
            <h2 class="py-1">Login</h2>
            <?php if($r) { ?>
                <div class="alert alert-secondary" role="alert">
                     You have registered, please login
                </div>     
            <?php } ?>   
            <div class="mx-auto heading-line"></div>
        </div>
        <div class="row">
            <div class="form-group col-md-6 offset-md-3">
                <label for="username">Username</label>
                <input type="text" name="email" class="form-control" placeholder="Enter Email">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6 offset-md-3">
                <label for="pwd">Password</label>
                <input type="password" name="password"  class="form-control" placeholder="Enter Password">
            </div>
        </div>
        <div class="row">
           <div class="col-md-6 offset-md-3">
               <a href="/register" class="">Click here to register
               ?</a>
           </div>
        </div>

        <div class="login text-center py-4">
            <button type="button" class="btn btn-lg btn-outline-primary" onclick="submitForm()">Login</button>
        </div>
    </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" integrity="sha512-3P8rXCuGJdNZOnUx/03c1jOTnMn3rP63nBip5gOP2qmUh5YAdVAvFZ1E+QLZZbC1rtMrQb+mah3AfYW11RUrWA==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/busy-load/dist/app.min.js"></script>
        
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.js"></script>
</body>


<script> 
//login form
// registeration form
function submitForm () {
 
 let form = $('form')[0]; 
 let formData = new FormData(form);
 console.log(formData);



 $.ajax({          
   url: "/api/member/login",
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
                     text : "Login successful",
                     textPosition:"bottom",
                     textMargin: "3rem"
                   });  
             }, 500);



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


</script>

</html>