
<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
         

        <link href="https://cdn11.bigcommerce.com/s-4b0htg/product_images/favicon.ico?t=1533712168" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <script>
            // Change document class from no-js to js so we can detect this in css
            document.documentElement.className = document.documentElement.className.replace('no-js', 'js');
        </script>

        <link href="https://fonts.googleapis.com/css?family=Oswald:300|Karla:400|Montserrat:400&display=swap" rel="stylesheet">
        <link data-stencil-stylesheet href="https://cdn11.bigcommerce.com/s-4b0htg/stencil/7ab98780-51eb-0137-79d3-0242ac110003/e/54f12650-d33b-0136-1167-6fe0491fb18e/css/theme-68038930-51ee-0137-c2e4-0242ac11001a.css" rel="stylesheet">

        <!-- Start Tracking Code for analytics_facebook -->

<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,document,'script','https://connect.facebook.net/en_US/fbevents.js');

fbq('set', 'autoConfig', 'false', '1725771324373457');
fbq('init', '1725771324373457');
fbq('set', 'agent', 'plbigcommerce1.2', '1725771324373457');

window.onload = function() {
    var productIdMap = {},
        productIdsOnPage = getUniqueProductIdsOnPage(),
        pathName = window.location.pathname;

    fbq('track', 'PageView');

    // Search events start -- only fire if the shopper lands on the /search.php page
    if (pathName.indexOf('/search.php') === 0 && getUrlParameter('search_query')) {
        fbq('track', 'Search', {
            content_ids: productIdsOnPage,
            search_string: getUrlParameter('search_query')
        });
    }
    // Search events end

    // Wishlist events start -- only fire if the shopper attempts to add an item to their wishlist
    if (pathName.indexOf('/wishlist.php') === 0 && getUrlParameter('added_product_id')) {
        fbq('track', 'AddToWishlist', {
            content_ids: [getUrlParameter('added_product_id')]
        });
    }
    // Wishlist events end

    // Lead events start -- only fire if the shopper subscribes to newsletter
    if (pathName.indexOf('/subscribe.php') === 0 && getUrlParameter('result') === 'success') {
        fbq('track', 'Lead', {});
    }
    // Lead events end

    // Registration events start -- only fire if the shopper registers an account
    if (pathName.indexOf('/login.php') === 0 && getUrlParameter('action') === 'account_created') {
        fbq('track', 'CompleteRegistration', {});
    }
    // Registration events end

    // Checkout events start -- only fire if the shopper lands on a /checkout* page
    if (pathName === '/checkout.php' || /^\/(embedded-)?checkout$/.test(pathName)) {
        window.sessionStorage.setItem('fb_conversion_key_', 'true');

        if (getUrlParameter('action') === 'process_payment') {
            fbq('track', 'AddPaymentInfo');
        } else {
            fbq('track', 'InitiateCheckout');
        }
    }
    // Checkout events end

    function getUniqueProductIdsOnPage() {
        return Array.prototype.reduce.call(document.querySelectorAll('[data-product], [data-product-id]'), function(acc, obj) {
            var productId = obj.getAttribute('data-product') || obj.getAttribute('data-product-id');

            if (!productIdMap[productId]) {
                productIdMap[productId] = true;
                acc.push(productId);
            }

            return acc;
        }, []);
    }

    function getUrlParameter(name) {
        var cleanName = name.replace(/[\[]/, '\[').replace(/[\]]/, '\]');
        var regex = new RegExp('[\?&]' + cleanName + '=([^&#]*)');
        var results = regex.exec(window.location.search);
        return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
    }
}
</script>
<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1725771324373457&ev=PageView&noscript=1&a=plbigcommerce1.2"/></noscript>

<!-- End Tracking Code for analytics_facebook -->

<!-- Start Tracking Code for analytics_googleanalytics -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-51348697-4"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-51348697-4');
</script>

<!-- End Tracking Code for analytics_googleanalytics -->


<!-- Start of LiveChat (www.livechatinc.com) code -->
<!-- <script type="text/javascript">
window.__lc = window.__lc || {};
window.__lc.license = 9852060;
(function() {
  var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
  lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
})();
</script> -->
<noscript>
<!-- <a href="https://www.livechatinc.com/chat-with/9852060/">Chat with us</a>, -->
<!-- powered by <a href="https://www.livechatinc.com/?welcome" rel="noopener" target="_blank">LiveChat</a> -->
</noscript>
<!-- End of LiveChat code -->
<script type="text/javascript" src="https://cdn11.bigcommerce.com/shared/bower/checkout-sdk/dist/checkout-button.umd-165446dd1b865a9c314ea950307e8536bd6c6974.js" defer></script>
<script type="text/javascript">
function beacon_deferred(beacon_api) { beacon_api.pageview({"isNew":0,"initiator":{"id":"","session_id":"f71296735e74c545365b436104bee0be7d1598a7","type":"ANONYMOUS","visit_id":"6a4332f5-0392-4d25-ab07-246807788c68","visitor_id":"eb7b1189-1092-4c52-9e81-6650c7098fb1"},"referer":{"url":""},"request":{"url":"https:\/\/au.skda.com.au\/alta-rippled-seat-cover-black\/"}}, {"product":{"id":"1226"}});}
</script>
<script type="text/javascript">
(function(){var d=document,g=d.createElement('script'),s=d.getElementsByTagName('script')[0];g.type='text/javascript';g.defer=true;g.src='https://cdn11.bigcommerce.com/shared/js/beacon_api-d53f0a39a11dacaa85063ca4f4aba159a609185d.js';s.parentNode.insertBefore(g,s);})();
</script>
<script type="text/javascript">
fbq('track', 'ViewContent', {"content_ids":["1226"],"content_type":"product_group","value":100,"currency":"AUD"});
</script>
<script type="text/javascript">
document.addEventListener("DOMContentLoaded", function(event) {
var elements = document.querySelectorAll('[data-image-gallery-zoom-image-url], [data-zoom-image]');
Array.prototype.forEach.call(elements, function(value, index){
      if (value.hasAttribute("data-zoom-image")) {
	    var val = value.dataset.zoomImage + "&imbypass=on";
		value.setAttribute('data-zoom-image', val);
	  } else {
	    var val = value.dataset.imageGalleryZoomImageUrl + "&imbypass=on";
		value.setAttribute('data-image-gallery-zoom-image-url', val);
	  }
});
});
</script>
<script type="text/javascript">
var BCData = {"csrf_token":"3b1c6693bc0bb7e687c0f875feda3a6c5db2945dead1c922004a6be9a48f1eb0","product_attributes":{"purchasable":true,"purchasing_message":null,"sku":null,"upc":null,"stock":null,"instock":true,"stock_message":null,"weight":null,"base":false,"image":null,"price":{"with_tax":{"formatted":"AUD $100.00","value":100},"tax_label":"Tax"},"in_stock_attributes":[1008,1009,1010,1011,1012,1262,1263,1264,1265,1266,1267,1268,1269,1270,1283],"out_of_stock_behavior":"label_option","out_of_stock_message":"Out of stock"}};
</script>

        <!-- snippet location htmlhead -->
    </head>
    <body>
        <!-- snippet location header -->
        <svg data-src="https://cdn11.bigcommerce.com/s-4b0htg/stencil/7ab98780-51eb-0137-79d3-0242ac110003/e/54f12650-d33b-0136-1167-6fe0491fb18e/img/icon-sprite.svg" class="icons-svg-sprite"></svg>


        <header class="header" role="banner">
    <a href="#" class="mobileMenu-toggle" data-mobile-menu-toggle="menu">
        <span class="mobileMenu-toggleIcon">Toggle menu</span>
    </a>
            </li>
                
    </ul>
</nav>
    </div>
</header>
        <div class="body">
     
    <div class="container">
            <ul class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
        <li class="breadcrumb " itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a href="<?php echo base_url(); ?>" class="breadcrumb-label" itemprop="item">Home</a>
            <meta itemprop="position" content="0" />
        </li>
        <li class="breadcrumb " itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a href="" class="breadcrumb-label" itemprop="item">Produk</a>
            <meta itemprop="position" content="1" />
        </li>
        <?php foreach ($mproduct as $t) { ?>
        <li class="breadcrumb " itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a href="" class="breadcrumb-label" itemprop="item"><?php echo $t->nama; ?></a>
            <meta itemprop="position" content="2" />
        </li>
        <?php } ?>
</ul>


    <div itemscope itemtype="http://schema.org/Product">
        <div class="productView">

	<?php foreach ($mproduct as $t) { ?>
    <section class="productView-details">
        <div class="productView-product">
            <h1 class="productView-title" itemprop="name"><?php echo $t->nama; ?></h1>
                <h2 class="productView-brand" itemprop="brand" itemscope itemtype="http://schema.org/Brand">
                    <span itemprop="name"><?php echo $t->ket; ?></span>
                </h2>
            <div class="productView-price">
                    
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
        <div class="productView-info">
                        <dt class="productView-info-name">Akan Diproses 2 Sampai 3 Hari</dt>


            </div>
        <div class="price-section price-section--withTax" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
            <span class="price-label" >
                
            </span>
            <span class="price-now-label" style="display: none;">
                Now:
            </span>
            <span data-product-price-with-tax class="price price--withTax">RP <?php echo number_format($t->harga); ?></span>

			<span data-product-price-with-tax class="price price--withTax">
				<form id="form" action="<?php echo base_url('shop/add'); ?>" method="post">
					<input type="hidden" name="kode" value="<?php echo $t->kode; ?>" />
					<input type="hidden" name="nama" value="<?php echo $t->nama; ?>" />
					<input type="hidden" name="harga" value="<?php echo $t->harga; ?>" />
					<!-- <button type="submit" class="btn btn-primary btn-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button> -->
					<input type="submit" id="form-action-addToCart" data-wait-message="Adding to cart…" class="button button--primary" type="submit"
				value="Add to Cart">
				</form>
				<!-- <div class="form-action">
				<input id="form-action-addToCart" data-wait-message="Adding to cart…" class="button button--primary" type="submit"
				value="Add to Cart">
			</div> -->
			</span>
                <meta itemprop="availability" content="">
                <meta itemprop="itemCondition" itemtype="http://schema.org/OfferItemCondition" content="http://schema.org/Condition">
                <div itemprop="priceSpecification" itemscope itemtype="http://schema.org/PriceSpecification">
                    <meta itemprop="price" content="100">
                    <meta itemprop="priceCurrency" content="AUD">
                    <meta itemprop="valueAddedTaxIncluded" content="true">
                </div>
        </div>
         <div class="price-section price-section--saving price" style="display: none;">
                <span class="price">(You save</span>
                <span data-product-price-saved class="price price--saving">
                    
                </span>
                <span class="price">)</span>
         </div>
            </div>

        </div>

    </section>
	<?php } ?>

	<?php foreach ($mproduct as $t) { ?>
    <section class="productView-images" data-image-gallery>
        <figure class="productView-image"
                data-image-gallery-main
                data-zoom-image="<?php echo base_url('gopanel/uploads/barang/'.$t->image); ?>"
                >
            <div class="productView-img-container">
                    <a href="<?php echo base_url('gopanel/uploads/barang/'.$t->image); ?>">

                <img class="productView-image--default lazyload"
                     data-sizes="auto"
                     src="<?php echo base_url('gopanel/uploads/barang/'.$t->image); ?>"
                     data-src="<?php echo base_url('gopanel/uploads/barang/'.$t->image); ?>"
                     alt="<?php echo $t->nama; ?>" title="<?php echo $t->nama; ?>" data-main-image>

                    </a>
            </div>
        </figure>
    </section>
<?php } ?>

</div>

<div id="previewModal" class="modal modal--large" data-reveal>
    <a href="#" class="modal-close" aria-label="Close" role="button">
        <span aria-hidden="true">&#215;</span>
    </a>
    <div class="modal-content"></div>
    <div class="loadingOverlay"></div>
</div>


            <!-- snippet location reviews -->

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

        <script>window.__webpack_public_path__ = "https://cdn11.bigcommerce.com/s-4b0htg/stencil/7ab98780-51eb-0137-79d3-0242ac110003/e/54f12650-d33b-0136-1167-6fe0491fb18e/dist/";</script>
        <script src="<?php echo base_url('assets/newats/main.js'); ?>"></script>
        <!-- <script src="https://cdn11.bigcommerce.com/s-4b0htg/stencil/7ab98780-51eb-0137-79d3-0242ac110003/e/54f12650-d33b-0136-1167-6fe0491fb18e/dist/theme-bundle.main.js"></script> -->

        <script>
            // Exported in app.js
            window.stencilBootstrap("product", "{\"themeSettings\":{\"homepage_new_products_count\":12,\"homepage_featured_products_count\":12,\"homepage_top_products_count\":0,\"homepage_show_carousel\":true,\"homepage_stretch_carousel_images\":false,\"homepage_new_products_column_count\":4,\"homepage_featured_products_column_count\":4,\"homepage_top_products_column_count\":4,\"homepage_blog_posts_count\":3,\"productpage_videos_count\":8,\"productpage_reviews_count\":0,\"productpage_related_products_count\":4,\"productpage_similar_by_views_count\":4,\"categorypage_products_per_page\":20,\"shop_by_price_visibility\":false,\"brandpage_products_per_page\":20,\"searchpage_products_per_page\":20,\"show_product_quick_view\":false,\"show_powered_by\":false,\"shop_by_brand_show_footer\":true,\"show_copyright_footer\":true,\"show_accept_amex\":true,\"show_accept_discover\":true,\"show_accept_mastercard\":true,\"show_accept_paypal\":true,\"show_accept_visa\":true,\"show_product_details_tabs\":false,\"show_product_reviews_tabs\":false,\"show_product_weight\":false,\"show_product_dimensions\":false,\"product_list_display_mode\":\"grid\",\"logo-position\":\"center\",\"logo_size\":\"250x100\",\"logo_fontSize\":28,\"logo-font\":\"Google_Oswald_300\",\"brand_size\":\"190x250\",\"gallery_size\":\"300x300\",\"productgallery_size\":\"500x659\",\"product_size\":\"500x659\",\"productview_thumb_size\":\"50x50\",\"productthumb_size\":\"100x100\",\"thumb_size\":\"100x100\",\"zoom_size\":\"1280x1280\",\"blog_size\":\"190x250\",\"default_image_brand\":\"/assets/img/BrandDefault.gif\",\"default_image_product\":\"/assets/img/ProductDefault.gif\",\"default_image_gift_certificate\":\"/assets/img/GiftCertificate.png\",\"body-font\":\"Google_Karla_400\",\"headings-font\":\"Google_Montserrat_400\",\"fontSize-root\":14,\"fontSize-h1\":28,\"fontSize-h2\":25,\"fontSize-h3\":22,\"fontSize-h4\":20,\"fontSize-h5\":15,\"fontSize-h6\":13,\"applePay-button\":\"black\",\"color-textBase\":\"#333333\",\"color-textBase--hover\":\"#757575\",\"color-textBase--active\":\"#757575\",\"color-textSecondary\":\"#757575\",\"color-textSecondary--hover\":\"#333333\",\"color-textSecondary--active\":\"#333333\",\"color-textLink\":\"#333333\",\"color-textLink--hover\":\"#757575\",\"color-textLink--active\":\"#757575\",\"color-textHeading\":\"#444444\",\"color-primary\":\"#757575\",\"color-primaryDark\":\"#666666\",\"color-primaryDarker\":\"#333333\",\"color-primaryLight\":\"#999999\",\"color-secondary\":\"#ffffff\",\"color-secondaryDark\":\"#e5e5e5\",\"color-secondaryDarker\":\"#cccccc\",\"color-error\":\"#cc4749\",\"color-errorLight\":\"#ffdddd\",\"color-info\":\"#666666\",\"color-infoLight\":\"#dfdfdf\",\"color-success\":\"#008a06\",\"color-successLight\":\"#d5ffd8\",\"color-warning\":\"#f1a500\",\"color-warningLight\":\"#fffdea\",\"color-black\":\"#ffffff\",\"color-white\":\"#ffffff\",\"color-whitesBase\":\"#e5e5e5\",\"color-grey\":\"#999999\",\"color-greyDarkest\":\"#000000\",\"color-greyDarker\":\"#333333\",\"color-greyDark\":\"#666666\",\"color-greyMedium\":\"#757575\",\"color-greyLight\":\"#999999\",\"color-greyLighter\":\"#cccccc\",\"color-greyLightest\":\"#e5e5e5\",\"button--default-color\":\"#666666\",\"button--default-colorHover\":\"#333333\",\"button--default-colorActive\":\"#000000\",\"button--default-borderColor\":\"#cccccc\",\"button--default-borderColorHover\":\"#999999\",\"button--default-borderColorActive\":\"#757575\",\"button--primary-color\":\"#ffffff\",\"button--primary-colorHover\":\"#ffffff\",\"button--primary-colorActive\":\"#ffffff\",\"button--primary-backgroundColor\":\"#68c516\",\"button--primary-backgroundColorHover\":\"#6DD412\",\"button--primary-backgroundColorActive\":\"#000000\",\"button--disabled-color\":\"#ffffff\",\"button--disabled-backgroundColor\":\"#cccccc\",\"button--disabled-borderColor\":\"transparent\",\"icon-color\":\"#757575\",\"icon-color-hover\":\"#999999\",\"button--icon-svg-color\":\"#757575\",\"icon-ratingEmpty\":\"#cccccc\",\"icon-ratingFull\":\"#757575\",\"carousel-bgColor\":\"#ffffff\",\"carousel-title-color\":\"#444444\",\"carousel-description-color\":\"#333333\",\"carousel-dot-color\":\"#333333\",\"carousel-dot-color-active\":\"#757575\",\"carousel-dot-bgColor\":\"#ffffff\",\"carousel-arrow-color\":\"#999999\",\"carousel-arrow-bgColor\":\"#ffffff\",\"carousel-arrow-borderColor\":\"#ffffff\",\"card-title-color\":\"#333333\",\"card-title-color-hover\":\"#757575\",\"card-figcaption-button-background\":\"#ffffff\",\"card-figcaption-button-color\":\"#333333\",\"card--alternate-backgroundColor\":\"#ffffff\",\"card--alternate-borderColor\":\"#ffffff\",\"card--alternate-color--hover\":\"#ffffff\",\"form-label-font-color\":\"#666666\",\"input-font-color\":\"#666666\",\"input-border-color\":\"#cccccc\",\"input-border-color-active\":\"#999999\",\"input-bg-color\":\"#ffffff\",\"input-disabled-bg\":\"#ffffff\",\"select-bg-color\":\"#ffffff\",\"select-arrow-color\":\"#757575\",\"checkRadio-color\":\"#333333\",\"checkRadio-backgroundColor\":\"#ffffff\",\"checkRadio-borderColor\":\"#cccccc\",\"alert-backgroundColor\":\"#ffffff\",\"alert-color\":\"#333333\",\"alert-color-alt\":\"#ffffff\",\"storeName-color\":\"#333333\",\"body-bg\":\"#ffffff\",\"header-backgroundColor\":\"#ffffff\",\"footer-backgroundColor\":\"#eef5fa\",\"navUser-color\":\"#333333\",\"navUser-color-hover\":\"#757575\",\"navUser-dropdown-backgroundColor\":\"#ffffff\",\"navUser-dropdown-borderColor\":\"#cccccc\",\"navUser-indicator-backgroundColor\":\"#333333\",\"navPages-color\":\"#333333\",\"navPages-color-hover\":\"#757575\",\"navPages-subMenu-backgroundColor\":\"#e5e5e5\",\"navPages-subMenu-separatorColor\":\"#cccccc\",\"dropdown--quickSearch-backgroundColor\":\"#e5e5e5\",\"dropdown--wishList-backgroundColor\":\"#ffffff\",\"blockquote-cite-font-color\":\"#999999\",\"container-border-global-color-base\":\"#e5e5e5\",\"container-fill-base\":\"#ffffff\",\"container-fill-dark\":\"#e5e5e5\",\"label-backgroundColor\":\"#cccccc\",\"label-color\":\"#ffffff\",\"overlay-backgroundColor\":\"#333333\",\"loadingOverlay-backgroundColor\":\"#ffffff\",\"pace-progress-backgroundColor\":\"#999999\",\"spinner-borderColor-dark\":\"#999999\",\"spinner-borderColor-light\":\"#ffffff\",\"hide_content_navigation\":false,\"optimizedCheckout-header-backgroundColor\":\"#f5f5f5\",\"optimizedCheckout-show-backgroundImage\":false,\"optimizedCheckout-backgroundImage\":\"\",\"optimizedCheckout-backgroundImage-size\":\"1000x400\",\"optimizedCheckout-show-logo\":\"none\",\"optimizedCheckout-logo\":\"\",\"optimizedCheckout-logo-size\":\"250x100\",\"optimizedCheckout-logo-position\":\"left\",\"optimizedCheckout-headingPrimary-color\":\"#333333\",\"optimizedCheckout-headingPrimary-font\":\"Google_Montserrat_400\",\"optimizedCheckout-headingSecondary-color\":\"#333333\",\"optimizedCheckout-headingSecondary-font\":\"Google_Montserrat_400\",\"optimizedCheckout-body-backgroundColor\":\"#ffffff\",\"optimizedCheckout-colorFocus\":\"#4496f6\",\"optimizedCheckout-contentPrimary-color\":\"#333333\",\"optimizedCheckout-contentPrimary-font\":\"Google_Karla_400\",\"optimizedCheckout-contentSecondary-color\":\"#757575\",\"optimizedCheckout-contentSecondary-font\":\"Google_Karla_400\",\"optimizedCheckout-buttonPrimary-font\":\"Google_Karla_400\",\"optimizedCheckout-buttonPrimary-color\":\"#ffffff\",\"optimizedCheckout-buttonPrimary-colorHover\":\"#ffffff\",\"optimizedCheckout-buttonPrimary-colorActive\":\"#ffffff\",\"optimizedCheckout-buttonPrimary-backgroundColor\":\"#333333\",\"optimizedCheckout-buttonPrimary-backgroundColorHover\":\"#666666\",\"optimizedCheckout-buttonPrimary-backgroundColorActive\":\"#000000\",\"optimizedCheckout-buttonPrimary-borderColor\":\"#cccccc\",\"optimizedCheckout-buttonPrimary-borderColorHover\":\"transparent\",\"optimizedCheckout-buttonPrimary-borderColorActive\":\"transparent\",\"optimizedCheckout-buttonPrimary-borderColorDisabled\":\"transparent\",\"optimizedCheckout-buttonPrimary-backgroundColorDisabled\":\"#cccccc\",\"optimizedCheckout-buttonPrimary-colorDisabled\":\"#ffffff\",\"optimizedCheckout-formChecklist-backgroundColor\":\"#ffffff\",\"optimizedCheckout-formChecklist-color\":\"#333333\",\"optimizedCheckout-formChecklist-borderColor\":\"#cccccc\",\"optimizedCheckout-formChecklist-backgroundColorSelected\":\"#f5f5f5\",\"optimizedCheckout-buttonSecondary-font\":\"Google_Karla_400\",\"optimizedCheckout-buttonSecondary-color\":\"#333333\",\"optimizedCheckout-buttonSecondary-colorHover\":\"#333333\",\"optimizedCheckout-buttonSecondary-colorActive\":\"#000000\",\"optimizedCheckout-buttonSecondary-backgroundColor\":\"#ffffff\",\"optimizedCheckout-buttonSecondary-borderColor\":\"#cccccc\",\"optimizedCheckout-buttonSecondary-backgroundColorHover\":\"#f5f5f5\",\"optimizedCheckout-buttonSecondary-backgroundColorActive\":\"#e5e5e5\",\"optimizedCheckout-buttonSecondary-borderColorHover\":\"#999999\",\"optimizedCheckout-buttonSecondary-borderColorActive\":\"#757575\",\"optimizedCheckout-link-color\":\"#476bef\",\"optimizedCheckout-link-font\":\"Google_Karla_400\",\"optimizedCheckout-discountBanner-backgroundColor\":\"#e5e5e5\",\"optimizedCheckout-discountBanner-textColor\":\"#333333\",\"optimizedCheckout-discountBanner-iconColor\":\"#333333\",\"optimizedCheckout-orderSummary-backgroundColor\":\"#ffffff\",\"optimizedCheckout-orderSummary-borderColor\":\"#dddddd\",\"optimizedCheckout-step-backgroundColor\":\"#757575\",\"optimizedCheckout-step-textColor\":\"#ffffff\",\"optimizedCheckout-form-textColor\":\"#666666\",\"optimizedCheckout-formField-borderColor\":\"#cccccc\",\"optimizedCheckout-formField-textColor\":\"#333333\",\"optimizedCheckout-formField-shadowColor\":\"#e5e5e5\",\"optimizedCheckout-formField-placeholderColor\":\"#999999\",\"optimizedCheckout-formField-backgroundColor\":\"#ffffff\",\"optimizedCheckout-formField-errorColor\":\"#d14343\",\"optimizedCheckout-formField-inputControlColor\":\"#476bef\",\"optimizedCheckout-step-borderColor\":\"#dddddd\",\"optimizedCheckout-header-borderColor\":\"#dddddd\",\"optimizedCheckout-header-textColor\":\"#333333\",\"optimizedCheckout-loadingToaster-backgroundColor\":\"#333333\",\"optimizedCheckout-loadingToaster-textColor\":\"#ffffff\",\"optimizedCheckout-link-hoverColor\":\"#002fe1\",\"product_sale_badges\":\"none\",\"color_badge_product_sale_badges\":\"#007dc6\",\"color_text_product_sale_badges\":\"#ffffff\",\"color_hover_product_sale_badges\":\"#000000\",\"restrict_to_login\":false,\"swatch_option_size\":\"22x22\",\"social_icon_placement_top\":false,\"social_icon_placement_bottom\":\"bottom_none\",\"geotrust_ssl_common_name\":\"\",\"geotrust_ssl_seal_size\":\"M\",\"navigation_design\":\"simple\",\"price_ranges\":true,\"pdp-price-label\":\"\",\"pdp-sale-price-label\":\"Now:\",\"pdp-non-sale-price-label\":\"Was:\",\"pdp-retail-price-label\":\"MSRP:\"},\"genericError\":\"Oops! Something went wrong.\",\"maintenanceMode\":{\"header\":null,\"notice\":null,\"message\":null,\"securePath\":\"https://au.skda.com.au\",\"password\":null},\"urls\":{\"home\":\"https://au.skda.com.au/\",\"account\":{\"index\":\"/account.php\",\"orders\":{\"all\":\"/account.php?action=order_status\",\"completed\":\"/account.php?action=view_orders\",\"save_new_return\":\"/account.php?action=save_new_return\"},\"update_action\":\"/account.php?action=update_account\",\"returns\":\"/account.php?action=view_returns\",\"addresses\":\"/account.php?action=address_book\",\"inbox\":\"/account.php?action=inbox\",\"send_message\":\"/account.php?action=send_message\",\"add_address\":\"/account.php?action=add_shipping_address\",\"wishlists\":{\"all\":\"/wishlist.php\",\"add\":\"/wishlist.php?action=addwishlist\",\"edit\":\"/wishlist.php?action=editwishlist\",\"delete\":\"/wishlist.php?action=deletewishlist\"},\"details\":\"/account.php?action=account_details\",\"recent_items\":\"/account.php?action=recent_items\"},\"brands\":\"https://au.skda.com.au/brands/\",\"gift_certificate\":{\"purchase\":\"/giftcertificates.php\",\"redeem\":\"/giftcertificates.php?action=redeem\",\"balance\":\"/giftcertificates.php?action=balance\"},\"auth\":{\"login\":\"/login.php\",\"check_login\":\"/login.php?action=check_login\",\"create_account\":\"/login.php?action=create_account\",\"save_new_account\":\"/login.php?action=save_new_account\",\"forgot_password\":\"/login.php?action=reset_password\",\"send_password_email\":\"/login.php?action=send_password_email\",\"save_new_password\":\"/login.php?action=save_new_password\",\"logout\":\"/login.php?action=logout\"},\"product\":{\"post_review\":\"/postreview.php\"},\"cart\":\"/cart.php\",\"checkout\":{\"single_address\":\"/checkout.php\",\"multiple_address\":\"/checkout.php?action=multiple\"},\"rss\":{\"products\":{\"new\":\"/rss.php?type=rss\",\"new_atom\":\"/rss.php?type=atom\",\"popular\":\"/rss.php?action=popularproducts&type=rss\",\"popular_atom\":\"/rss.php?action=popularproducts&type=atom\",\"featured\":\"/rss.php?action=featuredproducts&type=rss\",\"featured_atom\":\"/rss.php?action=featuredproducts&type=atom\",\"search\":\"/rss.php?action=searchproducts&type=rss\",\"search_atom\":\"/rss.php?action=searchproducts&type=atom\"},\"blog\":\"/rss.php?action=newblogs&type=rss\",\"blog_atom\":\"/rss.php?action=newblogs&type=atom\"},\"contact_us_submit\":\"/pages.php?action=sendContactForm\",\"search\":\"/search.php\",\"compare\":\"/compare\",\"sitemap\":\"/sitemap.php\",\"subscribe\":{\"action\":\"/subscribe.php\"}},\"reviewRating\":\"The 'Rating' field cannot be blank.\",\"reviewSubject\":\"The 'Review Subject' field cannot be blank.\",\"reviewComment\":\"The 'Comments' field cannot be blank.\",\"reviewEmail\":\"Please use a valid email address, such as user@example.com.\"}").load();
        </script>

        <!-- Start of LiveChat (www.livechatinc.com) code -->
<!-- End of LiveChat code -->
<!-- script type="text/javascript" src="//downloads.mailchimp.com/js/signup-forms/popup/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script><script type="text/javascript">require(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us19.list-manage.com","uuid":"d1025ff996d9f578c3b9eac76","lid":"0ede11b7f9","uniqueMethods":false}) })</script -->
        <!-- snippet location footer -->



    </body>
</html>
