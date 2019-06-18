<!DOCTYPE html>
<html>
  <?php
  ?>
  <!--tambahkan custom css disini-->
  <style type="text/css">
  </style>
 <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE/plugins/datatables/dataTables.bootstrap.css')?>">
  <!-- iCheck -->
  <link href="<?php echo base_url('assets/AdminLTE/plugins/iCheck/flat/blue.css') ?>" rel="stylesheet" type="text/css" />
  <!-- Morris chart -->
  <link href="<?php echo base_url('assets/AdminLTE/plugins/morris/morris.css') ?>" rel="stylesheet" type="text/css" />
  <!-- jvectormap -->
  <link href="<?php echo base_url('assets/AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.css') ?>" rel="stylesheet" type="text/css" />
  <!-- Date Picker -->
  <link href="<?php echo base_url('assets/AdminLTE/plugins/datepicker/datepicker3.css') ?>" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link href="<?php echo base_url('assets/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') ?>" rel="stylesheet" type="text/css" />
 
</head>

 <?php
  $this->load->view('template/sidebar');
  ?>

<section class="content-header">
<h1>
Laporan
<small>Data Laporan</small>
</h1>
<ol class="breadcrumb">
  <li><a href="<?php echo base_url('dashboard') ?>"><i class="fa fa-dashboard"></i> Admin</a></li>
  <li class="active">Laporan</li>
</ol>
</section>
<!-- Main content -->
<section class="content">
<div class="row">
  <div class="col-xs-12">
    <!-- /.box -->
    <div class="box">
      <!-- /.box-header -->
      <div class="box-body">
      <form action="<?=base_url()?>laporan/fprint" method="post"  id="form">
      <div class="row">
        <div class="form-group col-md-4">
          <label for="usr">Dari :  </label>
          <input type="text" class="form-control input-sm usr" id="awal" placeholder="Dari. ." name="awal">
        </div>
        <div class="form-group col-md-4">
          <label for="usr">Sampai : </label>
          <input type="text" class="form-control input-sm usr" id="akhir" placeholder="Sampai. ." name="akhir">
        </div>
        <div class="form-group col-md-4">
          <div class="form-group">
           <label>Jenis Barang</label>
            <select name="jenisbarang" class="js-example-basic-single" style="width: 100%;">
              <?php
                foreach($mjenisbarang as $t)
                 {
                ?>
               <option value="<?php echo $t->kode ?>">
                          <?php echo $t->nama ?>
               </option>
                          <?php }?>
            </select>
        </div>
        </div>
        <div class="col-md-3">
        <div class="form-group">
          <button type="submit" class="btn btn-md btn-info"><i class="fa fa-print" aria-hidden="true" target="_blank"></i> Cetak</button>
        </div>
        </div>
        </form>
      </div>

      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
  <!-- /.col -->
</div>
<!-- /.row -->
</section>
<!-- /.content -->
<?php
$this->load->view('template/js');
?>
<script src="<?php echo base_url('assets/AdminLTE/plugins/datatables/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('assets/AdminLTE/plugins/datatables/dataTables.bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('assets/AdminLTE/plugins/datepicker/bootstrap-datepicker.js')?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<script src="<?php echo base_url('assets/delconfirmation.js')?>"></script>
<script>
$( ".laporan" ).addClass( "active" );
</script>
<script type="text/javascript">
  $('select').select2();
</script>

<?php
$this->load->view('template/sidebar_theme');
?>
<script>
        $(function () {
        $('#awal').datepicker({
        autoclose: true,
        });
        });
</script>
<script>
        $(function () {
        $('#akhir').datepicker({
        autoclose: true,
        });
        });
        </script>
<script>
        $(document).ready(function(){
        setTimeout(function() {
        $('.alrt-success').fadeOut('fast');
        }, 2000); // <-- time in milliseconds
        });
        </script>
  
</html>