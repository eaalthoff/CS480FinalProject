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

        .error {
            color: red;
        }
        

    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        //regex year
        function checkYear() {
        var RegExp = /^[12][0-9]{3}$/;
        var yearInput = document.getElementById("year").value;
        var errorSpan = document.getElementById("yearError");
        if(!RegExp.test(yearInput)) {
            errorSpan.innerHTML = "<br>Error: Please use a four digit year from 1000 to 2999"
        } else {
            console.log("submitted");
            errorSpan.innerHTML = "";
        }
    }


        //regex URL
        function checkURL() {
        var RegExp = /^Images\/[a-zA-Z0-9]+\.(jpg|png|jpeg)$/;
        var urlInput = document.getElementById("urlInput").value;
        var errorSpan = document.getElementById("urlError");
        if(!RegExp.test(urlInput)) {
            errorSpan.innerHTML = "<br>Error: Please enter a url in the form Images/yourImageName.jpg"
        } else {
            console.log("submitted");
            errorSpan.innerHTML = "";
        }
    }



    </script>
    <title>Gallery Admin</title>
</head>
<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: 480FinalProject_LogIn.php');
	exit;
}
?>
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
//session_start();
if (!isset($_SESSION['loggedin'])) {
  echo "<li class='nav-item'>";
    echo '<a class="nav-link" href="480FinalProject_LogIn.php">Log In</a>';
echo '</li>';
header("Location: 480FinalProject_LogIn.php");
}
else if(isset($_SESSION['loggedin'])){
  echo '<li class="nav-item active">';
    echo '<a class="nav-link" href="480FinalProject_Admin.php">Admin<span class="sr-only">(current)</span></a>';
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
        <center>
        <h2>Administrative Access Portal</h2>

    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Personnel</th>
      <th scope="col">Permission Allowed</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Client</td>
      <td>View only permission</td>
    </tr>
    <tr>
      <td>Artist</td>
      <td>Add a row into tables permission</td>
    </tr>
    <tr>
      <td>Administrator</td>
      <td>All access in inserting, changing, and editing table structure permissions.</td>
    </tr>
  </tbody>
</table>
    
    <br>
    <!--This form is a work in progress. Right now the data is not being input into the database table accruately.-->
    <form action="480FinalProject_AdminACK.php" method="post" class="form">
        <!--TITLE INPUT-->
        <div class="form-group">
          <label>Title</label>
          <input type="text" name="title" class="form-control" id="title" placeholder="Enter title of artwork">
          <small id="titleHelp" class="form-text text-muted">Add the title of the artwork</small>
        </div>
        <!--ARTIST ID INPUT -- Needs to be a drop down with current artists from DB-->
        <div class="form-group">

         <!--FIX these to be auto run through PHP-->
        <label>Choose the artist</label>

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
        $sql = "SELECT * FROM artist";
        $result = $conn->query($sql);
        if(mysqli_query($conn, $sql)){
          echo "<select name='artistID' class='form-control'>";
          while ($row = $result->fetch_assoc()) {
            echo "<option value='" . $row['artistID'] . "'>" . $row['fName'] . " " . $row['lName'] . "</option>";
          }
          echo "</select>";
      } else{
          echo "ERROR: Sorry $sql. " 
              . mysqli_error($conn);
      }
        ?>
        </div>

        <!--MEDIUM INPUT-->
        <div class="form-group">
          <label>Medium</label>
          <input type="text" name="medium" class="form-control" id="medium" placeholder="Medium of artwork" autocomplete="off">
          <small id="mediumHelp" class="form-text text-muted">Specify the medium of the piece. Ex: painting, photograph, sculpture, etc</small>
        </div>
        <!--PRICE INPUT-->
        <div class="form-group">
            <label>Price</label>
            <input type="number" name="price" class="form-control" id="price" placeholder="Price of artwork" autocomplete="off">
            <small id="priceHelp" class="form-text text-muted">Specify the appropriate price of the piece</small>
          </div>
          <!--YEAR INPUT-->
          <div class="form-group">
            <label>Year</label>
            <input type="number" name="year" class="form-control" id="year" placeholder="Year the artwork was created" onkeyup= "checkYear()" autocomplete="off">
            <span class='error' id='yearError'></span>
            <p></p>
            <small id="yearHelp" class="form-text text-muted">Specify the Year of the piece </small>
          </div>
      <div class="form-group">
          <label>URL</label>
          <input type="text" name="url" class="form-control" id="urlInput" placeholder="Enter the URL of the artwork" onkeyup="checkURL()" autocomplete="off">
          <span class='error' id='urlError'></span>
            <p></p>
          <small id="urlHelp" class="form-text text-muted">Add the URL to the artwork. Use format Images/yourImage.jpg </small>
        </div>
        <button type="submit" class="btn btn-outline-success btn-block" style="width: 25%;">Submit</button>
        </form> 

      <br>
      <br>
        
      
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


</body>

</html> 