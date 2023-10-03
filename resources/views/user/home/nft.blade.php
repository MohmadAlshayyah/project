@extends('layouts.home')

@section('nft')
<main class="main-wrapper">
        <!-- Start Slider Area -->
        <div class="axil-main-slider-area main-slider-style-3">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6">
                        <div class="main-slider-content">
                            <span class="subtitle"><i class="fas fa-fire"></i>Largest NFT marketplace</span>
                            <h1 class="title">Discover, collect, and sell extraordinary NFTs</h1>
                            <div class="shop-btn">
                                <a href="{{route('user.shop')}}" class="axil-btn btn-bg-white right-icon">Explore <i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="main-slider-large-thumb">
                            <div class="slider-thumb-activation-two axil-slick-dots">
                            @foreach($hhs as $sub)
                                <div class="single-slide slick-slide">
                               
                                    <div class="axil-product product-style-five">
                                    
                                        <div class="thumbnail">
                                            <a href="{{route('user.variation2')}}">
                                                <img src="{{asset('images/offers/'.$sub -> photo)}}" alt="Product Images">
                                            </a>

                                        </div>
                                        
                                        
                                        <div class="product-content">
                                            <div class="inner">
                                                <h5 class="title"><a href="{{route('user.variation2')}}">{{$sub -> name}}</a></h5>
                                                <div class="product-price-variant">
                                                    <span class="price current-price">${{$sub -> category}}</span>
                                                </div>
                                                <ul class="cart-action">
                                                    <li class="select-option"><a href="{{route('user.variation2')}}">Buy Product</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                     
                                    </div>
                                    
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Slider Area -->
        <!-- Start Categorie Area  -->
        <div class="axil-categorie-area bg-color-white axil-section-gap pb--0">
            <div class="container">
                <div class="product-area pb--50">
                    <div class="section-title-wrapper">
                        <span class="title-highlighter highlighter-secondary"><i class="far fa-shopping-basket"></i>The Categories</span>
                        <h2 class="title">Browse by Category</h2>
                    </div>
                    <div class="categrie-product-activation-3 slick-layout-wrapper--15 axil-slick-arrow  arrow-top-slide">
                        <div class="slick-single-layout slick-slide">
                            <div class="categrie-product categrie-product-3" data-sal="zoom-out" data-sal-delay="100" data-sal-duration="500">
                                <a href="#">
                                    <img class="img-fluid" src="/asset/images/product/categories/cat-09.png" alt="product categorie">
                                    <h6 class="cat-title">Art</h6>
                                </a>
                            </div>
                        </div>
                        <!-- End .categrie-product -->
                        <div class="slick-single-layout slick-slide">
                            <div class="categrie-product categrie-product-3" data-sal="zoom-out" data-sal-delay="100" data-sal-duration="500">
                                <a href="#">
                                    <img class="img-fluid" src="/asset/images/product/categories/cat-10.png" alt="product categorie">
                                    <h6 class="cat-title">Music</h6>
                                </a>
                            </div>
                        </div>
                        <!-- End .categrie-product -->
                        <div class="slick-single-layout slick-slide">
                            <div class="categrie-product categrie-product-3" data-sal="zoom-out" data-sal-delay="100" data-sal-duration="500">
                                <a href="#">
                                    <img class="img-fluid" src="/asset/images/product/categories/cat-11.png" alt="product categorie">
                                    <h6 class="cat-title">Photography</h6>
                                </a>
                            </div>
                            <!-- End .categrie-product -->
                        </div>
                        <div class="slick-single-layout slick-slide">
                            <div class="categrie-product categrie-product-3" data-sal="zoom-out" data-sal-delay="100" data-sal-duration="500">
                                <a href="#">
                                    <img class="img-fluid" src="/asset/images/product/categories/cat-12.png" alt="product categorie">
                                    <h6 class="cat-title">Sports</h6>
                                </a>
                            </div>
                        </div>
                        <!-- End .categrie-product -->
                        <div class="slick-single-layout slick-slide">
                            <div class="categrie-product categrie-product-3" data-sal="zoom-out" data-sal-delay="100" data-sal-duration="500">
                                <a href="#">
                                    <img class="img-fluid" src="/asset/images/product/categories/cat-13.png" alt="product categorie">
                                    <h6 class="cat-title">Utility</h6>
                                </a>
                            </div>
                        </div>
                        <!-- End .categrie-product -->
                        <div class="slick-single-layout slick-slide">
                            <div class="categrie-product categrie-product-3" data-sal="zoom-out" data-sal-delay="100" data-sal-duration="500">
                                <a href="#">
                                    <img class="img-fluid" src="/asset/images/product/categories/cat-15.png" alt="product categorie">
                                    <h6 class="cat-title">Virtual World</h6>
                                </a>
                            </div>
                        </div>
                        <!-- End .categrie-product -->
                        <div class="slick-single-layout slick-slide">
                            <div class="categrie-product categrie-product-3" data-sal="zoom-out" data-sal-delay="100" data-sal-duration="500">
                                <a href="#">
                                    <img class="img-fluid" src="/asset/images/product/categories/cat-14.png" alt="product categorie">
                                    <h6 class="cat-title">Virtual World</h6>
                                </a>
                            </div>
                        </div>
                        <!-- End .categrie-product -->
                        <div class="slick-single-layout slick-slide">
                            <div class="categrie-product categrie-product-3" data-sal="zoom-out" data-sal-delay="100" data-sal-duration="500">
                                <a href="#">
                                    <img class="img-fluid" src="/asset/images/product/categories/cat-10.png" alt="product categorie">
                                    <h6 class="cat-title">Music</h6>
                                </a>
                            </div>
                        </div>
                        <!-- End .categrie-product -->
                        <div class="slick-single-layout slick-slide">
                            <div class="categrie-product categrie-product-3" data-sal="zoom-out" data-sal-delay="100" data-sal-duration="500">
                                <a href="#">
                                    <img class="img-fluid" src="/asset/images/product/categories/cat-11.png" alt="product categorie">
                                    <h6 class="cat-title">Photography</h6>
                                </a>
                            </div>
                            <!-- End .categrie-product -->
                        </div>
                        <div class="slick-single-layout slick-slide">
                            <div class="categrie-product categrie-product-3" data-sal="zoom-out" data-sal-delay="100" data-sal-duration="500">
                                <a href="#">
                                    <img class="img-fluid" src="/asset/images/product/categories/cat-12.png" alt="product categorie">
                                    <h6 class="cat-title">Sports</h6>
                                </a>
                            </div>
                        </div>
                        <!-- End .categrie-product -->
                        <div class="slick-single-layout slick-slide">
                            <div class="categrie-product categrie-product-3" data-sal="zoom-out" data-sal-delay="100" data-sal-duration="500">
                                <a href="#">
                                    <img class="img-fluid" src="/asset/images/product/categories/cat-13.png" alt="product categorie">
                                    <h6 class="cat-title">Utility</h6>
                                </a>
                            </div>
                        </div>
                        <!-- End .categrie-product -->
                        <div class="slick-single-layout slick-slide">
                            <div class="categrie-product categrie-product-3" data-sal="zoom-out" data-sal-delay="100" data-sal-duration="500">
                                <a href="#">
                                    <img class="img-fluid" src="/asset/images/product/categories/cat-15.png" alt="product categorie">
                                    <h6 class="cat-title">Virtual World</h6>
                                </a>
                            </div>
                        </div>
                        <!-- End .categrie-product -->
                        <div class="slick-single-layout slick-slide">
                            <div class="categrie-product categrie-product-3" data-sal="zoom-out" data-sal-delay="100" data-sal-duration="500">
                                <a href="#">
                                    <img class="img-fluid" src="/asset/images/product/categories/cat-14.png" alt="product categorie">
                                    <h6 class="cat-title">Virtual World</h6>
                                </a>
                            </div>
                        </div>
                        <!-- End .categrie-product -->

                        <!-- End .slick-single-layout -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Categorie Area  -->
        <!-- Start Best Sellers Product Area  -->
        <div class="axil-best-seller-product-area bg-color-white axil-section-gap pb--0">
            <div class="container">
                <div class="product-area pb--50">
                    <div class="section-title-wrapper">
                        <span class="title-highlighter highlighter-primary"> <i class="far fa-shopping-basket"></i>This Month</span>
                        <h2 class="title">Best Sellers</h2>
                    </div>
                    <div class="new-arrivals-product-activation-2 slick-layout-wrapper--15 axil-slick-arrow arrow-top-slide product-slide-mobile">
                    @foreach($hhs as $sub)
                        <!-- End .slick-single-layout -->
                        <div class="slick-single-layout">
                            <div class="axil-product product-style-six">
                                <div class="thumbnail">
                                    <a href="{{route('user.variation2')}}">
                                    <img  style="width: 240px; height: 220px;" src="{{asset('images/offers/'.$sub -> photo)}}">                                           
                                    </a>
                                </div>
                                <div class="product-content">
                                    <div class="inner">
                                        <div class="product-price-variant">
                                            <span class="price current-price"  style="color: black">${{$sub -> category}}</span>
                                        </div>
                                        <h5 class="title"><a href="{{route('user.variation2')}}">{{$sub -> name}}</a></h5>
                                        <div class="product-hover-action">
                                            <ul class="cart-action">
                                                <li class="select-option"><a href="{{route('user.variation2')}}">Buy Product</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>colore
                        <!-- End .slick-single-layout -->
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- End  Best Sellers Product Area  -->
        <!-- Start Expolre Product Area  -->
        <div class="axil-product-area bg-color-white axil-section-gap pb--0">
            <div class="container">
                <div class="product-area pb--20">
                    <div class="axil-isotope-wrapper">
                        <div class="product-isotope-heading">
                            <div class="section-title-wrapper">
                                <span class="title-highlighter highlighter-primary"><i class="far fa-shopping-basket"></i> Our Products</span>
                                <h2 class="title">New Arraival Products</h2>
                            </div>
                     
                        
                        </div>
                        <div class="row row--15 isotope-list">
                            


                        @foreach($hhs as $sub)
                                                  <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30 product art music sports">
                                <div class="axil-product product-style-one">
                                    <div class="thumbnail">
                                        <a href="{{route('user.variation2')}}">
                                        <img  style="width: 240px; height: 220px;" src="{{asset('images/offers/'.$sub -> photo)}}">                                           

                                        <div class="product-hover-action">
                                            <ul class="cart-action">
                                                <li class="select-option"><a href="{{route('user.variation2')}}">Buy Product</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="inner">
                                            <h5 class="title"><a href="{{route('user.variation2')}}">{{$sub -> name}}</a></h5>
                                            <div class="product-price-variant">
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
        </div>
        <!-- End Expolre Product Area  -->
        <!-- Start Most Sold Product Area  -->
        <div class="axil-most-sold-product axil-section-gap pb--0">
            <div class="container">
                <div class="product-area pb--50">
                    <div class="section-title-wrapper section-title-center">
                        <span class="title-highlighter highlighter-primary"><i class="fas fa-star"></i> Most Sold</span>
                        <h2 class="title">Most Sold Last 7 Days</h2>
                    </div>
                    <div class="row row-cols-xl-3 row-cols-md-2 row-cols-1 row--15">
                     


                    @if(session('likes'))
                        @foreach(session('likes') as $id => $details)
                        <div class="col">
                            <div class="axil-product-list product-list-style-2">
                                <div class="thumbnail">
                                    <a href="{{route('user.variation2')}}">
                                    <img  style="width: 90px; height: 90px;" src="{{asset('images/offers/'.$details ['photo'])}}">                                    </a>
                                    </a>
                                </div>
                                <div class="product-content">
                                    <h6 class="product-title"><a href="{{route('user.variation2')}}">Anime #202 <span class="verified-icon"><i class="fas fa-badge-check"></i></span></a></h6>
                                    <div class="product-price-variant">
                                        <span class="price current-price">$2999</span>
                                    </div>
                                    <div class="product-cart">
                                        <a href="{{route('user.variation2')}}" class="cart-btn">Buy Product</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                       @endif
                    </div>
                </div>
            </div>
        </div>
        <!-- End Most Sold Product Area  -->
        <!-- Start Why Choose Area  -->
        <div class="how-to-sell-area axil-section-gap">
            <div class="container">
                <div class="product-area pb--50">
                    <div class="section-title-wrapper section-title-center">
                        <h2 class="title">How to buy NFTs</h2>
                    </div>
                    <div class="row row-cols-xl-4 row-cols-lg-2 row-cols-md-2 row-cols-sm-2 row-cols-1 row--20">
                        <div class="col">
                            <div class="service-box how-to-sell">
                                <div class="icon">
                                    <img src="/asset/images/icons/choose.png" alt="Service">
                                </div>
                                <h6 class="title">Choose Your Favourite</h6>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex quas expedita veritatis ipsum, culpa, asperiores.</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="service-box how-to-sell">
                                <div class="icon">
                                    <img src="/asset/images/icons/protection.png" alt="Service">
                                </div>
                                <h6 class="title">Verify NFTs</h6>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex quas expedita veritatis ipsum, culpa, asperiores.</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="service-box how-to-sell">
                                <div class="icon">
                                    <img src="/asset/images/icons/purchasing.png" alt="Service">
                                </div>
                                <h6 class="title">Purchase NFTS</h6>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex quas expedita veritatis ipsum, culpa, asperiores.</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="service-box how-to-sell">
                                <div class="icon">
                                    <img src="/asset/images/icons/dancing.png" alt="Service">
                                </div>
                                <h6 class="title">Enjoy!</h6>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex quas expedita veritatis ipsum, culpa, asperiores.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Why Choose Area  -->

        <!-- Video Banner Area  -->
        <div class="video-banner-area">
            <div class="container">
                <div class="product-area pb--80">
                    <div class="section-title-wrapper section-title-center">
                        <span class="title-highlighter highlighter-primary"><i class="far fa-film-alt"></i> Video</span>
                        <h2 class="title">Meet The Greater</h2>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="video-banner">
                                <img src="/asset/images/bg/bg-image-7.jpg" alt="Images">
                                <div class="popup-video-icon">
                                    <a href="https://www.youtube.com/watch?v=FkUn86bH34M" class="popup-youtube video-icon">
                                        <i class="fas fa-play"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Video Banner Area  -->

        <div class="axil-section-gap">
            <div class="container">
                <div class="section-title-wrapper section-title-center">
                    <span class="title-highlighter highlighter-primary"><i class="fas fa-fire"></i> Regular Post</span>
                    <h3 class="title">Latest NFT News</h3>
                </div>
                <div class="row g-5">
                    <div class="col-lg-4">
                        <div class="content-blog blog-grid">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="blog-details.html">
                                        <img src="/asset/images/blog/blog-10.png.jpeg" alt="Blog Images">
                                    </a>
                                    <div class="blog-category">
                                        <a href="#">Digital Art's</a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h5 class="title"><a href="blog-details.html">Keeping yourself safe when buying NFTs on eTrade</a></h5>
                                    <div class="read-more-btn">
                                        <a class="axil-btn right-icon" href="blog-details.html">Read More <i class="fal fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="content-blog blog-grid">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="blog-details.html">
                                        <img src="/asset/images/blog/blog-11.png.jpeg" alt="Blog Images">
                                    </a>
                                    <div class="blog-category">
                                        <a href="#">Photography</a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h5 class="title"><a href="blog-details.html">Important updates for listing and delisting your NFTs</a></h5>

                                    <div class="read-more-btn">
                                        <a class="axil-btn right-icon" href="blog-details.html">Read More <i class="fal fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="content-blog blog-grid">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="blog-details.html">
                                        <img src="/asset/images/blog/blog-12.png.jpeg" alt="Blog Images">
                                    </a>
                                    <div class="blog-category">
                                        <a href="#">Music</a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h5 class="title"><a href="blog-details.html">10 tips for avoiding scams and staying safe on the decentralized web</a></h5>

                                    <div class="read-more-btn">
                                        <a class="axil-btn right-icon" href="blog-details.html">Read More <i class="fal fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


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