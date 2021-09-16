<?php


echo <<<_END

<html>
<head> <link rel="stylesheet" href="table.css"> </head>
<body>
<br>

<h1 align="center"><b>ALLOCATED ROOMS (BOYS)<b></h1>

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


$sql = "SELECT * from allo2";
$records = mysqli_query($conn, $sql);
?>
<br><br>
<table border="2">
  <tr>
    <th>Name</th>
    <th>Register No.</th>
    <th>Hostel</th>
    <th>Room No.</th>
  </tr>



<?php

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['Name']; ?></td>
    <td><?php echo $data['RegisterNo']; ?></td>
    <td>  <?php echo  $data['Hostel'];?>         </td>
    <td>  <?php echo  $data['RoomNo'];?>         </td>
  </tr>	

<?php
}
?>
</table>

<?php mysqli_close($conn);?>

</body>
</html>
 





