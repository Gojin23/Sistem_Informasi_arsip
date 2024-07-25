<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SMK TARUNA BAKTI| Dashboard</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url('assets/admin/plugins/fontawesome-free/css/all.min.css'); ?>">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url('assets/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css'); ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('assets/admin/dist/css/adminlte.min.css'); ?>">
  
</head>

<body class="hold-transition login-page p-3 mb-2 bg-body text-body">
    <div class="login-box">

        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body rounded ">
                <div class="text-center">
                    <h4>SMK TARUNA BAKTI</h4>
                </div>
                <?php if ($this->session->flashdata('error')) : ?>
                    <div style="color: red;"><?php echo $this->session->flashdata('error'); ?></div>
                <?php endif; ?>
                <?php echo form_open('auth/login'); ?>

                <div class="input-group mb-3 mt-3">
                    <input type="text" class="form-control form-control-user" placeholder="Username " id="username" name="username">

                </div>
                <?= form_error('username', '<small class="text-danger pl-3">', '</small'); ?>
                <div class="input-group mb-3">
                    <input type="password" id="password" class="form-control form-control-user" name="password" placeholder="Password">
                    <?= form_error('password', '<small class="text-danger pl-3">', '</small'); ?>

                </div>
                <div class="col-5 mx-auto  mt-3">
                    <button type="submit" class="btn btn-primary btn-block">Masuk</button>
                </div>



                <?php echo form_close(); ?>


            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="<?php echo base_url('assets/admin/plugins/jquery/jquery.min.js'); ?>"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url('assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url('assets/admin/dist/js/adminlte.min.js'); ?>></script>
   
        < /body>

        < /html>