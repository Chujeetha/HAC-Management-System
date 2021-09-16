<html>
<head>
<title>Sign Up Form</title>
<link rel="stylesheet" type="text/css" href="signup.css">
</head>
<body>
<div align="right">
<b><input type="button" class="btn" onclick="location.href='http://localhost/anjali/main.html';" value="Home" /></b>
</div>
<centre><h3>Sign up Here</h3></centre>
<div class="signup">
<form  method="post" action="http://localhost/anjali/signup.php">

<?php if(isset($_GET['error'])) { ?>
  <p class="error"><?php echo $_GET['error']; ?></p>
  <?php } ?>

<label><b>Register_number</b></label><br><br>
<input type="text" placeholder="Reg_no" name="rollno" id="rollno">
<br><br>
<label><b>First Name</b></label><br><br>
<input type="text" placeholder="First Name" name="fname" id="fname">
<br><br>

<label><b>Last Name</b></label><br><br>
<input type="text" placeholder="Last Name" name="lname" id="lname">
<br><br>

<label><b>Mobile No</b></label><br><br>
<input type="text" placeholder="Mobile.No" name="cellno" id="cellno">
<br><br>

<label><b>E-mail</b></label><br><br>
<input type="text" placeholder="e-mail" name="email" id="email">
<br><br>

<label><b>Gender</b></label><br>
<input type="radio" name="gender" value="female" ><font color="#d6a502">Female</font>
<input type="radio" name="gender" value = "male" ><font color="#d6a502">Male</font>
<br><br>

<label><b>Department</b></label><br><br>
<input type="text" placeholder="Dept" name="dept" id="dept">
<br><br>

<label><b>Year Of Study</b></label><br><br>
<select name="year" id ="year">
<option value="Slect_year">Select_year</option>
<option value="First_year">1st year</option>
<option value="Second_year">2nd year</option>
<option value="Third_year">3rd year</option>
<option value="Fourth_year">4th year</option>
</select><br>
<br>

<label><b>Password</b></label><br><br>
<input type="password" placeholder="Password"  name="password" id="password">
<br><br>

<label><b>Confirm Password</b></label><br><br>
<input type="password" placeholder="Confirm Password" name="confirmpassword" id="confirmpassword">
<br><br>

<b><input type="submit" name="sign" id="sign" value="Sign UP">
<br><font color="#d6a502">Do you have account?</font><button class="button" type="button" ><a href='http://localhost/anjali/stdlogin.php'>StudentLogin</button>
</form>

</html>