<?php

require_once('../controller/config.php');

if (isset($_POST["upload"])) {
    $id = $_POST['id'];
    if ($_POST['bayar'] == "sdh_bayar") {
        $query = "UPDATE Record_events_peserta 
        SET 
            status='ongoing'
        WHERE 
            id='$id'";

        if ($query = mysqli_query($koneksi, $query)) {
            // echo mysqli_error($koneksi);
            header('location: ../view/dashboard/partisipan_events/index.php?status=success');
        } else {
            // echo mysqli_error($koneksi);
            header('location: ../view/dashboard/partisipan_events/index.php?status=error');
        }
    } else {
        header('location: /jwb_webdinamis/view/dashboard/partisipan_events/index.php');
    }
}
