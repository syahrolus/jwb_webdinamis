<?php


require_once('config.php');

if (isset($_POST["tambah"])) {
    $nama = $_POST["nama"];

    $query = "INSERT INTO Bidang (id_bidang, nama_bidang)
        VALUES (DEFAULT, '$nama')";

    if ($query = mysqli_query($koneksi, $query)) {
        header('location: ../view/dashboard/bidang/index.php?status=success');
    } else {
        // echo mysqli_error($koneksi);
        header('location: ../view/dashboard/bidang/nambah_bidang.php?status=error');
    }
}
