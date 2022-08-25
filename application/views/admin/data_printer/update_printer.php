<!DOCTYPE html>
<html lang="en">

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
                            <h1>Update Data Printer</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Data Printer</li>
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
                                    <h3 class="card-title"><i class="fa fa-archive" aria-hidden="true"></i> Input Data
                                        Printer</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form class="form-horizontal" action="<?=base_url('admin/proses_printer_update')?>"
                                    role="form" method="post">

                                    <?php if(validation_errors()){ ?>
                                    <div class="alert alert-warning alert-dismissible">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <strong>Warning!</strong><br> <?= validation_errors(); ?>
                                    </div>
                                    <?php } ?>

                                    <div class="card-body">
                                        <div class="form-group row">
                                            <?php foreach($data_printer as $dp){ ?>
                                            <input type="hidden" name="id_printer" value="<?=$dp->id_printer?>">
                                            <label for="tgl_input" class="col-sm-2 col-form-label" style="text-align:right">Tanggal Input</label>
                                            <div class="col-sm-10">
                                                <input type="date" name="tgl_input" class="form-control" id="tgl_input"
                                                    placeholder="Tanggal Input" value="<?=$dp->tgl_input?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="kategori" class="col-sm-2 col-form-label" style="text-align:right">Kategori</label>
                                            <div class="col-sm-10">
                                                <select class="custom-select" name="kategori" id="kategori">
													<option value="<?=$dp->kategori?>"><?=$dp->kategori?></option>
                                                    <option value="Printer">Printer</option>
                                                    <option value="Scan">Scan</option>
                                                    <option value="Calc">Calc</option>
                                                    <option value="Fotocopy">Fotocopy</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="merk" class="col-sm-2 col-form-label" style="text-align:right">Merk</label>
                                            <div class="col-sm-10">
                                                <input merk="text" name="merk" class="form-control" id="merk"
                                                    placeholder="Merk" value="<?=$dp->merk?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="type" class="col-sm-2 col-form-label" style="text-align:right">Type</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="type" class="form-control" id="type"
                                                    placeholder="Type" value="<?=$dp->type?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="serial_number" class="col-sm-2 col-form-label" style="text-align:right">Serial
                                                Number</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="serial_number" class="form-control"
                                                    id="serial_number" placeholder="Serial Number"
                                                    value="<?=$dp->serial_number?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="qty_out" class="col-sm-2 col-form-label" style="text-align:right">Qty Out</label>
                                            <div class="col-sm-10">
                                                <input type="number" name="qty_out" class="form-control" id="qty_out"
                                                    placeholder="Qty Out" value="<?=$dp->qty_out?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="capacity" class="col-sm-2 col-form-label" style="text-align:right">Capacity (VA)</label>
                                            <div class="col-sm-10">
                                                <input type="number" name="capacity" class="form-control" id="capacity"
                                                    placeholder="Capacity" value="<?=$dp->capacity?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="kondisi" class="col-sm-2 col-form-label" style="text-align:right">Kondisi</label>
                                            <div class="col-sm-10">
                                                <select class="custom-select" name="kondisi" id="kondisi">
													<option value="<?=$dp->kondisi?>"><?=$dp->kondisi?></option>
													<option value="Baru">Baru</option>
													<option value="Baik">Baik</option>
                                                    <option value="Rusak">Rusak</option>
													<option value="Kurang">Kurang</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="status" class="col-sm-2 col-form-label" style="text-align:right">Status</label>
                                            <div class="col-sm-10">
                                                <select class="custom-select" name="status" id="status">
													<option value="<?=$dp->status?>"><?=$dp->status?></option>
                                                    <option value="Aktif">Aktif</option>
                                                    <option value="Tidak">Tidak</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="keterangan" class="col-sm-2 col-form-label" style="text-align:right">Keterangan</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="keterangan" class="form-control"
                                                    id="keterangan" placeholder="Keterangan"
                                                    value="<?=$dp->keterangan?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="warna" class="col-sm-2 col-form-label" style="text-align:right">Warna</label>
                                            <div class="col-sm-10">
                                                <select class="custom-select" name="warna" id="warna">
													<option value="<?=$dp->warna?>"><?=$dp->warna?></option>
                                                    <option value="Hitam">Hitam</option>
                                                    <option value="Putih">Putih</option>
                                                    <option value="Krem">Krem</option>
                                                    <option value="Abu-abu">Abu-abu</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="pengguna" class="col-sm-2 col-form-label"style="text-align:right">Pengguna</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="pengguna" class="form-control" id="pengguna"
                                                    placeholder="Pengguna" value="<?=$dp->pengguna?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="lokasi" class="col-sm-2 col-form-label" style="text-align:right">Lokasi</label>
                                            <div class="col-sm-10">
                                                <select class="custom-select" name="lokasi" id="lokasi">
													<option value="<?=$dp->lokasi?>"><?=$dp->lokasi?></option>
                                                    <option value="Lobby">Lobby</option>
                                                    <option value="Lantai 1">Lantai 1</option>
                                                    <option value="Lantai 2">Lantai 2</option>
                                                    <option value="Lantai 3">Lantai 3</option>
                                                    <option value="Lantai 5">Lantai 5</option>
                                                    <option value="Ruko">Ruko</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="qty" class="col-sm-2 col-form-label" style="text-align:right">Qty</label>
                                            <div class="col-sm-10">
                                                <input type="number" name="qty" class="form-control" id="qty"
                                                    placeholder="Qty" value="<?=$dp->qty?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="backup" class="col-sm-2 col-form-label" style="text-align:right">Back Up</label>
                                            <div class="col-sm-10">
                                                <select class="custom-select" name="backup" id="backup">
													<option value="<?=$dp->backup?>"><?=$dp->backup?></option>
                                                    <option value="Ya">Ya</option>
                                                    <option value="Tidak">Tidak</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="kepemilikan" class="col-sm-2 col-form-label" style="text-align:right">Kepemilikan</label>
                                            <div class="col-sm-10">
                                                <select class="custom-select" name="kepemilikan" id="kepemilikan">
													<option value="<?=$dp->kepemilikan?>"><?=$dp->kepemilikan?></option>
                                                    <option value="RSIA Family">RSIA Family</option>
                                                    <option value="Vendor">Vendor</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="posisi_skg" class="col-sm-2 col-form-label" style="text-align:right">Terakhir di Simpan</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="posisi_skg" class="form-control"
                                                    id="posisi_skg" placeholder="Terakhir di Simpan"
                                                    value="<?=$dp->posisi_skg?>">
                                            </div>
                                        </div>
                                        <?php } ?>

                                        <!-- /.card-body -->
                                        <div class="card-footer">
                                            <a type="submit" class="btn btn-warning" onclick="history.back(-1)"
                                                name="btn_kembali"><i class="far fa-arrow-alt-circle-left"></i>
                                                Kembali</a>
                                            <button type="submit" class="btn btn-success"><i class="far fa-save"></i>
                                                Simpan</button>
                                            <a type="submit" class="btn btn-primary center-block"
                                                href="<?=base_url('admin/tabel_printer')?>" name="btn_listprinter"><i
                                                    class="fa fa-table" aria-hidden="true"></i> List Data Printer</a>
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
        </body>
</html>