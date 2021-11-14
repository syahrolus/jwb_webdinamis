<?php

session_start();
if ($_SESSION['level'] != "admin") {
    header('location: /jwb_webdinamis/view/index.php');
}

?>

<?php include('../../../template/head.php'); ?>
<?php include('../../../template/sidebar.php'); ?>

<div class="pagetitle">
    <h1>Peserta</h1>
</div>

<div class="card">
    <h6 class="card-title" style="padding-top:30px; padding-left: 30px;">Events</h6>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Username</th>
                    <th scope="col">No HP</th>
                    <th scope="col">Tgl akhir</th>
                    <th scope="col">Email</th>
                    <th scope="col">Address</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Admin</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Training</td>
                    <td>17-08-1945</td>
                    <td>18-08-1945</td>
                    <td>Rp. 2000.000</td>
                    <td>Jono the Jene</td>
                    <td>Admin1</td>
                    <td>
                        <a class='btn btn-primary' href='#' role='button'>Edit</a>
                        <a class='btn btn-danger' onclick='validation(1)' href='#' role='button'>Hapus</a>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="con_tambah d-flex justify-content-end">
            <div class="tambah" style="margin-right: 50px;">
                <a class='btn btn-success' href='tambah_data.php' role='button'>Tambah</a>
            </div>
        </div>
    </div>
</div>

<?php include('../../../template/foot.php'); ?>