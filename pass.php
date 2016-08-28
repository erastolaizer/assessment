<?php
session_start();
include 'dbconnect.php';
if(isset($_POST['submit'])){
       $username = mysql_real_escape_string($_POST['username']);
			 $password = mysql_real_escape_string($_POST['password']);
			 $newpassword =mysql_real_escape_string( $_POST['newpassword']);
			 $confirmnewpassword = mysql_real_escape_string($_POST['confirmnewpassword']);
			 $result = mysql_query("SELECT * FROM user WHERE username='$username' AND password='$password'");
	if(mysql_num_rows($result)==0){
				 echo "username or password does not exist";
				 include "password.php";
			 }
	 else{

			    if($newpassword==$confirmnewpassword){
			 $sql=mysql_query("UPDATE user SET password='$newpassword' WHERE username='$username'");
			 echo "Congratulations You have successfully changed your password";
			 }
		    	else{
			echo "Passwords do not match";
			 include "password.php";
			}
}
}
?>
