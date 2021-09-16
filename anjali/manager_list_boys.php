<?php


echo <<<_END

<html>
<head> <link rel="stylesheet" href="table.css"> </head>
<body>
<br>
<h1 align="center"><b> HOSTEL MANAGERS (MEN)<b></h1>
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
$sql = "SELECT Username,Firstname,Lastname,Mobile_no,Hostelname from maleappoint";
$records = mysqli_query($conn, $sql);

?>
<br><br>
<table border="2">
  <tr>
    <th>Username</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Mobile_No</th>
    <th>Hostel </th>
  </tr>

<?php
while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['Username']; ?></td>
    <td><?php echo $data['Firstname']; ?></td>
    <td><?php echo $data['Lastname']; ?></td>
    <td><?php echo $data['Mobile_no']; ?></td>
    <td><?php echo $data['Hostelname']; ?></td>
  </tr>	
<?php
}
?>
</table>

<?php mysqli_close($conn);?>

</body>
</html>
 





