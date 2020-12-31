<?php
include '../process/tampil_pengaduan-admin.php';

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
                    <form action="../process/simpan_proses.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id_pengaduan" value="<?php echo $rowlaporan['id_pengaduan']; ?>">
                        <div class="form-group">
                            <label for="status">Status</label>
                            <input type="text" class="form-control" id="tanggal" value="<?php
                                                                                        if ($rowlaporan['status'] === '0') {
                                                                                            echo 'Diterima';
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
                        <?php
                        // menentukan nama pelapor
                            $nik = $rowlaporan['nik'];

                            $sql4 = "SELECT * FROM masyarakat WHERE nik = '$nik'";

                            $qpelapor = $koneksi->query($sql4);

                            $rowpelapor = $qpelapor->fetch_assoc();
                        ?>
                        <div class="form-group">
                            <label for="pelapor">Pelapor</label>
                            <input type="text" class="form-control" id="pelapor" value='<?php echo $rowpelapor['nama']; ?>' readonly>
                        </div>
                        <div class="form-group">
                            <label for="isi-laporan">Isi Laporan</label>
                            <textarea class="form-control" name="isi-laporan" id="isi-laporan" rows="5" readonly><?php echo $rowlaporan['isi_laporan']; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Foto</label><br>
                            <img class="bg-light" id="blah" src="../foto/<?php echo $rowlaporan['foto']; ?>" style="width: 150px; height: 150px; border: 1px solid #d1d3e2;">
                            </label>
                        </div>
                        <?php
                        if ($rowlaporan['status'] === '0') {
                        ?><button type="submit" class="btn btn-danger">Proses</button><?php
                                                                                    } else {
                                                                                    } ?>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php }
