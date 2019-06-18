<!-- <div class="content">
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
			</form>
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
            <a href="" class="breadcrumb-label" itemprop="item">Payment</a>
            <meta itemprop="position" content="1" />
        </li>
    </ul>
    <div class="container">
        <h1 class="page-heading">PAYMENT</h1>
        <div class="account account--fixed">
            <div class="account-body">
                <form action="<?php echo base_url('billing/inputmetodepembayaran'); ?>" data-create-account-form method="post" class="form">
                  <div class="form-field">
                    <label class="form-label" for="giftcertificatecode">
                      Metode Pembayaran
                    </label>
                    <div class="form-prefixPostfix wrap">
                      <select name="payment" class="form-select" style="width: 100%;">
                      	<option value="">- Pilih Bank -</option>
                        <?php foreach($mpayment as $t) { ?>
                        <option value="<?php echo $t->kode ?>">
                          <?php echo $t->nama ?> - <?php echo $t->norek ?>
                        </option>
                        <?php }?>
                      </select>
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