<!doctype html>
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
        var emailInput = document.getElementById("userEmailInput").value;
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
        var passInput = document.getElementById("userPass").value;
        var errorSpan = document.getElementById("passwordStrengthError");
        if(!RegExp.test(passInput)) {
            errorSpan.innerHTML = "<br>Enter a password at least 11 characters including at least 1 capital letter and one number"
        } else {
            console.log("submitted");
            errorSpan.innerHTML = "";
        }
    }

    //password matching - jquery
     function validatePass() {
        var password = $("#userPass").val();
        var confirmPassword = $("#userPass2").val();

        if (password != confirmPassword) $("#passwordValidError").html("Passwords do not match");
        else $("#passwordValidError").html("Passwords match");
        //$("#passwordValidError").css("color": "green");
        }
        $(document).ready(function () {
        $("#password, #confirm_password").keydown(validatePass);
});
  
    </script>

    <style>
      .error {
            color: red;
        }
    </style>

   
    <title>Gallery w/ Bootstrap</title>
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
                <li class="nav-item active">
                    <a class="nav-link" href="480FinalProject_HomeBoot.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="480FinalProject_About.html">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="480FinalProject_ContactUs.php">Contact Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="480FinalProject_Admin.php">Admin</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="480FinalProject_LogIn.php">Log In</a>
              </li>
            </ul>
        </div>
    </nav>
</header>
    <main role="main">
    <div class="album py-5 bg-light">
    <div class="container">

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "artgallery2021";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    //echo "Connected successfully<br>";
    
    $conn->close();
?>




<!--Log In form content-->
<section class="vh-100">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 text-black">

        <div class="px-5 ms-xl-4">
          <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
        </div>

        <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">


        <!--Create an account form-->
          <form action="480FinalProject_CreateAccountACK.php" method="post" style="width: 23rem;">

            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;"> Create an account</h3>

            <div class="form-outline mb-4">
              <input type="email" id="userEmailInput" class="form-control form-control-lg" onkeydown="checkEmail()" name="uname" />
              <label class="form-label">Add your Email address</label>
              <span class='error' id='urlError'></span>
            </div>

            <div class="form-outline mb-4">
              <input type="password" id="userPass" class="form-control form-control-lg" name="password" onkeydown="checkPassStrength()"/>
              <label class="form-label">Choose a strong password</label>
              <span class='error' id='passwordStrengthError'></span>
            </div>

            <div class="form-outline mb-4">
              <input type="password" id="userPass2" class="form-control form-control-lg" name="password" onkeydown="validatePass()"/>
              <label class="form-label">Type your password again</label>
              <span class='error' id='passwordValidError'></span>
            </div>

            <div class="pt-1 mb-4">
              <button class="btn btn-info btn-lg btn-block" type="submit">Create account</button>
            </div>

          </form>

        </div>

      </div>
      <div class="col-sm-6 px-0 d-none d-sm-block">
        <img src="Images/abstract.jpg" alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
      </div>
    </div>
  </div>
</section>


</main>
</body>
</html> 