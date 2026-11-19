
<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "users_db";
$port = 3306;

$conn = mysqli_connect($servername, $username, $password, $dbname, $port);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";
?>
