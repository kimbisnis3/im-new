<!-- <div class="content">
	<div class="container">
		<style media="screen">
		</style>
		<div class="title">
			<h2>CUSTOMER LOGIN</h2>
		</div>
		<div>
			<p style="margin: 0 auto;"><?php echo $this->session->flashdata('message');?></p>
		</div>
		<div class="form-login" >
			<form action='<?php echo base_url();?>login/aksi_login' method='post' name='process'>
				<div class="form-group">
					<label>Username</label>
					<input type="text" name="nama" class="form-control" placeholder="username"/ required>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="pass" class="form-control" placeholder="password" required />
				</div>
				<div class="row">
					<div class="col-md-6">
						<button type="submit" class="btn btn-success">login</button>
					</div>
				</div>
			</form>
		</div>
		<div class="holder-box">
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
            <a href="" class="breadcrumb-label" itemprop="item">Customer Login</a>
            <meta itemprop="position" content="1" />
        </li>
    </ul>
    <div class="container">
        <h1 class="page-heading">CUSTOMER LOGIN</h1>
        <h1 class="page-heading"><?php echo $this->session->flashdata('message');?></h1>
        <div class="account account--fixed">
            <div class="account-body">
                <form action="<?php echo base_url();?>login/aksi_login" data-create-account-form method="post" class="form">
                    <div class="form-row form-row--half">
                        <div class="form-field" id="FormField_1">
                            <label class="form-label">Username</label>
                            <input type="text" data-label="Nama" name="nama" class="form-input">
                        </div>

                        <div class="form-field" id="FormField_1">
                            <label class="form-label">Password</label>
                            <input type="text" data-label="Password" name="pass" class="form-input">
                        </div>
                    </div>
                    <div class="form-actions">
                        <input type="submit" role="button" class="button button--primary" value="Next"></input>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>