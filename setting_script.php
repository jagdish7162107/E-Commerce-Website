<?php 
include 'common.php';




$email = mysqli_real_escape_string($con, $_POST['email']);
$password = mysqli_real_escape_string($con, $_POST['password']);
$new_password = mysqli_real_escape_string($con, $_POST['new_password']);
$confirm_password = mysqli_real_escape_string($con, $_POST['confirm_password']);



  $select_query="SELECT * from users where email='$email'";
  $select_query_result=mysqli_query($con,$select_query);
  $select_query_fetch=mysqli_num_rows($select_query_result);
   

	$row = mysqli_fetch_array($select_query_result);
	$oldpassword = $row['Password'];
	$oldemail = $row['email'];
  if($select_query_fetch>0 && $oldpassword == $password){
	if($oldpassword==$new_password)
	{
		echo '<center><b><h3>same as old password <a href=setting.php>Retry again</a></h3></b></center>';
	}
 else if($new_password!=$confirm_password){ 
 	echo '<center><b><h3>password have not matched <a href=setting.php>Retry again</a></h3></b></center>';
      }
  else if($new_password==$confirm_password){

   $upd="UPDATE users SET Password='$new_password' where email='$email'";
   $upd_query=mysqli_query($con,$upd);
     header('location:home.php');
  }
  
}
else {
      
      echo '<center><b><h3>You entered invalid email or invalid old password <a href=setting.php>Retry again</a></h3></b></center><br>';
  
}
 
	  
  ?>