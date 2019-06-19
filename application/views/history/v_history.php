<!-- <?php
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
 -->
<div class="body">
	<ul class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
		<li class="breadcrumb " itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
			<a href="<?php echo base_url(); ?>" class="breadcrumb-label" itemprop="item">Home</a>
			<meta itemprop="position" content="0" />
		</li>
		<li class="breadcrumb " itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
			<a href="" class="breadcrumb-label" itemprop="item">History</a>
			<meta itemprop="position" content="1" />
		</li>
	</ul>
	<div class="container-fluid">
		<h1 class="page-heading">History</h1>
		<div class="account account--fixed">
			<div class="account-body">
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th class="center">No</th>
							<th style="text-align: center;">Kode</th>
							<th style="text-align: center;">Tanggal</th>
							<th style="text-align: center;">Alamat Kirim</th>
							<th style="text-align: center;">Product</th>
							<th style="text-align: center;">Harga</th>
							<th style="text-align: center;">Kirim Via</th>
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
		</div>
	</div>
</div>