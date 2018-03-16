<!DOCTYPE html>
<!--
Template Name: Prosperous
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html>
<head>
<title>Kabar Berita</title>
<meta charset="iso-8859-1">
<link rel="stylesheet" href="/layout/styles/layout.css" type="text/css">
<script type="text/javascript" src="/layout/scripts/jquery-PseudoCSS.1.0.js"></script>
<script type="text/javascript" src="/layout/scripts/jquery-easySlider1.7.js"></script>
<script type="text/javascript">
$(document).ready(function () {
    $("#slider").easySlider({
        auto: true,
        continuous: true,
        numeric: true,
        speed: 1200,
        pause: 5000 // change slide interval speed here
    });
});
</script>
</head>
<body>
<!-- header -->
@include('include.nav')
<!-- end header -->
<!-- content -->
<div class="wrapper row2">
  <div id="container" class="clear"> 
    <!-- Slider -->
   <!-- End Slider -->
    <!-- main content -->
    @yield('content')
    <!-- end main content -->
    <!-- / content body --> 
    
  </div>
</div>
<!-- Footer -->
@include('include.footer')
<!-- end Footer -->
<!-- Copyright -->
@include('include.copyright')
<!-- end copyright -->
</body>
</html>