
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="t1.css">
    <title>Application Form</title>
</head>
    
<body>
   <div align="right">
     <b><input type="button" class="btn" onclick="location.href='http://localhost/anjali/student_hostel.html';" value="Home"/><b>
   </div>

  <div class="login">
  <h2>Application Form for Girls</h2>
  <form method="post" action="http://localhost/anjali/app.php">
  <?php if(isset($_GET['error'])) { ?>
  <p class="error"><?php echo $_GET['error']; ?></p>
  <?php } ?>

<div>
   
   <div class="first" >
     <label for="name">Name</label><br>
     <input type="text" id="name" placeholder="Name - ex:Caroline"  name="name" style="font-size:12pt;height:40px;width:350px;"><br><br><br>

     <label for="registerno">Register_No</label><br>
     <input type="text" id="registerno" placeholder="Register No - ex:19euit032" name="registerno" style="font-size:12pt;height:40px;width:350px;"><br><br>    
  </div> 

   <div class="second">
     <label for="hostel">Hostel</label><br>
     <select name="hostel" id="hostel">
     <option value="">--</option>
     <option value="A">A (201-210)</option>
     <option value="B">B (211-220)</option>
     <option value="C">C (221-230)</option>
     <option value="D">D (231-240)</option>
     </select>
     <br><br><br>
     <label for="password">Room_No</label><br>
     <input type="text" id="password" placeholder="Room No - 207" name="room" style="font-size:12pt;height:40px;width:350px;">
<br><div>
     <b><input type="button" class="btn" onclick="location.href='display_empty_g.php';" value="Check for vacant rooms"/><b>
   </div>
   </div>

</div>

<div class="pls"><button style="border-radius:19px" id="log" type="submit" value="apply">Apply</button></div>
  </form>
 </div>

</div>
</body>
</html>
