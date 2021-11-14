<?php

session_start();
if ($_SESSION['level'] != "peserta") {
    header('location: /jwb_webdinamis/view/index.php');
}

require_once('../../../controller/config.php');

?>

<?php include('../../../template/head.php'); ?>
<?php include('../../../template/sidebar.php'); ?>

<div class="pagetitle mb-3">
    <h1>Keranjang Event</h1>
</div>

<!-- <div class="col-lg-4 col-md-6 mt-4" data-aos="zoom-in" data-aos-delay="100" style="max-width: 330px;">
    <div class="icon-box">
        <div class="icon"><i class="fas fa-code"></i></div>
        <h4><a href="detail-events.php?id=1">tes</a></h4>
        <p>Harga : Rp. tes </p>
        <p>Deskripsi : tes </p>
        <a class="btn btn-success mt-4" href="detail-events.php?id=tes" role="button" style="margin-left: 1%; width: 90%;">Baca Selengkapnya <i class="bi bi-chevron-right"></i></a>
    </div>
</div> -->

<div class="row">
    <?php
    // SELECT pegawai.id_pegawai AS id, pegawai.nama AS nama, jabatan.nama_jabatan AS jabatan FROM jabatan JOIN pegawai ON jabatan.id_jabatan=pegawai.id_jbtn;
    $username = $_SESSION['username'];
    // echo $username;
    // echo "<br>";
    $status = 'blm_bayar';
    $query = "SELECT Record_events_peserta.id AS id, Events.nama_event AS nama_event, Record_events_peserta.status AS status FROM Record_events_peserta JOIN Events ON Record_events_peserta.id_event=Events.id_event JOIN User ON Record_events_peserta.id_peserta=User.id WHERE User.username='$username' AND Record_events_peserta.status='blm_bayar'";
    // $query = "SELECT * FROM Record_events_peserta JOIN Events ON Record_events_peserta.id_event=Events.id_event JOIN User ON Record_events_peserta.id_peserta=User.id WHERE User.username=$username AND Record_events_peserta.status='blm_bayar'";
    // $i = 0;

    // id_admin, nama_admin, email, alamat, tgl_lahir, gender
    if ($query = mysqli_query($koneksi, $query)) {
        while ($data = mysqli_fetch_array($query)) {
    ?>
            <div class="card col-sm-2" style="width: 15rem; margin-right: 10px;">
                <div class="card-body">
                    <h3 class="card-title m-1 p-1"><?= $data['nama_event'] ?></h3>
                    status : <span class="badge rounded-pill bg-danger"><?= $data['status'] ?></span>
                    <br>
                    <div class="d-flex justify-content-center">
                        <a href="bukti_bayar.php?id=<?= $data['id'] ?>" class="btn btn-success" style="margin-top: 10px; margin-right:5px;">Bayar</a>
                        <?php $id = $data["id"] ?>
                        <a onclick='hapus_user_record("<?= $id ?>")' href="#" class="btn btn-danger" style="margin-top: 10px;">Hapus</a>
                    </div>
                </div>
            </div>
    <?php
        }
    }
    ?>

</div>
<?php include('../../../template/foot.php'); ?>