<?php include('../../template/head_admin.php'); ?>

<?php
require_once('../../controller/config.php');

if (isset($_POST["edit"])) {
    $query = "SELECT * FROM Bidang WHERE id_bidang=" . $_POST['id'];
    if ($query = mysqli_query($koneksi, $query)) {
        $row = $query->fetch_assoc();
    } else {
        echo mysqli_error($koneksi);
    }
} else {
    // header("location: ../dashboard.php?status=error");
?>
    <script>
        window.location.replace("http://<?= $_SERVER['SERVER_NAME']?>/jwb_webdinamis/view/bidang/index.php");
    </script>
<?php
}

?>

<div class="pagetitle">
    <h1>Bidang</h1>
</div>


<div class="container d-flex justify-content-center">

    <div class="card mt-5 mb-5" style="width: 60%;">
        <div class="card-header bg-primary text-white mb-3">Edit Bidang</div>
        <div class="card-body">
            <form action="../../controller/bidang_update.php" method="POST">
                <input hidden type="text" name="id" value="<?= $_POST['id'] ?>">
                <div class="form-group mb-3">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" value="<?= $row["nama_bidang"] ?>" placeholder="Enter nama" name="nama">
                </div>
                <div class="d-flex justify-content-center mt-5">
                    <button type="submit" class="btn btn-success" name="edit">Edit</button>
                </div>
            </form>
        </div>
    </div>

</div>

<?php include('../../template/foot.php'); ?>