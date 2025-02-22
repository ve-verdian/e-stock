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
              <h1>Profile</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?=base_url('admin')?>">Home</a></li>
                <li class="breadcrumb-item active">User Profile</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-3">

              <!-- Profile Image -->
              <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                  <div class="text-center">
                    <?php foreach($avatar as $a){ ?>
                    <img class="profile-user-img img-fluid img-circle"
                      src="<?= base_url()?>assets/upload/user/img/<?= $a->nama_file?>" alt="User profile picture">
                  </div>
                  <?php } ?>
                  <h3 class="profile-username text-center"><?=$this->session->userdata('name')?></h3>

                  <p class="text-muted text-center">EDP / IT</p>

                  <?php if($this->session->flashdata('msg_berhasil_gambar')){ ?>
                  <div class="alert alert-success alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Success</strong><br> <?= $this->session->flashdata('msg_berhasil_gambar');?>
                  </div>
                  <?php } ?>

                  <?php if($this->session->flashdata('msg_error_gambar')){ ?>
                  <div class="alert alert-danger alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Warning !</strong><br> <?= $this->session->flashdata('msg_error_gambar');?>
                  </div>
                  <?php } ?>

                  <?php if(isset($pesan_error)){ ?>
                  <div class="alert alert-danger alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Warning!</strong><br> <?= $pesan; ?>
                  </div>
                  <?php } ?>

                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
              <div class="card">
                <div class="card-header p-2">
                  <ul class="nav nav-pills">
                    <li class="nav-item"><a class="nav-link active" href="#setting" data-toggle="tab">Ubah Password</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#picture" data-toggle="tab">Ubah Gambar</a></li>
                  </ul>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <div class="tab-content">
                    <!-- /.tab-pane -->
                    <div class="active tab-pane" id="setting">
                      <form class="form-horizontal">
                        <div class="form-group row">
                          <label for="username" class="col-sm-2 col-form-label">Username</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="username" disabled=""
                              value="<?= $this->session->userdata('name')?>">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="email" class="col-sm-2 col-form-label">Email</label>
                          <div class="col-sm-10">
                            <input type="email" class="form-control" id="email"
                              value="<?=$this->session->userdata('email')?>">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="new_password" class="col-sm-2 col-form-label">New Password</label>
                          <div class="col-sm-10">
														<input type="password" class="form-control" id="new_password" placeholder="New Password">
														<?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="confrim_new_password" class="col-sm-2 col-form-label">Confirm New Password</label>
                          <div class="col-sm-10">
                            <input type="password" class="form-control" id="confirm_new_password"
															placeholder="Confirm New Password">
															<?= form_error('confirm_new_password', '<small class="text-danger pl-3">', '</small>') ?>
                          </div>
                        </div>
                        <!-- <?php if(isset($token_generate)){ ?>
                    		<input type="hidden" name="token"  class="form-control" value="<?= $token_generate?>">
                  			<?php }else {
                    			redirect(base_url('admin/profile'));
                  		}?> -->
                        <div class="form-group">
                          <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-success"><i class="far fa-save"></i> Save</button>
                          </div>
                        </div>
                      </form>
                    </div>
                    <div class="tab-pane" id="picture">
                      <form class="form-horizontal" action="<?=base_url('admin/proses_gambar_upload')?>" method="post"
                        enctype="multipart/form-data">
                        <div class="form-group row">
                          <label for="username" class="col-sm-2 col-form-label">Open Picture</label>
                          <div class="col-sm-10">
                            <input type="file" class="form-control" id="username" name="userpicture">
                          </div>
                        </div>
                        <!-- <?php if(isset($token_generate)){ ?>
                    		<input type="hidden" name="token"  class="form-control" value="<?= $token_generate?>">
                  		<?php }else {
                    		redirect(base_url('admin/profile'));
                  		}?> -->
                        <div class="form-group">
                          <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-success"><i class="far fa-save"></i> Save</button>
                          </div>
                        </div>
                      </form>
                    </div>
                    <!-- /.tab-pane -->
                  </div>
                  <!-- /.tab-content -->
                </div><!-- /.card-body -->
              </div>
              <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <?php $this->load->view("admin/_layouts/footer.php") ?>
    </body>
</html>

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
        User Profile
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=base_url('admin')?>"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="<?=base_url('admin/profile')?>" class="active">Profile</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <?php foreach($avatar as $a){ ?>
              <img class="profile-user-img img-responsive img-circle" src="<?= base_url()?>assets/upload/user/img/<?= $a->nama_file?>" alt="User profile picture">
              <?php } ?>
              <h3 class="profile-username text-center"><?=$this->session->userdata('name')?></h3>

              <p class="text-muted text-center">Staff EDP</p><br>

              <?php if($this->session->flashdata('msg_berhasil_gambar')){ ?>
                <div class="alert alert-success alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Success</strong><br> <?= $this->session->flashdata('msg_berhasil_gambar');?>
               </div>
              <?php } ?>

              <?php if($this->session->flashdata('msg_error_gambar')){ ?>
                <div class="alert alert-danger alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Warning !</strong><br> <?= $this->session->flashdata('msg_error_gambar');?>
               </div>
              <?php } ?>

              <?php if(isset($pesan_error)){ ?>
              <div class="alert alert-danger alert-dismissible">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong>Warning!</strong><br> <?= $pesan; ?>
             </div>
            <?php } ?>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->

          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#settings" data-toggle="tab">Change Password</a></li>
              <li><a href="#picture" data-toggle="tab">Change Picture</a></li>
            </ul>
            <div class="tab-content">

              <!-- /.tab-pane -->

              <!-- /.tab-pane -->

              <div class="tab-pane" id="picture">
                <form class="form-horizontal" action="<?=base_url('admin/proses_gambar_upload')?>" method="post" enctype="multipart/form-data">

                  <div class="form-group">
                    <label for="username" class="col-sm-2 control-label">Open Picture</label>

                    <div class="col-sm-10">
                      <input type="file" name="userpicture" class="form-control" id="username">
                    </div>
                  </div>
                  <?php if(isset($token_generate)){ ?>
                    <input type="hidden" name="token"  class="form-control" value="<?= $token_generate?>">
                  <?php }else {
                    redirect(base_url('admin/profile'));
                  }?>

                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-success"><i class="fa fa-send" aria-hidden="true"></i>&nbsp;Submit</button>
                    </div>
                  </div>
                </form>
              </div>

              <div class="tab-pane active" id="settings">
                <form class="form-horizontal" action="<?=base_url('admin/proses_new_password')?>" method="post">

                  <?php if($this->session->flashdata('msg_berhasil')){ ?>
                    <div class="alert alert-success alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Success</strong><br> <?= $this->session->flashdata('msg_berhasil');?>
                   </div>
                  <?php } ?>

                  <?php if(validation_errors()){ ?>
                  <div class="alert alert-warning alert-dismissible">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      <strong>Warning!</strong><br> <?= validation_errors(); ?>
                 </div>
                <?php } ?>

                  <div class="form-group">
                    <label for="username" class="col-sm-2 control-label">Username</label>

                    <div class="col-sm-10">
                      <input type="text" name="username" class="form-control" id="username" disabled="" value="<?= $this->session->userdata('name')?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">
                      <input type="email" name="email" class="form-control" id="email" value="<?=$this->session->userdata('email')?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="new_password" class="col-sm-2 control-label">New Password</label>

                    <div class="col-sm-10">
                      <input type="password" name="new_password" class="form-control" id="new_password" placeholder="New Password">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="confirm_new_password" class="col-sm-2 control-label">Confirm New Password</label>

                    <div class="col-sm-10">
                      <input type="password" name="confirm_new_password" class="form-control" id="confirm_new_password" placeholder="Confirm New Password">
                    </div>
                  </div>
                  <?php if(isset($token_generate)){ ?>
                    <input type="hidden" name="token"  class="form-control" value="<?= $token_generate?>">
                  <?php }else {
                    redirect(base_url('admin/profile'));
                  }?>

                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-success"><i class="fa fa-send" aria-hidden="true"></i>&nbsp;Submit</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <?php $this->load->view("admin/_layouts/footer.php") ?>
