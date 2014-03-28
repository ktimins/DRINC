<?php include 'header.php';


if(isset($_COOKIE['ID_my_site'])) { 
$userid = $_COOKIE['ID_my_site'];

if ($userid == "admin"){
$result = pg_query("SELECT username, password FROM logins WHERE username = '" . addslashes($_COOKIE['ID_my_site']) . "' AND password = '" . addslashes($_COOKIE['Key_my_site']) . "';");
	while ($row = pg_fetch_array($result))
	{
		echo "Welcome admin";

echo "Update your drinc ingredients here<br />";
echo '<form method="post" action="updateIngredients.php">';
echo "<table>";
for ($i = 1; $i < 10; $i++){
	echo "<tr>";
	echo "<td>";
$results=pg_query("SELECT ingredient FROM ingredients WHERE testid = ".$i.";");
$something=pg_fetch_row($results);
	echo"$something[0]";

echo "</td>";
	echo '<td><input type="text" name='.$i.' size="50"></td>';
}
	echo '<tr><td><input type="submit" value="submit"></td></tr>';
	echo "</table>";







	
}




			}

else {
echo "You are not an admin";
}
	}

else {
	echo "You are not signed in";
	}

?>
