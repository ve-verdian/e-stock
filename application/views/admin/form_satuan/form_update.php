<!DOCTYPE html>
<html lang="en">
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
        Update Data Satuan
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
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
              <h3 class="box-title"><i class="fa fa-archive" aria-hidden="true"></i> Update Data Satuan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="container">
            <form action="<?=base_url('admin/proses_satuan_update')?>" role="form" method="post">

              <?php if(validation_errors()){ ?>
              <div class="alert alert-warning alert-dismissible">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong>Warning!</strong><br> <?= validation_errors(); ?>
             </div>
            <?php } ?>

              <div class="box-body">
                <div class="form-group">
                  <?php foreach($data_satuan as $d){ ?>
                    <div class="box-body">
                      <div class="form-group" style="display:inline-block;">
                        <input type="hidden" name="id_satuan" value="<?=$d->id_satuan?>">
                        <label for="kode_satuan" style="width:87%;margin-left: 12px;">Kode Satuan</label>
                        <input type="text" required name="kode_satuan" style="width: 90%;margin-right: 67px;margin-left: 11px;" class="form-control" id="kode_satuan" placeholder="Kode Satuan" value="<?=$d->kode_satuan?>">
                      </div>
                      <div class="form-group" style="display:inline-block;">
                        <label for="nama_satuan" style="width:73%;">Nama Satuan</label>
                        <input type="text" required name="nama_satuan" style="width:90%;margin-right: 67px;" class="form-control" id="nama_satuan" placeholder="Nama Satuan" value="<?=$d->nama_satuan?>">
                    </div>
                    <div class="form-group" style="display:inline-block;">
                      <button type="reset" class="btn btn-basic" name="btn_reset" style="width:95px;margin-left:20px;"><i class="fa fa-eraser" aria-hidden="true"></i> Reset</button>
                    </div>
                    <?php } ?>
                    <!-- /.box-body -->

                    <div class="box-footer" style="width:93%;">
                      <a type="button" class="btn btn-default" style="width:10%;margin-right:26%" onclick="history.back(-1)" name="btn_kembali"><i class="fa fa-arrow-left" aria-hidden="true"></i> Kembali</a>
                      <a type="button" class="btn btn-info" style="width:13%;margin-right:29%" href="<?=base_url('admin/tabel_satuan')?>" name="btn_listsatuan"><i class="fa fa-table" aria-hidden="true"></i> Lihat Satuan</a>
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
