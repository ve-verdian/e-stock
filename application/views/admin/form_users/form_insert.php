<!DOCTYPE html>
<html lang="en">
<<<<<<< HEAD

<head>
  <title><?= $title; ?></title>
  	<?php $this->load->view("admin/_layouts/header.php") ?>
  <div class="wrapper">
    <?php $this->load->view("admin/_layouts/navbar.php") ?>
    <?php $this->load->view("admin/_layouts/sidebar.php") ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Tambah User</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Form User Baru</li>
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
            <div class="col-md-12">
              <!-- Horizontal Form -->
              <div class="card card-danger">
                <div class="card-header">
                  <h3 class="card-title"><i class="fa fa-archive" aria-hidden="true"></i> Input Users Baru</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal" action="<?=base_url('admin/proses_tambah_user')?>" role="form"
                  method="post">

                  <?php if($this->session->flashdata('msg_berhasil')){ ?>
                  <div class="alert alert-success alert-dismissible" style="width:91%">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Success!</strong><br> <?= $this->session->flashdata('msg_berhasil');?>
                  </div>
                  <?php } ?>

                  <div class="card-body">
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control" id="username"
													placeholder="Username">
												<?= form_error('username', '<small class="text-danger pl-3">', '</small>') ?>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="email">Email</label>
                        <input type="text" name="email" class="form-control" id="email"
													placeholder="Email">
												<?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control"
													id="password" placeholder="Password">
												<?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="confirm_password">Confirm Password</label>
                        <input type="password" name="confirm_password" class="form-control"
													id="confirm_password" placeholder="Confirm Password">
													<?= form_error('confirm_password', '<small class="text-danger pl-3">', '</small>') ?>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-2">
                        <label for="role">Role</label>
                        <select name="role" class="form-control">
                          <option value="0" selected="">-- Pilih --</option>
                          <option value="0">User Biasa</option>
                          <option value="1">User Admin</option>
                        </select>
                      </div>
                    </div>
                    <?php if(isset($token_generate)){ ?>
                    <input type="hidden" name="token" class="form-control" value="<?= $token_generate?>">
                    <?php }else {
                	redirect(base_url('admin/form_user'));
              	}?>
                    <!-- /.card-body -->
                    <div class="card-footer">
                      <a type="submit" class="btn btn-warning" onclick="history.back(-1)" name="btn_kembali"><i
                          class="far fa-arrow-alt-circle-left" aria-hidden="true"></i> Kembali</a>
                      <button type="submit" class="btn btn-success"><i class="far fa-save" aria-hidden="true"></i>
                        Simpan</button>
                      <a type="submit" class="btn btn-primary center-block" href="<?=base_url('admin/users')?>"
                        name="btn_listusers"><i class="fa fa-table" aria-hidden="true"></i> List Users</a>

                    </div>
                  </div>
                  <!-- /.card-footer -->
                </form>
              </div>
              <!-- /.card -->
            </div>
            <!--/.col (left) -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php $this->load->view("admin/_layouts/footer.php") ?>
    <script src="<?= base_url()?>assets/plugins/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
    <script type="text/javascript">
    $(".form_datetime").datetimepicker({
      format: 'dd/mm/yyyy',
      autoclose: true,
      todayBtn: true,
      pickTime: false,
      minView: 2,
      maxView: 4,
    });
    </script>
    </body>

</html>
=======
<head>
  <title><?= $title; ?></title>
	<?php $this->load->view("admin/_layouts/header.php") ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
	<?php $this->load->view("admin/_layouts/navbar.php") ?>
	<?php $this->load->view("admin/_layouts/sidebar.php") ?>
<div class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tambah User
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">User Baru</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <div class="container">
            <!-- general form elements -->
          <div class="box box-primary" style="width:94%;">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-fw fa-user" aria-hidden="true"></i> Input Users Baru</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="container">
            <form action="<?=base_url('admin/proses_tambah_user')?>" role="form" method="post">

              <?php if($this->session->flashdata('msg_berhasil')){ ?>
                <div class="alert alert-success alert-dismissible" style="width:91%">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Success!</strong><br> <?= $this->session->flashdata('msg_berhasil');?>
               </div>
              <?php } ?>

              <?php if(validation_errors()){ ?>
              <div class="alert alert-warning alert-dismissible">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong>Warning!</strong><br> <?= validation_errors(); ?>
             </div>
            <?php } ?>

              <div class="box-body">
                <div class="form-group" style="display:block;">
                  <label for="username" style="width:87%;margin-left: 0px;">Username</label>
                  <input type="text" name="username" style="width: 30%;margin-right: 67px;margin-left: 0px;" class="form-control" id="username" placeholder="Username">
                </div>
                <div class="form-group" style="display:block;">
                  <label for="email" style="width:73%;">Email</label>
                  <input type="text" name="email" style="width:30%;margin-right: 67px;" class="form-control" id="email" placeholder="Email">
              </div>
                <div class="form-group" style="display:block;">
                  <label for="password" style="width:73%;">Password</label>
                  <input type="password" name="password" style="width:30%;margin-right: 67px;" class="form-control" id="password" placeholder="Password">
              </div>
                <div class="form-group" style="display:block;">
                  <label for="confirm_password" style="width:73%;">Confirm Password</label>
                  <input type="password" name="confirm_password" style="width:30%;margin-right: 67px;" class="form-control" id="confirm_password" placeholder="Confirm Password">
              </div>
              <div class="form-group" style="display:block;">
                <label for="role" style="width:73%;">Role</label>
                <select class="form-control" name="role" style="width:11%;margin-right: 18px;">
                  <option value="0" selected=""></option>
                  <option value="0">User Biasa</option>
                  <option value="1">User Admin</option>
                </select>
            </div>
              <!-- /.box-body -->
              <?php if(isset($token_generate)){ ?>
                <input type="hidden" name="token"  class="form-control" value="<?= $token_generate?>">
              <?php }else {
                redirect(base_url('admin/form_user'));
              }?>

              <div class="box-footer" style="width:93%;">
                <a type="button" class="btn btn-default" style="width:10%;margin-right:26%" onclick="history.back(-1)" name="btn_kembali"><i class="fa fa-arrow-left" aria-hidden="true"></i> Kembali</a>
                <a type="button" class="btn btn-info" style="width:13%;margin-right:29%" href="<?=base_url('admin/users')?>" name="btn_listusers"><i class="fa fa-table" aria-hidden="true"></i> List Users</a>
                <button type="submit" style="width:20%" class="btn btn-success"><i class="fa fa-check" aria-hidden="true"></i> Submit</button>
              </div>
            </form>
          </div>
          </div>
        </div>
        </div>
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php $this->load->view("admin/_layouts/footer.php") ?>
  </body>
  </html>
>>>>>>> 3be6f91dfde298de5f65865ce6ea2be0989d0555
