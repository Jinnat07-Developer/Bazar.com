<!Doctype html>
<html class="no-js" lang="zxx">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Bajar - Multipurpose E-commerce HTML Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/')}}website/assets/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/animate.min.css">
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/odometer.min.css">
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/nice-select.css">
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/cross2.min.css">
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/meanmenu.css">
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/swipper.css">
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/select2.min.css">
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/ui-range-slider.css">
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/datepicker.css">
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/main.css">

</head>

<body>

<!-- bz-sidebar-informations-area-start -->
<div class="bz-sidebar-informations side-info">
    <div class="bz-sidebar-logo-wrapper">
        <div class="row">
            <div class="col-xl-6 col-8">
                <div class="bz-sidebar-logo">
                    <a href=""><img src="{{asset('/')}}website/assets/img/logo/logo.png" alt="logo-img"></a>
                </div>
            </div>
            <div class="col-xl-6 col-4">
                <div class="bz-sidebar-close-wrapper text-end">
                    <button class="bz-sidebar-close side-info-close"><i class="fal fa-times"></i></button>
                </div>
            </div>
        </div>
    </div>


    <div class="bz-middle-wrap mb-25 mt-40">
        <div class="bz-middle-wrap-form bz-middle-wrap-sidebar">
            <div class="bz-middle-wrap-form-categories">
                <ul>
                    <li><a href="" id="bz-cat-click-sidebar"><span class="bz-search-all-cat-sidebar">Categories</span> <i class="far fa-angle-down"></i></a>
                    </li>
                </ul>
                <div class="bz-category-wrapper-sidebar">
                    <div class="bz-cat-item-sidebar">
                        <input type="radio" class="cat-filter-sidebar" name="cat-filter-sidebar" id="fashion_sidebar" value="Fashion">
                        <label for="fashion_sidebar">Fashion</label>
                    </div>
                    <div class="bz-cat-item-sidebar">
                        <input type="radio" class="cat-filter-sidebar" name="cat-filter-sidebar" id="furniture_sidebar" value="Furniture">
                        <label for="furniture_sidebar">Furniture</label>
                    </div>
                    <div class="bz-cat-item-sidebar">
                        <input type="radio" class="cat-filter-sidebar" name="cat-filter-sidebar" id="grocery_sidebar" value="Grocery">
                        <label for="grocery_sidebar">Grocery</label>
                    </div>
                    <div class="bz-cat-item-sidebar">
                        <input type="radio" class="cat-filter-sidebar" name="cat-filter-sidebar" id="electronics_sidebar" value="Electronics">
                        <label for="electronics_sidebar">Electronics</label>
                    </div>
                </div>
            </div>
            <div class="bz-middle-wrap-form-search">
                <form action="#">
                    <input type="search" placeholder="Search..." >
                    <button type="submit"><i class="far fa-search"></i></button>
                </form>
            </div>
        </div>
    </div>

    <div class="bz-sidebar-menu-wrapper">
        <div class="bz-mobile-menu"></div>
    </div>
</div>
<div class="offcanvas-overlay"></div>
<!-- bz-sidebar-informations-area-end -->

<!-- header area start -->
<header class="header-area bg-warning">
    <div class="bz-topbar-area">
        <div class="container container-full-1">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-7">
                    <div class="bz-topbar-left">
                        <div class="bz-topbar-left-text">
                            <p>Save 50% Sitewide! Ends in:</p>
                        </div>

                        <div class="count_down_box" data-countdown="2023/09/16"></div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-5">
                    <div class="bz-topbar-right d-flex justify-content-end align-items-center">
                        <div class="bz-topbar-right-item">
                            <a class="bz-topbar-right-item-link" href="#0">Track your order</a>
                        </div>
                        <div class="bz-topbar-right-item">
                            <select name="Language" class="bz-topbar-right-item-link has-nice-select">
                                <option value="1">English</option>
                                <option value="2">Bangla</option>
                                <option value="3">Arabic</option>
                            </select>
                        </div>
                        <div class="bz-topbar-right-item">
                            <select name="Language" class="bz-topbar-right-item-link has-nice-select">
                                <option value="1">USD</option>
                                <option value="2">TAKA</option>
                                <option value="3">Riyal</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bz-middle-area">
        <div class="container container-full-1">
            <div class="row align-items-center">
                <div class="col-xl-2 col-lg-2 col-md-6 col-4">
                    <div class="bz-middle-logo">
                        <a href="{{route('home')}}"><img src="{{asset('/')}}website/assets/img/logo/logo.png" alt="img"></a>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-7 d-none d-lg-block">
                    <div class="bz-middle-wrap">
                        <div class="bz-middle-wrap-bar">
                            <a href="#0" class="side-toggle"><i class="far fa-bars"></i></a>
                        </div>
                        <div class="bz-middle-wrap-form">
                            <div class="bz-middle-wrap-form-categories">
                                <ul>
                                    <li><a href="#0" class="bz-cat-click" id="bz-cat-click"><span class="bz-search-all-cat">All Categories</span> <i class="far fa-angle-down"></i></a>
                                    </li>
                                </ul>
                                <div class="bz-category-wrapper">
                                    <div class="bz-cat-item">
                                        <input type="radio" class="cat-filter" name="cat-filter" id="fashion" value="Fashion">
                                        <label for="fashion">
                                                    <span class="bz-cat-upper-text">
                                                        <span class="bz-cat-number">01</span>Fashion
                                                    </span>
                                            <span class="bz-cat-img" data-background="{{asset('/')}}website/assets/img/apps/cat1.png"></span>
                                        </label>
                                    </div>
                                    <div class="bz-cat-item">
                                        <input type="radio" name="cat-filter"  class="cat-filter" id="furniture" value="Furniture">
                                        <label for="furniture">
                                                    <span class="bz-cat-upper-text">
                                                        <span class="bz-cat-number">02</span>Furniture
                                                    </span>
                                            <span class="bz-cat-img" data-background="{{asset('/')}}website/assets/img/apps/cat1.png"></span>
                                        </label>
                                    </div>
                                    <div class="bz-cat-item">
                                        <input type="radio" name="cat-filter"  class="cat-filter" id="grocery" value="Grocery">
                                        <label for="grocery">
                                                    <span class="bz-cat-upper-text">
                                                        <span class="bz-cat-number">03</span>Grocery
                                                    </span>
                                            <span class="bz-cat-img" data-background="{{asset('/')}}website/assets/img/apps/cat1.png"></span>
                                        </label>
                                    </div>
                                    <div class="bz-cat-item">
                                        <input type="radio" name="cat-filter"  class="cat-filter" id="electronics" value="Electronics">
                                        <label for="electronics">
                                                    <span class="bz-cat-upper-text">
                                                        <span class="bz-cat-number">04</span>Electronics
                                                    </span>
                                            <span class="bz-cat-img" data-background="{{asset('/')}}website/assets/img/apps/cat1.png"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="bz-middle-wrap-form-search">
                                <form action="#">
                                    <input type="search" placeholder="I'm shopping for..." >
                                    <button type="submit"><i class="far fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-6 col-8">
                    <div class="bz-middle-right text-end">
                        <a class="bz-middle-right-link" href="{{route('wishlist')}}"><i class="fal fa-heart"></i><span>0</span>
                        </a>
                        <a class="bz-middle-right-link" href="cart.html"><i class="fal fa-shopping-cart"></i><span>0</span></a>
                        <div class="bz-user-wrapper d-inline-block">
                            <a class="bz-middle-right-link bz-user" href="#0"><i class="fal fa-user"></i></a>
                            <div class="bz-user-dropdown">
                                <a href="signup.html">Login</a>
                                <a href="#0">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bz-header-main">
        <div class="container container-full-1">
            <div class="row align-items-center">
                <div class="col-2 d-lg-none">
                    <div class="bz-header-bar">
                        <a href="#0" class="side-toggle"><i class="far fa-bars"></i></a>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8 d-none d-lg-block">
                    <div class="bz-header-menu">
                        <nav id="bz-mobile-menu" class="bz-mobile-menu">
                            <ul>
                                @foreach($categories as $category)
                                <li class="has-dropdown"><a href="{{route('product-category',['id'=>$category->id])}}">{{$category->name}}</a>
                                    <ul class="submenu">
                                        @foreach($category->subCategories as $subCategory)
                                        <li><a href="{{route('product-subCategory',['id'=>$subCategory->id])}}">{{$subCategory->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                @endforeach
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-10">
                    <div class="bz-header-support text-end">
                        <span class="teltext"><i class="far fa-phone-alt"></i> <span>Support:</span>+ <a href="tel:(00)123456789">(00) 123 456 789</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header area end -->

@yield('body')

<!-- footer area start -->
<footer class="bz-footer bg-warning">
    <div class="container">
        <div class="bz-footer-top pt-60 pb-20">
            <div class="row justify-content-between">
                <div class="col-xl-4 col-lg-4 col-md-7 col-sm-7">
                    <div class="bz-footer-widget mb-40">
                        <div class="bz-footer-logo mb-25">
                            <a href="index.html"><img src="{{asset('/')}}website/assets/img/logo/logo.png" alt="Logo"></a>
                        </div>
                        <p class="bz-footer-widget-address mb-20">Themeforest, Envanto HQ <br>
                            24 Fifth st., Los Angeles, USA</p>
                        <div class="bz-footer-widget-phone mb-40">
                            <a href="tel:+00(00)12356789">+00 (00) 123 456 789</a>
                            <a href="tel:+00(00)123456789">+00 (00) 123 456 789</a>
                        </div>
                        <div class="bz-footer-widget-payment">
                            <h4 class="bz-footer-widget-payment-title mb-25">Secure online payment</h4>
                            <img src="{{asset('/')}}website/assets/img/footer/payment.png" alt="img">
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-2 col-md-5 col-sm-5">
                    <div class="bz-footer-widget mb-40">
                        <h4 class="bz-footer-widget-title mb-25">Products</h4>
                        <div class="bz-footer-widget-list">
                            <ul>
                                <li><a href="shop.html">Prices Drop</a></li>
                                <li><a href="shop.html">New Products</a></li>
                                <li><a href="shop.html">Best Sales</a></li>
                                <li><a href="shop.html">New Season</a></li>
                                <li><a href="shop.html">New Arrivals</a></li>
                                <li><a href="shop.html">Top Trending</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-2 col-md-7 col-sm-7">
                    <div class="bz-footer-widget mb-40">
                        <h4 class="bz-footer-widget-title mb-25">About Bazar</h4>
                        <div class="bz-footer-widget-list">
                            <ul>
                                <li><a href="contact.html">About us</a></li>
                                <li><a href="contact.html">Work with us</a></li>
                                <li><a href="contact.html">Our policies</a></li>
                                <li><a href="contact.html">Press</a></li>
                                <li><a href="contact.html">Offices</a></li>
                                <li><a href="shop.html">A-Z Collection</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-5 col-sm-5">
                    <div class="bz-footer-widget mb-40">
                        <h4 class="bz-footer-widget-title mb-25">Information</h4>
                        <div class="bz-footer-widget-list">
                            <ul>
                                <li><a href="contact.html">Contact Us</a></li>
                                <li><a href="contact.html">Privacy Policy</a></li>
                                <li><a href="wishlist.html">Wishlist</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="contact.html">Shipping & Returns</a></li>
                                <li><a href="contact.html">Help And Advice</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bz-footer-copyright">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-sm-7">
                    <p class="bz-footer-copyright-text text-center text-sm-start">&copy; 2022 All Rights Reserved by <a href="https://themeforest.net/user/_themephi">Themephi</a></p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-5">
                    <div class="bz-footer-copyright-social text-sm-end text-center">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-vimeo-v"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer area end -->

<!-- bz-single-product-popup-start -->
<div class="bz-overlay"></div>
<div class="bz-single-product-popup container">
    <div class="row">
        <div class="col-xl-6 col-lg-12">
            <div class="mb-40 mb-xl-0">
                <div class="bz-single-shop-details-active-popup swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="bz-single-shop-details-image has-width">
                                <img src="{{asset('/')}}website/assets/img/shop-details/shopslide-1-large.jpg" alt="img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="bz-single-shop-details-image has-width">
                                <img src="{{asset('/')}}website/assets/img/shop-details/shopslide-2-large.jpg" alt="img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="bz-single-shop-details-image has-width">
                                <img src="{{asset('/')}}website/assets/img/shop-details/shopslide-3-large.jpg" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bz-single-shop-details-control-wrap ">
                    <div class="bz-single-shop-details-control-active-popup swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="bz-single-shop-details-control-image w_img">
                                    <img src="{{asset('/')}}website/assets/img/shop-details/shopslide-1.jpg" alt="img">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="bz-single-shop-details-control-image w_img">
                                    <img src="{{asset('/')}}website/assets/img/shop-details/shopslide-2.jpg" alt="img">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="bz-single-shop-details-control-image w_img">
                                    <img src="{{asset('/')}}website/assets/img/shop-details/shopslide-3.jpg" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-12">
            <div class="bz-shop-details-content ml-20">
                <button class="bz-single-product-popup-close-action"><i class="fal fa-times"></i></button>
                <h3 class="bz-shop-details-content-title">
                    Women High-Quality Slim Shirt
                </h3>
                <div class="bz-shop-details-content-price-rating-wrap mb-25">
                    <div class="bz-shop-details-contetn-price mb-15 mb-sm-0">
                        <span>$56.78</span>
                        <del>$65.12</del>
                    </div>
                    <div class="bz-shop-details-content-rating">
                        <a href="#"><i class="fas fa-star"></i></a>
                        <a href="#"><i class="fas fa-star"></i></a>
                        <a href="#"><i class="fas fa-star"></i></a>
                        <a href="#"><i class="fas fa-star"></i></a>
                        <a href="#"><i class="far fa-star"></i></a>
                        <span>4.5 Rating</span>
                    </div>
                </div>
                <div class="bz-shop-details-content-text mb-30">
                    <p>Lorem Ipsum available, but the majority have suffered alteration some form injected humour randomzed words which don't look even slightly believable you are going to use a passage.</p>
                </div>
                <div class="bz-shop-details-content-bottom-wrap">
                    <div class="bz-shop-details-content-color-size-wrap borter-top pt-30 pb-30">
                        <div class="bz-shop-details-content-color mb-20 mb-sm-0">
                            <ul>
                                <li class="cl-olive active"><a href="#">Olive</a></li>
                                <li class="cl-black"><a href="#">Black</a></li>
                                <li class="cl-red"><a href="#">Red</a></li>
                                <li class="cl-blue"><a href="#">Blue</a></li>
                                <li class="cl-green"><a href="#">Green</a></li>
                            </ul>
                        </div>
                        <div class="bz-shop-details-content-size">
                            <form action="https://themephi.net/action_page.php"  class="bz-shop-details-content-size-box">
                                <div class="radio bz-shop-details-content-size-item">
                                    <label><input type="radio" name="optradio" checked>L</label>
                                </div>
                                <div class="radio bz-shop-details-content-size-item">
                                    <label><input type="radio" name="optradio">S</label>
                                </div>
                                <div class="radio bz-shop-details-content-size-item">
                                    <label><input type="radio" name="optradio">X</label>
                                </div>
                                <div class="radio bz-shop-details-content-size-item">
                                    <label><input type="radio" name="optradio">XL</label>
                                </div>
                                <div class="radio bz-shop-details-content-size-item">
                                    <label><input type="radio" name="optradio" >XXL</label>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="bz-shop-details-content-cart-action-wrap ">
                        <div class="bz-shop-details-content-quantity-box mb-20 mb-sm-0">
                            <form action="#">
                                <a href="#0" class="plus"><i class="fal fa-plus"></i></a>
                                <input type="text" readonly name="quantity" value="1">
                                <a  href="#0" class="minus"><i class="fal fa-minus"></i></a>
                            </form>
                        </div>
                        <a href="cart.html" class="bz-shop-details-content-add-cart">
                            <span class="bz-shop-details-content-add-cart-btn">Add to Cart</span>
                        </a>
                    </div>
                    <div class="bz-shop-details-content-widget-action pt-30 pb-30">
                        <div class="bz-shop-details-content-widget-action-item ">
                            <a href="wishlist.html"><i class="fal fa-heart"></i> Add To Wishlist</a>
                        </div>
                        <div class="bz-shop-details-content-widget-action-item">
                            <a href="compare.html"><i class="far fa-sync-alt"></i> Compare</a>
                        </div>
                        <div class="bz-shop-details-content-widget-action-item">
                            <a href="{{asset('/')}}website/assets/img/shop-details/shopslide-1-large.jpg" class="popup-image"><i class="far fa-search-plus"></i> Zoom in</a>
                        </div>
                    </div>
                    <div class="bz-shop-details-content-list borter-top pt-30 pb-30">
                        <ul>
                            <li><b>SKU :</b> <span>SG234FD</span></li>
                            <li><b>Category :</b> <span>Women shirt</span></li>
                            <li><b>Tags :</b> <span>Shirt, Basic</span></li>
                        </ul>
                    </div>
                    <div class="bz-shop-details-content-social border-top pt-30 pb-30">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-vimeo-v"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- bz-single-product-popup-start -->

<!-- back to top start -->
<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>
<!-- back to top end -->

<!-- JS here -->
<script src="{{asset('/')}}website/assets/js/jquery.min.js"></script>
<script src="{{asset('/')}}website/assets/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('/')}}website/assets/js/swipper-bundle.min.js"></script>
<script src="{{asset('/')}}website/assets/js/jquery.meanmenu.min.js"></script>
<script src="{{asset('/')}}website/assets/js/wow.min.js"></script>
<script src="{{asset('/')}}website/assets/js/jquery.nice-select.min.js"></script>
<script src="{{asset('/')}}website/assets/js/jquery.scrollUp.min.js"></script>
<script src="{{asset('/')}}website/assets/js/jquery.magnific-popup.min.js"></script>
<script src="{{asset('/')}}website/assets/js/odometer.min.js"></script>
<script src="{{asset('/')}}website/assets/js/appear.min.js"></script>
<script src="{{asset('/')}}website/assets/js/datepicker.min.js"></script>
<script src="{{asset('/')}}website/assets/js/select2.min.js"></script>
<script src="{{asset('/')}}website/assets/js/cross2.min.js"></script>
<script src="{{asset('/')}}website/assets/js/countdown.js"></script>
<script src="{{asset('/')}}website/assets/js/jquery-ui-slider-range.js"></script>
<script src="{{asset('/')}}website/assets/js/back-to-top.min.js"></script>
<script src="{{asset('/')}}website/assets/js/main.js"></script>
</body>


</html>

