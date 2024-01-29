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
                                <h3 class="bz-breadcrumb-content-title">Cart</h3>
                                <span class="bz-breadcrumb-content-subtitle">
                                    Fashion is the armor to survive the reality of everyday life.
                                </span>
                            </div>
                            <div class="bz-breadcrumb-list">
                                <a href="index.html">Home</a>
                                <span>Cart</span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- cart area start -->
        <div class="cart-area pt-60 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-8">
                        <div class="bz-shopping-cart-table cart-page table-full mb-20">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Qty</th>
                                    <th>Subtotal</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="bz-shopping-cart-product-box">
                                            <div class="action-close"><i class="fal fa-times"></i></div>
                                            <div class="image">
                                                <img src="{{asset('/')}}website/assets/img/season/2.jpg" alt="img">
                                            </div>
                                            <div class="title-wrap">
                                                <h4 class="title"><a href="shop-details.html">Women High-Quality Slim Shirt</a></h4>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="bz-product-cart-price">
                                            <span>$56.78</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="bz-shop-details-content-quantity-box">
                                            <form action="#">
                                                <a href="#0" class="plus"><i class="fal fa-plus"></i></a>
                                                <input type="text" readonly name="quantity" value="1">
                                                <a  href="#0" class="minus"><i class="fal fa-minus"></i></a>
                                            </form>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="bz-product-cart-price">
                                            <span>$99.99</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="bz-shopping-cart-product-box">
                                            <div class="action-close"><i class="fal fa-times"></i></div>
                                            <div class="image">
                                                <img src="{{asset('/')}}website/assets/img/season/1.jpg" alt="img">
                                            </div>
                                            <div class="title-wrap">
                                                <h4 class="title"><a href="shop-details.html">Modern Woman T-Shirt</a></h4>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="bz-product-cart-price">
                                            <span>$99.99</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="bz-shop-details-content-quantity-box">
                                            <form action="#">
                                                <a href="#0" class="plus"><i class="fal fa-plus"></i></a>
                                                <input type="text" readonly name="quantity" value="1">
                                                <a  href="#0" class="minus"><i class="fal fa-minus"></i></a>
                                            </form>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="bz-product-cart-price">
                                            <span>$99.99</span>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="apply-coupon-button mt-30">
                                <form action="#">
                                    <input type="text" placeholder="Coupon Code"><button type="submit">Apply Coupon</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="bz-cart-total-box-wrapper ml-30 mb-40">
                            <h4 class="bz-cart-total-box-title">Order Summery</h4>
                            <div class="bz-cart-total-box-inner-box">
                                <ul>
                                    <li class="b-bottom"><span class="cart-total-label">Subtotal</span><span class="cart-total-value">$56.78</span></li>
                                    <li><span class="cart-total-label">Shipping Cost</span><span class="cart-total-value">Free</span></li>
                                    <li><span class="cart-total-label">Vat</span><span class="cart-total-value">0%</span></li>
                                    <li>
                                        <div class="cart-total-change-address text-end">
                                            <span class="cart-total-change-address-text">Change Address</span>
                                            <div class="cart-total-change-address-values">
                                                <select>
                                                    <option>Select Country</option>
                                                    <option>United States</option>
                                                    <option>Australia</option>
                                                    <option>Bangladesh</option>
                                                </select>
                                                <input type="text" placeholder="Town / City">
                                                <input type="text" placeholder="ZIP Code">
                                                <button class="cart-update-btn">Update Address</button>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="b-top"><span class="cart-total-label">Total</span><span class="cart-total-value">$56.78</span></li>
                                </ul>
                            </div>
                            <div class="cart-total-button">
                                <a href="{{route('show-checkout')}}" class="cart-total-btn">Proceed To Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- cart area end -->

        <!-- bz-feature-area-start -->
        <div class="bz-shop-feature pb-70">
            <div class="container">
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
        <!-- bz-featrure-area-end -->

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
