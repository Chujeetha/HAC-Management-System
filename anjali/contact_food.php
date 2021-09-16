<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="t2.css">
    <title>Contact Us</title>
</head>
<body>
   <div align="right">
     <b><input type="button" class="btn" onclick="location.href='food_home.html';" value="Home"/><b>
   </div>
     <div class="login">
    <h2>Contact Us</h2>
    <form  method="post" action="http://localhost/anjali/cont.php">
<?php if(isset($_GET['error'])) { ?>
  <p class="error"><?php echo $_GET['error']; ?></p>
  <?php } ?>
   
<div>
  
  <div class="first"> 
    <label for="name">Hostel</label><br>
    <input type="text" id="hostelname" placeholder="Hostel Name" name="hostelname" style="font-size:12pt;height:40px;width:350px;"><br><br>
    <label for="name">Name</label><br>
    <input type="text" id="name" placeholder="Name - ex:John" name="name" style="font-size:12pt;height:40px;width:350px;"><br><br>
    <label for="name">Email</label><br>
    <input type="text" id="registerno" placeholder="Email" name="registerno" style="font-size:12pt;height:40px;width:350px;"><br><br>
   <label for="name">Subject</label><br>
    <input type="text" id="hostelname" placeholder="Subject" name="message" style="font-size:12pt;height:40px;width:350px;"><br><br>

  </div>
  <div class="second">
    <label for="name">Message</label><br>
    <input type="text" id="subject" placeholder="Message" name="subject" style="font-size:12pt; width:350px; height:150px;"><br><br>
    <button id="log" type="submit" value="contactus">Contact Us</button>    
  </div>

</div>

    </form>
  </div>
</body>
</html>
