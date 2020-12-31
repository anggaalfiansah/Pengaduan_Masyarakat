<?php
    include '../config/config.php';

    // Menghitung Semua Pengaduan    
    $sql = "SELECT * FROM pengaduan";
    
    $qpengaduan= $koneksi->query($sql);

    $jumlahpengaduan = mysqli_num_rows($qpengaduan);

    // Menghitung jumlah laporan selesai    
    $sql1 = "SELECT * FROM pengaduan WHERE status = 'selesai'";
    
    $qselesai= $koneksi->query($sql1);

    $jumlahselesai = mysqli_num_rows($qselesai);

    // Menghitung jumlah laporan diproses
    $sql2 = "SELECT * FROM pengaduan WHERE status = 'proses'";
    
    $qproses= $koneksi->query($sql2);

    $jumlahproses = mysqli_num_rows($qproses);
    
    // Menghitung jumlah laporan diterima
    $sql3 = "SELECT * FROM pengaduan WHERE status = '0'";
    
    $qterima= $koneksi->query($sql3);

    $jumlahterima = mysqli_num_rows($qterima);