<!-- <div class="content">
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
			</form>
		</div>
	</div>
</div> -->

<div class="body">
    <ul class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
        <li class="breadcrumb " itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="<?php echo base_url(); ?>" class="breadcrumb-label" itemprop="item">Home</a>
            <meta itemprop="position" content="0" />
        </li>
        <li class="breadcrumb " itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="" class="breadcrumb-label" itemprop="item">Ekspedisi</a>
            <meta itemprop="position" content="1" />
        </li>
    </ul>
    <div class="container">
        <h1 class="page-heading">EKSPEDISI</h1>
        <div class="account account--fixed">
            <div class="account-body">
                <form action="<?php echo base_url('billing/inputekspedisi'); ?>" data-create-account-form method="post" class="form">
                    <div class="form-row form-row--half">
                        <div class="form-field" id="FormField_1">
                            <label class="form-label">Nama Penerima</label>
                            <input type="text" data-label="Nama" name="nama" class="form-input" value="<?php echo $this->session->userdata("namacustomer"); ?>">
                        </div>
                    </div>
                    <div class="form-field">
						<label class="form-label" for="giftcertificatecode">
							Gift Certificate Code
						</label>
						<div class="form-prefixPostfix wrap">
							<input class="form-input" id="giftcertificatecode" name="giftcertificatecode">
							<input type="submit" class="button button--primary form-prefixPostfix-button--postfix" value="Check Balance">
						</div>
					</div>
                    <div class="form-actions">
                        <input type="submit" role="button" class="button button--primary" value="Next"/>
                    </div>
                </form>
				<!-- <form class="form form--oneField" id="gift-certificate-balance" method="get">
					<input type="hidden" name="action" value="balance">
					<div class="form-field">
						<label class="form-label" for="giftcertificatecode">
							Gift Certificate Code
						</label>
						<div class="form-prefixPostfix wrap">
							<input class="form-input" id="giftcertificatecode" name="giftcertificatecode">
							<input type="submit" class="button button--primary form-prefixPostfix-button--postfix" value="Check Balance">
						</div>
					</div>
				</form> -->
            </div>
        </div>
    </div>
</div>