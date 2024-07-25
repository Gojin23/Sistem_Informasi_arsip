<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Member</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Member</li>
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
                            <h3 class="card-title">Bordered Table</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>ID User</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Nama </th>
                                        <th>Bio</th>
                                        <th>email</th>
                                        <th>Level</th>
                                        <th>Image</th>
                                        <th>Aksi</th>




                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($user as $val) { ?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $val->id_user; ?></td>
                                            <td><?php echo $val->username; ?></td>
                                            <td><?php echo $val->password; ?></td>
                                            <td><?php echo $val->nama_lengkap; ?></td>
                                            <td><?php echo $val->bio; ?></td>
                                            <td><?php echo $val->email; ?></td>
                                            <td><?php echo $val->level; ?></td>

                                            <td><?php echo $val->image; ?></td>
                                            <td><?php echo anchor(
                                                    'dashboardAdmin/detailUserAdmin/' . $val->id_user,
                                                    '<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>'
                                                ) ?>

                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="<?php echo site_url('dashboardAdmin/get_by_idUseradmin/' . $val->id_user); ?>" class="btn btn-warning">Edit</a>
                                                    <a href="<?php echo site_url('dashboardAdmin/deleteUserAdmin/' . $val->id_user); ?>" onclick="return confirm('Yakin Akan Hapus Data Ini?')" class="btn btn-danger">Hapus</a>
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
                            <?php echo $this->session->flashdata('pesan') ?>
                            <a href="<?php echo site_url('dashboardAdmin/addUserAdmin'); ?>" class="btn btn-sm btn-info float-left">Tambah User</a>
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