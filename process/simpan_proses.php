<?php
    include '../config/config.php';

    $id = $_POST['id_pengaduan'];

    $sql = "UPDATE pengaduan SET status='proses' WHERE id_pengaduan = '$id'";

    $qsimpan = $koneksi->query($sql);

    if($qsimpan) {
        header('location: ../petugas/index.php?url=pengaduan_belum_diproses.php');
    }