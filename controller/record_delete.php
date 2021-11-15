<?php

require_once('config.php');

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $query = "DELETE FROM Record_events_peserta WHERE id=$id";

    if ($query = mysqli_query($koneksi, $query)) {
        header('location: ../view/dashboard/partisipan_events/index.php?status=success');
    } else {
        // echo mysqli_error($koneksi);
        // die;
        header('location: ../view/dashboard/partisipan_events/index.php?status=error');
    }
} else {
    // echo mysqli_error($koneksi);
    // die;
    header('location: ../view/dashboard/partisipan_events/index.php?status=error');
}
