<html>
 <h3>erasto<h3>
 <?php 
 include "dbconnect.php" ;
 $query=mysql_query("SELECT * FROM user") or die (mysql_error());
while($sql=mysql_fetch_array($query)){
echo "<tr><td align='center'>".$sql['id']."</td>"."<td align='center'>".$sql['username']."</td>"."<td align='center'>".$sql['privilege']."</td><tr>";
}
?>
 </form>
 </html>