<?php 
$user = 'root';
$password = 'password';
$databaseName = 'receptenboek';
$host = 'mariadb';
$conn = mysqli_connect($host, $user, $password, $databaseName);


if (mysqli_connect_error()) {
    die("Connection failed: " . mysqli_connect_error());
} else {
}
