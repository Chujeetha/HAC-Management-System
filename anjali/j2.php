
<?php
 $con=mysqli_connect("localhost","root","","hostel");
 mysqli_select_db($con,'hostel');
    $sql="DELETE from empty_frooms WHERE Room='$_GET[id]'";
    $sqli="DELETE from app WHERE Room_No='$_GET[id]'";
    if(mysqli_query($con,$sql) && mysqli_query($con,$sqli))
          {
          header("refresh:0; url=app_page_g.php");
          }
    else
          echo "NOT DELETED";
?>