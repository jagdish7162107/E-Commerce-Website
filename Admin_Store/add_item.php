<?php
require 'admin_common.php';

if(isset($_POST['submit']))
{


$itemname = mysqli_real_escape_string($con,$_POST['itemname']);
  $price = mysqli_real_escape_string($con,$_POST['itemprice']);
   $itemnumber = mysqli_real_escape_string($con,$_POST['itemnumber']); 
   
  $select_query="SELECT * from items where item_number='$itemnumber'";
  $select_query_result=mysqli_query($con,$select_query);
  $total_row_fetch=mysqli_num_rows($select_query_result);

    
  if(($total_row_fetch)>0){
    
    
    echo "<br><br><br><br><center><h3><b>this item  is already exist.please <a href=add_item.php>Add another item</a></b></h3></center>";
    exit();
  } 
  else if(($total_row_fetch)==0){
  $item_query="INSERT INTO items (item_name, price, item_number) 
        VALUES('$itemname', '$price','$itemnumber')";

          $sql_submit = mysqli_query($con,$item_query) or die (mysqli_error($con));
    
      
      $_SESSION['id']=mysqli_insert_id($con);

      
      
  }

  echo "<br><br><br><center><h3><b>added successfully</a></b></h3></center>";
}


?>
<body>

<?php include 'admin_header.php';?>
 <br><br><br><br>
 <div class="container">
  
<div class="col-sm-offset-3 col-sm-6 log" >
 

<form roll="form" action=" " method="POST" entype="multipart/form-data">
 <feildset>
  <center>
  <h3>!!Add New Item!!</h3>
  <hr />
  </center>
    <div class="form-group">
      <label for="itemname">Item Name:</label>
      <input type="text" class="form-control" id="itemname" name="itemname" required>
    </div>
    <div class="form-group">
      <label for="price">price:</label>
      <input type="number" class="form-control" id="itemprice" name="itemprice" required>
    </div>

    <div class="form-group">
      <label for="itemnumber">Item number:</label>
      <input type="number" class="form-control" id="itemnumber" name="itemnumber" requied>
    </div>

    <div class="form-group">
      <label for="itemimage">select image:</label>
      <input type="file" id="field" name="field" value="field" requied>
    </div>

    <button type="submit" id="submit" name="submit" class="btn btn-primary">Submit</button>
  </feildset>
    <div style="float:right;">
  <a href="admin_login.php" class="btn btn-primary">logout</a></span>
  <a href="admin_index.php" class="btn btn-primary">Go to index page</a></span>
  </div>
</form>
<br><br><br>
</div>
</div>


</body>
</html>