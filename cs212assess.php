<html>
<table height="70%" width="60%" align="center" border="0" bgcolor="silver">
  <title>view the students assessment </title>
<tr><td height="3%" width="2%" colspan="6" ><img src="asses1.jpg" height="100%" width="100%" align="center"></td></tr>
<tr><td bgcolor="green" align='center'><font color="yellow">No:</font></td>
     <td bgcolor="green" align='center'><font color="yellow">competence</font></td>
	 <td bgcolor="green" align='center'><font color="yellow">preparedness</font></td>
	 <td bgcolor="green" align='center'><font color="yellow">delivery_mode</font></td>
	 <td bgcolor="green" align='center'><font color="yellow">attendance</font></td>
	 <td bgcolor="green" align='center'><font color="yellow">course_meet_your_expectation</font></td>
</tr><br>

<?php
include "dbconnect.php";
//include "session.php";
$query=mysql_query("SELECT * FROM cs212") or die (mysql_error());
while($sql=mysql_fetch_array($query)){
echo "<tr><td align='center'>".$sql['ID']."</td>"."<td align='center'>".$sql['competence']."</td>"."<td align='center'>".$sql['preparedness']."</td>"."<td align='center'>".$sql['delivery_mode']."</td>"."<td align='center'>".$sql['attendance']."</td>"."<td align='center'>".$sql['course_meet_your_expectation']."</td><tr>";
}
?>

<tr><td colspan="5" align="center" bgcolor="brown"><h2><font color="gold">this is how students assess this course<br> thanx for your cooperation<br></font>
  <td bgcolor="brown" align="center"><a href="logout.php"><strong>LOGOUT</strong></a> <br><br>
   <a href="password.php"><font color="gold"><i><h2>change password</h2></i></font></a></td></h2></td></tr>
<tr><td height="2%" width="2%" colspan="6" bgcolor="silver" ><marquee><font color="red">ERASTO  &COPY UDSM TE</font></marquee></td></tr>
</table>
</html>
?>
