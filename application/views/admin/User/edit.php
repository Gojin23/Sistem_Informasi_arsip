<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Form Edit User</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit User</li>
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
                        <?php echo form_open_multipart('dashboardadmin/editUserAdmin'); ?>
                        <input type="hidden" name="id_user" value="<?php echo $id_user->id_user; ?>">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Username</label>
                                <input type="text" class="form-control" name="username" value="<?php echo $id_user->username; ?>" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" name="password" value="<?php echo $id_user->password; ?>" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Nama</label>
                                <input type="text" class="form-control" name="nama_lengkap" value="<?php echo $id_user->nama_lengkap; ?>" placeholder="Nama">
                            </div>


                            <div class="form-group">
                                <label for="exampleInputPassword1">Bio</label>
                                <input type="text" class="form-control" name="bio" value="<?php echo $id_user->bio; ?>" placeholder="Bio">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Email</label>
                                <input type="email" class="form-control" name="email" value="<?php echo $id_user->email; ?>" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">level</label>
                                <select name="level" class="form-control">
                                    <option value="">pilih kelas</option>
                                    <option value="superadmin">superadmin</option>
                                    <option value="admin">admin</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Image</label>
                                <input type="file" name="image" class="form-control" placeholder="Gambar" data-validation-required-message="Please enter your email" />
                                <p class="help-block text-danger"></p>
                                <img src="<?php echo base_url() . "/assets/profil/" . $id_user->image; ?>" width="100" /><br><br>
                            </div>



                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" name="simpan" class="btn btn-primary">Submit</button>
                            <a href="<?php echo base_url('dashboardAdmin/tampilUserAdmin'); ?>" class="btn btn-primary">Kembali</a>
                        </div>


                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>