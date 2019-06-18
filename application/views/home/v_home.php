<div class="body">
            <section class="heroCarousel"
    data-slick='{
        "mobileFirst": true,
        "slidesToShow": 1,
        "slidesToScroll": 1,
        "autoplay": true,
        "autoplaySpeed": 4000,
        "lazyLoad": "anticipated"
    }'>
    <?php foreach ($mslideshow as $t ) { ?>
    <a href="">
        <div class="heroCarousel-slide  heroCarousel-slide--first">
            <div class="heroCarousel-image-wrapper" style="height: 31.622047244094485vw">
                <img class="heroCarousel-image" data-lazy="<?php echo base_url('gopanel/uploads/slideshow/'.$t->image); ?>" alt="" title=""
                width="3175" height="1004" />
            </div>
        </div>
    </a>
    <?php } ?>
</section>
    <!-- snippet location home_content -->

    <div class="container">
            <ul class="navPages-list navPages-list--quickNav">
        <li class="navPages-item">
            <a class="navPages-action" href="https://au.skda.com.au/graphics/">Graphics &amp; Stickers</a>
        </li>
        <li class="navPages-item">
            <a class="navPages-action" href="https://au.skda.com.au/seat-covers/">Custom Seat Covers</a>
        </li>
        <li class="navPages-item">
            <a class="navPages-action" href="https://au.skda.com.au/accessories-1/">Accessories</a>
        </li>
    </ul>


    <div class="main full">
            <h2 class="page-heading">Categories</h2>
            <section class="productCarousel"
    data-slick='{
        "dots": true,
        "infinite": false,
        "mobileFirst": true,
        "slidesToShow": 2,
        "slidesToScroll": 2,
        "responsive": [
            {
                "breakpoint": 1260,
                "settings": {
                    "slidesToScroll": 3,
                    "slidesToShow": 4
                }
            },
            {
                "breakpoint": 800,
                "settings": {
                    "slidesToScroll": 3,
                    "slidesToShow": 5
                }
            },
            {
                "breakpoint": 550,
                "settings": {
                    "slidesToScroll": 3,
                    "slidesToShow": 3
                }
            }
        ]
    }'
>
<?php foreach ($mkategori as $t) {  ?>
<div class="productCarousel-slide">
  <article class="card ">
    <figure class="card-figure">
      <a href="<?php echo base_url('kategori/daftar/'.$t->slug) ?>">
        <div class="card-img-container">
          <img class="card-image lazyload" data-sizes="auto" src="<?php echo base_url("gopanel/uploads/kategori/".$t->image); ?>" data-src="<?php echo base_url("gopanel/uploads/kategori/".$t->image); ?>" alt="KTM 2016 2017 Graphics Kit by SK Designs Australia" title="KTM 2016 2017 Graphics Kit by SK Designs Australia">
        </div>
      </a>
      <figcaption class="card-figcaption">
      <div class="card-figcaption-body">
        <a href="<?php echo base_url('kategori/daftar/'.$t->slug) ?>" class="button button--small card-figcaption-button" data-product-id="699">Open</a>
      </div>
      </figcaption>
    </figure>
    <div class="card-body">
      <!-- <p class="card-text" data-test-info-type="brandName"><?php echo $t->namakategori; ?></p> -->
      <h4 class="card-title">
      <a href="<?php echo base_url('kategori/daftar/'.$t->slug) ?>"><?php echo $t->namakategori; ?></a>
      </h4>
  </article>
</div>
<?php } ?>

</section>


<h2 class="page-heading">New Products</h2>
<section class="productCarousel"
    data-slick='{
        "dots": true,
        "infinite": false,
        "mobileFirst": true,
        "slidesToShow": 2,
        "slidesToScroll": 2,
        "responsive": [
            {
                "breakpoint": 1260,
                "settings": {
                    "slidesToScroll": 3,
                    "slidesToShow": 4
                }
            },
            {
                "breakpoint": 800,
                "settings": {
                    "slidesToScroll": 3,
                    "slidesToShow": 5
                }
            },
            {
                "breakpoint": 550,
                "settings": {
                    "slidesToScroll": 3,
                    "slidesToShow": 3
                }
            }
        ]
    }'
>
<?php foreach ($mbarang as $t) {  ?>
<div class="productCarousel-slide">
  <article class="card ">
    <figure class="card-figure">
      <a href="<?php echo base_url('product/detail/'.$t->slug); ?>">
        <div class="card-img-container">
          <img class="card-image lazyload" data-sizes="auto" src="<?php echo base_url('gopanel/uploads/barang/'.$t->image); ?>" data-src="<?php echo base_url('gopanel/uploads/barang/'.$t->image); ?>" alt="Custom Acerbis 711 Bike Stand - by SKDA" title="Custom Acerbis 711 Bike Stand - by SKDA">
        </div>
      </a>
      <figcaption class="card-figcaption">
      <div class="card-figcaption-body">
        <a href="<?php echo base_url('product/detail/'.$t->slug); ?>" class="button button--small card-figcaption-button" data-product-id="1259">Open</a>
      </div>
      </figcaption>
    </figure>
    <div class="card-body">
      <p class="card-text" data-test-info-type="brandName">Product</p>
      <h4 class="card-title">
      <a href="<?php echo base_url('product/detail/'.$t->slug); ?>"><?php echo $t->nama; ?></a>
      </h4>
      <div class="card-text" data-test-info-type="price">
        
        <div class="price-section price-section--withTax rrp-price--withTax" style="display: none;">
          MSRP:
          <span data-product-rrp-with-tax class="price price--rrp">
            
          </span>
        </div>
        <div class="price-section price-section--withTax non-sale-price--withTax" style="display: none;">
          Was:
          <span data-product-non-sale-price-with-tax class="price price--non-sale">
            
          </span>
        </div>
        <div class="price-section price-section--withTax" >
          <span class="price-label" >
            
          </span>
          <span class="price-now-label" style="display: none;">
            Now:
          </span>
          <span data-product-price-with-tax class="price price--withTax">RP <?php echo number_format($t->harga); ?></span>
        </div>
      </div>
    </div>
  </article>
</div>
<?php } ?>
</section>
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
       
