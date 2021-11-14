<?php

session_start();
if ($_SESSION['level'] != "admin") {
    header('location: /jwb_webdinamis/view/index.php');
}

?>

<?php include('../../../template/head.php'); ?>
<?php include('../../../template/sidebar.php'); ?>

<div class="pagetitle">
    <h1>Kategori Event</h1>
</div>


<div class="container d-flex justify-content-center">

    <div class="card mt-5 mb-5" style="width: 60%;">
        <div class="card-header bg-primary text-white mb-3">Tambah Bidang</div>
        <div class="card-body">
            <form action="../../../controller/bidang_create.php" method="POST">
                <div class="form-group mb-3">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" placeholder="Enter nama" name="nama">
                </div>
                <div class="d-flex justify-content-center mt-5">
                    <button type="submit" class="btn btn-primary" name="tambah">Tambah</button>
                </div>
            </form>
        </div>
    </div>

</div>

<?php include('../../../template/foot.php'); ?>