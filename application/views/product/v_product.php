<div class="products">
	<div class="holder-box">

	</div>
		<div class="container">
			<div class="single-page">
				<div class="single-page-row" id="detail-21">
					<div class="col-md-6 single-top-left">
						<div class="flexslider">
							<ul class="slides">
							<?php foreach ($mproduct as $t) { ?>
								<li data-thumb="images/s1.jpg">
									<div class="thumb-image detail_images"> <img id="zoom_01" src="<?php echo base_url('gopanel/uploads/barang/'.$t->image); ?>" data-imagezoom="true" data-zoom-image="<?php echo base_url('gopanel/uploads/barang/'.$t->image); ?>" class="img-responsive" alt=""> </div>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-6 single-top-right">
						<div class="title">
							<h2><?php echo $t->nama; ?></h2>
						</div>
						<p>Akan diproses dalam 2 sampai 3 hari </p>
						<div class="single-price">
							<ul>
								<li>Rp. <?php echo number_format($t->harga); ?></li>

							</ul>
						</div>
						<p class="single-price-text"><?php echo $t->ket; ?></p>
						<form id="form" action="<?php echo base_url('shop/add'); ?>" method="post">
									<input type="hidden" name="kode" value="<?php echo $t->kode; ?>" />
									<input type="hidden" name="nama" value="<?php echo $t->nama; ?>" />
									<input type="hidden" name="harga" value="<?php echo $t->harga; ?>" />
							<button type="submit" class="btn btn-primary btn-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
						</form>
					</div>
				   <div class="clearfix"> </div>
				</div>
			</div>
				<?php } ?>
			<!-- //collapse -->
		</div>
		<div class="holder-box">

		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="<?php echo base_url('assets/js/jquery.elevatezoom.js'); ?>"></script>
	<!--<script src="<?php echo base_url('assets/js/imagezoom.js'); ?>"></script>-->
	<script>
    $("#zoom_01").elevateZoom();
</script>
