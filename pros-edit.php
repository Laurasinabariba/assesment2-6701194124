<?php
include 'db_koneksi.php';

$semester = $_POST['semester'];
$ipk = $_POST['ipk'];

mysqli_query($koneksi, "update ipk set semester='$semester', ipk='$ipk' where semester='$semester'");

header("location:ipk.php");

?>
?>