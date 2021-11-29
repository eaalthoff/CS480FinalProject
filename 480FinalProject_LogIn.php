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
        var emailInput = document.getElementById("emailInput").value;
        var errorSpan = document.getElementById("urlError");
        if(!RegExp.test(emailInput)) {
            errorSpan.innerHTML = "<br>Error: Please enter the email in yourEmail@example.something format"
        } else {
            console.log("submitted");
            errorSpan.innerHTML = "";
        }
    }


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
                <li class="nav-item">
                    <a class="nav-link" href="480FinalProject_HomeBoot.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="480FinalProject_About.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="480FinalProject_ContactUs.php">Contact Us</a>
                </li>
<!--The php tags need to not be tabbed out for the session to work-->
<?php
ob_start();
session_start();
if (!isset($_SESSION['loggedin'])) {
  echo "<li class='nav-item active'>";
    echo '<a class="nav-link" href="480FinalProject_LogIn.php">Log In<span class="sr-only">(current)</span></a>';
echo '</li>';
}
else{
  echo '<li class="nav-item">';
  echo '<a class="nav-link" href="480FinalProject_Admin.php">Admin</a>';
echo '</li>';
  echo "<li class='nav-item'>";
    echo '<a class="nav-link" href="480FinalProject_LogOut.php">Log Out</a>';
echo '</li>';
}
?>
            </ul>
        </div>
    </nav>
</header>
    <main role="main">
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

          <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" style="width: 23rem;">

            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in</h3>

            <div class="form-outline mb-4">
              <input type="email" id="emailInput" class="form-control form-control-lg" onkeyup="checkEmail()" name="uname" />
              <label class="form-label" for="form2Example18">Email address</label>
              <span class='error' id='urlError'></span>
            </div>

            <div class="form-outline mb-4">
              <input type="password" id="form2Example28" class="form-control form-control-lg" name="password"/>
              <label class="form-label" for="form2Example28">Password</label>
            </div>

            <div class="pt-1 mb-4">
              <button class="btn btn-info btn-lg btn-block" name="submit" type="submit" value="Submit Form">Login</button>
            </div>

            <p>Don't have an account? <a href="480FinalProject_CreateAccount.php" class="link-info">Register here</a></p>

            </form>
      </div>
<?php
if(isset($_POST['submit'])){
    //session_start();
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'artgallery2021';

    $con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
    if ( mysqli_connect_errno() ) {
      exit('Failed to connect to MySQL: ' . mysqli_connect_error());
    }
    if ( !isset($_POST['uname'], $_POST['password']) ) {
      exit('<div style="width: 23rem;" class="pt-1 mb-4"><p class="error">Please fill both the username and password fields!</p></div>');
    }
    if ($stmt = $con->prepare('SELECT username, password, id FROM registration WHERE username = ?')) {
      $stmt->bind_param('s', $_POST['uname']);
      $stmt->execute();
      $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($id, $password);
            $stmt->fetch();
            if ($_POST['password'] === $password) {
                session_regenerate_id();
                $_SESSION['loggedin'] = TRUE;
                $_SESSION['name'] = $_POST['uname'];
                $_SESSION['id'] = $id;
                header("Location: 480FinalProject_LogInACK.php");
            } else {
                echo '<div style="width: 23rem;" class="pt-1 mb-4"><p class="error">Incorrect username and/or password!</p></div>';
            }
        } else {
            echo '<div style="width: 23rem;" class="pt-1 mb-4"><p class="error">Incorrect username and/or password!</p></div>';
        }
      $stmt->close();
  }
}
          ?>
        </div>
      <div id="imgdiv" class="col px-0 d-none d-lg-block">
        <img id="logimg" src="Images/abstract.jpg" alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
      </div>
    </div>
  </div>
</section>
</main>
</body>
</html> 