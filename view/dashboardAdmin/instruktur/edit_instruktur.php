<?php include('../../../template/head_admin.php'); ?>

<?php
require_once('../../../controller/config.php');

if (isset($_POST["edit"])) {
    $query = "SELECT * FROM Instruktur WHERE id_instruktur=" . $_POST['id'];
    if ($query = mysqli_query($koneksi, $query)) {
        $row = $query->fetch_assoc();
    } else {
        echo mysqli_error($koneksi);
    }
} else {
    // header("location: ../dashboard.php?status=error");
?>
    <script>
        window.location.replace("http://<?= $_SERVER['SERVER_NAME'] ?>/jwb_webdinamis/view/dashboardAdmin/instruktur/index.php");
    </script>
<?php
}

?>

<div class="pagetitle">
    <h1>Instruktur</h1>
</div>


<div class="container d-flex justify-content-center">

    <div class="card mt-5 mb-5" style="width: 60%;">
        <div class="card-header bg-primary text-white mb-3">Edit Instruktur</div>
        <div class="card-body">
            <form action="../../../controller/instruktur_update.php" method="POST">
                <input hidden type="text" name="id" value="<?= $row['id_instruktur'] ?>">
                <div class="form-group mb-3">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" placeholder="Enter nama" name="nama" value="<?= $row['nama_instruktur'] ?>">
                </div>
                <div class="form-group mb-3">
                    <label for="tgl_lahir">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?= $row['tgl_lahir']?>">
                </div>
                <div class="form-group mb-3">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $row['alamat_instrukur']?>">
                </div>
                <div class="form-group mb-3">
                    <label>Gender</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value=1 <?= ($row["gender"]==1)?"checked":"" ?>>
                        <label class="form-check-label" for="exampleRadios1">
                            Laki-Laki
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value=0 <?= ($row["gender"]==0)?"checked":"" ?>>
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
                                <option <?= ($row["bidang"]==$data["id_bidang"])?"selected":"" ?> value="<?= $data["id_bidang"] ?>"><?= $data["nama_bidang"] ?></option>
                        <?php
                            }
                        } else {
                            echo mysqli_error($koneksi);
                        }
                        ?>
                    </select>
                </div>
                <div class="d-flex justify-content-center mt-5">
                    <button type="submit" class="btn btn-success" name="edit">Edit</button>
                </div>
            </form>
        </div>
    </div>

</div>

<?php include('../../../template/foot.php'); ?>