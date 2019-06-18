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
  <!-- Date Picker -->
  <link href="<?php echo base_url('assets/AdminLTE/plugins/datepicker/datepicker3.css') ?>" rel="stylesheet" type="text/css" />
  <!-- Daterange picker -->
  <link href="<?php echo base_url('assets/AdminLTE/plugins/daterangepicker/daterangepicker.css') ?>" rel="stylesheet" type="text/css" />
  <!-- bootstrap wysihtml5 - text editor -->
  <link href="<?php echo base_url('assets/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') ?>" rel="stylesheet" type="text/css" />
  <?php
  $this->load->view('template/sidebar');
  $this->load->helper('indonesian_date');
  ?>
  <section class="content-header">
    <h1>
    Detail Order
    <small>
    </small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url('index.php/Profil') ?>"><i class="fa fa-dashboard"></i> Admin</a></li>
      <li><a href="<?php echo base_url('index.php/Lamaran') ?>">Detail Order</a></li>
      <li class="active">Detail Data Pelamar</li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-6">
        <!-- /.box -->
        <div class="box">
          <!-- /.box-header -->
          <div class="box-body pad">
            <table id="example1" class="table table-bordered table-striped">
              <tbody>
                <?php
                $no=1;
                foreach($morder as $t)
                { ?>
                <!-- Creates the bootstrap modal where the image will appear -->
                <tr>
                  <td>Kode Transaksi</td><td><?php echo $t->kode ?></td>
                </tr>
                <tr>
                  <td>Tanggal</td><td><?php echo indonesian_date($t->tgl) ?></td>
                </tr>
                <tr>
                  <td>Nama</td><td><?php echo $t->nama ?><?php
                  if ($t->guest=='f') {
                  echo '<span class="label label-success">Member</span>' ;
                  }
                  else{ echo "";
                }?></td>
              </tr>
              <tr>
                <td>Alamat</td><td><?php echo $t->alamat ?></td>
              </tr>
              <tr>
                <td>Nama Penerima</td><td><?php echo $t->penerima ?></td>
              </tr>
              <tr>
                <td>Alamat Kirim</td><td><?php echo $t->alamatkirim ?></td>
              </tr>
              <tr>
                <td>Telp Penerima</td><td><?php echo $t->telppenerima ?></td>
              </tr>
              <tr>
                <td>Status Order</td><td><?php echo $t->namastatus ?></td>
              </tr>
              
              <tr>
                <td></td>
                <td><a href="<?php echo site_url('order') ?>" class="btn btn-info pull-right" role="button">Kembali</a></td>
                <?php } ?>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <!-- /.box -->
      <div class="box">
        <!-- /.box-header -->
        <div class="box-body pad">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Product</th>
                <th>Jumlah</th>
                <th>Harga</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no=1;
              foreach($barang as $t)
              { ?>
              <tr>
                <td><?php echo $no ?></td>
                <td><?php echo $t->nama ?></td>
                <td><?php echo $t->jumlah ?></td>
                <td>Rp. <?php echo number_format($t->harga) ?></td>
                <td>
                  <?php
                  $no++;}
                  ?>
                </tr>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <!-- /.box -->
      <div class="box">
        <!-- /.box-header -->
        <div class="box-body pad">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Nama Bank</th>
                <th>Jenis Pengiriman</th>
                <th>Biaya Pengiriman</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no=1;
              foreach($payship as $t)
              { ?>
              <tr>
                <td><?php echo $t->namapay ?></td>
                <td><?php echo $t->namaship ?></td>
                <td>Rp. <?php echo number_format($t->biayakirim) ?></td>
                <td>
                  <?php
                  $no++;}
                  ?>
                </tr>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <!-- /.box -->
      <div class="box">
        <!-- /.box-header -->
        <div class="box-body pad">
          <table id="example1" class="table table-bordered table-striped">
            <tbody>
              <?php
              $no=1;
              foreach($total as $t)
              { ?>
              <tr>
                <td><strong>Total Biaya</strong></td>
                <td>Rp. <?php echo number_format($t->subtotal) ?></td>
                  <?php
                  $no++;}
                  ?>
                </tr>
              </tr>
            </tbody>
          </table>
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
<script src="<?php echo base_url('assets/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') ?>" type="text/javascript"></script>
<script>
$( ".lowonganpelamar" ).addClass( "active" );
</script>
<script>
$( ".pelamar" ).addClass( "active" );
</script>
<script>

</script>
<!-- page script -->
<?php
$this->load->view('template/sidebar_theme');
?>
</html>