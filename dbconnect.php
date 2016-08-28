<?php
$connect=mysql_connect('localhost','root',"");
$select=mysql_select_db('assessment',$connect) or die('fail to connect'."   ".mysql_error());
//echo "connected" ;
?>
