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
  <link href="<?php echo base_url('assets/AdminLTE/plugins/daterangepicker/daterangepicker.css') ?>" rel="stylesheet" type="text/css" />
  <!-- bootstrap wysihtml5 - text editor -->
  <link href="<?php echo base_url('assets/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') ?>" rel="stylesheet" type="text/css" />
</head>
<?php
$this->load->view('template/sidebar');
?>
<section class="content-header">
  <h1>
  Media Sosial 
  <small></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo base_url('') ?>"><i class="fa fa-dashboard"></i> Admin</a></li>
    <li class="active">Media Sosial </li>
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
          <button type="button" class="btn btn-success pull-right" data-toggle="modal" data-placement="top" data-target="#tambah-data" data-toggle="tooltip" title="Tambah"><span class="glyphicon glyphicon-file"></span>Tambah</button>-->
        </div>
        <!-- MODAL INPUT-->
        <!-- Modal -->
        <div class="modal fade" id="tambah-data" role="dialog">
          <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Tambah Data medsos</h4>
              </div>
              <div class="modal-body">
                <div class="box-body pad">
                  <form action="<?=base_url()?>medsos/upload_process" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label>Nama Medsos</label>
                      <input type="text" class="form-control" placeholder="Masukan Nama Medsos. . ." name="judul" required>
                    </div>
                    <div class="form-group">
                      <label>Icon</label>
                      <input type="text" class="form-control" placeholder="Masukan icon. . ." name="icon" required>
                    </div>
                    <div class="form-group">
                      <label>Link</label>
                      <input type="text" class="form-control" placeholder="Masukan Link. . ." name="link" required>
                    </div>
                    <div class="form-group">
                      <label>Gambar</label>
                      <input type="file" class="form-control" placeholder="Masukan Judul. . ." name="image" id="image">
                    </div>
                    <button type="button" class="btn btn-warning pull-left" data-dismiss="modal" data-toggle="tooltip" data-placement="top" title="Kembali" ><span class="glyphicon glyphicon-chevron-left"></span> Kembali</button>
                    <button type="button submit" id="kirim" class="btn btn-primary pull-right" data-toggle="tooltip" data-placement="top" title="Tambahkan Data" ><span class="glyphicon glyphicon-floppy-disk"></span> Tambahkan</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          </div>  <!-- END MODAL INPUT-->
          <!--MODAL EDIT-->
          <div class="modal fade" id="edit-data" role="dialog">
            <div class="modal-dialog">
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Edit Data medsos</h4>
                </div>
                <div class="modal-body">
                  <div class="box-body pad">
                    <form action="<?=base_url()?>medsos/update" method="post" enctype="multipart/form-data" id="form">
                      <input type="hidden" class="form-control" placeholder="ID" name="editid" id="editid" style="width: 15%;" value="" readonly="true">
                      <div class="form-group">
                        <label>Nama Medsos</label>
                        <input type="text" class="form-control" placeholder="Masukan Nama Medsos. . ." name="editjudul" id="editjudul" value="">
                      </div>
                      <div class="form-group">
                        <label>Link</label>
                        <input type="text" class="form-control" placeholder="Masukan Link. . ." name="editlink" id="editlink" value="">
                      </div>
                    <div class="form-group">
                        <label>Icon</label>
                        <input type="text" class="form-control" placeholder="Masukan Nama Medsos. . ." name="editicon" id="editicon" value="" readonly>
                      </div>
                      <div class="form-group">
                        <!--<label>Gambar Lama</label>-->
                        <input type="hidden" class="form-control" placeholder="" name="editfilelama" id="editfilelama" value="" >
                      </div>
                      <label class="text-red">
                        
                      </label>
                      <div class="form-group">
                        <!--<label>Gambar M</label>-->
                        <input type="hidden" class="form-control" placeholder="" name="editfilelamam" id="editfilelamam" value="" >
                      </div>
                      <div class="form-group">
                        <!--<label>Gambar N</label>-->
                        <input type="hidden" class="form-control" placeholder="" name="editfilelaman" id="editfilelaman" value="" >
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
                  <th>Nama Medsos</th>
                  <th>Icon</th>
                  <th>Link</th>
                  <th style="width: 10%;">Opsi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no=1;
                foreach($mmedsos as $t)
                { ?>
                <tr>
                  <td><?php echo $no ?></td>
                  <td><?php echo $t->judul ?></td>
                  <td><i class="<?php echo $t->icon ?> fa-2x" aria-hidden="true"></i></td>
                  <td><?php echo $t->link ?></td>
                  <td>
                    <button type="button" class="btn btn-sm btn-warning edit_data" id="<?php echo $t->id ?>" data-toggle="tooltip" data-placement="top" title="Edit" ><span class="glyphicon glyphicon-pencil"></button>
                      <?php echo anchor('medsos/hapus/'.$t->id,'<button class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="Hapus"><span class="glyphicon glyphicon-trash"></button>'); ?>
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
      <script src="<?php echo base_url('assets/delconfirmation.js')?>"></script>
      <script src="<?php echo base_url('assets/allowedfile.js')?>"></script>
      <!-- page script -->
      <script>
  $( ".ib" ).addClass( "active" );
  </script>
	  <script>
	$( ".medsos" ).addClass( "active" );
	</script>
      <script type="text/javascript">
        function copyTextValue(bf) {
        if(bf.checked)
        var text1 = document.getElementById("editfilelama").value;
        else
        text1='';
        document.getElementById("editfilelamam").value = text1;
        document.getElementById("editimage").value = text1;
        }
        </script>
      <script>
      $(document).ready(function(){
      $(document).on('click', '.edit_data', function(){
      var editid = $(this).attr("id");
      $.ajax({
      url: "<?php echo site_url('medsos/editu/') ;?>/" + editid,
      method:"POST",
      data:{editid:editid},
      dataType:"json",
      success:function(data){
      $('#editid').val(data.id);
      $('#editjudul').val(data.judul);
      $('#editlink').val(data.link);
      $('#editicon').val(data.icon);
      $('#editfilelama').val(data.image);
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