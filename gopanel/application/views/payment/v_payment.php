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
Payment
<small>Data payment</small>
</h1>
<ol class="breadcrumb">
  <li><a href="<?php echo base_url('profil') ?>"><i class="fa fa-dashboard"></i> Admin</a></li>
  <li class="active">Payment</li>
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
                <h4 class="modal-title">Tambah Data payment</h4>
              </div>
              <div class="modal-body">
                <div class="box-body pad">
                  <form action="<?=base_url()?>payment/tambah" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label>Nama</label>
                      <input type="text" class="form-control" placeholder="Masukan Nama. . ." name="nama" required>
                    </div>
                    <div class="form-group">
                      <label>No.Rekening</label>
                      <input type="text" class="form-control" placeholder="Masukan No. Rekening. . ." name="norek" required>
                    </div>
                    <div class="form-group">
                      <label>Keterangan</label>
                      <input type="text" class="form-control" placeholder="Masukan Keterangan. . ." name="ket" >
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-warning pull-left" data-dismiss="modal" data-toggle="tooltip" data-placement="top" title="Kembali" ><span class="glyphicon glyphicon-chevron-left"></span> Kembali</button>
                  <button type="button submit" class="btn btn-primary pull-right" data-toggle="tooltip" data-placement="top" title="Tambahkan Data" ><span class="glyphicon glyphicon-floppy-disk"></span> Tambahkan</button>
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
                  <h4 class="modal-title">Edit Data payment</h4>
                </div>
                <div class="modal-body">
                  <div class="box-body pad">
                    <form action="<?=base_url()?>payment/update" method="post" enctype="multipart/form-data" id="form">
                      
                      <input type="hidden" class="form-control" placeholder="ID" name="editid" id="editid" style="width: 15%;" value="" readonly="true">
                      <div class="form-group">
                      <label>Nama</label>
                      <input type="text" class="form-control" placeholder="Masukan Nama. . ." name="editnama" id="editnama" required>
                    </div>
                     <div class="form-group">
                      <label>Norek</label>
                      <input type="text" class="form-control" placeholder="Masukan No. Rekening. . ." name="editnorek" id="editnorek" required>
                    </div>
                    <div class="form-group">
                      <label>Keterangan</label>
                      <input type="text" class="form-control" placeholder="Masukan Keterangan. . ." name="editket"  id="editket" >
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
              <th>Nama</th>
              <th>No Rekening</th>
              <th>Keterangan</th>

              <th style="width: 10%;">Opsi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no=1;
            foreach($mpayment as $t)
            { ?>

            <tr>
              <td><?php echo $no ?></td>
              <td><?php echo $t->nama ?></td>
              <td><?php echo $t->norek ?></td>
              <td><?php echo $t->ket ?></td>
              <td>
           <button type="button" class="btn btn-sm btn-warning edit_data" id="<?php echo $t->id ?>" data-toggle="tooltip" data-placement="top" title="Edit" ><span class="glyphicon glyphicon-pencil"></button>
            <?php echo anchor('payment/hapus/'.$t->id,'<button class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="Hapus"><span class="glyphicon glyphicon-trash"></button>'); ?>

             
            <?php
            $no++;} 
            ?>
            
            </tr>
          </tbody>
          
        </table>
      
<?php echo $this->session->flashdata('lihat');?>
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
<script src="<?php echo base_url('assets/delconfirmation.js')?>"></script>
<script>
$( ".payment" ).addClass( "active" );
</script>
<script>
  $( ".master" ).addClass( "active" );
  </script>
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});
</script>
<script>
        $(document).ready(function(){
        $(document).on('click', '.edit_data', function(){
        var editid = $(this).attr("id");
        $.ajax({
        url: "<?php echo site_url('payment/editu/') ;?>/" + editid,
        method:"POST",
        data:{editid:editid},
        dataType:"json",
        success:function(data){
        $('#editid').val(data.id);
        $('#editnama').val(data.nama);
        $('#editnorek').val(data.norek);
        $('#editket').val(data.ket);
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