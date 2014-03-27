<?php
include("header.php");
$PID = $_GET["PID"];

$name = pg_exec("SELECT name FROM drincs WHERE PID=".$PID.";");
$ingre = pg_exec("SELECT ingredients FROM drincs WHERE PID =".$PID.";");

echo "<h2>Making your ".$name.".</h2>";

$fp =fopen("com7", "w");
fwrite($fp, $ingre."\n");
fclose($fp);

header("location: members.php");
include("footer.php");
?>
