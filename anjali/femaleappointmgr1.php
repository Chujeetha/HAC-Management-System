<?php
   $con = mysqli_connect("localhost", "root","","hostel");
   $username=$_POST['username'];
   $fname=$_POST['fname'];
   $lname=$_POST['lname'];
   $mblnum=$_POST['cellno'];
   $email=$_POST['email'];
   $hosname=$_POST['hsnm'];
   $password=$_POST['password'];
   $confirmpassword=$_POST['confirmpassword'];
   $sqlr="select email from femaleappoint where email='$email'";
   $rsss = mysqli_query($con,$sqlr);
   $email_count=mysqli_num_rows($rsss);
   if($username=="" || $fname=="" || $lname=="" ||  $mblnum=="" ||  $email=="" ||  $hosname=="" || $password=="" ||  $confirmpassword=="")
   {
       header("Location:femaleappointmgr.php?error=Empty Fields not allowed !!");
       exit();
   }
if(!preg_match("/^[6789]{1}[0-9]{5}[0-9]{4}$/", $mblnum)) {
         header("Location:femaleappointmgr.php?error=Invalid  mobile number!!");
         exit();  
}
     if(!preg_match('/^[A-z0-9_\-]+[@][A-z0-9_\-]+([.][A-z0-9_\-]+)+[A-z.]{2,4}$/', $email)){
         header("Location:femaleappointmgr.php?error=Invalid  email!!");
         exit();  
}

    if($email_count!=0)
    {
         header("Location:femaleappointmgr.php?error=You have already appointed!!");
         exit();  
    } 

  else if($confirmpassword != $password)
  { 
       header("Location:femaleappointmgr.php?error=Password does not match !!");
       exit();
  }
  else
{
   $sql = "INSERT INTO femaleappoint(Username,Firstname,Lastname,Mobile_no,email,Hostelname,Password,Confirm_Password) 
           VALUES ('$username', '$fname', '$lname', '$mblnum', '$email','$hosname', '$password','$confirmpassword')";
   $rs = mysqli_query($con, $sql);
   if($rs)
   {
       header("Location:femaleappointmgr.php?error=Successfully appointed !!");
       exit();
   }
   else
   {
             echo "Check your connection !!";
             header("refresh:0; url=http://localhost/anjali/femaleappointmgr.php");
   }
}

?>