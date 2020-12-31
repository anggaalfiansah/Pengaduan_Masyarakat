<!-- Tabel Pengaduan saya -->

<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Semua User</h1>
  </div>
  <!-- Content -->
  <table id="dataTable" class="table table-striped table-bordered" style="width:100%">
    <thead>
      <tr>
        <th>NO</th>
        <th>NAMA</th>
        <th>TELPON</th>
        <th>AKSI</th>
      </tr>
    </thead>
    <tbody>
      <?php
      include '../process/tampil_user.php';

      $no = 1;
      $nomor = 1;
      $nomor2 = 1;

      while ($rowmasyarakat = $qmasyarakat->fetch_assoc()) {

        include 'tabel3.php';
        
      } ?>
    </tbody>
  </table>
</div>

<!-- Modal -->
<?php
    include 'modal.php';
