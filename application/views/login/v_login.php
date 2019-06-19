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
			<form action='<?php echo base_url();?>login/login' method='post' name='process'>
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
	
	<div class="container">
		<div class="login">
			<ul class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
			<li class="breadcrumb " itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
				<a href="<?php echo base_url(); ?>" class="breadcrumb-label" itemprop="item">Home</a>
				<meta itemprop="position" content="0" />
			</li>
			<li class="breadcrumb " itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
				<a href="" class="breadcrumb-label" itemprop="item">Login</a>
				<meta itemprop="position" content="1" />
			</li>
		</ul>
			<h1 class="page-heading">Sign in</h1>
			<div class="login-row">
				<?php echo $this->session->flashdata('message');?>
				<form class="login-form form" action="<?php echo base_url();?>login/login" method="post">
					
					<div class="form-field">
						<label class="form-label" for="login_email">Username:</label>
						<input class="form-input" name="nama" type="text">
					</div>
					<div class="form-field">
						<label class="form-label" for="login_pass">Password:</label>
						<input class="form-input" id="login_pass" type="password" name="pass">
					</div>
					<div class="form-actions">
						<input type="submit" class="button button--primary" value="Sign in">
					</div>
				</form>
				<div class="new-customer">
					<div class="panel">
						<div class="panel-header">
							<h2 class="panel-title">New Customer?</h2>
						</div>
						<div class="panel-body">
							<p class="new-customer-intro">Create an account with us and you&#x27;ll be able to:</p>
							<ul class="new-customer-fact-list">
								<li class="new-customer-fact">Check out faster</li>
								<li class="new-customer-fact">Easy shopping</li>
								<!-- <li class="new-customer-fact">Save multiple shipping addresses</li> -->
								<li class="new-customer-fact">Access your order history</li>
								<!-- <li class="new-customer-fact">Track new orders</li>
								<li class="new-customer-fact">Save items to your Wish List</li> -->
							</ul>
							<a href="<?php echo base_url();?>register"><button class="button button--primary">Create Account</button></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="modal" class="modal" data-reveal data-prevent-quick-search-close>
		<a href="#" class="modal-close" aria-label="Close" role="button">
			<span aria-hidden="true">&#215;</span>
		</a>
		<div class="modal-content"></div>
		<div class="loadingOverlay"></div>
	</div>
</div>
