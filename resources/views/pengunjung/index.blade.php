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
<link rel="stylesheet" href="layout/styles/layout.css" type="text/css">
<script type="text/javascript" src="layout/scripts/jquery-PseudoCSS.1.0.js"></script>
<script type="text/javascript" src="layout/scripts/jquery-easySlider1.7.js"></script>
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
<div class="wrapper row1">
  <header id="header" class="clear">
    <div id="hgroup">
      <h1><a href="/">Kabar Berita</a></h1>
      <h2>Informasi berita terkini</h2>
    </div>
    <form action="#" method="post">
      <fieldset>
        <legend>Search:</legend>
        <input type="text" value="Search Our Website&hellip;" onFocus="this.value=(this.value=='Search Our Website&hellip;')? '' : this.value ;">
        <input type="submit" id="sf_submit" value="submit">
      </fieldset>
    </form>
    <nav class="clear">
      <ul>
        <li class="active"><a href="/"></a></li>
        @php
                                    $kategori = App\Kategori::all();
                                    @endphp
                                    @foreach($kategori as $data)
                                    <li><a href="{{url('/berita',$data->id)}}">{{$data->name}}</a></li>
                                    @endforeach


      </ul>
    </nav>
  </header>
</div>
<!-- content -->
<div class="wrapper row2">
  <div id="container" class="clear"> 
    <!-- Slider -->

   <div id="homepage"> 
      <!-- Introduction -->
      <section id="intro" class="clear">
        <div class="col-md-8">
           <article class="one_fifth">
          <figure><a href="#"><img src="images/demo/130x130.gif" width="130" height="130" alt=""></a>
            <figcaption>Nullamlacus dui ipsum conseque</figcaption>
          </figure>
        </article>
        <article class="one_fifth">
          <figure><a href="#"><img src="images/demo/130x130.gif" width="130" height="130" alt=""></a>
            <figcaption>Nullamlacus dui ipsum conseque</figcaption>
          </figure>
        </article>
        <article class="one_fifth">
          <figure><a href="#"><img src="images/demo/130x130.gif" width="130" height="130" alt=""></a>
            <figcaption>Nullamlacus dui ipsum conseque</figcaption>
          </figure>
        </article>
        </div>
       
        <article class="one_fifth">
          <figure><a href="#"><img src="images/demo/130x130.gif" width="130" height="130" alt=""></a>
            <figcaption>Nullamlacus dui ipsum conseque</figcaption>
          </figure>
        </article>
        <article class="one_fifth lastbox">
          <figure><a href="#"><img src="images/demo/130x130.gif" width="130" height="130" alt=""></a>
            <figcaption>Nullamlacus dui ipsum conseque</figcaption>
          </figure>
        </article>
      </section>
    <!-- main content -->ugu8utb68yyi8
          <!-- Introduction -->
      <!-- / Introduction --> 
      <!-- ########################################################################################## --> 
      <!-- Services -->
      <section id="services" class="last clear">
        <article class="last clear">
         
        </article>
        <article class="one_third">
          <figure><img src="images/demo/290x120.gif" width="290" height="120" alt="">
            <figcaption>
              <h2>Indonectetus facilis</h2>
              <p>You can use and modify the template for both personal and commercial use. You must keep all copyright information and credit links in the template and associated files. For more HTML5 templates visit <a href="http://www.os-templates.com/">free website templates</a>.</p>
              <footer class="more"><a href="#">Read More &raquo;</a></footer>
            </figcaption>
          </figure>
        </article>
        <article class="one_third lastbox">
          <figure><img src="images/demo/290x120.gif" width="290" height="120" alt="">
            <figcaption>
              <h2>Indonectetus facilis</h2>
              <p>Nam nec ante. Sed lacinia, urna non tincidunt mattis, tortor neque adipiscing diam, a cursus ipsum ante quis turpis. Nulla facilisi. Ut fringilla. Suspendisse potenti. Nunc feugiat mi a tellus consequat imperdiet. Vestibulum sapien.</p>
              <footer class="more"><a href="#">Read More &raquo;</a></footer>
            </figcaption>
          </figure>
        </article>
      </section>
      <!-- / Services --> 
    </div>
    <!-- / content body --> 
  </div>
</div>
<!-- Footer -->
<div class="wrapper row3">
  <div id="footer" class="clear"> 
    
    <!-- ########################################################################################## -->
    <section class="one_quarter">
      <h2 class="title"></h2>
      <article>
        <header>
          <h2></h2>
          <address>
          <a href="#"></a>,
          </address>
          <time datetime="2000-04-06">Thursday, 22<sup>th</sup> February 2018</time>
        </header>
        <p>.</p>
             </article>
    </section>
    <section class="one_quarter">
      <h2 class="title"></h2>
      <nav>
       
      </nav>
    </section>
    <section class="two_quarter lastbox">
      <h2 class="title">About US</h2>
      <img class="imgl" src="images/demo/130x130.gif" width="130" height="130" alt="">
      <p>“Jangan pernah takut dengan perubahan. Kita mungkin akan kehilangan sesuatu yang baik, namun sebagai gantinya, sesuatu yang jauh lebih baik akan datang menjemput kita”</p>
      
    </section>
    <!-- ########################################################################################## --> 
  </div>
</div>
<!-- Copyright -->
<div class="wrapper row4">
  <footer id="copyright" class="clear">
    <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#">Kabar Berita</a></p>
   
  </footer>
</div>
</body>
</html>