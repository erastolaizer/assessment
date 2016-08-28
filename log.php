<?php
session_start();
include ("dbconnect.php");
 if(isset($_POST['submit'])){
 @$username=mysql_real_escape_string($_POST['username']);
 @$password=mysql_real_escape_string($_POST['password']);

 $sql=mysql_query("SELECT username,password,privilege,ID FROM user WHERE username='$username' AND password='$password'") or die (mysql_error());
 if(mysql_num_rows($sql)==1){
	 while($querry=mysql_fetch_array($sql)){
		 $_SESSION['username']=$querry['username'];
		 $_SESSION['password']=$querry['password'];
		 $_SESSION['privilege']=$querry['privilege'];
		 $_SESSION['ID']=$querry['ID'];

		 //echo "logged in";
		 if($_SESSION['privilege']==telecom2){
			 header("location:telecom2.php");
		 }
		 if($_SESSION['privilege']==ceit2){
			 header("location:ceit2.php");
		 }
		 if($_SESSION['privilege']==pricoict){
			 header("location:pricoict.php");
		 }
		 if($_SESSION['privilege']==cs212){
			 header("location:cs212assess.php");
		 }
	 }
 }
 else{
	 	 	 echo"wrong password or username";
	      //header("location:login.php");

 }
 }
?>
