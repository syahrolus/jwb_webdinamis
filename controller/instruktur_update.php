<?php

require_once('config.php');

if (isset($_POST["edit"])) {
    $id = $_POST["id"];
    $nama = $_POST["nama"];
    $tgl_lahir = $_POST["tgl_lahir"];
    $alamat = $_POST["alamat"];
    $gender = $_POST["gender"];
    $bidang = $_POST["bidang"];
    $query = "UPDATE Instruktur 
        SET 
            nama_instruktur='$nama',
            tgl_lahir='$tgl_lahir',
            alamat_instrukur='$alamat',
            gender='$gender',
            bidang='$bidang'
        WHERE 
            id_instruktur='$id'";

    if ($query = mysqli_query($koneksi, $query)) {
        // echo mysqli_error($koneksi);
        header('location: ../view/dashboard/instruktur/index.php?status=success');
    } else {
        // echo mysqli_error($koneksi);
        header('location: ../view/dashboard/instruktur/edit_instruktur.php?status=error');
    }
}
