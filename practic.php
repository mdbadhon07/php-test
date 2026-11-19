<?php
$mysqli = new mysqli('127.0.0.1', 'practice_user', 'NewPass123!', 'practice_db', 3306);

if ($mysqli->connect_error) {
    die('Connection failed: ' . $mysqli->connect_error);
}

echo 'Connected to MySQL! 2';