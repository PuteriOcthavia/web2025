<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>
    <form action="tambahaksimahasiswa.php" method="post">
        <table>
            <tr>
                <td>NIM</td>
                <td><input type="text" name="nim"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td><input type="date" name="tanggal_lahir"></td>
            </tr>
            <tr>
                <td>Telp</td>
                <td><input type="text" name="telp"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <td>Prodi</td>
                <td>
                    <select name="id_prodi">
                        <option value="1">Manajemen Informatika</option>
                        <option value="2">Admninitrasi Bisnis</option>
                        <option value="3">Bisnis Digital</option>
                    </select>
                </td>
            </tr>
        </table>
        <button>
        <a href="index.php">Kembali</a>  
        </button>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>