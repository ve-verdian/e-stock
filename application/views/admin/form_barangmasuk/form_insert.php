<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Inventory EDP | Data Barang Masuk</title>
	<link rel="shortcut icon" href="<?=base_url('assets/img/rsia_family.jpeg')?>">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/web_admin/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/web_admin/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/web_admin/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/web_admin/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/web_admin/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/datetimepicker/css/bootstrap-datetimepicker.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url('admin')?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>i</b>EDP</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Inventory</b>EDP</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <?php foreach($avatar as $a){?>
              <img src="<?php echo base_url('assets/upload/user/img/'.$a->nama_file)?>" class="user-image" alt="User Image">
              <?php } ?>
              <span class="hidden-xs"><?=$this->session->userdata('name')?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <?php foreach($avatar as $a){ ?>
                <img src="<?php echo base_url('assets/upload/user/img/'.$a->nama_file)?>" class="img-circle" alt="User Image">
                <?php } ?>

                <p>
                  <?=$this->session->userdata('name')?> - Welcome
                  <small>Last Login: <?=$this->session->userdata('last_login')?></small>
                </p>
              </li>
              <!-- Menu Body -->

              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?= base_url('admin/profile')?>" class="btn btn-default btn-flat"><i class="fa fa-cogs" aria-hidden="true"></i> Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?= base_url('admin/sigout')?>" class="btn btn-default btn-flat"><i class="fa fa-sign-out" aria-hidden="true"></i> Sign Out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->

  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <?php foreach($avatar as $a){ ?>
          <img src="<?php echo base_url('assets/upload/user/img/'.$a->nama_file)?>" class="img-circle" alt="User Image">
          <?php } ?>
        </div>
        <div class="pull-left info">
          <p><?=$this->session->userdata('name')?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->

      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="<?= base_url('admin')?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <!-- <i class="fa fa-angle-left pull-right"></i> -->
            </span>
          </a>
          <!-- <ul class="treeview-menu">
            <li><a href="<?php echo base_url()?>assets/web_admin/index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
            <li><a href="<?php echo base_url()?>assets/web_admin/index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
          </ul> -->
        </li>

        <li class="treeview active">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Forms</span>
            <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?= base_url('admin/form_barangmasuk')?>"><i class="fa fa-circle-o"></i> Tambah Data Barang Masuk</a></li>
            <li><a href="<?= base_url('admin/form_satuan')?>"><i class="fa fa-circle-o"></i> Tambah Satuan Barang</a></li>
          </ul>
        </li>
        <li class="treeview ">
          <a href="#">
            <i class="fa fa-table"></i> <span>Data Barang</span>
            <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url('admin/tabel_barangmasuk')?>"><i class="fa fa-circle-o"></i> Data Barang Masuk</a></li>
            <li><a href="<?= base_url('admin/tabel_barangkeluar')?>"><i class="fa fa-circle-o"></i> Data Barang Keluar</a></li>
            <li><a href="<?= base_url('admin/tabel_satuan')?>"><i class="fa fa-circle-o"></i> Data Satuan</a></li>
          </ul>
        </li>
        <li>
        <li class="header">LABELS</li>
        <li>
          <a href="<?php echo base_url('admin/profile')?>">
         <i class="fa fa-cogs" aria-hidden="true"></i> <span>Profile</span></a>
        </li>
        <li>
          <a href="<?php echo base_url('admin/users')?>">
         <i class="fa fa-fw fa-users" aria-hidden="true"></i> <span>Users</span></a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Input Data Barang Masuk
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Data Barang Masuk</li>
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
              <h3 class="box-title"><i class="fa fa-archive" aria-hidden="true"></i> Tambah Data Barang Masuk</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="container">
            <form action="<?=base_url('admin/proses_databarang_masuk_insert')?>" role="form" method="post">

              <?php if($this->session->flashdata('msg_berhasil')){ ?>
                <div class="alert alert-success alert-dismissible" style="width:91%">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Success!</strong><br> <?php echo $this->session->flashdata('msg_berhasil');?>
               </div>
              <?php } ?>

              <?php if(validation_errors()){ ?>
              <div class="alert alert-warning alert-dismissible">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong>Warning!</strong><br> <?php echo validation_errors(); ?>
             </div>
            <?php } ?>

              <div class="box-body">
                <div class="form-group">
                  <label for="id_transaksi" style="margin-left:220px;display:inline;">ID Transaksi</label>
                  <input type="text" name="id_transaksi" style="margin-left:37px;width:20%;display:inline;" class="form-control" readonly="readonly" value="WG-<?=date("Y");?><?=random_string('numeric', 8);?>">
                </div>
                <div class="form-group">
                  <label for="tanggal" style="margin-left:220px;display:inline;">Tanggal</label>
                  <input type="text" name="tanggal" style="margin-left:66px;width:20%;display:inline;" class="form-control form_datetime" placeholder="Klik Disini">
                </div>
                <div class="form-group" style="margin-bottom:40px;">
                  <label for="nama_barang" style="margin-left:220px;display:inline;">Divisi</label>
                  <select class="form-control" name="lokasi" style="margin-left:80px;width:20%;display:inline;">
                    <option value="">-- Pilih --</option>
                    <option value="Accounting">Accounting</option>
                    <option value="Administration">Administration</option>
                    <option value="Bayitabung-ffc">Bayi Tabung - FFC</option>
                    <option value="Diklat">Diklat</option>
                    <option value="Dokter">Dokter</option>
                    <option value="EDP-IT">EDP - IT</option>
                    <option value="Farmasi">Farmasi</option>
                    <option value="Finance">Finance</option>
                    <option value="Fisioterapi">Fisioterapi</option>
                    <option value="HRD">HRD</option>
                    <option value="IGD">IGD</option>
                    <option value="Kamar-Bayi">Kamar Bayi</option>
                    <option value="Lab">Laboratorium</option>
                    <option value="Lab-Cytogenetic">Lab - Cytogenetic</option>
                    <option value="Logistik">Logistik</option>
                    <option value="Marketing">Marketing</option>
                    <option value="Manajemen">Manajemen</option>
                    <option value="Medis-Penunjang">Medis - Penunjang</option>
                    <option value="MR">MR</option>
                    <option value="OK">OK</option>
                    <option value="PDCA">PDCA</option>
                    <option value="Perawatan-Lt.1">Perawatan - Lt. 1</option>
                    <option value="Perawatan-Lt.2">Perawatan - Lt. 2</option>
                    <option value="Perawatan-Lt.3">Perawatan - Lt. 3</option>
                    <option value="Poli-Anak">Poli - Anak</option>
                    <option value="Poli-Gigi">Poli - Gigi</option>
                    <option value="Poli-Obsgyn">Poli - Obsgyn</option>
                    <option value="Purchasing">Purchasing</option>
                    <option value="Radiologi">Radiologi</option>
                    <option value="Tax&Audit">Tax & Audit</option>
                    <option value="Umum">Umum</option>
                    <option value="VK">VK</option>
                    <option value="Others">Others</option>
                  </select>
                </div>
                <div class="form-group" style="display:inline-block;">
                  <label for="kode_barang" style="width:87%;margin-left: 12px;">No. Seri / Kode Barang</label>
                  <input type="text" name="kode_barang" style="width: 90%;margin-right: 67px;margin-left: 11px;" class="form-control" id="kode_barang" placeholder="Kode Barang">
                </div>
                <div class="form-group" style="display:inline-block;">
                  <label for="nama_Barang" style="width:73%;">Nama Barang</label>
                  <input type="text" name="nama_barang" style="width:90%;margin-right: 67px;" class="form-control" id="nama_Barang" placeholder="Nama Barang">
              </div>
                <div class="form-group" style="display:inline-block;">
                  <label for="satuan" style="width:73%;">Satuan</label>
                  <select class="form-control" name="satuan" style="width:110%;margin-right: 18px;">
                    <option value="" selected="">-- Pilih --</option>
                    <?php foreach($list_satuan as $s){ ?>
                    <option value="<?=$s->kode_satuan?>"><?=$s->nama_satuan?></option>
                    <?php } ?>
                  </select>
              </div>
              <div class="form-group" style="display:inline-block;">
                <label for="jumlah" style="width:73%;margin-left:33px;">Jumlah</label>
                <input type="number" name="jumlah" style="width:41%;margin-left:34px;margin-right:67px;" class="form-control" id="jumlah">
            </div>
            <div class="form-group" style="display:inline-block;">
              <button type="reset" class="btn btn-basic" name="btn_reset" style="width:95px;margin-left:-70px;"><i class="fa fa-eraser" aria-hidden="true"></i> Reset</button>
						</div>
              <!-- /.box-body -->
              <div class="box-footer" style="width:93%;">
                <a type="button" class="btn btn-default" style="width:10%;margin-right:26%" onclick="history.back(-1)" name="btn_kembali"><i class="fa fa-arrow-left" aria-hidden="true"></i> Kembali</a>
                <a type="button" class="btn btn-info" style="width:14%;margin-right:29%" href="<?=base_url('admin/tabel_barangmasuk')?>" name="btn_listbarang"><i class="fa fa-table" aria-hidden="true"></i> Lihat List Barang</a>
                <button type="submit" style="width:20%" class="btn btn-success"><i class="fa fa-check" aria-hidden="true"></i> Submit</button>
              </div>
            </form>
          </div>
          </div>
          <!-- /.box -->

          <!-- Form Element sizes -->

          <!-- /.box -->


          <!-- /.box -->

          <!-- Input addon -->

          <!-- /.box -->

        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <!-- <div class="col-md-6">
          <!-- Horizontal Form -->

          <!-- /.box -->
          <!-- general form elements disabled -->

          <!-- /.box -->

        </div>
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0.1
    </div>
    <strong>Copyright &copy; All Right Reserved <?=date('Y')?></strong>
  </footer>

  <!-- jQuery 3 -->
  <script src="<?php echo base_url()?>assets/web_admin/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="<?php echo base_url()?>assets/web_admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- FastClick -->
  <script src="<?php echo base_url()?>assets/web_admin/bower_components/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url()?>assets/web_admin/dist/js/adminlte.min.js"></script>
  <script src="<?php echo base_url()?>assets/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?php echo base_url()?>assets/web_admin/dist/js/demo.js"></script>

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
