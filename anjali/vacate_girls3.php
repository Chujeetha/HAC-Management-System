<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hostel";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "DELETE FROM allo WHERE Room='$_GET[id]'";
if ($conn->query($sql) === TRUE) { 
         header("Location:vacate_girls1.php?error=Successfully vacated !!");
         exit();
} else {
         header("Location:vacate_girls1.php?error=Check your connection !!");
         exit();
}

$conn->close();
?>