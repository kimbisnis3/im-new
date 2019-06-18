<!-- <div class="content">
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
				</form>
			</div>
		</div>
	</div>
</div>
 -->
<div class="body">
    <ul class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
        <li class="breadcrumb " itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="<?php echo base_url(); ?>" class="breadcrumb-label" itemprop="item">Home</a>
            <meta itemprop="position" content="0" />
        </li>
        <li class="breadcrumb " itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="" class="breadcrumb-label" itemprop="item">Alamat Kirim</a>
            <meta itemprop="position" content="1" />
        </li>
    </ul>
    <div class="container">
        <h1 class="page-heading">ALAMAT KIRIM</h1>
        <div class="account account--fixed">
            <div class="account-body">
                <form action="<?php echo base_url('billing/inputalamat'); ?>" data-create-account-form method="post" class="form">
                    <div class="form-row form-row--half">
                        <div class="form-field" id="FormField_1">
                            <label class="form-label">Nama Penerima</label>
                            <input type="text" data-label="Nama" name="nama" class="form-input" value="<?php echo $this->session->userdata("namacustomer"); ?>">
                        </div>

                        <div class="form-field" id="FormField_1">
                            <label class="form-label">No Telepon Penerima</label>
                            <input type="text" data-label="No Telepon Penerima" name="telppenerima" class="form-input" value="<?php echo $this->session->userdata("telp"); ?>">
                        </div>

                        <div class="form-field" id="FormField_1">
                            <label class="form-label">Alamat Kirim</label>
                            <input type="text" data-label="Alamat Kirim" name="alamatkirim" class="form-input" value="<?php echo $this->session->userdata("alamatcustomer"); ?>">
                        </div>
                    </div>
                    <div class="form-actions">
                        <input type="submit" role="button" class="button button--primary" value="Next"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>