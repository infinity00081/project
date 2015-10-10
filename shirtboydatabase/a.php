<?php
$host="localhost";
$username= "root";
$password= "";
$db_name="webpage";
$tbl_name="container";
$shirt= $_POST['a'];
$price= $_POST['pricea'];
$qty= $_POST['qtya'];

$con = mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("webpage", $con)or die("cannot select DB");

$sql="INSERT INTO container(Product,Price,Qty) VALUES('$shirt','$price','$qty')";
$result = mysql_query($sql);
if($result){
	echo"success";
}
else
{
	echo"NOT SUCCEED";
}

?>