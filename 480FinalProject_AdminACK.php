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

    <style>
        .table {
            width: 50%;
        }

        .form {
            width: 50%;
        }

    
        

    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $(document).ready(function(){
            $(".galImage").hover(function(){
                $(this).css("opacity", ".5");
            }, function(){
                $(this).css("opacity", "1");
            });
            $(".galImage").click(function(){
                $('#bigImage').attr('src', $(this).attr('src'));
                $('#imagemodal').modal('show');   
            });
        });
    </script>
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
                    <a class="nav-link" href="480FinalProject_About.html">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="480FinalProject_ContactUs.php">Contact Us</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="480FinalProject_Admin.php">Admin <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="480FinalProject_LogIn.php">Log In</a>
              </li>
            </ul>
        </div>
    </nav>
</header>
    <main role="main">
        <center>
        <h2>Administrative Access Portal</h2>
      
      <h3> Your request has been received. Contact the administrator for verification and questions. </h3>   
    </main>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

        

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
    //PHP $_REQUEST is a PHP super global variable which is used to collect data after submitting an HTML form.
    $title = $_REQUEST['title'];
    $titleID = rand(1,10000000); //$_REQUEST['titleID'] later...
    $artistID = $_REQUEST['artistID']; //need to get artistID value from form, use 'value'?
    $url = $_REQUEST['url'];
    $medium = $_REQUEST['medium'];
    $price = $_REQUEST['price'];
    $year = $_REQUEST['year'];

    //insert data into table
    $sql = "INSERT INTO artwork VALUES ('$titleID',
                                        '$title',
                                        '$artistID', 
                                        '$url',
                                        '$medium',
                                        '$price',
                                        '$year')";

if(mysqli_query($conn, $sql)){
    echo "<br><center><h4>Data stored in a artwork table successfully.</h4></center>";
    echo "<br><center><h4>Data stored in Artwork: </h4></center>";
   // echo nl2br("<center><h4> \n$title\n $titleID\n $artistID\n $medium\n $price \n$year \n$url </h4></center>");
} else{
    echo "ERROR: Sorry $sql. " 
        . mysqli_error($conn);
}
    $conn->close();
?>

</body>

</html> 