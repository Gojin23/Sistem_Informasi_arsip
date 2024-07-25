<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Form Tambah Surat Masuk</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Tambah Surat Masuk</li>
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
                            <h3 class="card-title">Data Surat Masuk</h3>
                        </div>
                        <!-- form start -->
                        <?php echo form_open_multipart('dashboardadmin/saveSuratMasuk'); ?>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Nomor Surat</label>
                                <input type="text" class="form-control" name="no_suratmasuk" placeholder="Nomor Surat" required="required" data-validation-required-message="Please enter kode indeks">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Nama Surat</label>
                                <input type="texxt" class="form-control" name="namasurat" placeholder="Nama Surat" required="required" data-validation-required-message="Please enter kode indeks">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Asal Surat</label>
                                <input type="text" class="form-control" name="asalsurat" placeholder="Nama" required="required" data-validation-required-message="Please enter kode indeks">
                            </div>


                            <div class="form-group">
                                <label for="exampleInputPassword1">Tanggal Diterima</label>
                                <input type="date" class="form-control" name="tglditerima" placeholder="Bio" required="required" data-validation-required-message="Please enter kode indeks">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Kode Indeks</label>
                                <select class="form-control" name="id_indeks" required="required" data-validation-required-message="Please enter kode indeks">
                                    <?php foreach ($indeks as $val) { ?>
                                        <option value="<?php echo $val->id_indeks; ?>"><?php echo $val->kode_indeks; ?> </option>

                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Keterangan</label>
                                <input type="text" class="form-control" name="keterangan" placeholder="Keterangan" required="required" data-validation-required-message="Please enter kode indeks">
                            </div>


                            <div class="form-group">
                                <label for="exampleInputPassword1">File</label>
                                <input type="file" class="form-control" name="file" >
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
<!-- SweetAlert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script>
    <?php if ($this->session->flashdata('success')) { ?>
        Swal.fire({
            title: "Berhasil!",
            text: "<?php echo $this->session->flashdata('success'); ?>",
            type: "success"
        });
    <?php } ?>
</script>