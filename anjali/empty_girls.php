<?php


echo <<<_END

<html>
<head> <link rel="stylesheet" href="table.css">
<meta http-equiv="refresh" content="10">
 </head>

<body>
<br>

<h1 align="center"><b>EMPTY ROOMS FOR GIRLS<b></h1>

</body>
</html>

_END;
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hostel";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


$sql = "SELECT * from empty_frooms";
$records = mysqli_query($conn, $sql);
?>
<br><br>
<table border="2">
  <tr>
    <th>Hostel</th>
    <th>Room No.</th>
    <th>Status</th>
  </tr>



<?php

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['Hostel']; ?></td>
    <td><?php echo $data['Room']; ?></td>
<?php
$var1=$data['Room'];
if($_GET['error']==$var1)
{
$var=$_GET['error'];
$query="UPDATE empty_frooms SET Status = 'Applied' WHERE Room='$var'";
$q = mysqli_query($conn, $query);
$sel="Applied";

?>
<td>  <?php echo  $sel ?>         </td>
<?php
}
else
{
?>
  <td>  <?php echo  $data['Status'];?>         </td>
<?php
}
?>
  </tr>	
<?php
}
?>
</table>

<?php mysqli_close($conn);?>

</body>
</html>
 





