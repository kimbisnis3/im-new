<div class="content">
<div class="container">
<h3 class="titles">EKSPEDISI</h3>
<div class="center">
    <form action='<?php echo base_url();?>billing/inputekspedisi' method='post' name='process'>
   <div class="form-group">
     <label class="lb">Ekpedisi</label>
        <select name="ekspedisi" class="form-control" style="width: 100%;">
		<?php
		foreach($mekspedisi as $t)
		{
		?>
		<option value="<?php echo $t->kode ?>"><?php echo $t->nama ?>
			
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

