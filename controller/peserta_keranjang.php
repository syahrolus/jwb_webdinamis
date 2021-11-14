<?php

require_once('config.php');

session_start();


if (isset($_SESSION["username"])) {
    $id_event = $_GET["id_event"];
    $uname = $_SESSION['username'];

    $query_p = "SELECT * FROM User WHERE username='$uname'";

    if ($query_p = mysqli_query($koneksi, $query_p)) {
        $row = $query_p->fetch_assoc();
    } else {
        echo mysqli_error($koneksi);
    }

    $id_peserta = $row['id'];

    // echo $id_event;
    // echo $id_peserta;

    // id_peserta INT(11) NOT NULL,
    // id_event INT(11) NOT NULL,
    // status CHAR(10),
    // id_admin INT(11),

    $query = "INSERT INTO Record_events_peserta (id, id_peserta, id_event, status)
        VALUES (DEFAULT, '$id_peserta', '$id_event', 'blm_bayar')";

    if ($query = mysqli_query($koneksi, $query)) {
        // echo mysqli_error($koneksi);
        header('location: ../view/dashboard/partisipan_events/index.php?status=success');
    } else {
        // echo mysqli_error($koneksi);
        header('location: ../view/index.php?status=error');
    }
} else {
    echo mysqli_error($koneksi);
}
