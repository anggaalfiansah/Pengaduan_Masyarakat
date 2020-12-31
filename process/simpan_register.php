<?php 

include '../config/config.php';

    $nik  = $_POST['nik'];
    $nama = $_POST['nama'];
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $telp = $_POST['telpon'];

    $sql = "INSERT INTO masyarakat (nik,nama,username,password,telpon) 
            VALUES ('$nik','$nama','$user','$pass', '$telp')";

    $qregister = $koneksi->query($sql);

if($qregister) {
   ?>

   <script>
       alert ('Selamat ada berhasil Register, Silahkan Login');
       window.location = '../login.php';
   </script>
<?php } ?>