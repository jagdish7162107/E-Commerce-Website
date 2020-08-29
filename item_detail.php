 <?php 
include 'common.php';

  if(isset($_SESSION['email'])){
  $eid=$_SESSION['email'];
 $add_cart = "SELECT * from users_items where user_id='$eid' ";
   $add_cart_query=mysqli_query($con,$add_cart) ;
  

 }
 else 
    {
    header('location:index.php');

    }

   ?>


<?php 
include 'header.php';
?>
<body>
<br><br> <br>    
<div class="container">
          
    
     
   <div class="container col-sm-offset-1 col-sm-10 "> 
    <h3><b>Shopping Cart</b></h3>    
   <hr style="border-width:0.5px;border-color:gray;">
  <table class="table table-stripped table-responsive">
    <thead>
      <tr class="info">
        
        <th><span style="font-size:20px;">item name</span></th>
        <th><span style="font-size:20px;">price</strong></span></th>
        <th><span style="font-size:20px;">quantity</span></th>
        <th><span style="font-size:20px;">Remove</span></th>
        
      </tr>
    </thead>
    <tbody>
    <?php 
        $subtotal=0;
        
        while($list=mysqli_fetch_array($add_cart_query)) { ?>

      <tr class="warning">
        <td> <span style="font-size:15px; color:blue;"> <b><?php echo $list['item_name'];?></b></span></td>
        <td><span style="font-size:15px; color:red;"><b>Rs <?php echo  $list['price'];?></b></span></td>  

        <td><form action="update_quantity.php" method ="POST">
           <input class="btn btn-default" type="number" id="number" name="number" min="1" max="100" value=<?php echo $list['quantity'] ;?> >
           <input type="hidden" id="item_id" name="item_id" value=<?php echo $list['items_id'];?> >
           <input type="submit" id="submit" name="submit" class="btn btn-link" value="Update">
        </form></td>

        <td><form action="remove_cart.php" method ="POST">
           <input type="hidden" id="item_id" name="item_id" value=<?php echo $list['items_id'];?> >
           <input type="submit" id="submit" name="submit" class="btn btn-link" value="Remove">
        </form></td>


      </tr>
        <?php $subtotal+=($list['price'] * $list['quantity']);?>
       <?php } ?>
    </tbody>
  </table>
     <hr style="border-width:0.5px;border-color:gray;">
     <span style="color:black;font-size:150%; ">
   <?php echo "<b>Subtotal:</b>";?>
   </span>
     <span style="color:red; font-size:140%;"><?php echo "<b>Rs $subtotal</b>";?></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="success.php" class="btn btn-primary btn-lg" roll="button" style="float:right;">Confirm Order</a>
    <br><br><br><br><br><br>
     <span style="font-size:120%;">For add more item click <a href="home.php">here</a></span>
      
      <br><br><br><br><br><br>

</div>

</div>
</body>
<?php 
include 'footer.php';
?>
</html>
        

