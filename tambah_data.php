<?php
include 'koneksi.php';

$nama = "Aditya";

$sql = "INSERT INTO users (nama) VALUES ('$nama')";

if (mysqli_query($koneksi, $sql)) {
    echo "Data berhasil ditambahkan!";
} else {
    echo "Gagal menambah data: " . mysqli_error($koneksi);
}

// Tutup koneksi
mysqli_close($koneksi);
?>
