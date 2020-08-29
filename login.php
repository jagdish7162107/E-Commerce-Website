<DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="main.css" type="text/css">
  <link rel="stylesheet" href="../../maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="../../ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="../../maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>


  

  
  <div class="container">
  <!-- Trigger the modal with a button -->
  <!--button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button-->

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
  <!--div class="col-md-6"-->
  <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email" required>
    
  <!--/div-->
</div>


<!-- Password input-->
<div class="form-group">
  <label class="control-label" for="password"></label>
  <!--div class="col-md-6"-->
    <input id="password" name="password" placeholder="Enter your Password" class="form-control input-md" type="password" required>
    
  <!--/div-->
</div>
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
</body>

</html>
