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
$q = isset($_GET["q"])?$_GET["q"]:"";
//echo $_GET["q"];
if ($q!=""){
    $sql = "select artist.fName, artist.lName, artist.artistID, artwork.url, artwork.title, artwork.year, artwork.medium, artwork.price from artist inner join artwork on artist.artistID=artwork.artistID where artwork.titleID like '%$q%'";
    $result = $conn->query($sql);
    if ($row = mysqli_fetch_array($result)){
        echo "<p>" . $row['fName'] ." ". $row['lName'] . ", " . $row['year'] . "</p>";
        echo "<p>" . $row['medium'] . "</p>";
        echo "<p>$" . $row['price'] . "</p>";
     }
}

?>