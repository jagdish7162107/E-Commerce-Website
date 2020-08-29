<?php 
include 'common.php';
 if($_SESSION['email']){

 	$item_id = mysqli_real_escape_string($con, $_POST['item_id']);
$qty=mysqli_real_escape_string($con, $_POST['number']);
 
$update_qty= "UPDATE users_items SET quantity='$qty' where items_id='$item_id' " ;
$update_query = mysqli_query($con,$update_qty);

header('location:cart.php');
}

?>