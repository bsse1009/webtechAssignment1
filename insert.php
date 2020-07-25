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

if ($_POST['password']!= $_POST['confirm_password'])
{
     echo("Oops! Password did not match! <br>");
     die('<a href="sign-up.html"> Try again </a>' );
}

$sql = "INSERT INTO users (UserName, Email, Password) 
       VALUES ('$_POST[username]', '$_POST[email]', '$_POST[password]')";

if (mysqli_query($conn, $sql)) {
    echo "<h4>Congratulations <strong>$_POST[username]</strong>!!</h4>";
    echo "You created an account successfully!<br>";
    echo "Please <a href = 'login.html' ><button>Log In</button></a> for Entry!!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
