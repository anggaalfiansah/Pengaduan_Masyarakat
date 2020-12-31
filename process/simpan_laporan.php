<?php 

    include '../config/config.php';

    $tgl  = date('Y/m/d');
    $nik  = $_POST['nik'];
    $isi  = $_POST['isi-laporan'];
    $ft   = $_FILES['foto']['name'];
    $file = $_FILES['foto']['tmp_name'];
    $st   = 0;

    move_uploaded_file($file, "../foto/".$ft);

    $sql = "INSERT INTO pengaduan (tgl_pengaduan, nik, isi_laporan, foto, status)
            VALUES ('$tgl','$nik','$isi','$ft','$st')";
    $qsimpan = $koneksi->query($sql);

    if($qsimpan) {
        ?>
        <script>
            alert('Laporan berhasil terkirim');
            window.location = '../index.php';
       </script>
        <?php
    }

    