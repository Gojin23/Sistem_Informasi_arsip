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
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
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
                                        <th>Id Indeks </th>
                                        <th>Tujuan</th>
                                        <th>Tanggal Keluar</th>
                                        <th>Keterangan</th>
                                        <th>Berkas Surat Keluar</th>

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
                                                    <a href="<?php echo site_url('dashboardAdmin/get_by_idSuratKeluar/' . $val->id_suratkeluar); ?>" class="btn btn-warning">Edit</a>
                                                    <a href="<?php echo site_url('dashboardAdmin/deleteSuratKeluar/' . $val->id_suratkeluar); ?>" onclick="return confirm('Yakin Akan Hapus Data Ini?')" class="btn btn-danger">Hapus</a>
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
                            <a href="<?php echo site_url('dashboardAdmin/addSuratKeluar'); ?>" class="btn btn-sm btn-info float-left">Tambah Surat Keluar</a>
                            <ul class="pagination pagination-sm m-0 float-right">
                                <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.card -->
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <!-- /.col -->
            </div>
            <!-- /.row -->
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>