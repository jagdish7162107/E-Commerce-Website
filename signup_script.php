
<?php
  require 'common.php';
    if(isset($_SESSION['email']))
    {
    	echo "Log out first for create new account <a href=logout.php>Are you sure want to logout</a";
    	 
    }
    else{
    $name = mysqli_real_escape_string($con,$_POST['name']);
    $username = mysqli_real_escape_string($con,$_POST['username']);
	$email = mysqli_real_escape_string($con,$_POST['email']);
	 $password = mysqli_real_escape_string($con,$_POST['password']);
	
	 $contact = mysqli_real_escape_string($con,$_POST['phone']);
	
	$city = mysqli_real_escape_string($con,$_POST['city']);
	$address = mysqli_real_escape_string($con,$_POST['address']);
	
	$select_query="SELECT * from users where email='$email'";
	$select_query_result=mysqli_query($con,$select_query);
	$email_row_fetch=mysqli_num_rows($select_query_result);


	$select_user_query="SELECT * from users where Username='$username'";
	$select_user_query_result=mysqli_query($con,$select_user_query);
	$user_row_fetch=mysqli_num_rows($select_user_query_result);

     

  if(($email_row_fetch)>0){
  	
  	    
		echo "<br><br><br><br><br><center><b>email is already exist.please <a href=signup.php>Try again</a></b><center>";
		exit();
		
	} 
	else if(($user_row_fetch)>0){
           echo "<br><br><br><br><br><center><b>username is already exits.please <a href=signup.php> Try again</a></b></center>";
                exit();

	}
	else if(($email_num_fetch)==0 && ($user_row_fetch)==0){
	$user_registration_query="INSERT INTO users (Name, email, Password, Contact, City,  Address,Username) 
        VALUES('$name', '$email','$password','$contact','$city','$address','$username')";

        	$sql_submit = mysqli_query($con,$user_registration_query) or die (mysqli_error($con));
    
      $_SESSION['email']=$email;
      $_SESSION['Username']=$username;
      $SESSION['id']=mysqli_insert_id($con);
      header('location:home.php');
  }
}
?>