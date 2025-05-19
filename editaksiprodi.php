<?php
include "koneksi.php";

$id = $_POST["id"];
$nama = $_POST["nama"];
$kaprodi = $_POST["tang"];
$jurusan = $_POST["telp"];

$query=" UPDATE mahasiswa SET nama = '$nama', tanggal_lahir = '$tanggal_lahir', telp = '$telp', email = '$email', id_prodi= '$id_prodi' WHERE nim = '$nim'";

mysqli_query($conn, $query);

header("location:index.php");
?>