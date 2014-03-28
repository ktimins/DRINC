<?php include 'header.php'; ?>

<h1>Photos of DRINC itself</h1>
<center>
<?php
$dir = 'pics/drinc';
if ($handle = opendir($dir)) {
	while (false !== ($entry = readdir($handle))) {
		if ($entry !== "." && $entry != "..") {
				//echo "$entry\n";
			echo '<img src="'.$dir.'/'.$entry.'" width="400" alt="'.substr($entry, 0, -4).'"><br /><br />';
		}
	}
}
?>

</center>
<?php include 'footer.php'; ?>
