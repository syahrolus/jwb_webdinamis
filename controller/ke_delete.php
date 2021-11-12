<?php

require_once('config.php');

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $query = "DELETE FROM Kategori_events WHERE id=$id";

    if ($query = mysqli_query($koneksi, $query)) {
        header('location: ../view/kategori_event/index.php?status=success');
    } else {
        header('location: ../view/kategori_event/index.php?status=error');
    }
} else {
    header('location: ../view/kategori_event/index.php?status=error');
}


?>