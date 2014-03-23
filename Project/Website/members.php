<?php include 'header.php'; 



if(isset($_COOKIE['ID_my_site']))

	{

			$result = pg_exec("SELECT username, password FROM logins WHERE username = '" . addslashes($_COOKIE['ID_my_site']) . "' AND password = '" . addslashes($_COOKIE['Key_my_site']) . "';");

			while($row = pg_fetch_array($result))

				{

					echo "You are logged in";
						}


	}

	

else

{

	echo "NO! LOG IN FIRST!";

}



 include 'footer.php'; ?>
