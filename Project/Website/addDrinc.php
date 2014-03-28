<?php
$connection_id=pg_connect('host=localhost dbname=drinc user=drinc password=cjwang');

//if (isset($_POST['Submit'])) {

    $name = $_POST['name'];
	echo "$name\n";
    $string = "";
    for ($i = 1; $i<10; $i++) {
        $tmp = $_POST[$i];
        if ($tmp != 0) {
			$onei = $i - 1;
            $string = $string . $onei.",".$tmp.",";
        }
    }
	$string = substr($string, 0, -1);
	echo "$string\n";
    $result = pg_query("INSERT INTO drincs (name, ingredients) VALUES ('".$name."','".$string."');");
	echo pg_fetch_row($result)[0]."\n";
	echo "$result\n";
	
//}

//header("Location: members.php");
?>
