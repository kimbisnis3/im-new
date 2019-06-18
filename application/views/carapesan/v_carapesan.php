<div class="content">
	<div class="container">
		<div class="form-artikel">
			<div class=""><?php foreach ($mcarapesan as $t)
							{
							?>
					<div class="tab-1 ">
						<div class="title">
			        <h2><?php echo $t->judul; ?></h2>
			      </div>
					<img style="width: 50%" src="<?php echo base_url('gopanel/uploads/carapesan/'.$t->image); ?>">
					<div class=""><?php echo $t->artikel; ?></div>
						<div class="clearfix"></div>
					</div>
					<?php } ?>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
<script>
$( ".carapesan" ).addClass( "active" );
</script>
