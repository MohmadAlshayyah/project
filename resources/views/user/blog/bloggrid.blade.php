

@extends('layouts.shop')

@section('bloggrid')


<main class="main-wrapper">
        <!-- Start Breadcrumb Area  -->
        <div class="axil-breadcrumb-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-8">
                        <div class="inner">
                            <ul class="axil-breadcrumb">
                                <li class="axil-breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="separator"></li>
                                <li class="axil-breadcrumb-item active" aria-current="page">Blogs</li>
                            </ul>
                            <h1 class="title">Blog Grid</h1>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4">
                        <div class="inner">
                            <div class="bradcrumb-thumb">
                                <img src="/asset/images/product/product-45.png" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumb Area  -->
        <!-- Start Blog Area  -->
        <div class="axil-blog-area axil-section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row g-5">
                            <div class="col-md-6">
                                <div class="content-blog blog-grid">
                                    <div class="inner">
                                        <div class="thumbnail">
                                            <a href="{{route('user.details')}}">
                                                <img src="/asset/images/blog/blog-10.png.jpeg" alt="Blog Images">
                                            </a>
                                            <div class="blog-category">
                                                <a href="#">Digital Art's</a>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="{{route('user.details')}}">Keeping yourself safe when buying NFTs on eTrade</a></h5>

                                            <div class="read-more-btn">
                                                <a class="axil-btn right-icon" href="{{route('user.details')}}">Read More <i class="fal fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="content-blog blog-grid">
                                    <div class="inner">
                                        <div class="thumbnail">
                                            <a href="{{route('user.details')}}">
                                                <img src="/asset/images/blog/blog-11.png.jpeg" alt="Blog Images">
                                            </a>
                                            <div class="blog-category">
                                                <a href="#">Photography</a>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="{{route('user.details')}}">Important updates for listing and delisting your NFTs</a></h5>

                                            <div class="read-more-btn">
                                                <a class="axil-btn right-icon" href="{{route('user.details')}}">Read More <i class="fal fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="content-blog blog-grid">
                                    <div class="inner">
                                        <div class="thumbnail">
                                            <a href="{{route('user.details')}}">
                                                <img src="/asset/images/blog/blog-12.png.jpeg" alt="Blog Images">
                                            </a>
                                            <div class="blog-category">
                                                <a href="#">Music</a>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="{{route('user.details')}}">10 tips for avoiding scams and staying safe on the decentralized web</a></h5>

                                            <div class="read-more-btn">
                                                <a class="axil-btn right-icon" href="{{route('user.details')}}">Read More <i class="fal fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="content-blog blog-grid">
                                    <div class="inner">
                                        <div class="thumbnail">
                                            <a href="{{route('user.details')}}">
                                                <img src="/asset/images/blog/blog-10.png.jpeg" alt="Blog Images">
                                            </a>
                                            <div class="blog-category">
                                                <a href="#">Sports</a>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="{{route('user.details')}}">Keeping yourself safe when buying NFTs on eTrade</a></h5>

                                            <div class="read-more-btn">
                                                <a class="axil-btn right-icon" href="{{route('user.details')}}">Read More <i class="fal fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="content-blog blog-grid">
                                    <div class="inner">
                                        <div class="thumbnail">
                                            <a href="{{route('user.details')}}">
                                                <img src="/asset/images/blog/blog-11.png.jpeg" alt="Blog Images">
                                            </a>
                                            <div class="blog-category">
                                                <a href="#">Virtual Studio</a>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="{{route('user.details')}}">Important updates for listing and delisting your NFTs</a></h5>

                                            <div class="read-more-btn">
                                                <a class="axil-btn right-icon" href="{{route('user.details')}}">Read More <i class="fal fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="content-blog blog-grid">
                                    <div class="inner">
                                        <div class="thumbnail">
                                            <a href="{{route('user.details')}}">
                                                <img src="/asset/images/blog/blog-12.png.jpeg" alt="Blog Images">
                                            </a>
                                            <div class="blog-category">
                                                <a href="#">Utility</a>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="{{route('user.details')}}">10 tips for avoiding scams and staying safe on the decentralized web</a></h5>

                                            <div class="read-more-btn">
                                                <a class="axil-btn right-icon" href="{{route('user.details')}}">Read More <i class="fal fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="content-blog blog-grid">
                                    <div class="inner">
                                        <div class="thumbnail">
                                            <a href="{{route('user.details')}}">
                                                <img src="/asset/images/blog/blog-10.png.jpeg" alt="Blog Images">
                                            </a>
                                            <div class="blog-category">
                                                <a href="#">Sketch</a>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="{{route('user.details')}}">Keeping yourself safe when buying NFTs on eTrade</a></h5>

                                            <div class="read-more-btn">
                                                <a class="axil-btn right-icon" href="{{route('user.details')}}">Read More <i class="fal fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="content-blog blog-grid">
                                    <div class="inner">
                                        <div class="thumbnail">
                                            <a href="{{route('user.details')}}">
                                                <img src="/asset/images/blog/blog-11.png.jpeg" alt="Blog Images">
                                            </a>
                                            <div class="blog-category">
                                                <a href="#">Digital Art's</a>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="{{route('user.details')}}">Important updates for listing and delisting your NFTs</a></h5>

                                            <div class="read-more-btn">
                                                <a class="axil-btn right-icon" href="{{route('user.details')}}">Read More <i class="fal fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="content-blog blog-grid">
                                    <div class="inner">
                                        <div class="thumbnail">
                                            <a href="{{route('user.details')}}">
                                                <img src="/asset/images/blog/blog-10.png.jpeg" alt="Blog Images">
                                            </a>
                                            <div class="blog-category">
                                                <a href="#">Digital Art's</a>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="{{route('user.details')}}">Keeping yourself safe when buying NFTs on eTrade</a></h5>

                                            <div class="read-more-btn">
                                                <a class="axil-btn right-icon" href="{{route('user.details')}}">Read More <i class="fal fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="content-blog blog-grid">
                                    <div class="inner">
                                        <div class="thumbnail">
                                            <a href="{{route('user.details')}}">
                                                <img src="/asset/images/blog/blog-11.png.jpeg" alt="Blog Images">
                                            </a>
                                            <div class="blog-category">
                                                <a href="#">Photography</a>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="{{route('user.details')}}">Important updates for listing and delisting your NFTs</a></h5>

                                            <div class="read-more-btn">
                                                <a class="axil-btn right-icon" href="{{route('user.details')}}">Read More <i class="fal fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post-pagination">
                            <nav class="navigation pagination" aria-label="Products">
                                <ul class="page-numbers">
                                    <li><span aria-current="page" class="page-numbers current">1</span></li>
                                    <li><a class="page-numbers" href="#">2</a></li>
                                    <li><a class="page-numbers" href="#">3</a></li>
                                    <li><a class="page-numbers" href="#">4</a></li>
                                    <li><a class="page-numbers" href="#">5</a></li>
                                    <li><a class="next page-numbers" href="#"><i class="fal fa-arrow-right"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <!-- Start Sidebar Area  -->
                        <aside class="axil-sidebar-area">

                            <!-- Start Single Widget  -->
                            <div class="axil-single-widget mt--40">
                                <h6 class="widget-title">Latest Posts</h6>

                                <!-- Start Single Post List  -->
                                <div class="content-blog post-list-view mb--20">
                                    <div class="thumbnail">
                                        <a href="{{route('user.details')}}">
                                            <img src="/asset/images/blog/blog-04.png" alt="Blog Images">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h6 class="title"><a href="{{route('user.details')}}">Dubai’s FRAME Offers its Take on the</a></h6>
                                        <div class="axil-post-meta">
                                            <div class="post-meta-content">
                                                <ul class="post-meta-list">
                                                    <li>Mar 27, 2022</li>
                                                    <li>300k Views</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Post List  -->

                                <!-- Start Single Post List  -->
                                <div class="content-blog post-list-view mb--20">
                                    <div class="thumbnail">
                                        <a href="{{route('user.details')}}">
                                            <img src="/asset/images/blog/blog-05.png" alt="Blog Images">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h6 class="title"><a href="{{route('user.details')}}">Apple presents App Best of 2020 winners</a></h6>
                                        <div class="axil-post-meta">
                                            <div class="post-meta-content">
                                                <ul class="post-meta-list">
                                                    <li>Mar 20, 2022</li>
                                                    <li>300k Views</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Post List  -->

                                <!-- Start Single Post List  -->
                                <div class="content-blog post-list-view">
                                    <div class="thumbnail">
                                        <a href="{{route('user.details')}}">
                                            <img src="/asset/images/blog/blog-06.png" alt="Blog Images">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h6 class="title"><a href="{{route('user.details')}}">Gallaudet University innovation in education</a></h6>
                                        <div class="axil-post-meta">
                                            <div class="post-meta-content">
                                                <ul class="post-meta-list">
                                                    <li>Mar 15, 2022</li>
                                                    <li>300k Views</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Post List  -->

                            </div>
                            <!-- End Single Widget  -->
                            <!-- Start Single Widget  -->
                            <div class="axil-single-widget mt--40">
                                <h6 class="widget-title">Recent Viewed Products</h6>
                                <ul class="product_list_widget recent-viewed-product">
                                    <!-- Start Single product_list  -->
                                    <li>
                                        <div class="thumbnail">
                                            <a href="{{route('user.details')}}">
                                                <img src="/asset/images/product/product-12.jpg.png" alt="Blog Images">
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h6 class="title"><a href="{{route('user.details')}}">Men's Fashion Tshirt</a></h6>
                                            <div class="product-meta-content">
                                                <span class="woocommerce-Price-amount amount">
                            <del>$30</del>
                            $20
                        </span>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- End Single product_list  -->
                                    <!-- Start Single product_list  -->
                                    <li>
                                        <div class="thumbnail">
                                            <a href="{{route('user.details')}}">
                                                <img src="/asset/images/product/product-10.jpg.png" alt="Blog Images">
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h6 class="title"><a href="{{route('user.details')}}">Nike Shoes</a></h6>
                                            <div class="product-meta-content">
                                                <span class="woocommerce-Price-amount amount">
                            <del>$200</del>
                            $150
                        </span>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- End Single product_list  -->
                                    <!-- Start Single product_list  -->
                                    <li>
                                        <div class="thumbnail">
                                            <a href="{{route('user.details')}}">
                                                <img src="/asset/images/product/product-11.jpg.png" alt="Blog Images">
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h6 class="title"><a href="{{route('user.details')}}">Addidas Shoes</a></h6>
                                            <div class="product-meta-content">
                                                <span class="woocommerce-Price-amount amount">
                            <del>$300</del>
                            $200
                        </span>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- End Single product_list  -->
                                </ul>

                            </div>
                            <!-- End Single Widget  -->

                            <!-- Start Single Widget  -->
                            <div class="axil-single-widget mt--40 widget_search">
                                <h6 class="widget-title">Search</h6>
                                <form class="blog-search" action="#">
                                    <button class="search-button"><i class="fal fa-search"></i></button>
                                    <input type="text" placeholder="Search">
                                </form>
                            </div>
                            <!-- End Single Widget  -->

                            <!-- Start Single Widget  -->
                            <div class="axil-single-widget mt--40 widget_archive">
                                <h6 class="widget-title">Archives List</h6>
                                <ul>
                                    <li><a href="#">January 2020</a></li>
                                    <li><a href="#">February 2020</a></li>
                                    <li><a href="#">March 2020</a></li>
                                    <li><a href="#">April 2020</a></li>
                                </ul>
                            </div>
                            <!-- End Single Widget  -->

                            <!-- Start Single Widget  -->
                            <div class="axil-single-widget mt--40 widget_archive_dropdown">
                                <h6 class="widget-title">Archives Dropdown</h6>
                                <select>
                                    <option>Select Month</option>
                                    <option>April 2020 (4)</option>
                                    <option>May 2020 (4)</option>
                                    <option>June 2020 (4)</option>
                                    <option>July 2020 (4)</option>
                                </select>
                            </div>
                            <!-- End Single Widget  -->

                            <!-- Start Single Widget  -->
                            <div class="axil-single-widget mt--40 widget_tag_cloud">
                                <h6 class="widget-title">Tags</h6>
                                <div class="tagcloud">
                                    <a href="#">Design</a>
                                    <a href="#">HTML</a>
                                    <a href="#">Graphic</a>
                                    <a href="#">Development</a>
                                    <a href="#">UI/UX Design</a>
                                    <a href="#">eCommerce</a>
                                    <a href="#">CSS</a>
                                    <a href="#">JS</a>
                                </div>
                            </div>
                            <!-- End Single Widget  -->

                        </aside>
                        <!-- End Sidebar Area -->
                    </div>
                </div>
                <!-- End post-pagination -->
            </div>
            <!-- End .container -->
        </div>
        <!-- End Blog Area  -->

        <!-- Start Axil Newsletter Area  -->
        <div class="axil-newsletter-area axil-section-gap pt--0">
            <div class="container">
                <div class="etrade-newsletter-wrapper bg_image bg_image--5">
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
 @stop