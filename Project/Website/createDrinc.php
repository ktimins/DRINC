<?php include 'header.php';

if(isset($_COOKIE['ID_my_site'])) {

    $result = pg_exec("SELECT username, password FROM logins WHERE username = '" . addslashes($_COOKIE['ID_my_site']) . "' AND password = '" . addslashes($_COOKIE['Key_my_site']) . "';");

    while($row = pg_fetch_array($result))

    {

        echo "You are logged in";
    }

    echo "<form method=\"post\" action=\"addDrinc.php\">";
    echo "<table>";
    echo "<tr><th>NO MORE THAN 16 PARTS PER DRINC PLEASE.</th></tr>";
    for ($i = 1; $i < 10; $i++) {
        echo "<tr>";
        echo "<td>".pg_exec("SELECT ingredient FROM Ingredients WHERE PID=".$i.";")."</td>";
        echo "<td><input type=\"number\" min=\"0\" max=\"16\" name=\"".$i."\" value=\"0\"></td>";
        echo "</tr>";
    }
    echo "<tr>";
    echo "<td><input type=\"text\" name=\"name\" size=\"50\"></td>";
    echo "<td><input type=\"submit\" value=\"Submit\"></td>";
    echo "</tr></table>";








} else {

    echo "NO! LOG IN FIRST!";

}






include 'footer.php'; ?>
