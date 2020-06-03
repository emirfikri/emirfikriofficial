<!DOCTYPE html>
<html lang="en">
 <head>
   @include('layout.partials.head')
   @include('layout.partials.header')
 </head>
 <body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KZGLKFJ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div id="wrapper">
	<!-- start slider -->
@include('layout.partials.banners')

@yield('content')
</div>
@include('layout.partials.footer2')
@include('layout.partials.footer-scripts')
<script>
  function initFreshChat() {
    window.fcWidget.init({
      token: "f2aeec5e-c76a-4dc7-aeeb-655f306de6c1",
      host: "https://wchat.freshchat.com"
    });
  }
  function initialize(i,t){var e;i.getElementById(t)?initFreshChat():((e=i.createElement("script")).id=t,e.async=!0,e.src="https://wchat.freshchat.com/js/widget.js",e.onload=initFreshChat,i.head.appendChild(e))}function initiateCall(){initialize(document,"freshchat-js-sdk")}window.addEventListener?window.addEventListener("load",initiateCall,!1):window.attachEvent("load",initiateCall,!1);
</script>
 </body>
</html>