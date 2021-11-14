<?php

// variabel
define('DB_SERVER', '192.168.30.11');
define('DB_USERNAME', 'qudsdev');
define('DB_PASSWORD', 'qudsdev');
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
