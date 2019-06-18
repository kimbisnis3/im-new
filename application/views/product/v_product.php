
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
<script type="text/javascript">
window.__lc = window.__lc || {};
window.__lc.license = 9852060;
(function() {
  var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
  lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
})();
</script>
<noscript>
<a href="https://www.livechatinc.com/chat-with/9852060/">Chat with us</a>,
powered by <a href="https://www.livechatinc.com/?welcome" rel="noopener" target="_blank">LiveChat</a>
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
                <a href="https://au.skda.com.au/" class="breadcrumb-label" itemprop="item">Home</a>
            <meta itemprop="position" content="0" />
        </li>
        <li class="breadcrumb " itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a href="https://au.skda.com.au/seat-covers/" class="breadcrumb-label" itemprop="item">Custom Seat Covers</a>
            <meta itemprop="position" content="1" />
        </li>
        <li class="breadcrumb " itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a href="https://au.skda.com.au/alta-motors-2/" class="breadcrumb-label" itemprop="item">ALTA Motors</a>
            <meta itemprop="position" content="2" />
        </li>
        <li class="breadcrumb is-active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a href="https://au.skda.com.au/alta-rippled-seat-cover-black/" class="breadcrumb-label" itemprop="item">ALTA Rippled Seat Cover - BLACK</a>
            <meta itemprop="position" content="3" />
        </li>
</ul>


    <div itemscope itemtype="http://schema.org/Product">
        <div class="productView">

    <section class="productView-details">
        <div class="productView-product">
            <h1 class="productView-title" itemprop="name">ALTA Rippled Seat Cover - BLACK</h1>
                <h2 class="productView-brand" itemprop="brand" itemscope itemtype="http://schema.org/Brand">
                    <a href="https://au.skda.com.au/alta-motors-1/" itemprop="url"><span itemprop="name">ALTA Motors</span></a>
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
        <div class="price-section price-section--withTax" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
            <span class="price-label" >
                
            </span>
            <span class="price-now-label" style="display: none;">
                Now:
            </span>
            <span data-product-price-with-tax class="price price--withTax">AUD $100.00</span>
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

            <!-- Begin Afterpay Stencil Snippet for BigCommerce v1.0.9 -->
                    <p class="afterpay-paragraph" style="text-align:center; display:block; font-size:14px; text-transform:none;" data-currency=AUD>
                        or make 4 interest-free payments of
                        <strong class="afterpay-instalments">$25.00&nbsp;AUD</strong>
                        fortnightly with
                        <a style="display:inline-block; margin-bottom:10px;" target="_blank" href="https://www.afterpay.com/terms">
                            <img style="vertical-align:middle;" src="https://static.afterpay.com/integration/product-page/logo-afterpay-colour.png" srcset="https://static.afterpay.com/integration/product-page/logo-afterpay-colour.png 1x, https://static.afterpay.com/integration/product-page/logo-afterpay-colour@2x.png 2x, https://static.afterpay.com/integration/product-page/logo-afterpay-colour@3x.png 3x" width="100" height="21" alt="Afterpay">
                            <span style="font-size:12px; display:inline-block;"> <u class="afterpay-link-inner">More info</u> </span>
                            </a>
                        </p>
            <script type="text/javascript">
              if (typeof Afterpay === 'undefined') {
                var Afterpay = {};
                Afterpay.loadScript = function(url, callback) {
                  var script = document.createElement('script');
                  script.type = 'text/javascript';
                  if (script.readyState) { // I.E.
                    script.onreadystatechange = function() {
                      if (script.readyState == 'loaded' || script.readyState == 'complete') {
                        script.onreadystatechange = null;
                        callback();
                      }
                    };
                  } else { // Others
                    script.onload = function() {
                      callback();
                    };
                  }
                  script.src = url;
                  document.getElementsByTagName('head')[0].appendChild(script);
                };
                Afterpay.$elements = null;
                Afterpay.interval = null;

                Afterpay.launchPopup = function($, event) {
                    event.preventDefault();
                    var currency = $(".afterpay-paragraph").attr('data-currency');
                    var $popup_wrapper, $popup_outer, $popup_inner, $a, $img, $close_button;

                    $popup_wrapper = $('#afterpay-popup-wrapper');

                    if ($popup_wrapper.length > 0) {
                      $popup_wrapper.show();
                    } else {
                      $popup_wrapper = $(document.createElement('div'))
                        .attr('id', 'afterpay-popup-wrapper')
                        .css({
                          'position': 'fixed',
                          'z-index': 999999999,
                          'left': 0,
                          'top': 0,
                          'right': 0,
                          'bottom': 0,
                          'overflow': 'auto'
                        })
                        .appendTo('body')
                        .on('click', function(event) {
                          Afterpay.closePopup($, event);
                        });

                      $popup_outer = $(document.createElement('div'))
                        .attr('id', 'afterpay-popup-outer')
                        .css({
                          'display': '-ms-flexbox',
                          'display': '-webkit-flex',
                          'display': 'flex',
                          '-webkit-justify-content': 'center',
                          '-ms-flex-pack': 'center',
                          'justify-content': 'center',
                          '-webkit-align-content': 'center',
                          '-ms-flex-line-pack': 'center',
                          'align-content': 'center',
                          '-webkit-align-items': 'center',
                          '-ms-flex-align': 'center',
                          'align-items': 'center',
                          'width': '100%',
                          'min-height': '100%',
                          'background-color': 'rgba(0, 0, 0, 0.80)'
                        })
                        .appendTo($popup_wrapper);

                      $popup_inner = $(document.createElement('div'))
                        .attr('id', 'afterpay-popup-inner')
                        .css({
                          'position': 'relative',
                          'background-color': '#fff'
                        })
                        .appendTo($popup_outer);

                      $a = $(document.createElement('a'));

                      if (currency == 'USD') {
                        $a.attr('href', 'https://www.afterpay.com/purchase-payment-agreement');
                      } else {
                        $a.attr('href', 'https://www.afterpay.com/terms');
                      }

                      $a
                        .attr('target', '_blank')
                        .css({
                          'display': 'block'
                        })
                        .appendTo($popup_inner);

                      $img = $(document.createElement('img'));

                      if (currency == 'USD') {
                        if ($(window).width() > 640) {
                          $img.attr('src', 'https://static.afterpay.com/us-popup-medium.png');
                        } else {
                          $img.attr('src', 'https://static.afterpay.com/us-popup-small.png');
                        }
                      } else {
                        if ($(window).width() > 640) {
                          $img.attr('src', 'https://static.afterpay.com/lightbox-desktop.png');
                        } else {
                          $img.attr('src', 'https://static.afterpay.com/lightbox-mobile.png');
                        }
                      }

                      $img
                        .css({
                          'display': 'block',
                          'width': '100%'
                        })
                        .appendTo($a)
                        .on('click', function(event) {
                          event.stopPropagation();
                        });

                      $close_button = $(document.createElement('a'))
                        .attr('href', '#')
                        .css({
                          'position': 'absolute',
                          'right': '8px',
                          'top': '8px'
                        })
                        .html('<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" width="32px" height="32px"><g id="surface1"><path style=" " d="M 16 3 C 8.832031 3 3 8.832031 3 16 C 3 23.167969 8.832031 29 16 29 C 23.167969 29 29 23.167969 29 16 C 29 8.832031 23.167969 3 16 3 Z M 16 5 C 22.085938 5 27 9.914063 27 16 C 27 22.085938 22.085938 27 16 27 C 9.914063 27 5 22.085938 5 16 C 5 9.914063 9.914063 5 16 5 Z M 12.21875 10.78125 L 10.78125 12.21875 L 14.5625 16 L 10.78125 19.78125 L 12.21875 21.21875 L 16 17.4375 L 19.78125 21.21875 L 21.21875 19.78125 L 17.4375 16 L 21.21875 12.21875 L 19.78125 10.78125 L 16 14.5625 Z "/></g></svg>')
                        .appendTo($popup_inner)
                        .on('click', function(event) {
                          Afterpay.closePopup($, event);
                        });
                    }
                  };
                  Afterpay.closePopup = function($, event) {
                    event.preventDefault();

                    $('#afterpay-popup-wrapper').hide();
                  };
                Afterpay.init = function($) {
                    $('.afterpay-paragraph a').on('click', function(event) {
                      Afterpay.launchPopup($, event);
                    });
                        var price_selector = '.productView-price .price--withTax';
                  Afterpay.$elements = $(price_selector);
                  if (Afterpay.$elements.length > 0) {
                    Afterpay.interval = setInterval(function() {
                      Afterpay.$elements.each(function(index, element) {
                        var $element = $(element);
                        var currency = $(".afterpay-paragraph").attr('data-currency');
                        var amount = $element.text().replace(/[a-zA-Z$]+/g,'');
                        if (amount >= 35.00 && amount <= 1000.00 && currency =='USD') {
                          $(".afterpay-paragraph").show();
                          var instalment_amount_in_cents = Math.round((amount / 4) * 100);
                          var instalment_amount = (instalment_amount_in_cents / 100).toFixed(2);
                          $(".afterpay-paragraph").find(".afterpay-text1").html("or 4 installments of <strong class='afterpay-instalments'>$"+instalment_amount+"&nbsp;"+currency+"</strong>&nbsp;with");
                          $(".afterpay-paragraph").find(".afterpay-text2").html("");
                          $(".afterpay-paragraph").find(".afterpay-link-inner").html('More Info');
                        }else if (amount >= 0.04 && amount <= 1000.00 && currency != 'US' ) {
                          $(".afterpay-paragraph").show();
                          var instalment_amount_in_cents = Math.round((amount / 4) * 100);
                          var instalment_amount = (instalment_amount_in_cents / 100).toFixed(2);
                          $(".afterpay-instalments").html("$" + instalment_amount + "&nbsp;"+currency);
                        } else if(currency == 'USD' && (amount <= 35.00 || amount >= 1000.00)) {
                            $(".afterpay-paragraph").show();
                            $(".afterpay-paragraph").find(".afterpay-text1").html("Installments by");
                            $(".afterpay-paragraph").find(".afterpay-text2").html("available between $35.00 USD - $1000.00 USD");
                            $(".afterpay-paragraph").find(".afterpay-link-inner").html('Learn More');
                        } else {
                          $(".afterpay-paragraph").hide();
                        }
                      });
                    }, 500);
                  }
                };
              } else {
                if (Afterpay.interval !== null) {
                  clearInterval(Afterpay.interval);
                }
              }
              if (typeof jQuery_1_12_4 === 'function') {
                Afterpay.init(jQuery_1_12_4);
              } else if (typeof jQuery === 'undefined' || parseFloat(jQuery.fn.jquery) < 1.7) {
                var jQuery_1_12_4;
                Afterpay.loadScript('https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js', function() {
                  jQuery_1_12_4 = jQuery.noConflict(true);
                  Afterpay.init(jQuery_1_12_4);
                });
              } else {
                Afterpay.init(jQuery);
              }
            </script>
            <!-- End Afterpay Stencil Snippet for BigCommerce v1.0.9 -->


            
            <div class="productView-rating">
                    <span class="productView-reviewLink">
                        <a href="https://au.skda.com.au/alta-rippled-seat-cover-black/"
                           data-reveal-id="modal-review-form">
                           Write a Review
                        </a>
                    </span>
                    <div id="modal-review-form" class="modal" data-reveal>
    
    
    
    
    <div class="modal-header">
        <h2 class="modal-header-title">Write a Review</h2>
        <a href="#" class="modal-close" aria-label="Close" role="button">
            <span aria-hidden="true">&#215;</span>
        </a>
    </div>
    <div class="modal-body">
        <div class="writeReview-productDetails">
            <div class="writeReview-productImage-container">
                <img class="lazyload" data-sizes="auto" src="https://cdn11.bigcommerce.com/s-4b0htg/stencil/7ab98780-51eb-0137-79d3-0242ac110003/e/54f12650-d33b-0136-1167-6fe0491fb18e/img/loading.svg" data-src="https://cdn11.bigcommerce.com/s-4b0htg/images/stencil/500x659/products/1226/6788/Alta2__03924.1557390820.png?c=2&amp;imbypass=on">
            </div>
            <h6 class="product-brand">ALTA Motors</h6>
            <h5 class="product-title">ALTA Rippled Seat Cover - BLACK</h5>
        </div>
        <form class="form writeReview-form" action="/postreview.php" method="post">
            <fieldset class="form-fieldset">
                <div class="form-field">
                    <label class="form-label" for="rating-rate">Rating
                        <small>Required</small>
                    </label>
                    <!-- Stars -->
                    <!-- TODO: Review Stars need to be componentised, both for display and input -->
                    <select id="rating-rate" class="form-select" name="revrating">
                        <option value="">Select Rating</option>
                                <option value="1">1 star (worst)</option>
                                <option value="2">2 stars</option>
                                <option value="3">3 stars (average)</option>
                                <option value="4">4 stars</option>
                                <option value="5">5 stars (best)</option>
                    </select>
                </div>

                <!-- Name -->
                    <div class="form-field" id="revfromname" data-validation="" >
    <label class="form-label" for="revfromname_input">Name
        
    </label>
    <input type="text" id="revfromname_input" data-label="Name" name="revfromname"  class="form-input" aria-required="" >
</div>


                <!-- Review Subject -->
                <div class="form-field" id="revtitle" data-validation="" >
    <label class="form-label" for="revtitle_input">Review Subject
        <small>Required</small>
    </label>
    <input type="text" id="revtitle_input" data-label="Review Subject" name="revtitle"  class="form-input" aria-required="true" >
</div>

                <!-- Comments -->
                <div class="form-field" id="revtext" data-validation="">
    <label class="form-label" for="revtext_input">Comments
            <small>Required</small>
    </label>
    <textarea name="revtext" id="revtext_input" data-label="Comments" rows="" aria-required="true" class="form-input" ></textarea>
</div>

                

                <div class="form-field">
                    <input type="submit" class="button button--primary"
                           value="Submit Review">
                </div>
                <input type="hidden" name="product_id" value="1226">
                <input type="hidden" name="action" value="post_review">
                
            </fieldset>
        </form>
    </div>
</div>
            </div>
            
            <dl class="productView-info">
                        <dt class="productView-info-name">Shipping:</dt>
                        <dd class="productView-info-value">Calculated at Checkout</dd>


            </dl>
        </div>
    </section>

    <section class="productView-images" data-image-gallery>
        <figure class="productView-image"
                data-image-gallery-main
                data-zoom-image="https://cdn11.bigcommerce.com/s-4b0htg/images/stencil/1280x1280/products/1226/6788/Alta2__03924.1557390820.png?c=2&amp;imbypass=on"
                >
            <div class="productView-img-container">
                    <a href="https://cdn11.bigcommerce.com/s-4b0htg/images/stencil/1280x1280/products/1226/6788/Alta2__03924.1557390820.png?c=2&amp;imbypass=on">

                <img class="productView-image--default lazyload"
                     data-sizes="auto"
                     src="https://cdn11.bigcommerce.com/s-4b0htg/stencil/7ab98780-51eb-0137-79d3-0242ac110003/e/54f12650-d33b-0136-1167-6fe0491fb18e/img/loading.svg"
                     data-src="https://cdn11.bigcommerce.com/s-4b0htg/images/stencil/500x659/products/1226/6788/Alta2__03924.1557390820.png?c=2&amp;imbypass=on"
                     alt="ALTA Rippled Seat Cover - By SKDA" title="ALTA Rippled Seat Cover - By SKDA" data-main-image>

                    </a>
            </div>
        </figure>
        <ul class="productView-thumbnails">
                <li class="productView-thumbnail">
                    <a
                        class="productView-thumbnail-link"
                        href="https://cdn11.bigcommerce.com/s-4b0htg/images/stencil/500x659/products/1226/6788/Alta2__03924.1557390820.png?c=2"
                        data-image-gallery-item
                        data-image-gallery-new-image-url="https://cdn11.bigcommerce.com/s-4b0htg/images/stencil/500x659/products/1226/6788/Alta2__03924.1557390820.png?c=2"
                        data-image-gallery-zoom-image-url="https://cdn11.bigcommerce.com/s-4b0htg/images/stencil/1280x1280/products/1226/6788/Alta2__03924.1557390820.png?c=2">
                        <img class="lazyload" data-sizes="auto" src="https://cdn11.bigcommerce.com/s-4b0htg/stencil/7ab98780-51eb-0137-79d3-0242ac110003/e/54f12650-d33b-0136-1167-6fe0491fb18e/img/loading.svg" data-src="https://cdn11.bigcommerce.com/s-4b0htg/images/stencil/50x50/products/1226/6788/Alta2__03924.1557390820.png?c=2" alt="ALTA Rippled Seat Cover - By SKDA" title="ALTA Rippled Seat Cover - By SKDA">
                    </a>
                </li>
                <li class="productView-thumbnail">
                    <a
                        class="productView-thumbnail-link"
                        href="https://cdn11.bigcommerce.com/s-4b0htg/images/stencil/500x659/products/1226/6787/Seat-Cover-Photo__55625.1557390792.png?c=2"
                        data-image-gallery-item
                        data-image-gallery-new-image-url="https://cdn11.bigcommerce.com/s-4b0htg/images/stencil/500x659/products/1226/6787/Seat-Cover-Photo__55625.1557390792.png?c=2"
                        data-image-gallery-zoom-image-url="https://cdn11.bigcommerce.com/s-4b0htg/images/stencil/1280x1280/products/1226/6787/Seat-Cover-Photo__55625.1557390792.png?c=2">
                        <img class="lazyload" data-sizes="auto" src="https://cdn11.bigcommerce.com/s-4b0htg/stencil/7ab98780-51eb-0137-79d3-0242ac110003/e/54f12650-d33b-0136-1167-6fe0491fb18e/img/loading.svg" data-src="https://cdn11.bigcommerce.com/s-4b0htg/images/stencil/50x50/products/1226/6787/Seat-Cover-Photo__55625.1557390792.png?c=2" alt="MASTER Gripper Seat Covers - by SK Designs Australia" title="MASTER Gripper Seat Covers - by SK Designs Australia">
                    </a>
                </li>
        </ul>
    </section>

    <article class="productView-description" itemprop="description">
            <p class="productView-title">Description</p>
<div class="productView-description">
    <div class="show-more-container less">
        <div class="show-more-content">
        <p>SKDA Custom Seat Covers are custom made to order, here in Adelaide, South Australia.<br />These covers are hand made using the highest quality of gripper material and thick ripples for traction and mobility. All Colours are OEM colours, ready to improve the appearance of your bike, whilst giving you more grip and control of your bike.&nbsp;</p>
<p><strong>CUSTOMIZE:&nbsp;</strong>&nbsp;Our Seat Covers give a broad range of options that allow you to customize the side, top and ripple colours of each seat individually.</p>
<p><strong>QUICK TURN AROUND:&nbsp;</strong>All of our orders are shipped out using the quickest possible method in express shipping.<strong>&nbsp;</strong>You can usually expect the cover to ship in around 1-2 weeks from date of payment.&nbsp;</p>
        <!-- snippet location product_description -->
        </div>
        <div class="show-more-link">
            <div class="show-more-link__text closed">
                <span>Read more</span>
                <i class="icon" aria-hidden="true">
                    <svg>
                        <use xlink:href="#icon-keyboard-arrow-down"></use>
                    </svg>
                </i>
            </div>
            <div class="show-more-link__text open">
                <span>Read less</span>
                <i class="icon" aria-hidden="true">
                    <svg>
                        <use xlink:href="#icon-keyboard-arrow-up"></use>
                    </svg>
                </i>
            </div>
        </div>
    </div>
</div>



<script>
    (function() {
        var showMoreContainers = document.getElementsByClassName('show-more-container');

        for (var i in showMoreContainers) {
            if (showMoreContainers.hasOwnProperty(i)) {
                var container = showMoreContainers[i];

                var link = container.getElementsByClassName('show-more-link')[0];
                var hide = true;
                link.addEventListener('click', function() {
                    hide = !hide;
                    container.classList.toggle('less', hide);
                });
            }
        }
    })();
</script>
    </article>

    <section class="productView-details">
        <div class="productView-options">
            <form class="form" method="post" action="https://au.skda.com.au/cart.php" enctype="multipart/form-data"
                  data-cart-item-add>
                <input type="hidden" name="action" value="add">
                <input type="hidden" name="product_id" value="1226"/>
                <div data-product-option-change style="display:none;" class="options">
                        <div class="form-field" data-product-attribute="set-select">
    <label class="form-label form-label--alternate form-label--inlineSmall" for="attribute_select_21997">
        Bike Model:

            <small>Required</small>
    </label>

    <select class="form-select form-select--small" name="attribute[21997]" id="attribute_select_21997" required>
        <option value="">Choose Options</option>
            <option data-product-attribute-value="1008" value="1008" >ALTA Redshift EXR</option>
            <option data-product-attribute-value="1009" value="1009" >ALTA Redshift MXR</option>
            <option data-product-attribute-value="1010" value="1010" >ALTA MX Motocross</option>
            <option data-product-attribute-value="1011" value="1011" >ALTA EX Enduro</option>
            <option data-product-attribute-value="1012" value="1012" >ALTA SM Supermoto</option>
    </select>
</div>

                        <div class="form-field" data-product-attribute="input-text">
    <label class="form-label form-label--alternate form-label--inlineSmall" for="attribute_text_21998">
        Bike Year:

            <small>Required</small>
    </label>

    <input class="form-input form-input--small" type="text" id="attribute_text_21998" name="attribute[21998]" placeholder="" required>
</div>

                        <div class="form-field" data-product-attribute="set-select">
    <label class="form-label form-label--alternate form-label--inlineSmall" for="attribute_select_21999">
        Ripples Colour:

            <small>Required</small>
    </label>

    <select class="form-select form-select--small" name="attribute[21999]" id="attribute_select_21999" required>
        <option value="">Choose Options</option>
            <option data-product-attribute-value="1262" value="1262" >Black</option>
            <option data-product-attribute-value="1263" value="1263" >White</option>
            <option data-product-attribute-value="1264" value="1264" >Honda Red</option>
            <option data-product-attribute-value="1265" value="1265" >Yamaha Blue</option>
            <option data-product-attribute-value="1266" value="1266" >Kawasaki Green</option>
            <option data-product-attribute-value="1267" value="1267" >KTM Orange</option>
            <option data-product-attribute-value="1268" value="1268" >Suzuki Yellow</option>
            <option data-product-attribute-value="1269" value="1269" >Navy Blue</option>
            <option data-product-attribute-value="1270" value="1270" >Hot Pink</option>
            <option data-product-attribute-value="1283" value="1283" >Steel Grey</option>
    </select>
</div>

                </div>
                <script>
                    window.addEventListener('load', function() {
                        var isSticker = document.querySelector('.breadcrumbs > .breadcrumb:nth-child(3) a').text === 'Custom MX Graphics Kits';
                        if (!isSticker)
                            return;

                        function getOptionLabel(option) {
                            if (option.nodeType === Node.TEXT_NODE) {
                                return null;
                            }

                            for (var j = 0; j < option.childNodes.length; j++) {
                                if (option.childNodes[j].nodeType == Node.ELEMENT_NODE && option.childNodes[j].tagName === "LABEL") {
                                    return option.childNodes[j];
                                }
                            }
                        }

                        function getOptionName(option) {
                            var label = getOptionLabel(option);

                            if (label == null) {
                                return null;
                            }
                            try {
                                var text = label.childNodes[0].textContent.trim()
                                return text;
                            } catch (e) {
                                return null;
                            }
                        }

                        function stringBeginsWith(haystack, needle) {
                            return haystack.substr(0, needle.length) === needle;
                        }

                        var optionsElement = document.querySelector('.productView-options .options');
                        var options = optionsElement.childNodes;

                        for (var i = 0; i < options.length; i++) {
                            if (options.hasOwnProperty(i)) {
                                var option = options[i];
                                try {
                                    var text = getOptionName(option);

                                    if (text == null) {
                                        continue;
                                    }

                                    var headerText = null;
                                    if (stringBeginsWith(text, 'Product Selection:')) {
                                        headerText = "Product Options";
                                    } else if (stringBeginsWith(text, 'Bike Model')) {
                                        headerText = 'Bike Details';

                                        var info = 'This graphics kit is available to purchase for all the models in this list. We simply alter the design as needed to ﬁt into the correct graphics template for the model selected.';

                                        var label = getOptionLabel(option);

                                        label.innerHTML = label.innerHTML.replace(':', '<span class="desktop-infotip"> <span class="infotip" title="' + info + '">?</span> </span>:');
                                        var p = document.createElement('p');
                                        p.innerText = info;
                                        p.classList.add('mobile-infotip')
                                        label.parentNode.insertBefore(p, label.nextSibling);
                                    } else if (stringBeginsWith(text, 'Rider Name') || stringBeginsWith(text, 'Name on Graphics')) {
                                        headerText = 'Rider Details';
                                    } else if (stringBeginsWith(text, 'Number Style')) {
                                        var imgUrl = 'https://us.skda.com.au/product_images/uploaded_images/numberoptions.png';

                                        var label = getOptionLabel(option);

                                        label.innerHTML = 'Number Style (<a href="' + imgUrl + '" target="_BLANK">See Examples</a>):';
                                    }

                                    if (headerText !== null) {
                                        var heading = document.createElement("h5");
                                        heading.innerText = headerText;
                                        heading.classList.add('border-above');
                                        optionsElement.insertBefore(heading, option);
                                        i++;
                                    }
                                } catch (e) {}
                            }
                        }
                    });
                </script>
                <div class="form-field form-field--stock u-hiddenVisually">
                    <label class="form-label form-label--alternate">
                        Current Stock:
                        <span data-product-stock></span>
                    </label>
                </div>
                    <div class="form-field form-field--increments">
    <label class="form-label form-label--alternate"
           for="qty[]">Quantity:</label>

    <div class="form-increment" data-quantity-change>
        <button class="button button--icon" data-action="dec">
            <span class="is-srOnly">Decrease Quantity:</span>
            <i class="icon" aria-hidden="true">
                <svg>
                    <use xlink:href="#icon-keyboard-arrow-down"/>
                </svg>
            </i>
        </button>
        <input class="form-input form-input--incrementTotal"
               id="qty[]"
               name="qty[]"
               type="tel"
               value="1"
               data-quantity-min="0"
               data-quantity-max="0"
               min="1"
               pattern="[0-9]*"
               aria-live="polite">
        <button class="button button--icon" data-action="inc">
            <span class="is-srOnly">Increase Quantity:</span>
            <i class="icon" aria-hidden="true">
                <svg>
                    <use xlink:href="#icon-keyboard-arrow-up"/>
                </svg>
            </i>
        </button>
    </div>
</div>

<div class="alertBox productAttributes-message" style="display:none">
    <div class="alertBox-column alertBox-icon">
        <icon glyph="ic-success" class="icon" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"></path></svg></icon>
    </div>
    <p class="alertBox-column alertBox-message"></p>
</div>
    <div class="form-action">
        <input id="form-action-addToCart" data-wait-message="Adding to cart…" class="button button--primary" type="submit"
            value="Add to Cart">
    </div>
     <!-- snippet location product_addtocart -->
            </form>
        </div>
        <div class="addthis_toolbox addthis_32x32_style">
    <ul class="socialLinks">
        <li class="socialLinks-item socialLinks-item--Facebook">
            <a class="icon icon--Facebook" href="http://www.facebook.com/skdesignsaus">
                <svg>
                    <use xlink:href="#icon-facebook" />
                </svg>
                                  </a>
        </li>
        <li class="socialLinks-item socialLinks-item--Instagram">
            <a class="icon icon--Instagram" href="http://instagram.com/skda.moto">
                  </a>
        </li>
        <li class="socialLinks-item socialLinks-item--">
            <a class="icon icon--" href="mailto:info@skda.com.au">
                <svg>
                    <use xlink:href="#icon-envelope" />
                </svg>
            </a>
        </li>
    </ul>
</div>
        <!-- snippet location product_details -->
    </section>
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
        <script src="https://cdn11.bigcommerce.com/s-4b0htg/stencil/7ab98780-51eb-0137-79d3-0242ac110003/e/54f12650-d33b-0136-1167-6fe0491fb18e/dist/theme-bundle.main.js"></script>

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
