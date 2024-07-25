<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Form Edit Surat Keluar</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active"> Edit Surat Keluar</li>
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
                            <h3 class="card-title">Data Surat Keluar</h3>
                        </div>
                        <!-- form start -->
                        <?php echo form_open_multipart('dashboardadmin/editSuratKeluar'); ?>
                        <input type="hidden" name="id_suratkeluar" value="<?php echo $id_suratkeluar->id_suratkeluar; ?>">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Nomor Surat</label>
                                <input type="text" class="form-control" name="no_suratkeluar" value="<?php echo $id_suratkeluar->no_suratkeluar; ?>" placeholder="Nomer Surat">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Nama Surat</label>
                                <input type="text" class="form-control" name="judul_suratkeluar" value="<?php echo $id_suratkeluar->judul_suratkeluar; ?>" placeholder="Nama Surat">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Kode Indeks</label>
                                <select class="form-control" name="id_indeks">
                                    <?php foreach ($indeks as $val) { ?>
                                        <option value="<?php echo $val->id_indeks; ?>"><?php echo $val->kode_indeks; ?> </option>

                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Tujuan</label>
                                <input type="text" value="<?php echo $id_suratkeluar->tujuan; ?>" class="form-control" name="tujuan" placeholder="Tujuan">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Tanggal Keluar</label>
                                <input type="date" class="form-control" name="tgl_keluar" value="<?php echo $id_suratkeluar->tgl_keluar; ?>" placeholder="Tanggal Keluar">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Keterangan</label>
                                <input type="text" class="form-control" name="keterangan" value="<?php echo $id_suratkeluar->keterangan; ?>" placeholder="Kode Indeks">
                            </div>


                            <div class="control-group">
                                <input type="file" name="file" class="form-control" placeholder="Gambar" data-validation-required-message="Please enter your email" />
                                <p class="help-block text-danger"></p>
                                <img src="<?php echo base_url() . "/assets/suratkeluar/" . $id_suratkeluar->file; ?>" width="100" /><br><br>
                            </div>



                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" name="simpan" class="btn btn-primary">Submit</button>
                            <a href="<?php echo base_url('dashboardAdmin/tampilSuratKeluar'); ?>" class="btn btn-primary">Kembali</a>
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