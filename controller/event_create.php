<?php


require_once('config.php');

if (isset($_POST["tambah"])) {
    $nama = $_POST["nama"];
    $kategori = $_POST["kategori"];
    $tgl_mulai = $_POST["tgl_mulai"];
    $tgl_akhir = $_POST["tgl_akhir"];
    $harga = $_POST["harga"];
    $deskripsi = $_POST["deskripsi"];
    $instruktur = $_POST["instruktur"];
    $admin = $_POST["admin"];

    $query = "INSERT INTO Events (id_event, nama_event, kategori, tgl_mulai, tgl_akhir, harga, deskripsi, instruktur, id_admin)
        VALUES (DEFAULT, '$nama', '$kategori', '$tgl_mulai', '$tgl_akhir', '$harga', '$deskripsi', $instruktur, $admin)";

    if ($query = mysqli_query($koneksi, $query)) {
        header('location: ../view/dashboard/events/index.php?status=success');
    } else {
        echo mysqli_error($koneksi);
        header('location: ../view/dashboard/events/nambah_event.php?status=error');
    }
}
