<?php

include 'config/config.php';
    $user = $_SESSION['username'];
    $sql  = "SELECT * FROM masyarakat WHERE username = '$user'";

    $quser   = $koneksi->query($sql);
    $rowuser = $quser->fetch_assoc();

if(isset($_GET['url'])) {
    $url = $_GET['url'];

    switch ($url) {
        case 'semua_pengaduan.php';
        include 'layout/tabel_pengaduan.php';
            break;
        
        case 'pengaduan_terkirim.php';
        include 'layout/tabel_pengaduan_terkirim.php';
            break;

        case 'pengaduan_diproses.php';
        include 'layout/tabel_pengaduan_diproses.php';
            break;

        case 'pengaduan_selesai.php';
        include 'layout/tabel_pengaduan_selesai.php';
            break;
            
        default:
            # code...
            break;
    }

} else {
    include 'layout/dashboard.php';
}