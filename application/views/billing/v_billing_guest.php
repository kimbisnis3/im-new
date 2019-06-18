<!-- <div class="content">
    <div class="container">
        <div class="title">
            <h2>CHECKOUT</h2>
        </div>
        <div class="form-data">
            <div>
                <a href="<?php echo base_url('billing'); ?>"><p class="pull-right" style="font-weight: bolder">Login </p></a>
                <p class="pull-right"> Already Have Account ? </p>
            </div><br>
            <form action="<?php echo base_url('billing/guestinput'); ?>" method="post" role="form" class="contactForm">
                <div class="form-group">
                    <label class="lb">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukan Nama" value="<?php echo $this->session->userdata("namacustomer"); ?>">
                    <div class="validation"></div>
                </div>
                <div class="form-group">
                    <label class="lb">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Masukan alamat" value="<?php echo $this->session->userdata("alamatcustomer"); ?>"/ >
                    <div class="validation"></div>
                </div>
                <div class="form-group">
                    <label class="lb">Telepon</label>
                    <input type="text" class="form-control" name="telp" id="telp" placeholder="Masukan Telepon" value="<?php echo $this->session->userdata("telp"); ?>"  />
                    <div class="validation"></div>
                </div>
                <div class="form-group">
                    <label class="lb">Email</label>
                    <input type="text" class="form-control" name="email" id="email" placeholder="Masukan Email"  value="<?php echo $this->session->userdata("email"); ?>"/>
                    <div class="validation"></div>
                </div>
                <input type="submit" role="button" class="btn btn-primary" value="Next"></input>
                <div class="col-md-8" >
                </div>
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
            <a href="" class="breadcrumb-label" itemprop="item">Guest</a>
            <meta itemprop="position" content="1" />
        </li>
    </ul>
    <div class="container">
        <h1 class="page-heading">Checkout</h1>
        <div class="account account--fixed">
            <div class="account-body">
                <form action="<?php echo base_url('billing/guestinput'); ?>" data-create-account-form method="post" class="form">
                    <div class="form-row form-row--half">
                        <div class="form-field" id="FormField_1">
                            <label class="form-label">Nama</label>
                            <input type="text" data-label="Nama" name="nama" class="form-input" value="<?php echo $this->session->userdata("namacustomer"); ?>">
                        </div>

                        <div class="form-field" id="FormField_1">
                            <label class="form-label">Alamat</label>
                            <input type="text" data-label="Alamat" name="alamat" class="form-input" value="<?php echo $this->session->userdata("alamatcustomer"); ?>">
                        </div>

                        <div class="form-field" id="FormField_1">
                            <label class="form-label">Telepon</label>
                            <input type="text" data-label="Telepon" name="telp" class="form-input" value="<?php echo $this->session->userdata("telp"); ?>">
                        </div>

                        <div class="form-field" id="FormField_1">
                            <label class="form-label">Email</label>
                            <input type="text" data-label="Email" name="email" class="form-input" value="<?php echo $this->session->userdata("email"); ?>">
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