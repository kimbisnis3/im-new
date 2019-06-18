<div class="content">
	<div class="container">
<style media="">

</style>
		<div class="col-md-12 women-dresses">
		<?php foreach ($mtitlekategori as $p) {
		?>
		<div class="title">
			<h2><?php echo $p->nama; ?></h2>
		</div>
		<?php } ?>
			<div class="">
					<div class="tab-1 ">
					<?php
					foreach ($mkategori as $t ) {

					 ?>
						<div class="col-md-3 top-product-grids tp1 animated wow slideInUp" data-wow-delay=".5s">
							<a href="<?php echo base_url('product/detail/'.$t->slug); ?>"><div class="product-img">
								<img src="<?php echo base_url('gopanel/uploads/barang/'.$t->image); ?>" alt="" class="imgbarang"/>
								<div class="p-mask">
								<form id="form" action="<?php echo base_url('shop/add'); ?>" method="post">
									<input type="hidden" name="kode" value="<?php echo $t->kode; ?>" />
									<input type="hidden" name="nama" value="<?php echo $t->nama; ?>" />
									<input type="hidden" name="harga" value="<?php echo $t->harga; ?>" />
									<button type="submit" class="btn btn-primary btn-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form>
								</div>
							</div></a>
							<h4><?php echo $t->nama; ?></h4>
							<h5>Rp <?php echo number_format($t->harga); ?></h5>
						</div>
						<?php } ?>
						<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
<script>
$( ".kategori" ).addClass( "active" );
</script>
