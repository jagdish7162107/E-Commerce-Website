
 
 <?php
include 'common.php';
 ?>
 <!--Navigation Bar-->
 <?php 
 include 'header.php';
 ?>
<!--SignUp form-->

 <br><br><br><br>
<div class="container">
  <div class="panel-group">
  
  <div class="col-sm-offset-4 col-sm-4">
  <div class="log">
    <div class="panel-heading" style="font-size:20px"><strong>CREATE ACCOUNT</strong></div>
    <div class="panel-body">
<form  roll="form" method="POST" action="signup_script.php">
 <fieldset>
<div class="form-group">
        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required> 
    </div>

     <div class="form-group">
        <input type="text" class="form-control" id="username" name="username" placeholder="Username" required> 
    </div>


	<div class="form-group">
        <input type="email" class="form-control" id="email" name=" email"  placeholder="email" required> 
    </div>
  <div class="form-group">
        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
    </div>
	
	<div class="form-group">
        <input type="number" class="form-control" id="phone" name="phone" placeholder="Phone" required>
    </div>
	
	<div class="form-group">
        <input type="text" class="form-control" id="city" name="city" placeholder="city" required>
    </div>
	
	<div class="form-group">
        <input type="text" class="form-control" id="address" name="address" placeholder="Address" required>
    </div>
	
<button type="submit" class="btn btn-primary">Submit</button>
</fieldset>
<br>
 <p>Already have an account?<a href="#"  data-toggle="modal" data-target="#myModal"></span> Login</a>
</form>
</div>

  </div>
  <br><br>
  <center> <p><small>Copyright &copy; Lifestyle Store. All Rights Reserved <br>Contact Us: +91 90000 00000</small></p> 
</center>
</div>
</div>
</div>
</body>


 <!--footer-->
 
 
 </html>