<!DOCTYPE html>
<html>
  <?php
  ?>
  <!--tambahkan custom css disini-->
  <style type="text/css">
  </style>
  <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE/plugins/datatables/dataTables.bootstrap.css')?>">
  <!-- Date Picker -->
  <link href="<?php echo base_url('assets/AdminLTE/plugins/datepicker/datepicker3.css') ?>" rel="stylesheet" type="text/css" />
  <!-- Daterange picker -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<?php
$this->load->view('template/sidebar');
$this->load->helper('indonesian_date');
?>
<section class="content-header">
  <h1>
  Order 
  <small></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo base_url('') ?>"><i class="fa fa-dashboard"></i> Admin</a></li>
    <li class="active">Order </li>
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
        <!--MODAL EDIT-->
          <div class="modal fade" id="edit-data" role="dialog">
            <div class="modal-dialog">
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Edit Data Status Order</h4>
                </div>
                <div class="modal-body">
                  <div class="box-body pad">
                    <form action="<?=base_url()?>order/update" method="post" enctype="multipart/form-data" id="form">
                      
                      <input type="hidden" class="form-control" placeholder="ID" name="editid" id="editid" style="width: 15%;" value="" readonly="true">
                      
                    <div class="form-group">
                    <label>Status</label>
                        <select name="editref_status"  id="editref_status" class="js-example-basic-single" style="width: 100%;">

                        <?php
                          foreach($mstatus as $t)
                          {
                          ?>
                          <option value="<?php echo $t->kode ?>">
                          <?php echo $t->nama ?>
                          </option>
                          <?php }?>
                      </select>
                      </div>
                      <button type="button" class="btn btn-warning pull-left" data-dismiss="modal" data-toggle="tooltip" data-placement="top" title="Kembali" ><span class="glyphicon glyphicon-chevron-left"></span> Kembali</button>
                      <button type="button submit" class="btn btn-primary pull-right" data-toggle="tooltip" data-placement="top" title="Simpan Perubahan" ><span class="glyphicon glyphicon-floppy-disk"></span> Simpan</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal fade" id="void-data" role="dialog">
            <div class="modal-dialog">
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Apakah Anda Akan Void Order ?</h4>
                </div>
                <div class="modal-body">
                  <div class="box-body pad">
                    <form action="<?=base_url()?>order/voidupdate" method="post" enctype="multipart/form-data" id="form">
                      
                      <input type="hidden" class="form-control" placeholder="ID" name="voidid" id="voidid" style="width: 15%;" value="" readonly="true">
                      
                    <div class="form-group">
                    <label>Void</label>
                        <select name="void"  id="void" class="js-example-basic-single" style="width: 100%;">
                          <option value="t">Ya
                          </option>
                          <option value="f">Tidak
                          </option>
                      </select>
                      </div>
                      <button type="button" class="btn btn-warning pull-left" data-dismiss="modal" data-toggle="tooltip" data-placement="top" title="Kembali" ><span class="glyphicon glyphicon-chevron-left"></span> Kembali</button>
                      <button type="button submit" class="btn btn-primary pull-right" data-toggle="tooltip" data-placement="top" title="Simpan Perubahan" ><span class="glyphicon glyphicon-floppy-disk"></span> Simpan</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--END MODAL EDIT-->
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Kode Transaksi</th>
                <th>Referensi Kode</th>
                  <th>Tanggal</th>
                  <th>Nama Pemesan</th>
                  <th>Alamat</th>
                  <th>Penerima</th>
                  <th>Alamat Penerima</th>
                <th>Telp Penerima</th>
                  <th>Status</th>
                  <th style="width: 16%; align:center;">Opsi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no=1;
                foreach($morder as $t)
                { ?>
                <tr>
                  <td><?php echo $no ?></td>
                  <td><?php echo $t->kode ?></td>
                <td><strong><?php echo $t->koderef ?></strong></td>
                  <td><?php echo indonesian_date($t->tgl) ?></td>
                  <td><?php echo $t->nama ?><?php 
                  if ($t->guest=='f') {
                    echo '<span class="label label-success">Member</span>' ;
                  }
                  else{ echo "";
                    }?></td>
                  <td><?php echo $t->alamat ?></td>
                  <td><?php echo $t->penerima ?></td>
                  <td><?php echo $t->alamatkirim ?></td>
                	<td><?php echo $t->telppenerima ?></td>
                  <td><?php echo $t->namastatus ?></td>
                  <td>
                    <?php echo anchor('order/detail/'.$t->id,'<button class="btn btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fa fa-eye" aria-hidden="true"></i></button>'); ?>
                    <button type="button" class="btn btn-sm btn-warning edit_data" id="<?php echo $t->id ?>" data-toggle="tooltip" data-placement="top" title="Status" ><span class="glyphicon glyphicon-pencil"></button>
                    <button type="button" class="btn btn-sm btn-danger void_data" id="<?php echo $t->id ?>" data-toggle="tooltip" data-placement="top" title="Void" ><i class="fa fa-exchange" aria-hidden="true"></i></button>
                    <?php echo anchor('order/fprint/'.$t->id,'<button class="btn btn-sm btn-info" data-toggle="tooltip" data-placement="top" title="Print"><i class="fa fa-print" aria-hidden="true" target="_blank"></i></button>'); ?>
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
      <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
      <script src="<?php echo base_url('assets/allowedfile.js')?>"></script>
      <script type="text/javascript">
  $('select').select2();
</script>
      <!-- page script -->
	  <script>
	$( ".order" ).addClass( "active" );
	</script>
  <script>
        $(document).ready(function(){
        $(document).on('click', '.edit_data', function(){
        var editid = $(this).attr("id");
        $.ajax({
        url: "<?php echo site_url('order/editu/') ;?>/" + editid,
        method:"POST",
        data:{editid:editid},
        dataType:"json",
        success:function(data){
        $('#editid').val(data.id);
        $('#editref_status').val(data.ref_status);
        //$('#editnamastatus').val(data.namastatus);
        $('#edit-data').modal('show');
        }  ,
        error: function (jqXHR, textStatus, errorThrown)
        {
        alert('Error system for edit_data()');
        }
        });
        });
        });
        </script>
        <script>
        $(document).ready(function(){
        $(document).on('click', '.void_data', function(){
        var editid = $(this).attr("id");
        $.ajax({
        url: "<?php echo site_url('order/void/') ;?>/" + editid,
        method:"POST",
        data:{editid:editid},
        dataType:"json",
        success:function(data){
        $('#voidid').val(data.id);
        $('#void').val(data.void);
        //$('#editnamastatus').val(data.namastatus);
        $('#void-data').modal('show');
        }  ,
        error: function (jqXHR, textStatus, errorThrown)
        {
        alert('Error system for void_data()');
        }
        });
        });
        });
        </script>
      
      <script>
      $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip();
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