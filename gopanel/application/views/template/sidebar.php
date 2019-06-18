  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('gambar/logo.png')?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata("username"); ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form --><!--
      <form action="#" method="get" class="sidebar-form">
	  
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>-->
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
		<li class="header">STORE</li>
    <li class="treeview dashboard">
          <a href="<?php echo site_url('dashboard'); ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                
          </a>
        </li>
		<li class="treeview order">
          <a href="<?php echo site_url('order'); ?>">
            <i class="fa fa-shopping-cart"></i> <span>Order</span>
                
          </a>
        </li>
		<li class="treeview barang">
          <a href="<?php echo site_url('barang'); ?>">
            <i class="fa fa-cubes"></i> <span>Product</span>
                
          </a>
        </li>
    <li class="treeview customer">
          <a href="#">
            <i class="fa fa-user"></i> <span>Customer</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu customer">
            <li class="member"><a href="<?php echo site_url('member'); ?>"><i class="fa fa-circle-o"></i> Member</a></li>
            <li class="guest"><a href="<?php echo site_url('guest'); ?>"><i class="fa fa-circle-o"></i> Guest</a></li>
          </ul>
        </li>
  <li class="treeview master">
          <a href="#">
          <i class="fa fa-hdd-o"></i><span>Master</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu master">
		<li class="treeview kategori">
          <a href="<?php echo site_url('kategori'); ?>">
            <i class="fa fa-sitemap"></i> <span>Kategori</span>
                
          </a>
        </li>
		<li class="treeview subkategori">
          <a href="<?php echo site_url('subkategori'); ?>">
            <i class="fa fa-bars"></i> <span>Sub Kategori</span>
                
          </a>
        </li>
    <li class="treeview payment">
          <a href="<?php echo site_url('payment'); ?>">
            <i class="fa fa-credit-card"></i> <span>Payment</span>
                
          </a>
        </li>
    <li class="treeview shipment">
          <a href="<?php echo site_url('shipment'); ?>">
            <i class="fa fa-truck"></i> <span>Shipment</span>
                
          </a>
        </li>
    <li class="treeview status">
          <a href="<?php echo site_url('status'); ?>">
            <i class="fa fa-clock-o"></i> <span>Status Order</span>
                
          </a>
        </li>
    <li class="treeview jenisbarang">
          <a href="<?php echo site_url('jenisbarang'); ?>">
            <i class="fa fa-briefcase"></i> <span>Jenis Barang</span>
                
          </a>
        </li>
    <li class="treeview carapesan">
          <a href="<?php echo site_url('carapesan'); ?>">
            <i class="fa fa-hand-o-right"></i> <span>Cara Pesan</span>
                
          </a>
        </li>
    <li class="treeview ketentuan">
          <a href="<?php echo site_url('ketentuan'); ?>">
            <i class="fa fa-file-word-o"></i> <span>Ketentuan</span>
                
          </a>
        </li>
      
      </ul>
      </li>
      <li class="treeview laporan">
          <a href="<?php echo site_url('laporan'); ?>">
            <i class="fa fa-file-text"></i> <span>Laporan</span>
                
          </a>
        </li>
      <li class="treeview users">
          <a href="<?php echo site_url('users'); ?>">
            <i class="fa fa-user"></i> <span>Users</span>
                
          </a>
        </li>

        <li class="header">FRONT END WEBSITE</li>
		
        <li class="treeview profil">
          <a href="<?php echo site_url('profil'); ?>">
            <i class="fa fa-building"></i> <span>Profil</span>
                
          </a>
        </li>
		<li class="treeview event">
          <a href="<?php echo site_url('event'); ?>">
            <i class="fa fa-newspaper-o"></i> <span>Event</span>
                
          </a>
        </li>
        <li class="treeview services">
          <a href="<?php echo site_url('services'); ?>">
            <i class="fa fa-cogs"></i> <span>Services</span>
                
          </a>
        </li>
		<li class="treeview kontak">
          <a href="<?php echo site_url('kontak'); ?>">
            <i class="fa fa-phone-square"></i> <span>Kontak</span>
                
          </a>
        </li>
		
        <!--
    <li class="treeview partner">
          <a href="<?php echo site_url('partner'); ?>">
            <i class="fa fa-users"></i> <span>Partner</span>
                
          </a>
        </li>
		<li class="treeview gallery">
          <a href="<?php echo site_url('gallery'); ?>">
            <i class="fa fa-video-camera"></i> <span>Gallery Video</span>
                
          </a>
        </li>-->
    <li class="treeview ib">
          <a href="#">
            <i class="fa fa-picture-o"></i> <span>Image & Banner</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu ib">
            <li class="medsos"><a href="<?php echo site_url('medsos'); ?>"><i class="fa fa-circle-o"></i> Medsos</a></li>
            <li class="logo"><a href="<?php echo site_url('logo'); ?>"><i class="fa fa-circle-o"></i> Logo</a></li>
            <li class="slideshow"><a href="<?php echo site_url('slideshow'); ?>"><i class="fa fa-circle-o"></i> Slide Show</a></li>
            
         <!-- <li class="bank"><a href="<?php echo site_url('bank'); ?>"><i class="fa fa-circle-o"></i> Icon Bank</a></li>-->
          
    </ul>
        </li>
		
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   