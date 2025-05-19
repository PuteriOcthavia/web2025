<?php
session_start();


include "koneksi.php";
ceklogin();

$query = "SELECT * FROM prodi";
$data = ambildata($query);

$querymahasiswa = "SELECT * FROM mahasiswa WHERE nim = '$_GET[nim]'";
$datamahasiswa = ambildata($querymahasiswa);

include "template/header.php";
include "template/sidebar.php";
?>

<main class="app-main">
    <!--begin::App Content Header-->
    <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">DATA PRODI</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="index.php">Data Prodi</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Tambah</li>
                    </ol>
                </div>
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content Header-->
    <!--begin::App Content-->
    <div class="app-content">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h3 class="card-title">Edit Data Prodi</h3>
                        </div>
                        <!-- /.card-header -->
                        <form action="tambahaksimahasiswa.php" method="post">
                            <div class="card-body">
                                <div class="col-sm-2 col-form-label">
                                    <label for="nim">NIM</label>
                                    <input type="text" name="nim" id="nim" class="form-control" required value="<?= $datamahasiswa[0]["nim"]; ?>" />
                                </div>
                                <div class="col-sm-2 col-form-label">
                                    <label for="nama">Nama Mahasiswa</label>
                                    <input type="text" name="nama" id="nama" class="form-control" required value="<?= $datamahasiswa[0]["nama"]; ?>" />
                                </div>
                                <div class="col-sm-2 col-form-label">
                                    <label for="tanggal_lahir">Tanggal Lahir</label>
                                    <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" required value="<?= $datamahasiswa[0]["tanggal_lahir"]; ?>" />
                                </div>
                                <div class="col-sm-2 col-form-label">
                                    <label for="telp">Telepon</label>
                                    <input type="text" name="telp" id="telp" class="form-control" required value="<?= $datamahasiswa[0]["telp"]; ?>" />
                                </div>
                                <div class="col-sm-2 col-form-label">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" class="form-control" required value="<?= $datamahasiswa[0]["email"]; ?>" />
                                </div>
                                <div >
                                    <label for="id_prodi" class="col-sm-2 col-form-label">Prodi</label>
                                    <div class="col-sm-10">
                                        <select name="id_prodi" id="">
                                            <?php foreach ($data as $d) : ?>
                                                <option value=<?php echo $d['id']; ?>

                                                    <?=

                                                    $d['id'] == $datamahasiswa[0]["id_prodi"] ?
                                                        "selected" : "";
                                                    ?>>

                                                    <?php echo $d['nama']; ?>
                                                </option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>

                                </div>
                                <div class="card-footer">
                                    <a href="index.php" class="btn btn-warning">Kembali</a>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                        </form>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <!-- /.col -->
            </div>

            <!-- /.row (main row) -->
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content-->
</main>
<!--end::App Main-->

<?php
include "template/footer.php";
?>