<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>DATA KOMPUTER</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">

<style>
   body {
     background-color: #f9f9fa
 }

 .flex {
     -webkit-box-flex: 1;
     -ms-flex: 1 1 auto;
     flex: 1 1 auto
 }

 @media (max-width:991.98px) {
     .padding {
         padding: 1.5rem
     }
 }

 @media (max-width:767.98px) {
     .padding {
         padding: 1rem
     }
 }

 .padding {
     padding: 5rem
 }

 .card {
     box-shadow: none;
     -webkit-box-shadow: none;
     -moz-box-shadow: none;
     -ms-box-shadow: none
 }

 .pl-3,
 .px-3 {
     padding-left: 1rem !important
 }

 .card {
     position: relative;
     display: flex;
     flex-direction: column;
     min-width: 0;
     word-wrap: break-word;
     background-color: #fff;
     background-clip: border-box;
     border: 1px solid #d2d2dc;
     border-radius: 0
 }
 
 .card .card-title {
    color: #000000;
    margin-bottom: 0.625rem;
    text-transform: capitalize;
    font-size: 0.875rem;
    font-weight: 500;
}

.card .card-description {
    margin-bottom: .875rem;
    font-weight: 400;
    color: #76838f;
}

p {
    font-size: 0.875rem;
    margin-bottom: .5rem;
    line-height: 1.5rem;
}

.table-responsive {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar;
}

.table, .jsgrid .jsgrid-table {
    width: 100%;
    max-width: 100%;
    margin-bottom: 1rem;
    background-color: transparent;
}

.table thead th, .jsgrid .jsgrid-table thead th {
    border-top: 0;
    border-bottom-width: 1px;
    font-weight: 500;
    font-size: .875rem;
    text-transform: uppercase;
}

.table td, .jsgrid .jsgrid-table td {
    font-size: 0.875rem;
    padding: .875rem 0.9375rem;
}

.badge {
    border-radius: 0;
    font-size: 12px;
    line-height: 1;
    padding: .375rem .5625rem;
    font-weight: normal;
}
 
</style>
<div class="page-content page-container" id="page-content">
  <div class="padding">
    <!-- <div class="row container d-flex justify-content-center"> -->

<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
      <div class="card-body shadow">
                <div class="card-header">
                  <h3><b>Laporan Datang Barang Masuk</b></h3>
                </div>
                  <div class="table-responsive">
                  <table id="example1" class="table table-responsive table-bordered table-striped">
                <thead>
                <tr>
                <th width="5%">
                  <center>No
                </th>
                <!-- <th>ID_Transaksi</th> -->
                <th width="5%">
                  <center>Tanggal
                </th>
                <th width="15%">
                  <center>Divisi
                </th>
                <th width="15%">
                  <center>No. Seri / Kode Barang
                </th>
                <th width="20%">
                  <center>Nama Barang
                </th>
                <th width="5%">
                  <center>Satuan
                </th>
                <th width="5%">
                  <center>Jumlah
                </th>                                                        
                </tr>
                </thead>
                <tbody>
                <tr>
								<?php if(is_array($list_data)){ ?>
                <?php $no = 1;?>
                <?php foreach($list_data as $dd): ?>
                <td><?=$no?></td>
                <!-- <td><?=$dd->id_transaksi?></td> -->
                <td><?=$dd->tanggal?></td>
                <td><?=$dd->divisi?></td>
                <td><?=$dd->kode_barang?></td>
                <td><?=$dd->nama_barang?></td>
                <td><?=$dd->satuan?></td>
                <td><?=$dd->jumlah?></td>
                </tr>
                <?php $no++; ?>
                <?php endforeach;?>
                <?php }else { ?>
                <td colspan="7" align="center"><strong>Data Kosong</strong></td>
                <?php } ?>
                </tbody>
              </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <script href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js" rel="stylesheet"></script>
      <script href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" rel="stylesheet"></script>

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
              </script>

              <script>
              $(function () {
                $("#example1").DataTable();
                $('#example2').DataTable({
                  "paging": true,
                  "lengthChange": false,
                  "searching": false,
                  "ordering": true,
                  "info": true,
                  "autoWidth": false,
                })
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