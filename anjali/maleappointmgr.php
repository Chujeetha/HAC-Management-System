<html>
<head>
<title>Manager appoint form</title>
<link rel="stylesheet" type="text/css" href="maleappointmgr.css">
</head>
<body>
<div align="right">
<b><input type="button" class="btn" onclick="location.href='admin_final2.html';" value="Home" /></b>
</div>
<centre><h3>APPOINT HOSTEL MANAGER (MEN)</h3></centre>
<div class="appoint">
<form id="appoint" method ="post" action = "http://localhost/anjali/maleappointmgr1.php" >
 <?php if(isset($_GET['error'])) { ?>
  <p class="error"><?php echo $_GET['error']; ?></p>
  <?php } ?>
<label><b>Username</b></label><br><br>
<input type="text" placeholder="Username" name="username" id="username">
<br><br>

<label><b>First Name</b></label><br><br>
<input type="text" placeholder="First Name" name="fname" id="fname">
<br><br>

<label><b>Last Name</b></label><br><br>
<input type="text" placeholder="Last Name" name="lname" id="lname">
<br><br>

<label><b>Mobile No</b></label><br><br>
<input type="tel" placeholder="Mobile.No" name="cellno" id="cellno" >
<br><br>

<label><b>e-mail</b></label><br><br>
<input type="text" placeholder="e-mail" name="email" id="email" >
<br><br>

<label><b>Hostel Name</b></label><br><br>
<select name="hsnm" id ="hsnm" placeholder="Select hostel">
<option value="">Select Hostel</option>
<option value="E">E</option>
<option value="F">F</option>
<option value="G">G</option>
<option value="H">H</option>
</select>
<br><br>


<label><b>Password</b></label><br><br>
<input type="password" placeholder="Password"  name="password" id="password">
<br><br>

<label><b>Confirm Password</b></label><br><br>
<input type="password" placeholder="Confirm Password" name="confirmpassword" id="confirmpassword">
<br><br>

<b><input type="submit" name="apt" id="apt" value="Appoint">
</form>

</html>