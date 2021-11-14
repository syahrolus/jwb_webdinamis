<?php

require_once('config.php');


session_start();



if (isset($_POST["register"])) {
    $username = $_POST["username"];
    $password = $_POST["pass"];
    $email = $_POST["email"];
    $no_hp = $_POST["no_hp"];
    $tgl_lahir = $_POST["tgl_lahir"];
    $gender = $_POST["gender"];
    $alamat = $_POST["alamat"];

    // id INT(11) PRIMARY KEY AUTO_INCREMENT,
    // username VARCHAR(255) NOT NULL UNIQUE,
    // pass VARCHAR(255) NOT NULL,
    // email VARCHAR(255) NOT NULL UNIQUE,
    // no_hp BIGINT(255) NOT NULL UNIQUE,
    // tgl_lahir DATE NOT NULL,
    // gender BOOLEAN NOT NULL,
    // alamat VARCHAR(255),
    // level VARCHAR(255) NOT NULL

    $query = "INSERT INTO User (id, username, pass, email, no_hp, tgl_lahir, gender, alamat, level)
        VALUES (DEFAULT, '$username', '$password', '$email', '$no_hp', '$tgl_lahir', '$gender', '$alamat', 'peserta')";

    if ($query = mysqli_query($koneksi, $query)) {
        $_SESSION["login"] = "true";
        $_SESSION["username"] = $username;
        $_SESSION["level"] = "peserta";
        header('location: ../view/dashboard/dashboard.php?status=success');
    } else {
        // echo mysqli_error($koneksi);
        header('location: ../view/register.php?status=error');
    }
}
