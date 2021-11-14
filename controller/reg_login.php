<?php

require_once('config.php');


session_start();

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM User WHERE email='$email' AND pass='$password'";

    $result = mysqli_query($koneksi, $query);
    $cek = mysqli_num_rows($result);

    if ($cek > 0) {
        $data = mysqli_fetch_assoc($result);
        $_SESSION["login"] = "true";
        if ($data['level'] == 'admin') {
            $_SESSION["level"] = "admin";
            $_SESSION["username"] = $data["username"];
            header('location: /jwb_webdinamis/view/dashboard/dashboard.php');
        } else {
            $_SESSION["level"] = "peserta";
            $_SESSION["username"] = $data["username"];
            header('location: /jwb_webdinamis/view/dashboard/dashboard.php');
        }
    } else {
        header('location: /jwb_webdinamis/view/login.php?status=error');
    }
} else {
    header('location: /jwb_webdinamis/view/login.php?status=error');
}
