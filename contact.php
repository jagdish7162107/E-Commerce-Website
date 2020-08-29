
<?php
require 'common.php';

?>
<?php
include 'header.php';
?>
<body>
<br><br><br><br>
<div class="container">
 
 <div class="row">
 <div class="col-md-8">
 <h3>LIVE SUPPORT</h3>
 <h4>24 Hour | 7 Days a week | 365 Day a year | Live technical support</h4>
  <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequit.
 </p>
  </div>
<div class="col-md-4">
  <img class="img-responsive" src="images/shoping.jpg" style="width:50% ;height:50%;">
</div>

 </div>


<!--contact page started-->
<div class="row">
 <div class=col-md-6>
 <h3>CONTACT US</h3>
  <form action="contact_script.php" enctype="multipart/form-data" roll="form" method="POST">
   <feildset>
   
    <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" id="name" name="name"  required>
  </div>

  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email" name="email"  required>
  </div>
   
  <div class="form-group">
    <label for="message">massege:</label>
    <br>
    <textarea name="message" id="message" value="message" rows="6" cols="73"> </textarea>
  </div>
<button type="submit" name="submit" id="submit" value="submit" class="btn btn-info">submit</button>
   </feildset>


  </form>
</div>
<div class="col-md-4">
  <h3>Company Information:</h3>
  <p>Room no-1048 Hostel-j<br> Nit jsr</p>
  <p>Phone: 9504403289</p>
  <p>Email:- jagdishkumar8262@gamil.com</p>
  <p>follow on: facebook, twitter</p>
</div>

</div>
</div>






 </body>
 <br><br>
 <?php
include 'footer.php';
?>
 </html>