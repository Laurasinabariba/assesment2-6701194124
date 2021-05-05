<?php
include 'db_koneksi.php';

$semester = $_POST['semester'];
$ipk = $_POST['ipk'];

$query = mysqli_query($koneksi, "insert into ipk values ('$semester','$ipk')");
if (!$query) {
    die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
        " - " . mysqli_error($koneksi));
} else {
    echo "
    <script>
    alert('Data telah ditambahkan');
    document.location.href = 'ipk.php';
    </script>";
}
