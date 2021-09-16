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
  <h2>Application Form for Boys</h2>
  <form method="post" action="http://localhost/anjali/app2.php">
  <?php if(isset($_GET['error'])) { ?>
  <p class="error"><?php echo $_GET['error']; ?></p>
  <?php } ?>
<div>
   
   <div class="first" >
     <label for="name">Name</label><br>
     <input type="text" id="name" placeholder="Name - ex:John"  name="name" style="font-size:12pt;height:40px;width:350px;"><br><br><br>

     <label for="registerno">Register_No</label><br>
     <input type="text" id="registerno" placeholder="Register No - ex:19euit032" name="registerno" style="font-size:12pt;height:40px;width:350px;"><br><br>    
  </div> 

   <div class="second">
     <label for="hostel">Hostel</label><br>
     <select name="hostel" id="hostel">
     <option value="">--</option>
     <option value="E">E (101-110)</option>
     <option value="F">F (111-120)</option>
     <option value="G">G (121-130)</option>
     <option value="H">H (131-140)</option>
     </select>
     <br><br><br>
     <label for="password">Room_No</label><br>
     <input type="text" id="password" placeholder="Room No - 107" name="room" style="font-size:12pt;height:40px;width:350px;">
<br><div>
     <b><input type="button" class="btn" onclick="window.location.href='display_empty_b.php';" value="Check for vacant rooms"/><b>
   </div>
   </div>

</div>

<div class="pls"><button style="border-radius:19px" id="log" type="submit" value="apply">Apply</button></div>
  </form>
 </div>

</div>
</body>
</html>
