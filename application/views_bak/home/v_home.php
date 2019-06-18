<style>

.header-logo {
	width: 80%;
}
.header-logo-image {
	width: 80% !important;
	margin-left: 20% !important;
}
.carousel {
  display: block;
  margin: 0 auto;
  position: relative;
  width: 100%;
}
.img-slick {
	width: 100%;
	background-repeat: no-repeat; 
	background-size: 100% 100%;
}
.carousel, .slick-slide {
  height: 450px;
  overflow: hidden;
}
.carousel, img {
  transition: all 500ms ease-in-out;
  transform: scale(1.25, 1.25);
}
.carousel, .slick-active img {
  transform: scale(1, 1);
}
.slick-prev {
display: block;
  width: 50px;
  height: 50px;
  position: absolute;
  left: 5px;
  bottom: 50%;
  z-index: 999;
  border: none;
  background-color: black;
  color: white;
  opacity: 0.3;
  transition: all 0.3s ease 0s;
}
.slick-next {
  display: block;
  width: 50px;
  height: 50px;
  position: absolute;
  right: 5px;
  bottom: 50%;
  z-index: 99;
  border: none;
  background-color: black;
  color: white;
  opacity: 0.3;
  transition: all 0.3s ease 0s;
}
.slick-next:hover,.slick-prev:hover {
	opacity: 1;
}
.slick-next:focus,.slick-prev:focus {
outline:0;
}

</style>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>

<div class="carousel">
<?php
	foreach ($mslideshow as $t ) {
 ?>
  <div>
    <img class=img-slick src="<?php echo base_url('gopanel/uploads/slideshow/'.$t->image); ?>">
  </div>
 <?php } ?>
</div>
<div id="main-container">
      <div id="content" class="shopping-layout-content">
        <div id="home-page" class="home-page">
          <div class="home-cms">
            <section class="home-cms-page-banner-top"></section>
            <section class="home-cms-page-slider-content" data-cms-area="home-slider" data-cms-area-filters="path"></section>
            <div class="home-cms-page-banner-bottom-main" data-cms-area="item_list_banner_bottom" data-cms-area-filters="path">
              <div class="cms-content cms-content-html" id="cms-content-2-2">
                <div class="container-fluid no-gutter">
                  <style>

                  </style>

                  <div class="row no-gutter threeup">
                  <?php foreach ($mkategori as $t) { ?>
                    <div class="col-sm-6 col-md-4 three-left"
                    style="background: url('<?php echo base_url("gopanel/uploads/kategori/".$t->image); ?>'); background-repeat: no-repeat; background-size: 100% 100%;">
                    <span class="center"><h3><a href="<?php echo base_url('kategori/daftar/'.$t->slug) ?>"><?php echo $t->namakategori; ?></a></h3></span></div>
                  <?php } ?>
                  </div>
                </div>
              </div>
            </div>
            <section id="trending-products" class="container-fluid no-gutter">
              <section class="row no-gutter home-cms-page-merchandising-content">
                <div class="home-cms-page-products-heading" data-cms-area="home_products_heading" data-cms-area-filters="path">
                  <div class="cms-content cms-content-html" id="cms-content-77-77">
                    <style>
                      section#trending-products div {
                        background: white;
                      }

                      div.trending-product h2 {
                        text-align: center;
                        font-size: 54px;
                        font-weight: 200;
                        padding: 10px;
                      }

                      #cms-content-78-78 {
                        min-height: 150px;
                        margin: 30px 70px;
                      }

                      #cms-content-78-78 ul li {
                        max-width: 16.666%;
                        padding: 0;
                      }
                    </style>
                    <style>
                      #cms-content-78-78 div.span3 {
                        max-width: 16%;
                        padding: 0;
                        display: inline-block;
                      }

                      #cms-content-78-78 div.row-fluid {
                        display: inline;
                      }

                      #cms-content-78-78 a.btn {
                        display: none;
                      }
                    </style>
                    <style>
                      @media (max-width:1040px) {
                        #cms-content-78-78 ul li {
                          max-width: 33.333%;
                          width: 33.333%;
                        }
                      }

                      @media (max-width:550px) {
                        #cms-content-78-78 ul li {
                          max-width: 100%;
                          width: 100%;
                        }
                      }
                    </style>
                    <div class="trending-product">
                      <h2>What&apos;s New</h2>
										</div>
                  </div>
                </div>
                <div class="home-cms-page-merchandising" data-cms-area="home_products" data-cms-area-filters="path">
                  <div class="cms-content cms-content-merchzone" id="cms-content-78-78">
                    <ul class="merch-zone item-relations-row">
                    <?php foreach ($mbarang as $t) {  ?>
                      <li class="item-relations-cell">
                        <div><a class="item-views-related-item-thumbnail taphover" href="<?php echo base_url('product/detail/'.$t->slug); ?>"><noscript><img src="<?php echo base_url('gopanel/uploads/barang/'.$t->image); ?>">" alt=""/></noscript></a>
                          <h3
                            class="item-cell-title center btn-fade"><a href="<?php echo base_url('product/detail/'.$t->slug); ?>"><?php echo $t->nama; ?></a></h3>
                        </div>
                      </li>
                      <?php } ?>

                    </ul>
                  </div>
                </div>
              </section>
            </section>
          </div>
        </div>
      </div>
    </div>
	<script src="<?php echo base_url('assets/js/easyResponsiveTabs.js'); ?>" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion
				width: 'auto', //auto or any width like 600px
				fit: true   // 100% fit in a container
			});
		});
	</script>

<!-- top-brands -->

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
<script type="text/javascript">
	$('.carousel').slick({
  fade: true,
  autoplay: true,
  autoplaySpeed: 3000,
  prevArrow:"<button type='button' class='slick-prev pull-left'><i class='fa fa-chevron-left' aria-hidden='true'></i></button>",
  nextArrow:"<button type='button' class='slick-next pull-right'><i class='fa fa-chevron-right' aria-hidden='true'></i></button>"
});
</script>
<script>
$( ".home" ).addClass( "active" );
</script>

<!-- //newsletter -->
