<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Shop Around</title>
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" href="{{ asset('shop-around/css/style.css') }}" type="text/css" media="all" />
  <!--[if lte IE 6]><link rel="stylesheet" href="css/ie6.css" type="text/css" media="all" /><![endif]-->
  <script src="{{ asset('shop-around/js/jquery-1.4.1.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('shop-around/js/jquery.jcarousel.pack.js') }}" type="text/javascript"></script>
  <script src="{{ asset('shop-around/js/jquery-func.js') }}" type="text/javascript"></script>
</head>

<body>
  <!-- Shell -->
  <div class="shell">

    @yield ('header')

    <!-- Main -->
    <div id="main">
      <div class="cl">&nbsp;</div>

      @yield ('content')

      @yield ('sidebar')

      <div class="cl">&nbsp;</div>
    </div>
    <!-- End Main -->
    <!-- Side Full -->
    <div class="side-full">
      <!-- More Products -->
      <div class="more-products">
        <div class="more-products-holder">
          <ul>
            <li><a href="#"><img src="{{ asset('shop-around/css/images/small1.jpg') }}" alt="" /></a></li>
            <li><a href="#"><img src="{{ asset('shop-around/css/images/small2.jpg') }}" alt="" /></a></li>
            <li><a href="#"><img src="{{ asset('shop-around/css/images/small3.jpg') }}" alt="" /></a></li>
            <li><a href="#"><img src="{{ asset('shop-around/css/images/small4.jpg') }}" alt="" /></a></li>
            <li><a href="#"><img src="{{ asset('shop-around/css/images/small5.jpg') }}" alt="" /></a></li>
            <li><a href="#"><img src="{{ asset('shop-around/css/images/small6.jpg') }}" alt="" /></a></li>
            <li><a href="#"><img src="{{ asset('shop-around/css/images/small7.jpg') }}" alt="" /></a></li>
            <li><a href="#"><img src="{{ asset('shop-around/css/images/small1.jpg') }}" alt="" /></a></li>
            <li><a href="#"><img src="{{ asset('shop-around/css/images/small2.jpg') }}" alt="" /></a></li>
            <li><a href="#"><img src="{{ asset('shop-around/css/images/small3.jpg') }}" alt="" /></a></li>
            <li><a href="#"><img src="{{ asset('shop-around/css/images/small4.jpg') }}" alt="" /></a></li>
            <li><a href="#"><img src="{{ asset('shop-around/css/images/small5.jpg') }}" alt="" /></a></li>
            <li><a href="#"><img src="{{ asset('shop-around/css/images/small6.jpg') }}" alt="" /></a></li>
            <li><a href="#"><img src="{{ asset('shop-around/css/images/small7.jpg') }}" alt="" /></a></li>
            <li><a href="#"><img src="{{ asset('shop-around/css/images/small1.jpg') }}" alt="" /></a></li>
            <li><a href="#"><img src="{{ asset('shop-around/css/images/small2.jpg') }}" alt="" /></a></li>
            <li><a href="#"><img src="{{ asset('shop-around/css/images/small3.jpg') }}" alt="" /></a></li>
            <li><a href="#"><img src="{{ asset('shop-around/css/images/small4.jpg') }}" alt="" /></a></li>
            <li><a href="#"><img src="{{ asset('shop-around/css/images/small5.jpg') }}" alt="" /></a></li>
            <li><a href="#"><img src="{{ asset('shop-around/css/images/small6.jpg') }}" alt="" /></a></li>
            <li class="last"><a href="#"><img src="{{ asset('shop-around/css/images/small7.jpg') }}" alt="" /></a></li>
          </ul>
        </div>
        <div class="more-nav"> <a href="#" class="prev">previous</a> <a href="#" class="next">next</a> </div>
      </div>
      <!-- End More Products -->
      <!-- Text Cols -->
      <div class="cols">
        <div class="cl">&nbsp;</div>
        <div class="col">
          <h3 class="ico ico1">Donec imperdiet</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec imperdiet, metus ac cursus auctor, arcu felis ornare dui.</p>
          <p class="more"><a href="#" class="bul">Lorem ipsum</a></p>
        </div>
        <div class="col">
          <h3 class="ico ico2">Donec imperdiet</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec imperdiet, metus ac cursus auctor, arcu felis ornare dui.</p>
          <p class="more"><a href="#" class="bul">Lorem ipsum</a></p>
        </div>
        <div class="col">
          <h3 class="ico ico3">Donec imperdiet</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec imperdiet, metus ac cursus auctor, arcu felis ornare dui.</p>
          <p class="more"><a href="#" class="bul">Lorem ipsum</a></p>
        </div>
        <div class="col col-last">
          <h3 class="ico ico4">Donec imperdiet</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec imperdiet, metus ac cursus auctor, arcu felis ornare dui.</p>
          <p class="more"><a href="#" class="bul">Lorem ipsum</a></p>
        </div>
        <div class="cl">&nbsp;</div>
      </div>
      <!-- End Text Cols -->
    </div>
    <!-- End Side Full -->

    @yield ('footer')
    
  </div>
  <!-- End Shell -->
</body>

</html>