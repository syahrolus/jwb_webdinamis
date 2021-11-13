<?php require_once('../../controller/config.php'); ?>

<?php include('../../template/head_admin.php'); ?>


<div class="pagetitle">
    <h1>Events</h1>
</div>

<div class="card">
    <h6 class="card-title" style="padding-top:30px; padding-left: 30px;">Events</h6>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">tgl mulai</th>
                    <th scope="col">tgl akhir</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Instruktur</th>
                    <th scope="col">Admin</th>
                    <th scope="col" class="text-center" width='50'>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // $query = "SELECT * FROM Instruktur ORDER BY id_instruktur";
                // SELECT pegawai.id_pegawai AS id, pegawai.nama AS nama, jabatan.nama_jabatan AS jabatan FROM jabatan JOIN pegawai ON jabatan.id_jabatan=pegawai.id_jbtn;
                $query = "SELECT * FROM EVENTS 
                            JOIN Kategori_events ON Events.kategori=Kategori_events.id 
                            JOIN Instruktur ON Events.instruktur=Instruktur.id_instruktur 
                            JOIN Admin ON Events.id_admin=Admin.id_admin";
                $i = 0;
                // id_admin, nama_admin, email, alamat, tgl_lahir, gender
                if ($query = mysqli_query($koneksi, $query)) {
                    while ($data = mysqli_fetch_array($query)) {
                        echo "
                        <tr>
                            <th scope='row'>" . $data["id_event"] . "</th>
                            <td>" . $data["nama_event"] . "</td>
                            <td>" . $data["nama_kategori"] . "</td>
                            <td>" . $data["tgl_mulai"] . "</td>
                            <td>" . $data["tgl_akhir"] . "</td>
                            <td>" . $data["harga"] . "</td>
                            <td>" . $data["deskripsi"] . "</td>
                            <td>" . $data["nama_instruktur"] . "</td>
                            <td>" . $data["nama_admin"] . "</td>
                            <td>
                                <div class='d-flex'>
                                    <form action='edit_event.php' method='POST' style='margin-right: 5px;'>
                                        <input hidden type='text' name='id' value=".$data["id_event"].">
                                        <button type='submit' name='edit' class='btn btn-primary'>Edit</button>
                                    </form>
                                    <a class='btn btn-danger' onclick='hapus_row_event(".$data["id_event"].")' href='#' role='button'>Hapus</a>
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
                <a class='btn btn-success' href='nambah_event.php' role='button'>Tambah</a>
            </div>
        </div>
    </div>
</div>

<?php include('../../template/foot.php'); ?>