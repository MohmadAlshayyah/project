@extends('layouts.home')

@section('fashion')


<main class="main-wrapper">

<!-- Start Slider Area -->
<div class="axil-main-slider-area main-slider-style-2">
    <div class="container">
        <div class="slider-offset-left">
            <div class="row row--20">
                <div class="col-lg-9">
                    <div class="slider-box-wrap">
                        <div class="slider-activation-one axil-slick-dots">
                            <div class="single-slide slick-slide">
                                <div class="main-slider-content">
                                    <span class="subtitle"><i class="fal fa-watch"></i> Smartwatch</span>
                                    <h1 class="title">Bloosom Smat Watch</h1>
                                    <div class="shop-btn">
                                        <a href="{{route('user.shop')}}" class="axil-btn">Shop Now <i class="fal fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="main-slider-thumb">
                                    <img src="/asset/images/product/product-40.png" alt="Product">
                                </div>
                            </div>
                            <div class="single-slide slick-slide">
                                <div class="main-slider-content">
                                    <span class="subtitle"><i class="fal fa-watch"></i> Smartwatch</span>
                                    <h1 class="title">Delux Brand Watch</h1>
                                    <div class="shop-btn">
                                        <a href="{{route('user.shop')}}" class="axil-btn">Shop Now <i class="fal fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="main-slider-thumb">
                                    <img src="/asset/images/product/product-46.png" alt="Product">
                                </div>
                            </div>
                            <div class="single-slide slick-slide">
                                <div class="main-slider-content">
                                    <span class="subtitle"><i class="fal fa-watch"></i> Smartwatch</span>
                                    <h1 class="title">Bloosom Smat Watch</h1>
                                    <div class="shop-btn">
                                        <a href="{{route('user.shop')}}" class="axil-btn">Shop Now <i class="fal fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="main-slider-thumb">
                                    <img src="/asset/images/product/product-40.png" alt="Product">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="slider-product-box">
                        <div class="product-thumb">
                            <a href="single-product.html">
                                <img src="/asset/images/product/product-41.png" alt="Product">
                            </a>
                        </div>
                        <h6 class="title"><a href="single-product.html">Yantiti Leather Bags</a></h6>
                        <span class="price">$29.99</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Slider Area -->

<div class="service-area">
    <div class="container">
        <div class="row row-cols-xl-5 row-cols-lg-5 row-cols-md-3 row-cols-sm-2 row-cols-1 row--20">
            <div class="col">
                <div class="service-box">
                    <div class="icon">
                        <img src="/asset/images/icons/service1.png" alt="Service">
                    </div>
                    <h6 class="title">Fast &amp; Secure Delivery</h6>
                </div>
            </div>
            <div class="col">
                <div class="service-box">
                    <div class="icon">
                        <img src="/asset/images/icons/service2.png" alt="Service">
                    </div>
                    <h6 class="title">100% Guarantee On Product</h6>
                </div>
            </div>
            <div class="col">
                <div class="service-box">
                    <div class="icon">
                        <img src="/asset/images/icons/service3.png" alt="Service">
                    </div>
                    <h6 class="title">24 Hour Return Policy</h6>
                </div>
            </div>
            <div class="col">
                <div class="service-box">
                    <div class="icon">
                        <img src="/asset/images/icons/service4.png" alt="Service">
                    </div>
                    <h6 class="title">24 Hour Return Policy</h6>
                </div>
            </div>
            <div class="col">
                <div class="service-box">
                    <div class="icon">
                        <img src="/asset/images/icons/service5.png" alt="Service">
                    </div>
                    <h6 class="title">Next Level Pro Quality</h6>
                </div>
            </div>
        </div>
    </div>
</div>

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
                                    <li class="select-option"><a href="{{route('user.variation3')}}">Add to Cart</a></li>
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
<div class="axil-best-seller-product-area bg-color-white axil-section-gap pb--50 pb_sm--30">
    <div class="container">
        <div class="section-title-wrapper">
            <span class="title-highlighter highlighter-secondary"><i class="far fa-shopping-basket"></i>This Month</span>
            <h2 class="title">Best Sellers</h2>
        </div>
        <div class="new-arrivals-product-activation-2 product-transparent-layout slick-layout-wrapper--15 axil-slick-arrow arrow-top-slide product-slide-mobile">
        @if(session('likes'))
                        @foreach(session('likes') as $id => $details)
            <div class="slick-single-layout">
                <div class="axil-product product-style-seven">
                    <div class="product-content">
                        <div class="cart-btn">
                            <a href="{{route('user.variation3')}}">
                                <i class="flaticon-shopping-cart"></i>
                            </a>
                        </div>
                       
                        <div class="inner">
                            <h5 class="title"><a href="single-product.html">Men's Half Sleev T-shirt</a></h5>
                            <div class="product-price-variant">
                                <span class="price current-price">$29.99</span>
                                <span class="price old-price">$49.99</span>
                            </div>
                            <div class="product-rating">
                                <span class="icon">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </span>
                                <span class="rating-number">(94)</span>
                            </div>
                        </div>
                    </div>
                    <div class="thumbnail">
                        <a href="single-product.html">
                        <img  style="width: 300px; height: 270px;" src="{{asset('images/offers/'.$details ['photo'])}}">                                    </a>
                        </a>
                    </div>
                   
                </div>

            </div>
            @endforeach
                       @endif
        </div>
        
    </div>
    
</div>
<!-- End  Best Sellers Product Area  -->

<!-- Poster Countdown Area  -->
<div class="axil-poster-countdown">
    <div class="container">
        <div class="poster-countdown-wrap bg-lighter">
            <div class="row">
                <div class="col-xl-5 col-lg-6">
                    <div class="poster-countdown-content">
                        <div class="section-title-wrapper">
                            <span class="title-highlighter highlighter-secondary"> <i class="far fa-shopping-basket"></i> Don’t Miss!!</span>
                            <h2 class="title">Let's Shopping Today</h2>
                        </div>
                        <div class="poster-countdown countdown mb--40"></div>
                        <a href="#" class="axil-btn btn-bg-primary">Check it Out!</a>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6">
                    <div class="poster-countdown-thumbnail">
                        <img src="/asset/images/product/poster/poster-05.png" alt="Poster Product">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Poster Countdown Area  -->

<!-- Start Expolre Product Area  -->

            <!-- End .slick-single-layout -->
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
                                        <a href="{{route('user.variation3')}}">
                                        <img  style="width: 240px; height: 220px;" src="{{asset('images/offers/'.$sub -> photo)}}">                                           
                                        </a>
                                        <div class="label-block label-right">
                                            <div class="product-badget">20% Off</div>
                                        </div>
                                        <div class="product-hover-action">
                                            <ul class="cart-action">
                                                <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                                <li class="select-option">
                                                    <a href="{{route('user.variation3')}}">
                                                        Add to Cart
                                                    </a>
                                                </li>
                                                <li class="{{route('addlike.to.wishlist' , $sub -> id)}}"><a href="wishlist"><i class="far fa-heart"></i></a></li>
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
                                            <h5 class="title"><a href="{{route('user.variation3')}}">{{ $sub -> name}}</a></h5>
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
                <div class="row">
                    <div class="col-lg-12 text-center mt--20 mt_sm--0">
                        <a href="shop.html" class="axil-btn btn-bg-lighter btn-load-more">View All Products</a>
                    </div>
                </div>

            </div>
        </div>

<!-- End Expolre Product Area  -->

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

<!-- Start New Arrivals Product Area  -->

<!-- End New Arrivals Product Area  -->

<!-- Start Axil Newsletter Area  -->
<div class="axil-newsletter-area axil-section-gap pt--0">
    <div class="container">
        <div class="etrade-newsletter-wrapper bg_image bg_image--12">
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