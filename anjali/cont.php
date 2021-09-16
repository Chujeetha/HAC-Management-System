<?php
   $con=mysqli_connect("localhost", "root","","hostel");
   $hostelname=$_POST['hostelname'];
   $name=$_POST['name'];
   $registerno=$_POST['registerno'];
   $message=$_POST['message'];
   $subject=$_POST['subject'];

   
   if($hostelname=="" || $name=="" || $registerno=="" || $subject=="")
   {
       echo "Empty fields not allowed";
   }
     if(!preg_match('/^[A-z0-9_\-]+[@][A-z0-9_\-]+([.][A-z0-9_\-]+)+[A-z.]{2,4}$/', $registerno)){
       echo '<script>alert("Invalid Email !!")</script>';
       header("refresh:0; url=contact1.php");
         exit();  
}
   else{
       $sql = "INSERT INTO cont (Hostel_Name, Name, Email,Message,Subject) 
               VALUES ('$hostelname', '$name', '$registerno', '$subject','$message')";

       $rs = mysqli_query($con,$sql);
       if($rs)
       {
        header("Location: contact1.php?error=Message sent !!");
        exit();
       }
       else
       {
        header("Location: contact1.php?error=Error 404 !!");
        exit();
       }
   }

?>