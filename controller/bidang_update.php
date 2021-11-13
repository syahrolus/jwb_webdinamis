<?php

require_once('config.php');

if (isset($_POST["edit"])) {
    $id = $_POST["id"];
    $nama = $_POST["nama"];
    $query = "UPDATE Bidang 
        SET 
            nama_bidang='$nama'
        WHERE 
            id_bidang='$id'";

    if ($query = mysqli_query($koneksi, $query)) {
        header('location: ../view/dashboardAdmin/bidang/index.php?status=success');
    } else {
        header('location: ../view/dashboardAdmin/bidang/edit_bidang.php?status=error');
    }
}

?>