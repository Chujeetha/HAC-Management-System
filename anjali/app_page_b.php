<html>
<head>
<link rel="stylesheet" href="table.css"> 
</head>
<body>
<br>
<h1 align="center"><b>APPLICATIONS (Boys)<b></h1>
<div align="right">
<b><input type="button" class="btn" onclick="location.href='manager_home.html';" value="Home" /></b>
</div>
<table>
<tr>
<th>Name</th>
<th>Reg No.</th>
<th>Hostel</th>
<th>Room No.</th>
<th></th>
</tr>
<?php
  $con=mysqli_connect("localhost","root","","hostel");
    mysqli_select_db($con,'hostel');

    $sql="SELECT * from app2";
    $records=mysqli_query($con,$sql);
    

    while($row=mysqli_fetch_array($records)){
           echo "<tr>";
	   echo "<td >".$row['Name']."</td>";
	   echo "<td>".$row['Register_No']."</td>";
	   echo "<td>".$row['Hostel']."</td>";
	   echo "<td>".$row['Room_No']."</td>";
	   echo "<td><a href=jj3.php?id=".$row['Register_No'].">Allocate</a></td>";
}
?>
</table>
</body>
</html>