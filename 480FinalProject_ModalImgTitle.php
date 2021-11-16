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
    $sql = "select title from artwork where titleID like '%$q%'";
    $result = $conn->query($sql);
    if ($row = mysqli_fetch_array($result)){
        echo $row['title'];
     }
}

?>