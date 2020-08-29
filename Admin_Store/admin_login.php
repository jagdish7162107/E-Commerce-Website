
<?php
require 'admin_common.php';  
?>
<body class="bod">
   <?php 
include 'admin_header.php';
?>

  <center>
<h1 class="head"><strong>WELCOME TO THE MANAGER OF LIFESTYLE STORE</strong></h1>
</center>
<br><br><br><br>
 <div class="container">
  
<div class="col-sm-offset-3 col-sm-6 log">
  
<form roll="form" action="admin_login_script.php" method="POST">
  <center>
  <h3>Please Login To Manage The Lifestyle Store</h3>
  <hr />
  </center>
    <div class="form-group">

      <input type="text" class="form-control" id="username" name="username" placeholder="Enter username" required>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter password" required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  
</form>
<br><br><br>
</div>
</div>
</body>
</html>
