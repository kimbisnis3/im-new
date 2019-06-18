<!DOCTYPE html>
<html lang="en-US" class="no-touch">
  <head>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/tcss/c.735741/TroyLeeDesigns/TLD/css/shoppingda22.css?t=1503682833286'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/tcss/css/_cms-custom-style.css'); ?>">
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="shortcut icon" href="<?php echo base_url('gambar/im.png'); ?>"/>
    <title>IM Products</title>
    <link id="cms-css" rel="stylesheet" type="text/css" href="<?php echo base_url('assets/tcss/cms/2/assets/cms.css'); ?>"/>
    <script id="omapi-script" src="<?php echo base_url('assets/tcss/a.optnmnstr.com/app/js/api.min.js'); ?>"></script>
    <link rel="canonical" href="index.html"/>
  </head>
  <style type="text/css">
  div.title h2 {
    text-align: center;
    font-size: 54px;
    font-weight: 200;
    padding: 10px;
  }
  .imgbarang {
  margin-bottom: 10px;
  }
  .top-product-grids{
  margin-bottom: 10px;
  }
  .form-login {
  width : 50%;
  margin : 0 auto;
  padding: 10px;
  margin-bottom : 20px;
  border : 5px solid;
  background-color : #;
  }
  .form-data {
  width : 70%;
  margin : 0 auto;
  padding: 10px;
  margin-bottom : 20px;
  background-color : #;
  }
  .form-artikel {
  width : 70%;
  margin : 0 auto;
  padding: 10px;
  margin-bottom : 20px;
  background-color : #;
  }
  .holder-box {
  padding: 10px;
  }
  #table {
  font-size: 14px;
  }
  tr.border_bottom td {
  border-bottom:1pt solid #ff2c2c;
  }
  .header-mini-cart {
    width : 375px;
  }
  #mobile-menu {
    background-color :#e0dddd;
    display : none;
    z-index:200;
  }
  /* for monitor screen */
  @media (min-width:990px) {
  .imgbarang {
  width : 200px;
  height : 128px;
  background-color : white;
  }
  .title {
  margin-bottom: 20px;
  margin-top: 10px;
  }
  .form-login {
  width : 25%;
  margin : 0 auto;
  padding: 10px; margin-bottom : 20px;
  border : 5px solid;
  background-color : #;
  }
  .font-total {
  font-size : 24px;
  }
  .btn-cart {
  }
  }

  @media (max-width:990px) {
  div.title h2 {
    text-align: center;
    font-size: 32px;
    font-weight: 200;
    padding: 10px;
  }
  .header-mini-cart {
    width : 300px;
  }
  .header-menu-level2-anchor {
    font-size: 12px;
  }
  .header-menu-level3-anchor {
    font-size: 12px;
  }
  }
  </style>
  <body class="seo-support">
    <div id="main" class="main">
      <div class="layout-container">
        <div id="layout" class="shopping-layout">
          <header id="site-header" class="shopping-layout-header" data-view="Header">
            <div class="header-message" data-type="message-placeholder"></div>
            <div class="header-main-wrapper">
              <nav class="header-main-nav">
                <div id="banner-header-top" class="content-banner banner-header-top" data-cms-area="header_banner_top" data-cms-area-filters="global">
                  <div class="cms-content cms-content-html" id="cms-content-69-69">
                    <div class="container-fluid promo"><span>WELCOME TO IM PRODUCTS</span></div>
                  </div>
                </div>
                <div class="header-sidebar-toggle-wrapper">
                  <button class="header-sidebar-toggle" id="header-sidebar-toggle">
                    <i class="header-sidebar-toggle-icon"></i></button>
                </div>
                <div class="header-content">
                  <div class="header-logo-wrapper">
                    <div data-view="Header.Logo">
                    <?php foreach ($mlogo as $t) { ?>
                      <div id="site-logo" class="content-banner"></div><a class="header-logo" href="<?php echo base_url(''); ?>" data-touchpoint="home" data-hashtag="#" title="IM"><noscript><img class="header-logo-image" src="<?php echo base_url('gopanel/uploads/logo/'.$t->image ); ?>" alt=""/></noscript>
                      <noscript><img class="header-mobile-logo-image" src="<?php echo base_url('gopanel/uploads/logo/'.$t->image); ?>" alt=""/>
                    </noscript></a>
                  </div>
                   <?php } ?>
                </div>
                <div class="header--navigation" data-view="Header.Menu">
                  <nav class="header-menu-secondary-nav">
                    <ul class="header-menu-level1">
                      <li><a class="header-menu-level1-anchor" href="<?php echo base_url('') ;?>" data-touchpoint="home" data-hashtag="#/custom-paint"> Home </a></li>
                      <li><a class="header-menu-home-anchor" href="index.html" data-touchpoint="home" data-hashtag="#/" data-toggle="dropdown"> Shop </a>
                      <ul class="header-menu-level-container">
                        <li>
                          <ul class="header-menu-level2">
                            <li><a class="header-menu-level2-anchor " href="moto.html" data-hashtag="#/moto" data-touchpoint="home">Kategori</a>
                            <?php foreach ($mkategori as $t) { ?>
                            <ul class="header-menu-level3">
                              <li><a class="header-menu-level3-anchor " href="<?php echo base_url('kategori/daftar/'.$t->slug); ?>" data-hashtag="#/moto/helmets" data-touchpoint="home"><?php echo $t->namakategori; ?></a></li>
                            </ul>
                            <?php } ?>
                          </li>
                          <li><a class="header-menu-level2-anchor " href="moto.html" data-hashtag="#/moto" data-touchpoint="home">Sub kategori</a>
                          <?php foreach ($msubkategori as $t) { ?>
                          <ul class="header-menu-level3">
                            <li><a class="header-menu-level3-anchor " href="<?php echo base_url('subkategori/daftar/'.$t->slug); ?>" data-hashtag="#/moto/helmets" data-touchpoint="home"><?php echo $t->namasubkategori; ?></a></li>
                          </ul>
                          <?php } ?>
                        </li>
                        <li><a class="header-menu-level2-anchor " href="moto.html" data-hashtag="#/moto" data-touchpoint="home">Event</a>
                        <?php foreach ($mevent as $t) { ?>
                        <ul class="header-menu-level3">
                          <li><a class="header-menu-level3-anchor " href="<?php echo base_url('event/daftar/'.$t->slug); ?>" data-hashtag="#/moto/helmets" data-touchpoint="home"><?php echo $t->judul; ?></a></li>
                        </ul>
                        <?php } ?>
                      </li>
                      <li><a class="header-menu-level2-anchor " href="moto.html" data-hashtag="#/moto" data-touchpoint="home">IM</a>
                      <ul class="header-menu-level3">
                        <li><a class="header-menu-level3-anchor " href="<?php echo base_url('carapesan'); ?>" data-hashtag="#/moto/helmets" data-touchpoint="home">How To Order</a></li>
                        <li><a class="header-menu-level3-anchor " href="<?php echo base_url('kontak'); ?>" data-hashtag="#/moto/helmets" data-touchpoint="home">Contact Us</a></li>
                        <li><a class="header-menu-level3-anchor " href="<?php echo base_url('services'); ?>" data-hashtag="#/moto/helmets" data-touchpoint="home">Services</a></li>
                        <li><a class="header-menu-level3-anchor " href="<?php echo base_url('syaratdanketentuan'); ?>" data-hashtag="#/moto/helmets" data-touchpoint="home">Terms And Condition</a></li>
                      </ul>
                    </li>
                      <?php
            $isLogin= $this->session->userdata('masuk');
              if (isset($isLogin)!=true)
            {
            echo '
                      <li><a class="header-menu-level2-anchor " href="moto.html" data-hashtag="#/moto" data-touchpoint="home">Member Area</a>
                      <ul class="header-menu-level3">
                        <li><a class="header-menu-level3-anchor " href="'.base_url('login').'" data-hashtag="#/moto/helmets" data-touchpoint="home">Login</a></li>
                      </ul>
                      <ul class="header-menu-level3">
                        <li><a class="header-menu-level3-anchor " href="'.base_url('register').'" data-hashtag="#/moto/helmets" data-touchpoint="home">Register</a></li>
                      </ul>
                    </li>';
              }
            else
            {
            echo '
            <li><a class="header-menu-level2-anchor " href="moto.html" data-hashtag="#/moto" data-touchpoint="home">
            '.$this->session->userdata("username").'
            </a>
                      <ul class="header-menu-level3">
                        <li><a class="header-menu-level3-anchor " href="'.base_url('history').'" data-hashtag="#/moto/helmets" data-touchpoint="home">History Pembelian</a></li>
                      </ul>
                      <ul class="header-menu-level3">
                        <li><a class="header-menu-level3-anchor " href="'.base_url('logout').'" data-hashtag="#/moto/helmets" data-touchpoint="home">Logout</a></li>
                      </ul>
                    </li>
                    ';
            }

            ?>

                  </ul>
                </li>
              </ul>
            </li>
            <li><a class="header-menu-level1-anchor" href="<?php echo base_url('about') ;?>" data-touchpoint="home" data-hashtag="#/custom-paint" > About </a>
          </li>
          <li><a class="header-menu-level1-anchor" href="<?php echo base_url('kontak') ;?>" data-touchpoint="home" data-hashtag="#/custom-paint"> Contact Us </a></li>
        </ul>
      </nav>
    </div>
    <div class="header-right-menu">
      <!--
      <div class="header-menu-profile" data-view="Header.Profile">
        <div class="header-profile-menu-login-container">
          <ul class="header-profile-menu-login">
            <li class="header-profile-desktop-login-link"><a class="header-profile-login-link" data-touchpoint="login" data-hashtag="login-register" href="<?php echo base_url('login')?>"><span class="btn glyphicon glyphicon-user"></span></a>
          </li>
          <div class="header-profile-mobile-login-links">
            <li><a class="header-profile-login-link" data-touchpoint="login" data-hashtag="login-register" href="#"> Login </a></li>
            <li> | </li>
            <li><a class="header-profile-register-link" data-touchpoint="register" data-hashtag="login-register" href="#"> Register </a></li>
          </div>
        </ul>
      </div>
    </div>
  -->
    <div class="header-menu-cart">
      <div class="header-menu-cart-dropdown">
        <div data-view="Header.MiniCart"> <a class="header-mini-cart-menu-cart-link " data-type="mini-cart" title="Cart" data-touchpoint="home" data-hashtag="#cart" href="#" data-toggle="dropdown"><span class="btn glyphicon glyphicon-shopping-cart"></span><span class="header-mini-cart-menu-cart-legend">
        <?php  $rows = $this->cart->total_items(); ?>
        <?php
        if ($rows != 0) {
        echo $rows;
        }
        else {
        echo "0";
        }
      ?> </span></a>
      <div class="header-mini-cart" >
        <div class="header-mini-cart-empty">
          <?php  $q = $this->cart->total_items(); ?>
          <?php
          if ($q == 0) {
          echo "YOUR CART IS EMPTY";
          }
          ?>
          <table id="table" border="0" class="table">
            <?php
            // All values of cart store in "$cart".
            if ($cart = $this->cart->contents()): ?>
            <tr id= "main_heading">
              <th align="center">Name</th>
              <th align="center">Price</th>
              <th align="center">Qty</th>
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
            <tr class="border_bottom">
              <td align="left">
                <?php echo $item['name']; ?>
              </td>
              <td align="left">
                Rp. <?php echo number_format($item['price'] ); ?>
              </td>
              <td align="left">
                <?php echo number_format($item['qty'] ); ?>
              </td>
              <?php $grand_total = $grand_total + $item['subtotal']; ?>
              <?php
              // cancle image.
              ?>
              <?php endforeach; ?>
            </tr>
            <tr>
              <?php // "clear cart" button call javascript confirmation message ?>
            </tr>
            <tr style="padding : 5px ; " >
              <td><b>Total: </td>
              <td colspan="2" align="right">
                <strong>Rp. <?php echo number_format($grand_total); ?></b></strong>
              </td>.
            </tr>
            <tr>
            </tr>
            <tr>
              <td>
                <a href="<?php echo base_url('shop'); ?>" type="button" class ='btn btn-warning' value="Clear Cart" >View Cart</a>
              </td>
              <?php echo form_close(); ?>
              <td colspan="2" align="right">
                <!-- "Place order button" on click send "billing" controller  -->
                <input type="button" class ='btn btn-danger' value="Checkout" onclick="window.location = 'billing/guest'">
              </td>
            </tr>
            <?php endif; ?>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="header-menu-searchmobile"><button class="header-menu-searchmobile-link active" data-action="show-sitesearch" title="Search"><!--<i class="header-menu-searchmobile-icon"></i>--></button></div>
</div>
</div>
<div id="banner-header-bottom" class="content-banner banner-header-bottom" data-cms-area="header_banner_bottom" data-cms-area-filters="global"></div>
</nav>
</div>
<div class="header-sidebar-overlay" data-action="header-sidebar-hide"></div>
<div class="header-secondary-wrapper" data-view="Header.Menu" data-phone-template="header_sidebar" data-tablet-template="header_sidebar">
<nav class="header-menu-secondary-nav">
<ul class="header-menu-level1">
<li><a class="header-menu-home-anchor" href="index.html" data-touchpoint="home" data-hashtag="#/" data-toggle="dropdown"> Shop </a>
<ul class="header-menu-level-container">
<li>
  <ul class="header-menu-level2">

  <li><a class="header-menu-level2-anchor " href="bike.html" data-hashtag="#/bike" data-touchpoint="home">bike</a>
  <ul class="header-menu-level3">
    <li><a class="header-menu-level3-anchor " href="bike/helmets.html" data-hashtag="#/bike/helmets" data-touchpoint="home">helmets</a></li>
    <li><a class="header-menu-level3-anchor " href="bike/jerseys.html" data-hashtag="#/bike/jerseys" data-touchpoint="home">jerseys</a></li>
    <li><a class="header-menu-level3-anchor " href="bike/shorts.html" data-hashtag="#/bike/shorts" data-touchpoint="home">shorts</a></li>
    <li><a class="header-menu-level3-anchor " href="bike/pants.html" data-hashtag="#/bike/pants" data-touchpoint="home">pants</a></li>
    <li><a class="header-menu-level3-anchor " href="bike/gloves.html" data-hashtag="#/bike/gloves" data-touchpoint="home">gloves</a></li>
    <li><a class="header-menu-level3-anchor " href="bike/base-layer.html" data-hashtag="#/bike/base-layer" data-touchpoint="home">Bibs and Base Layers</a></li>
    <li><a class="header-menu-level3-anchor " href="bike/socks.html" data-hashtag="#/bike/socks" data-touchpoint="home">socks</a></li>
    <li><a class="header-menu-level3-anchor " href="bike/jackets.html" data-hashtag="#/bike/jackets" data-touchpoint="home">jackets</a></li>
    <li><a class="header-menu-level3-anchor " href="bike/protection.html" data-hashtag="#/bike/protection" data-touchpoint="home">protection</a></li>
    <li><a class="header-menu-level3-anchor " href="bike/accessories.html" data-hashtag="#/bike/accessories" data-touchpoint="home">accessories</a></li>
    <li><a class="header-menu-level3-anchor " href="bike/women.html" data-hashtag="#/bike/women" data-touchpoint="home">women</a></li>
    <li><a class="header-menu-level3-anchor " href="bike/youth.html" data-hashtag="#/bike/youth" data-touchpoint="home">youth</a></li>
    <li><a class="header-menu-level3-anchor " href="bike/collections.html" data-hashtag="#/bike/collections" data-touchpoint="home">collections</a></li>
  </ul>
</li>
<li><a class="header-menu-level2-anchor " href="sportswear.html" data-hashtag="#/sportswear" data-touchpoint="home">sportswear</a>
<ul class="header-menu-level3">
  <li><a class="header-menu-level3-anchor " href="sportswear/men.html" data-hashtag="#/sportswear/men" data-touchpoint="home">men</a></li>
  <li><a class="header-menu-level3-anchor " href="sportswear/women.html" data-hashtag="#/sportswear/women" data-touchpoint="home">women</a></li>
  <li><a class="header-menu-level3-anchor " href="sportswear/youth.html" data-hashtag="#/sportswear/youth" data-touchpoint="home">youth</a></li>
  <li><a class="header-menu-level3-anchor " href="sportswear/luggage.html" data-hashtag="#/sportswear/luggage" data-touchpoint="home">luggage</a></li>
  <li><a class="header-menu-level3-anchor " href="sportswear/collaborations.html" data-hashtag="#/sportswear/collaborations" data-touchpoint="home">collaborations</a></li>
  <li><a class="header-menu-level3-anchor " href="sportswear/accessories.html" data-hashtag="#/sportswear/accessories" data-touchpoint="home">accessories</a></li>
  <li><a class="header-menu-level3-anchor " href="sportswear/pit-gear.html" data-hashtag="#/sportswear/pit-gear" data-touchpoint="home">pit gear</a></li>
</ul>
</li>
<li><a class="header-menu-level2-anchor " href="activity.html" data-hashtag="#/activity" data-touchpoint="home">activity</a>
<ul class="header-menu-level3">
<li><a class="header-menu-level3-anchor " href="activity/motocross.html" data-hashtag="#/activity/motocross" data-touchpoint="home">motocross</a></li>
<li><a class="header-menu-level3-anchor " href="activity/off-road.html" data-hashtag="#/activity/off-road" data-touchpoint="home">off-road</a></li>
<li><a class="header-menu-level3-anchor " href="activity/all-mountain.html" data-hashtag="#/activity/all-mountain" data-touchpoint="home">all mountain</a></li>
<li><a class="header-menu-level3-anchor " href="activity/gravity.html" data-hashtag="#/activity/gravity" data-touchpoint="home">gravity</a></li>
<li><a class="header-menu-level3-anchor " href="activity/bmx.html" data-hashtag="#/activity/bmx" data-touchpoint="home">BMX</a></li>
<li><a class="header-menu-level3-anchor " href="activity/cross-country.html" data-hashtag="#/activity/cross-country" data-touchpoint="home">cross country</a></li>
<li><a class="header-menu-level3-anchor " href="activity/hybrid.html" data-hashtag="#/activity/hybrid" data-touchpoint="home">hybrid</a></li>
</ul>
</li>
<li><a class="header-menu-level2-anchor " href="new-products.html" data-hashtag="#/new-products" data-touchpoint="home">New Products</a>
<ul class="header-menu-level3">
<li><a class="header-menu-level3-anchor " href="new-products/new-products-sportswear.html" data-hashtag="#/new-products/new-products-sportswear" data-touchpoint="home">New Products - Sportswear</a></li>
</ul>
</li>
</ul>
</li>
</ul>
</li>
<li><a class="header-menu-level1-anchor" href="custom-paint.html" data-touchpoint="home" data-hashtag="#/custom-paint"> Paint </a></li>
<li><a class="header-menu-shop-anchor" href="search.html" data-touchpoint="home" data-hashtag="#/search?keywords=athletes" data-toggle="dropdown"> Athletes </a>
<ul class="header-menu-level-container">
<li>
<ul class="header-menu-level2">
<li><a class=""></a>
<ul class="header-menu-level3">
<li><a class="header-menu-level3-anchor" data-hashtag="#pro-moto-athletes" href="pro-moto-athletes.html" data-touchpoint="home">Pro Moto Athletes</a></li>
<li><a class="header-menu-level3-anchor" data-hashtag="#pro-bike-athletes" href="pro-bike-athletes.html" data-touchpoint="home">Pro Bike Athletes</a></li>
<li><a class="header-menu-level3-anchor" data-hashtag="#amateur-moto-athletes" href="amateur-moto-athletes.html" data-touchpoint="home">Amateur Moto Athletes</a></li>
<li><a class="header-menu-level3-anchor" data-hashtag="#amateur-bike-athletes" href="amateur-bike-athletes.html" data-touchpoint="home">Amateur Bike Athletes</a></li>
<li><a class="header-menu-level3-anchor" data-hashtag="#sponsorship" href="sponsorship.html" data-touchpoint="home">Sponsorship</a></li>
</ul>
</li>
</ul>
</li>
</ul>
</li>
<li><a class="header-menu-level1-anchor" href="search.html" data-touchpoint="home" data-toggle="dropdown"> </a>
<ul class="header-menu-level-container">
<li>
<ul class="header-menu-level2">
<li><a class=""></a>
<ul class="header-menu-level3">
<li><a class="header-menu-level3-anchor" data-hashtag="#company" href="company.html" data-touchpoint="home">About TLD</a></li>
<li><a class="header-menu-level3-anchor" data-hashtag="#customer-service" href="customer-service.html" data-touchpoint="home">Customer Service</a></li>
<li><a class="header-menu-level3-anchor" data-hashtag="#store-locator" href="store-locator.html" data-touchpoint="home">Find a Store</a></li>
<li><a class="header-menu-level3-anchor" href="http://www.troyleeblog.com/" data-navigation="ignore-click" target="_blank">News</a></li>
<li><a class="header-menu-level3-anchor" data-hashtag="#company?go-to=section-careers" href="companyf857.html?go-to=section-careers" data-touchpoint="home">Careers at TLD</a></li>
<li><a class="header-menu-level3-anchor" data-hashtag="#customer-service?go-to=section-manuals" href="customer-service0ded.html?go-to=section-manuals" data-touchpoint="home">Manuals and Catalogs</a></li>
</ul>
</li>
</ul>
</li>
</ul>
</li>
</ul>
</nav>
</div>
<div data-view="SiteSearch">
<div class="site-search" style="overflow: hidden; display: none; height: 0px; padding-top: 0px; margin-top: 0px; padding-bottom: 0px; margin-bottom: 20px; overflow-x: 0; overflow-y: 0;">
<div class="site-search-content">
<form class="site-search-content-form" method="GET" action="http://www.troyleedesigns.com/search" data-action="search">
<div class="site-search-content-input"><input data-type="site-search" class="site-search-input typeahead" placeholder="Search for products" type="search" name="keywords" autocomplete="off" maxlength="40" /><i class="site-search-input-icon"></i><a class="site-search-input-reset"
style="display: none;"><i class="site-search-input-reset-icon"></i></a></div><button class="site-search-button-submit" type="submit">Go</button><a href="#" class="site-search-button-close" data-action="hide-sitesearch">Close</a></form>
</div>
</div>
</div>
</header>
<div class="container" id="mobile-menu">
      <ul class="header-menu-level2">
        <li><a class="header-menu-level2-anchor " href="moto.html" data-hashtag="#/moto" data-touchpoint="home">Kategori</a>
        <?php foreach ($mkategori as $t) { ?>
        <ul class="header-menu-level3">
          <li><a class="header-menu-level3-anchor " href="<?php echo base_url('kategori/daftar/'.$t->slug); ?>" data-hashtag="#/moto/helmets" data-touchpoint="home"><?php echo $t->namakategori; ?></a></li>
        </ul>
        <?php } ?>
      </li>
      <li><a class="header-menu-level2-anchor " href="moto.html" data-hashtag="#/moto" data-touchpoint="home">Sub</a>
      <?php foreach ($msubkategori as $t) { ?>
      <ul class="header-menu-level3">
        <li><a class="header-menu-level3-anchor " href="<?php echo base_url('subkategori/daftar/'.$t->slug); ?>" data-hashtag="#/moto/helmets" data-touchpoint="home"><?php echo $t->namasubkategori; ?></a></li>
      </ul>
      <?php } ?>
    </li>
    <li><a class="header-menu-level2-anchor " href="moto.html" data-hashtag="#/moto" data-touchpoint="home">Event</a>
    <?php foreach ($mevent as $t) { ?>
    <ul class="header-menu-level3">
      <li><a class="header-menu-level3-anchor " href="<?php echo base_url('event/daftar/'.$t->slug); ?>" data-hashtag="#/moto/helmets" data-touchpoint="home"><?php echo $t->judul; ?></a></li>
    </ul>
    <?php } ?>
  </li>
  <?php
$isLogin= $this->session->userdata('masuk');
if (isset($isLogin)!=true)
{
echo '
  <li><a class="header-menu-level2-anchor " href="moto.html" data-hashtag="#/moto" data-touchpoint="home">Member</a>
  <ul class="header-menu-level3">
    <li><a class="header-menu-level3-anchor " href="'.base_url('login').'" data-hashtag="#/moto/helmets" data-touchpoint="home">Login</a></li>
  </ul>
  <ul class="header-menu-level3">
    <li><a class="header-menu-level3-anchor " href="'.base_url('register').'" data-hashtag="#/moto/helmets" data-touchpoint="home">Register</a></li>
  </ul>
</li>';
}
else
{
echo '
<li><a class="header-menu-level2-anchor " href="moto.html" data-hashtag="#/moto" data-touchpoint="home">
'.$this->session->userdata("username").'
</a>
  <ul class="header-menu-level3">
    <li><a class="header-menu-level3-anchor " href="'.base_url('history').'" data-hashtag="#/moto/helmets" data-touchpoint="home">History Pembelian</a></li>
  </ul>
  <ul class="header-menu-level3">
    <li><a class="header-menu-level3-anchor " href="'.base_url('logout').'" data-hashtag="#/moto/helmets" data-touchpoint="home">Logout</a></li>
  </ul>
</li>
';
}

?>
  </ul>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$( "#header-sidebar-toggle" ).click(function() {
  $( "#mobile-menu" ).toggle( "slow" );
});
</script>
