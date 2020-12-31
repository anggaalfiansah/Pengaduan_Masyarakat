<tr>
    <td><?php echo $rowlaporan['id_pengaduan']; ?></td>
    <td>
        <?php 
            $nik     = $rowlaporan['nik']; 
            $sql     = "SELECT * FROM masyarakat WHERE nik = '$nik'";
            $qnama   = $koneksi -> query($sql);
            $rownama = $qnama -> fetch_assoc();

            echo $rownama['nama'];
        ?>
    </td>
    <td><?php
        if ($rowlaporan['status'] === '0') {
            echo 'Diterima';
        } else if ($rowlaporan['status'] === 'proses') {
            echo 'Diproses';
        } else {
            echo 'Selesai';
        }
        ?>
    </td>
    <td class="text-center">
        <a class="btn-block btn-danger text-white small rounded p-2" data-toggle="modal" data-target="#detailpengaduan<?php echo $rowlaporan['id_pengaduan']; ?>" role="button">
            <span class="text-white-50">
                <i class="fas fa-info-circle"></i>
            </span>
            <div class="topbar-divider d-none"></div>
            <span class="text">Detail</span>
        </a>
    </td>
</tr>