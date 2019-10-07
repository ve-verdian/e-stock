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
        Update Data Barang Masuk
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
              <h3 class="box-title"><i class="fa fa-archive" aria-hidden="true"></i> Update Data Barang Masuk</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="container">
            <form action="<?=base_url('admin/proses_databarang_masuk_update')?>" role="form" method="post">

              <?php if(validation_errors()){ ?>
              <div class="alert alert-warning alert-dismissible">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong>Warning!</strong><br> <?php echo validation_errors(); ?>
             </div>
            <?php } ?>

              <div class="box-body">
                <div class="form-group">
                  <?php foreach($data_barang_update as $d){ ?>
                  <label for="id_transaksi" style="margin-left:220px;display:inline;">ID Transaksi</label>
                  <input type="text" name="id_transaksi" style="margin-left:37px;width:20%;display:inline;" class="form-control" readonly="readonly" value="<?=$d->id_transaksi?>">
                </div>
                <div class="form-group">
                  <label for="tanggal" style="margin-left:220px;display:inline;">Tanggal</label>
                  <input type="text" name="tanggal" style="margin-left:66px;width:20%;display:inline;" class="form-control" readonly="readonly" value="<?=$d->tanggal?>">
                </div>
                <div class="form-group" style="margin-bottom:40px;">
                  <label for="nama_barang" style="margin-left:220px;display:inline;">Divisi</label>
                  <select class="form-control" name="lokasi" style="margin-left:80px;width:20%;display:inline;">
                    <option value="<?=$d->lokasi?>"><?=$d->lokasi?></option>
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
                  <input type="text" name="kode_barang" required style="width: 90%;margin-right: 67px;margin-left: 11px;" class="form-control" id="kode_barang" value="<?=$d->kode_barang?>">
                </div>
                <div class="form-group" style="display:inline-block;">
                  <label for="nama_Barang" style="width:73%;">Nama Barang</label>
                  <input type="text" name="nama_barang" required style="width:90%;margin-right: 67px;" class="form-control" id="nama_Barang" value="<?=$d->nama_barang?>">
              </div>
                <div class="form-group" style="display:inline-block;">
                  <label for="satuan" style="width:73%;">Satuan</label>
                  <select class="form-control" name="satuan" style="width:110%;margin-right: 18px;">
                    <?php foreach($list_satuan as $s){?>
                      <?php if($d->satuan == $s->nama_satuan){?>
                    <option value="<?=$d->satuan?>" selected=""><?=$d->satuan?></option>
                    <?php }else{?>
                    <option value="<?=$s->kode_satuan?>"><?=$s->nama_satuan?></option>
                      <?php } ?>
                      <?php } ?>
                  </select>
              </div>
              <div class="form-group" style="display:inline-block;">
                <label for="jumlah" style="width:73%;margin-left:33px;">Jumlah</label>
                <input type="number" name="jumlah" style="width:41%;margin-left:34px;margin-right:67px;" class="form-control" id="jumlah" value="<?=$d->jumlah?>">
            </div>
            <?php } ?>
              <!-- /.box-body -->
              <div class="box-footer" style="width:93%;">
                <a type="button" class="btn btn-default" style="width:10%" onclick="history.back(-1)" name="btn_kembali"><i class="fa fa-arrow-left" aria-hidden="true"></i> Kembali</a>
                <button type="submit" style="width:20%;margin-left:689px;" class="btn btn-primary"><i class="fa fa-check" aria-hidden="true"></i> Submit</button>&nbsp;&nbsp;&nbsp;
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
