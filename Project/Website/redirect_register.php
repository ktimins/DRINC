<?php
$connection_id=pg_connect('host=localhost dbname=drinc user=drinc password=cjwang');

//this code runs if the form has been submitted
if (isset($_POST['submit'])){
//make sure they did not leave fields blank

if(!$_POST['username'] | !$_POST['password'] | !$_POST['password2']){
die('You did not complete all of the required fields');
}

//check if the username has already been taken 
if(!get_magic_quotes_gpc()){
$_POST['username']=addslashes($_POST['username']);
}
$usercheck=$_POST['username'];
$check=pg_exec("SELECT username FROM logins WHERE username ='$usercheck'")
or die(pg_last_error());
$check2=pg_numrows($check);

//if the name exists it gives an error
if($check2 !=0){
die('Sorry, the username '.$_POST['username'].' is already in use.');
}

//this makes sure both passwords entered match
if($_POST['password']!=$_POST['password2']){
die('Your passwords did not match.');
}

//here we encrypt the password and add slashes if needed. add salt before hash.
$_POST['password'] = hash('sha512', $_POST['password'] . "SALTSALTSALT");
if(!get_magic_quotes_gpc()){
$_POST['password']=addslashes($_POST['password']);
$_POST['username']=addslashes($_POST['username']);
}

//now we insert it into the database
$insert="INSERT INTO logins(username, password)
VALUES('".$_POST['username']."','".$_POST['password']."')";
$add_member=pg_exec($insert);

//redirect to login page
header("Location: login.php");

}


?>
