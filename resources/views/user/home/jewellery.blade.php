@extends('layouts.home')

@section('jewellery')
<main class="main-wrapper">

<!-- Start Slider Area -->
<div class="axil-main-slider-area main-slider-style-7 bg_image--8">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-8">
                <div class="main-slider-content">
                    <span class="subtitle"><i class="fas fa-fire"></i>Hot Deal In Diamond</span>
                    <h1 class="title">Exclusive Design Collection</h1>
                    <p>Casual line with short design in 100% suede Diamond</p>
                    <div class="shop-btn">
                        <a href="shop" class="axil-btn btn-bg-secondary right-icon">Browse Item <i class="fal fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Slider Area -->

<!-- Start Axil Product Poster Area  -->
<div class="axil-poster axil-section-gap pb--0">
    <div class="container">
        <div class="row g-lg-5 g-4">
            <div class="col-lg-6">
                <div class="single-poster">
                    <a href="shop">
                        <img src="/asset/images/product/poster/poster-08.png" alt="eTrade promotion poster">
                        <div class="poster-content">
                            <div class="inner">
                                <h3 class="title">Premimum <br> Quality.</h3>
                                <span class="sub-title">Collections <i class="fal fa-long-arrow-right"></i></span>
                            </div>
                        </div>
                        <!-- End .poster-content -->
                    </a>
                </div>
                <!-- End .single-poster -->
            </div>
            <div class="col-lg-6">
                <div class="single-poster">
                    <a href="shop-sidebar.html">
                        <img src="/asset/images/product/poster/poster-09.png" alt="eTrade promotion poster">
                        <div class="poster-content content-left">
                            <div class="inner">
                                <span class="sub-title">50% Offer In Winter</span>
                                <h3 class="title">Get Exclusive <br> Diamond</h3>
                            </div>
                        </div>
                        <!-- End .poster-content -->
                    </a>
                </div>
                <!-- End .single-poster -->
            </div>
        </div>
    </div>
</div>
<!-- End Axil Product Poster Area  -->

<!-- Start New Arrivals Product Area  -->
<div class="axil-new-arrivals-product-area fullwidth-container bg-color-white axil-section-gap pb--0">
    <div class="container ml--xxl-0">
        <div class="product-area pb--50">
            <div class="section-title-wrapper">
                <span class="title-highlighter highlighter-primary"><i class="far fa-shopping-basket"></i> This Week’s</span>
                <h2 class="title">New Arrivals</h2>
            </div>
            <div class="new-arrivals-product-activation slick-layout-wrapper--15 axil-slick-arrow  arrow-top-slide">

            @foreach($hhs as $sub)
                <div class="slick-single-layout">
                    <div class="axil-product product-style-four">
                        <div class="thumbnail">
                            <a href="single-product.html">
                            <img  style="width: 240px; height: 220px;" src="{{asset('images/offers/'.$sub -> photo)}}">                                           
                            </a>
                            <div class="label-block label-right">
                                <div class="product-badget">20% OFF</div>
                            </div>
                            <div class="product-hover-action">
                                <ul class="cart-action">
                                    <li class="wishlist"><a href="{{route('addlike.to.wishlist' , $sub -> id)}}"><i class="far fa-heart"></i></a></li>
                                    <li class="select-option"><a href="{{route('user.variation6')}}">Add to Cart</a></li>
                                    <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-content">
                            <div class="inner">
                                <h5 class="title"><a href="single-product.html">{{$sub -> name}}</a></h5>
                                <div class="product-price-variant">
                                    <span class="price old-price">${{$sub -> old}}</span>
                                    <span class="price current-price">${{$sub -> category}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               @endforeach
            </div>
        </div>
    </div>
</div>
<!-- End New Arrivals Product Area  -->

<!-- Start Best Sellers Product Area  -->
<div class="axil-best-seller-product-area bg-color-white axil-section-gap pb--0">
    <div class="container">
        <div class="product-area pb--50">
            <div class="section-title-wrapper">
                <span class="title-highlighter highlighter-primary"> <i class="far fa-shopping-basket"></i>This Month</span>
                <h2 class="title">Best Sellers</h2>
            </div>
            <div class="new-arrivals-product-activation-2 slick-layout-wrapper--15 axil-slick-arrow arrow-top-slide product-slide-mobile">
                <div class="slick-single-layout">
                    <div class="axil-product product-style-three">
                        <div class="thumbnail">
                            <a href="single-product.html">
                                <img data-sal="fade" data-sal-delay="100" data-sal-duration="1500" src="/asset/images/product/jewellery/product-6.png" alt="Product Images">
                            </a>
                            <div class="product-hover-action">
                                <ul class="cart-action">
                                    <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                    <li class="select-option"><a href="{{route('user.variation6')}}">Add to Cart</a></li>
                                    <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-content">
                            <div class="inner">
                                <div class="product-rating">
                                    <span class="icon">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                                    <span class="rating-number">(18)</span>
                                </div>
                                <h5 class="title"><a href="single-product.html">Diamond Necklace</a></h5>
                                <div class="product-price-variant">
                                    <span class="price current-price">$30</span>
                                    <span class="price old-price">$50</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End .slick-single-layout -->
                <div class="slick-single-layout">
                    <div class="axil-product product-style-three">
                        <div class="thumbnail">
                            <a href="single-product.html">
                                <img data-sal="fade" data-sal-delay="200" data-sal-duration="1500" src="/asset/images/product/jewellery/product-7.png" alt="Product Images">
                            </a>
                            <div class="product-hover-action">
                                <ul class="cart-action">
                                    <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                    <li class="select-option"><a href="{{route('user.variation6')}}">Add to Cart</a></li>
                                    <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-content">
                            <div class="inner">
                                <div class="product-rating">
                                    <span class="icon">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </span>
                                    <span class="rating-number">(24)</span>
                                </div>
                                <h5 class="title"><a href="single-product.html">Diamond Necklace</a></h5>
                                <div class="product-price-variant">
                                    <span class="price current-price">$80</span>
                                    <span class="price old-price">$100</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End .slick-single-layout -->
                <div class="slick-single-layout">
                    <div class="axil-product product-style-three">
                        <div class="thumbnail">
                            <a href="single-product.html">
                                <img data-sal="fade" data-sal-delay="300" data-sal-duration="1500" src="/asset/images/product/jewellery/product-8.png" alt="Product Images">
                            </a>
                            <div class="product-hover-action">
                                <ul class="cart-action">
                                    <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                    <li class="select-option"><a href="{{route('user.variation6')}}">Add to Cart</a></li>
                                    <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-content">
                            <div class="inner">
                                <div class="product-rating">
                                    <span class="icon">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </span>
                                    <span class="rating-number">(34)</span>
                                </div>
                                <h5 class="title"><a href="single-product.html">Diamond Necklace Earring</a></h5>
                                <div class="product-price-variant">
                                    <span class="price current-price">$40</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End .slick-single-layout -->
                <div class="slick-single-layout">
                    <div class="axil-product product-style-three">
                        <div class="thumbnail">
                            <a href="single-product.html">
                                <img data-sal="fade" data-sal-delay="400" data-sal-duration="1500" src="/asset/images/product/jewellery/product-9.png" alt="Product Images">
                            </a>
                            <div class="product-hover-action">
                                <ul class="cart-action">
                                    <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                    <li class="select-option"><a href="{{route('user.variation6')}}">Add to Cart</a></li>
                                    <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-content">
                            <div class="inner">
                                <div class="product-rating">
                                    <span class="icon">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                                    <span class="rating-number">(14)</span>
                                </div>
                                <h5 class="title"><a href="single-product.html">Diamond Earring</a></h5>
                                <div class="product-price-variant">
                                    <span class="price current-price">$30</span>
                                    <span class="price old-price">$35</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End .slick-single-layout -->
                <div class="slick-single-layout">
                    <div class="axil-product product-style-three">
                        <div class="thumbnail">
                            <a href="single-product.html">
                                <img data-sal="fade" data-sal-delay="100" data-sal-duration="1500" src="/asset/images/product/jewellery/product-10.png" alt="Product Images">
                            </a>
                            <div class="product-hover-action">
                                <ul class="cart-action">
                                    <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                    <li class="select-option"><a href="{{route('user.variation6')}}">Add to Cart</a></li>
                                    <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-content">
                            <div class="inner">
                                <div class="product-rating">
                                    <span class="icon">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                                    <span class="rating-number">(11)</span>
                                </div>
                                <h5 class="title"><a href="single-product.html">Diamond Bracelet</a></h5>
                                <div class="product-price-variant">
                                    <span class="price current-price">$40</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End .slick-single-layout -->
                <div class="slick-single-layout">
                    <div class="axil-product product-style-three">
                        <div class="thumbnail">
                            <a href="single-product.html">
                                <img data-sal="fade" data-sal-delay="200" data-sal-duration="1500" src="/asset/images/product/jewellery/product-11.png" alt="Product Images">
                            </a>
                            <div class="product-hover-action">
                                <ul class="cart-action">
                                    <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                    <li class="select-option"><a href="{{route('user.variation6')}}">Add to Cart</a></li>
                                    <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-content">
                            <div class="inner">
                                <div class="product-rating">
                                    <span class="icon">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </span>
                                    <span class="rating-number">(14)</span>
                                </div>
                                <h5 class="title"><a href="single-product.html">Diamond LOCKET</a></h5>
                                <div class="product-price-variant">
                                    <span class="price current-price">$80</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End .slick-single-layout -->
                <div class="slick-single-layout">
                    <div class="axil-product product-style-three">
                        <div class="thumbnail">
                            <a href="single-product.html">
                                <img data-sal="fade" data-sal-delay="300" data-sal-duration="1500" src="/asset/images/product/jewellery/product-12.png" alt="Product Images">
                            </a>
                            <div class="product-hover-action">
                                <ul class="cart-action">
                                    <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                    <li class="select-option"><a href="{{route('user.variation6')}}">Add to Cart</a></li>
                                    <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-content">
                            <div class="inner">
                                <div class="product-rating">
                                    <span class="icon">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </span>
                                    <span class="rating-number">(24)</span>
                                </div>
                                <h5 class="title"><a href="single-product.html">Denim Black Jacket</a></h5>
                                <div class="product-price-variant">
                                    <span class="price current-price">$20</span>
                                    <span class="price old-price">$40</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End .slick-single-layout -->
                <div class="slick-single-layout">
                    <div class="axil-product product-style-three">
                        <div class="thumbnail">
                            <a href="single-product.html">
                                <img data-sal="fade" data-sal-delay="400" data-sal-duration="1500" src="/asset/images/product/jewellery/product-13.png" alt="Product Images">
                            </a>
                            <div class="product-hover-action">
                                <ul class="cart-action">
                                    <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                    <li class="select-option"><a href="{{route('user.variation6')}}">Add to Cart</a></li>
                                    <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-content">
                            <div class="inner">
                                <div class="product-rating">
                                    <span class="icon">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </span>
                                    <span class="rating-number">(24)</span>
                                </div>
                                <h5 class="title"><a href="single-product.html">Diamond Bracelet</a></h5>
                                <div class="product-price-variant">
                                    <span class="price current-price">$30</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End .slick-single-layout -->
                <div class="slick-single-layout">
                    <div class="axil-product product-style-three">
                        <div class="thumbnail">
                            <a href="single-product.html">
                                <img data-sal="fade" data-sal-delay="100" data-sal-duration="1500" src="/asset/images/product/jewellery/product-14.png" alt="Product Images">
                            </a>
                            <div class="product-hover-action">
                                <ul class="cart-action">
                                    <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                    <li class="select-option"><a href="{{route('user.variation6')}}">Add to Cart</a></li>
                                    <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-content">
                            <div class="inner">
                                <div class="product-rating">
                                    <span class="icon">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                                    <span class="rating-number">(64)</span>
                                </div>
                                <h5 class="title"><a href="single-product.html">Diamond Ring</a></h5>
                                <div class="product-price-variant">
                                    <span class="price current-price">$40</span>
                                    <span class="price old-price">$60</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End .slick-single-layout -->
            </div>
        </div>
    </div>
</div>
<!-- End  Best Sellers Product Area  -->

<!-- Start Categorie Area  -->
<div class="axil-categorie-area bg-color-white axil-section-gapcommon">
    <div class="container">
        <div class="section-title-wrapper">
            <span class="title-highlighter highlighter-primary"> <i class="far fa-shopping-basket"></i> Categories</span>
            <h2 class="title">Browse by Category</h2>
        </div>
        <div class="categrie-product-activation slick-layout-wrapper--15 axil-slick-arrow  arrow-top-slide">
            <div class="slick-single-layout">
                <div class="categrie-product" data-sal="zoom-out" data-sal-delay="200" data-sal-duration="500">
                    <a href="#">
                        <img class="img-fluid" src="/asset/images/product/categories/jewelry-2.png" alt="product categorie">
                        <h6 class="cat-title">Barrette</h6>
                    </a>
                </div>
                <!-- End .categrie-product -->
            </div>
            <!-- End .slick-single-layout -->
            <div class="slick-single-layout">
                <div class="categrie-product" data-sal="zoom-out" data-sal-delay="300" data-sal-duration="500">
                    <a href="#">
                        <img class="img-fluid" src="/asset/images/product/categories/jewelry-3.png" alt="product categorie">
                        <h6 class="cat-title">Base metals</h6>
                    </a>
                </div>
                <!-- End .categrie-product -->
            </div>
            <!-- End .slick-single-layout -->
            <div class="slick-single-layout">
                <div class="categrie-product" data-sal="zoom-out" data-sal-delay="400" data-sal-duration="500">
                    <a href="#">
                        <img class="img-fluid" src="/asset/images/product/categories/jewelry-4.png" alt="product categorie">
                        <h6 class="cat-title">Estate Jewellery</h6>
                    </a>
                </div>
                <!-- End .categrie-product -->
            </div>
            <!-- End .slick-single-layout -->
            <div class="slick-single-layout">
                <div class="categrie-product" data-sal="zoom-out" data-sal-delay="500" data-sal-duration="500">
                    <a href="#">
                        <img class="img-fluid" src="/asset/images/product/categories/jewelry-5.png" alt="product categorie">
                        <h6 class="cat-title">Foilbacks</h6>
                    </a>
                </div>
                <!-- End .categrie-product -->
            </div>
            <!-- End .slick-single-layout -->
            <div class="slick-single-layout">
                <div class="categrie-product" data-sal="zoom-out" data-sal-delay="600" data-sal-duration="500">
                    <a href="#">
                        <img class="img-fluid" src="/asset/images/product/categories/jewelry-6.png" alt="product categorie">
                        <h6 class="cat-title">Kalabubu</h6>
                    </a>
                </div>
                <!-- End .categrie-product -->
            </div>
            <!-- End .slick-single-layout -->
            <div class="slick-single-layout">
                <div class="categrie-product" data-sal="zoom-out" data-sal-delay="700" data-sal-duration="500">
                    <a href="#">
                        <img class="img-fluid" src="/asset/images/product/categories/jewelry-7.png" alt="product categorie">
                        <h6 class="cat-title">Medallion</h6>
                    </a>
                </div>
                <!-- End .categrie-product -->
            </div>
            <!-- End .slick-single-layout -->
            <div class="slick-single-layout">
                <div class="categrie-product" data-sal="zoom-out" data-sal-delay="700" data-sal-duration="500">
                    <a href="#">
                        <img class="img-fluid" src="/asset/images/product/categories/jewelry-8.png" alt="product categorie">
                        <h6 class="cat-title">Nawarat ring</h6>
                    </a>
                </div>
                <!-- End .categrie-product -->
            </div>
            <div class="slick-single-layout">
                <div class="categrie-product" data-sal="zoom-out" data-sal-delay="100" data-sal-duration="500">
                    <a href="#">
                        <img class="img-fluid" src="/asset/images/product/categories/jewelry-1.png" alt="product categorie">
                        <h6 class="cat-title">Anklet</h6>
                    </a>
                </div>
                <!-- End .categrie-product -->
            </div>
            <!-- End .slick-single-layout -->
            <!-- End .slick-single-layout -->
            <div class="slick-single-layout">
                <div class="categrie-product">
                    <a href="#">
                        <img class="img-fluid" src="/asset/images/product/categories/jewelry-9.png" alt="product categorie">
                        <h6 class="cat-title">Pledge Pins</h6>
                    </a>
                </div>
                <!-- End .categrie-product -->
            </div>
            <!-- End .slick-single-layout -->
            <div class="slick-single-layout">
                <div class="categrie-product">
                    <a href="#">
                        <img class="img-fluid" src="/asset/images/product/categories/jewelry-10.png" alt="product categorie">
                        <h6 class="cat-title">Prayer Jewellery</h6>
                    </a>
                </div>
                <!-- End .categrie-product -->
            </div>
            <!-- End .slick-single-layout -->
            <div class="slick-single-layout">
                <div class="categrie-product">
                    <a href="#">
                        <img class="img-fluid" src="/asset/images/product/categories/jewelry-11.png" alt="product categorie">
                        <h6 class="cat-title">Slave bracelet</h6>
                    </a>
                </div>
                <!-- End .categrie-product -->
            </div>
            <!-- End .slick-single-layout -->
            <div class="slick-single-layout">
                <div class="categrie-product">
                    <a href="#">
                        <img class="img-fluid" src="/asset/images/product/categories/jewelry-12.png" alt="product categorie">
                        <h6 class="cat-title">Pledge Pins</h6>
                    </a>
                </div>
                <!-- End .categrie-product -->
            </div>
            <!-- End .slick-single-layout -->
            <div class="slick-single-layout">
                <div class="categrie-product">
                    <a href="#">
                        <img class="img-fluid" src="/asset/images/product/categories/jewelry-13.png" alt="product categorie">
                        <h6 class="cat-title">Medallion</h6>
                    </a>
                </div>
                <!-- End .categrie-product -->
            </div>
            <!-- End .slick-single-layout -->
        </div>
    </div>
</div>
<!-- End Categorie Area  -->

<!-- Start Testimonila Area  -->
<div class="axil-testimoial-area axil-section-gap bg-vista-white">
    <div class="container">
        <div class="section-title-wrapper">
            <span class="title-highlighter highlighter-secondary"> <i class="fal fa-quote-left"></i>Testimonials</span>
            <h2 class="title">Users Feedback</h2>
        </div>
        <!-- End .section-title -->
        <div class="testimonial-slick-activation testimonial-style-one-wrapper slick-layout-wrapper--20 axil-slick-arrow arrow-top-slide">
            <div class="slick-single-layout testimonial-style-one">
                <div class="review-speech">
                    <p>“ It’s amazing how much easier it has been to
                        meet new people and create instantly non
                        connections. I have the exact same personal
                        the only thing that has changed is my mind
                        set and a few behaviors. “</p>
                </div>
                <div class="media">
                    <div class="thumbnail">
                        <img src="/asset/images/testimonial/image-1.png" alt="testimonial image">
                    </div>
                    <div class="media-body">
                        <span class="designation">Head Of Idea</span>
                        <h6 class="title">James C. Anderson</h6>
                    </div>
                </div>
                <!-- End .thumbnail -->
            </div>
            <!-- End .slick-single-layout -->
            <div class="slick-single-layout testimonial-style-one">
                <div class="review-speech">
                    <p>“ It’s amazing how much easier it has been to
                        meet new people and create instantly non
                        connections. I have the exact same personal
                        the only thing that has changed is my mind
                        set and a few behaviors. “</p>
                </div>
                <div class="media">
                    <div class="thumbnail">
                        <img src="/asset/images/testimonial/image-2.png" alt="testimonial image">
                    </div>
                    <div class="media-body">
                        <span class="designation">Head Of Idea</span>
                        <h6 class="title">James C. Anderson</h6>
                    </div>
                </div>
                <!-- End .thumbnail -->
            </div>
            <!-- End .slick-single-layout -->
            <div class="slick-single-layout testimonial-style-one">
                <div class="review-speech">
                    <p>“ It’s amazing how much easier it has been to
                        meet new people and create instantly non
                        connections. I have the exact same personal
                        the only thing that has changed is my mind
                        set and a few behaviors. “</p>
                </div>
                <div class="media">
                    <div class="thumbnail">
                        <img src="/asset/images/testimonial/image-3.png" alt="testimonial image">
                    </div>
                    <div class="media-body">
                        <span class="designation">Head Of Idea</span>
                        <h6 class="title">James C. Anderson</h6>
                    </div>
                </div>
                <!-- End .thumbnail -->
            </div>
            <!-- End .slick-single-layout -->
            <div class="slick-single-layout testimonial-style-one">
                <div class="review-speech">
                    <p>“ It’s amazing how much easier it has been to
                        meet new people and create instantly non
                        connections. I have the exact same personal
                        the only thing that has changed is my mind
                        set and a few behaviors. “</p>
                </div>
                <div class="media">
                    <div class="thumbnail">
                        <img src="/asset/images/testimonial/image-2.png" alt="testimonial image">
                    </div>
                    <div class="media-body">
                        <span class="designation">Head Of Idea</span>
                        <h6 class="title">James C. Anderson</h6>
                    </div>
                </div>
                <!-- End .thumbnail -->
            </div>
            <!-- End .slick-single-layout -->

        </div>
    </div>
</div>
<!-- End Testimonila Area  -->

<!-- Start Expolre Product Area  -->
<div class="axil-product-area bg-color-white axil-section-gap">
            <div class="container">
                <div class="section-title-wrapper">
                    <span class="title-highlighter highlighter-primary"> <i class="far fa-shopping-basket"></i> Our Products</span>
                    <h2 class="title">Explore our Products</h2>
                </div>
                <div class="explore-product-activation slick-layout-wrapper slick-layout-wrapper--15 axil-slick-arrow arrow-top-slide">
                    <div class="slick-single-layout">
                        <div class="row row--15">
                        @foreach($hhs as $sub)
                            <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30">
                                <div class="axil-product product-style-one">
                                    <div class="thumbnail">
                                        <a href="{{route('user.variation6')}}">
                                        <img  style="width: 240px; height: 220px;" src="{{asset('images/offers/'.$sub -> photo)}}">                                           
                                        </a>
                                        <div class="label-block label-right">
                                            <div class="product-badget">20% Off</div>
                                        </div>
                                        <div class="product-hover-action">
                                            <ul class="cart-action">
                                                <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                                <li class="select-option">
                                                    <a href="{{route('user.variation6')}}">
                                                        Add to Cart
                                                    </a>
                                                </li>
                                                <li class="wishlist"><a href="{{route('addlike.to.wishlist' , $sub -> id)}}"><i class="far fa-heart"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="inner">
                                            <div class="product-rating">
                                                <span class="icon">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </span>
                                                <span class="rating-number">(64)</span>
                                            </div>
                                            <h5 class="title"><a href="{{route('user.variation6')}}">{{ $sub -> name}}</a></h5>
                                            <div class="product-price-variant">
                                                <span class="price current-price">{{$sub -> category}}</span>
                                                <span class="price old-price">{{ $sub -> old}}</span>
                                            </div>
                                            
                                        </div>
                                        
                                    </div>
                                   
                                </div>
                                
                            </div>
                            @endforeach
                            <!-- End Single Product  -->
                     
                            <!-- End Single Product  -->
                            
                            <!-- End Single Product  -->

                        </div>
                    </div>
            
                    <!-- End .slick-single-layout -->
                </div>
<!-- End Expolre Product Area  -->

<!-- Start New Arrivals Product Area  -->

<!-- End New Arrivals Product Area  -->


<!-- Start Axil Newsletter Area  -->
<div class="axil-newsletter-area axil-section-gap pt--0">
    <div class="container">
        <div class="etrade-newsletter-wrapper bg_image bg_image--11">
            <div class="newsletter-content">
                <span class="title-highlighter highlighter-primary2"><i class="fas fa-envelope-open"></i>Newsletter</span>
                <h2 class="title mb--40 mb_sm--30">Get weekly update</h2>
                <div class="input-group newsletter-form">
                    <div class="position-relative newsletter-inner mb--15">
                        <input placeholder="example@gmail.com" type="text">
                    </div>
                    <button type="submit" class="axil-btn mb--15">Subscribe</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End .container -->
</div>
<!-- End Axil Newsletter Area  -->

</main>



<div class="cart-dropdown" id="cart-dropdown">
        <div class="cart-content-wrap">
            <div class="cart-header">
                <h2 class="header-title">Cart review</h2>
                <button class="cart-close sidebar-close"><i class="fas fa-times"></i></button>
            </div>
            @php $total = 0 @endphp 
            @if(session('carts'))
                        @foreach(session('carts') as $id => $details  )
              @php $total += $details ['category'] * $details ['quantity'] @endphp
            <div class="cart-body">
                <ul class="cart-item-list">
                 
                    <li class="cart-item">
                        <div class="item-img">
                            <a href="{{route('user.variation1')}}"><img  style="width: 90px; height: 90px;" src="{{asset('images/offers/'.$details ['photo'])}}"></a>
                            <button class="close-btn"><i class="fas fa-times"></i></button>
                        </div>
                        <div class="item-content">
                            <div class="product-rating">
                                <span class="icon">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
							</span>
                                <span class="rating-number">(64)</span>
                            </div>
                            <h3 class="item-title"><a href="{{route('user.variation1')}}-3">{{$details ['name']}}</a></h3>
                            <div class="item-price"><span class="currency-symbol">$</span>{{$details ['category']}}</div>
                            <div class="pro-qty item-quantity">
                                <input type="number" value="{{$details ['quantity']}}" class="quantity-input" value="15">
                            </div>
                        </div>
                    </li>









                   
                </ul>
              
            </div>
            @endforeach
                       @endif
            <div class="cart-footer">
                <h3 class="cart-subtotal">
                    <span class="subtotal-title">Subtotal:</span>
                    <span class="subtotal-amount">${{$total}}</span>
                </h3>
                <div class="group-btn">
                    <a href="{{route('user.cart')}}" class="axil-btn btn-bg-primary viewcart-btn">View Cart</a>
                    <a href="{{route('user.checkout')}}" class="axil-btn btn-bg-secondary checkout-btn">Checkout</a>
                </div>
            </div>
        </div>
    </div>
 

    <!-- Offer Modal Start -->
    <div class="offer-popup-modal" id="offer-popup-modal">
        <div class="offer-popup-wrap">
            <div class="card-body">
                <button class="popup-close"><i class="fas fa-times"></i></button>
                <div class="content">
                    <div class="section-title-wrapper">
                        <span class="title-highlighter highlighter-primary"> <i class="far fa-shopping-basket"></i> Don’t Miss!!</span>
                        <h3 class="title">Best Sales Offer<br> Grab Yours</h3>
                    </div>
                    <div class="poster-countdown countdown"></div>
                    <a href="{{route('user.variation1')}}" class="axil-btn btn-bg-primary">Shop Now <i class="fal fa-long-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="closeMask"></div>
@stop