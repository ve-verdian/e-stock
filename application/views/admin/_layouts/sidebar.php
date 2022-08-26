<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="<?=base_url('admin')?>" class="brand-link">
    <!-- <img src="<?= base_url(); ?>assets/dist/img/inventory.png" alt="AdminLTE Logo"
      class="brand-image img-circle elevation-3" style="opacity: .8"> -->
    <span class="brand-text font-weight-light" style="font-family: 'Fredoka One', cursive;"><center>INVENTORY</center></span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <!-- <li class="nav-item has-treeview menu-open">
          <a href="<?=base_url('admin')?>" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"> Dashboard</i>
          </a>
        </li> -->
        <li class="nav-header" style="font-family: 'Fredoka One', cursive;">MENU</li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fa fa-edit"></i>
            <p style="font-family: 'Be Vietnam', sans-serif;">Master Data
              <i class="fas fa-caret-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url('admin/form_barangmasuk')?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Input Data Barang Masuk</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('admin/form_satuan')?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Input Data Satuan</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('admin/divisi')?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Input Data Divisi</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('admin/data_pc')?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Input Data Komputer</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('admin/data_printer')?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Input Data Printer</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fa fa-list-ul"></i>
            <p style="font-family: 'Be Vietnam', sans-serif;">List Data
              <i class="fas fa-caret-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url('admin/tabel_barangmasuk') ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Barang Masuk</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('admin/tabel_barangkeluar')?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Barang Keluar</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('admin/tabel_satuan')?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Satuan</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('admin/tabel_divisi')?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Divisi</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('admin/tabel_pc')?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Komputer</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('admin/tabel_printer')?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Printer</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-file-upload"></i>
            <p style="font-family: 'Be Vietnam', sans-serif;">Berkas
              <i class="fas fa-caret-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url('upload') ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Lampirkan File</p>
              </a>
            </li>
					</ul>
        <li class="nav-header" style="font-family: 'Fredoka One', cursive;">SETTING</li>
        <li class="nav-item">
          <a href="<?= base_url('admin/profile')?>" class="nav-link">
            <i class="nav-icon fa fa-cogs"></i>
            <p style="font-family: 'Be Vietnam', sans-serif;">Profile</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('admin/users')?>" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p style="font-family: 'Be Vietnam', sans-serif;">Users</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('admin/signout'); ?>" class="nav-link">
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p style="font-family: 'Be Vietnam', sans-serif;">Sign Out</p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>

  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <?php foreach($avatar as $a){ ?>
          <img src="<?= base_url('assets/upload/user/img/'.$a->nama_file)?>" class="img-circle" alt="User Image">
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
        <li class="header">MENU</li>

        <li class="treeview active">
          <!-- <a href="<?= base_url('admin')?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container"></span>
          </a> -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Master Data</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url('admin/form_barangmasuk')?>"><i class="fa fa-dot-circle-o "></i> Tambah Data Barang Masuk</a></li>
            <li><a href="<?= base_url('admin/form_satuan')?>"><i class="fa fa-dot-circle-o "></i> Tambah Satuan Barang</a></li>
						<li><a href="<?= base_url('admin/divisi')?>"><i class="fa fa-dot-circle-o "></i> Tambah Data Divisi</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-list-ul"></i> <span>List Data</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url('admin/tabel_barangmasuk') ?>"><i class="fa fa-dot-circle-o "></i> Data Barang Masuk</a></li>
            <li><a href="<?= base_url('admin/tabel_barangkeluar')?>"><i class="fa fa-dot-circle-o "></i> Data Barang Keluar</a></li>
            <li><a href="<?= base_url('admin/tabel_satuan')?>"><i class="fa fa-dot-circle-o "></i> Data Satuan</a></li>
						<li><a href="<?= base_url('admin/tabel_divisi')?>"><i class="fa fa-dot-circle-o "></i> Data Divisi</a></li>
          </ul>
					<!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-file-text-o"></i> <span>Laporan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url('admin/lap_barangmasuk') ?>"><i class="fa fa-dot-circle-o "></i> Laporan Barang Masuk</a></li>
            <li><a href="<?= base_url('admin/lap_barangkeluar')?>"><i class="fa fa-dot-circle-o "></i> Laporan Barang Keluar</a></li>
            <li><a href="<?= base_url('admin/lap_satuan')?>"><i class="fa fa-dot-circle-o "></i> Laporan Master Satuan</a></li>
						<li><a href="<?= base_url('admin/lap_divisi')?>"><i class="fa fa-dot-circle-o "></i> Laporan Data Divisi</a></li>
          </ul> -->
        <li class="header">SETTING</li>
        <li>
          <a href="<?= base_url('admin/profile')?>">
         <i class="fa fa-cogs" aria-hidden="true"></i> <span>Profile</span></a>
        </li>
        <li>
          <a href="<?= base_url('admin/users')?>">
         <i class="fa fa-fw fa-users" aria-hidden="true"></i> <span>Users</span></a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

