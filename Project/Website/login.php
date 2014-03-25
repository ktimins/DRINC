<?php include 'header.php'; ?>

<?php

//connects to your database in the header



//checks if there is a login cookie

if(isset($_COOKIE['ID_my_site']))



    //if there is, it logs you in and directs you to the members page

{

    $username= addslashes($_COOKIE['ID_my_site']);

    $pass=addslashes($_COOKIE['Key_my_site']);

    $check=pg_exec("SELECT * FROM logins WHERE username='$username'")or

        die(pg_last_error());

    while($info=pg_fetch_array($check))

    {

        if($pass!=$info['password'])

        {

        }

        else

        {

            //redirect to members.php if you are already logged in

            header("Location: members.php");

        }

    }

}



//if the login form is submitted

if(isset($_POST['submit'])){//if form has been submitted



    //makes sure they filled it in

    if(!$_POST['username']|!$_POST['password'])

    {

        die('You did not fill in a required field.');

    }



    //checks it against the database

    if(!get_magic_quotes_gpc())

    {

        $_POST['username']=addslashes($_POST['username']);

    }



    $check=pg_exec("SELECT * FROM logins WHERE username = '".$_POST['username']."'")or die(pg_last_error());





    //gives error if user doesn't exist

    $check2=pg_numrows($check);

    if($check2==0)

    {

        die('That user does not exist in our database.<a href=register.php>Click here to register.</a>');

    }





    while($info=pg_fetch_array($check))

    {

        $_POST['password']=stripslashes($_POST['password']);

        $info['password']=stripslashes($info['password']);

        $_POST['password'] = hash('sha512', $_POST['password'] . "SALTSALTSALT");



        //gives error if the password is wrong

        if($_POST['password']!=$info['password'])

        {

            print "Sorry, the username and password to not match.";

        }



        else

        {

            //if login is ok then we add a cookie

            $_POST['username']=stripslashes($_POST['username']);

            $hour=time()+3600;

            setcookie(ID_my_site, $_POST['username'],$hour);

            setcookie(Key_my_site,$_POST['password'],$hour);



            //then redirect them to members area

            header("location: members.php");

        }

    }

}

else

{



    //if they are not logged in

?>







<form action="<?php echo $_SERVER['PHP_SELF']?>"method ="post">

<table border="0">

<tr><td colspan=2><h1>Login</h1></td></tr>

<tr><td>Username:</td><td>

<input type="text" name="username" maxlength="40">

</td></tr>

<tr><td>Password:</td><td>

<input type="password" name="password" maxlength="50">

</td></tr>

<tr><td colspan="2" align="right">

<input type="submit" name="submit" value="Login">

</td></tr></table>

</form>

<?php

}

?>

<?php include 'footer.php'; ?>
