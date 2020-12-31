<?php

include '../config/config.php';

$user = $_POST['username'];
$pass = $_POST['password'];

$sql  = "SELECT * FROM masyarakat where username = '$user' AND password = '$pass' ";

$quser   = $koneksi->query($sql);
$rowuser = $quser->fetch_assoc();


if (!empty($rowuser)) {
    session_start();
    $_SESSION['username'] = $user;
    $_SESSION['nik']      = $rowuser['nik'];

    header("location:../index.php");
} else {
    ?>
        <script>
            alert ('Username atau Password Salah');
            window.location = '../login.php';
        </script>
    <?php
}

