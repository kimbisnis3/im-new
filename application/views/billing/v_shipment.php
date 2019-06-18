<!-- <div class="content">
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
            <a href="" class="breadcrumb-label" itemprop="item">Shipment</a>
            <meta itemprop="position" content="1" />
        </li>
    </ul>
    <div class="container">
        <h1 class="page-heading">SHIPMENT</h1>
        <div class="account account--fixed">
            <div class="account-body">
                <form action="<?php echo base_url('billing/inputshipment'); ?>" data-create-account-form method="post" class="form">
                  <div class="form-field">
                    <label class="form-label" for="giftcertificatecode">
                      Pengiriman
                    </label>
                    <div class="form-prefixPostfix wrap">
                      <select name="shipment" class="form-select" style="width: 100%;">
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
                  </div>
                    <div class="form-actions">
                        <input type="submit" role="button" class="button button--primary" value="Next"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>