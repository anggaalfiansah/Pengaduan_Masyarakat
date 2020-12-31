<?php
include 'process/tampil_pengaduan.php';

while ($rowlaporan = $qpengaduan->fetch_assoc()) { ?>
  <div class="modal fade" id="detailpengaduan<?php echo $rowlaporan['id_pengaduan']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Detail Pengaduan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form enctype="multipart/form-data">
            <input type="hidden" name="id_pengaduan" value="<?php echo $rowlaporan['id_pengaduan']; ?>">
            <div class="form-group">
              <label for="status">Status</label>
              <input type="text" class="form-control" id="tanggal" value="<?php
                                                                          if ($rowlaporan['status'] === '0') {
                                                                            echo 'Terkirim';
                                                                          } else if ($rowlaporan['status'] === 'proses') {
                                                                            echo 'Diproses';
                                                                          } else {
                                                                            echo 'Selesai';
                                                                          }
                                                                          ?>" readonly>
            </div>
            <div class="form-group">
              <label for="tanggal">Tanggal</label>
              <input type="text" class="form-control" id="tanggal" value="<?php echo $rowlaporan['tgl_pengaduan']; ?>" readonly>
            </div>
            <div class="form-group">
              <label for="NIK">NIK</label>
              <input type="number" class="form-control" id="NIK" value='<?php echo $rowlaporan['nik']; ?>' readonly>
            </div>
            <div class="form-group">
              <label for="isi-laporan">Isi Laporan</label>
              <textarea class="form-control" name="isi-laporan" id="isi-laporan" rows="5" readonly><?php echo $rowlaporan['isi_laporan']; ?></textarea>
            </div>
            <div class="form-group">
              <label>Foto</label><br>
              <img class="bg-light" id="blah" src="foto/<?php echo $rowlaporan['foto']; ?>" style="width: 150px; height: 150px; border: 1px solid #d1d3e2;">
              </label>
            </div>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </form>
        </div>
      </div>
    </div>
  </div>
<?php }

include 'process/tampil_pengaduan.php';

while ($rowlaporan = $qpengaduan->fetch_assoc()) {
?>

  <!-- Tanggapan Pengaduan Modal -->
  <div class="modal fade" id="tanggapan<?php echo $rowlaporan['id_pengaduan']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tanggapan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <?php if ($rowlaporan['status'] === 'selesai') {
            include 'process/tampil_tanggapan.php';
          ?>
            <form>
              <input type="hidden" name="id_pengaduan" value="<?php echo $rowtanggapan['id_pengaduan']; ?>">
              <input type="hidden" name="id_petugas" value="<?php echo $rowtanggapan['id_petugas']; ?>">
              <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <input type="text" class="form-control" id="tanggal" name="tanggal" value="<?php echo $rowtanggapan['tgl_tanggapan']; ?>" readonly>
              </div>
              <div class="form-group">
                <?php
                $id_petugas = $rowtanggapan['id_petugas'];
                $sql = "SELECT * FROM petugas WHERE id_petugas = '$id_petugas'";
                $qpetugas = $koneksi->query($sql);
                $rowpetugas = $qpetugas->fetch_assoc();
                ?>
                <label for="admin">Petugas</label>
                <input type="text" class="form-control" id="admin" name="admin" value="<?php echo $rowpetugas['nama_petugas']; ?>" readonly>
              </div>
              <div class="form-group">
                <label for="tanggapan">Tanggapan</label>
                <textarea class="form-control" name="tanggapan" id="tanggapan" rows="5" readonly><?php echo $rowtanggapan['tanggapan']; ?></textarea>
              </div>
            </form>
          <?php } else { ?>
            <p>Maaf Pengaduan Anda Belum Ditanggapi</p>
          <?php } ?>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </div>
    </div>
  </div>

<?php } ?>