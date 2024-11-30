<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'db_movingservice';

// membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $database);

// mengecek koneksi
if (!$conn) {
    die('Connection Failed:' . mysqli_connect_error());
}
