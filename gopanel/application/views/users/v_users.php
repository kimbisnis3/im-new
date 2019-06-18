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
  User 
  <small></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo base_url('') ?>"><i class="fa fa-dashboard"></i> Admin</a></li>
    <li class="active">User </li>
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
                <h4 class="modal-title">Tambah Data User</h4>
              </div>
              <div class="modal-body">
                <div class="box-body pad">
                  <form action="<?=base_url()?>users/upload_process" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label>Nama User</label>
                      <input type="text" class="form-control" placeholder="Masukan Nama User. . ." name="namafull" required>
                    </div>
                    <div class="form-group">
                      <label>Username</label>
                      <input type="text" class="form-control" placeholder="Masukan Username. . ." name="username" required>
                    </div>
                    <div class="form-group">
                      <label>Password</label>
                      <input type="password" class="form-control" placeholder="Password. . ." name="pass" id="pass" required>
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
                  <h4 class="modal-title">Edit Data User</h4>
                </div>
                <div class="modal-body">
                  <div class="box-body pad">
                    <form action="<?=base_url()?>users/update" method="post" enctype="multipart/form-data" id="form">
                      <input type="hidden" class="form-control" placeholder="ID" name="editid" id="editid" style="width: 15%;" value="" readonly="true">
                      <div class="form-group">
                        <label>Nama User</label>
                        <input type="text" class="form-control" placeholder="Masukan Nama User. . ." name="editnamafull" id="editnamafull" value="">
                      </div>
                      <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" placeholder="Masukan Username. . ." name="editusername" id="editusername" value="">
                      </div>
                      <div class="form-group">
                        <label>Password Baru</label>
                        <input type="password" class="form-control" placeholder="Masukan Password. . ." name="editpass" id="editpass" value="">
                      </div>
                      <div class="form-group">
                        <label>Ketik Ulang Password</label>
                        <input type="password" class="form-control" placeholder="" name="editpassulang" id="editpassulang" value=""  onkeyup="checkPass(); return false;">
                        <span id="confirmMessage" class="confirmMessage"></span>
                      </div>
                      <div class="form-group">
                      <label>Status</label>
                        <select name="editaktif" id="editaktif" class="js-example-basic-single" style="width: 100%;">
                          ?>
                          <option id="" name="" value="t" >Aktif</option>
                          <option id="" name="" value="f" >Tidak Aktif</option>
                      </select>
                      </div>
                      <div class="form-group">
                        <!--<label>Gambar Lama</label>-->
                        <input type="hidden" class="form-control" placeholder="" name="editfilelama" id="editfilelama" value="" >
                      </div>
                      <label class="text-red">
                        <input type="hidden" class="minimal-red" name="check1" onchange="copyTextValue(this);"/>
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
                  <th>Nama Lengkap</th>
                  <th>Username</th>
                  <th>Password</th>
                  <th>Status</th>
                  <th style="width: 10%;">Opsi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no=1;
                foreach($tuser as $t)
                { ?>
                <tr>
                  <td><?php echo $no ?></td>
                  <td><?php echo $t->namafull ?></td>
                  <td><?php echo $t->username ?></td>
                  <td><?php echo $t->pass ?></td>
                  <td><?php 
                  if ($t->aktif=='t') {
                    echo '<span class="label label-success">Aktif</span>' ;
                  } 
                  else {
                    echo '<span class="label label-danger">Tidak Aktif</span>' ;
                    }?>
                  </td>
                  <td>
                    <button type="button" class="btn btn-sm btn-warning edit_data" id="<?php echo $t->id ?>" data-toggle="tooltip" data-placement="top" title="Edit" ><span class="glyphicon glyphicon-pencil"></button>
                      <?php echo anchor('users/hapus/'.$t->id,'<button class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="Hapus"><span class="glyphicon glyphicon-trash"></button>'); ?>
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
      <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
      <script src="<?php echo base_url('assets/AdminLTE/plugins/datatables/dataTables.bootstrap.min.js')?>"></script>
      <script src="<?php echo base_url('assets/delconfirmation.js')?>"></script>
      <script src="<?php echo base_url('assets/allowedfile.js')?>"></script>
      <!-- page script -->
	  <script>
	$( ".users" ).addClass( "active" );
	</script>
  <script type="text/javascript">
  $('select').select2();
</script>
<script>
  function checkPass()
{
    //Store the password field objects into variables ...
    var pass1 = document.getElementById('editpass');
    var pass2 = document.getElementById('editpassulang');
    //Store the Confimation Message Object ...
    var message = document.getElementById('confirmMessage');
    //Set the colors we will be using ...
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    //Compare the values in the password field 
    //and the confirmation field
    if(pass1.value == pass2.value){
        //The passwords match. 
        //Set the color to the good color and inform
        //the user that they have entered the correct password 
        pass2.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Passwords Cocok!"
    }else{
        //The passwords do not match.
        //Set the color to the bad color and
        //notify the user.
        pass2.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Passwords Tidak Cocok!"
    }
} 
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
      url: "<?php echo site_url('users/editu/') ;?>/" + editid,
      method:"POST",
      data:{editid:editid},
      dataType:"json",
      success:function(data){
      $('#editid').val(data.id);
      $('#editusername').val(data.username);
      $('#editnamafull').val(data.namafull);
      $('#editaktif').val(data.aktif);
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