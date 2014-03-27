<?php include 'header.php'; 



if(isset($_COOKIE['ID_my_site'])) {

    $result = pg_exec("SELECT username, password FROM logins WHERE username = '" . addslashes($_COOKIE['ID_my_site']) . "' AND password = '" . addslashes($_COOKIE['Key_my_site']) . "';");

    while($row = pg_fetch_array($result))

    {

        echo "You are logged in";
    }




    // Get how many drincs are in the database
    $rowCount = pg_exec("SELECT COUNT(*) FROM drincs;");
    $rowDivide = $rowCount / 5;
    $rowMod = $rowcount % 5;

    $tableRows = $rowDivide;
    if ($rowMod > 0) {
        $tableRows++;
    }

    echo "<table>";
    for ($i = 0; $i < $TableRows; $i++) {
        echo "<tr>";
        for ($n = 0; $n < 5; $n++) {
            echo "<td><a href=\"makeDrinc.php/?id=" . $i+$n ."\">".pg_exec("SELECT name FROM drincs WHERE PID=".$i+$n.";")."</td>";
        }
    }
    echo "</table>";


} else {

    echo "NO! LOG IN FIRST!";

}



include 'footer.php'; ?>
