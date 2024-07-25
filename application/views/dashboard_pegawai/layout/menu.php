<!-- sidebar.php -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="<?php echo base_url('assets/admin/dist/img/AdminLTELogo.png'); ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">SMK TARUNA BAKTI</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <?php $gambar_profil = base_url('assets/profil/' . $this->session->userdata('image')); ?>
                <img src="<?php echo $gambar_profil; ?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info text-white">
                <p>Welcome, <?php echo $this->session->userdata('nama_lengkap'); ?></p>
                <!-- tambahkan info lainnya jika diperlukan -->
            </div>
        </div>


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                <li clas="nav-item">
                    <a href="<?php echo site_url('dashboard_pegawai'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <li clas="nav-item">
                    <a href="<?php echo site_url('dashboard_pegawai/tampilSuratMasuk'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-envelope"></i>
                        <p>Laporan Surat Masuk</p>
                    </a>
                </li>
                <li clas="nav-item">
                    <a href="<?php echo site_url('dashboard_pegawai/tampilSuratKeluar'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-envelope"></i>
                        <p>Laporan Surat Keluar</p>
                    </a>
                </li>
                <li clas="nav-item">
                    <a href="<?php echo site_url('dashboard_pegawai/indeks'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-layer-group"></i>
                        <p>Indeks</p>
                    </a>
                </li>
                <li clas="nav-item">
                    <a href="<?php echo site_url('auth/logout'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>