</head>
<body class="hold-transition skin-purple sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo site_url('Profil'); ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>Go</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Go</b>Panel</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning"><?php if($xorder==0){
                  echo "";
                }else{
                    echo $xorder;
                  }  ?></span>
            </a>
            <ul class="dropdown-menu">
              <li class="header"></li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="<?php echo base_url('order'); ?>">
                       <?php if($xorder==0){
                  echo "Tidak Ada Pesanan Baru";
                }else{
                    echo "<span class='label label-danger'>".$xorder."</span></i> Pesanan Baru";
                  }  ?> 
                    </a>
                  </li>
                  
                  
                </ul>
              </li>
            </ul>
          </li>
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url('gambar/logo.png')?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $this->session->userdata("username"); ?></span>
              <span class="hidden-xs"></span>

            </a>

            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url('gambar/logo.png')?>" class="img-circle" alt="User Image">

                <p>
                  <?php echo $this->session->userdata("namafull"); ?>
                  <span class="hidden-xs"> </span>
                  <?php 
                    $nama_user = $this->session->userdata("namafull");

                   ?>
                
                </p>
              </li>

              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?php echo base_url('users/userdata'); ?>" class="btn btn-success btn-flat"><i class="fa fa-user" aria-hidden="true"></i> Profil</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo site_url('logout'); ?>" class="btn btn-warning btn-flat"><i class="fa fa-sign-out" aria-hidden="true"></i> Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  
