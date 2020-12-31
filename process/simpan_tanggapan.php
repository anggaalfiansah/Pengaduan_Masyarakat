<?php
    include '../config/config.php';

    $id         = $_POST['id_pengaduan'];
    $id_petugas = $_POST['id_petugas'];
    $tgl        = date('Y/m/d');
    $tanggapan  = $_POST['tanggapan'];

    $sql = "UPDATE pengaduan SET status='selesai' WHERE id_pengaduan = '$id'";

    $qsimpan = $koneksi->query($sql);

    $sql2 = "INSERT INTO tanggapan (id_pengaduan, tgl_tanggapan, tanggapan, id_petugas)
            VALUES ('$id','$tgl','$tanggapan','$id_petugas')";

    $qsimpan2 = $koneksi->query($sql2);

    if($qsimpan2) {
        header('location: ../admin/index.php?url=pengaduan_diproses.php');
    }