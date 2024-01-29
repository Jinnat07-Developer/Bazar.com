@extends('website.master')

@section('body')

    <!-- breadcrumb area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bz-breadcrumb-wrap d-flex justify-content-between align-items-center">
                        <div class="bz-breadcrumb-content">
                            <h3 class="bz-breadcrumb-content-title">Wishlist</h3>
                            <span class="bz-breadcrumb-content-subtitle">
                                    Fashion is the armor to survive the reality of everyday life.
                                </span>
                        </div>
                        <div class="bz-breadcrumb-list">
                            <a href="index.html">Home</a>
                            <span>Wishlist</span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- wishlist area start -->
    <div class="wishlist-area pt-60 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="bz-shopping-cart-table table-full">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Product</th>
                                <th>Unit Price</th>
                                <th>Stock Status</th>
                                <th>Action</th>
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
                                    <div class="bz-product-cart-price">
                                        <span>In stock</span>
                                    </div>
                                </td>
                                <td><a href="cart.html" class="bz-add-to-cart-btn has-cart-popup">Add to Cart</a></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="bz-shopping-cart-product-box">
                                        <div class="action-close"><i class="fal fa-times"></i></div>
                                        <div class="image">
                                            <img src="{{asset('/')}}website/assets/img/season/1.jpg" alt="img">
                                        </div>
                                        <div class="title-wrap">
                                            <h4 class="title"><a href="shop-details.html">Modern Woman T-Shirt Collection</a></h4>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="bz-product-cart-price">
                                        <span>$46.23</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="bz-product-cart-price">
                                        <span>In stock</span>
                                    </div>
                                </td>
                                <td><a href="cart.html" class="bz-add-to-cart-btn has-cart-popup">Add to Cart</a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="bz-social-share pt-25">
                        <span class="bz-share-text">Share On:</span>
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
    <!-- wishlist area end -->
@endsection


