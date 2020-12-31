<?php 

include '../config/config.php';

    $level  = $_POST['level'];
    $nama   = $_POST['nama'];
    $user   = $_POST['username'];
    $pass   = $_POST['password'];
    $telp   = $_POST['telpon'];

    $sql = "INSERT INTO petugas (nama_petugas,username,password,level,telpon) 
            VALUES ('$nama','$user','$pass', '$level', '$telp')";

    $qregister = $koneksi->query($sql);

if($qregister) {
    header("location:../admin/index.php?url=semua_user.php");
}