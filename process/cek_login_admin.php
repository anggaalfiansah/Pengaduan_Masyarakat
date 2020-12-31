<?php

include '../config/config.php';

$user = $_POST['username'];
$pass = $_POST['password'];

$sql  = "SELECT * FROM petugas where username = '$user' AND password = '$pass' ";

$quser   = $koneksi->query($sql);
$rowuser = $quser->fetch_assoc();


if (!empty($rowuser)) {
    if ($rowuser['level'] == 'admin') {
        session_start();
        $_SESSION['admin'] = $user;
        $_SESSION['id_petugas'] = $rowuser['id_petugas'];
        $_SESSION['level'] = $rowuser['level'];

        header('location:../admin/index.php');
    }
    else if ($rowuser['level'] == 'petugas') {
        session_start();
        $_SESSION['petugas'] = $user;
        $_SESSION['id_petugas'] = $rowuser['id_petugas'];
        $_SESSION['level'] = $rowuser['level'];

        header('location:../petugas/index.php');
    }

    
} else {
    ?>
        <script>
            alert ('Username atau Password Salah');
            window.location = '../login-admin.php';
        </script>
    <?php
}

