<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hostel";


$conn = new mysqli($servername, $username, $password, $dbname);

$vari=$_POST['hostel'];
$var=$_POST['pass'];
$reg=$_POST['user'];

   $sqli="select Room from allo2 where Room='$var'";
   $rss = mysqli_query($conn,$sqli);
   $row_count=mysqli_num_rows($rss);

   $query="select Register_No from allo2 where Register_No='$reg'";
   $r = mysqli_query($conn,$query);
   $reg_count=mysqli_num_rows($r);
  if($vari=="" || $var=="" || $reg=="")
    {
       header("Location:vacate_boys1.php?error=Empty Fields not allowed !!");
       exit();
    }
    if($row_count==0)
    {
         header("Location:vacate_boys1.php?error=Invalid Room Number !!");
         exit();  
    }
    if($reg_count==0)
    {
         header("Location:vacate_boys1.php?error=Invalid Register Number !!");
         exit();  
    }

$v="Not Applied";
$sql = "INSERT INTO empty_mrooms(Hostel,Room,Status) VALUES('$vari','$var','$v')";
if ($conn->query($sql) === TRUE) {  
       echo "<a href=vacate_boys3.php?id=".$var.">Please click here to complete the process of vacating</a>";
} else {
       header("refresh:0; url=vacate_boys1.php");
}

$conn->close();
?>