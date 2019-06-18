<?php
$this->load->helper('indonesian_date')
 ?>
<link rel="stylesheet" href="<?php echo base_url('assets/datatables/dataTables.bootstrap.css')?>">
<div class="content">
	<div class="container-fluid"  style="max-width: 70%">
		<div class="col-md-12 women-dresses">
			<div class="">
        <div class="title">
          <h2>HISTORY</h2>
        </div>
				<div class="holder"></div>
				<div class="articel" style="margin-top: 5%">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>No</th>
								<th>Kode</th>
								<th>Tanggal</th>
								<th>Alamat Kirim</th>
								<th>Product</th>
								<th>Harga</th>
								<th>Kirim Via</th>
							</tr>
						</thead>

						<tbody>
							<?php
							$no=1;
							foreach($mhistory as $t)
							{ ?>
							<tr>
								<td><?php echo $no++ ?></td>
								<td><?php echo $t->kode ?></td>
								<td><?php echo indonesian_date($t->tgl) ?></td>
								<td><?php echo $t->alamatkirim ?></td>
								<td><?php echo $t->namabarang ?></td>
								<td>Rp. <?php echo number_format($t->harga) ?></td>
                <td><?php echo $t->namashipment ?> | Rp. <?php echo number_format($t->hargashipment) ?></td>
							</tr>
							<?php } ?>
					</tbody>
				</table>
			</div>
			<div class="clearfix"></div>

		</div>
	</div>
	<div class="clearfix"></div>
</div>
</div>
<script src="<?php echo base_url('assets/datatables/jquery.dataTables.min.js')?>"></script>
<script>
$( ".history" ).addClass( "active" );
</script>
