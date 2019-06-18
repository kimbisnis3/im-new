<!-- <style type="text/css">
.form-artikel {
width: 50%;
border: 3px solid;
}
</style>
<div class="content">
    <div class="container">
        <div class="title">
            <h2>REGISTER</h2>
        </div>
        <div class="form-artikel">
            <form action="<?php echo base_url('register/add'); ?>" method="post" role="form" class="contactForm">
                <div class="form-group">
                    <label class="lb">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukan Nama" value="">
                    <div class="validation"></div>
                </div>
                <div class="form-group">
                    <label class="lb">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Masukan alamat" value=""/ >
                    <div class="validation"></div>
                </div>
                <div class="form-group">
                    <label class="lb">Telepon</label>
                    <input type="text" class="form-control" name="telp" id="telp" placeholder="Masukan Telepon" value=""  />
                    <div class="validation"></div>
                </div>
                <div class="form-group">
                    <label class="lb">Email</label>
                    <input type="text" class="form-control" name="email" id="email" placeholder="Masukan Email"  value="<?php echo $this->session->userdata('emailregister') ?>"/>
                    <div class="validation"></div>
                </div>
                <div class="form-group">
                    <label class="lb">Username</label>
                    <input type="text" class="form-control" name="username" id="username" placeholder="Masukan Username"  value=""/>
                    <div class="validation"></div>
                </div>
                <div class="form-group">
                    <label class="lb">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Masukan Password"  value=""/>
                    <div class="validation"></div>
                </div>
                <div class="form-group">
                    <label class="lb">Ketik Ulang Password</label>
                    <input type="password" class="form-control" name="ulangpassword" id="password" placeholder="Masukan Password"  value=""/>
                    <div class="validation"></div>
                </div>
                <input type="submit" role="button" class="btn btn-primary" value="Kirim"></input>
            </div>
            <div class="col-md-8" >
            </div>
            </div><

        </form>
    </div>
-->
<div class="body">
    <ul class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
            <li class="breadcrumb " itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a href="<?php echo base_url(); ?>" class="breadcrumb-label" itemprop="item">Home</a>
                <meta itemprop="position" content="0" />
            </li>
            <li class="breadcrumb " itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a href="" class="breadcrumb-label" itemprop="item">Register</a>
                <meta itemprop="position" content="1" />
            </li>
        </ul>
    <div class="container">
        <div class="account account--fixed">
        <div class="account-body">
            <form action="<?php echo base_url('register/add'); ?>" data-create-account-form method="post" class="form">
                <div class="form-row form-row--half">

                    <div class="form-field" id="FormField_1"  data-type="EmailAddress">
                        <label class="form-label" for="FormField_1_input">Nama</label>
                        <input type="text" id="FormField_1_input" data-label="Nama" name="nama"  class="form-input" aria-required="true" data-field-type="EmailAddress">
                    </div>

                    <div class="form-field" id="FormField_2">
                        <label class="form-label" for="FormField_2_input">Alamat</label>
                        <input type="text"  class="form-input" id="FormField_2_input" data-label="Alamat" name="alamat" value="" autocomplete="off" aria-required="true">
                    </div>

                    <div class="form-field" id="FormField_3" data-type="ConfirmPassword">
                        <label class="form-label" for="FormField_3_input">Telepon</label>
                        <input type="password"  class="form-input" id="FormField_3_input" data-label="Telepon" name="telp" value="" autocomplete="off" aria-required="true" data-field-type="ConfirmPassword">
                    </div>

                    <div class="form-field" id="FormField_2">
                        <label class="form-label" for="FormField_2_input">Email</label>
                        <input type="text"  class="form-input" id="FormField_2_input" data-label="Email" name="email" value="<?php echo $this->session->userdata('emailregister') ?>" autocomplete="off" aria-required="true" data-field-type="Password">
                    </div>

                    <div class="form-field" id="FormField_3" data-type="ConfirmPassword">
                        <label class="form-label" for="FormField_3_input">Username</label>
                        <input type="password"  class="form-input" id="FormField_3_input" data-label="USername" name="username" value="" autocomplete="off" aria-required="true" data-field-type="ConfirmPassword">
                    </div>

                    <div class="form-field" id="FormField_2">
                        <label class="form-label" for="FormField_2_input">Password</label>
                        <input type="password"  class="form-input" id="FormField_2_input" data-label="Password" name="password" value="" autocomplete="off" aria-required="true" data-field-type="Password">
                    </div>

                    <div class="form-field" id="FormField_2">
                        <label class="form-label" for="FormField_2_input">Ketik Ulang Password</label>
                        <input type="password"  class="form-input" id="FormField_2_input" data-label="Ketik Ulang password" name="ulangpassword" value="" autocomplete="off" aria-required="true" data-field-type="Password">
                    </div>

                </div>
                
                <div class="form-actions">
                    <input type="submit" class="button button--primary" value="Create Account" />
                </div>
            </form>
        </div>
    </div>
</div>