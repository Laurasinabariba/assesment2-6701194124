<?php
$email1 = $_POST['email'];
$pass = $_POST['pass'];
$pass2 = $_POST['pass2'];

if ($pass == $pass2) {
    echo "
        <script>
        alert('Berhasil Login');
        document.location.href = 'login.php';
        </script>";
} elseif ($pass != $pass2) {
    echo "
        <script>
        alert('Password tidak sama');
        document.location.href = 'registrasi.php';
        </script>";
}
