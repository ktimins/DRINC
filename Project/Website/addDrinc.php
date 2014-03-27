<?php
$connection_id=pg_connect('host=localhost dbname=drinc user=drinc password=cjwang');

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $string = "";
    for ($i = 1; $i<10; $i++) {
        $tmp = $_POST[$i];
        if ($tmp != 0) {
            $string += $i-1.",".$tmp;
        }
    }
    $result = pg_exec("INSERT INTO drincs (name, ingredients) VALUES ('".$name."','".$string."');");
}

header("Location: members.php");
?>
