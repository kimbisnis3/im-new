<div class="content">
	<div class="container-fluid"  style="max-width: 70%">
		<div class="form-data">
			<div class=""><?php foreach ($mabout as $t)
							{
							?>
							<div class="title">
								<h2><?php echo $t->judul; ?></h2>
							</div>
					<img style="width: 50%;"  src="<?php echo base_url('gopanel/uploads/profil/'.$t->image); ?>">
					<div class="holder"></div>
					<div class="" style="margin-top: 5%"><?php echo $t->artikel; ?></div>
						<div class="clearfix"></div>
					<?php } ?>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
<script>
$( ".about" ).addClass( "active" );
</script>
