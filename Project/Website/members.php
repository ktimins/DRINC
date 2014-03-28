<?php include 'header.php'; 



if(isset($_COOKIE['ID_my_site'])) {

	echo "<center>";

	$result = pg_query("SELECT username, password FROM logins WHERE username = '" . addslashes($_COOKIE['ID_my_site']) . "' AND password = '" . addslashes($_COOKIE['Key_my_site']) . "';");

	while($row = pg_fetch_array($result))

	{

		echo "You are logged in";
	}




	// Get how many drincs are in the database
	$result= pg_query("SELECT COUNT(*) FROM drincs;");
	$somevariable = pg_fetch_row($result);
	$rowCount = $somevariable[0]; 

	$rowDivide = 0;
	$rowDivide = $rowCount / 5;
	$rowMod = 0;
	$rowMod = $rowCount % 5;

	$tableRows = $rowDivide;
	if ($rowMod > 0) {
		$tableRows++;
	}

	echo "<table>";
	//    for ($i = 1; $i <= $tableRows; $i++) {
	$i = 1;
	echo "<tr>";
	while ($i <= $rowCount)
	{
		$result = pg_query("SELECT name FROM drincs WHERE testid=".$i);
		$something=pg_fetch_row($result);
		echo "<td><a href=\"makeDrinc.php/?id=" .$i."\">".$something[0]."</a></td>";
		if ($i % 5 == 0)
		{
			echo "</tr><tr>";
		}
		$i++;

	}
	echo "</tr>";
	//for ($n = 1; $n < 6; $n++) {
	//if ($i*$n <= $rowCount) {
	//		$result = pg_query("SELECT name FROM drincs WHERE testid=".($i*5)+$n);
	//		$something=pg_fetch_row($result);
	//       echo "<td><a href=\"makeDrinc.php/?id=" . ($i*5)+$n ."\">".$something[0]."</td>";
	//  }
	//  }
	//  }
	echo "</table>";
	echo "</center>";


} else {

	echo "NO! LOG IN FIRST!";

}



include 'footer.php'; ?>
