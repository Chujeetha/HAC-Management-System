<?php
   $con=mysqli_connect("localhost", "root","","hostel");
   $name=$_POST['name'];
   $message=$_POST['message'];
   $subject=$_POST['subject'];
   $email=$_POST['email'];

   
   if( $name=="" || $subject=="" || $message=="" || $email=="")
   {
       echo '<script>alert("Empty fields not allowed !!")</script>';
       header("refresh:0; url=main.html");
   }
     if(!preg_match('/^[A-z0-9_\-]+[@][A-z0-9_\-]+([.][A-z0-9_\-]+)+[A-z.]{2,4}$/', $email)){
       echo '<script>alert("Invalid Email !!")</script>';
       header("refresh:0; url=main.html");
         exit();  
}
   else{
       $sql = "INSERT INTO cont (Hostel_Name,Name,Message,Subject,Email) 
               VALUES ('null','$name','$subject','$message','$email')";

       $rs = mysqli_query($con,$sql);
       if($rs)
       {
       echo '<script>alert("Message sent !!")</script>';
       header("refresh:0; url=main.html");
        exit();
       }
       else
       {
       echo '<script>alert("Error !!")</script>';
       header("refresh:0; url=main.html");
        exit();
       }
   }

?>