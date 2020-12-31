<?php
    include '../config/config.php';

    // Menghitung Semua Petugas    
    $sql1 = "SELECT * FROM petugas";
    
    $qpetugas1= $koneksi -> query($sql1);

    $jumlahpetugas1 = mysqli_num_rows($qpetugas1);

    // Menghitung Petugas level petugas
    $sql2 = "SELECT * FROM petugas WHERE level='petugas'";
    
    $qpetugas2= $koneksi -> query($sql2);

    $jumlahpetugas2 = mysqli_num_rows($qpetugas2);

    // Menghitung Petugas level admin
    $sql3 = "SELECT * FROM petugas WHERE level='admin'";
    
    $qpetugas3= $koneksi -> query($sql3);

    $jumlahpetugas3 = mysqli_num_rows($qpetugas3);

    // Menghitung Masyarakat
    $sql4 = "SELECT * FROM masyarakat";
    
    $qmasyarakat= $koneksi -> query($sql4);

    $jumlahmasyarakat = mysqli_num_rows($qmasyarakat);

