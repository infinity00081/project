<?php
$host = "localhost";
$username = "root";
$password = "";


$con = mysql_connect("$host", "$username", "$password") or die ("cannot select DB");
mysql_select_db("webpage", $con) or die ("cannote select DB");

$query = "SELECT * FROM container"; 
	 
$result = mysql_query($query) or die(mysql_error());

$projects = array();
while($project = mysql_fetch_assoc($result)) 
{  
	$projects[] = $project;
}
 foreach ($projects as $project)
    {
?>
<tr>
        <td><?php echo $project['Product']; ?></td>
        <td><?php echo $project['Price']; ?></td>
        <td><?php echo $project['Qty']; ?></td>
		
		
		<br>
		
		
</tr>

<?php
        }
    ?>
