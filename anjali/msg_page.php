<?php


echo <<<_END

<html>
<head> <link rel="stylesheet" href="table.css"> </head>
<body>


<h1 align="center"><b>MESSAGES<b></h1>

<div align="right">
<b><input type="button" class="btn" onclick="location.href='manager_home.html';" value="Home" /></b>
</div>
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
$sql = "SELECT Hostel_Name,Name,Email,Message,Subject from cont where Hostel_Name!='null'";
$records = mysqli_query($conn, $sql);

?>
<br><br><br>
<table border="2">
  <tr>
    <th>Hostel</th>
    <th>Name</th>
    <th>Email</th>
    <th>Subject</th>
    <th>Messages</th>
  </tr>

<?php
while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['Hostel_Name']; ?></td>
    <td><?php echo $data['Name']; ?></td>
    <td><?php echo $data['Email']; ?></td>
    <td><?php echo $data['Message']; ?></td>
    <td><?php echo $data['Subject']; ?></td>
  </tr>	
<?php
}
?>
</table>

<?php mysqli_close($conn);?>

</body>
</html>
 





