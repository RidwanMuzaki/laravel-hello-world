@extends ('layouts.shop-around')
@section ('header')
<!-- Header -->
<div id="header">
    <h1 id="logo"><a href="#">shoparound</a></h1>
    <!-- Cart -->
    <div id="cart"> <a href="#" class="cart-link">Your Shopping Cart</a>
        <div class="cl">&nbsp;</div>
        <span>Articles: <strong>4</strong></span> &nbsp;&nbsp; <span>Cost: <strong>$250.99</strong></span>
    </div>
    <!-- End Cart -->
    <!-- Navigation -->
    <div id="navigation">
        <ul>
            <li><a href="#" class="active">Home</a></li>
            <li><a href="#">Support</a></li>
            <li><a href="#">My Account</a></li>
            <li><a href="#">The Store</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </div>
    <!-- End Navigation -->
</div>
<!-- End Header -->
@endsection

@section ('content')
<!-- Content -->
<div id="content">
    <!-- Content Slider -->
    <div id="slider" class="box">
        <div id="slider-holder">
            <ul>
                <li><a href="#"><img src="{{ asset('shop-around/css/images/slide1.jpg') }}" alt="" /></a></li>
                <li><a href="#"><img src="{{ asset('shop-around/css/images/slide1.jpg') }}" alt="" /></a></li>
                <li><a href="#"><img src="{{ asset('shop-around/css/images/slide1.jpg') }}" alt="" /></a></li>
                <li><a href="#"><img src="{{ asset('shop-around/css/images/slide1.jpg') }}" alt="" /></a></li>
            </ul>
        </div>
        <div id="slider-nav"> <a href="#" class="active">1</a> <a href="#">2</a> <a href="#">3</a> <a href="#">4</a> </div>
    </div>
    <!-- End Content Slider -->
    <!-- Products -->
    <div class="products">
        <div class="cl">&nbsp;</div>
        <ul>
            <li> <a href="#"><img src="{{ asset('shop-around/css/images/big1.jpg') }}" alt="" /></a>
                <div class="product-info">
                    <h3>LOREM IPSUM</h3>
                    <div class="product-desc">
                        <h4>WOMEN’S</h4>
                        <p>Lorem ipsum dolor sit<br />
                            amet</p>
                        <strong class="price">$58.99</strong>
                    </div>
                </div>
            </li>
            <li> <a href="#"><img src="{{ asset('shop-around/css/images/big1.jpg') }}" alt="" /></a>
                <div class="product-info">
                    <h3>LOREM IPSUM</h3>
                    <div class="product-desc">
                        <h4>WOMEN’S</h4>
                        <p>Lorem ipsum dolor sit<br />
                            amet</p>
                        <strong class="price">$58.99</strong>
                    </div>
                </div>
            </li>
            <li class="last"> <a href="#"><img src="{{ asset('shop-around/css/images/big1.jpg') }}" alt="" /></a>
                <div class="product-info">
                    <h3>LOREM IPSUM</h3>
                    <div class="product-desc">
                        <h4>WOMEN’S</h4>
                        <p>Lorem ipsum dolor sit<br />
                            amet</p>
                        <strong class="price">$58.99</strong>
                    </div>
                </div>
            </li>
        </ul>
        <div class="cl">&nbsp;</div>
    </div>
    <!-- End Products -->
</div>
<!-- End Content -->
@endsection

@section ('sidebar')
<!-- Sidebar -->
<div id="sidebar">
    <!-- Search -->
    <div class="box search">
        <h2>Search by <span></span></h2>
        <div class="box-content">
            <form action="#" method="post">
                <label>Keyword</label>
                <input type="text" class="field" />
                <label>Category</label>
                <select class="field">
                    <option value="">-- Select Category --</option>
                </select>
                <div class="inline-field">
                    <label>Price</label>
                    <select class="field small-field">
                        <option value="">$10</option>
                    </select>
                    <label>to:</label>
                    <select class="field small-field">
                        <option value="">$50</option>
                    </select>
                </div>
                <input type="submit" class="search-submit" value="Search" />
                <p> <a href="#" class="bul">Advanced search</a><br />
                    <a href="#" class="bul">Contact Customer Support</a>
                </p>
            </form>
        </div>
    </div>
    <!-- End Search -->
    <!-- Categories -->
    <div class="box categories">
        <h2>Categories <span></span></h2>
        <div class="box-content">
            <ul>
                <li><a href="#">Category 1</a></li>
                <li><a href="#">Category 2</a></li>
                <li><a href="#">Category 3</a></li>
                <li><a href="#">Category 4</a></li>
                <li><a href="#">Category 5</a></li>
                <li><a href="#">Category 6</a></li>
                <li><a href="#">Category 7</a></li>
                <li><a href="#">Category 8</a></li>
                <li><a href="#">Category 9</a></li>
                <li><a href="#">Category 10</a></li>
                <li><a href="#">Category 11</a></li>
                <li><a href="#">Category 12</a></li>
                <li class="last"><a href="#">Category 13</a></li>
            </ul>
        </div>
    </div>
    <!-- End Categories -->
</div>
<!-- End Sidebar -->
@endsection

@section ('footer')
<!-- Footer -->
<div id="footer">
    <p class="left"> <a href="#">Home</a> <span>|</span> <a href="#">Support</a> <span>|</span> <a href="#">My Account</a> <span>|</span> <a href="#">The Store</a> <span>|</span> <a href="#">Contact</a> </p>
    <p class="right"> &copy; 2010 Shop Around. Design by <a href="http://chocotemplates.com">Chocotemplates.com</a> </p>
</div>
<!-- End Footer -->
@endsection