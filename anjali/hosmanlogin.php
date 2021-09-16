<?php

  $mgr_name = $_POST['mgr_name'];
  $pass = $_POST['password'];
  $hos  = $_POST['hostel'];
 if($mgr_name =="" || $pass=="" || $hos=="")
 {
       header("Location: hosmanlogin1.php?error=Empty Fields not allowed");
       exit();
 }
 else
 {

       $con=mysqli_connect("localhost","root","","hostel");

       if(isset($_POST['mgr_name'])){
       $mgr_name =$_POST['mgr_name'];
       $password = $_POST['password'];
       $hos  = $_POST['hostel'];          
       $sql = "select * from femaleappoint where Username='". $mgr_name."'AND Hostelname='". $hos."'AND Password='".$password."'limit 1";
       $sqli ="select * from maleappoint where Username='". $mgr_name."'AND Hostelname='". $hos."'AND Password='".$password."'limit 1";
       $res = mysqli_query($con,$sql);
       $resi = mysqli_query($con,$sqli);
       if(mysqli_num_rows($res)==1 || mysqli_num_rows($resi)==1){
       header("refresh:0; url=http://localhost/anjali/manager_home.html");
        }
       else{
       header("Location: hosmanlogin1.php?error=You have entered incorrect Hostelname/Password/Username");
       exit();
       }
     
      }
   }
?>