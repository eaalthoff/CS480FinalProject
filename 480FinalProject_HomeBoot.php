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
        .galImage{
            height: 200px;
        }
        #overlays {
            position: fixed; 
            display: none; 
            width: 100%; 
            height: 100%;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0,0,0,0.5); 
            z-index: 2; 
            cursor: pointer;
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
                /*var imgsrc=$('#bigImage').attr('src');
                $.post("480FinalProject_ModalImgInfo.php", 
                {
                    imginfo: imgsrc
                },
                function(data){
                    $("#bigImage").after(data);
                });*/
                $('#imagemodal').modal('show'); 
            });
        });
    </script>
    <title>Gallery w/ Bootstrap</title>
</head>

<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="480FinalProject_HomeBoot.html">Gallery</a>
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
                    <a class="nav-link" href="480FinalProject_ContactUs.html">Contact Us</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
    <main role="main">
    <div class="album py-5 bg-light">
    <div class="container">
    <form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="form-group row">
        <div class="col-sm-10">
        <input class="form-control" type="search" placeholder="Search" aria-label="Search" name="search">
    </div>
    <div class="col-sm-2">
        <button class="btn btn-outline-success btn-block" type="submit">Search</button>
    </div>
    </form>

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

    $search = isset($_GET["search"])?$_GET["search"]:"";
    
    if($search != ""){
        //search for subject
        $sql = "select artworksubject.subject, artworksubject.titleID, artwork.url, artwork.title from artworksubject inner join artwork on artworksubject.titleID=artwork.titleID where artworksubject.subject like '%$search%'";
        $result = $conn->query($sql);
        if ($result->num_rows > 3){
            echo '<div class="row">';
            echo '<div class="card-deck">';
            
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo '<div class="col-md-4">';
                echo '<div class="card mb-4 box-shadow">';
                echo '<img class="card-img-top galImage galImage" src="' . $row['url']. '" alt="Card image cap">';
                echo '<div class="card-body">';
                echo '<p class="card-text">'. $row['title'].'</p>';
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }
            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
        } 
        else if($result->num_rows ==2){
            echo '<div class="row justify-content-md-center">';
            while($row = $result->fetch_assoc()) {
                echo '<div class="col-md-4">';
                echo '<div class="card mb-4 box-shadow">';
                echo '<img class="card-img-top galImage galImage" src="' . $row['url']. '" alt="Card image cap">';
                echo '<div class="card-body">';
                echo '<p class="card-text">'. $row['title'].'</p>';
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }
            echo "</div>";
            echo "</div>";
            echo "</div>";
        }
        else if ($result->num_rows == 1){
            echo '<div class="row justify-content-md-center">';
            while($row = $result->fetch_assoc()) {
                echo '<div class="col-md-4">';
                echo '<div class="card mb-4 box-shadow">';
                echo '<img class="card-img-top galImage galImage" src="' . $row['url']. '" alt="Card image cap">';
                echo '<div class="card-body">';
                echo '<p class="card-text">'. $row['title'].'</p>';
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }
            echo "</div>";
            echo "</div>";
            //echo "</div>";
        
        }
        else{
            //search by title
            $sql = "select titleID, url, title from artwork where title like '%$search%'";
            $result = $conn->query($sql);
            if ($result->num_rows > 3){
                echo '<div class="row">';
                echo '<div class="card-deck">';
                
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo '<div class="col-md-4">';
                    echo '<div class="card mb-4 box-shadow">';
                    echo '<img class="card-img-top galImage galImage" src="' . $row['url']. '" alt="Card image cap">';
                    echo '<div class="card-body">';
                    echo '<p class="card-text">'. $row['title'].'</p>';
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                }
                echo "</div>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
            } 
            else if($result->num_rows ==2){
                echo '<div class="row justify-content-md-center">';
                while($row = $result->fetch_assoc()) {
                    echo '<div class="col-md-4">';
                    echo '<div class="card mb-4 box-shadow">';
                    echo '<img class="card-img-top galImage galImage" src="' . $row['url']. '" alt="Card image cap">';
                    echo '<div class="card-body">';
                    echo '<p class="card-text">'. $row['title'].'</p>';
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                }
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }
            else if ($result->num_rows == 1){
                echo '<div class="row justify-content-md-center">';
                while($row = $result->fetch_assoc()) {
                    echo '<div class="col-md-4">';
                    echo '<div class="card mb-4 box-shadow">';
                    echo '<img class="card-img-top galImage galImage" src="' . $row['url']. '" alt="Card image cap">';
                    echo '<div class="card-body">';
                    echo '<p class="card-text">'. $row['title'].'</p>';
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                }
                echo "</div>";
                echo "</div>";
                echo "</div>";
            } 
            else{
                //search by artist
                $sql = "select artist.fName, artist.lName, artist.artistID, artwork.url, artwork.title from artist inner join artwork on artist.artistID=artwork.artistID where concat(artist.fName, ' ', artist.lName) like '%$search%'";
                $result = $conn->query($sql);
                if ($result->num_rows > 3){
                    echo '<div class="row">';
                    echo '<div class="card-deck">';
                    
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo '<div class="col-md-4">';
                        echo '<div class="card mb-4 box-shadow">';
                        echo '<img class="card-img-top galImage galImage" src="' . $row['url']. '" alt="Card image cap">';
                        echo '<div class="card-body">';
                        echo '<p class="card-text">'. $row['title'].'</p>';
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                    }
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                } 
                else if($result->num_rows ==2){
                    echo '<div class="row justify-content-md-center">';
                    while($row = $result->fetch_assoc()) {
                        echo '<div class="col-md-4">';
                        echo '<div class="card mb-4 box-shadow">';
                        echo '<img class="card-img-top galImage galImage" src="' . $row['url']. '" alt="Card image cap">';
                        echo '<div class="card-body">';
                        echo '<p class="card-text">'. $row['title'].'</p>';
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                    }
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                }
                else if ($result->num_rows == 1){
                    echo '<div class="row justify-content-md-center">';
                    while($row = $result->fetch_assoc()) {
                        echo '<div class="col-md-4">';
                        echo '<div class="card mb-4 box-shadow">';
                        echo '<img class="card-img-top galImage galImage" src="' . $row['url']. '" alt="Card image cap">';
                        echo '<div class="card-body">';
                        echo '<p class="card-text">'. $row['title'].'</p>';
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                    }
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                } 
                else{
                    echo '<div class="row justify-content-md-center">';
                    echo "<p class='lead'>0 results for search " . $search . "</p>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
        
                }
            } 
        }
    }
//if there is no search, every piece in the database will be retrieved
    else{
        $sql = "select titleID, url, title from artwork";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo '<div class="row">';
            echo '<div class="card-deck">';
            
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo '<div class="col-md-4">';
                echo '<div class="card mb-4 box-shadow">';
                echo '<img class="card-img-top galImage galImage" src="' . $row['url']. '" alt="Card image cap">';
                echo '<div class="card-body">';
                echo '<p class="card-text">'. $row['title'].'</p>';
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }
            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
    }
}
    
    $conn->close();
?>
        <!--Image popup-->
        <div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title">Piece title goes here</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div id="mb" class="modal-body">
                  <img id="bigImage" src="" class="imagepreview" style="width: 100%;" >
                </div>
              </div>
            </div>
          </div>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
</html> 