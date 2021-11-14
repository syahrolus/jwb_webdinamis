<?php

require_once('config.php');

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $query = "DELETE FROM Events WHERE id_event=$id";

    if ($query = mysqli_query($koneksi, $query)) {
        header('location: ../view/dashboard/events/index.php?status=success');
    } else {
        header('location: ../view/dashboard/events/index.php?status=error');
    }
} else {
    header('location: ../view/dashboard/events/index.php?status=error');
}
