
<html>
<head> <link rel="stylesheet" href="table1.css"> </head>
<body>
<div align="right">
<b><input type="button" class="btn" onclick="location.href='http://localhost/anjali/manager_home.html';" value="Home" /></b>
</div>
        <h2>VACATE FORM (GIRLS)</h2>
<div> 
    <form  method="POST" class="login" action="vacate_girls2.php">

  <?php if(isset($_GET['error'])) { ?>
  <p class="error"><?php echo $_GET['error']; ?></p>
  <?php } ?>

        <div>
            <label> Register No. </label><br>
            <input id="Uname" type="text" placeholder="Reg No." name="user"/>
        </div><br>
        
        <div>
            <label> Hostel Name </label><br>
                 <select id="Uname" name="hostel" id="hostel">
     <option value="">--</option>
     <option value="A">A</option>
     <option value="B">B</option>
     <option value="C">C</option>
     <option value="D">D</option>
     </select>
        </div><br>
        
        <div>
             <label> Room Number</label><br>
            <input id="Uname" type="text" placeholder="Room Number" name="pass"/>
        </div><br><br>
        <input id="log" type="submit" value="VACATE" name="vacate"/>
</form>
</div>
</body>
</html>


