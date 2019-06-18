<div class="content">
<div class="container">
  <div class="title">
    <h2>SHIPMENT</h2>
  </div>
<div class="form-data">
    <form action='<?php echo base_url();?>billing/inputshipment' method='post' name='process'>
   <div class="form-group">
     <label class="lb">Pengiriman</label>
        <select name="shipment" class="form-control" style="width: 100%;">
        <option value="">- Pilih Shipment -</option>
		<?php
		foreach($mshipment as $t)
		{
		?>
		<option value="<?php echo $t->kode ?>">
			<?php echo $t->nama ?> (Rp. <?php echo number_format($t->harga) ?>)
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
