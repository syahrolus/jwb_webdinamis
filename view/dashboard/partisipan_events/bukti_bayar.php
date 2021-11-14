<?php

require_once('../../../controller/config.php');
session_start();
if ($_SESSION['level'] != "peserta") {
    header('location: /jwb_webdinamis/view/index.php');
}

if (!isset($_GET['id'])) {
    header('location: jwb_webdinamis/view/dashboard/partisipan_events/index.php?status=error');
}

$id = $_GET["id"];
$query = "SELECT * FROM Record_events_peserta JOIN Events ON Record_events_peserta.id_event=Events.id_event WHERE id=$id";
if ($query = mysqli_query($koneksi, $query)) {
    $row = $query->fetch_assoc();
} else {
    echo mysqli_error($koneksi);
}

?>

<?php include('../../../template/head.php'); ?>
<?php include('../../../template/sidebar.php'); ?>

<div class="pagetitle">
    <h1>Upload Bukti Pendaftaran</h1>
</div>


<div class="container d-flex justify-content-center">

    <div class="card mt-5 mb-5" style="width: 60%;">
        <div class="card-header bg-primary text-white mb-3"><?= $row['nama_event'] ?></div>
        <div class="card-body">
            <form action="../../../controller/partisipan_up.php" method="POST">
                <input type="text" hidden name="id" value="<?= $row['id'] ?>">
                <div class="mb-3">
                    <label for="formFileDisabled" class="form-label">Upload bukti pendaftaran</label>
                    <input class="form-control" type="file" id="formFileDisabled" disabled>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="bayar" id="belum_bayar" checked value="blm_bayar">
                    <label class="form-check-label" for="belum_bayar">
                        Belum bayar
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="bayar" id="sudah_bayar" value="sdh_bayar">
                    <label class="form-check-label" for="sudah_bayar">
                        Sudah bayar
                    </label>
                </div>
                <div class="d-flex justify-content-center">
                    <button type=" submit" class="btn btn-primary" name="upload">Upload</button>
                </div>
            </form>
        </div>
    </div>

</div>

<?php include('../../../template/foot.php'); ?>