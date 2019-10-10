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
        Tambah Barang Keluar
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?=base_url('admin/tabel_barangmasuk')?>">Data Barang</a></li>
        <li class="active">Tambah Barang Keluar</li>
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
              <h3 class="box-title"><i class="fa fa-archive" aria-hidden="true"></i> Tambah Barang Keluar</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="container">
            <form action="<?=base_url('admin/proses_data_keluar')?>" role="form" method="post">

              <?php if(validation_errors()){ ?>
              <div class="alert alert-warning alert-dismissible">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong>Warning!</strong><br> <?= validation_errors(); ?>
             </div>
            <?php } ?>

              <div class="box-body">
                <div class="form-group">
                  <?php foreach($list_data as $d){ ?>
                  <label for="id_transaksi" style="margin-left:220px;display:inline;">ID Transaksi</label>
                  <input type="text" name="id_transaksi" style="margin-left:80px;width:20%;display:inline;" class="form-control" readonly="readonly" value="<?=$d->id_transaksi?>">
                </div>
                <div class="form-group">
                  <label for="tanggal" style="margin-left:220px;display:inline;">Tanggal Masuk</label>
                  <input type="text" name="tanggal" style="margin-left:66px;width:20%;display:inline;" class="form-control" readonly="readonly" value="<?=$d->tanggal?>">
                </div>
                <div class="form-group">
                  <label for="tanggal_keluar" style="margin-left:220px;display:inline;">Tanggal Keluar</label>
                  <input type="text" name="tanggal_keluar" style="margin-left:66px;width:20%;display:inline;" class="form-control form_datetime" required="" placeholder="Klik Disini">
                </div>
                <div class="form-group" style="margin-bottom:40px;">
                  <label for="divisi" style="margin-left:220px;display:inline;">Divisi</label>
                  <input type="text" name="divisi" style="margin-left:122px;width:20%;display:inline;" class="form-control" readonly="readonly" value="<?=$d->divisi?>">
                </div>
                <div class="form-group" style="display:inline-block;">
                  <label for="kode_barang" style="width:73%;margin-left: 10px;">No. Seri / Kode Barang</label>
                  <input type="text" name="kode_barang" readonly="readonly" style="width: 80%;margin-left: 10px;" class="form-control" id="kode_barang" value="<?=$d->kode_barang?>">
                </div>
                <div class="form-group" style="display:inline-block;">
                  <label for="nama_Barang" style="width:73%;">Nama Barang</label>
                  <input type="text" name="nama_barang" readonly="readonly" style="width:80%;margin-right: 60px;" class="form-control" id="nama_Barang" value="<?=$d->nama_barang?>">
							</div>
							<div class="form-group" style="display:inline-block;">
                  <label for="divisi" style="width:73%;">Unit Order</label>
                  <select class="form-control" name="divisi" style="width:80%;display:inline;">
									<option value="" selected="">-- Pilih --</option>
                    <?php foreach($list_divisi as $ld){ ?>
                    <option value="<?=$ld->kode_divisi?>"><?=$ld->nama_divisi?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="form-group" style="display:inline-block;">
                  <label for="satuan" style="width:73%;">Satuan</label>
                  <select class="form-control" name="satuan" style="width:100%;margin-right: 5px;">
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
                <input type="number" name="jumlah" style="width:41%;margin-left:34px;margin-right:18px;" class="form-control" id="jumlah" max="<?=$d->jumlah?>" value="<?=$d->jumlah?>">
            </div>
						<?php } ?>
              <!-- /.box-body -->

              <div class="box-footer" style="width:93%;">
                <a type="button" class="btn btn-default" style="width:10%" onclick="history.back(-1)" name="btn_kembali"><i class="fa fa-arrow-left" aria-hidden="true"></i> Kembali</a>
                <button type="submit" style="width:20%;margin-left:689px;" class="btn btn-success"><i class="fa fa-check" aria-hidden="true"></i> Submit</button>&nbsp;&nbsp;&nbsp;
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
	<script src="<?= base_url()?>assets/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
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
