<?php include("header.php");
$PID = $_GET["id"];
$result = pg_query("SELECT name FROM drincs WHERE testid=".$PID.";");
$name = pg_fetch_array($result)[0];
$result = pg_query("SELECT ingredients FROM drincs WHERE testid =".$PID.";");
$ingre = pg_fetch_array($result)[0];

echo "<h2>Making your ".$name.".</h2>";

// Library PHPSerial method
//include "PHPSerial.php";
//$serial = new phpSerial;
//$serial->deviceSet("/dev/ttyACM0");
//$serial->confBaudRate(9600);
//$serial->confParity("none");
//$serial->confCharacterLength(8);
//$serial->confStopBits(1);
//$serial->deviceOpen()
//$serial->sendMessage($ingre."\n");
//$serial->deviceClose();

// Strait fopen method
//$fp =fopen("com3", "w");
//fwrite($fp, $ingre."\n");
//fclose($fp);

//header("location: members.php");
include("footer.php");
?>
