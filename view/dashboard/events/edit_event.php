<?php

session_start();
if ($_SESSION['level'] != "admin") {
    header('location: /jwb_webdinamis/view/index.php');
}

?>

<?php include('../../../template/head.php'); ?>
<?php include('../../../template/sidebar.php'); ?>

<?php
require_once('../../../controller/config.php');

if (isset($_POST["edit"])) {
    $query = "SELECT * FROM Events WHERE id_event=" . $_POST['id'];
    if ($query = mysqli_query($koneksi, $query)) {
        $row = $query->fetch_assoc();
    } else {
        echo mysqli_error($koneksi);
    }
} else {
    // header("location: ../dashboard.php?status=error");
?>
    <script>
        window.location.replace("http://<?= $_SERVER['SERVER_NAME'] ?>/jwb_webdinamis/view/dashboardAdmin/events/index.php");
    </script>
<?php
}

?>

<div class="pagetitle">
    <h1>Event</h1>
</div>


<div class="container d-flex justify-content-center">

    <div class="card mt-5 mb-5" style="width: 60%;">
        <div class="card-header bg-primary text-white mb-3">Edit Events</div>
        <div class="card-body">
            <form action="../../../controller/event_update.php" method="POST">
                <input hidden type="text" name="id" value="<?= $row['id_event'] ?>">
                <div class="form-group mb-3">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" placeholder="Enter nama" name="nama" value="<?= $row['nama_event'] ?>">
                </div>
                <div class="form-group mb-3">
                    <label for="kategori">Kategori</label>
                    <select class="form-control" id="kategori" name="kategori">
                        <?php
                        $query = "SELECT * FROM Kategori_events";

                        if ($query = mysqli_query($koneksi, $query)) {
                            while ($data = mysqli_fetch_array($query)) {
                        ?>
                                <option <?= ($data['id'] == $row['kategori']) ? 'selected' : '' ?> value="<?= $data["id"] ?>"><?= $data["nama_kategori"] ?></option>
                        <?php
                            }
                        } else {
                            echo mysqli_error($koneksi);
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="tgl_mulai">Tanggal mulai</label>
                    <input type="date" class="form-control" id="tgl_mulai" name="tgl_mulai" value="<?= $row['tgl_mulai'] ?>">
                </div>
                <div class="form-group mb-3">
                    <label for="tgl_akhir">Tanggal akhir</label>
                    <input type="date" class="form-control" id="tgl_akhir" name="tgl_akhir" value="<?= $row['tgl_akhir'] ?>">
                </div>
                <div class="form-group mb-3">
                    <label for="harga">Harga</label>
                    <input type="number" class="form-control" id="harga" name="harga" value="<?= $row['harga'] ?>">
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea class="form-control" id="deskripsi" rows="3" name="deskripsi" placeholder="Enter Deskripsi"><?= $row['deskripsi'] ?></textarea>
                </div>
                <div class="form-group">
                    <label for="instruktur">Instruktur</label>
                    <select class="form-control" id="instruktur" name="instruktur">
                        <?php
                        $query = "SELECT * FROM Instruktur";

                        if ($query = mysqli_query($koneksi, $query)) {
                            while ($data = mysqli_fetch_array($query)) {
                        ?>
                                <option <?= ($data['id_instruktur'] == $row['instruktur']) ? 'selected' : '' ?> value="<?= $data["id_instruktur"] ?>"><?= $data["nama_instruktur"] ?></option>
                        <?php
                            }
                        } else {
                            echo mysqli_error($koneksi);
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="admin">Admin</label>
                    <select class="form-control" id="admin" name="admin">
                        <?php
                        $query = "SELECT * FROM User WHERE level='admin'";

                        if ($query = mysqli_query($koneksi, $query)) {
                            while ($data = mysqli_fetch_array($query)) {
                        ?>
                                <option <?= ($data['id'] == $row['id_admin']) ? 'selected' : '' ?> value="<?= $data["id"] ?>"><?= $data["email"] ?></option>
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