<!-- Tabel Pengaduan saya -->

<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Pengaduan Ditanggapi</h1>
    <a data-toggle="modal" data-target="#buatpengaduan" role="button" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm text-white"><i class="fas fa-pencil-alt fa-sm text-white-50"></i>&nbsp;&nbsp;Buat Pengaduan</a>
  </div>
  <!-- Content -->
  <table id="dataTable" class="table table-striped table-bordered" style="width:100%">
    <thead>
      <tr>
        <th>NO</th>
        <th>ISI</th>
        <th>STATUS</th>
        <th>AKSI</th>
      </tr>
    </thead>
    <tbody>
      <?php
        include 'process/tampil_pengaduan.php';

        $no = 1;
        $nomor = 1;
        $nomor2 = 1;

        while ($rowlaporan = $qselesai->fetch_assoc()) {
          
          include 'tabel.php';

        } ?>
    </tbody>
  </table>
</div>

<!-- Modal -->
<?php
include 'modal.php';