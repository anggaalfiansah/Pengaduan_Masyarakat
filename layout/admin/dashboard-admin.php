<!-- Dashboard -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <!-- Content Row -->
    <div class="row">


        <?php include '../process/tampil_pengaduan-admin.php'; ?>

        <!-- Semua Pengaduan -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-secondary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Semua Pengaduan</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlahpengaduan; ?></div>
                        </div>
                        <div class="col-auto">
                            <a href="?url=semua_pengaduan.php"><i class="fas fa-clipboard-list fa-2x text-gray-300"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pengaduan Diterima -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Pengaduan Diterima</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlahterima; ?></div>
                        </div>
                        <div class="col-auto">
                            <a href="?url=pengaduan_terkirim.php"><i class="fas fa-paper-plane fa-2x text-gray-300"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pengaduan diproses -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Pengaduan Diproses</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlahproses; ?></div>
                        </div>
                        <div class="col-auto">
                            <a href="?url=pengaduan_diproses.php"><i class="fas fa-spinner fa-2x text-gray-300"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pengaduan ditanggapi -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pengaduan Selesai</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlahselesai; ?></div>
                        </div>
                        <div class="col-auto">
                            <a href="?url=pengaduan_selesai.php"><i class="fas fa-clipboard-check fa-2x text-gray-300"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">User</h1>
        <a data-toggle="modal" data-target="#buatuser" role="button" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm text-white"><i class="fas fa-pencil-alt fa-sm text-white-50"></i>&nbsp;&nbsp;Buat User Petugas</a>
    </div>

    <!-- Content Row -->
    <div class="row">


        <?php include '../process/tampil_user.php'; ?>

        <!-- Semua Pengaduan -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-secondary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Semua User</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlahpetugas1; ?></div>
                        </div>
                        <div class="col-auto">
                            <a href="?url=semua_user.php"><i class="fas fa-clipboard-list fa-2x text-gray-300"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pengaduan Diterima -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">User Petugas</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlahpetugas2; ?></div>
                        </div>
                        <div class="col-auto">
                            <a href="?url=user_petugas.php"><i class="fas fa-paper-plane fa-2x text-gray-300"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pengaduan diproses -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">User Admin</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlahpetugas3; ?></div>
                        </div>
                        <div class="col-auto">
                            <a href="?url=user_admin.php"><i class="fas fa-spinner fa-2x text-gray-300"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pengaduan ditanggapi -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">User Masyarakat</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlahmasyarakat; ?></div>
                        </div>
                        <div class="col-auto">
                            <a href="?url=user_masyarakat.php"><i class="fas fa-clipboard-check fa-2x text-gray-300"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>