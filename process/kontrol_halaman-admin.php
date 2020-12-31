<?php

include '../config/config.php';
    $user = $_SESSION['admin'];
    $sql  = "SELECT * FROM petugas WHERE username = '$user'";

    $quser   = $koneksi->query($sql);
    $rowuser = $quser->fetch_assoc();

if(isset($_GET['url'])) {
    $url = $_GET['url'];

    switch ($url) {
        case 'semua_pengaduan.php';
        include '../layout/admin/tabel_pengaduan.php';
            break;
        
        case 'pengaduan_diterima.php';
        include '../layout/admin/tabel_pengaduan_diterima.php';
            break;

        case 'pengaduan_diproses.php';
        include '../layout/admin/tabel_pengaduan_diproses.php';
            break;

        case 'pengaduan_selesai.php';
        include '../layout/admin/tabel_pengaduan_selesai.php';
            break;

        case 'semua_user.php';
        include '../layout/admin/tabel_user.php';
            break;

        case 'user_petugas.php';
        include '../layout/admin/tabel_user_petugas.php';
            break;

        case 'user_admin.php';
        include '../layout/admin/tabel_user_admin.php';
            break;
        
        case 'user_masyarakat.php';
        include '../layout/admin/tabel_user_masyarakat.php';
            break;
    }

} else {
    include '../layout/admin/dashboard-admin.php';
}