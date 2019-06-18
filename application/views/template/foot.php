<footer id="site-footer" class="shopping-layout-footer" data-view="Footer">
      <div data-view="Global.BackToTop">
        <div id="back-to-top" class="global-views-back-to-top"><a href="#" data-action="back-to-top"><i class="global-views-back-to-top-icon"></i> Back to Top </a></div>
      </div>
      <div id="banner-footer" class="content-banner banner-footer" data-cms-area="global_banner_footer" data-cms-area-filters="global"></div>
      <div class="footer-content">
        <div class="footer-content-nav">
          <ul class="footer-content-nav-list about-us">
            <li class="first"><a href="#" class="first" data-toggle="collapse" data-target=".about-us .footer-collapsed-list" data-type="collapse">IM PRODUCT</a></li>
            <li class="footer-collapsed-list"><a href="<?php echo base_url('carapesan')?>" data-touchpoint="home" data-hashtag="#customer-service">How To Order</a></li>
            <li class="footer-collapsed-list"><a href="<?php echo base_url('kontak')?>" data-touchpoint="home" data-hashtag="#customer-service">Contact Us</a></li>
            <li class="footer-collapsed-list"><a href="<?php echo base_url('services')?>" data-touchpoint="home" data-hashtag="#customer-service">Service</a></li>
            <li class="footer-collapsed-list"><a href="<?php echo base_url('syaratdanketentuan')?>" data-touchpoint="customercenter" data-hashtag="#overview" name="accountoverview">Terms And Condition</a></li>
          </ul>
          <ul class="footer-content-nav-social">
            <li class="first"><a href="#" class="first">Connect with Us</a></li>
            <li>
              <ul class="footer-social">
              <?php foreach ($socmed as $t) { ?>
                <li class="footer-social-item"><a class="" href="<?php echo $t->link; ?>" target="_blank"><i class="<?php echo $t->icon; ?>"></i></a></li>
              <?php } ?>
              <!--
                <li class="footer-social-item"><a class="" href="https://twitter.com/improduct" target="_blank"><i class="footer-social-twitter-icon"></i></a></li>
                <li class="footer-social-item"><a href="https://plus.google.com/improduct" target="_blank"><i class="footer-social-google-icon"></i></a></li>
                <li class="footer-social-item"><a href="https://www.facebook.com/improduct" target="_blank"><i class="footer-social-facebook-icon"></i></a></li>
				-->
              </ul>
            </li>
          </ul>
          <ul class="footer-content-newsletter">
            <li class="first">Sign up for the IM Products Member</li>
            <li data-view="Newsletter.SignUp">
              <div class="ctct-embed-signup"><span class="newsletter-promo-text"></span>
                <form id="ctct_signup" name="embedded_signup" method="POST" action="<?php echo base_url('register/registerfooter') ?>">
                  <div class="newsletter-form-wrapper"><input data-id="ca:input" type="hidden" name="ca" value="471df303-fb20-4e4e-8e80-6119e0cd6c58" /><input data-id="list:input" type="hidden" name="list" value="1525873744" /><input data-id="source:input" type="hidden" name="source" value="EFD"
                    /><input data-id="required:input" type="hidden" name="required" value="list,email" /><input data-id="url:input" type="hidden" name="url" value="" /><input data-id="Email Address:input" style="margin-bottom:0" type="email" size="30"
                      name="email" value="" placeholder="enter your email address" maxlength="80" data-validation="control" />
                    <div id="ctct_messages" class="messages" style="display:none;">
                      <div id="ctct_success_message" class="messages" style="display:none;">Success! Thanks for signing up! </div>
                      <div id="ctct_error_message" class="messages" style="display:none;">Whoops. Something went wrong.</div>
                    </div><button type="submit" class="footer-newsletter-email-form-submit Button ctct-button Button--block Button-secondary" data-enabled="enabled">SIGN UP </button></div>
                </form>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <div class="footer-content-bottom">
        <p class="footer-copyright">© 2018 IM Products </p>
      </div>
    </footer>
  </div>
</div>
</div>

<script>
var SC=window.SC={ENVIRONMENT:{jsEnvironment:typeof nsglobal==='undefined'?'browser':'server'},isCrossOrigin:function(){return'www.troyleedesigns.com'!==document.location.hostname},isPageGenerator:function(){return typeof nsglobal!=='undefined'},getSessionInfo:function(key){var session=SC.SESSION||SC.DEFAULT_SESSION||{};return key?session[key]:session},getPublishedObject:function(key){return SC.ENVIRONMENT&&SC.ENVIRONMENT.published&&SC.ENVIRONMENT.published[key]?SC.ENVIRONMENT.published[key]:null}};if(!history.pushState&&SC.ENVIRONMENT.jsEnvironment==='browser'&&(location.pathname!=='/'||location.search!=='')&&location.hash===''){if(location.pathname==='index.html'){var hash=(RegExp('fragment='+'(.+?)(&|$)').exec(location.search)||[,''])[1];location.replace(location.pathname+location.search+'/#'+unescape(hash))}else{location.replace('/#'+location.pathname+location.search)}document.write('')}if(SC.isPageGenerator()){var metas=document.head.getElementsByTagName('meta');for(var i=0;i<metas.length;i++){if(metas[i].getAttribute('content')==='nofollow,noindex'){document.head.removeChild(metas[i])}}}if(!SC.isCrossOrigin()){document.getElementById('main').innerHTML='';if(SC.isPageGenerator()){document.body.className=document.body.className+' seo-support'}SC.ENVIRONMENT.seoSupport=!!~document.body.className.indexOf('seo-support');if(SC.isPageGenerator()){SC.ENVIRONMENT.PROFILE={}}if(SC.ENVIRONMENT.jsEnvironment==='browser'&&!SC.isCrossOrigin()){var datetime=new Date().getTime();var e=document.getElementsByTagName('script')[0];var d=document.createElement('script');d.src='/c.735741/TroyLeeDesigns/TLD/shopping.user.environment.ssp?lang=en_US&cur=USD&t='+datetime+'';d.type='text/javascript';d.async=true;d.defer=true;e.parentNode.insertBefore(d,e)}}</script>

<script src="<?php echo base_url('assets/tcss/c.735741/TroyLeeDesigns/TLD/shopping.environmentd164.ssp?lang=en_US&amp;cur=USD&amp;t=1503682833286'); ?>"></script>
<script src="<?php echo base_url('assets/tcss/c.735741/TroyLeeDesigns/TLD/languages/shopping_en_USda22.js?t=1503682833286'); ?>"></script>
<script src="<?php echo base_url('assets/tcss/c.735741/TroyLeeDesigns/TLD/javascript/shoppingda22.js?t=1503682833286'); ?>"></script>
<script src="<?php echo base_url('ssets/tcss/cms/2/assets/js/postframe.js'); ?>"></script>
<script src="<?php echo base_url('ssets/tcss/cms/2/cms.js'); ?>"></script>

<DIV id="om-c2g1kxomylrtd1jc-holder"></DIV><SCRIPT>var c2g1kxomylrtd1jc,c2g1kxomylrtd1jc_poll=function(){var r=0;return function(n,l){clearInterval(r),r=setInterval(n,l)}}();!function(e,t,n){if(e.getElementById(n)){c2g1kxomylrtd1jc_poll(function(){if(window["om_loaded"]){if(!c2g1kxomylrtd1jc){c2g1kxomylrtd1jc=new OptinMonsterApp();return c2g1kxomylrtd1jc.init({"u":"27211.488691","staging":0,"dev":0,"beta":0});}}},25);return;}var d=false,o=e.createElement(t);o.id=n,o.src="../a.optnmnstr.com/app/js/api.min.js",o.async=true,o.onload=o.onreadystatechange=function(){if(!d){if(!this.readyState||this.readyState==="loaded"||this.readyState==="complete"){try{d=om_loaded=true;c2g1kxomylrtd1jc=new OptinMonsterApp();c2g1kxomylrtd1jc.init({"u":"27211.488691","staging":0,"dev":0,"beta":0});o.onload=o.onreadystatechange=null;}catch(t){}}}};(document.getElementsByTagName("head")[0]||document.documentElement).appendChild(o)}(document,"script","omapi-script");</SCRIPT></body>
</html>
