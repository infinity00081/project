<html>
<style>
body { 
    background: url("Capture.jpg");
	background-repeat: no-repeat;
	background-size: 100% 100%;
	opacity: 0.7;
    
}
.button1 {
position: relative;
font-family: Verdana, Arial, Helvetica, sans-serif; 
font-size: 20px; 
font-weight: bold; 
color: #060505;
border: #060505;
border-style: solid;
border-width: 2px;
 left: 42%;
 top: 50%;
 background-color: #938383;
 width: 9em;  height: 3em;
}

.button1:hover
{
  background-color: black;
  color: white; 
}

div.relative2 {
    position: relative;
    width: 100%;
    height: 30%;
    border: 3px solid #343434;
} 

div.h1
{
	font-family: Verdana, Arial, Helvetica, sans-serif; 
	font-size: 50px; 
    font-weight: bold; 
	color: #fffcfc;
	position: absolute;
	left: 33%;
    top: 50%;
}




</style>

<?php
$host="localhost";
$username= "root";
$password= "";
$db_name="webpage";
$tbl_name="container";
$shirt= $_POST['gshirtf'];
$price= $_POST['gpricef'];
$qty= $_POST['gqtyf'];

$prices = (int)$price;
$quantity = (int)$qty;

$prod = $prices*$quantity;

$con = mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("webpage", $con)or die("cannot select DB");

$sql="INSERT INTO container(Product,Price,Qty,Total) VALUES('$shirt','$price','$qty','$prod')";
$result = mysql_query($sql);
if($result){
	
}
else
{
	
}
echo "<div CLASS = relative2>";
echo "<div CLASS = h1>";
echo "SUCCESSFUL!";
echo "</div>";
echo "</div>";
echo "<form action=girlshirts.php>";
echo "<input type = SUBMIT Name = submit1 value= DONE CLASS = button1>";
echo "</form>";
?>


</html>