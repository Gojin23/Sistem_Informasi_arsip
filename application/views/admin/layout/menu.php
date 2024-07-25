<aside class="main-sidebar sidebar-dark-danger elevation-4">
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
                <img src="<?php echo base_url('assets/suratkeluar/formal10.jpg'); ?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <?php if ($this->session->userdata('username')) : ?>
                    <a href="<?php echo base_url('dashboardAdmin/detailUserAdmin/' . $this->session->userdata('id_user')); ?>" class="d-block"><?php echo $this->session->userdata('nama_lengkap'); ?></a>
                <?php endif; ?>
            </div>
        </div>


        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li clas="nav-item">
                    <a href="<?php echo site_url('dashboardAdmin'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li clas="nav-item">
                    <a href="<?php echo site_url('dashboardAdmin/TampilUserAdmin'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>User</p>
                    </a>
                </li>
                <li clas="nav-item">
                    <a href="<?php echo site_url('dashboardAdmin/TampilSuratMasuk'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-envelope"></i>

                        <p>Surat Masuk</p>
                    </a>
                </li>
                <li clas="nav-item">
                    <a href="<?php echo site_url('dashboardAdmin/TampilSuratKeluar'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-envelope"></i>
                        <p>Surat Keluar</p>
                    </a>
                </li>
                <li clas="nav-item">
                    <a href="<?php echo site_url('dashboardAdmin/TampilIndeks'); ?>" class="nav-link">
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