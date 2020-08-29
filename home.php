 
<?php
include 'common.php';

if(isset($_SESSION['email'])){

$select_item_query="SELECT * from items order by item_number ASC LIMIT 12";
  $select_query_result=mysqli_query($con,$select_item_query);
  $total_row_fetch=mysqli_num_rows($select_query_result);
  }
  else {
    header('location:index.php');
  }
?>

<body>
     <?php 
 include 'header.php';
 ?>


   
<br><br>

 <div class="jumbotron container-fluid" style="background-color:gray;">
 <center>
 <h1>Welcome to our LyfeStyle Store!</h1>
 <p>We have best watches, camera and shirts for you.No need to hunt around, we have all in one place.</p>
 </center>
 </div>
 <div class="container">
 <div class="row text-center">
    
 <?php while($row=mysqli_fetch_array($select_query_result)){ ?>
 <div class="col-md-3 col-md-6">
 <div class="thumbnail">
  <img src="images/<?php echo $row['item_number']; ?>.jpg" alt="camra" >
  <div class="caption"><h4><?php echo $row['item_name']; ?> </h4></div>
  <p>Rs <?php echo $row['price']; ?></p>

    <?php if(isset($_SESSION['email'])) { ?>
   <form action="cart.php" method="POST">
     <input type="hidden" id="pid" name="pid" value="<?php echo $row['item_number'] ?>">
     <input type="hidden" id="eid" name="eid" value="<?php echo $_SESSION['email'];?>">
      <input type="submit" class="btn btn-primary bnt-block" name="button" id="button" value="Add to Shopping Cart" />
   </form>
   <?php } ?>
  
 </div>
 </div>
 <?php } ?> 
 

 </div>
 
 <br><br><br>
 
 <!--footer-->
  </div>
  <?php 
include 'footer.php';
?>
  </body>

   </html>