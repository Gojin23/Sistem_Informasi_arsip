<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Form Tambah User</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Tambah User</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                    <!-- Horizontal Form -->
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Data User</h3>
                        </div>
                        <!-- form start -->
                        <?php echo form_open_multipart('dashboardadmin/saveUserAdmin'); ?>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Username</label>
                                <input type="text" class="form-control" name="username" placeholder="Username" required="required" data-validation-required-message="Please enter kode indeks">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Password" required="required" data-validation-required-message="Please enter kode indeks">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Nama</label>
                                <input type="text" class="form-control" name="nama_lengkap" placeholder="Nama" required="required" data-validation-required-message="Please enter kode indeks">
                            </div>


                            <div class="form-group">
                                <label for="exampleInputPassword1">Bio</label>
                                <input type="text" class="form-control" name="bio" placeholder="Bio" required="required" data-validation-required-message="Please enter kode indeks">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Email" required="required" data-validation-required-message="Please enter kode indeks">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">level</label>
                                <select name="level" class="form-control" required="required" data-validation-required-message="Please enter kode indeks">
                                    <option value="">pilih kelas</option>
                                    <option value="superadmin">superadmin</option>
                                    <option value="admin">admin</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">image</label>
                                <input type="file" class="form-control" name="image">
                            </div>



                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" name="simpan" class="btn btn-primary">Submit</button>
                            <a href="<?php echo base_url('dashboardAdmin/tampilUserAdmin'); ?>" class="btn btn-primary">Kembali</a>
                            <?php echo form_close(); ?>
                        </div>


                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>