<!DOCTYPE html>
<html>
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
        Data Barang Keluar
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=base_url('admin')?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Tables</li>
        <li class="active"><a href="<?=base_url('admin/tabel_barangkeluar')?>">Data Barang Keluar</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <!-- /.box -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><i class="fa fa-table" aria-hidden="true"></i> Stock Barang Keluar</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              <?php if($this->session->flashdata('msg_berhasil')){ ?>
                <div class="alert alert-success alert-dismissible" style="width:100%">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Success!</strong><br> <?php echo $this->session->flashdata('msg_berhasil');?>
               </div>
              <?php } ?>

              <a href="<?=base_url('admin/tabel_barangmasuk')?>" style="margin-bottom:10px;" type="button" class="btn btn-primary" name="tambah_data"><i class="fa fa-plus-circle" aria-hidden="true"></i> Tambah Data Keluar</a>
              <!-- <a href="<?=base_url('report/barangKeluarManual')?>" style="margin-bottom:10px;" type="button" class="btn btn-danger" name="laporan_data"><i class="fa fa-file-text" aria-hidden="true"></i> Invoice Manual</a> -->
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="5%"><center>No</th>
                  <!-- <th>ID Transaksi</th> -->
                  <th width="8%"><center>Tgl Masuk</th>
                  <th width="8%"><center>Tgl Keluar</th>
                  <th width="15%"><center>Divisi</th>
                  <th width="15%"><center>No. Seri / Kode Barang</th>
                  <th width="20%"><center>Nama Barang</th>
                  <!-- <th>Satuan</th> -->
									<th width="5%"><center>Jumlah</th>
									<th width="20%"><center>Unit Order</th>
                  <!-- <th>Invoice</th> -->
                  <!-- <th></th> -->
                </tr>
                </thead>
                <tbody>
                <tr>
                  <?php if(is_array($list_data)){ ?>
                  <?php $no = 1;?>
                  <?php foreach($list_data as $dd): ?>
                    <td width="5%"><center><?=$no?></td>
                    <!-- <td><?=$dd->id_transaksi?></td> -->
                    <td width="8%"><center><?=$dd->tanggal_masuk?></td>
                    <td width="8%"><center><?=$dd->tanggal_keluar?></td>
                    <td width="15%"><center><?=$dd->lokasi?></td>
                    <td width="15%"><center><?=$dd->kode_barang?></td>
										<td width="20%"><?=$dd->nama_barang?></td>
                    <!-- <td><?=$dd->satuan?></td> -->
										<td width="5%"><center><?=$dd->jumlah?></td>
										<td width="20%"><?=$dd->unit_order?></td>
                    <!-- <td><a type="button" class="btn btn-danger btn-report"  href="<?=base_url('report/barangKeluar/'.$dd->id_transaksi.'/'.$dd->tanggal_keluar)?>" name="btn_report" style="margin:auto;"><i class="fa fa-file-text" aria-hidden="true"></i></a></td> -->
                </tr>
              <?php $no++; ?>
              <?php endforeach;?>
              <?php }else { ?>
                    <td colspan="7" align="center"><strong>Data Kosong</strong></td>
              <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>

        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php $this->load->view("admin/_layouts/footer.php") ?>
	<script src="<?php echo base_url()?>assets/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
<!-- page script -->
<script>
jQuery(document).ready(function($){
      $('.btn-delete').on('click',function(){
          var getLink = $(this).attr('href');
          swal({
                  title: 'Delete Data',
                  text: 'Yakin Ingin Menghapus Data ?',
                  html: true,
                  confirmButtonColor: '#d9534f',
                  showCancelButton: true,
                  },function(){
                  window.location.href = getLink
              });
          return false;
      });
  });

  $(function () {
    $('#example1').DataTable();
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  });
</script>
</body>
</html>
