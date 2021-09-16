<?php
   $con = mysqli_connect("localhost", "root","","hostel");
   $reg=$_POST['rollno'];
   $fname=$_POST['fname'];
   $lname=$_POST['lname'];
   $mblnum=$_POST['cellno'];
   $email=$_POST['email'];
   $gender=$_POST['gender'];
   $dept=$_POST['dept'];
   $year=$_POST['year'];
   $password=$_POST['password'];
   $confirmpassword=$_POST['confirmpassword'];


   $sqlr="select std_rn from signup where std_rn='$reg'";
   $rsss = mysqli_query($con,$sqlr);
   $reg_count=mysqli_num_rows($rsss);

  if($reg=="" || $fname=="" || $lname=="" ||  $mblnum=="" ||  $email=="" ||  $gender=="" ||  $dept=="" ||  $year=="" ||   $password=="" ||  $confirmpassword=="")
    {
       header("Location: signup1.php?error=Empty Fields not allowed !!");
       exit();
    }
if(!preg_match("/^[6789]{1}[0-9]{5}[0-9]{4}$/", $mblnum)) {
         header("Location:signup1.php?error=Invalid  mobile number!!");
         exit();  
}
     if(!preg_match('/^[A-z0-9_\-]+[@][A-z0-9_\-]+([.][A-z0-9_\-]+)+[A-z.]{2,4}$/', $email)){
         header("Location:signup1.php?error=Invalid  Email-id !!");
         exit();   
} 


  if($confirmpassword != $password)
  { 
        header("Location: signup1.php?error=Password does not match !!");
        exit();
  }
    if($reg_count!=0)
    {
         header("Location:signup1.php?error=You have already registered !!");
         exit();  
    } 
  else
  {
         $sql = "INSERT INTO signup (std_rn,Firstname,Lastname,Mobile_no,email,Gender,Department,Year,Password,Confirm_Password) 
           VALUES ('$reg', '$fname', '$lname', '$mblnum', '$email', '$gender', '$dept', '$year', '$password','$confirmpassword')";
         $rs = mysqli_query($con,$sql);
         if($rs)
         {
            header("Location: stdlogin.php?error=Successfully registered!!");   
            exit();       
         }
         else
         {
            header("Location: signup1.php?error=Check your connection !!");
            exit();
         }
   }

?>