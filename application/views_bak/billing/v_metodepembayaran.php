<div class="content">
<div class="container">
  <div class="title">
    <h2>PAYMENT</h2>
  </div>
<div class="form-data">
    <form action='<?php echo base_url();?>billing/inputmetodepembayaran' method='post' name='process'>
    <div class="form-group">
        <select class="form-control" name="payment" class="" style="width: 100%;">
        <option value="">- Pilih Bank -</option>
		<?php
		foreach($mpayment as $t)
		{
		?>
		<option value="<?php echo $t->kode ?>">
			<?php echo $t->nama ?> - <?php echo $t->norek ?>
		</option>
		<?php }?>
	</select>
	</div>
        <button type="submit" class="btn btn-primary">selanjutnya</button>
        <!--<p class="message">Bukan Member? <a href="#">Hubungi Admin</a></p>-->
    </form>
</div>
</div>
</div>
