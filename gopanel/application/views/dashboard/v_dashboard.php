<!DOCTYPE html>
<html>
  <?php
  
  ?>
  <!--tambahkan custom css disini-->
  <style type="text/css">
  </style>
  <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE/plugins/datatables/dataTables.bootstrap.css')?>">
  <!-- iCheck -->
  <link href="<?php echo base_url('assets/AdminLTE/plugins/iCheck/all.css') ?>" rel="stylesheet" type="text/css" />
  <!-- Morris chart -->
  <link href="<?php echo base_url('assets/AdminLTE/plugins/morris/morris.css') ?>" rel="stylesheet" type="text/css" />
  <!-- jvectormap -->
  <link href="<?php echo base_url('assets/AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.css') ?>" rel="stylesheet" type="text/css" />
  <!-- Date Picker -->
  <link href="<?php echo base_url('assets/AdminLTE/plugins/datepicker/datepicker3.css') ?>" rel="stylesheet" type="text/css" />
  <!-- Daterange picker -->
  <link href="<?php echo base_url('assets/AdminLTE/plugins/daterangepicker/daterangepicker.css') ?>" rel="stylesheet" type="text/css" />
  <!-- bootstrap wysihtml5 - text editor -->
  <link href="<?php echo base_url('assets/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') ?>" rel="stylesheet" type="text/css" />
  <head>
    <style>
    </style>
  </head>
</head>
<?php

$this->load->view('template/sidebar');
?>
<section class="content-header">
  <h1>
  Dashboard
  <small> </small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo base_url('index.php/Profil') ?>"><i class="fa fa-dashboard"></i> Admin</a></li>
    <li class="active">Dashboard</li>
  </ol>
</section>
<!-- Main content -->
<section class="content">
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $mbarang ?></h3>

              <p>Total Product</p>
            </div>
            <div class="icon">
              <i class="fa fa-archive"></i>
            </div>
            <a href="<?php echo base_url('barang')?>" class="small-box-footer">
              Lihat Selengkapnya <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-maroon">
            <div class="inner">
              <h3><?php echo $mcustomer ?></h3>

              <p>Total Member</p>
            </div>
            <div class="icon">
              <i class="fa fa-paper-plane"></i>
            </div>
            <a href="<?php echo base_url('member')?>" class="small-box-footer">
              Lihat Selengkapnya <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo $totalcustomer ?></h3>

              <p>Total Guest</p>
            </div>
            <div class="icon">
              <i class="fa fa-user-plus"></i>
            </div>
            <a href="<?php echo base_url('guest')?>" class="small-box-footer">
              Lihat Selengkapnya <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo $xorder ?></h3>

              <p>Total Pesanan Hari Ini</p>
            </div>
            <div class="icon">
              <i class="fa fa-shopping-cart"></i>
            </div>
            <a href="<?php echo base_url('order/today')?>" class="small-box-footer">
              Lihat Selengkapnya <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        </div>
        <div class="row">
        <div class="col-md-12">
           <!-- AREA CHART -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Pendapatan</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body chart-responsive">
              <div class="chart" id="revenue-chart" style="height: 300px;"></div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          <!-- /.box -->

        </div>
        </div>
</section>
        <!-- /.content -->
<!-- ChartJS 1.0.1 -->
<?php
$this->load->view('template/js');
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="<?php echo base_url('assets/AdminLTE/plugins/morris/morris.min.js') ?>"></script>
<script type="text/javascript">
      $(document).ready(function() {

        $.ajax({
            url : "<?php echo site_url('dashboard/getcount'); ?>",
            type: "POST",
            data: "",
            dataType: "json",
            cache:false,
            success: function(data){

              var area = new Morris.Area({
                element: 'revenue-chart',
                resize: true,
                data: data.chart,
                xkey: 'tgl',
                ykeys: ['jumlah'],
                labels: ['Pendapatan'],
                lineColors: ['#3c8dbc'],
                hideHover: 'auto',
                parseTime:'false'
              });
            },
            error: function (jqXHR, textStatus, errorThrown){
                console.log(errorThrown);
            }
          });

      });
    </script>

<script>
        $( ".dashboard" ).addClass( "active" );
        </script>

        <?php
        $this->load->view('template/sidebar_theme');
        ?>
        
        <script>
        $(document).ready(function(){
        setTimeout(function() {
        $('.alrt-success').fadeOut('fast');
        }, 2000); // <-- time in milliseconds
        });
        </script>
      </html>