<?php
$host="localhost";
$username= "root";
$password= "";
$db_name="webpage";
$tbl_name="clothingdatabase";
$loguser= $_POST['loginuser'];
$logpass= $_POST['loginpass'];


//vigenere
$pass = $logpass;
$key = "LOVE";
$keyLength = strlen($key);
$keyIndex = 0;
$message = str_split("$pass");
$output = '';
foreach($message as $value) // Loop through input string array
{
    $thisValueASCII = ord($value);

    if($thisValueASCII >= 65 && $thisValueASCII <= 90) // if is uppercase
    {
        $thisValueASCIIOffset = 64;
    } else // if is lowercase
    {
        $thisValueASCIIOffset = 97;
    }

    $letter_value_corrected = $thisValueASCII - $thisValueASCIIOffset;
    $key_index_corrected = $keyIndex % $keyLength; // This is the same as fmod but I prefer this notation.

    $key_ascii_value = ord($key[$key_index_corrected]);

    if($key_ascii_value >= 65 && $key_ascii_value <= 90) // if is uppercase
    {
        $key_offset = 64;
    } else // if is lowercase
    {
        $key_offset = 97;
    }

    $final_key = $key_ascii_value - $key_offset;

    $letter_value_encrypted = ($letter_value_corrected + $final_key)%26;

    $output = $output . chr($letter_value_encrypted + $thisValueASCIIOffset);
    $keyIndex++;
}

//echo $output;
echo "<br>";

//caesar cipher

    $str = $output;
	$n = 10;
	$ret = "";
	for($i = 0, $l = strlen($str); $i < $l; ++$i) {
		$c = ord($str[$i]);
		if (97 <= $c && $c < 123) {
			$ret.= chr(($c + $n + 7) % 26 + 97);
		} else if(65 <= $c && $c < 91) {
			$ret.= chr(($c + $n + 13) % 26 + 65);
		} else {
			$ret.= $str[$i];
		}
	}
	//echo "$ret";
	echo "<br>";
//rot 1

$string = $ret;
$newstring = $string;

for ($i=0;$i<strlen($string);$i++) {

    $ascii = ord($string[$i]);
    if($ascii == 90) { //uppercase bound
        $ascii = 65; //reset back to 'A' 
        } 
    else if($ascii == 122) { //lowercase bound
        $ascii = 97; //reset back to 'a' 
        } 
    else {
        $ascii++;
    }
    $newstring[$i] = chr($ascii);
}
$newstring2 = $newstring;
//echo "<p>" . $newstring2 . "</p>";

// MORSE CODE
$input=$newstring2;

    $lettertomorse=array();
    $lettertomorse["a"]=".-";
    $lettertomorse["b"]="-...";
    $lettertomorse["c"]="-.-.";
    $lettertomorse["d"]="-..";
    $lettertomorse["e"]=".";
    $lettertomorse["f"]="..-.";
    $lettertomorse["g"]="--.";
    $lettertomorse["h"]="....";
    $lettertomorse["i"]="..";
    $lettertomorse["j"]=".---";
    $lettertomorse["k"]="-.-";
    $lettertomorse["l"]=".-..";
    $lettertomorse["m"]="--";
    $lettertomorse["n"]="-.";
    $lettertomorse["o"]="---";
    $lettertomorse["p"]=".--.";
    $lettertomorse["q"]="--.-";
    $lettertomorse["r"]=".-.";
    $lettertomorse["s"]="...";
    $lettertomorse["t"]="-";
    $lettertomorse["u"]="..-";
    $lettertomorse["v"]="...-";
    $lettertomorse["w"]=".--";
    $lettertomorse["x"]="-..-";
    $lettertomorse["y"]="-.--";
    $lettertomorse["z"]="--..";
    $lettertomorse["1"]=".----";
    $lettertomorse["2"]="..---";
    $lettertomorse["3"]="...--";
    $lettertomorse["4"]="....-";
    $lettertomorse["5"]=".....";
    $lettertomorse["6"]="-....";
    $lettertomorse["7"]="--...";
    $lettertomorse["8"]="---..";
    $lettertomorse["9"]="----.";
    $lettertomorse["0"]="-----";
    $lettertomorse[" "]="   ";
    $lettertomorse["."]=".-.-.-";
    $lettertomorse[","]="--..--";
    $lettertomorse["EOM"]=".-.-.";

    $morsetoletter=array();
    reset($lettertomorse);
    while (list($letter,$code)=each($lettertomorse)) {
	$morsetoletter[$code]=$letter;
    }

    function morse_encode($input) {
	global $lettertomorse;

	$line="";
	for ($i=0;$i<strlen($input);$i++) {
	    $letter=substr($input,$i,1);

	    // ignore unknown characters
	    if ($lettertomorse[$letter]=="") continue;

	    $line.=$lettertomorse[$letter]." ";
	}
	//return $line;
    }

    
	
	//middle
	
	 if ($input!="") {
	echo morse_encode($input),"<br>\n";
    }

    if ($input!="") {
	echo "\n<pre>";

	$line1="";
	$line2="";

	for ($i=0;$i<strlen($input);$i++) {
	    $letter=substr($input,$i,1);

	   // ignore unknown characters
	    if ($lettertomorse[$letter]=="") continue;

	    $line1.=$lettertomorse[$letter]." ";
	    $line2.=$letter;
	    for ($j=0;$j<strlen($lettertomorse[$letter]);$j++)
		$line2.=" ";
	    //$size+=strlen($lettertomorse[$letter])+1;

	    //if ($size>70) {
		
		//$line1="";
		//$line2="";
		//$size=0;
	    //}
	}

	
	
	
    }
	//echo "$line1\n";
	//echo "$line2\n\n";
	//echo "\n</pre>\n";
	
//END OF MORSE CODE






$con = mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("webpage", $con)or die("cannot select DB");


//$loguser
	
    
    $SQL = "SELECT * FROM clothingdatabase WHERE Username = $loguser AND Password = $line1";
	$result = mysql_query($SQL);
	
	if ($result)
	{
	}
	else 
	{
	$errorMessage = "Error logging on";
	}
	
	$num_rows = mysql_num_rows($result);
	
	if ($num_rows > 0) 
	{
	session_start();
	$_SESSION['login'] = "1";
	header ("Location: home.php");
	}
	else 
	{
	$errorMessage = "Invalid Login";
	session_start();
	$_SESSION['login'] = '';
	}
	


	



?>





