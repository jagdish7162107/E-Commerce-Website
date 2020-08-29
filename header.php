
<!DOCTYPE html>
<html lang="en">
<head>
  <title>lifestyle store</title>
<style>
.log{
 border:0.1em solid #cccccc;
 border-radius:2%;
}
 input[type=text]{
  border:1px solid #cccccc;
 }

</style>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/index.css" type="text/css">
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
</head>
<!--navbar started-->
<div class="navbar navbar-inverse navbar-fixed-top" style="background-color:#00264d">
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
<?php 
if(isset($_SESSION['email'])){
 ?>
<a class="navbar-brand" href="home.php">Lifestyle Store</a>

?>

<?php
} 
else {
?>
 <a class="navbar-brand" href="index.php">Lifestyle Store</a>
 <?php }?>


</div>
<div class="collapse navbar-collapse" id="myNavbar">
<ul class="nav navbar-nav navbar-right">
<?php
if (isset($_SESSION['email']) ) {
?>
<li><span style="color:white;">You are Logged in as:<?php echo ($_SESSION['email'])?></span></li>
<li><a href = "logout.php"><span class = "glyphicon glyphicon-log-out"></span> Logout</a></li>
<li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a></li>
<li><a href = "setting.php"><span class = "glyphicon glyphicon-cog"></span>Settings</a></li>

?>
<?php
} else {
?>
<li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
<li><a href="#"  data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
<li><a href="contact.php"><span class="glyphicon glyphicon-phone"></span> Contact Us</a></li>
<li><a href="about.php"><span class="glyphicon glyphicon-user"></span> About Us</a></li>
<?php
}
?>
</ul>
</div>
</div>
</div>
</html>
<!--navebar close-->

<!--Login modal started-->

 <!--Also can login from this -->
  <div class="container">
  
  <!-- Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">LOGIN</h4>
          
        </div>
        <div class="modal-body">
           <form class="form-horizontal" action="login_submit.php" method="POST">

<fieldset>

<p>Don't have an account?<a href="signup.php"> Register</a></p>
<!-- Text input-->
    <div class="col-md-12">
<div class="form-group">
  <label class="control-label" for="email"></label>  
  
  <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email" required>
</div>
<!-- Text input end-->

<!-- Password input-->
<div class="form-group">
  <label class="control-label" for="password"></label>
 
    <input id="password" name="password" placeholder="Enter your Password" class="form-control input-md" type="password" required>
    
  
</div>
<!-- Password input end-->
 </div>
 <button type="button"  class="btn btn-default" data-dismiss="modal">Close</button>
   <button type="submit" class="btn btn-primary" >Log in</button>
   <br><br>
      <span class="psw">Forgot <a href="forgotpass.php">password?</a></span>
 </div>



     </fieldset>
     </form>
     </div>
     </div>
     </div>
     </div>
     </div>

