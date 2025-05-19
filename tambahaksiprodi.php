<?php
include "koneksi.php";

$id = $_POST["id"];
$nama = $_POST["nama"];
$kaprodi = $_POST["kaprodi"];
$jurusan = $_POST["jurusan"];

$query="INSERT INTO prodi (id, nama, kaprodi, jurusan) VALUES ('$id', '$nama', '$tanggal_lahir', '$telp', '$email', '$id_prodi')";

mysqli_query($conn, $query);

header("location:index.php");
?>