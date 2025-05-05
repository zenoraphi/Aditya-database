<?php

include 'config/koneksi.php';


$id     = $_POST['id'];
$nama   = $_POST['nama'];
$nis    = $_POST['nis'];
$alamat = $_POST['alamat'];


$query = "UPDATE tb_siswa SET nama='$nama', nis='$nis', alamat='$alamat' WHERE id='$id'";


if (mysqli_query($conn, $query)) {
    
    header("Location: index.php");
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}


mysqli_close($conn);
?>
