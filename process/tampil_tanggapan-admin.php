<?php  
    include '../config/config.php';
    
    $id_pengaduan = $rowlaporan['id_pengaduan'];
    $sql  = "SELECT * FROM tanggapan WHERE id_pengaduan = '$id_pengaduan'";

    $qtanggapan   = $koneksi->query($sql);
    $rowtanggapan = $qtanggapan->fetch_assoc();

