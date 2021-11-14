<?php


require_once('config.php');

if (isset($_POST["tambah"])) {
    $nama = $_POST["nama"];

    $query = "INSERT INTO Kategori_events (id, nama_kategori)
        VALUES (DEFAULT, '$nama')";

    if ($query = mysqli_query($koneksi, $query)) {
        header('location: ../view/dashboard/kategori_event/index.php?status=success');
    } else {
        header('location: ../view/dashboard/kategori_event/nambah_ke.php?status=error');
    }
}
