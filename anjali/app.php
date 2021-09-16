<?php
   $con=mysqli_connect("localhost", "root","","hostel");
   $name=$_POST['name'];
   $registerno=$_POST['registerno'];
   $hostel=$_POST['hostel'];
   $room=$_POST['room'];

  $n="select Firstname from signup where Firstname='$name' and Gender='female'";

   $nc = mysqli_query($con,$n);

   $n_count=mysqli_num_rows($nc);


   $ch="select std_rn from signup where std_rn='$registerno' and Gender='female' ";
   $check = mysqli_query($con,$ch);
   $h_check=mysqli_num_rows($check);

   $sqlr="select Room from empty_frooms where Room='$room'";
   $rsss = mysqli_query($con,$sqlr);
   $sel="select Status from empty_frooms where Status='Applied' and Room='$room' ";
   $sels=mysqli_query($con,$sel);
   $sel_count=mysqli_num_rows($sels);
   $sqli="select Register_No from app where Register_No='$registerno'";
   $rss = mysqli_query($con,$sqli);
   $row_count=mysqli_num_rows($rss);
   $room_count=mysqli_num_rows($rsss);
     if($name=="" || $registerno=="" || $hostel=="" || $room=="")
   {  

         header("Location:applyy_girls.php?error=Empty Fields not allowed");
         exit();
           
   }

   if($n_count==0)
    {
         header("Location:applyy_girls.php?error=Invalid Firstname !!");
         exit();  
    }
    if($h_check==0)
    {
         header("Location:applyy_girls.php?error=Invalid register number !!");
         exit();            
     }
    if($row_count!=0)
    {
         header("Location:applyy_girls.php?error=You have already applied !!");
         exit();  
    }
   if($sel_count!=0)
    {
         header("Location:applyy_girls.php?error=Someone has applied for this room !!");
         exit();  
    }
    if($room_count==0)
    {
         header("Location:applyy_girls.php?error=Please check the vacant rooms !!");
         exit();            
     }

   else
   {
        $sql = "INSERT INTO app (Name,Register_No,Hostel,Room_No) 
               VALUES ('$name', '$registerno', '$hostel','$room')";

       $rs = mysqli_query($con,$sql);
       if($rs)
       {
        $r=$_POST['room'];
        header("Location: empty_girls.php?error=$r");
        exit();
       }
       else
       {
           header("Location:applyy_girls.php?Check your connection !!");
           exit();
       }
   }

?>