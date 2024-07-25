  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-6">
                      <h1 class="m-0">Dashboard</h1>
                  </div><!-- /.col -->
                  <div class="col-sm-6">
                      <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="#">Home</a></li>
                          <li class="breadcrumb-item active">Dashboard v1</li>
                      </ol>
                  </div><!-- /.col -->
              </div><!-- /.row -->
          </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
          <div class="container-fluid">
              <!-- Small boxes (Stat box) -->
              <div class="row">
                  <div class="col-lg-3 col-6">
                      <!-- small box -->
                      <div class="small-box bg-info">
                          <div class="inner">
                              <h3><?php echo $indeks_count; ?></h3>

                              <p>Indeks</p>
                          </div>
                          <div class="icon">
                              <i class="ion ion-stats-bars"></i>
                          </div>
                          <a href="<?php echo base_url('dashboardAdmin/indeks'); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                      </div>
                  </div>
                  <!-- ./col -->
                  <div class="col-lg-3 col-6">
                      <!-- small box -->
                      <div class="small-box bg-success">
                          <div class="inner">
                              <h3><?php echo $suratmasuk_count; ?></h3>

                              <p>Surat Masuk</p>
                          </div>
                          <div class="icon">
                              <i class="ion ion-android-mail"></i>
                          </div>
                          <a href="<?php echo base_url('dashboardAdmin/tampilsuratmasuk'); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                      </div>
                  </div>
                  <!-- ./col -->
                  <div class="col-lg-3 col-6">
                      <!-- small box -->
                      <div class="small-box bg-warning">
                          <div class="inner">
                              <h3><?php echo $suratkeluar_count; ?></h3>

                              <p>Surat Keluar</p>
                          </div>
                          <div class="icon">
                              <i class="ion ion-android-mail"></i>
                          </div>
                          <a href="<?php echo base_url('dashboardAdmin/tampilsuratkeluar'); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                      </div>
                  </div>
                  <!-- ./col -->
                  <div class="col-lg-3 col-6">
                      <!-- small box -->
                      <div class="small-box bg-danger">
                          <div class="inner">
                              <h3><?php echo $total_surat; ?></h3>

                              <p>Total Surat Masuk dan Keluar</p>
                          </div>
                          <div class="icon">
                              <i class="ion ion-android-mail"></i>
                          </div>
                          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                      </div>
                  </div>
                  <!-- ./col -->
                   <!-- ./col -->
                  <div class="col-lg-3 col-6">
                      <!-- small box -->
                      <div class="small-box bg-danger">
                          <div class="inner">
                              <h3><?php echo $user_count; ?></h3>

                              <p>Total User</p>
                          </div>
                          <div class="icon">
                              <i class="ion ion-android-mail"></i>
                          </div>
                          <a href="<?php echo base_url('dashboardAdmin/tampilUserAdmin'); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                      </div>
                  </div>
                  <!-- ./col -->
                   
              </div>
              <!-- /.row -->