<?php

require_once('config.php');

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $query = "DELETE FROM Kategori_events WHERE id=$id";

    if ($query = mysqli_query($koneksi, $query)) {
        // echo mysqli_error($koneksi);
        header('location: ../view/dashboard/kategori_event/index.php?status=success');
    } else {
        // echo mysqli_error($koneksi);
        header('location: ../view/dashboard/kategori_event/index.php?status=error');
    }
} else {
    // echo mysqli_error($koneksi);
    header('location: ../view/dashboard/kategori_event/index.php?status=error');
}
