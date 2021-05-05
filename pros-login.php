<?php
include 'pros-regis.php';

$email = $_POST['email'];
$password = $_POST['password'];

if ($email == $email1 && $password == $pass) {
    echo "
        <script>
        alert('Berhasil Login');
        document.location.href = 'about.php';
        </script>";
} elseif ($email != $email1 && $password == $pass) {
    echo "
        <script>
        alert('Gagal! Email Salah');
        document.location.href = 'login.php';
        </script>";
} elseif ($email == $email1 && $password != $pass) {
    echo "
        <script>
        alert('Gagal! Password Salah');
        document.location.href = 'login.php';
        </script>";
} elseif ($email != $email1 && $password != $pass) {
    echo "
        <script>
        alert('Gagal! Email dan Password Salah');
        document.location.href = 'login.php';
        </script>";
}
