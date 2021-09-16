<?php

  $reg = $_POST['rollno'];
  $pass = $_POST['password'];
 if($reg =="" || $pass=="")
 {
       header("Location: stdlogin.php?error=Empty Fields not allowed");
        exit();
 }
 else
 {

       $con=mysqli_connect("localhost","root","","hostel");

       if(isset($_POST['rollno'])){
       $reg =$_POST['rollno'];
       $password = $_POST['password'];
    
       $sql = "select * from signup where std_rn='". $reg."'AND Password='".$password."'limit 1";

       $res = mysqli_query($con,$sql);
       if(mysqli_num_rows($res)==1){
       header("refresh:0; url=http://localhost/anjali/student_hostel.html");
        }
       else{
       header("Location: stdlogin.php?error=Invalid Register No/Password !!");
        exit();
       }
     
      }
   }

?>

