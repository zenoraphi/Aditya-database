<?php

include 'config/koneksi.php';


$nama   = $_POST['nama'];
$nis    = $_POST['nis'];
$alamat = $_POST['alamat'];


$query = "INSERT INTO tb_siswa (nama, nis, alamat) VALUES ('$nama', '$nis', '$alamat')";


if (mysqli_query($koneksi, $query)) {
 
    header("Location: index.php");
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}


mysqli_close($koneksi);
?>
