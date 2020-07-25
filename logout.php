<?php

	session_start();
	session_destroy();
	echo "You successfully logged out!";
	echo "<a href = 'home.php'><button type='button'>Home</button></a>";
	echo "<a href = 'login.html'><button type='button'>Log In</button></a>";
 ?>
