<?php

include 'config/koneksi.php';


$id = $_GET['id'];


$query = "DELETE FROM tb_siswa WHERE id='$id'";


if (mysqli_query($koneksi, $query)) {
    
    header("Location: index.php");
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}


mysqli_close($koneksi);
?>
