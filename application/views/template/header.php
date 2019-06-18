<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <title>IM Products</title>
        <!-- <link rel="dns-prefetch preconnect" href="https://cdn11.bigcommerce.com/s-4b0htg" crossorigin><link rel="dns-prefetch preconnect" href="https://fonts.googleapis.com" crossorigin> -->
        <link rel="dns-prefetch preconnect" href="https://fonts.gstatic.com" crossorigin>
        <meta name="keywords" content="im product"><meta name="description" content="im product">

        <link href="<?php echo base_url('gambar/im.png'); ?>" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <script>
            // Change document class from no-js to js so we can detect this in css
            document.documentElement.className = document.documentElement.className.replace('no-js', 'js');
        </script>

        <link href="https://fonts.googleapis.com/css?family=Oswald:300|Karla:400|Montserrat:400&display=swap" rel="stylesheet">
        <link data-stencil-stylesheet href="<?php echo base_url('assets/newats/css.css'); ?>" rel="stylesheet">

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
<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-51348697-4"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-51348697-4');
</script> -->

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
<!-- <noscript>
<a href="https://www.livechatinc.com/chat-with/9852060/">Chat with us</a>,
powered by <a href="https://www.livechatinc.com/?welcome" rel="noopener" target="_blank">LiveChat</a>
</noscript> -->
<!-- End of LiveChat code -->
<!-- <script type="text/javascript" src="js1.js" defer></script>
<script type="text/javascript">
function beacon_deferred(beacon_api) { beacon_api.pageview({"isNew":0,"initiator":{"id":"","session_id":"f71296735e74c545365b436104bee0be7d1598a7","type":"ANONYMOUS","visit_id":"c68bccb3-7ac5-4f47-9474-1ad82ef78b71","visitor_id":"eb7b1189-1092-4c52-9e81-6650c7098fb1"},"referer":{"url":""},"request":{"url":"https:\/\/au.skda.com.au\/"}}, []);}
</script>
<script type="text/javascript">
(function(){var d=document,g=d.createElement('script'),s=d.getElementsByTagName('script')[0];g.type='text/javascript';g.defer=true;g.src='js2.js';s.parentNode.insertBefore(g,s);})();
</script>
<script type="text/javascript">
var BCData = {"csrf_token":"3b1c6693bc0bb7e687c0f875feda3a6c5db2945dead1c922004a6be9a48f1eb0"};
</script> -->
        
        
        <!-- snippet location htmlhead -->
    </head>
    <body>
        <!-- snippet location header -->
        <svg data-src="https://cdn11.bigcommerce.com/s-4b0htg/stencil/7ab98780-51eb-0137-79d3-0242ac110003/e/54f12650-d33b-0136-1167-6fe0491fb18e/img/icon-sprite.svg" class="icons-svg-sprite"></svg>


        <div class="banners" data-banner-location="top">
    <div class="banner">
        <div id='746880245'><p>WELCOME TO IM PRODUCTS</p></div>
    </div>
</div>
<header class="header" role="banner">
    <a href="#" class="mobileMenu-toggle" data-mobile-menu-toggle="menu">
        <span class="mobileMenu-toggleIcon">Toggle menu</span>
    </a>
    <nav class="navUser">
    <ul class="navUser-section">
</ul>

    <ul class="navUser-section navUser-section--alt">
        <li class="navUser-item">
            <a class="navUser-action navUser-item--compare" href="/compare" data-compare-nav>Compare <span class="countPill countPill--positive countPill--alt"></span></a>
        </li>
        <!-- <li class="navUser-item">
            <a class="navUser-action navUser-action--quickSearch" href="#" data-search="quickSearch" aria-controls="quickSearch" aria-expanded="false">Search</a>
        </li>
            <li class="navUser-item">
                <a class="navUser-action" href="/giftcertificates.php">Gift Certificates</a>
            </li> -->
        <li class="navUser-item navUser-item--account">
                <a class="navUser-action" href="<?php echo base_url(); ?>login">Sign in</a>
                    <span class="navUser-or">or</span> <a class="navUser-action" href="<?php echo base_url(); ?>register">Register</a>
        </li>
        <li class="navUser-item navUser-item--cart">
            <a
                class="navUser-action"
                data-cart-preview
                data-dropdown="cart-preview-dropdown"
                data-options="align:right"
                href="/cart.php">
                <span class="navUser-item-cartLabel">Cart</span> <span class="countPill cart-quantity">0</span>
            </a>

            <div class="dropdown-menu" id="cart-preview-dropdown" data-dropdown-content aria-hidden="true"></div>
        </li>
    </ul>
    <div class="dropdown dropdown--quickSearch" id="quickSearch" aria-hidden="true" tabindex="-1" data-prevent-quick-search-close>
        <div class="container">
    <!-- snippet location forms_search -->
    <form class="form" action="/search.php">
        <fieldset class="form-fieldset">
            <div class="form-field">
                <label class="is-srOnly" for="search_query">Search</label>
                <input class="form-input quickSearch-input" data-search-quick name="search_query" id="search_query" data-error-message="Search field cannot be empty." placeholder="Search the store" autocomplete="off">
                <button type="button" class="results-clear hidden"></button>
            </div>
        </fieldset>
    </form>
    <section class="quickSearchResults" data-bind="html: results"></section>
</div>
    </div>
</nav>

        <h1 class="header-logo header-logo--center">
            <a href="https://au.skda.com.au/">
            <?php foreach ($mlogo as $t) { ?>
            <div class="header-logo-image-container">
                <img class="header-logo-image lazyload" data-sizes="auto" src="<?php echo base_url('gopanel/uploads/logo/'.$t->image ); ?>" data-src="<?php echo base_url('gopanel/uploads/logo/'.$t->image ); ?>" alt="SK Designs Australia" title="SK Designs Australia" style="width: 30%;">
            </div>
            <?php } ?>

</a>
        </h1>
    
    <div class="navPages-container" id="menu" data-menu>
        <nav class="navPages">
    <div class="navPages-quickSearch">
        <div class="container">
    <!-- snippet location forms_search -->
    <form class="form" action="/search.php">
        <fieldset class="form-fieldset">
            <div class="form-field">
                <label class="is-srOnly" for="search_query">Search</label>
                <input class="form-input quickSearch-input" data-search-quick name="search_query" id="search_query" data-error-message="Search field cannot be empty." placeholder="Search the store" autocomplete="off">
                <button type="button" class="results-clear hidden"></button>
            </div>
        </fieldset>
    </form>
    <section class="quickSearchResults" data-bind="html: results"></section>
</div>
    </div>
    <ul class="navPages-list navPages-list--user">
        <li class="navPages-item">
            <a class="navPages-action has-subMenu navUser-action--storeSelector" href="#" data-collapsible="navPages-storeSelection" aria-controls="navPages-storeSelection" aria-expanded="false">
                Select Store: <span class="store-code">EU</span> <i class="icon navPages-action-moreIcon" aria-hidden="true"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-chevron-down"></use></svg></i>
            </a>
            <div class="navPage-subMenu" id="navPages-storeSelection" aria-hidden="true" tabindex="-1">
                
            </div>
        </li>
            
    </ul>
    <ul class="navPages-list">
      <li class="navPages-item navPages-item-page">
        <a class="navPages-action" href="<?php echo base_url(); ?>">Home</a>
      </li>

      <li class="navPages-item">
        <a class="navPages-action has-subMenu" href="" data-collapsible="navPages-66">
        Shop <i class="icon navPages-action-moreIcon" aria-hidden="true"><svg><use xlink:href="#icon-chevron-down" /></svg></i>
      </a>
      <div class="navPage-subMenu" id="navPages-66" aria-hidden="true" tabindex="-1">
        <ul class="navPage-subMenu-list">
          <li class="navPage-subMenu-item">
            <a
              class="navPage-subMenu-action navPages-action has-subMenu"
              href="https://au.skda.com.au/team-replica-graphics-kits/"
              data-collapsible="navPages-133"
              data-collapsible-disabled-breakpoint="medium"
              data-collapsible-disabled-state="open"
              data-collapsible-enabled-state="closed">
            Kategori <i class="icon navPages-action-moreIcon" aria-hidden="true"><svg><use xlink:href="#icon-chevron-down" /></svg></i>
          </a>
          <ul class="navPage-childList" id="navPages-133">
            <?php foreach ($mkategori as $t) { ?>
            <li class="navPage-childList-item">
              <a class="navPage-childList-action navPages-action" href="<?php echo base_url('kategori/daftar/'.$t->slug); ?>"><?php echo $t->namakategori; ?></a>
            </li>
            <?php } ?>
          </ul>
        </li>
        <li class="navPage-subMenu-item">
            <a
              class="navPage-subMenu-action navPages-action has-subMenu"
              href="https://au.skda.com.au/team-replica-graphics-kits/"
              data-collapsible="navPages-133"
              data-collapsible-disabled-breakpoint="medium"
              data-collapsible-disabled-state="open"
              data-collapsible-enabled-state="closed">
            Sub Kategori <i class="icon navPages-action-moreIcon" aria-hidden="true"><svg><use xlink:href="#icon-chevron-down" /></svg></i>
          </a>
          <ul class="navPage-childList" id="navPages-133">
            <?php foreach ($msubkategori as $t) { ?>
            <li class="navPage-childList-item">
              <a class="navPage-childList-action navPages-action" href="<?php echo base_url('subkategori/daftar/'.$t->slug); ?>"><?php echo $t->namasubkategori; ?></a>
            </li>
            <?php } ?>
          </ul>
        </li>
        <li class="navPage-subMenu-item">
            <a
              class="navPage-subMenu-action navPages-action has-subMenu"
              href="https://au.skda.com.au/team-replica-graphics-kits/"
              data-collapsible="navPages-133"
              data-collapsible-disabled-breakpoint="medium"
              data-collapsible-disabled-state="open"
              data-collapsible-enabled-state="closed">
            Event <i class="icon navPages-action-moreIcon" aria-hidden="true"><svg><use xlink:href="#icon-chevron-down" /></svg></i>
          </a>
          <ul class="navPage-childList" id="navPages-133">
            <?php foreach ($mevent as $t) { ?>
            <li class="navPage-childList-item">
              <a class="navPage-childList-action navPages-action" href="<?php echo base_url('event/daftar/'.$t->slug); ?>"><?php echo $t->judul; ?></a>
            </li>
            <?php } ?>
          </ul>
        </li>
        <li class="navPage-subMenu-item">
            <a
              class="navPage-subMenu-action navPages-action has-subMenu"
              href="https://au.skda.com.au/team-replica-graphics-kits/"
              data-collapsible="navPages-133"
              data-collapsible-disabled-breakpoint="medium"
              data-collapsible-disabled-state="open"
              data-collapsible-enabled-state="closed">
            IM <i class="icon navPages-action-moreIcon" aria-hidden="true"><svg><use xlink:href="#icon-chevron-down" /></svg></i>
          </a>
          <ul class="navPage-childList" id="navPages-133">

            <li class="navPage-childList-item">
              <a class="navPage-childList-action navPages-action" href="<?php echo base_url('carapesan'); ?>">How to Order</a>
            </li>
            <li class="navPage-childList-item">
              <a class="navPage-childList-action navPages-action" href="<?php echo base_url('kontak'); ?>">Contact Us</a>
            </li>
            <li class="navPage-childList-item">
              <a class="navPage-childList-action navPages-action" href="<?php echo base_url('services'); ?>">Services</a>
            </li>
            <li class="navPage-childList-item">
              <a class="navPage-childList-action navPages-action" href="<?php echo base_url('syaratdanketentuan'); ?>">Terms And Condition</a>
            </li>

          </ul>
        </li>
      
      </ul>
      </div>
      </li>

      <li class="navPages-item navPages-item-page">
        <a class="navPages-action" href="<?php echo base_url('about'); ?>">About</a>
      </li>

      <li class="navPages-item navPages-item-page">
        <a class="navPages-action" href="<?php echo base_url('kontak'); ?>">Contact Us</a>
      </li>
    </ul>
</nav>
    </div>
</header>