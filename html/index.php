<html>
<?php

echo 'PHP Version: ' . phpversion();

$servername = "mysqlserver";
$username = "root";
$password = "myPassword";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "<br /> Connected successfully";
?>

</html>