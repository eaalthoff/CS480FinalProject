<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
  <title>Gallery Inquiry Sent</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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
                <li class="nav-item active">
                    <a class="nav-link" href="480FinalProject_ContactUs.php">Contact Us <span class="sr-only">(current)</span></a>
                </li>
<!--This php tag needs to not be tabbed out for the session to work-->
<?php
ob_start();
session_start();
if (!isset($_SESSION['loggedin'])) {
  echo "<li class='nav-item'>";
    echo '<a class="nav-link" href="480FinalProject_LogIn.php">Log In</a>';
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
              </li>
            </ul>
        </div>
    </nav>
</header>
  <main role="main">
    <div class="container marketing">
      <!-- Section: Contact v.3 -->
      <section class="contact-section my-5">

        <!-- Form with header -->
        <div class="card">

          <!-- Grid row -->
          <div class="form-row">

            <!-- Grid column -->
            <div class="col-lg-8">

              <div class="card-body form">

                <!-- Header -->
                <h3 class="mt-4"><i class="fas fa-envelope pr-2"></i>Thank you for submitting the form.</h3>
                <br>
                <h4>A customer representative will be with you shortly.
                  In the meantime contact us with any questions or concerns.
                </h4>

                <!-- Grid row -->
                <div class="row">

                  

                </div>
                <!-- Grid row -->
                <div class="row">
                  <div class="col-md-12">
                  <div class="md-form mb-0">
                  </div>
                  </div>
                </div>
                <div class="row">
                </div>

              </div>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-lg-4">

              <div class="card-body contact text-center h-100 white-text" style="background-color: #e9ecef;">

                <h3 class="my-4 pb-2">Contact information</h3>
                <ul class="text-lg-left list-unstyled ml-4">
                  <li>
                    <p><i class="fas fa-map-marker-alt pr-2"></i>New York, 94126, USA</p>
                  </li>
                  <li>
                    <p><i class="fas fa-phone pr-2"></i>+ 01 234 567 89</p>
                  </li>
                  <li>
                    <p><i class="fas fa-envelope pr-2"></i>2021artgalleryonline@gmail.com</p>
                  </li>
                </ul>
                <hr class="hr-light my-4">
                <ul class="list-inline text-center list-unstyled">
                  <li class="list-inline-item">
                    <a class="p-2 fa-lg tw-ic">
                      <i class="fab fa-twitter"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a class="p-2 fa-lg li-ic">
                      <i class="fab fa-linkedin-in"> </i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a class="p-2 fa-lg ins-ic">
                      <i class="fab fa-instagram"> </i>
                    </a>
                  </li>
                </ul>

              </div>

            </div>
            <!-- Grid column -->

          </div>
          <!-- Grid row -->

        </div>
        <!-- Form with header -->

      </section>
      <!-- Section: Contact v.3 -->
    </div>
    <!--Modal pop-up-->
    <div class="modal fade" id="contactConfirmModal" tabindex="-1" role="dialog" aria-labelledby="contactConfirmModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Thank you for your submission.</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>Your message has been received. A representative will be in contact with you shortly.</p>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
  integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
  integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
  integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!--PHP SECTION FOR EDITING DB-->
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

    //take the values in the form on Admin page
    $customerID = rand(1,100000); //THIS IS TEMP. We need to generate a customerID every run, but I don't know how yet
    $fName = $_REQUEST['fNameInput'];
    $lName = $_REQUEST['lNameInput'];
    $phoneNumber = $_REQUEST['phoneInput'];
    $title = $_REQUEST['titleInput'];
    $customerMessage = $_REQUEST['customerMessageInput'];

    //insert data into table
   $sql = "INSERT INTO customer VALUES ('$customerID',
                                        '$fName',
                                        '$lName',
                                        '$phoneNumber', 
                                        '$title',
                                        '$customerMessage')";

if(mysqli_query($conn, $sql)){
    echo "<br><center><h4>Data stored in customer table successfully.</h4></center>";
} else{
    echo "ERROR: Sorry $sql. " 
        . mysqli_error($conn);
}
    $conn->close();
?>





</body>

</html>