<!doctype html>
<?php
ob_start();
session_start();
?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/album/">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <script>
       //regex email
       function checkEmail() {
        var RegExp = /[a-zA-Z_\-]+@(([a-zA-Z_\-])+\.)+[a-zA-Z]{2,4}/;
        var emailInput = document.getElementById("username").value;
        var errorSpan = document.getElementById("urlError");
        if(!RegExp.test(emailInput)) {
            errorSpan.innerHTML = "<br>Error: Please enter the email in yourEmail@example.something format"
        } else {
            console.log("submitted");
            errorSpan.innerHTML = "";
        }
    }

     //regex password strength
     function checkPassStrength() {
        var RegExp = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{11,}$/;
        var passInput = document.getElementById("password2").value;
        var errorSpan = document.getElementById("passwordStrengthError");
        if(!RegExp.test(passInput)) {
            errorSpan.innerHTML = "<br>Enter a password at least 11 characters including at least 1 capital letter and one number"
        } else {
            console.log("submitted");
            errorSpan.innerHTML = "";
        }
    }

    //password matching - jquery
     
        $(document).ready(function () {
        $("#password, #confirm_password").keyup(validatePass);
        function validatePass() {
        var password = $("#password2").val();
        var confirmPassword = $("#password").val();

        if (password != confirmPassword) $("#passwordValidError").html("Passwords do not match");
        else {
          $("#passwordValid").html("Passwords match");
          $("#passwordValidError").html("");
        }
        //$("#passwordValidError").css("color": "green");
        }
});
  
    </script>

    <style>
      .error {
            color: red;
        }
        .valid {
            color: green;
        }
    </style>

   
    <title>Account Creation</title>
</head>

<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="480FinalProject_HomeBoot.php">Gallery</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="480FinalProject_HomeBoot.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="480FinalProject_About.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="480FinalProject_ContactUs.php">Contact Us</a>
                </li>
<?php
if (!isset($_SESSION['loggedin'])) {
  echo "<li class='nav-item active'>";
    echo '<a class="nav-link" href="480FinalProject_LogIn.php">Log In<span class="sr-only">(current)</span></a>';
echo '</li>';
}
else{
  header("Location: 480FinalProject_HomeBoot.php");
  exit;
}
?>
            </ul>
        </div>
    </nav>
</header>
    <main>
    <div class="album py-5 bg-light">
    <div class="container">




<!--Log In form content-->
<section class="vh-100">
  <div class="container-fluid">
    <div class="row">
      <div class="col text-black">

        <div class="px-5 ms-xl-4">
          <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
        </div>

        <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">


        <!--Create an account form-->
          <form action="480FinalProject_CreateAccountACK.php" method="post" style="width: 23rem;">

            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;"> Create an account</h3>

            <div class="form-outline mb-4">
              <input type="email" id="username" name="username" class="form-control form-control-lg" onkeyup="checkEmail()" name="uname" />
              <label class="form-label">Email Address</label>
              <span class='error' id='urlError'></span>
            </div>
            <div class="form-outline mb-4">
              <input type="text" id="name" name="name" class="form-control form-control-lg" name="name"/>
              <label class="form-label">Full Name</label>
            </div>

            <div class="form-outline mb-4">
              <input type="password" id="password2" name="password2" class="form-control form-control-lg" name="password" onkeyup="checkPassStrength()"/>
              <label class="form-label">Choose a strong password</label>
              <span class='error' id='passwordStrengthError'></span><span class='valid' id='passwordStrengthValid'></span>
            </div>

            <div class="form-outline mb-4">
              <input type="password" id="password" name="password" class="form-control form-control-lg" name="password"/>
              <label class="form-label">Type your password again</label>
              <span class='error' id='passwordValidError'></span><span class='valid' id='passwordValid'></span>
            </div>

            <div class="pt-1 mb-4">
              <button class="btn btn-info btn-lg btn-block" type="submit">Create account</button>
            </div>

          </form>

        </div>

      </div>
      <div id="imgdiv" class="col px-0 d-none d-lg-block">
        <img id="logimg" src="Images/abstract.jpg" alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
      </div>
    </div>
  </div>
  </div>
  </div>
</section>


</main>
</body>
</html> 