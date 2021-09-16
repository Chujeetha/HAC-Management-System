
<!DOCTYPE html>
<html>
<head>
<title>Student Login Form</title>
<link rel="stylesheet" type="text/css" href="stdlogin.css">
</head> 
<body>
<div align="right">
<b><input type="button" class="home" onclick="location.href='http://localhost/anjali/main.html';" value="Home" /></b>
</div>
<centre><h2>Student Login</h2></centre><br>   
<div class="login">
  <form id="login" method="POST" action="http://localhost/anjali/stdlogin2.php" >
 
<?php if(isset($_GET['error'])) { ?>
  <p class="error"><?php echo $_GET['error']; ?></p>
  <?php } ?>

  
  <label><b>Register_Number</b></label><br><br>
  <input type="text" placeholder="Reg_no" name="rollno" id="rollno">
  <br><br>
   <label><b>Password</b></label><br><br>
   <input type="Password" placeholder="Password" name="password" id="password">
  <br><br>
  <b><input type="submit" name="log" id="log" value="LOG IN"></b>   
        <br><br> 
  <br><font color="#d6a502">Do you have account?</font><button class="button" type="button" ><a href='signup1.php'>Sign up</button>
</form>
</div>
</body>
</html>