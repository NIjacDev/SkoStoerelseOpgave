<?php

$servername = "localhost";
$username = "root";
$password = "LocalDB";
$dbName ="Skodb";

$conn = mysqli_connect($servername, $username, $password, $dbName);

if (!$conn)
{
    die("Connection failed: ".mysqli_connect_error());
}

echo "Connected successfully";

?>