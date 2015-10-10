<html>
<body>
<style>

body { 
    background: #00ff00 url("10842_tankfarmclothing2.png");
width: 100%;
height: 100%;
}
box {
  border: 1px solid rgba(0,0,0,0.1);
  box-shadow: 
    inset 0 2px 3px rgba(255,255,255,0.3),
    inset 0 -2px 3px rgba(0,0,0,0.3),
    0 1px 1px rgba(255,255,255,0.9);
}
input
{
  -moz-border-radius: 15px;
 border-radius: 15px;
    border:solid 1px black;
    padding:5px;
	color:black;
} 

#txtboxsize
{
    height:100px;
}

h2 {
    border-style: dashed;
    border-width: 3px;
    border-left-width: 10px;
    border-right-width: 10px;
    border-color: red;
}

h1 {
    font-family:pristina;
	color:white;
	text-align: center;
	font-size:500%;
	text-shadow: -1px 0 blue, 0 1px black, 1px 0 black, 0 -1px black;
}

</style>


<?php

echo "<form action='registerdatabase.php' method='post'>";
echo "<p align='center'><h1>Register</h1></p>";
echo "<table border=3 align='center' background='backgroundcolor.jpg' height=60% width=32%>";
echo "<tr>";
echo"<td align='center'>";
echo"<br>";
echo"<input type='text' name='firstname' size='30' placeholder='FirstName' required>" ;
echo"<br>" ;
echo"<br>" ;
echo"<input type='text' name='lastname' size='30' placeholder='Lastname' required>" ;
echo"<br>" ;
echo"<br>";
echo"<input type='email' name='email' size='30' placeholder='Email' required>";
echo"<br>";
echo"<br>";
echo"<input type='text' name='contactno' size='30' placeholder='Contact No.' required>";
echo"<br>";
echo"<br>";
echo"<input type='text' name='username' size='30' placeholder='Username' required>";
echo"<br>";
echo"<br>";
echo"<input type='text' name='password' size='30' placeholder='Password' required>";
echo"<br>";
echo"<br>";
echo"<input type='submit' value='REGISTER' size='30'>";
echo"</td>";
echo"</form>";
echo"</table>";

?>



</body>
</html>






