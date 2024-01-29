@extends('website.master')

@section('body')

    <!-- main area start  -->
    <main>

        <!-- slider area start -->
        <section class="slider-area">
            <div class="bz-single-slider mt-35">
                <div class="container container-full-1">
                    <div class="row">
                        <div class="col-xxl-8 col-xl-8 col-lg-12">
                            <div class="bz-single-slider-main">
                                <div class="bz-single-silder-main-wrapp">
                                    <div class="row align-items-center">
                                        <div class="col-xxl-7 col-xl-8 col-lg-7 col-md-8">
                                            <div class="bz-single-slider-main-content">
                                                <h6 class="bz-single-slider-main-content-subtitle">Trendy Collection's</h6>
                                                <h2 class="bz-single-slider-main-content-title">Clothes Are The Spirit of
                                                    <span>Fashion
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="172.818" height="7.964" viewBox="0 0 172.818 7.964">
                                                            <path id="Path_1921" data-name="Path 1921" d="M2762.508,561.551s85.916-15.621,172.64,0" transform="translate(-2762.418 -554.079)" fill="none" stroke="#829b85" stroke-width="1"/>
                                                            </svg>
                                                      </span>
                                                </h2>
                                                <p class="bz-single-slider-main-content-text">As a woman gets older, it's more about style than fashion woman knowing herself more and more and looking for new things getting into her own personal style.</p>
                                                <a href="shop.html" class="bz-btn">Shop Now</a>
                                            </div>
                                        </div>
                                        <div class="col-xxl-5 col-xl-4 col-lg-5 col-md-4 d-none d-md-block">
                                            <div class="bz-single-slider-main-img">
                                                <img src="{{asset('/')}}website/assets/img/slider/slider-1.png" alt="img">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="bz-single-slider-main-feature d-flex justify-content-between">
                                    <div class="bz-single-slider-main-feature-item">
                                        <div class="bz-single-slider-main-feature-item-heading">
                                            <i class="far fa-shopping-bag bz-single-slider-main-feature-item-heading-icon"></i>
                                            <h5 class="bz-single-slider-main-feature-item-heading-title"><a href="contact.html">Free Shipping</a></h5>
                                        </div>
                                        <div class="bz-single-slider-main-feature-item-text">
                                            <p>Lorem Ipsum available the majority
                                                have suffered alteration some</p>
                                        </div>
                                    </div>
                                    <div class="bz-single-slider-main-feature-item">
                                        <div class="bz-single-slider-main-feature-item-heading">
                                            <i class="fal fa-tshirt bz-single-slider-main-feature-item-heading-icon"></i>
                                            <h5 class="bz-single-slider-main-feature-item-heading-title"><a href="shop.html">Quality Materials</a></h5>
                                        </div>
                                        <div class="bz-single-slider-main-feature-item-text">
                                            <p>Lorem Ipsum available the majority
                                                have suffered alteration some</p>
                                        </div>
                                    </div>
                                    <div class="bz-single-slider-main-feature-item">
                                        <div class="bz-single-slider-main-feature-item-heading">
                                            <i class="fal fa-usd-square bz-single-slider-main-feature-item-heading-icon"></i>
                                            <h5 class="bz-single-slider-main-feature-item-heading-title"><a href="contact.html">Secure Payment</a></h5>
                                        </div>
                                        <div class="bz-single-slider-main-feature-item-text">
                                            <p>Lorem Ipsum available the majority
                                                have suffered alteration some</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="bz-single-slider-main-bg">
                                    <img src="{{asset('/')}}website/assets/img/slider/slider-bg.png" alt="img">
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-4 col-lg-12">
                            <div class="bz-single-slider-sidebar pt-50 pb-50">
                                <div class="bz-single-slider-sidebar-img">
                                    <img src="{{asset('/')}}website/assets/img/slider/slider-2.png" alt="img">
                                </div>
                                <div class="bz-single-slider-sidebar-btn text-center">
                                    <a href="shop.html" class="bz-btn">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- slider area end -->

        <!-- feature area start -->
        <section class="feature-area pt-110 pb-110 bg-warning">
            <div class="bz-feature">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-8">
                            <div class="bz-section-title text-center mb-60">
                                <h3>Featured Categories</h3>
                                <p>Visit our shop to see amazing creations from our fashion house</p>
                            </div>
                        </div>
                    </div>
                    <div class="bz-feature-active swiper-container bz-feature-space bz-feature-dot">
                        <div class="swiper-wrapper">
                          @foreach($products as $product)
                            <div class="swiper-slide">
                                <div class="bz-feature-single-box">
                                    <div class="bz-feature-single-box-img w_img">
                                        <img src="{{asset($product->image)}}" alt="img" height="250">
                                    </div>

                                    <div class="bz-feature-single-box-content">
                                        <h4 class="bz-feature-single-box-content-title"><a href="shop.html">{{$product->name}}</a></h4>
                                        <span class="bz-feature-single-box-content-items">{{$product->stock_number}}</span>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <div class="swiper-pagination bz-feature-pagination"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- feature area end -->

        <!-- post area start -->
        <div class="bz-post-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="bz-post-wrap d-flex align-items-center">
                            <div class="bz-post-wrap-content">
                                <a href="shop.html" class="bz-post-wrap-content-link">10% Off Any Time</a>
                                <h3 class="bz-post-wrap-content-title">Women Clothing <br>
                                    Collection</h3>
                                <a href="shop.html" class="bz-post-wrap-content-btn">Shop Now</a>
                            </div>
                            <div class="bz-post-wrap-img">
                                <img src="{{asset('/')}}website/assets/img/post/post-1.png" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="bz-post-wrap d-flex align-items-center">
                            <div class="bz-post-wrap-content">
                                <a href="shop.html" class="bz-post-wrap-content-link">2022 Winter Dress</a>
                                <h3 class="bz-post-wrap-content-title">Enjoy This <br>
                                    Summer Trends</h3>
                                <a href="shop.html" class="bz-post-wrap-content-btn">Explore Now</a>
                            </div>
                            <div class="bz-post-wrap-img">
                                <img src="{{asset('/')}}website/assets/img/post/post-2.png" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- post area end -->

        <!-- season area start -->
        <section class="season-area pt-110 pb-60 bg-warning">
            <div class="bz-season">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-8">
                            <div class="bz-section-title text-center mb-60">
                                <h3>New In This Season</h3>
                                <p>Visit our shop to see amazing creations from our fashion house</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                       @foreach($products as $product)
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="bz-season-item mb-40" bis_skin_checked="1">
                                <div class="bz-season-item-wrapper position-relative">
                                    <div class="bz-season-item-img w_img" bis_skin_checked="1">
                                        <a href="shop-details.html" class=""><img src="{{asset($product->image)}}" alt="img" height="250"></a>
                                        <span class="trend">Trending</span>
                                    </div>
                                    <div class="bz-season-item-hover-wrapper">
                                        <div class="bz-season-item-img-icon">
                                            <a href="{{route('wishlist')}}"><i class="fal fa-heart"></i></a>
                                            <a href="compare.html"><i class="far fa-sync-alt"></i></a>
                                            <a href="#0" class="eye-popup-product"><i class="far fa-expand-arrows-alt"></i></a>
                                        </div>
                                        <div class="bz-season-item-hover">
                                            <div class="bz-season-item-hover-cart">
                                                <a href="{{route('show-cart')}}">Add to Cart</a>
                                            </div>
                                            <ul class="product-color-nav">
                                                <li class="cl-light-green active">
                                                    <img src="{{asset('/')}}website/assets/img/season/1.jpg" alt="img">
                                                </li>
                                                <li class="cl-black">
                                                    <img src="{{asset('/')}}website/assets/img/season/2.jpg" alt="img">
                                                </li>
                                                <li class="cl-red">
                                                    <img src="{{asset('/')}}website/assets/img/season/3.jpg" alt="img">
                                                </li>
                                            </ul>
                                        </div>
                                    </div>


                                </div>

                                <div class="bz-season-item-content pt-20">

                                    <h4 class="bz-season-item-content-title"><a href="shop-details.html">{{$product->name}}</a></h4>
                                    <div class="bz-season-item-content-rating">
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="far fa-star"></i></a>
                                    </div>
                                    <span class="price-bottom">Tk. {{$product->regular_price}}</span>

                                </div>
                            </div>
                        </div>
                        @endforeach

{{--                        @foreach($products as $product)--}}
{{--                        <div class="col-xl-4 col-lg-4 col-md-6">--}}
{{--                            <div class="bz-season-item mb-40" bis_skin_checked="1">--}}
{{--                                <div class="bz-season-item-wrapper position-relative">--}}
{{--                                    <div class="bz-season-item-img w_img" bis_skin_checked="1">--}}
{{--                                        <a href="shop-details.html" class=""><img src="{{asset($product->image)}}" alt="img" height="250"></a>--}}
{{--                                        <span class="dis">17%</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="bz-season-item-hover-wrapper">--}}
{{--                                        <div class="bz-season-item-img-icon">--}}
{{--                                            <a href="wishlist.html"><i class="fal fa-heart"></i></a>--}}
{{--                                            <a href="compare.html"><i class="far fa-sync-alt"></i></a>--}}
{{--                                            <a href="#0" class="eye-popup-product"><i class="far fa-expand-arrows-alt"></i></a>--}}
{{--                                        </div>--}}
{{--                                        <div class="bz-season-item-hover">--}}
{{--                                            <div class="bz-season-item-hover-cart">--}}
{{--                                                <a href="cart.html">Add to Cart</a>--}}
{{--                                            </div>--}}
{{--                                            <ul class="product-color-nav">--}}
{{--                                                <li class="cl-light-green active">--}}
{{--                                                    <img src="{{asset('/')}}website/assets/img/shop/shop-2.jpg" alt="img">--}}
{{--                                                </li>--}}
{{--                                                <li class="cl-black">--}}
{{--                                                    <img src="{{asset('/')}}website/assets/img/shop/shop-3.jpg" alt="img">--}}
{{--                                                </li>--}}
{{--                                                <li class="cl-red">--}}
{{--                                                    <img src="{{asset('/')}}website/assets/img/shop/shop-4.jpg" alt="img">--}}
{{--                                                </li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}


{{--                                </div>--}}

{{--                                <div class="bz-season-item-content pt-20">--}}
{{--                                    <h4 class="bz-season-item-content-title"><a href="shop-details.html">{{$product->name}}</a></h4>--}}
{{--                                    <div class="bz-season-item-content-rating">--}}
{{--                                        <a href="#"><i class="fas fa-star"></i></a>--}}
{{--                                        <a href="#"><i class="fas fa-star"></i></a>--}}
{{--                                        <a href="#"><i class="fas fa-star"></i></a>--}}
{{--                                        <a href="#"><i class="fas fa-star"></i></a>--}}
{{--                                        <a href="#"><i class="far fa-star"></i></a>--}}
{{--                                        <span>4.5 Rating</span>--}}
{{--                                    </div>--}}
{{--                                    <span class="price-bottom">$46.23</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                           @endforeach--}}

                           @foreach($products as $product)
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="bz-season-item mb-40" bis_skin_checked="1">
                                <div class="bz-season-item-wrapper position-relative">
                                    <div class="bz-season-item-img w_img" bis_skin_checked="1">
                                        <a href="shop-details.html" class=""><img src="{{asset($product->image)}}" alt="img" height="250"></a>
                                        <span class="trend">Featured</span>
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
                                                    <img src="{{asset('/')}}website/assets/img/season/1.jpg" alt="img">
                                                </li>
                                                <li class="cl-black">
                                                    <img src="{{asset('/')}}website/assets/img/season/2.jpg" alt="img">
                                                </li>
                                                <li class="cl-red">
                                                    <img src="{{asset('/')}}website/assets/img/season/3.jpg" alt="img">
                                                </li>
                                            </ul>
                                        </div>
                                    </div>


                                </div>

                                <div class="bz-season-item-content pt-20">

                                    <h4 class="bz-season-item-content-title"><a href="shop-details.html">{{$product->name}}</a></h4>
                                    <div class="bz-season-item-content-rating">
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="far fa-star"></i></a>
                                        <span></span>
                                    </div>
                                    <span class="price-bottom">{{$product->selling_price}}</span>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>

                </div>
            </div>
        </section>
        <!-- season area end -->


        <!-- cta area start -->
        <div class="cta-area">
            <div class="bz-cta pt-60 pb-65">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-8">
                            <div class="bz-cta-wrap">
                                <div class="bz-cta-wrap-content mb-40 text-center">
                                    <span class="bz-cta-wrap-content-subtitle">Get Discount 20% Off</span>
                                    <h2 class="bz-cta-wrap-content-title">Get our emails for info on new <br>
                                        items, sales and more.</h2>
                                </div>
                                <div class="bz-cta-wrap-form">
                                    <form action="https://themephi.net/template/bajar/bajar/index.html">
                                        <input type="email" placeholder="Enter your email">
                                        <button type="submit"><i class="fal fa-long-arrow-right"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- cta area end -->

        <!-- testimonial area start -->
        <section class="testimonial-area pt-110 pb-110 bg-warning">
            <div class="bz-testimonial bz-style-1">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-8">
                            <div class="bz-section-title text-center mb-60">
                                <h3>New In This Season</h3>
                                <p>Visit our shop to see amazing creations from our fashion house</p>
                            </div>
                        </div>
                    </div>
                    <div class="bz-testimonial-wrap">
                        <div class="bz-testimonial-active swiper-container bz-testimonial-space">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="bz-testimonial-box">
                                        <div class="bz-testimonial-box-author">
                                            <div class="bz-testimonial-box-author-img">
                                                <img src="{{asset('/')}}website/assets/img/testimonial/author-1.jpg" alt="img">
                                                <span><i class="fas fa-quote-right"></i></span>
                                            </div>
                                            <div class="bz-testimonial-box-author-info">
                                                <h5 class="bz-testimonial-box-author-info-title">
                                                    <a href="#">Eleanor Aria</a>
                                                </h5>
                                                <span class="bz-testimonial-box-author-info-subtitle">Customer</span>
                                            </div>
                                        </div>
                                        <div class="bz-testimonial-box-content ml-85">
                                            <p class="bz-testimonial-box-content-text">"Lorem Ipsum available the majority have suffered alteration in some form injected humour, or randomised words which don't look even slightly believable"</p>
                                            <div class="bz-testimonial-box-content-rating">
                                                <p>4.5<span>Rating</span></p>
                                                <div class="rating-star">
                                                    <a href="#"><i class="fas fa-star"></i></a>
                                                    <a href="#"><i class="fas fa-star"></i></a>
                                                    <a href="#"><i class="fas fa-star"></i></a>
                                                    <a href="#"><i class="fas fa-star"></i></a>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="bz-testimonial-box">
                                        <div class="bz-testimonial-box-author">
                                            <div class="bz-testimonial-box-author-img">
                                                <img src="{{asset('/')}}website/assets/img/testimonial/author-2.jpg" alt="img">
                                                <span><i class="fas fa-quote-right"></i></span>
                                            </div>
                                            <div class="bz-testimonial-box-author-info">
                                                <h5 class="bz-testimonial-box-author-info-title">
                                                    <a href="#">Jimmy Doe</a>
                                                </h5>
                                                <span class="bz-testimonial-box-author-info-subtitle">Customer</span>
                                            </div>
                                        </div>
                                        <div class="bz-testimonial-box-content ml-85">
                                            <p class="bz-testimonial-box-content-text">"Lorem Ipsum available the majority have suffered alteration in some form injected humour, or randomised words which don't look even slightly believable"</p>
                                            <div class="bz-testimonial-box-content-rating">
                                                <p>4.5<span>Rating</span></p>
                                                <div class="rating-star">
                                                    <a href="#"><i class="fas fa-star"></i></a>
                                                    <a href="#"><i class="fas fa-star"></i></a>
                                                    <a href="#"><i class="fas fa-star"></i></a>
                                                    <a href="#"><i class="fas fa-star"></i></a>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="bz-testimonial-box">
                                        <div class="bz-testimonial-box-author">
                                            <div class="bz-testimonial-box-author-img">
                                                <img src="{{asset('/')}}website/assets/img/testimonial/author-1.jpg" alt="img">
                                                <span><i class="fas fa-quote-right"></i></span>
                                            </div>
                                            <div class="bz-testimonial-box-author-info">
                                                <h5 class="bz-testimonial-box-author-info-title">
                                                    <a href="#">Jenny Doe</a>
                                                </h5>
                                                <span class="bz-testimonial-box-author-info-subtitle">Customer</span>
                                            </div>
                                        </div>
                                        <div class="bz-testimonial-box-content bz-style-1 ml-85">
                                            <p class="bz-testimonial-box-content-text">"Lorem Ipsum available the majority have suffered alteration in some form injected humour, or randomised words which don't look even slightly believable"</p>
                                            <div class="bz-testimonial-box-content-rating">
                                                <p>4.5<span>Rating</span></p>
                                                <div class="rating-star">
                                                    <a href="#"><i class="fas fa-star"></i></a>
                                                    <a href="#"><i class="fas fa-star"></i></a>
                                                    <a href="#"><i class="fas fa-star"></i></a>
                                                    <a href="#"><i class="fas fa-star"></i></a>
                                                    <a href="#"><i class="far fa-star"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-pagination bz-testimonial-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial area end -->

        <!-- blog area start -->
        <section class="blog-area bg-success">
            <div class="bz-blog">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-8">
                            <div class="bz-section-title text-center mb-60">
                                <h3>New In This Season</h3>
                                <p class="text-white">Visit our shop to see amazing creations from our fashion house</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="bz-blog-item mb-40">
                                <div class="bz-blog-img w_img">
                                    <a href="blog-details.html"><img src="{{asset('/')}}website/assets/img/blog/blog-1.jpg" alt="img"></a>

                                </div>
                                <div class="bz-blog-content">
                                    <div class="bz-blog-content-meta d-flex justify-content-between">
                                        <div class="bz-blog-content-date">
                                            <h6>24</h6>
                                            <span>February</span>
                                        </div>
                                        <div class="bz-blog-content-admin text-white">
                                            <a href="#">Fashion / By Admin</a>
                                        </div>
                                    </div>
                                    <h4 class="bz-blog-content-title"><a href="blog-details.html">Fashion is the armor to survive the reality of everyday life</a></h4>
                                    <a href="blog-details.html" class="bz-blog-content-link text-white">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="bz-blog-item mb-40">
                                <div class="bz-blog-img w_img">
                                    <a href="blog-details.html"><img src="{{asset('/')}}website/assets/img/blog/blog-2.jpg" alt="img"></a>

                                </div>
                                <div class="bz-blog-content">
                                    <div class="bz-blog-content-meta d-flex justify-content-between">
                                        <div class="bz-blog-content-date">
                                            <h6>25</h6>
                                            <span>February</span>
                                        </div>
                                        <div class="bz-blog-content-admin">
                                            <a href="#">Fashion / By Admin</a>
                                        </div>
                                    </div>
                                    <h4 class="bz-blog-content-title"><a href="blog-details.html">I think fashion can do a lot. Fashion is
                                            very popular.</a></h4>
                                    <a href="blog-details.html" class="bz-blog-content-link">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="bz-blog-item mb-40">
                                <div class="bz-blog-img w_img">
                                    <a href="blog-details.html"><img src="{{asset('/')}}website/assets/img/blog/blog-3.jpg" alt="img"></a>

                                </div>
                                <div class="bz-blog-content">
                                    <div class="bz-blog-content-meta d-flex justify-content-between">
                                        <div class="bz-blog-content-date">
                                            <h6>26</h6>
                                            <span>February</span>
                                        </div>
                                        <div class="bz-blog-content-admin">
                                            <a href="#">Fashion / By Admin</a>
                                        </div>
                                    </div>
                                    <h4 class="bz-blog-content-title"><a href="blog-details.html">Fashion as we knew it is over; people
                                            wear now exactly</a></h4>
                                    <a href="blog-details.html" class="bz-blog-content-link">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog area end -->

        <!-- brand area start -->
        <div class="brand-area pt-70 pb-110 bg-success">
            <div class="bz-brand">
                <div class="container">
                    <div class="bz-brand-active swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="bz-brand-img">
                                    <img src="{{asset('/')}}website/assets/img/brand/brand-1.png" alt="brand image not found">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="bz-brand-img">
                                    <img src="{{asset('/')}}website/assets/img/brand/brand-2.png" alt="brand image not found">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="bz-brand-img">
                                    <img src="{{asset('/')}}website/assets/img/brand/brand-3.png" alt="brand image not found">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="bz-brand-img">
                                    <img src="{{asset('/')}}website/assets/img/brand/brand-4.png" alt="brand image not found">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="bz-brand-img">
                                    <img src="{{asset('/')}}website/assets/img/brand/brand-5.png" alt="brand image not found">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- brand area end -->

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
