<!DOCTYPE html>
<html>
  <?php
  ?>
  <!--tambahkan custom css disini-->
  <style type="text/css">
  tr {
    
  }
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
  <?php
  $this->load->helper('indonesian_date_helper');
  $this->load->view('template/sidebar');
  ?>
<section class="content-header">
<h1>
Profil
<small>Detail Profil Pengguna
</small>
</h1>
<ol class="breadcrumb">
  <li><a href="<?php echo base_url('index.php/Profil') ?>"><i class="fa fa-dashboard"></i> Admin</a></li>
  <li><a href="<?php echo base_url('index.php/Users') ?>">Profil</a></li>
  <li class="active">Detail Profil Pengguna</li>
</ol>
</section>
<!-- Main content -->
<section class="content">
<div class="row">
  <div class="col-md-12">
    <!-- /.box -->
    <div class="box">
      <!-- /.box-header -->
      <div class="box-body pad">
      <?php echo $this->session->flashdata('message');?>
        <table id="example1" class="table table-bordered table-striped">
          <tbody>
            <tr>
              <td>Nama Lengkap</td><td><?php echo $this->session->userdata("namafull"); ?></td>
            </tr>
            <tr>
              <td>Username</td><td><?php echo $this->session->userdata("username"); ?></td>
            </tr>
            <tr>
              <td>Password</td><td>*************<td>
              <button type="button" class="btn btn-sm btn-warning edit_data" id="<?php echo $this->session->userdata("id"); ?>" data-toggle="tooltip" data-placement="top" title="Edit" ><span class="glyphicon glyphicon-pencil"></span> Ubah Password</button></td>
            </tr>
            <tr>
              <td>
              <td></td>
          <a href="<?php echo base_url('') ?>" class="btn btn-info pull-right" role="button">Home</a>
              </td>
            </tr>
        
        </tr>
          </tbody>
          
        </table>
        <div class="modal fade" id="edit-data" role="dialog">
            <div class="modal-dialog">
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Ubah Password</h4>
                </div>
                <div class="modal-body">

                  <div class="box-body pad">
                   
                    <form action="<?=base_url()?>users/updatepass" method="post" enctype="" id="form">
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
                        <input type="hidden" class="form-control" placeholder="Masukan Judul. . ." name="editpass" id="editpass" value="">
                      </div>
                      <div class="form-group">
                        <label>Password Baru</label>
                        <input type="password" class="form-control" placeholder="Masukan Password Baru" name="editpassn" id="editpassn" value="">
                      </div>
                      <div class="form-group">
                        <label>Ketik Ulang Password Baru</label>
                        <input type="password" class="form-control" placeholder="" name="editpassulang" id="editpassulang" value=""  onkeyup="checkPass(); return false;">
                        <span id="confirmMessage" class="confirmMessage"></span>
                      </div>
                      <div class="form-group">
                        <input type="hidden" class="form-control" placeholder="" name="editaktif" id="editaktif" style="width: 15%;"  >
                      </div>
                      <button type="button" class="btn btn-warning pull-left" data-dismiss="modal" data-toggle="tooltip" data-placement="top" title="Kembali" ><span class="glyphicon glyphicon-chevron-left"></span> Kembali</button>
                      <button type="button submit" class="btn btn-primary pull-right" data-toggle="tooltip" data-placement="top" title="Simpan Perubahan" ><span class="glyphicon glyphicon-floppy-disk"></span> Simpan</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
  <!-- /.col-->
</div>
<!-- ./row -->
</section>
<!-- /.content -->
<?php
$this->load->view('template/js');
?>

<!-- page script -->

<script>
        $( ".users" ).addClass( "active" );
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

<?php
$this->load->view('template/sidebar_theme');
?>

<script>
  function checkPass()
{
    //Store the password field objects into variables ...
    var pass1 = document.getElementById('editpassn');
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
<script>
        $(document).ready(function(){
        setTimeout(function() {
        $('.alrt-success').fadeOut('fast');
        }, 2000); // <-- time in milliseconds
        });
        </script>
</html>