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

    <title>Account Created</title>
</head>

<body>
    <header>
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
    $ID = rand(1,10000000); //temporary until I can figure out how to assign consecutively
    $username = $_REQUEST['username'];
    $name =$_REQUEST['name'];
    $password = $_REQUEST['password'];
 
//get values from registration form


//insert registration information into table
$sql = "INSERT INTO registration VALUES ('$ID',
                                        '$username',
                                        '$name', 
                                        '$password')";


if(mysqli_query($conn, $sql)){
  $regMess= "Registration successful. ";
  //ob_start();
  //session_start();
  $sql="SELECT id FROM registration WHERE username = '$username' ";
  if(mysqli_query($conn, $sql)){
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    session_regenerate_id();
    $_SESSION['loggedin'] = TRUE;
    $_SESSION['name'] = $_REQUEST['username'];
    $_SESSION['id'] = $row['id'];
    $loginMessage= 'Welcome ' . $_SESSION['name'] . '! You are now signed in.';
  }
  else{
    echo "ERROR: Sorry $sql. " 
        . mysqli_error($conn);
  }
} else{
  echo "ERROR: Sorry $sql. " 
      . mysqli_error($conn);
}
    $conn->close();
?>
<script>
$(document).ready(function () {
        var register ='<?php echo $regMess?>';
        var login ='<?php echo $loginMessage?>';
        $("#regMessage").html('<?php echo $regMess?>');
        $("#loginInfo").html('<?php echo $loginMessage?>');
});


  </script>
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
//session_start();
if (!isset($_SESSION['loggedin'])) {
  header("Location: 480FinalProject_LogIn.php");
  exit;
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
          <h1>Thank you for creating an account with us!</h1>
        </div>
        <div id="regMessage" class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5">
        </div>
        <div id="loginInfo" class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5">
        </div>
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