    <!-- Start Header -->
    <header class="header axil-header header-style-5">
        <div class="axil-header-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-sm-6 col-12">
                        <div class="header-top-dropdown">
                            <div class="dropdown">
                                <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    English
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">English</a></li>
                                    <li><a class="dropdown-item" href="#">Arabic</a></li>
                                    <li><a class="dropdown-item" href="#">Spanish</a></li>
                                </ul>
                            </div>
                            <div class="dropdown">
                                <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    USD
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">USD</a></li>
                                    <li><a class="dropdown-item" href="#">AUD</a></li>
                                    <li><a class="dropdown-item" href="#">EUR</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-12">
                        <div class="header-top-link">
                            <ul class="quick-link">
                                <li><a href="#">Help</a></li>
                                <li><a href="{{route('user.singup')}}">Join Us</a></li>
                                <li><a href="sign-in.html">Sign In</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Mainmenu Area  -->
        <div id="axil-sticky-placeholder"></div>
        <div class="axil-mainmenu">
            <div class="container">
                <div class="header-navbar">
                    <div class="header-brand">
                        <a href="index.html" class="logo logo-dark">
                            <img src="/asset/images/logo/logo.png" alt="Site Logo">
                        </a>
                        <a href="index.html" class="logo logo-light">
                            <img src="/asset/images/logo/logo-light.png" alt="Site Logo">
                        </a>
                    </div>
                    <div class="header-main-nav">
                        <!-- Start Mainmanu Nav -->
                        <nav class="mainmenu-nav">
                            <button class="mobile-close-btn mobile-nav-toggler"><i class="fas fa-times"></i></button>
                            <div class="mobile-nav-brand">
                                <a href="index.html" class="logo">
                                    <img src="/asset/images/logo/logo.png" alt="Site Logo">
                                </a>
                            </div>
                            <ul class="mainmenu">
                                <li class="menu-item-has-children">
                                    <a href="#">Home</a>
                                    <ul class="axil-submenu">
                                        <li><a href="{{route('user.electronics')}}">Home - Electronics</a></li>
                                        <li><a href="{{route('user.nft')}}">Home - NFT</a></li>
                                        <li><a href="{{route('user.fashion')}}">Home - Fashion</a></li>
                                        <li><a href="{{route('user.jewellery')}}">Home - Jewellery</a></li>
                                        <li><a href="{{route('user.furniture')}}">Home - Furniture</a></li>
                                        <li><a href="{{route('user.multipurpose')}}">Home - Multipurpose</a></li>
                                        <li><a href="{{route('user.rtl')}}">RTL Version</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Shop</a>
                                    <ul class="axil-submenu">
                                        <li><a href="{{route('user.shop')}}">Shop With Sidebar</a></li>
                                        <li><a href="{{route('user.nosid')}}">Shop no Sidebar</a></li>
                                        <li><a href="{{route('user.variation1')}}">Product Variation 1</a></li>
                                        <li><a href="{{route('user.variation2')}}">Product Variation 2</a></li>
                                        <li><a href="{{route('user.variation3')}}">Product Variation 3</a></li>
                                        <li><a href="{{route('user.variation4')}}">Product Variation 4</a></li>
                                        <li><a href="{{route('user.variation5')}}">Product Variation 5</a></li>
                                        <li><a href="{{route('user.variation6')}}">Product Variation 6</a></li>
                                        <li><a href="{{route('user.variation7')}}">Product Variation 7</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Pages</a>
                                    <ul class="axil-submenu">
                                        <li><a href="{{route('user.wishlist')}}">Wishlist</a></li>
                                        <li><a href="{{route('user.cart')}}">Cart</a></li>
                                        <li><a href="{{route('user.checkout')}}">Checkout</a></li>
                                        <li><a href="{{route('user.account')}}">Account</a></li>
                                        <li><a href="{{route('user.singup')}}">Sign Up</a></li>
                                        <li><a href="{{route('user.signin')}}">Sign In</a></li>
                                        <li><a href="{{route('user.forgotpass')}}">Forgot Password</a></li>
                                        <li><a href="{{route('user.resetpass')}}">Reset Password</a></li>
                                        <li><a href="{{route('user.privacypol')}}">Privacy Policy</a></li>
                                        <li><a href="{{route('user.comingsoon')}}">Coming Soon</a></li>
                                        <li><a href="{{route('user.error')}}">404 Error</a></li>
                                        <li><a href="{{route('user.typography')}}">Typography</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{route('user.about')}}">About</a></li>
                                <li class="menu-item-has-children">
                                    <a href="#">Blog</a>
                                    <ul class="axil-submenu">
                                        <li><a href="{{route('user.blog')}}">Blog List</a></li>
                                        <li><a href="{{route('user.bloggrid')}}">Blog Grid</a></li>
                                        <li><a href="{{route('user.details')}}">Standard Post</a></li>
                                        <li><a href="{{route('user.gallery')}}">Gallery Post</a></li>
                                        <li><a href="{{route('user.video')}}">Video Post</a></li>
                                        <li><a href="{{route('user.audio')}}">Audio Post</a></li>
                                        <li><a href="{{route('user.quote')}}">Quote Post</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{route('user.contact')}}">Contact</a></li>
                            </ul>
                        </nav>
                        <!-- End Mainmanu Nav -->
                    </div>
                    <div class="header-action">
                        <ul class="action-list">
                            <li class="axil-search d-xl-block d-none">
                                <input type="search" class="placeholder product-search-input" name="search2" id="search2" value="" maxlength="128" placeholder="What are you looking for?" autocomplete="off">
                                <button type="submit" class="icon wooc-btn-search">
                                    <i class="flaticon-magnifying-glass"></i>
                                </button>
                            </li>
                            <li class="axil-search d-xl-none d-block">
                                <a href="javascript:void(0)" class="header-search-icon" title="Search">
                                    <i class="flaticon-magnifying-glass"></i>
                                </a>
                            </li>
                            <li class="wishlist">
                                <a href="{{route('user.wishlist')}}">
                                    <i class="flaticon-heart"></i>
                                </a>
                            </li>
                            <li class="shopping-cart">
                                <a href="#" class="cart-dropdown-btn">
                                    <span class="cart-count"> {{count((array) session('carts'))}}</span>
                                    <i class="flaticon-shopping-cart"></i>
                                </a>
                            </li>
                          
                            <li class="my-account">
                                <a href="javascript:void(0)">
                                    <i class="flaticon-person"></i>
                                </a>
                                <div class="my-account-dropdown">
                                    <span class="title">QUICKLINKS</span>
                                    <ul>
                                        <li>
                                            <a href="{{route('user.account')}}">My Account</a>
                                        </li>
                                        <li>
                                            <a href="#">Initiate return</a>
                                        </li>
                                        <li>
                                            <a href="#">Support</a>
                                        </li>
                                        <li>
                                            <a href="#">Language</a>
                                        </li>
                                    </ul>
                                    <a href="{{route('user.signin')}}" class="axil-btn btn-bg-primary">Login</a>
                                    <div class="reg-footer text-center">No account yet? <a href="{{route('user.singup')}}" class="btn-link">REGISTER HERE.</a></div>
                                </div>
                            </li>
                            <li class="axil-mobile-toggle">
                                <button class="menu-btn mobile-nav-toggler">
                                    <i class="flaticon-menu-2"></i>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Mainmenu Area -->
        <div class="header-top-campaign">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-6 col-md-10">
                        <div class="header-campaign-activation axil-slick-arrow arrow-both-side header-campaign-arrow">
                            <div class="slick-slide">
                                <div class="campaign-content">
                                    <p>STUDENT NOW GET 10% OFF : <a href="#">GET OFFER</a></p>
                                </div>
                            </div>
                            <div class="slick-slide">
                                <div class="campaign-content">
                                    <p>STUDENT NOW GET 10% OFF : <a href="#">GET OFFER</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>



    
    <!-- End Header -->