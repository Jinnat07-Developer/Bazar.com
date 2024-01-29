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
                                    Product Collection
                                </h3>
                                <span class="bz-breadcrumb-content-subtitle">
                                        Fashion is the armor to survive the reality of everyday life.
                                    </span>
                            </div>
                            <div class="bz-breadcrumb-list">
                                <a href="index.html">Home</a>
                                <span>Shop</span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- shop details area start -->
        <div class="shop-details-area pt-60 pb-105">
            <div class="container">
                <div class="bz-shop-details mb-70">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="mb-50 mb-lg-0">
                                <div class="bz-single-shop-details-active swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="bz-single-shop-details-image has-width">
                                                <img src="{{asset($product->image)}}" alt="img" height="450">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bz-single-shop-details-control-wrap ">
                                    <div class="bz-single-shop-details-control-active swiper-container">
                                        <div class="swiper-wrapper">
                                         @foreach($product->otherImages as $otherImage)
                                            <div class="swiper-slide">
                                                <div class="bz-single-shop-details-control-image w_img">
                                                    <img src="{{asset($otherImage->image)}}" alt="img" height="150">
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="bz-shop-details-content ml-20">
                                <h3 class="bz-shop-details-content-title">
                                   Product Detail
                                </h3>
                                <div class="bz-shop-details-content-price-rating-wrap mb-25">
                                    <div class="bz-shop-details-contetn-price mb-15 mb-sm-0">
                                        <span>{{$product->selling_price}}</span>
                                        <del>{{$product->regular_price}}</del>
                                    </div>
                                    <div class="bz-shop-details-content-rating">
{{--                                        <a href="#"><i class="fas fa-star"></i></a>--}}
{{--                                        <a href="#"><i class="fas fa-star"></i></a>--}}
{{--                                        <a href="#"><i class="fas fa-star"></i></a>--}}
{{--                                        <a href="#"><i class="fas fa-star"></i></a>--}}
{{--                                        <a href="#"><i class="far fa-star"></i></a>--}}
{{--                                        <span>4.5 Rating</span>--}}
                                    </div>
                                </div>
                                <div class="bz-shop-details-content-text mb-30">
                                    <p>{!! $product->long_description !!}</p>
                                </div>
                                <div class="bz-shop-details-content-bottom-wrap">
                                    <div class="bz-shop-details-content-color-size-wrap borter-top pt-30 pb-30">
                                        <div class="bz-shop-details-content-color mb-20 mb-sm-0">
{{--                                            <ul>--}}
{{--                                                <li class="cl-olive active"><a href="#">Olive</a></li>--}}
{{--                                                <li class="cl-black"><a href="#">Black</a></li>--}}
{{--                                                <li class="cl-red"><a href="#">Red</a></li>--}}
{{--                                                <li class="cl-blue"><a href="#">Blue</a></li>--}}
{{--                                                <li class="cl-green"><a href="#">Green</a></li>--}}
{{--                                            </ul>--}}
                                        </div>
                                        <div class="bz-shop-details-content-size mx-auto">
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
                                        <a href="{{route('show-cart')}}" class="bz-shop-details-content-add-cart">
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
                                            <li><b>Product Price:</b> <span>{{$product->selling_price}}</span></li>
                                            <li><b>Product Category :</b> <span></span></li>
                                            <li><b>product Brand</b> <span></span></li>
                                        </ul>
                                    </div>
{{--                                    <div class="bz-shop-details-content-social border-top pt-30 pb-30">--}}
{{--                                        <a href="#"><i class="fab fa-facebook-f"></i></a>--}}
{{--                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>--}}
{{--                                        <a href="#"><i class="fab fa-vimeo-v"></i></a>--}}
{{--                                        <a href="#"><i class="fab fa-twitter"></i></a>--}}
{{--                                        <a href="#"><i class="fab fa-instagram"></i></a>--}}
{{--                                    </div>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bz-shop-details-info-tabs">
                    <div class="bz-shop-details-info-tab-controls mb-50">
                        <nav>
                            <div class="nav" id="nav-tab" role="tablist">
                                <button class="active" id="nav-desc-tab" data-bs-toggle="tab" data-bs-target="#nav-desc" type="button" role="tab" aria-controls="nav-desc" aria-selected="true">Description</button>
{{--                                <button class id="nav-info-tab" data-bs-toggle="tab" data-bs-target="#nav-info" type="button" role="tab" aria-controls="nav-info" aria-selected="false">Ask A Question</button>--}}
{{--                                <button class id="nav-review-tab" data-bs-toggle="tab" data-bs-target="#nav-review" type="button" role="tab" aria-controls="nav-review" aria-selected="false">Reviews (02)</button>--}}
                            </div>
                        </nav>
                    </div>
                    <div class="bz-shop-details-info-tab-content">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-desc" role="tabpanel" aria-labelledby="nav-desc-tab">
                                <div class="row">
                                    <div class="col-xl-10">
                                        <div class="bz-description-text">
                                            <p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend.
                                            </p>
                                            <p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything.</p>
                                        </div>
                                        <div class="bz-description-list pt-10">
                                            <ul>
                                                <li><i class="fas fa-check-circle"></i> Embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet
                                                </li>
                                                <li><i class="fas fa-check-circle"></i> Tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary</li>
                                                <li><i class="fas fa-check-circle"></i> Over 200 Latin words, combined with a handful of model sentence</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-info" role="tabpanel" aria-labelledby="nav-info-tab">
                                <div class="row">
                                    <div class="col-xl-10">
                                        <div class="bz-shop-details-faq">
                                            <div class="bz-shop-details-faq-top mb-40">
                                                <h3 class="bz-shop-details-faq-title mb-20">Frequently Asked Questions</h3>
                                                <p class="bz-shop-details-faq-text">Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle
                                                    of text. All the Lorem Ipsum generators on the Internet tend.</p>
                                            </div>
                                            <div class="bz-shop-details-faq-box">
                                                <div id="accordion">

                                                    <div class="card">
                                                        <div class="card-header">
                                                            <a class="card-btn" data-bs-toggle="collapse" href="#collapseOne">
                                                                Can I change or cancel my order before it’s despatched?
                                                            </a>
                                                        </div>
                                                        <div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
                                                            <div class="card-body">
                                                                <p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't
                                                                    look even slightly believable. If you are going to use a passage of lorem Ipsum you need to be sure there isn't anything embarrassing
                                                                    hidden in the middle of text. all the Lorem Ipsum generators on the Internet tend to repeat predefined chunks necessary making this
                                                                    the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="card">
                                                        <div class="card-header">
                                                            <a class="collapsed card-btn" data-bs-toggle="collapse" href="#collapseTwo">
                                                                Can I find out at what time my order will be delivered?
                                                            </a>
                                                        </div>
                                                        <div id="collapseTwo" class="collapse" data-bs-parent="#accordion">
                                                            <div class="card-body">
                                                                <p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of lorem Ipsum you need to be sure there isn't anything embarrassing hidden in the middle of text. all the Lorem Ipsum generators on the Internet tend to repeat predefined chunks necessary making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="card">
                                                        <div class="card-header">
                                                            <a class="collapsed card-btn" data-bs-toggle="collapse" href="#collapseThree">
                                                                How is shopping at ATOZ Fashion Home different than other home furnishing stores?
                                                            </a>
                                                        </div>
                                                        <div id="collapseThree" class="collapse" data-bs-parent="#accordion">
                                                            <div class="card-body">
                                                                <p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of lorem Ipsum you need to be sure there isn't anything embarrassing hidden in the middle of text. all the Lorem Ipsum generators on the Internet tend to repeat predefined chunks necessary making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="card">
                                                        <div class="card-header">
                                                            <a class="collapsed card-btn" data-bs-toggle="collapse" href="#collapseFour">
                                                                How can I see the products in person before making a purchase?
                                                            </a>
                                                        </div>
                                                        <div id="collapseFour" class="collapse" data-bs-parent="#accordion">
                                                            <div class="card-body">
                                                                <p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of lorem Ipsum you need to be sure there isn't anything embarrassing hidden in the middle of text. all the Lorem Ipsum generators on the Internet tend to repeat predefined chunks necessary making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="card">
                                                        <div class="card-header">
                                                            <a class="collapsed card-btn" data-bs-toggle="collapse" href="#collapseFive">
                                                                How can I make a change or cancel my order?
                                                            </a>
                                                        </div>
                                                        <div id="collapseFive" class="collapse" data-bs-parent="#accordion">
                                                            <div class="card-body">
                                                                <p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of lorem Ipsum you need to be sure there isn't anything embarrassing hidden in the middle of text. all the Lorem Ipsum generators on the Internet tend to repeat predefined chunks necessary making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-review" role="tabpanel" aria-labelledby="nav-review-tab">
                                <div class="bz-shop-details-review-box">
                                    <h4 class="bz-shop-details-review-title mb-40">2 Review for "Women High-Quality Slim Shirt"</h4>
                                    <div class="bz-shop-details-review-box-wrap mb-30 ">
                                        <div class="bz-shop-details-review-box-single">
                                            <div class="thumb mb-20 mb-lg-0">
                                                <img src="{{asset('/')}}website/assets/img/shop-details/review-1.png" alt="img">
                                            </div>
                                            <div class="wrap pb-30 bz-border-bottom">
                                                <div class="content ">
                                                    <div class="reviewer-info">
                                                        <h4 class="title">David Warner</h4>
                                                        <div class="rating">
                                                            <i class="fas fa-star "></i>
                                                            <i class="fas fa-star "></i>
                                                            <i class="fas fa-star "></i>
                                                            <i class="fas fa-star "></i>
                                                            <i class="fal fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="review-date mb-20">
                                                        <span>March 10 , 2022</span>
                                                        <a href="#">Reply</a>
                                                    </div>

                                                    <p class="review">Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomized
                                                        words which don't look even slightly believable. If you are going to use a passage.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bz-shop-details-review-box-wrap mb-50">
                                        <div class="bz-shop-details-review-box-single">
                                            <div class="thumb mb-20 mb-md-0">
                                                <img src="{{asset('/')}}website/assets/img/shop-details/review-2.png" alt="img">
                                            </div>
                                            <div class="wrap">
                                                <div class="content ">
                                                    <div class="reviewer-info">
                                                        <h4 class="title">Jony Bristow</h4>
                                                        <div class="rating">
                                                            <i class="fas fa-star "></i>
                                                            <i class="fas fa-star "></i>
                                                            <i class="fas fa-star "></i>
                                                            <i class="fas fa-star "></i>
                                                            <i class="fal fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="review-date mb-20">
                                                        <span>March 10 , 2022</span>
                                                        <a href="#">Reply</a>
                                                    </div>

                                                    <p class="review">Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomized
                                                        words which don't look even slightly believable. If you are going to use a passage.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="required-field mb-30">
                                        <h4 class="bz-shop-details-review-title mb-10">Your Review</h4>
                                        <p>
                                            Your email address will not be published. Required fields are marked *
                                        </p>
                                    </div>
                                    <div class="bz-review mb-30">
                                        <span>Your Rating</span>
                                        <div class="bz-review-rating">
                                            <i class="fas fa-star active"></i>
                                            <i class="fas fa-star "></i>
                                            <i class="fas fa-star "></i>
                                            <i class="fas fa-star "></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="bz-submit-form-default">
                                        <div class="row">

                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                <div class="bz-submit-form-default-single mb-30">
                                                    <input type="text" id="name" class="name" placeholder="Name">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                <div class="bz-submit-form-default-single mb-30">
                                                    <input type="text" id="email" class="email" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12">
                                                <div class="bz-submit-form-default-single mb-20">
                                                    <textarea name="review" id="review" class="review" placeholder="Your review"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12">
                                                <div class="bz-submit-form-default-single mb-40">
                                                    <div class="condition-box">
                                                        <input type="checkbox" id="condition" class="has-condition condition">
                                                        <label for="condition" class="condition">Save my name, email in this browser for the next time I comment.</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12">
                                                <div class="bz-submit-form-default-single">
                                                    <button type="submit" class="bz-submit-form-default-single-btn bz-btn">Submit Review</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- shop details area end -->

        <!-- related product area start -->
        <div class="related-product-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <h4 class="bz-shop-details-section-title mb-55">Related Product</h4>
                    </div>
                </div>
                <div class="row pb-70">
                    <div class="col-xl-12">
                        <div class="bz-shop-details-related-product-active swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="bz-season-item mb-40">
                                        <div class="bz-season-item-wrapper position-relative">
                                            <div class="bz-season-item-img w_img">
                                                <a href="shop-details.html" class=""><img src="{{asset($product->image)}}" alt="img" height="250"></a>
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
{{--                                            <div class="bz-season-item-content-rating">--}}
{{--                                                <a href="#"><i class="fas fa-star"></i></a>--}}
{{--                                                <a href="#"><i class="fas fa-star"></i></a>--}}
{{--                                                <a href="#"><i class="fas fa-star"></i></a>--}}
{{--                                                <a href="#"><i class="fas fa-star"></i></a>--}}
{{--                                                <a href="#"><i class="far fa-star"></i></a>--}}
{{--                                                <span></span>--}}
{{--                                            </div>--}}
                                            <span class="price-bottom">BDT. {{$product->selling_price}}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="bz-season-item mb-40">
                                        <div class="bz-season-item-wrapper position-relative">
                                            <div class="bz-season-item-img w_img">
                                                <a href="shop-details.html" class=""><img src="{{asset($product->image)}}" alt="img" height="250"></a>
                                                <span class="sale">Sale</span>
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
                                                            <img src="{{asset('/')}}website/assets/img/shop/shop-8.jpg" alt="img">
                                                        </li>
                                                        <li class="cl-black">
                                                            <img src="{{asset('/')}}website/assets/img/shop/shop-9.jpg" alt="img">
                                                        </li>
                                                        <li class="cl-red">
                                                            <img src="{{asset('/')}}website/assets/img/shop/shop-1.jpg" alt="img">
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="bz-season-item-content pt-20">
                                            <h4 class="bz-season-item-content-title"><a href="shop-details.html">{{$product->name}}</a></h4>
{{--                                            <div class="bz-season-item-content-rating">--}}
{{--                                                <a href="#"><i class="fas fa-star"></i></a>--}}
{{--                                                <a href="#"><i class="fas fa-star"></i></a>--}}
{{--                                                <a href="#"><i class="fas fa-star"></i></a>--}}
{{--                                                <a href="#"><i class="fas fa-star"></i></a>--}}
{{--                                                <a href="#"><i class="far fa-star"></i></a>--}}
{{--                                                <span></span>--}}
{{--                                            </div>--}}
                                            <span class="price-bottom">BDT. {{$product->selling_price}}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="bz-season-item mb-40" >
                                        <div class="bz-season-item-wrapper position-relative">
                                            <div class="bz-season-item-img w_img">
                                                <a href="shop-details.html" class=""><img src="{{asset($product->image)}}" alt="img" height="250"></a>
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
                                                            <img src="{{asset('/')}}website/assets/img/shop/shop-9.jpg" alt="img">
                                                        </li>
                                                        <li class="cl-black">
                                                            <img src="{{asset('/')}}website/assets/img/shop/shop-1.jpg" alt="img">
                                                        </li>
                                                        <li class="cl-red">
                                                            <img src="{{asset('/')}}website/assets/img/shop/shop-2.jpg" alt="img">
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>


                                        </div>

                                        <div class="bz-season-item-content pt-20">

                                            <h4 class="bz-season-item-content-title"><a href="shop-details.html">{{$product->name}}</a></h4>
{{--                                            <div class="bz-season-item-content-rating">--}}
{{--                                                <a href="#"><i class="fas fa-star"></i></a>--}}
{{--                                                <a href="#"><i class="fas fa-star"></i></a>--}}
{{--                                                <a href="#"><i class="fas fa-star"></i></a>--}}
{{--                                                <a href="#"><i class="fas fa-star"></i></a>--}}
{{--                                                <a href="#"><i class="far fa-star"></i></a>--}}
{{--                                                <span></span>--}}
{{--                                            </div>--}}
                                            <span class="price-bottom">BDT. {{$product->selling_price}}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="bz-season-item mb-40">
                                        <div class="bz-season-item-wrapper position-relative">
                                            <div class="bz-season-item-img w_img">
                                                <a href="shop-details.html" class=""><img src="{{asset('/')}}website/assets/img/shop/shop-1.jpg" alt="img"></a>

                                            </div>
                                            <div class="bz-season-item-hover-wrapper">
                                                <div class="bz-season-item-img-icon">
                                                    <a href="wishlist.html"><i class="fal fa-heart"></i></a>
                                                    <a href="compare.html"><i class="far fa-sync-alt"></i></a>
                                                    <a href="#0" class="eye-popup-product"><i class="far fa-expand-arrows-alt"></i></a>
                                                </div>
                                                <div class="bz-season-item-hover">
                                                    <div class="bz-season-item-hover-cart">
                                                        <a href="#">Add to Cart</a>
                                                    </div>
                                                    <ul class="product-color-nav">
                                                        <li class="cl-light-green active">
                                                            <img src="{{asset('/')}}website/assets/img/shop/shop-1.jpg" alt="img">
                                                        </li>
                                                        <li class="cl-black">
                                                            <img src="{{asset('/')}}website/assets/img/shop/shop-2.jpg" alt="img">
                                                        </li>
                                                        <li class="cl-red">
                                                            <img src="{{asset('/')}}website/assets/img/shop/shop-8.jpg" alt="img">
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>


                                        </div>

                                        <div class="bz-season-item-content pt-20">

                                            <h4 class="bz-season-item-content-title"><a href="shop-details.html">Women High-Quality Slim Fit Shirt</a></h4>
                                            <div class="bz-season-item-content-rating">
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="far fa-star"></i></a>
                                                <span>4.5 Rating</span>
                                            </div>
                                            <span class="price-bottom">$46.23</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- related product area end -->



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
