<?php

require_once('config.php');

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $query = "DELETE FROM Instruktur WHERE id_instruktur=$id";

    if ($query = mysqli_query($koneksi, $query)) {
        header('location: ../view/dashboardAdmin/instruktur/index.php?status=success');
    } else {
        header('location: ../view/dashboardAdmin/instruktur/index.php?status=error');
    }
} else {
    header('location: ../view/dashboardAdmin/instruktur/index.php?status=error');
}


?>