<div class="content">
	<div class="container-fluid"  style="max-width: 70%">
		<div class="form-artikel">
			<div class=""><?php foreach ($mkontak as $t)
							{
							?>
							<div class="title">
								<h2><?php echo $t->judul; ?></h2>
							</div>
					<img style=" margin: 0 auto; width: 50%;"  src="<?php echo base_url('gopanel/uploads/kontak/'.$t->image); ?>">
					<div class="holder"></div>
					<div class="articel" style="margin-top: 5%"><?php echo $t->artikel; ?></div>
						<div class="clearfix"></div>
					<?php } ?>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
<script>
$( ".kontak" ).addClass( "active" );
</script>
