<?php 
  
  require 'common.php';

   if(isset($_POST['pid']) && isset($_POST['eid'])){
   $pid = mysqli_real_escape_string($con,$_POST['pid']);
    $eid = mysqli_real_escape_string($con,$_POST['eid']);


    $pid_query="SELECT * from users_items where user_id = '$eid' and items_id ='$pid'";
	$select_pid_result = mysqli_query($con,$pid_query);

	$pid_row_fetch = mysqli_num_rows($select_pid_result);

    

$tid_query="SELECT * from items where item_number='$pid'";
	$select_tid_result=mysqli_query($con,$tid_query);
	$tid_row_fetch=mysqli_num_rows($select_tid_result);
     
     while($row=mysqli_fetch_array($select_tid_result))
     {
     	$item_id = $row['item_number'];
     	$item_name=$row['item_name'];
     	$price=$row['price'];
     }
    $quantity=1;
    
    if(($pid_row_fetch)==0)
    {
       
      
     
    	$add_item= "INSERT INTO users_items(item_name,price,items_id,user_id,quantity)
    	VALUES('$item_name','$price','$item_id', '$eid','$quantity')";

    	$submit_value=mysqli_query($con,$add_item) or die (mysqli_error($con));
    }
    else if(($pid_row_fetch)>0)
    {

      echo "<br><br><br><br><br><br><center><p><b>You have already added in your cart.you can update your quantity<a href=item_detail.php> here</a></b></p><center> ";
        exit();
       }

   }
    header('location:item_detail.php');
     

?>

