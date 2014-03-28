<?php include 'header.php';

for ($i =1; $i<10; $i++){
if (!empty($_POST[$i])){
echo "<br />";

$result = pg_query("UPDATE ingredients SET ingredient='".$_POST[$i]."' WHERE testid = ".$i.";");
}
}

header("Location: drincAdmin.php");
?>
