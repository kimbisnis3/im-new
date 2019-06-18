<div class="body">
	
	<div class="container">
		
		<ul class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
			<li class="breadcrumb " itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
				<a href="<?php echo base_url(); ?>" class="breadcrumb-label" itemprop="item">Home</a>
				<meta itemprop="position" content="0" />
			</li>
			<li class="breadcrumb " itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
				<a href="" class="breadcrumb-label" itemprop="item">Contact Us</a>
				<meta itemprop="position" content="1" />
			</li>
		</ul>
		<main class="page">
			<?php foreach ($mkontak as $t) { ?>
			<h1 class="page-heading"><?php echo $t->judul; ?></h1>
			<div class="page-content page-content--centered">
				<img style="width: 50%; margin: 0 auto;" src="<?php echo base_url('gopanel/uploads/kontak/'.$t->image); ?>">
				<p><p style="text-align: center;"><span style="font-family: verdana, geneva; font-size: small;"><span style="font-size: small; font-family: verdana, geneva;"><br /><span style="color: #312e29; background-color: #ffffff; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline;"><?php echo $t->artikel; ?></span></span></span></p></p>
			</div>
			<?php } ?>
		</main>
	</div>
</div>