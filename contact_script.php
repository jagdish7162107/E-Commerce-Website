<?php
include 'common.php';
   
   $name = mysqli_real_escape_string($con,$_POST['name']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $massege = mysqli_real_escape_string($con,$_POST['message']);


   $contact_query="INSERT INTO customer_contact(name,email,message)
   VALUES('$name','$email','$massege')";
   $run_query=mysqli_query($con,$contact_query) or die(mysqli_error($con));

  header('location:contact.php');
  

?>