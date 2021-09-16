<html>
<head> <link rel="stylesheet" href="table1.css"> </head>
<body>
<div align="right">
<b><input type="button" class="btn" onclick="location.href='admin_final2.html';" value="Home" /></b>
</div>

   <h2>REMOVE HOSTEL MANAGER (MEN)</h2>
    
    <form method="post" class="login" action="remove_mM.php">
  
<?php if(isset($_GET['error'])) { ?>
  <p class="error"><?php echo $_GET['error']; ?></p>
  <?php } ?>
      
        <div>
            <label> Username </label><br>
            <input id="Uname" type="text" placeholder="Username" name="user"> 
        </div><br>
        
        <div>
            <label> Hostel Name</label><br>
                 <select id="Uname" name="hostel" id="hostel">
     <option value="">--</option>
     <option value="E">E</option>
     <option value="F">F</option>
     <option value="G">G</option>
     <option value="H">H</option>
     </select>
        </div><br>
        
        <div>
            <label> E-mail</label><br>
            <input id="pass" type="text" placeholder="E-mail" name="pass"/>
        </div><br><br>
        <div>
        <button id="log" type="submit" value="remove">REMOVE</button>
        </div>
    </form>
</div>
</body>
</html>

