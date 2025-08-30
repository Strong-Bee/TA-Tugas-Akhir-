<?= $this->extend('SuperAdmin/index') ?>

<?= $this->section('title') ?>
Dashboard | Portal Pengajuan
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="app-wrapper">

    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">

            <h1 class="app-page-title">Overview</h1>

            <div class="app-card alert alert-dismissible shadow-sm mb-4 border-left-decoration" role="alert">
                <div class="inner">
                    <div class="app-card-body p-3 p-lg-4">
                        <h3 class="mb-3">Welcome, developer!</h3>
                        <div class="row gx-5 gy-3">
                            <div class="col-12 col-lg-9">

                                <div>Portal is a free Bootstrap 5 admin dashboard template. The design is simple,
                                    clean and modular so it's a great base for building any modern web app.</div>
                            </div>
                            <div class="col-12 col-lg-3">
                                <a class="btn app-btn-primary"
                                    href="https://themes.3rdwavemedia.com/bootstrap-templates/admin-dashboard/portal-free-bootstrap-admin-dashboard-template-for-developers/"><svg
                                        width="1em" height="1em" viewBox="0 0 16 16"
                                        class="bi bi-file-earmark-arrow-down me-2" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M4 0h5.5v1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h1V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2z" />
                                        <path d="M9.5 3V0L14 4.5h-3A1.5 1.5 0 0 1 9.5 3z" />
                                        <path fill-rule="evenodd"
                                            d="M8 6a.5.5 0 0 1 .5.5v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 1 1 .708-.708L7.5 10.293V6.5A.5.5 0 0 1 8 6z" />
                                    </svg>Free Download</a>
                            </div>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                </div><!--//inner-->
            </div>

            <div class="row g-4 mb-4">
                <!-- Total Karyawan -->
                <div class="col-6 col-lg-3">
                    <div class="app-card app-card-stat shadow-sm h-100">
                        <div class="app-card-body p-3 p-lg-4">
                            <h4 class="stats-type mb-1">Total Karyawan</h4>
                            <div class="stats-figure">120</div>
                            <div class="stats-meta text-success">
                                <i class="fas fa-users"></i> 10% dari bulan lalu
                            </div>
                        </div>
                        <a class="app-card-link-mask" href="data-karyawan.html"></a>
                    </div>
                </div>

                <!-- Total Pengajuan -->
                <div class="col-6 col-lg-3">
                    <div class="app-card app-card-stat shadow-sm h-100">
                        <div class="app-card-body p-3 p-lg-4">
                            <h4 class="stats-type mb-1">Total Pengajuan</h4>
                            <div class="stats-figure">245</div>
                            <div class="stats-meta text-success">
                                <i class="fas fa-file-alt"></i> 12% dibanding bulan lalu
                            </div>
                        </div>
                        <a class="app-card-link-mask" href="pengajuan.html"></a>
                    </div>
                </div>

                <!-- Pengajuan Pending -->
                <div class="col-6 col-lg-3">
                    <div class="app-card app-card-stat shadow-sm h-100">
                        <div class="app-card-body p-3 p-lg-4">
                            <h4 class="stats-type mb-1">Pending</h4>
                            <div class="stats-figure">34</div>
                            <div class="stats-meta text-warning">
                                <i class="fas fa-clock"></i> Menunggu persetujuan
                            </div>
                        </div>
                        <a class="app-card-link-mask" href="pengajuan-pending.html"></a>
                    </div>
                </div>

                <!-- Pengajuan Disetujui -->
                <div class="col-6 col-lg-3">
                    <div class="app-card app-card-stat shadow-sm h-100">
                        <div class="app-card-body p-3 p-lg-4">
                            <h4 class="stats-type mb-1">Disetujui</h4>
                            <div class="stats-figure">180</div>
                            <div class="stats-meta text-success">
                                <i class="fas fa-check-circle"></i> Telah diproses
                            </div>
                        </div>
                        <a class="app-card-link-mask" href="pengajuan-disetujui.html"></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<?= $this->endSection() ?>