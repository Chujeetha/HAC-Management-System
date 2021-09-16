<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hostel";


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$var=$_POST['user'];
$email=$_POST['pass'];
$hos=$_POST['hostel'];

  $sqlr="select email from maleappoint where email='$email'";
   $rsss = mysqli_query($conn,$sqlr);
   $reg_count=mysqli_num_rows($rsss);
   if($var=="" || $email=="" || $hos=="")
   {
       header("Location:remove_mM1.php?error=Empty Fields not allowed !!");
       exit();
   }
     if(!preg_match('/^[A-z0-9_\-]+[@][A-z0-9_\-]+([.][A-z0-9_\-]+)+[A-z.]{2,4}$/', $email)){
         header("Location:remove_mM1.php?error=Invalid  email!!");
         exit();  
}
    if($reg_count==0)
    {
         header("Location:remove_mM1.php?error=This user doesn't exist !!");
         exit();  
    }  



$sql = "DELETE FROM maleappoint WHERE Username='$var'";
if ($conn->query($sql) === TRUE) {
            header("Location: remove_mM1.php?error=Successfully removed!!");   
            exit();  
} else {
  header("refresh:0; url=remove_mM1.php");
}

$conn->close();
?>
