<?php 
    include '../config/config.php';

    $id = $_GET['id'];

    $sql = "DELETE FROM petugas WHERE id_petugas = '$id'";

    $qhapus = $koneksi->query($sql);

    if($qhapus) {
        header('location:../admin/index.php?url=semua_user.php');
    }