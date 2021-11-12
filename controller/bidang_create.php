<?php


require_once('config.php');

if (isset($_POST["tambah"])) {
    $nama = $_POST["nama"];

    $query = "INSERT INTO Bidang (id_bidang, nama_bidang, id_admin)
        VALUES (DEFAULT, '$nama', 12)";

    if ($query = mysqli_query($koneksi, $query)) {
        header('location: ../view/bidang/index.php?status=success');
    } else {
        // echo mysqli_error($koneksi);
        header('location: ../view/bidang/nambah_bidang.php?status=error');
    }
}
