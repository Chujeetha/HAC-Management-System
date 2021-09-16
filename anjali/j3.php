<?php
echo <<<_END
<head>
<link rel="stylesheet" href="table.css"> 
</head>
_END;
 $con=mysqli_connect("localhost","root","","hostel");
 mysqli_select_db($con,'hostel');
    $q="SELECT * FROM app WHERE Register_No='$_GET[id]'";
    $records=mysqli_query($con,$q);
    while($row=mysqli_fetch_array($records))
    { 
       $name=$row['Name'];
       $reg=$row['Register_No'];
       $hos=$row['Hostel'];
       $mes=$row['Room_No'];
       $sqli="INSERT INTO allo(Name,Register_No,Hostel,Room) VALUES('$name','$reg','$hos','$mes')";
    }   
    if(mysqli_query($con,$sqli))
          {
          echo "<a href=j2.php?id=".$mes.">Please click here to complete the process of allocation</a>";
          }
?>