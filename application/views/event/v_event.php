<div class="content">
	<div class="container">
		<style media="screen">
			.img-artikel {
				width: 50%;
			}
		</style>
		<div class="form-artikel">
			<div class=""><?php foreach ($mevent as $t)
							{
							?>
					<div class="tab-1 ">
						<div class="title">
					    <h2><?php echo $t->judul; ?></h2>
					  </div>
					<img class="img-artikel" src="<?php echo base_url('gopanel/uploads/event/'.$t->image); ?>">
					<div><?php echo $t->artikel; ?></div>
						<div class="clearfix"></div>
					</div>
					<?php } ?>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
<script>
$( ".event" ).addClass( "active" );
</script>
