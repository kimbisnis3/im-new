<div class="content">
<div class="container">
  <div class="title">
    <h2>CHECKOUT</h2>
  </div>
<div class="form-data">
<div>
</div><br>
<form action="<?php echo base_url('billing/customerinput'); ?>" method="post" role="form" class="contactForm">
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
                </div>
                <div class="col-md-8" >
                </div>
            </div><!--/.row-->

            </form>
</div>
</div>
</div>
