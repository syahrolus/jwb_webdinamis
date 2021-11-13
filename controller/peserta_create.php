<?php

session_start();

require_once('config.php');

if (isset($_POST["register"])) {
    $username = $_POST["username"];
    $password = $_POST["pass"];
    $email = $_POST["email"];
    $no_hp = $_POST["no_hp"];
    $tgl_lahir = $_POST["tgl_lahir"];
    $gender = $_POST["gender"];
    $alamat = $_POST["alamat"];

    $query = "INSERT INTO Peserta (id_peserta, username, pass, email, no_hp, tgl_lahir, gender, alamat_peserta)
        VALUES (DEFAULT, '$username', '$password', '$email', '$no_hp', '$tgl_lahir', '$gender', '$alamat')";

    if ($query = mysqli_query($koneksi, $query)) {
        $_SESSION["username"] = $username;
        header('location: ../view/dashboardUser/dashboard.php?status=success');
    } else {
        // echo mysqli_error($koneksi);
        header('location: ../view/register.php?status=error');
    }
}
