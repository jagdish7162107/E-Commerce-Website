
<?php
include 'common.php';
  

  if(isset($_POST['submit'])){
  $email = mysqli_real_escape_string($con, $_POST['email']);
$new_password = mysqli_real_escape_string($con, $_POST['new_password']);
$confirm_password = mysqli_real_escape_string($con, $_POST['confirm_password']);



  $select_query="SELECT * from users where email='$email'";
  $select_query_result=mysqli_query($con,$select_query);
  $select_query_fetch=mysqli_num_rows($select_query_result);
   if(($select_query_fetch)==0)
   {
    echo "<center><b><h3>You entered Incorrect email id.Please <a href=forgotpass.php>Retry again.</a></h3></b></center>";
    exit();
   }

 else if($new_password!=$confirm_password){ 
  echo '<center><b><h3>password have not matched <a href=forgotpass.php>Retry again</a></h3></b></center>';
  exit();
      }
  else if($new_password==$confirm_password){

   $upd="UPDATE users SET Password='$new_password' where email='$email'";
   $upd_query=mysqli_query($con,$upd); 
   echo "<center><b><h3>Your Password changed successfully. Log in with new password <a href=index.php>here</a></h3></b></cenetr>";
  exit(); 
  }
  
}
?>
<!--forgot form-->
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
     

<form method="POST" action="">

<div class="form-group">
      
        <input type="email" class="form-control" id="email" name = "email" placeholder="enter email" autofocus required>
      
    </div>

  <div class="form-group">
      
        <input type="password" class="form-control" id="new_password" name = "new_password"  placeholder="New Password" required>
      
    </div>

      <div class="form-group">
      
        <input type="password" class="form-control" id="confirm_password" name = "confirm_password"  placeholder="confirm new Password" required>
    </div>


<button type="submit" name = "submit" id="submit" class="btn btn-primary">submit</button>

</form>
</div>
 
  </div>
</div>
</div>
</div>
</body>
</html>

 
 

