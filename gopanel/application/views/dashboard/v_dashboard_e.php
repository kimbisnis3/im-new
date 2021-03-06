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
  <!-- Daterange picker -->
  <link href="<?php echo base_url('assets/AdminLTE/plugins/daterangepicker/daterangepicker.css') ?>" rel="stylesheet" type="text/css" />
  <!-- bootstrap wysihtml5 - text editor -->
  <link href="<?php echo base_url('assets/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') ?>" rel="stylesheet" type="text/css" />
</head>
<?php
$this->load->view('template/sidebar');
?>
<section class="content-header">
  <h1>
  Visitor
  <small></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo base_url('index.php/Dashboard') ?>"><i class="fa fa-dashboard"></i> Admin</a></li>
    <li class="active">Visitor</li>
  </ol>
</section>
<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <!-- /.box -->
      <div class="box">
        <div class="box-header">
          <?php echo $this->session->flashdata('message');?>
          
        </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Date</th>
                  <th>IP</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no=1;
                foreach($w_visitor as $t)
                { ?>
                <tr>
                  <td><?php echo $no ?></td>
                  <td><?php echo $t->datei ?></td>
                  <td><?php echo $t->ip ?></td>
                        <?php
                        $no++;}
                        ?>
                      </tr>
                    </tr>
                  </tbody>
                </table>
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
      <!-- page script -->
	  <script>
	$( ".dashboard" ).addClass( "active" );
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
      "autoWidth": false
      });
      });
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