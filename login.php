<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDBi";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "database connected <br>";
$username = $_POST['username'];	
$pass = $_POST['password'];
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    $flag = 0;
    while($row = mysqli_fetch_assoc($result)) {
        if($row["UserName"] == $username)
        {
        	$flag = 1;
        	if($row["Password"] == $pass)
        	{
        		session_start();
				$_SESSION['username'] = $username;
				echo "<a href = 'home.php'><button type='button'>Home</button></a>";
        		echo "<h3>Welcome  $username!!</h3><br>";
        		echo "<a href = 'logout.php'><button type='button'>Log out</button></a>";
        	}
        	else{
        		echo "incorrect password! <br>";
        		echo "<a href = 'login.html'><button type='button'>Try Again</button></a>";
        	} 
        	break;
        }
    }
    if(!$flag){
    	echo "incorrect username or password!<br>";
    	echo "<a href = 'login.html'><button type='button'>Try Again</button></a>";
    }
} else {
	    echo "0 results";
	}


mysqli_close($conn);
?>
