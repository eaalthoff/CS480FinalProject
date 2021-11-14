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
        <a class="navbar-brand" href="http://localhost/480FinalProject/480FinalProject_HomeBoot.html">Gallery</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="480FinalProject_HomeBoot.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="480FinalProject_About.html">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="480FinalProject_ContactUs.html">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="480FinalProject_Admin.php">Admin</a>
                </li>
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
        



    <!--Allow users to edit, insert, remove, etc from the database based on permission... (in progress)-->
    <br>
    <h3>Complete your editing of the database below: </h3>
    <form class="form">
        <div class="form-group">
          <label>Title</label>
          <input type="text" class="form-control" id="titleInput" aria-describedby="emailHelp" placeholder="Enter title of artwork">
          <small id="titleHelp" class="form-text text-muted">Add the title of the artwork</small>
        </div>
        <div class="form-group">
          <label>Medium</label>
          <input type="text" class="form-control" id="mediumInput" placeholder="Medium of artwork">
          <small id="mediumHelp" class="form-text text-muted">Specify the medium of the piece. Ex: painting, photograph, sculputre, etc</small>
        </div>
        <div class="form-group">
            <label>Price</label>
            <input type="text" class="form-control" id="priceInput" placeholder="Price of artwork">
            <small id="priceHelp" class="form-text text-muted">Specify the appropriate price of the piece</small>
          </div>
          <div class="form-group">
            <label>Year</label>
            <input type="text" class="form-control" id="yearInput" placeholder="Year the artwork was created">
            <small id="yearHelp" class="form-text text-muted">Specify the Year of the piece </small>
          </div>
        <button type="submit" class="btn btn-outline-success btn-block" style="width: 25%;">Submit</button>
      </form>   

        
      
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
    echo "Connected successfully<br>";




    $conn->close();
?>

</body>

</html> 
