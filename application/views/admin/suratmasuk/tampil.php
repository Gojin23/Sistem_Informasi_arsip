<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Surat Masuk</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Surat Masuk</li>
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
                            <h3 class="card-title">Data Surat Masuk</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">NO</th>
                                        <th>No Surat Masuk</th>
                                        <th>Judul Surat Masuk</th>
                                        <th>Asal Surat</th>
                                        <th>Tanggal Diterima</th>
                                        <th>kode Indeks</th>
                                        <th>Keterangan</th>
                                        <th>Berkas Surat Masuk</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($suratmasuk as $val) { ?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                             <td><?php echo $val->no_suratmasuk; ?></td>
                                            <td><?php echo $val->namasurat; ?></td>
                                            <td><?php echo $val->asalsurat; ?></td>
                                            <td><?php echo $val->tglditerima; ?></td>
                                            <td><?php echo $val->id_indeks; ?></td>
                                            <td><?php echo $val->keterangan; ?></td>
                                            <td><?php echo $val->file; ?></td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="<?php echo site_url('dashboardAdmin/get_by_idSuratmasuk/' . $val->id_suratmasuk); ?>" class="btn btn-warning">Edit</a>
                                                    <a href="<?php echo site_url('dashboardAdmin/deleteSuratMasuk/' . $val->id_suratmasuk); ?>" onclick="return confirm('Yakin Akan Hapus Data Ini?')" class="btn btn-danger">Hapus</a>
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
                            <a href="<?php echo site_url('dashboardAdmin/addSuratMasuk'); ?>" class="btn btn-sm btn-info float-left">Tambah Surat Masuk</a>
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