<?php
include "dbconnect.php";
$privilege=" ";
if(isset($_POST['submit'])){
	@$username=mysql_real_escape_string($_POST['username']);
	@$competence=mysql_real_escape_string($_POST['competence']);
	@$preparedness=mysql_real_escape_string($_POST['preparedness']);
	@$delivery_mode=mysql_real_escape_string($_POST['delivery_mode']);
	@$attendance=mysql_real_escape_string($_POST['attendance']);
	@$course_meet_your_expectation=mysql_real_escape_string($_POST['course_meet_your_expectation']);

	$code=mysql_query("select * FROM user WHERE username='$username' AND (privilege='telecom2' || privilege='ceit2')") or die(mysql_error());
if(mysql_num_rows($code)==1){
	$mysql=mysql_query("SELECT * FROM cs212 WHERE username='$username'") or die (mysql_error());
	if(mysql_num_rows($mysql)>0){
		echo "you have already assess the course";
		}

		else{
	$query=("insert into cs212 (username,competence,preparedness,delivery_mode,attendance,course_meet_your_expectation)
	VALUES ('$username','$competence','$preparedness','$delivery_mode','$attendance','$course_meet_your_expectation')");
	$sql=mysql_query($query) or die(mysql_error());
	echo "done";
	}
	}
	else{
		echo ("wrong username");
	}
	}
?>
