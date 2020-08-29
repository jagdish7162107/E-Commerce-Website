<?php 
include 'common.php';
if(isset($_SESSION['email']))
{
	$item_id = mysqli_real_escape_string($con, $_POST['item_id']);
$delete_item= "DELETE from users_items where items_id='$item_id' " ;
$delete_query = mysqli_query($con,$delete_item);
}
header('location:item_detail.php');

?>