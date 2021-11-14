<?php

session_start();
if ($_SESSION['level'] != "admin") {
    header('location: /jwb_webdinamis/view/index.php');
}

?>

<?php require_once('../../../controller/config.php'); ?>

<?php include('../../../template/head.php'); ?>
<?php include('../../../template/sidebar.php'); ?>


<div class="pagetitle">
    <h1>Kategori Event</h1>
</div>

<div class="card">
    <h6 class="card-title" style="padding-top:30px; padding-left: 30px;">Events</h6>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col" class="text-center" width='50'>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM Kategori_events ORDER BY id";
                $i = 0;
                // id_admin, nama_admin, email, alamat, tgl_lahir, gender
                if ($query = mysqli_query($koneksi, $query)) {
                    while ($data = mysqli_fetch_array($query)) {
                        echo "
                        <tr>
                            <th scope='row'>" . $data["id"] . "</th>
                            <td>" . $data["nama_kategori"] . "</td>
                            <td>
                                <div class='d-flex'>
                                    <form action='edit_ke.php' method='POST' style='margin-right: 5px;'>
                                        <input hidden type='text' name='id' value=" . $data["id"] . ">
                                        <button type='submit' name='edit' class='btn btn-primary'>Edit</button>
                                    </form>
                                    <a class='btn btn-danger' onclick='hapus_row(" . $data["id"] . ")' href='#' role='button'>Hapus</a>
                                </div>
                            </td>
                        </tr>";
                    }
                }
                ?>
            </tbody>
        </table>
        <div class="con_tambah d-flex justify-content-end">
            <div class="tambah" style="margin-right: 50px;">
                <a class='btn btn-success' href='nambah_ke.php' role='button'>Tambah</a>
            </div>
        </div>
    </div>
</div>

<?php include('../../../template/foot.php'); ?>