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
  Kontak 
  <small></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo base_url('') ?>"><i class="fa fa-dashboard"></i> Admin</a></li>
    <li class="active">Kontak </li>
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
          <button type="button" class="btn btn-success pull-right" data-toggle="modal" data-placement="top" data-target="#tambah-data" data-toggle="tooltip" title="Tambah"><span class="glyphicon glyphicon-file"></span>Tambah</button>
        </div>
        <!-- MODAL INPUT-->
        <!-- Modal -->
        <div class="modal fade" id="tambah-data" role="dialog">
          <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Tambah Data Kontak</h4>
              </div>
              <div class="modal-body">
                <div class="box-body pad">
                  <form action="<?=base_url()?>kontak/upload_process" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label>Judul</label>
                      <input type="text" class="form-control" placeholder="Masukan Judul. . ." name="judul" required>
                    </div>
                    <div class="form-group">
                      <label>Gambar</label>
                      <input type="file" class="form-control" placeholder="Masukan Judul. . ." name="image" id="image">
                    </div>
                    <textarea class="textarea" placeholder="Masukan Artikel disini" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" id="editor1" name="artikel" required></textarea>
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
                  <h4 class="modal-title">Edit Data Kontak</h4>
                </div>
                <div class="modal-body">
                  <div class="box-body pad">
                    <form action="<?=base_url()?>kontak/update" method="post" enctype="multipart/form-data" id="form">
                      <input type="hidden" class="form-control" placeholder="ID" name="editid" id="editid" style="width: 15%;" value="" readonly="true">
                      <div class="form-group">
                        <label>Judul</label>
                        <input type="text" class="form-control" placeholder="Masukan Judul. . ." name="editjudul" id="editjudul" value="">
                      </div>
                      <div class="form-group">
                        <label>Gambar</label>
                        <input type="file" class="form-control" placeholder="" name="editimage" id="editimage" >
                      </div>
                      <div class="form-group">
                        <!--<label>Gambar Lama</label>-->
                        <input type="hidden" class="form-control" placeholder="" name="editfilelama" id="editfilelama" value="" >
                      </div>
                      <label class="text-red">
                        <input type="checkbox" class="minimal-red" name="check1" onchange="copyTextValue(this);"/>
                        Hapus Gambar
                      </label>
                      <div class="form-group">
                        <!--<label>Gambar M</label>-->
                        <input type="hidden" class="form-control" placeholder="" name="editfilelamam" id="editfilelamam" value="" >
                      </div>
                      <div class="form-group">
                        <!--<label>Gambar N</label>-->
                        <input type="hidden" class="form-control" placeholder="" name="editfilelaman" id="editfilelaman" value="" >
                      </div>
                      <textarea class="textarea" placeholder="Masukan Artikel disini" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="editartikel" id="editartikel"><div id="log"></div></textarea>
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
                  <th>Judul</th>
                  <th>Gambar</th>
                  <th>Artikel</th>
                  <th style="width: 10%;">Opsi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no=1;
                foreach($mkontak as $t)
                { ?>
                <tr>
                  <td><?php echo $no ?></td>
                  <td><?php echo $t->judul ?></td>
                  <td><img src="<?php echo base_url ('uploads/kontak/'.$t->image) ?>" style="width: 75px; height: 50px;"
                  onerror="this.src='<?php echo base_url ('gambar/noimage.png') ?>';"></td>
                  <td><?php echo $t->artikel ?></td>
                  <td>
                    <button type="button" class="btn btn-sm btn-warning edit_data" id="<?php echo $t->id ?>" data-toggle="tooltip" data-placement="top" title="Edit" ><span class="glyphicon glyphicon-pencil"></button>
                      <?php echo anchor('kontak/hapus/'.$t->id,'<button class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="Hapus"><span class="glyphicon glyphicon-trash"></button>'); ?>
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
	$( ".kontak" ).addClass( "active" );
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
      url: "<?php echo site_url('kontak/editu/') ;?>/" + editid,
      method:"POST",
      data:{editid:editid},
      dataType:"json",
      success:function(data){
      $('#editid').val(data.id);
      $('#editjudul').val(data.judul);
      $('#editartikel').val(data.artikel);
      $('#editfilelama').val(data.image);
      CKEDITOR.instances['editartikel'].setData(data);
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
      <script src="<?php echo base_url('assets/js/ckeditors/ckeditor.js') ?>"></script>
      <script>
      $(function () {
      // Replace the <textarea id="editor1"> with a CKEditor
      // instance, using default configuration.
      CKEDITOR.replace('editor1');
      //bootstrap WYSIHTML5 - text editor
      //$(".textarea").wysihtml5();
      });
      </script>
      <script>
      $(function () {
      // Replace the <textarea id="editor1"> with a CKEditor
      // instance, using default configuration.
      CKEDITOR.replace('editartikel');
      //bootstrap WYSIHTML5 - text editor
      //$(".textarea").wysihtml5();
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