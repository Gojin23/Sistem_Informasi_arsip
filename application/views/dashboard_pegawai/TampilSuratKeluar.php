<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Surat Keluar</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Surat Keluar</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- fitur cetak laporan -->
                    <div class="row mb-3">
                        <!-- Form Cetak Laporan -->
                        <div class="col-md-6">
                            <form action="<?php echo site_url('dashboard_pegawai/cetaklaporansk'); ?>" method="post">
                                <div class="form-group">
                                    <label for="tanggal_awal">Tanggal Awal:</label>
                                    <input type="date" class="form-control" id="tanggal_awal" name="tanggal_awal">
                                </div>
                                <div class="form-group">
                                    <label for="tanggal_akhir">Tanggal Akhir:</label>
                                    <input type="date" class="form-control" id="tanggal_akhir" name="tanggal_akhir">
                                </div>
                                <button type="submit" class="btn btn-success"><i class="fas fa-print"></i> Cetak Laporan</button>
                            </form>
                        </div>
                        <!-- /. Form Cetak Laporan -->

                        <!-- Spacer Column (Empty) -->
                        <div class="col-md-2"></div>
                        <!-- /. Spacer Column -->

                        <!-- Form Pencarian -->
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <?php echo form_open('dashboard_pegawai/carisuratkeluar') ?>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="keyword" placeholder="Cari surat keluar...">
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                    <?php echo form_close() ?>
                                </div>
                            </div>
                        </div>
                        <!-- /.Form Pencarian -->
                    </div>




                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Surat Keluar</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">NO</th>
                                        <th>No Surat Keluar</th>
                                        <th>Judul Surat Keluar</th>
                                        <th>Id Indeks</th>
                                        <th>Tujuan</th>
                                        <th>Tanggal Keluar</th>
                                        <th>Keterangan</th>
                                        <th>Berkas Surat Keluar</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($suratkeluar as $val) { ?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $val->no_suratkeluar; ?></td>
                                            <td><?php echo $val->judul_suratkeluar; ?></td>
                                            <td><?php echo $val->id_indeks; ?></td>
                                            <td><?php echo $val->tujuan; ?></td>
                                            <td><?php echo $val->tgl_keluar; ?></td>
                                            <td><?php echo $val->keterangan; ?></td>
                                            <td><?php echo $val->file; ?></td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="<?php echo site_url('dashboard_pegawai/downloadsuratkeluar/' . $val->id_suratkeluar); ?>" class="btn btn-warning">Download</a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php $no++;
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            <ul class="pagination pagination-sm m-0 float-right">
                                <?php echo $this->pagination->create_links(); ?>
                            </ul>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>