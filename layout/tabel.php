<tr>
    <td><?php echo $no++; ?></td>
    <td><?php 
        if(strlen($rowlaporan['isi_laporan']) < 100) {
            echo $rowlaporan['isi_laporan'];
        } else {
            echo substr($rowlaporan['isi_laporan'], 0, 100) . ' ...';
        }
        ?>
    </td>
    <td><?php
        if ($rowlaporan['status'] === '0') {
            echo 'Terkirim';
        } else if ($rowlaporan['status'] === 'proses') {
            echo 'Diproses';
        } else {
            echo 'Selesai';
        }
        ?>
    </td>
    <td class="text-center ">
        <a class="collapsed" href="#" data-toggle="collapse" data-target="#aksi<?php echo $nomor++; ?>" aria-expanded="true">
            <i class="fas fa-ellipsis-h"></i>
        </a>
        <div id="aksi<?php echo $nomor2++; ?>" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="py-2 text-center collapse-inner">
                <a class="btn-block btn-sm btn-danger text-white rounded p-1" data-toggle="modal" data-target="#detailpengaduan<?php echo $rowlaporan['id_pengaduan']; ?>" role="button">
                    <span class="text-white-50">
                        <i class="fas fa-info-circle"></i>
                    </span>
                    <div class="topbar-divider d-none"></div>
                    <span class="text">Detail</span>
                </a>
                <a class="btn-block btn-sm btn-success text-white rounded p-1" data-toggle="modal" data-target="#tanggapan<?php echo $rowlaporan['id_pengaduan']; ?>" role="button">
                    <span class="text-white-50">
                        <i class="fas fa-reply-all"></i>
                    </span>
                    <div class="topbar-divider d-none"></div>
                    <span class="text">Respon</span>
                </a>
            </div>
        </div>
    </td>
</tr>