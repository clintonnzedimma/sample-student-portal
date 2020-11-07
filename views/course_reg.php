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
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.css">
</head>
<style>
input[type=checkbox]{
    transform: scale(2.0);
}

.input-label {
    margin-left:3.5rem
}

</style>
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
        </div>
    </nav>

    <div style="margin-top:20px">

    <div class="text-center py-5">
            <h2 class="py-1">Register your courses</h2>
    </div> 

    <form action="" class="container">
        <div class="form-group col-lg-5">
            <label for="exampleFormControlInput1">Full Name</label>
            <input class="form-control" value="<?=$user['surname']?> <?=$user['firstName']?> <?=$user['otherName']?>" id="exampleFormControlInput1" placeholder="name@example.com" disabled>
        </div>   
    </form>   
        <form action="" class="container" id="mainForm">

        <div class="form-group col-lg-5">
            <label for="exampleFormControlInput1">Session</label>
            <input class="form-control" name="session" value="2020/2021" id="exampleFormControlInput1" placeholder="name@example.com" readonly>
        </div>  
        <div class="form-group col-lg-5">
            <label for="exampleFormControlSelect1">Semester</label>
            <select name="semester" class="form-control" id="exampleFormControlSelect1">
                <option value="first">First</option>
                <option value="second">Second</option>
            </select>
        </div>        
        <?php foreach ($courses as $key => $course): ?>
            <div class="fieldset">
                
                <div class="custom-control form-control-lg custom-checkbox">
                    <input onclick="checkboxCtx(this)" class="checkbox" id="course-<?=$course['id']?>" type="checkbox" unit="<?=$course['units']?>" name="courseId[]" value="<?=$course['id']?>" />
                    <label class="input-label"  for="course-<?=$course['id']?>"><?=$course['title']?> (<?=$course['units']?> unit)</label>
                    
            </div>

            <?php endforeach ?>

            <input value="<?=$user['id']?>"  name="memberId" hidden/>

            <div align="right">
               <h3> <b>Total units </b> : <span id="totalUnits">0</span> </h3>
            </div>
            <div class="login text-center py-4">
                <button type="button" onclick="submitForm()" class="btn btn-lg btn-outline-primary">Register</button>
            </div>
        </form>

    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" integrity="sha512-3P8rXCuGJdNZOnUx/03c1jOTnMn3rP63nBip5gOP2qmUh5YAdVAvFZ1E+QLZZbC1rtMrQb+mah3AfYW11RUrWA==" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
     
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.js"></script>  

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.9.0/dist/sweetalert2.all.min.js"> </script>
</body>


<script>
var totalUnits = 0;

var minUnits = 8;

var maxUnits = 10;


function checkboxCtx(checkbox) {
    let unit = parseInt(checkbox.getAttribute("unit"));
    
    if(checkbox.checked) {
        totalUnits += unit;
    }else {
        totalUnits -= unit;
    }
    $("#totalUnits").html(totalUnits);
    console.log(totalUnits);
}

function submitForm () {
 
 let form = $('#mainForm')[0]; 
 let formData = new FormData(form);
 console.log(formData);

 let err = null;

 if(totalUnits < minUnits) {
    err = `You can not register less than ${minUnits} units of courses`;
 }

 if(totalUnits > maxUnits) {
    err = `You can not register more than ${maxUnits} units of courses`;
 }


 if(err) {
    $.toast({
        text: `<h6>${err}</h6>`,
        showHideTransition: 'fade',
        icon: 'error',
        position: "top-right",
        loader:false
    });
    
    throw new Error(err);
 }

 $.ajax({          
   url: "/api/course/register",
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
    'Please upload your passport photograph',
    'question'
  )
<?php endif ?>  

</script>
</html>