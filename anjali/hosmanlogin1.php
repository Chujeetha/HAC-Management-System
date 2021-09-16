<!DOCTYPE html>
<html>
<head>
<title>Manager Login Form</title>
<link rel="stylesheet" type="text/css" href="hosmanlogin.css">
</head> 
<body>
<div align="right">
<b><input type="button" class="btn" onclick="location.href='http://localhost/anjali/main.html';" value="Home" /></b>
</div>
<centre><h2>Manager Login</h2></centre><br>   
<div class="mgrlogin">
  <form id="mgrlogin" method="post" action="hosmanlogin.php">

<?php if(isset($_GET['error'])) { ?>
  <p class="error"><?php echo $_GET['error']; ?></p>
  <?php } ?>

  <label><b>Manager name</b></label><br><br>
  <input type="text" placeholder="Username" name="mgr_name" id="mgrname">
  <br><br>
      <label for="hostel"><b>Hostel Name</b></label><br>
     <select name="hostel" id="hostel">
     <option value="">-</option>
     <option value="a">A</option>
     <option value="b">B</option>
     <option value="c">C</option>
     <option value="d">D</option>
     <option value="e">E</option>
     <option value="f">F</option>
     <option value="g">G</option>
     <option value="h">H</option>
     </select><br><br>
  <label><b>Password</b></label><br><br>
   <input type="password" placeholder="Password" name="password" id="pswrd">
  <br><br>
  <b><input type="submit" name="mgrlog" id="mgrlog" value="LOG IN"></b>   
        <br><br> 
  <br><font color="#d6a502">Login as Student?</font><button class="button" type="button" ><a href='stdlogin.php'>Student Login</a></button>
  
</form>
</div>

</html>