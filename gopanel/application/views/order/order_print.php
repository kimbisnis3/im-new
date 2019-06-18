<?php $this->load->helper('indonesian_date') ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">


    <title>INVOICE</title>
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/style-invoice-rev.css" media="all" />
  </head>
  <body>
    <header class="clearfix">
    <script src="<?php echo base_url('assets/AdminLTE/plugins/jQuery/jQuery-2.2.3.min.js') ?>"></script>
  <script>
    $(document).ready(function() { window.print(); });
  </script>
      <div id="logo">
        <img src="<?php echo base_url();?>/gambar/logo.png">

        <?php foreach ($company as $t ) {
           ?>
        <div><?php echo $t->alamat; ?> </div>
        <div><?php echo $t->email; ?></div>
    <?php } ?>
 
      </div>
    </header>
    <main>
      
      <div id="details" class="clearfix">
        <div id="client">
          <div class="to">INVOICE TO:</div>
          <?php
                $no=1;
                foreach($morder as $t)
                { ?>
          <h2 class="name"><?php echo $t->kode;?></h2>
          <div class="address"><?php echo $t->nama;?></div>
          <div class="address"><?php echo $t->alamat;?></div>
          <div class="email"><a href="mailto:<?php echo $t->nama?>"><?php echo $t->email?></a></div>
        </div>
        <div id="invoice">
          <h1>INVOICE</h1>
          <div class="name">No : <b><?php echo $t->kode;?></b></div>
          <div class="date">Date of Invoice: <?php echo indonesian_date($t->tgl);?></div>
          <?php } ?>
        </div>
      </div>
      <table border="0" cellspacing="0" cellpadding="0">
        <thead>
            <tr>
            <th class="no"><b>#</b></th>
            <th class="desc"><b>PRODUCT</b></th>
            <th class="unit"><b>QUANTITY</b></th>
            <th class="qty"><b>UNIT PRICE</b></th>
            <th class="unit"><b>PRICE</b></th>
          </tr>
        </thead>
        <tbody>
            
            
          <?php
          
              $no=1;
              foreach($barang as $t)
                $q = $t->jumlah;
          $v = $t->harga;
          $p = $q*$v ;
              { ?>
              <tr>
                <td><?php echo $no ?></td>
                <td><?php echo $t->nama ?></td>
                <td><?php echo $t->jumlah ?></td>
                <td>Rp. <?php echo number_format($t->harga) ?>
                <td>Rp. <?php echo number_format($p) ?></td>
                <td>
                  <?php
                  $no++;}
                  ?>
                <?php
              $no=1;
              foreach($payship as $t)
              { ?>
              <tr>
              <hr>
                <td></td>
                <td></td>
                <td><STRONG>Biaya Pengiriman</STRONG></td>
                <td><?php echo $t->namaship ?></td>
                <td>Rp. <?php echo number_format($t->biayakirim) ?></td>
                <td>
                  <?php
                  $no++;}
                  ?>
                </tr>
              </tr>
                </tr>
              </tr>
        </tbody>
        <tfoot>
          <?php
              $no=1;
              foreach($total as $t)
              { ?>
              <tr>
              <td></td>
              <td></td>
              <td></td>
                <td><strong>Total Biaya</strong></td>
                <td><strong>Rp. <?php echo number_format($t->subtotal) ?></strong></td>
                  <?php
                  $no++;}
                  ?>
                </tr>
              </tr>
        </tfoot>
      </table>

      <div id="notices">
      </div>
      </br>
      </br>
      
      <table border="0" cellspacing="0" cellpadding="0">
          <tr>
              <td><center>,</center></td>
      <td><center>Karanganyar, <?php echo date('d-m-Y');?></center>
          <center>Yang membuat,</center></td>
          </tr>
          <tr>
              <td></td>
              <td></td>
          </tr>
          <tr>
              <td><center><u>     </u></center>             
              <center><i style="padding-right: 130px;"></i></center></td>
      <td><center><u><?php echo $this->session->userdata('namafull'); ?></u></center>
      <center>Kasir</center></td>
          </tr>
      </table>
      
    </main>
  <center>

    <footer>
      <!--Invoice was created on a computer and is valid without the signature and seal.-->
      Copyright(C)<?=date("Y");?> IM Product
    </footer>
  </center>
  </body>
</html>