@extends('website.master')

@section('body')

    <!-- main area start  -->
    <main>
        <!-- breadcrumb area start -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="bz-breadcrumb-wrap d-flex justify-content-between align-items-center">
                            <div class="bz-breadcrumb-content">
                                <h3 class="bz-breadcrumb-content-title">
                                    Product collection
                                </h3>
                                <span class="bz-breadcrumb-content-subtitle">
                                        Fashion is the armor to survive the reality of everyday life.
                                    </span>
                            </div>
                            <div class="bz-breadcrumb-list">
                                <a href="{{route('product-category',['$category->id'])}}">Home</a>
                                <span>Shop</span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- shop area start -->
        <div class="shop-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="bz-shop-topbar-filter-wrapper pt-60 pb-40">
                            <div class="row align-items-center">
                                <div class="col-xl-5 col-md-6 col-sm-6 mb-20 mb-sm-0">
                                    <div class="bz-shop-topbar-left">
                                        <div class="bz-shop-topbar-left-icon mb-10">
                                                <span class="filter-icon-text">
                                                    <i class="far fa-bars"></i>
                                                    <i class="fas fa-times"></i>
                                                    <span>Filter</span>
                                                </span>
                                        </div>
                                        <span class="bz-shop-topbar-left-text">Showing 1–9 of 16 results</span>
                                    </div>
                                </div>
                                <div class="col-xl-7 col-md-6 col-sm-6">
                                    <div class="bz-shop-topbar-right d-flex align-items-center justify-content-md-end">
                                        <select name="sorting" class="bz-shop-topbar-right-sorting has-nice-select">
                                            <option value="1">Default Sorting</option>
                                            <option value="2">Default Sorting 2</option>
                                            <option value="3">Default Sorting 3</option>
                                        </select>
                                        <nav>
                                            <div class="nav nav-tabs bz-shop-nav" id="nav-tab" role="tablist">
                                                <button class=" active bz-shop-nav-btn" id="nav-grid-tab" data-bs-toggle="tab" data-bs-target="#nav-grid" type="button" role="tab" aria-controls="nav-grid" aria-selected="true"><i class="fas fa-th"></i></button>
                                                <button class="bz-shop-nav-btn" id="nav-list-tab" data-bs-toggle="tab" data-bs-target="#nav-list" type="button" role="tab" aria-controls="nav-list" aria-selected="false"><i class="fal fa-list"></i></button>
                                            </div>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="shop-filter-visibilit-hidden">
                            <div class="bz-shop-filter-summary mb-40 pt-55 pb-55 pl-60 pr-60 bz-shop-border">
                                <div class="bz-shop-sidebar ">
                                    <div class="row">
                                        <div class="col-xl-7 col-lg-7">
                                            <div class="bz-shop-filter-summary-wrap">
                                                <div class="bz-shop-filter-summery-inner-wrap">

                                                    <div class="bz-shop-filter-summary-wrap-top d-flex justify-content-between">
                                                        <div class="bz-shop-sidebar-categories mb-30">

                                                            <h3 class="bz-shop-sidebar-categories-title d-inline-block"></h3>


                                                            <div class="bz-shop-sidebar-categories-list">
                                                                <ul>
                                                                    <li><a href="#">T-Shirts</a></li>
                                                                    <li><a href="#">Polos</a></li>
                                                                    <li><a href="#">Shirts</a></li>
                                                                    <li><a href="#">Summer Dress</a></li>
                                                                    <li><a href="#">Jeans</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="bz-shop-sidebar-color mb-30">
                                                            <h3 class="bz-shop-sidebar-color-title">Color</h3>
                                                            <div class="bz-shop-sidebar-color-list">
                                                                <ul>
                                                                    <li class="cl-olive"><a href="#">Olive</a></li>
                                                                    <li class="cl-black"><a href="#">Black</a></li>
                                                                    <li class="cl-red"><a href="#">Red</a></li>
                                                                    <li class="cl-blue"><a href="#">Blue</a></li>
                                                                    <li class="cl-green"><a href="#">Green</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="bz-shop-sidebar-size mb-30">
                                                            <h3 class="bz-shop-sidebar-size-title d-inline-block">Size</h3>
                                                            <div class="bz-shop-sidebar-size-list">
                                                                <form action="https://themephi.net/action_page.php">
                                                                    <div class="radio">
                                                                        <label><input type="radio" name="optradio" checked>L</label>
                                                                    </div>
                                                                    <div class="radio">
                                                                        <label><input type="radio" name="optradio">S</label>
                                                                    </div>
                                                                    <div class="radio">
                                                                        <label><input type="radio" name="optradio">X</label>
                                                                    </div>
                                                                    <div class="radio">
                                                                        <label><input type="radio" name="optradio">XL</label>
                                                                    </div>
                                                                    <div class="radio">
                                                                        <label><input type="radio" name="optradio" >XXL</label>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="bz-shop-sidebar-price mb-30 mb-lg-0">
                                                    <h3 class="bz-shop-sidebar-price-title d-inline-block mb-30">Price</h3>
                                                    <div class="sg-widget-shop-filter sg-shop-widget-toogle">
                                                        <div class="slider-range-bar mb-20" id="shop-slider-range"></div>
                                                        <div class="slider-range-amount">
                                                            <span class="price">Prices:</span>
                                                            <input type="text" id="s-amount" value="$75 - $300" class="amount">
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-5 col-lg-5 ">
                                            <div class="bz-shop-sidebar-offer pl-90">
                                                <div class="bz-shop-sidebar-offer-overlay">
                                                    <div class="bz-shop-sidebar-offer-img w_img">
                                                        <img src="{{asset('/')}}website/assets/img/shop/filter-offer.jpg" alt="img">
                                                        <div class="bz-overlay"></div>
                                                        <span class="offer-price">$45</span>
                                                        <div class="bz-shop-sidebar-offer-content">
                                                                <span class="bz-shop-sidebar-offer-content-text">Women Best Price Clothing
                                                                    2022 Offers</span>
                                                            <a href="shop.html" class="bz-btn bz-btn-sm">Shop Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-content" id="nav-product-tabContent">
                            <div class="tab-pane fade show active" id="nav-grid" role="tabpanel" aria-labelledby="nav-grid-tab">
                                <div class="shop-grid-product-tab-wrapper">
                                    <div class="row">
                                        @foreach($products as $product)
                                        <div class="col-xl-4 col-lg-6 col-md-6">
                                            <div class="bz-season-item mb-40">
                                                <div class="bz-season-item-wrapper position-relative">
                                                    <div class="bz-season-item-img w_img">
                                                        <a href="shop-details.html" class=""><img src="{{asset($product->image)}}" alt="img" height="450"></a>
                                                        <span class="trend">Trending</span>
                                                    </div>
                                                    <div class="bz-season-item-hover-wrapper">
                                                        <div class="bz-season-item-img-icon">
                                                            <a href="wishlist.html"><i class="fal fa-heart"></i></a>
                                                            <a href="compare.html"><i class="far fa-sync-alt"></i></a>
                                                            <a href="#0" class="eye-popup-product"><i class="far fa-expand-arrows-alt"></i></a>
                                                        </div>
                                                        <div class="bz-season-item-hover">
                                                            <div class="bz-season-item-hover-cart">
                                                                <a href="cart.html">Add to Cart</a>
                                                            </div>
                                                            <ul class="product-color-nav">
                                                                <li class="cl-light-green active">
                                                                    <img src="{{asset('/')}}website/assets/img/shop/shop-1.jpg" alt="img">
                                                                </li>
                                                                <li class="cl-black">
                                                                    <img src="{{asset('/')}}website/assets/img/shop/shop-2.jpg" alt="img">
                                                                </li>
                                                                <li class="cl-red">
                                                                    <img src="{{asset('/')}}website/assets/img/shop/shop-3.jpg" alt="img">
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>


                                                </div>

                                                <div class="bz-season-item-content pt-20">
                                                    <h4 class="bz-season-item-content-title"><a href="{{route('product-detail',['id'=>$product->id])}}">{{$product->name}}</a></h4>
                                                    <div class="bz-season-item-content-rating">
{{--                                                        <a href="#"><i class="fas fa-star"></i></a>--}}
{{--                                                        <a href="#"><i class="fas fa-star"></i></a>--}}
{{--                                                        <a href="#"><i class="fas fa-star"></i></a>--}}
{{--                                                        <a href="#"><i class="fas fa-star"></i></a>--}}
{{--                                                        <a href="#"><i class="far fa-star"></i></a>--}}
{{--                                                        <span></span>--}}
                                                    </div>
                                                    <span class="price-bottom">BDT. {{$product->regular_price}}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-md-6">
                                            <div class="bz-season-item mb-40">
                                                <div class="bz-season-item-wrapper position-relative">
                                                    <div class="bz-season-item-img w_img">
                                                        <a href="shop-details.html" class=""><img src="{{asset($product->image)}}" alt="img" height="450"></a>
                                                        <span class="dis">17%</span>
                                                    </div>
                                                    <div class="bz-season-item-hover-wrapper">
                                                        <div class="bz-season-item-img-icon">
                                                            <a href="wishlist.html"><i class="fal fa-heart"></i></a>
                                                            <a href="compare.html"><i class="far fa-sync-alt"></i></a>
                                                            <a href="#0" class="eye-popup-product"><i class="far fa-expand-arrows-alt"></i></a>
                                                        </div>
                                                        <div class="bz-season-item-hover">
                                                            <div class="bz-season-item-hover-cart">
                                                                <a href="cart.html">Add to Cart</a>
                                                            </div>
                                                            <ul class="product-color-nav">
                                                                <li class="cl-light-green active">
                                                                    <img src="{{asset('/')}}website/assets/img/shop/shop-2.jpg" alt="img">
                                                                </li>
                                                                <li class="cl-black">
                                                                    <img src="{{asset('/')}}website/assets/img/shop/shop-3.jpg" alt="img">
                                                                </li>
                                                                <li class="cl-red">
                                                                    <img src="{{asset('/')}}website/assets/img/shop/shop-4.jpg" alt="img">
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>


                                                </div>

                                                <div class="bz-season-item-content pt-20">

                                                    <h4 class="bz-season-item-content-title"><a href="shop-details.html">{{$product->name}}</a></h4>
                                                    <div class="bz-season-item-content-rating">
{{--                                                        <a href="#"><i class="fas fa-star"></i></a>--}}
{{--                                                        <a href="#"><i class="fas fa-star"></i></a>--}}
{{--                                                        <a href="#"><i class="fas fa-star"></i></a>--}}
{{--                                                        <a href="#"><i class="fas fa-star"></i></a>--}}
{{--                                                        <a href="#"><i class="far fa-star"></i></a>--}}
{{--                                                        <span>4.5 Rating</span>--}}
                                                    </div>
                                                    <span class="price-bottom">BDT. {{$product->selling_price}}</span>
                                                    <del>{{$product->regular_price}}</del>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="bz-shop-paginate mt-15 text-center">
                                                <span>1</span>
                                                <a href="shop.html">2</a>
                                                <a href="shop.html">3</a>
                                                <a href="shop.html"><i class="fal fa-angle-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-list" role="tabpanel" aria-labelledby="nav-list-tab">
                                <div class="shop-grid-product-tab-wrapper shop-list-fullWidth">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                            <div class="bz-shop-item-list bz-shop-color mb-40">
                                                <div class="row align-items-center">
                                                    <div class="col-xl-6 mb-30 mb-xl-0">
                                                        <div class="bz-shop-item-list-img bz-shop-color-img w_img position-relative">
                                                            <a href="shop-details.html" class=""><img src="{{asset('/')}}website/assets/img/shop/shop-1.jpg" alt="img"></a>
                                                            <span class="trend">Trending</span>
                                                            <div class="bz-shop-item-list-img-icon">
                                                                <a href="wishlist.html"><i class="fal fa-heart"></i></a>
                                                                <a href="compare.html"><i class="far fa-sync-alt"></i></a>
                                                                <a href="#0" class="eye-popup-product"><i class="far fa-expand-arrows-alt"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <div class="bz-shop-item-list-content">
                                                            <h4 class="bz-shop-item-list-title"><a href="shop-details.html">Women High-Quality Shirt</a></h4>
                                                            <div class="bz-shop-item-list-hover ">
                                                                <ul class="product-color-nav">
                                                                    <li class="cl-light-green active">
                                                                        <img src="{{asset('/')}}website/assets/img/shop/shop-1.jpg" alt="img">
                                                                    </li>
                                                                    <li class="cl-black">
                                                                        <img src="{{asset('/')}}website/assets/img/shop/shop-2.jpg" alt="img">
                                                                    </li>
                                                                    <li class="cl-red">
                                                                        <img src="{{asset('/')}}website/assets/img/shop/shop-3.jpg" alt="img">
                                                                    </li>
                                                                </ul>
                                                                <div class="bz-shop-item-list-hover-price">
                                                                    <span>$56.78</span>
                                                                    <del>$65.12</del>
                                                                </div>
                                                            </div>



                                                            <p class="bz-shop-item-list-content-text">Lorem Ipsum available the majority suffered alteration some</p>

                                                            <div class="bz-shop-item-list-content-rating">
                                                                <a href="#"><i class="fas fa-star"></i></a>
                                                                <a href="#"><i class="fas fa-star"></i></a>
                                                                <a href="#"><i class="fas fa-star"></i></a>
                                                                <a href="#"><i class="fas fa-star"></i></a>
                                                                <a href="#"><i class="far fa-star"></i></a>
                                                                <span>4.5 Rating</span>
                                                            </div>
                                                            <a href="cart.html" class="bz-shop-item-list-content-cart">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                            <div class="bz-shop-item-list bz-shop-color mb-40">
                                                <div class="row align-items-center">
                                                    <div class="col-xl-6 mb-30 mb-xl-0">
                                                        <div class="bz-shop-item-list-img bz-shop-color-img w_img position-relative">
                                                            <a href="shop-details.html" class=""><img src="{{asset('/')}}website/assets/img/shop/shop-2.jpg" alt="img"></a>
                                                            <span class="dis">17%</span>
                                                            <div class="bz-shop-item-list-img-icon">
                                                                <a href="wishlist.html"><i class="fal fa-heart"></i></a>
                                                                <a href="compare.html"><i class="far fa-sync-alt"></i></a>
                                                                <a href="#0" class="eye-popup-product"><i class="far fa-expand-arrows-alt"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <div class="bz-shop-item-list-content">
                                                            <h4 class="bz-shop-item-list-title"><a href="shop-details.html">Women High-Quality Slim Shirt</a></h4>
                                                            <div class="bz-shop-item-list-hover ">
                                                                <ul class="product-color-nav">
                                                                    <li class="cl-light-green active">
                                                                        <img src="{{asset('/')}}website/assets/img/shop/shop-2.jpg" alt="img">
                                                                    </li>
                                                                    <li class="cl-black">
                                                                        <img src="{{asset('/')}}website/assets/img/shop/shop-3.jpg" alt="img">
                                                                    </li>
                                                                    <li class="cl-red">
                                                                        <img src="{{asset('/')}}website/assets/img/shop/shop-4.jpg" alt="img">
                                                                    </li>
                                                                </ul>
                                                                <div class="bz-shop-item-list-hover-price">
                                                                    <span>$56.78</span>
                                                                    <del>$65.12</del>
                                                                </div>
                                                            </div>

                                                            <p class="bz-shop-item-list-content-text">Lorem Ipsum available the majority the suffered alteration some</p>

                                                            <div class="bz-shop-item-list-content-rating">
                                                                <a href="#"><i class="fas fa-star"></i></a>
                                                                <a href="#"><i class="fas fa-star"></i></a>
                                                                <a href="#"><i class="fas fa-star"></i></a>
                                                                <a href="#"><i class="fas fa-star"></i></a>
                                                                <a href="#"><i class="far fa-star"></i></a>
                                                                <span>4.5 Rating</span>
                                                            </div>
                                                            <a href="cart.html" class="bz-shop-item-list-content-cart">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                            <div class="bz-shop-item-list bz-shop-color mb-40">
                                                <div class="row align-items-center">
                                                    <div class="col-xl-6 mb-30 mb-xl-0">
                                                        <div class="bz-shop-item-list-img bz-shop-color-img w_img position-relative">
                                                            <a href="shop-details.html" class=""><img src="{{asset('/')}}website/assets/img/shop/shop-3.jpg" alt="img"></a>
                                                            <div class="bz-shop-item-list-img-icon">
                                                                <a href="wishlist.html"><i class="fal fa-heart"></i></a>
                                                                <a href="compare.html"><i class="far fa-sync-alt"></i></a>
                                                                <a href="#0" class="eye-popup-product"><i class="far fa-expand-arrows-alt"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <div class="bz-shop-item-list-content">
                                                            <h4 class="bz-shop-item-list-title"><a href="shop-details.html">Women High-Quality Dress</a></h4>
                                                            <div class="bz-shop-item-list-hover ">
                                                                <ul class="product-color-nav">
                                                                    <li class="cl-light-green active">
                                                                        <img src="{{asset('/')}}website/assets/img/shop/shop-3.jpg" alt="img">
                                                                    </li>
                                                                    <li class="cl-black">
                                                                        <img src="{{asset('/')}}website/assets/img/shop/shop-4.jpg" alt="img">
                                                                    </li>
                                                                    <li class="cl-red">
                                                                        <img src="{{asset('/')}}website/assets/img/shop/shop-5.jpg" alt="img">
                                                                    </li>
                                                                </ul>
                                                                <div class="bz-shop-item-list-hover-price">
                                                                    <span>$34.78</span>
                                                                    <del>$45.12</del>
                                                                </div>
                                                            </div>

                                                            <p class="bz-shop-item-list-content-text">Lorem Ipsum available the majority the suffered alteration some</p>

                                                            <div class="bz-shop-item-list-content-rating">
                                                                <a href="#"><i class="fas fa-star"></i></a>
                                                                <a href="#"><i class="fas fa-star"></i></a>
                                                                <a href="#"><i class="fas fa-star"></i></a>
                                                                <a href="#"><i class="fas fa-star"></i></a>
                                                                <a href="#"><i class="far fa-star"></i></a>
                                                                <span>4.5 Rating</span>
                                                            </div>
                                                            <a href="cart.html" class="bz-shop-item-list-content-cart">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                            <div class="bz-shop-item-list bz-shop-color mb-40">
                                                <div class="row align-items-center">
                                                    <div class="col-xl-6 mb-30 mb-xl-0">
                                                        <div class="bz-shop-item-list-img bz-shop-color-img w_img position-relative">
                                                            <a href="shop-details.html" class=""><img src="{{asset('/')}}website/assets/img/shop/shop-4.jpg" alt="img"></a>
                                                            <span class="sale">Sale</span>
                                                            <div class="bz-shop-item-list-img-icon">
                                                                <a href="wishlist.html"><i class="fal fa-heart"></i></a>
                                                                <a href="compare.html"><i class="far fa-sync-alt"></i></a>
                                                                <a href="#0" class="eye-popup-product"><i class="far fa-expand-arrows-alt"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <div class="bz-shop-item-list-content">
                                                            <h4 class="bz-shop-item-list-title"><a href="shop-details.html">Women High-Quality T-Shirt</a></h4>
                                                            <div class="bz-shop-item-list-hover ">
                                                                <ul class="product-color-nav">
                                                                    <li class="cl-light-green active">
                                                                        <img src="{{asset('/')}}website/assets/img/shop/shop-4.jpg" alt="img">
                                                                    </li>
                                                                    <li class="cl-black">
                                                                        <img src="{{asset('/')}}website/assets/img/shop/shop-5.jpg" alt="img">
                                                                    </li>
                                                                    <li class="cl-red">
                                                                        <img src="{{asset('/')}}website/assets/img/shop/shop-6.jpg" alt="img">
                                                                    </li>
                                                                </ul>
                                                                <div class="bz-shop-item-list-hover-price">
                                                                    <span>$34.78</span>
                                                                </div>
                                                            </div>

                                                            <p class="bz-shop-item-list-content-text">Lorem Ipsum available the majority suffered alteration some</p>

                                                            <div class="bz-shop-item-list-content-rating">
                                                                <a href="#"><i class="fas fa-star"></i></a>
                                                                <a href="#"><i class="fas fa-star"></i></a>
                                                                <a href="#"><i class="fas fa-star"></i></a>
                                                                <a href="#"><i class="fas fa-star"></i></a>
                                                                <a href="#"><i class="far fa-star"></i></a>
                                                                <span>4.5 Rating</span>
                                                            </div>
                                                            <a href="cart.html" class="bz-shop-item-list-content-cart">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                            <div class="bz-shop-item-list bz-shop-color mb-40">
                                                <div class="row align-items-center">
                                                    <div class="col-xl-6 mb-30 mb-xl-0">
                                                        <div class="bz-shop-item-list-img bz-shop-color-img w_img position-relative">
                                                            <a href="shop-details.html" class=""><img src="{{asset('/')}}website/assets/img/shop/shop-5.jpg" alt="img"></a>
                                                            <div class="bz-shop-item-list-img-icon">
                                                                <a href="wishlist.html"><i class="fal fa-heart"></i></a>
                                                                <a href="compare.html"><i class="far fa-sync-alt"></i></a>
                                                                <a href="#0" class="eye-popup-product"><i class="far fa-expand-arrows-alt"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <div class="bz-shop-item-list-content">
                                                            <h4 class="bz-shop-item-list-title"><a href="shop-details.html">Women High-Quality T-Shirt</a></h4>
                                                            <div class="bz-shop-item-list-hover ">
                                                                <ul class="product-color-nav">
                                                                    <li class="cl-light-green active">
                                                                        <img src="{{asset('/')}}website/assets/img/shop/shop-5.jpg" alt="img">
                                                                    </li>
                                                                    <li class="cl-black">
                                                                        <img src="{{asset('/')}}website/assets/img/shop/shop-6.jpg" alt="img">
                                                                    </li>
                                                                    <li class="cl-red">
                                                                        <img src="{{asset('/')}}website/assets/img/shop/shop-7.jpg" alt="img">
                                                                    </li>
                                                                </ul>
                                                                <div class="bz-shop-item-list-hover-price">
                                                                    <span>$34.78</span>
                                                                </div>
                                                            </div>

                                                            <p class="bz-shop-item-list-content-text">Lorem Ipsum available the majority the
                                                                suffered alteration some
                                                            </p>

                                                            <div class="bz-shop-item-list-content-rating">
                                                                <a href="#"><i class="fas fa-star"></i></a>
                                                                <a href="#"><i class="fas fa-star"></i></a>
                                                                <a href="#"><i class="fas fa-star"></i></a>
                                                                <a href="#"><i class="fas fa-star"></i></a>
                                                                <a href="#"><i class="far fa-star"></i></a>
                                                                <span>4.5 Rating</span>
                                                            </div>
                                                            <a href="cart.html" class="bz-shop-item-list-content-cart">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                            <div class="bz-shop-item-list bz-shop-color mb-40">
                                                <div class="row align-items-center">
                                                    <div class="col-xl-6 mb-30 mb-xl-0">
                                                        <div class="bz-shop-item-list-img bz-shop-color-img w_img position-relative">
                                                            <a href="shop-details.html" class=""><img src="{{asset('/')}}website/assets/img/shop/shop-6.jpg" alt="img"></a>
                                                            <span class="dis">17%</span>
                                                            <div class="bz-shop-item-list-img-icon">
                                                                <a href="wishlist.html"><i class="fal fa-heart"></i></a>
                                                                <a href="compare.html"><i class="far fa-sync-alt"></i></a>
                                                                <a href="#0" class="eye-popup-product"><i class="far fa-expand-arrows-alt"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <div class="bz-shop-item-list-content">
                                                            <h4 class="bz-shop-item-list-title"><a href="shop-details.html">Women High-Quality Dress</a></h4>
                                                            <div class="bz-shop-item-list-hover ">
                                                                <ul class="product-color-nav">
                                                                    <li class="cl-light-green active">
                                                                        <img src="{{asset('/')}}website/assets/img/shop/shop-6.jpg" alt="img">
                                                                    </li>
                                                                    <li class="cl-black">
                                                                        <img src="{{asset('/')}}website/assets/img/shop/shop-7.jpg" alt="img">
                                                                    </li>
                                                                    <li class="cl-red">
                                                                        <img src="{{asset('/')}}website/assets/img/shop/shop-8.jpg" alt="img">
                                                                    </li>
                                                                </ul>
                                                                <div class="bz-shop-item-list-hover-price">
                                                                    <span>$34.78</span>
                                                                    <del>$45.12</del>
                                                                </div>
                                                            </div>

                                                            <p class="bz-shop-item-list-content-text">Lorem Ipsum available the majority suffered alteration some</p>

                                                            <div class="bz-shop-item-list-content-rating">
                                                                <a href="#"><i class="fas fa-star"></i></a>
                                                                <a href="#"><i class="fas fa-star"></i></a>
                                                                <a href="#"><i class="fas fa-star"></i></a>
                                                                <a href="#"><i class="fas fa-star"></i></a>
                                                                <a href="#"><i class="far fa-star"></i></a>
                                                                <span>4.5 Rating</span>
                                                            </div>
                                                            <a href="cart.html" class="bz-shop-item-list-content-cart">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                            <div class="bz-shop-item-list bz-shop-color mb-40">
                                                <div class="row align-items-center">
                                                    <div class="col-xl-6 mb-30 mb-xl-0">
                                                        <div class="bz-shop-item-list-img bz-shop-color-img w_img position-relative">
                                                            <a href="shop-details.html" class=""><img src="{{asset('/')}}website/assets/img/shop/shop-7.jpg" alt="img"></a>
                                                            <span class="dis">17%</span>
                                                            <div class="bz-shop-item-list-img-icon">
                                                                <a href="wishlist.html"><i class="fal fa-heart"></i></a>
                                                                <a href="compare.html"><i class="far fa-sync-alt"></i></a>
                                                                <a href="#0" class="eye-popup-product"><i class="far fa-expand-arrows-alt"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <div class="bz-shop-item-list-content">
                                                            <h4 class="bz-shop-item-list-title"><a href="shop-details.html">Women High-Quality Jacket</a></h4>
                                                            <div class="bz-shop-item-list-hover ">
                                                                <ul class="product-color-nav">
                                                                    <li class="cl-light-green active">
                                                                        <img src="{{asset('/')}}website/assets/img/shop/shop-7.jpg" alt="img">
                                                                    </li>
                                                                    <li class="cl-black">
                                                                        <img src="{{asset('/')}}website/assets/img/shop/shop-8.jpg" alt="img">
                                                                    </li>
                                                                    <li class="cl-red">
                                                                        <img src="{{asset('/')}}website/assets/img/shop/shop-9.jpg" alt="img">
                                                                    </li>
                                                                </ul>
                                                                <div class="bz-shop-item-list-hover-price">
                                                                    <span>$34.78</span>
                                                                    <del>$45.12</del>
                                                                </div>
                                                            </div>

                                                            <p class="bz-shop-item-list-content-text">Lorem Ipsum available the majority suffered alteration some</p>

                                                            <div class="bz-shop-item-list-content-rating">
                                                                <a href="#"><i class="fas fa-star"></i></a>
                                                                <a href="#"><i class="fas fa-star"></i></a>
                                                                <a href="#"><i class="fas fa-star"></i></a>
                                                                <a href="#"><i class="fas fa-star"></i></a>
                                                                <a href="#"><i class="far fa-star"></i></a>
                                                                <span>4.5 Rating</span>
                                                            </div>
                                                            <a href="cart.html" class="bz-shop-item-list-content-cart">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                            <div class="bz-shop-item-list bz-shop-color mb-40">
                                                <div class="row align-items-center">
                                                    <div class="col-xl-6 mb-30 mb-xl-0">
                                                        <div class="bz-shop-item-list-img bz-shop-color-img w_img position-relative">
                                                            <a href="shop-details.html" class=""><img src="{{asset('/')}}website/assets/img/shop/shop-8.jpg" alt="img"></a>
                                                            <span class="dis">17%</span>
                                                            <div class="bz-shop-item-list-img-icon">
                                                                <a href="wishlist.html"><i class="fal fa-heart"></i></a>
                                                                <a href="compare.html"><i class="far fa-sync-alt"></i></a>
                                                                <a href="#0" class="eye-popup-product"><i class="far fa-expand-arrows-alt"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <div class="bz-shop-item-list-content">
                                                            <h4 class="bz-shop-item-list-title"><a href="shop-details.html">Women High-Quality T-Shirt</a></h4>
                                                            <div class="bz-shop-item-list-hover ">
                                                                <ul class="product-color-nav">
                                                                    <li class="cl-light-green active">
                                                                        <img src="{{asset('/')}}website/assets/img/shop/shop-8.jpg" alt="img">
                                                                    </li>
                                                                    <li class="cl-black">
                                                                        <img src="{{asset('/')}}website/assets/img/shop/shop-9.jpg" alt="img">
                                                                    </li>
                                                                    <li class="cl-red">
                                                                        <img src="{{asset('/')}}website/assets/img/shop/shop-1.jpg" alt="img">
                                                                    </li>
                                                                </ul>
                                                                <div class="bz-shop-item-list-hover-price">
                                                                    <span>$34.78</span>
                                                                    <del>$45.12</del>
                                                                </div>
                                                            </div>

                                                            <p class="bz-shop-item-list-content-text">Lorem Ipsum available the majority suffered alteration some</p>

                                                            <div class="bz-shop-item-list-content-rating">
                                                                <a href="#"><i class="fas fa-star"></i></a>
                                                                <a href="#"><i class="fas fa-star"></i></a>
                                                                <a href="#"><i class="fas fa-star"></i></a>
                                                                <a href="#"><i class="fas fa-star"></i></a>
                                                                <a href="#"><i class="far fa-star"></i></a>
                                                                <span>4.5 Rating</span>
                                                            </div>
                                                            <a href="cart.html" class="bz-shop-item-list-content-cart">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="bz-shop-paginate mt-20 text-center">
                                                <span>1</span>
                                                <a href="shop.html">2</a>
                                                <a href="shop.html">3</a>
                                                <a href="shop.html"><i class="fal fa-angle-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="bz-shop-feature pt-110 pb-70">
                            <div class="row">
                                <div class="col-xl-4 col-lg-4">
                                    <div class="bz-shop-feature-item mb-40">
                                        <div class="bz-shop-feature-item-heading">
                                            <i class="fal fa-tshirt bz-shop-feature-item-heading-icon"></i>
                                            <h5 class="bz-shop-feature-item-heading-title"><a href="shop.html">Quality Materials</a></h5>
                                        </div>
                                        <p class="bz-shop-feature-item-text">Lorem Ipsum available the majority have suffered
                                            alteration in some form by injected humour random
                                            ised words which don't look even slightly.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4">
                                    <div class="bz-shop-feature-item mb-40">
                                        <div class="bz-shop-feature-item-heading">
                                            <i class="far fa-shopping-bag bz-shop-feature-item-heading-icon"></i>
                                            <h5 class="bz-shop-feature-item-heading-title"><a href="contact.html">Free Shipping</a></h5>
                                        </div>
                                        <p class="bz-shop-feature-item-text">Lorem Ipsum available the majority have suffered
                                            alteration in some form by injected humour random
                                            ised words which don't look even slightly.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4">
                                    <div class="bz-shop-feature-item mb-40">
                                        <div class="bz-shop-feature-item-heading">
                                            <i class="fal fa-usd-square bz-shop-feature-item-heading-icon"></i>
                                            <h5 class="bz-shop-feature-item-heading-title"><a href="contact.html">Secure Payment</a></h5>
                                        </div>
                                        <p class="bz-shop-feature-item-text">Lorem Ipsum available the majority have suffered
                                            alteration in some form by injected humour random
                                            ised words which don't look even slightly.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- shop area end -->



        <!-- Apps download area start -->
        <section class="apps-area">
            <div class="bz-apps">
                <div class="container">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-xl-5 col-lg-6 col-md-9">
                            <div class="bz-apps-content text-center pt-60 pb-70">
                                <h3 class="bz-apps-content-title">
                                    Make your online shop easier with our mobile app
                                </h3>
                                <p class="bz-apps-content-text">
                                    We offer high-quality films and the best documentary selection, and the ability to browse alphabetically and by genre
                                </p>
                                <div class="bz-apps-content-download">
                                    <img src="{{asset('/')}}website/assets/img/apps/download-1.png" alt="img">
                                    <img src="{{asset('/')}}website/assets/img/apps/download-2.png" alt="img">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 offset-xl-1 col-lg-6 d-none d-lg-block">
                            <div class="bz-apps-img w_img">
                                <img src="{{asset('/')}}website/assets/img/apps/appsBg.png" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Apps download area end -->

    </main>
    <!-- main area end -->


@endsection
