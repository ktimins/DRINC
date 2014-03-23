<?php include 'header.php'; ?>

<form action="redirect_register.php"method = "post">

<table border="0">

<tr><td>Username:</td><td>

<input type="text" name="username" maxlength="60">

</td></tr>

<tr><td>Password:</td><td>

<input type="password" name="password" maxlength="10">

</td></tr>

<tr><td>Confirm password:</td><td>

<input type="password" name ="password2" maxlength="10">

</td></tr>

<tr><th colspan=2><input type="submit" name="submit" value="Register"></th></tr></table>

</form>







<?php include 'footer.php'; ?>
