<?php

// variabel
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'qudsdev');
// $servername = "localhost";
// $username = "root";
// $password = "";

// Create connection
$koneksi = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if ($koneksi->connect_error) {
  die("Connection failed: " . mysqli_error($koneksi));
} 

?>