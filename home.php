<?php
session_start();
if(isset($_SESSION['username'])){
	echo "<a href = 'home.php'><button type='button'>Home</button></a>";
	echo '<h3>Welcome ' . $_SESSION ['username']."</h3><br>";
	echo "<a href = 'logout.php'><button type='button'>Log out</button></a>";
}
else{
echo 'You are not logged in! Please log-in first. <a href = "login.html"><button>Log In</button></a>';
}
?>

