<?php


require_once('config.php');

if (isset($_POST["tambah"])) {
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $tgl_lahir = $_POST["tgl_lahir"];
    $gender = $_POST["gender"];
    $bidang = $_POST["bidang"];

    $query = "INSERT INTO Instruktur (id_instruktur, nama_instruktur, tgl_lahir, alamat_instrukur, gender, bidang)
        VALUES (DEFAULT, '$nama', '$tgl_lahir', '$alamat', '$gender', '$bidang')";

    if ($query = mysqli_query($koneksi, $query)) {
        header('location: ../view/dashboardAdmin/instruktur/index.php?status=success');
    } else {
        // echo mysqli_error($koneksi);
        header('location: ../view/dashboardAdmin/instruktur/nambah_instruktur.php?status=error');
    }
}
