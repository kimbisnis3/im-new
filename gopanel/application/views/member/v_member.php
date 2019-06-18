<!DOCTYPE html>
<html>
  <?php
  $this->load->helper('indonesian_date');
  ?>
  <!--tambahkan custom css disini-->
  <style type="text/css">
  </style>
  <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE/plugins/datatables/dataTables.bootstrap.css')?>">
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
  Member 
  <small></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo base_url('') ?>"><i class="fa fa-dashboard"></i> Admin</a></li>
    <li class="active">Member </li>
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
          <!--
          <button type="button" class="btn btn-success pull-right" data-toggle="modal" data-placement="top" data-target="#tambah-data" data-toggle="tooltip" title="Tambah"><span class="glyphicon glyphicon-file"></span>Tambah</button>
          -->
        </div>
        
          <!--MODAL EDIT-->
          <div class="modal fade" id="edit-data" role="dialog">
            <div class="modal-dialog">
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Edit Data member</h4>
                </div>
                <div class="modal-body">
                  <div class="box-body pad">
                    <form action="<?=base_url()?>member/update" method="post" enctype="multipart/form-data" id="form">
                      <input type="hidden" class="form-control" placeholder="ID" name="editid" id="editid" style="width: 15%;" value="" readonly="true">
                      <div class="form-group">
                      <label>Status</label>
                        <select name="editstatus" id="editstatus" class="js-example-basic-single" style="width: 100%;">
                          ?>
                          <option id="" name="" value="t" >Aktif</option>
                          <option id="" name="" value="f" >Tidak Aktif</option>
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
                  <th>Kode Customer</th>
                  <th>Nama Member</th>
                  <th>Alamat</th>
                  <th>Telepon</th>
                  <th>Email</th>
                  <th>Tanggal Registrasi</th>
                  <th>Status</th>
                  <th style="width: 10%;">Opsi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no=1;
                foreach($mmember as $t)
                { ?>
                <tr>
                  <td><?php echo $no ?></td>
                  <td><?php echo $t->kode ?></td>
                  <td><?php echo $t->nama ?></td>
                  <td><?php echo $t->alamat ?></td>
                  <td><?php echo $t->telp ?></td>
                  <td><?php echo $t->email ?></td>
                  <td><?php echo indonesian_date($t->datei) ?></td>
                  <td><?php 
                  if ($t->status=='t') {
                    echo '<span class="label label-success">Aktif</span>' ;
                  } 
                  else {
                    echo '<span class="label label-danger">Tidak Aktif</span>' ;
                    }?>
                  </td>
                  <td>
                    <button type="button" class="btn btn-sm btn-warning edit_data" id="<?php echo $t->id ?>" data-toggle="tooltip" data-placement="top" title="Edit" ><span class="glyphicon glyphicon-pencil"></button>
                      <?php echo anchor('member/hapus/'.$t->id,'<button class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="Hapus"><span class="glyphicon glyphicon-trash"></button>'); ?>
                        <?php
                        $no++;}
                        ?>
                    </td>  
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
      <script src="<?php echo base_url('assets/delconfirmation.js')?>"></script>
      <script src="<?php echo base_url('assets/allowedfile.js')?>"></script>
      <!-- page script -->
       <script>
  $( ".customer" ).addClass( "active" );
  </script>
	  <script>
	$( ".member" ).addClass( "active" );
	</script>
  <script type="text/javascript">
  $('select').select2();
</script>
      <script>
      $(document).ready(function(){
      $(document).on('click', '.edit_data', function(){
      var editid = $(this).attr("id");
      $.ajax({
      url: "<?php echo site_url('member/editu/') ;?>/" + editid,
      method:"POST",
      data:{editid:editid},
      dataType:"json",
      success:function(data){
      $('#editid').val(data.id);
      $('#editstatus').val(data.status);
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