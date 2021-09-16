<?php
   $con=mysqli_connect("localhost", "root","","hostel");
   $name=$_POST['name'];
   $registerno=$_POST['registerno'];
   $hostel=$_POST['hostel'];
   $room=$_POST['room'];

  $n="select Firstname from signup where Firstname='$name' and Gender='male'";

   $nc = mysqli_query($con,$n);

   $n_count=mysqli_num_rows($nc);


   $ch="select std_rn from signup where std_rn='$registerno' and Gender='male' ";
   $check = mysqli_query($con,$ch);
   $h_check=mysqli_num_rows($check);

   $sqlr="select Room from empty_mrooms where Room='$room'";
   $rsss = mysqli_query($con,$sqlr);
   $sel="select Status from empty_mrooms where Status='Applied' and Room='$room' ";
   $sels=mysqli_query($con,$sel);
   $sel_count=mysqli_num_rows($sels);
   $sqli="select Register_No from app2 where Register_No='$registerno'";
   $rss = mysqli_query($con,$sqli);
   $row_count=mysqli_num_rows($rss);
   $room_count=mysqli_num_rows($rsss);
     if($name=="" || $registerno=="" || $hostel=="" || $room=="")
   {  

         header("Location:applyy_boys.php?error=Empty Fields not allowed");
         exit();
           
   }

   if($n_count==0)
    {
         header("Location:applyy_boys.php?error=Invalid Firstname !!");
         exit();  
    }
    if($h_check==0)
    {
         header("Location:applyy_boys.php?error=Invalid register number !!");
         exit();            
     }
    if($row_count!=0)
    {
         header("Location:applyy_boys.php?error=You have already applied !!");
         exit();  
    }
   if($sel_count!=0)
    {
         header("Location:applyy_boys.php?error=Someone has applied for this room !!");
         exit();  
    }
    if($room_count==0)
    {
         header("Location:applyy_boys.php?error=Please check the vacant rooms !!");
         exit();            
     }

   else
   {
        $sql = "INSERT INTO app2 (Name,Register_No,Hostel,Room_No) 
               VALUES ('$name', '$registerno', '$hostel','$room')";

       $rs = mysqli_query($con,$sql);
       if($rs)
       {
        $r=$_POST['room'];
        header("Location: empty_boys.php?error=$r");
        exit();
       }
       else
       {
           header("Location:applyy_boys.php?Check your connection !!");
           exit();
       }
   }

?>