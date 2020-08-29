<?php
include 'admin_common.php';

$username=mysqli_real_escape_string($con,$_POST['username']);
$password = mysqli_real_escape_string($con,$_POST['pwd']);
 
$select_query="SELECT * from admin where username='$username' and password='$password'";
	$select_query_result=mysqli_query($con,$select_query);
	$total_row_fetch=mysqli_num_rows($select_query_result);

	if(($total_row_fetch)==1)
  {
     $_SESSION['username']=$username;
      $_SESSION['id']=mysqli_insert_id($con);
       header('location:admin_index.php');
      
   
  } 
  else {
       //header('location:admin_login.php?id=Invalid username and password'); 
    echo '<center><b><h3>Invalid username and password <a href=admin_login.php>Try again</a></h3></b></center>';
     
    }


?>