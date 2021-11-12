<?php

require_once('config.php');

if (isset($_POST["edit"])) {
    $id = $_POST["id"];
    $nama = $_POST["nama"];
    $query = "UPDATE Kategori_events 
        SET 
            nama_kategori='$nama'
        WHERE 
            id='$id'";

    if ($query = mysqli_query($koneksi, $query)) {
        header('location: ../view/kategori_event/index.php?status=success');
    } else {
        header('location: ../view/kategori_event/edit_ke.php?status=error');
    }
}

?>