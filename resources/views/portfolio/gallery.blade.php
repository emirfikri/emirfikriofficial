<!DOCTYPE html>
<html>
<head>
        @include('layout.partials.head')
        @include('layout.partials.header')
<style>
div.gallery {
  border: 1px solid #ccc;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
  max-height: 900px;
}

div.desc {
  padding: 15px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 24.99999%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}
</style>
</head>
<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KZGLKFJ"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    
<div class="container">

<h2>Past Work Image Gallery</h2>
<h4>1. <a href="https://github.com/emirfikri/fluuter_pn">Productnation</a> App (Flutter)</h4>

<div class="row" style="padding:10px 10px;">
    <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="{!! asset('portfolio/img/work/pn_app/pn_splash.PNG') !!}">
            <img src="{!! asset('portfolio/img/work/pn_app/pn_splash.PNG') !!}" alt="Cinque Terre" width="600" height="400">
          </a>
          <div class="desc">Productnation Splash Screen</div>
        </div>
      </div>
      
      <div class="responsive">
          <div class="gallery">
            <a target="_blank" href="{!! asset('portfolio/img/work/pn_app/pn_tech.PNG') !!}">
              <img src="{!! asset('portfolio/img/work/pn_app/pn_tech.PNG') !!}" alt="Cinque Terre" width="600" height="400">
            </a>
            <div class="desc">Tech page</div>
          </div>
        </div>
      
      <div class="responsive">
          <div class="gallery">
            <a target="_blank" href="{!! asset('portfolio/img/work/pn_app/pn_allcategory.PNG') !!}">
              <img src="{!! asset('portfolio/img/work/pn_app/pn_allcategory.PNG') !!}" alt="Cinque Terre" width="600" height="400">
            </a>
            <div class="desc"> All category</div>
          </div>
        </div>
      
        <div class="responsive">
          <div class="gallery">
            <a target="_blank" href="{!! asset('portfolio/img/work/pn_app/pn_appliances.PNG') !!}">
              <img src="{!! asset('portfolio/img/work/pn_app/pn_appliances.PNG') !!}" alt="Cinque Terre" width="600" height="400">
            </a>
            <div class="desc"> Category page</div>
          </div>
        </div>
</div>

<div class="row" style="padding:10px 10px;">
    <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="{!! asset('portfolio/img/work/pn_app/pn_search.PNG') !!}">
            <img src="{!! asset('portfolio/img/work/pn_app/pn_search.PNG') !!}" alt="Cinque Terre" width="600" height="400">
          </a>
          <div class="desc"> Search page</div>
        </div>
      </div>
    
      <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="{!! asset('portfolio/img/work/pn_app/spn_searchpage.PNG') !!}">
            <img src="{!! asset('portfolio/img/work/pn_app/spn_searchpage.PNG') !!}" alt="Cinque Terre" width="600" height="400">
          </a>
          <div class="desc"> Search Result</div>
        </div>
      </div>
      <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="{!! asset('portfolio/img/work/pn_app/pn_wishlist.PNG') !!}">
            <img src="{!! asset('portfolio/img/work/pn_app/pn_wishlist.PNG') !!}" alt="Cinque Terre" width="600" height="400">
          </a>
          <div class="desc"> wishlist</div>
        </div>
      </div>
      <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="{!! asset('portfolio/img/work/pn_app/pn_deletewishlist.PNG') !!}">
            <img src="{!! asset('portfolio/img/work/pn_app/pn_deletewishlist.PNG') !!}" alt="Cinque Terre" width="600" height="400">
          </a>
          <div class="desc"> Delete wishlist</div>
        </div>
      </div>
</div>
  
<div class="row" style="padding:10px 10px;">
    <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="{!! asset('portfolio/img/work/pn_app/pn_articlepagewithproduct.PNG') !!}">
            <img src="{!! asset('portfolio/img/work/pn_app/pn_articlepagewithproduct.PNG') !!}" alt="Cinque Terre" width="600" height="400">
          </a>
          <div class="desc">Article with product</div>
        </div>
      </div>
      <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="{!! asset('portfolio/img/work/pn_app/pn_articlepagewithoutproduct.PNG') !!}">
            <img src="{!! asset('portfolio/img/work/pn_app/pn_articlepagewithoutproduct.PNG') !!}" alt="Cinque Terre" width="600" height="400">
          </a>
          <div class="desc">Article without product</div>
        </div>
      </div>
      <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="{!! asset('portfolio/img/work/pn_app/pn_productpage.PNG') !!}">
            <img src="{!! asset('portfolio/img/work/pn_app/pn_productpage.PNG') !!}" alt="Cinque Terre" width="600" height="400">
          </a>
          <div class="desc">Product page</div>
        </div>
      </div>

      <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="{!! asset('portfolio/img/work/pn_app/pn_buynowlink.PNG') !!}">
            <img src="{!! asset('portfolio/img/work/pn_app/pn_buynowlink.PNG') !!}" alt="Cinque Terre" width="600" height="400">
          </a>
          <div class="desc">External Link</div>
        </div>
      </div>
    
    
</div>
<div class="row" style="padding:10px 10px;">
    <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="{!! asset('portfolio/img/work/pn_app/pn_loginwithfacebook.PNG') !!}">
            <img src="{!! asset('portfolio/img/work/pn_app/pn_loginwithfacebook.PNG') !!}" alt="Cinque Terre" width="600" height="400">
          </a>
          <div class="desc">Login/Signup page</div>
        </div>
      </div>
      <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="{!! asset('portfolio/img/work/pn_app/pn_articlecontent.PNG') !!}">
            <img src="{!! asset('portfolio/img/work/pn_app/pn_articlecontent.PNG') !!}" alt="Cinque Terre" width="600" height="400">
          </a>
          <div class="desc">Article content</div>
        </div>
      </div>
      <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="{!! asset('portfolio/img/work/pn_app/pn_profile.png') !!}">
            <img src="{!! asset('portfolio/img/work/pn_app/pn_profile.png') !!}" alt="Cinque Terre" width="600" height="400">
          </a>
          <div class="desc">Profile</div>
        </div>
      </div>
    
    
</div>

<div class="clearfix"></div>

<div style="padding:6px;">
  <p>Productnation App using flutter.</p>
</div>

<br>

<h4><a href="https://productnation.co">2. Productnation (Laravel)</a></h4>

<div class="row" style="padding:10px 10px;">
    <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="{!! asset('portfolio/img/work/pn_web/pn_ab.PNG') !!}">
            <img src="{!! asset('portfolio/img/work/pn_web/pn_ab.PNG') !!}" alt="Cinque Terre" width="600" height="400">
          </a>
          <div class="desc">Productnation A/B Testing & backend admin improvement</div>
        </div>
      </div>
      <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="{!! asset('portfolio/img/work/pn_web/pn_activitylog.PNG') !!}">
            <img src="{!! asset('portfolio/img/work/pn_web/pn_activitylog.PNG') !!}" alt="Cinque Terre" width="600" height="400">
          </a>
          <div class="desc">Productnation A/B Testing & backend admin improvement</div>
        </div>
      </div>
</div>

<br>

<h4>3. <a href="https://github.com/emirfikri/geteat">GetEat</a> App (Flutter)  - UI/UX , R&D SDK, Testing</h4>

<div class="row" style="padding:10px 10px;">
    <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="{!! asset('portfolio/img/work/getgroup//geteatapp/geteatmaps.PNG') !!}">
            <img src="{!! asset('portfolio/img/work/getgroup/geteatapp/geteatmaps.PNG') !!}" alt="Cinque Terre" width="600" height="400">
          </a>
          <div class="desc">Map</div>
        </div>
      </div>
      
      <div class="responsive">
          <div class="gallery">
            <a target="_blank" href="{!! asset('portfolio/img/work/getgroup/geteatapp/geteatlogin.PNG') !!}">
              <img src="{!! asset('portfolio/img/work/getgroup/geteatapp/geteatlogin.PNG') !!}" alt="Cinque Terre" width="600" height="400">
            </a>
            <div class="desc">Login/Register</div>
          </div>
        </div>
      
      <div class="responsive">
          <div class="gallery">
            <a target="_blank" href="{!! asset('portfolio/img/work/getgroup/geteatapp/geteatbarcode.PNG') !!}">
              <img src="{!! asset('portfolio/img/work/getgroup/geteatapp/geteatbarcode.PNG') !!}" alt="Cinque Terre" width="600" height="400">
            </a>
            <div class="desc">QQr Code Voucher</div>
          </div>
        </div>
</div>

<br>

<h4>4. <a href="https://getlah.my">Getlah</a>/<a href="https://bitbucket.org/emirfikri/getlah/src/master/">tapbelanja</a> - Dicontinued (Native Php)</h4>

<div class="row" style="padding:10px 10px;">
    <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="{!! asset('portfolio/img/work/getgroup/getlahlanding.jpg') !!}">
            <img src="{!! asset('portfolio/img/work/getgroup/getlahlanding.jpg') !!}" alt="Cinque Terre" width="600" height="400">
          </a>
          <div class="desc">Getlah HomePage</div>
        </div>
      </div>
      
      <div class="responsive">
          <div class="gallery">
            <a target="_blank" href="{!! asset('portfolio/img/work/getgroup/getlah1.png') !!}">
              <img src="{!! asset('portfolio/img/work/getgroup/getlah1.png') !!}" alt="Cinque Terre" width="600" height="400">
            </a>
            <div class="desc">RM1 page</div>
          </div>
        </div>
      
      <div class="responsive">
          <div class="gallery">
            <a target="_blank" href="{!! asset('portfolio/img/work/getgroup/Latest result.png') !!}">
              <img src="{!! asset('portfolio/img/work/getgroup/Latest result.png') !!}" alt="Cinque Terre" width="600" height="400">
            </a>
            <div class="desc">Latest Result</div>
          </div>
        </div>
      
        <div class="responsive">
          <div class="gallery">
            <a target="_blank" href="{!! asset('portfolio/img/work/getgroup/Quest.png') !!}">
              <img src="{!! asset('portfolio/img/work/getgroup/Quest.png') !!}" alt="Cinque Terre" width="600" height="400">
            </a>
            <div class="desc">Help</div>
          </div>
        </div>
</div>


<br>

<h4>5. <a href="http://getsupply.asia/">GetSupply</a>/<a href="https://geteat.asia/">GetEat</a> - UI/UX / API(POS) / Screen Scrapping</h4>

<div class="row" style="padding:10px 10px;">
    <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="{!! asset('portfolio/img/work/getgroup/Artboard 1.png') !!}">
            <img src="{!! asset('portfolio/img/work/getgroup/Artboard 1.png') !!}" alt="Cinque Terre" width="600" height="400">
          </a>
          <div class="desc">GetEat</div>
        </div>
      </div>
      
      <div class="responsive">
          <div class="gallery">
            <a target="_blank" href="{!! asset('portfolio/img/work/getgroup/getsupply.png') !!}">
              <img src="{!! asset('portfolio/img/work/getgroup/getsupply.png') !!}" alt="Cinque Terre" width="600" height="400">
            </a>
            <div class="desc">GetSupply</div>
          </div>
        </div>
      
      <div class="responsive">
          <div class="gallery">
            <a target="_blank" href="{!! asset('portfolio/img/work/getgroup/resit.jpg') !!}">
              <img src="{!! asset('portfolio/img/work/getgroup/resit.jpg') !!}" alt="Cinque Terre" width="600" height="400">
            </a>
            <div class="desc">Sample Resit</div>
          </div>
        </div>
      
        <div class="responsive">
          <div class="gallery">
            <a target="_blank" href="{!! asset('portfolio/img/work/getgroup/scrap.png') !!}">
              <img src="{!! asset('portfolio/img/work/getgroup/scrap.png') !!}" alt="Cinque Terre" width="600" height="400">
            </a>
            <div class="desc">Screen Scrappin</div>
          </div>
        </div>
</div>

<br>

<h4>6. AirKemudi e-Shop -Full Stack (Laravel)</h4>
<div class="row" style="padding:10px 10px;">
      <div class="responsive">
          <div class="gallery">
            <a target="_blank" href="{!! asset('portfolio/img/work/sasb/airkemudi.jpg') !!}">
              <img src="{!! asset('portfolio/img/work/sasb/airkemudi.jpg') !!}" alt="Cinque Terre" width="600" height="400">
            </a>
            <div class="desc">E-shop Air-Kemudi</div>
          </div>
        </div>
</div>

<br>

<h4>7. <a href="https://mygdx.malaysia.gov.my/ms">MyGdx</a> / <a href="https://www.wildlife.gov.my/">Perhilitan </a> - UI / Tester / Maintainance / Fix issues</h4>
<div class="row" style="padding:10px 10px;">
    <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="{!! asset('portfolio/img/work/sasb/mygdx.PNG') !!}">
            <img src="{!! asset('portfolio/img/work/sasb/mygdx.PNG') !!}" alt="Cinque Terre" width="600" height="400">
          </a>
          <div class="desc">Mygdx</div>
        </div>
      </div>
      
      <div class="responsive">
          <div class="gallery">
            <a target="_blank" href="{!! asset('portfolio/img/work/sasb/e-perhilitan.PNG') !!}">
              <img src="{!! asset('portfolio/img/work/sasb/e-perhilitan.PNG') !!}" alt="Cinque Terre" width="600" height="400">
            </a>
            <div class="desc">Perhilitan</div>
          </div>
        </div>
</div>

<br>

<h4>8. Mockup Interface - HTML5, Bootstrap, Vue Cli, Javascript  </h4>

<div class="row" style="padding:10px 10px;">
    <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="{!! asset('portfolio/img/work/others_mockup/OnePage-PSD.png') !!}">
            <img src="{!! asset('portfolio/img/work/others_mockup/OnePage-PSD.png') !!}" alt="Cinque Terre" width="600" height="400">
          </a>
          <div class="desc"><a href="https://github.com/emirfikri/vue_testmaster">Vue Cli</a></div>
        </div>
      </div>
      
      <div class="responsive">
          <div class="gallery">
            <a target="_blank" href="{!! asset('portfolio/img/work/others_mockup/tech_interview_mockup-1.jpg') !!}">
              <img src="{!! asset('portfolio/img/work/others_mockup/tech_interview_mockup-1.jpg') !!}" alt="Cinque Terre" width="600" height="400">
            </a>
            <div class="desc"><a href="https://onedrive.live.com/?id=C66B87E2B36874D7%2113105&cid=C66B87E2B36874D7">HTML5 and BootStrap</a></div>
          </div>
        </div>
</div>
<div class="row" style="padding:10px 10px;">
    <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="{!! asset('portfolio/img/work/mockup sasb/landing1.JPG') !!}">
            <img src="{!! asset('portfolio/img/work/mockup sasb/landing1.JPG') !!}" alt="Cinque Terre" width="600" height="400">
          </a>
          <div class="desc">MRSM</div>
        </div>
      </div>
      
      <div class="responsive">
          <div class="gallery">
            <a target="_blank" href="{!! asset('portfolio/img/work/mockup sasb/landingzoomout.png') !!}">
              <img src="{!! asset('portfolio/img/work/mockup sasb/landingzoomout.png') !!}" alt="Cinque Terre" width="600" height="400">
            </a>
            <div class="desc">Zakat</div>
          </div>
        </div>
        <div class="responsive">
            <div class="gallery">
              <a target="_blank" href="{!! asset('portfolio/img/work/mockup sasb/rtmlanding2.JPG') !!}">
                <img src="{!! asset('portfolio/img/work/mockup sasb/rtmlanding2.JPG') !!}" alt="Cinque Terre" width="600" height="400">
              </a>
              <div class="desc">RTM</div>
            </div>
          </div>
          <div class="responsive">
            <div class="gallery">
              <a target="_blank" href="{!! asset('portfolio/img/work/mockup sasb/welcome.JPG') !!}">
                <img src="{!! asset('portfolio/img/work/mockup sasb/welcome.JPG') !!}" alt="Cinque Terre" width="600" height="400">
              </a>
              <div class="desc">MNC Malaysia</div>
            </div>
          </div>
</div>

<br>

<h4>9. <a href="https://www.mospaze.com//">Mospaze (laravel)</a> , tapau (react native), orientation app (ionic / react native), UDW POS - Software Tester</h4>

<br>

<h4>10. Tabung Haji Apps (Android Native) - improvement of UI/UX, Fix issues, tester </h4>



</div>
</body>
</html>
