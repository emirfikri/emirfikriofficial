<!DOCTYPE html>
<html lang="en">
 <head>
   @include('layout.partials.head2')
 </head>
 <body>
 <!-- Google Tag Manager (noscript) -->
 <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KZGLKFJ"
 height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
 <!-- End Google Tag Manager (noscript) -->
 	
 @include('layout.partials.header2')
 @include('layout.partials.banners')
<div id="wrapper">
@yield('content')
</div>
@include('layout.partials.footer2')
@include('layout.partials.footer-scripts')
 </body>
</html>