<?php
require 'common.php';
  

$email = mysqli_real_escape_string($con, $_POST['email']);
$password = mysqli_real_escape_string($con, $_POST['password']);

  $select_query="SELECT * from users where email='$email' and password='$password'";
  $select_query_result=mysqli_query($con,$select_query);
  $total_row_fetch=mysqli_num_rows($select_query_result);
  
  if(($total_row_fetch)==1)
  {
     $_SESSION['email']=$email;
      $_SESSION['id']=mysqli_insert_id($con);
       header('location:home.php');
      
   
  } 
  else {
      
       echo '<br><br><br><br><center><b>Invalid email and password.Please <a href=index.php>Try again</a></b></center>'; 
     
    }
  
?>
