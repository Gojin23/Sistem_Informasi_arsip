<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Form Tambah Indeks</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Tambah Indeks</li>
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
                            <h3 class="card-title">Data Indeks</h3>
                        </div>
                        <!-- form start -->
                        <form name="sentMessage" method="post" action="<?php echo site_url('dashboardAdmin/saveIndeks'); ?>">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="id_user">Kode Indeks</label>
                                    <input type="text" class="form-control" name="kode_indeks" placeholder="Kode Indeks"  required="required" data-validation-required-message="Please enter kode indeks">

                                </div>


                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="id_user">Nama Indeks</label>
                                    <input type="text" class="form-control" name="judul_indeks" placeholder="Nama Indeks" required="required" data-validation-required-message="Please enter name indeks">
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="id_user">Detail</label>
                                    <input type="text" class="form-control" name="detail" placeholder="detail"
                                    required="required" data-validation-required-message="Please enter detail">

                                </div>
                            </div>
                            <!---->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>