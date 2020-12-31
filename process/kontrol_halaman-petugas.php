<?php

include '../config/config.php';
    $user = $_SESSION['petugas'];
    $sql  = "SELECT * FROM petugas WHERE username = '$user'";

    $quser   = $koneksi->query($sql);
    $rowuser = $quser->fetch_assoc();

if(isset($_GET['url'])) {
    $url = $_GET['url'];

    switch ($url) {
        case 'semua_pengaduan.php';
        include '../layout/petugas/tabel_pengaduan.php';
            break;
        
        case 'pengaduan_belum_diproses.php';
        include '../layout/petugas/tabel_pengaduan_diterima.php';
            break;

        case 'pengaduan_diproses.php';
        include '../layout/petugas/tabel_pengaduan_diproses.php';
            break;
            
        default:
            # code...
            break;
    }

} else {
    include '../layout/petugas/dashboard-petugas.php';
}