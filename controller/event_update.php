<?php

require_once('config.php');

if (isset($_POST["edit"])) {
    $id = $_POST["id"];
    $nama = $_POST["nama"];
    $kategori = $_POST["kategori"];
    $tgl_mulai = $_POST["tgl_mulai"];
    $tgl_akhir = $_POST["tgl_akhir"];
    $harga = $_POST["harga"];
    $deskripsi = $_POST["deskripsi"];
    $instruktur = $_POST["instruktur"];
    $admin = $_POST["admin"];
    $query = "UPDATE Events 
        SET 
            nama_event='$nama',
            kategori='$kategori',
            tgl_mulai='$tgl_mulai',
            tgl_akhir='$tgl_akhir',
            harga='$harga',
            deskripsi='$deskripsi',
            instruktur='$instruktur',
            id_admin='$admin'
        WHERE 
            id_event='$id'";

    if ($query = mysqli_query($koneksi, $query)) {
        // echo mysqli_error($koneksi);
        header('location: ../view/dashboardAdmin/events/index.php?status=success');
    } else {
        // echo mysqli_error($koneksi);
        header('location: ../view/dashboardAdmin/events/edit_event.php?status=error');
    }
}

?>