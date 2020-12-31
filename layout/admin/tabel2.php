<tr>
    <td><?php echo $no++ ?></td>
    <td><?php echo $rowpetugas['nama_petugas'] ?></td>
    <td><?php echo $rowpetugas['level'] ?></td>
    <td class="text-center ">
        <a class="collapsed" href="#" data-toggle="collapse" data-target="#aksi<?php echo $nomor++; ?>" aria-expanded="true">
            <i class="fas fa-ellipsis-h"></i>
        </a>
        <div id="aksi<?php echo $nomor2++; ?>" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="py-2 text-center collapse-inner">
                <a class="btn-block btn-sm btn-danger text-white rounded p-1" data-toggle="modal" data-target="#detailuser<?php echo $rowpetugas['id_petugas']; ?>" role="button">
                    <span class="text-white-50"> 
                        <i class="fas fa-info-circle"></i>
                    </span>
                    <div class="topbar-divider d-none"></div>
                    <span class="text">Detail</span>
                </a>
                <a href="../process/hapus_user-admin.php?id=<?php echo $rowpetugas['id_petugas'] ?>" class="btn-block btn-sm btn-danger text-white rounded p-1">
                    <span class="text-white-50">
                        <i class="fas fa-trash"></i>
                    </span>
                    <div class="topbar-divider d-none"></div>
                    <span class="text">Hapus</span>
                </a>
            </div>
        </div>
    </td>
</tr>