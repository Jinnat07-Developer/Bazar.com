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
                                <h3 class="bz-breadcrumb-content-title">Checkout</h3>
                                <span class="bz-breadcrumb-content-subtitle">
                                    Fashion is the armor to survive the reality of everyday life.
                                </span>
                            </div>
                            <div class="bz-breadcrumb-list">
                                <a href="index.html">Home</a>
                                <span>Checkout</span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- checkout area start -->
        <div class="bz-checkout-area pt-60 pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-8">
                        <div class="bz-checkout-wrapper mb-50">
                            <div class="bz-checkout-billing-account mb-25">
                                <div class="row align-items-center">
                                    <div class="col-xl-6 col-lg-6 col-md-5 col-sm-5">
                                        <h5 class="bz-checkout-billing-text">Billing Address</h5>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-7 col-sm-7">
                                        <h5 class="bz-checkout-billing-acc-text text-sm-end">Already have an account? <a href="signup.html">Login</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="bz-checkout-content">
                                <div class="bz-input-single">
                                    <label>Enter Name</label>
                                    <input type="text" placeholder="Enter name">
                                </div>
                                <div class="bz-input-single">
                                    <label>Email Address</label>
                                    <input type="text" placeholder="Email address">
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="bz-input-single">
                                            <label>State</label>
                                            <select class="select-search">
                                                <option>Country</option>
                                                <option>United States</option>
                                                <option>United America</option>
                                                <option>Bangladesh</option>
                                                <option>Indoneshia</option>
                                                <option>Australiya</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="bz-input-single">
                                            <label>Town/City</label>
                                            <select class="select-search">
                                                <option>Honululu</option>
                                                <option>Sydney</option>
                                                <option>Dhaka</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="col-xl-6">
                                        <div class="bz-input-single">
                                            <label>Phone Number</label>
                                            <input type="number" placeholder="Phone number">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="bz-input-single">
                                            <label>Zip Code</label>
                                            <input type="number" placeholder="Zip code">
                                        </div>
                                    </div>
                                </div>
                                <div class="bz-input-single">
                                    <label>Company Name (Optional)</label>
                                    <input type="text" placeholder="Company name">
                                </div>
                                <div class="bz-input-single">
                                    <label>Street Address</label>
                                    <input type="text" placeholder="Street address">
                                </div>
                                <div class="bz-submit-form-default-single mb-25 mt-25">
                                    <div class="condition-box">
                                        <input type="checkbox" id="acc" class="has-condition condition">
                                        <label for="acc" class="condition">Create a new account?</label>
                                    </div>
                                </div>
                                <div class="bz-submit-form-default-single mb-45">
                                    <div class="condition-box">
                                        <input type="checkbox" id="add" class="has-condition condition">
                                        <label for="add" class="condition">Ship to a different address?</label>
                                    </div>
                                </div>
                                <div class="bz-input-single">
                                    <h4 class="bz-checkout-textarea-title mb-25">Additional Information</h4>
                                    <textarea placeholder="Order notes"></textarea>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="bz-cart-total-box-wrapper ml-30 mb-50">
                            <h4 class="bz-cart-total-box-title">Your Order</h4>
                            <div class="bz-cart-total-box-inner-box">
                                <ul>
                                    <li><span class="cart-total-label">Women Slim Shirt</span><span class="cart-total-value">$56.78</span></li>
                                    <li class="b-bottom"><span class="cart-total-label">Women T-shirt</span><span class="cart-total-value">$56.78</span></li>

                                    <li><span class="cart-total-label">Subtotal</span><span class="cart-total-value">$113.56</span></li>
                                    <li><span class="cart-total-label">Shipping Cost</span><span class="cart-total-value">Free</span></li>
                                    <li><span class="cart-total-label">Vat</span><span class="cart-total-value">0%</span></li>
                                    <li class="b-top"><span class="cart-total-label">Total</span><span class="cart-total-value">$56.78</span></li>
                                </ul>
                                <div class="bz-cart-payments border-top">
                                    <ul>
                                        <li>
                                            <input type="radio" id="bank" name="payment">
                                            <label for="bank">Direct Bank Transfer</label>
                                        </li>
                                        <li>
                                            <input type="radio" id="paypal" name="payment">
                                            <label for="paypal">Paypal</label>
                                        </li>
                                        <li>
                                            <input type="radio" id="payoneer" name="payment">
                                            <label for="payoneer">Payoneer</label>
                                        </li>
                                    </ul>
                                </div>
                                <p class="payment-text">Your personal data will be used to process your
                                    order, support your experience throughout this
                                    website and for other purposes described in our
                                    <a href="#">privacy policy</a>.</p>
                            </div>
                            <div class="cart-total-button">
                                <button class="cart-total-btn">Place Order</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- checkout area end -->

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
