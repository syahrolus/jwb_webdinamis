<?php

require_once('config.php');

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $query = "DELETE FROM Bidang WHERE id_bidang=$id";

    if ($query = mysqli_query($koneksi, $query)) {
        header('location: ../view/dashboard/bidang/index.php?status=success');
    } else {
        header('location: ../view/dashboard/bidang/index.php?status=error');
    }
} else {
    header('location: ../view/dashboard/bidang/index.php?status=error');
}
