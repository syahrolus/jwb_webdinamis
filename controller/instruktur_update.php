<?php

require_once('config.php');

if (isset($_POST["edit"])) {
    $id = $_POST["id"];
    $nama = $_POST["nama"];
    $tgl_lahir = $_POST["tgl_lahir"];
    $alamat = $_POST["alamat"];
    $gender = $_POST["gender"];
    $bidang = $_POST["bidang"];
    $query = "UPDATE Bidang 
        SET 
            nama_bidang='$nama',
        WHERE 
            id_bidang='$id'";

    if ($query = mysqli_query($koneksi, $query)) {
        header('location: ../view/instruktur/index.php?status=success');
    } else {
        header('location: ../view/instruktur/edit_instruktur.php?status=error');
    }
}

?>