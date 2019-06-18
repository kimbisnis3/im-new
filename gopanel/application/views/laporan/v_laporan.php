<?php $this->load->helper('indonesian_date') ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>INVOICE</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<!--
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/style-invoice-rev.css" media="all" />-->
  <style>
  	@font-face {
  font-family: SourceSansPro;
  src: url(SourceSansPro-Regular.ttf);
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}

a {
  color: #0087C3;
  text-decoration: none;
}

body {
  position: relative;
  width: 24cm;  
  height: 29.7cm; 
  margin: 0 auto; 
  color: #555555;
  background: #FFFFFF; 
  font-family: Arial, sans-serif; 
  font-size: 14px; 
  font-family: SourceSansPro;
}

header {
  padding: 10px 0;
  margin-bottom: 20px;
  border-bottom: 1px solid #AAAAAA;
}

#logo {
  float: left;
  margin-top: 0px;
}

#logo img {
  height: 50px;
}

#company {
  float: left;
  text-align: left;
}


#details {
  margin-bottom: 50px;
}

#client {
  padding-left: 6px;
  border-left: 6px solid #0087C3;
  float: left;
}

#client .to {
  color: #777777;
}

h2.name {
  font-size: 1.4em;
  font-weight: normal;
  margin: 0;
}

#invoice {
  float: right;
  text-align: right;
}

#invoice h1 {
  color: #0087C3;
  font-size: 2.4em;
  line-height: 1em;
  font-weight: normal;
  margin: 0  0 10px 0;
}

#invoice .date {
  font-size: 1.1em;
  color: #777777;
}

table {
  width: 100%;
  border-collapse: collapse;
  border-spacing: 0;
  margin-bottom: 20px;
}

table th,
table td {
  padding: 20px;
/*  background: #EEEEEE;*/
  text-align: center;
  border-bottom: 1px solid #FFFFFF;
}

table th {
  white-space: nowrap;        
  font-weight: normal;
}

table td {
  text-align: right;
}

table td h3{
  color: #000000;
  font-size: 1.2em;
  font-weight: normal;
  margin: 0 0 0.2em 0;
}

table .no {
  font-size: 1.2em;
  background: #DDDDDD;
}

table .desc {
  text-align: left;
  background: #EEEEEE;
}

table .unit {
  background: #DDDDDD;
}

table .qty {
  background: #EEEEEE;
}

table .total {
  background: #DDDDDD;
}

table td.unit,
table td.qty,
table td.total {
  font-size: 1.2em;
}

table tbody tr:last-child td {
  border: none;
}

table tfoot td {
  padding: 10px 20px;
  background: #FFFFFF;
  border-bottom: none;
  font-size: 1.2em;
  white-space: nowrap; 
  border-top: 1px solid #AAAAAA; 
}

table tfoot tr:first-child td {
  border-top: none; 
}

table tfoot tr:last-child td {
  color: #000000;
  font-size: 1.4em;
  border-top: 1px solid #000000; 

}

table tfoot tr td:first-child {
  border: none;
}

#thanks{
  font-size: 1.5em;
  margin-bottom: 50px;

}

#notices{
  padding-left: 6px;
  border-left: 6px solid #0087C3;  
  border-top: 1px solid #AAAAAA;
}

#notices .notice {
  font-size: 1.2em;
}

footer {
  color: #777777;
  width: 100%;
  height: 30px;
  position: absolute;
  bottom: 0;
  border-top: 1px solid #AAAAAA;
  padding: 8px 0;
  text-align: center;
}


  </style>
    <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE/plugins/datatables/dataTables.bootstrap.css')?>">
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
        </div>
      </div>
      <table id="example1" class="table table-bordered table-striped">
        <thead>
                <tr>
                  <th>Kode Transaksi</th>
                  <th>Referensi Kode</th>
                  <th>Tanggal</th>
                  <th>Nama Pemesan</th>
                  <th>Alamat</th>
                  <th>Penerima</th>
                  <th>Alamat Penerima</th>
                  <th>Nama Barang</th>
                  <th>Jenis Barang</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach($mlaporan as $t)
                { ?>
                <tr>
                  <td><?php echo $t->kode ?></td>
                <td><strong><?php echo $t->koderef ?></strong></td>
                  <td><?php echo indonesian_date($t->tgl) ?></td>
                  <td><?php echo $t->nama ?></td>
                  <td><?php echo $t->alamat ?></td>
                  <td><?php echo $t->penerima ?></td>
                  <td><?php echo $t->alamatkirim ?></td>
                  <td><?php echo $t->namabarang ?></td>
                  <td><?php echo $t->namajenisbarang ?></td>
                        <?php
                        }
                        ?>
                      </tr>
                    </tr>
                  </tbody>
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
  <script src="<?php echo base_url('assets/AdminLTE/plugins/datatables/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('assets/AdminLTE/plugins/datatables/dataTables.bootstrap.min.js')?>"></script>

</html>