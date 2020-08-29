<?php
require 'admin_common.php';
 
 if(isset($_POST['submit'])){
 $itemname=mysqli_real_escape_string($con,$_POST['itemname']);
 $itemnumber=mysqli_real_escape_string($con,$_POST['itemnumber']);
 
 $select_query="DELETE from items where item_number='$itemnumber'";
 $delete_query = mysqli_query($con,$select_query) or die(mysqli_error($con));
    echo "<br><br><center><h4><b>delete successfull</b></h4></center>";

}

?>
<?php 
include 'admin_header.php';
?>
<body>
<br><br><br><br>
<div class="col-sm-offset-3 col-sm-6 log">
<form roll="form" action=" " method="POST" enctype="multipart/form-data">
 <feildset>
  <center>
  <h3>!!Remove Item!!</h3>
  
  </center>
    <div class="form-group">
      <label for="itemname">Item Name:</label>
      <input type="text" class="form-control" id="itemname" name="itemname" required>
    </div>
    <div class="form-group">
      <label for="itemnumber">Item number:</label>
      <input type="number" class="form-control" id="itemnumber" name="itemnumber" requied>
    </div>

       <div class="form-group">
      <input type="submit" class="btn btn-primary" id="submit" name="submit" value="submit" requied>
    </div>
    </feildset>
    <a href="admin_login.php" class="btn btn-link"><b>Logout</b></a>
    <a href="admin_index.php" class="btn btn-link"><b>Go to index page</b></a>
    </form>
    </div>
    </body>
    </html