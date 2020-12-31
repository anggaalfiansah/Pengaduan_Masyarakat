<?php  
    include 'config/config.php';
    
    $user = $_SESSION['username'];
    $sql  = "SELECT * FROM masyarakat WHERE username = '$user'";

    $quser   = $koneksi->query($sql);
    $rowuser = $quser->fetch_assoc();

    $nik = $rowuser['nik'];

    // Menghitung Semua Pengaduan    
    $sql = "SELECT * FROM pengaduan WHERE nik = '$nik'";
    
    $qpengaduan= $koneksi->query($sql);

    $jumlahpengaduan = mysqli_num_rows($qpengaduan);

    // Menghitung jumlah laporan selesai    
    $sql1 = "SELECT * FROM pengaduan WHERE nik = '$nik' && status = 'selesai'";
    
    $qselesai= $koneksi->query($sql1);

    $jumlahselesai = mysqli_num_rows($qselesai);

    // Menghitung jumlah laporan diproses
    $sql2 = "SELECT * FROM pengaduan WHERE nik = '$nik' && status = 'proses'";
    
    $qproses= $koneksi->query($sql2);

    $jumlahproses = mysqli_num_rows($qproses);
    
    // Menghitung jumlah laporan terkirim
    $sql3 = "SELECT * FROM pengaduan WHERE nik = '$nik' && status = '0'";
    
    $qterkirim= $koneksi->query($sql3);

    $jumlahterkirim = mysqli_num_rows($qterkirim);