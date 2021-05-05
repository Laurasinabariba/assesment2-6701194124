<?php
include 'db_koneksi.php';

$semester = $_GET["semester"];

$query = "DELETE FROM ipk WHERE semester='$semester' ";
$hasil_query = mysqli_query($koneksi, $query);

if (!$hasil_query) {
    die("Gagal menghapus data: " . mysqli_errno($koneksi) .
        " - " . mysqli_error($koneksi));
} else {
    echo "<script>alert('Data berhasil dihapus.');window.location='ipk.php';</script>";
}
