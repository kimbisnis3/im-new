<?php $this->load->helper('text'); ?>
<style>
td {
	padding-top : 5px;
	padding-bottom : 5px;
	padding-left : 0px;
}
th  {
	padding-left: 20px;
}
</style>
<div class="header-bottom-w3ls" style="position: fixed; z-index: 999; min-width: 100%;">
	<div class="container">
		<div class="col-md-1 cart-wthree pull-right">
			<div class="cart">
				<button class="w3view-cart" data-toggle="modal" data-target="#cart" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
				<?php  $rows = $this->cart->total_items(); ?>
				<?php
				if ($rows != 0) {
					echo $rows;
				}
				else {
					echo "";
				}
				?></button>
			</div>
		</div>
		<div class="col-md-8 navigation-agileits pull-right">
			<nav class="navbar navbar-default navbar-right">
				<div class="navbar-header nav_2 " style="z-index: 999">
					<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
				</div>
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav ">
						<li class="home "><a href="<?php echo base_url(''); ?>" class="hyper "><span>Home</span></a></li>
						<li class="dropdown kategori">
							<a href="#" class="dropdown-toggle  hyper" data-toggle="dropdown" ><span>Category<b class="caret"></b></span></a>
							<ul class="dropdown-menu multi">
								<div class="row">
									<div class="col-sm-12">
										<ul class="multi-column-dropdown">
											<?php
											foreach ($mkategori as $t)
											{
											?>
											<li><a href="<?php echo base_url('kategori/daftar/'.$t->slug) ?>"><i class="fa fa-angle-right" aria-hidden="true"></i>
											<?php echo $t->namakategori; ?></a></li>
											<?php } ?>
										</ul>
										
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
						</li>
						<li class="dropdown subkategori">
							<a href="#" class="dropdown-toggle hyper" data-toggle="dropdown" ><span> Sub Category <b class="caret"></b></span></a>
							<ul class="dropdown-menu multi multi1">
								<div class="row">
									<div class="col-sm-12">
										<ul class="multi-column-dropdown">
											<?php
												foreach ($msubkategori as $t)
												{
											?>
											<li><a href="<?php echo base_url('subkategori/daftar/'.$t->slug) ?>"><i class="fa fa-angle-right" aria-hidden="true"></i><?php echo $t->namasubkategori; ?> </a></li>
											<?php } ?>
										</ul>
										
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
						</li>
						<li class="dropdown event">
							<a href="#" class="dropdown-toggle hyper" data-toggle="dropdown" ><span> Event <b class="caret"></b></span></a>
							<ul class="dropdown-menu multi multi1">
								<div class="row">
									<div class="col-sm-12">
										<ul class="multi-column-dropdown">
											<?php
												foreach ($mevent as $t)
												{
											?>
											<li><a href="<?php echo base_url('event/daftar/'.$t->slug) ?>"><i class="fa fa-angle-right" aria-hidden="true"></i><?php echo $t->judul; ?> </a></li>
											<?php } ?>
										</ul>
										
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
						</li>
						<li><a href="<?php echo base_url('about'); ?>" class="hyper about"><span>About</span></a></li>
						<li><a href="<?php echo base_url('kontak'); ?>" class="hyper"><span>Contact Us</span></a></li>
						<?php
						$isLogin= $this->session->userdata('masuk');
							if (isset($isLogin)==true)
						{
						echo '<li class="dropdown event">
									<a href="#" class="dropdown-toggle hyper" data-toggle="dropdown" ><span><i class="fa fa-user" aria-hidden="true"></i>'.word_limiter($this->session->userdata("username"),5).'<b class="caret"></b></span></a>
									<ul class="dropdown-menu multi multi1">
											<div class="row">
													<div class="col-sm-12">
															<ul class="multi-column-dropdown">
																	<li><a href="'. base_url("history").'"><i class="fa fa-angle-right" aria-hidden="true"></i> History Pembelian</a></li>
											<li><a href="'. base_url("logout").'"><i class="fa fa-angle-right" aria-hidden="true"></i> Logout</a></li>
															</ul>
															
													</div>
													<div class="clearfix"></div>
												</div>
									</ul>
						</li>';
						}
						else
						{
						echo '';
						}
						
						?>
					</ul>
				</div>
			</nav>
		</div>
		<div class="col-md-3">
			<?php
			foreach ($mlogo as $t)	{?>
			<a href="<?php echo base_url(''); ?>"><img class="logo" src="<?php echo base_url('gopanel/uploads/logo/'.$t->image); ?>">
			</a>
			<?php } ?>
		</div>
		<script>
		$(document).ready(function(){
		$(".dropdown").hover(
		function() {
		$('.dropdown-menu', this).stop( true, true ).slideDown("fast");
		$(this).toggleClass('open');
		},
		function() {
		$('.dropdown-menu', this).stop( true, true ).slideUp("fast");
		$(this).toggleClass('open');
		}
		);
		});
		</script>
		<!--
		<div class="col-md-4 search-agileinfo">
			<form action="#" method="post">
				<input type="search" name="Search" placeholder="Search for a Product..." required="">
				<button type="submit" class="btn btn-default search" aria-label="Left Align">
					<i class="fa fa-search" aria-hidden="true"> </i>
				</button>
			</form>
		</div>
		-->
		
		
		<div class="clearfix"></div>
	</div>
</div>
<div class="holder" style="padding: 37px;">
	
</div>
<!-- Modal -->
<div class="modal fade" id="cart" role="dialog" >
	<div class="modal-dialog">
		
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Shopping Cart</h4>
			</div>
			<div class="modal-body">
				<?php  $q = $this->cart->total_items(); ?>
				<?php
				if ($q == 0) {
					echo "<h3>YOUR CART IS EMPTY</h3>";
				}
				?>
				<table id="table" border="0" >
					<?php
					// All values of cart store in "$cart".
					if ($cart = $this->cart->contents()): ?>
					<tr id= "main_heading">
						<th align="center">No</th>
						<th align="center">Name</th>
						<th align="center">Price</th>
						<th align="center">Qty</th>
						<th style="witdh:20px" align="center">Amount</th>
						<th align="center">Cancel</th>
					</tr>
					<?php
					// Create form and send all values in "shopping/update_cart" function.
					echo form_open('shop/update_cart');
					$grand_total = 0;
					$i = 1;
					foreach ($cart as $item):
					//   echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
					//  Will produce the following output.
					// <input type="hidden" name="cart[1][id]" value="1" />
					
					echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
					echo form_hidden('cart[' . $item['id'] . '][rowid]', $item['rowid']);
					echo form_hidden('cart[' . $item['id'] . '][name]', $item['name']);
					echo form_hidden('cart[' . $item['id'] . '][price]', $item['price']);
					echo form_hidden('cart[' . $item['id'] . '][qty]', $item['qty']);
					?>
					<tr>
						<td align="center">
							<?php echo $i++; ?>
						</td>
						<td align="left">
							<?php echo $item['name']; ?>
						</td>
						<td align="center">
							Rp. <?php echo number_format($item['price'] ); ?>
						</td>
						<td align="center">
							<?php echo form_input('cart[' . $item['id'] . '][qty]', $item['qty'], 'maxlength="3" size="1" style="text-align: right"'); ?>
						</td>
						<?php $grand_total = $grand_total + $item['subtotal']; ?>
						<td align="center">
							Rp. <?php echo number_format($item['subtotal']) ?>
						</td>
						<td align="center">
							<a type="button" class="btn btn-sm btn-danger" href="<?php echo base_url('shop/remove/'. $item['rowid']); ?>"><i class="fa fa-trash-o" aria-hidden="true"></i>
								<?php
								// cancle image.
								?>
							</a>
						</td>
						<?php endforeach; ?>
					</tr>
					<tr>
						
						
						<?php // "clear cart" button call javascript confirmation message ?>
					</tr>
					<tr>
						<td colspan="3"><b>Total: Rp.<?php
							
							//Grand Total.
						echo number_format($grand_total); ?></b></td>
						<td colspan="4" align="right">
							<a href="<?php echo base_url('shop/delete'); ?>" type="button" class ='btn btn-danger empty' value="Clear Cart" >Clear Cart</a>
							
							<?php //submit button. ?>
							<input type="submit" role="button" class="btn btn-success" value="Update Cart">
							<?php echo form_close(); ?>
							
							<!-- "Place order button" on click send "billing" controller  -->
							<input type="button" class ='btn btn-info' value="Place Order" onclick="window.location = 'billing/guest'"></td>
						</tr>
						<?php endif; ?>
					</table>
				</div>
				<div class="modal-footer">
					<tr>
						
					</tr>
					
					<button type="button" class="btn btn-default " data-dismiss="modal">Close</button>
					
				</div>
			</div>
			
		</div>
	</div>
	<script src="<?php echo base_url('assets/delconfirmation.js'); ?>"></script>
	<script>
		
	var elems = document.getElementsByClassName('hapus');
	var confirmIt = function (e) {
	if (!confirm('Yakin Ingin Menghapus Item?')) e.preventDefault();
	};
	for (var i = 0, l = elems.length; i < l; i++) {
	elems[i].addEventdaftarener('click', confirmIt, false);
	}
	</script>