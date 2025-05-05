<?php
include 'config/koneksi.php';


$id = $_GET['id'];


$query = mysqli_query($koneksi, "SELECT * FROM tb_siswa WHERE id='$id'");
$data = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Siswa</title>
</head>
<body>

    <h2>Edit Data Siswa</h2>
    <a href="index.php">Kembali</a>
    <br><br>

    <form action="proses_edit.php" method="post">
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?php echo $data['nama']; ?>" required></td>
            </tr>
            <tr>
                <td>NIS</td>
                <td><input type="text" name="nis" value="<?php echo $data['nis']; ?>" required></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><textarea name="alamat" required><?php echo $data['alamat']; ?></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Update"></td>
            </tr>
        </table>
    </form>

</body>
</html>
