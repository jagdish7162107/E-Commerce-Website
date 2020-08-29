
<?php
include 'common.php';

if(!isset($_SESSION['email']))
{
header('location:index.php');
}
?>
<!--Login form-->
<br><br><br><br><br><br><br>
<body>
<?php include 'header.php';
 ?>
 
<div class="container">
<div class="col-sm-offset-3 col-sm-6">
  <div class="panel-group ">
  <div class="panel panel-primary">
    <div class="panel-heading" >RESET PASSWORD</div>
    <div class="panel-body">
     

<form method="POST" action="setting_script.php">

<div class="form-group">
      
        <input type="email" class="form-control" id="email" name = "email" placeholder="enter email" autofocus required>
      
    </div>

<div class="form-group">
      
        <input type="password" class="form-control" id="password" name = "password" placeholder="Old Password" required>
      
    </div>
  <div class="form-group">
      
        <input type="password" class="form-control" id="new_password" name = "new_password"  placeholder="New Password" required>
      
    </div>

      <div class="form-group">
      
        <input type="password" class="form-control" id="confirm_password" name = "confirm_password"  placeholder="confirm new Password" required>
      

    </div>


<button type="submit" class="btn btn-primary">submit</button>

</form>
</div>
 
  </div>
</div>
</div>
</div>
</body>
</html>

 
 

