<div class="content">
	<div class="container">
		<div class="title">
	    <h2>ALAMAT KIRIM</h2>
	  </div>
		<div class="">
			<div class="form-data">
				<form action='<?php echo base_url();?>billing/inputalamat' method='post' name='process'>
				<div class="form-group">
				 <label class="lb">Nama Penerima</label>
					<input placeholder="Masukan Penerima" class="form-control" type="text" name="penerima" value="<?php echo $this->session->userdata("namacustomer"); ?>"/>
				</div>
                <div class="form-group">
				 <label class="lb">No Telepon Penerima</label>
					<input placeholder="Masukan No Telepon Penerima" class="form-control" type="text" name="telppenerima" value="<?php echo $this->session->userdata("telp"); ?>"/>
				</div>
				<div class="form-group">
				 <label class="lb">Alamat Kirim</label>
					<input placeholder="Masukan Alamat" class="form-control" type="text" name="alamatkirim" value="<?php echo $this->session->userdata("alamatcustomer"); ?>"/>
				</div>
					<button type="submit" class="btn btn-primary">selanjutnya</button>
					<!--<p class="message">Bukan Member? <a href="#">Hubungi Admin</a></p>-->
				</form>
				</div>
			</div>
		</div>
	</div>
