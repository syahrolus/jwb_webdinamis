<?php

session_start();
if ($_SESSION['level'] != "admin") {
    header('location: /jwb_webdinamis/view/index.php');
}

?>

<?php

require_once('../../../controller/config.php');



?>

<?php include('../../../template/head.php'); ?>
<?php include('../../../template/sidebar.php'); ?>

<div class="pagetitle">
    <h1>Tambah Instruktur</h1>
</div>


<div class="container d-flex justify-content-center">

    <div class="card mt-5 mb-5" style="width: 60%;">
        <div class="card-header bg-primary text-white mb-3">Tambah Instruktur</div>
        <div class="card-body">
            <form action="../../../controller/instruktur_create.php" method="POST">
                <div class="form-group mb-3">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" placeholder="Enter nama" name="nama">
                </div>
                <div class="form-group mb-3">
                    <label for="tgl_lahir">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir">
                </div>
                <div class="form-group mb-3">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat">
                </div>
                <div class="form-group mb-3">
                    <label>Gender</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value=1>
                        <label class="form-check-label" for="exampleRadios1">
                            Laki-Laki
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value=0>
                        <label class="form-check-label" for="exampleRadios2">
                            Perempuan
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="bidang">Bidang</label>
                    <select class="form-control" id="bidang" name="bidang">
                        <?php
                        $query = "SELECT * FROM Bidang";

                        if ($query = mysqli_query($koneksi, $query)) {
                            while ($data = mysqli_fetch_array($query)) {
                        ?>
                                <option value="<?= $data["id_bidang"] ?>"><?= $data["nama_bidang"] ?></option>
                        <?php
                            }
                        } else {
                            echo mysqli_error($koneksi);
                        }
                        ?>
                    </select>
                </div>
                <div class="d-flex justify-content-center mt-5">
                    <button type="submit" class="btn btn-primary" name="tambah">Tambah</button>
                </div>
            </form>
        </div>
    </div>

</div>

<?php include('../../../template/foot.php'); ?>