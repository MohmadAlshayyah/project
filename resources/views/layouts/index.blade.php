
@extends('layouts.test')

@section('content2')

@stop



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Koho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Koho admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="../assets/images/favicon/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/favicon/favicon.png" type="image/x-icon">
    <title>Koho - Premium Admin Template</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
  
  </head>
  <body>
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- Loader starts-->
    <div class="loader-wrapper">
      <div class="loader"></div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      <div class="page-header">
        <div class="header-wrapper row m-0">
          <form class="form-inline search-full col" action="#" method="get">
            <div class="form-group w-100">
              <div class="Typeahead Typeahead--twitterUsers">
                <div class="u-posRelative">
                  <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text" placeholder="Search Koho .." name="q" title="" autofocus>
                  <div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">Loading...</span></div><i class="close-search" data-feather="x"></i>
                </div>
                <div class="Typeahead-menu"></div>
              </div>
            </div>
          </form>
          <div class="header-logo-wrapper col-auto p-0">
            <div class="logo-wrapper"><a href="index"><img class="img-fluid for-light" src="../assets/images/logo/logo.png" alt=""><img class="img-fluid for-dark" src="../assets/images/logo/logo-dark.png" alt=""></a></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i></div>
          </div>
          <div class="left-header col horizontal-wrapper ps-0">
            <div class="input-group">     
              <input class="form-control" type="text" placeholder="Search Here........"><span class="input-group-text mobile-search"><i data-feather="search"></i></span>
            </div>
          </div>
          <div class="nav-right col-6 pull-right right-header p-0">
            <ul class="nav-menus">   
              <li class="language-nav">
                <div class="translate_wrapper">
                  <div class="current_lang">
                    <div class="lang"><i class="flag-icon flag-icon-us"></i><span class="lang-txt">EN                               </span></div>
                  </div>
                  <div class="more_lang">
                    <div class="lang selected" data-value="en"><i class="flag-icon flag-icon-us"></i><span class="lang-txt">English<span> (US)</span></span></div>
                    <div class="lang" data-value="de"><i class="flag-icon flag-icon-de"></i><span class="lang-txt">Deutsch</span></div>
                    <div class="lang" data-value="es"><i class="flag-icon flag-icon-es"></i><span class="lang-txt">Español</span></div>
                    <div class="lang" data-value="fr"><i class="flag-icon flag-icon-fr"></i><span class="lang-txt">Français</span></div>
                    <div class="lang" data-value="pt"><i class="flag-icon flag-icon-pt"></i><span class="lang-txt">Português<span> (BR)</span></span></div>
                    <div class="lang" data-value="cn"><i class="flag-icon flag-icon-cn"></i><span class="lang-txt">简体中文</span></div>
                    <div class="lang" data-value="ae"><i class="flag-icon flag-icon-ae"></i><span class="lang-txt">لعربية <span> (ae)</span></span></div>
                  </div>
                </div>
              </li>
              <li>
                <div class="mode"><i data-feather="moon"></i></div>
              </li>
              <li class="onhover-dropdown">
                <div class="notification-box"><i data-feather="star"></i></div>
                <div class="onhover-show-div bookmark-flip">
                  <div class="flip-card">
                    <div class="flip-card-inner">
                      <div class="front">
                        <ul class="droplet-dropdown bookmark-dropdown">
                          <li class="gradient-primary"><i data-feather="star"></i>
                            <h3 class="mb-0">Bookmark</h3>
                          </li>
                          <li>
                            <div class="row">
                              <div class="col-4 text-center"><a href="file-manager"><i data-feather="file-text"></i></a></div>
                              <div class="col-4 text-center"><a href="general-widget"><i data-feather="activity"></i></a></div>
                              <div class="col-4 text-center"><a href="user-profile"><i data-feather="users"></i></a></div>
                              <div class="col-4 text-center"><a href="clipboard"><i data-feather="clipboard"></i></a></div>
                              <div class="col-4 text-center"><a href="to-do"><i data-feather="anchor"></i></a></div>
                              <div class="col-4 text-center"><a href="internationalization"><i data-feather="settings"></i></a></div>
                            </div>
                          </li>
                          <li class="text-center">
                            <button class="flip-btn" id="flip-btn">Add New Bookmark</button>
                          </li>
                        </ul>
                      </div>
                      <div class="back">
                        <ul>
                          <li>
                            <div class="droplet-dropdown bookmark-dropdown flip-back-content">
                              <input type="text" placeholder="search...">
                            </div>
                          </li>
                          <li class="pb-0">
                            <button class="d-block flip-back" id="flip-back">Back          </button>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="onhover-dropdown">
                <div class="notification-box"><i data-feather="bell"></i><span class="badge rounded-pill badge-primary">4                                </span></div>
                <ul class="notification-dropdown onhover-show-div">
                  <li><i data-feather="bell">            </i>
                    <h3 class="mb-0">Notifications</h3>
                  </li>
                  <li><a href="email_read"> 
                      <p><i class="fa fa-circle-o me-3 font-primary"> </i>Delivery processing <span class="pull-right">10 min.</span></p></a></li>
                  <li><a href="email_read">
                      <p><i class="fa fa-circle-o me-3 font-success"></i>Order Complete<span class="pull-right">1 hr</span></p></a></li>
                  <li><a href="email_read">
                      <p><i class="fa fa-circle-o me-3 font-info"></i>Tickets Generated<span class="pull-right">3 hr</span></p></a></li>
                  <li><a href="email_read">
                      <p><i class="fa fa-circle-o me-3 font-danger"></i>Delivery Complete<span class="pull-right">6 hr</span></p></a></li>
                  <li><a class="btn btn-primary" href="email_read">Check all notification</a></li>
                </ul>
              </li>
              <li class="onhover-dropdown"><i data-feather="message-square"></i>
                <ul class="chat-dropdown onhover-show-div">
                  <li><i data-feather="message-square"></i>
                    <h3 class="mb-0">Message Box</h3>
                  </li>
                  <li>
                    <div class="d-flex"><img class="img-fluid rounded-circle me-3" src="../assets/images/user/6.jpg" alt="">
                      <div class="status-circle online"></div>
                      <div class="flex-grow-1"><a href="user-profile"><span>Ain Chavez</span>
                          <p>Do you want to go see movie?</p></a></div>
                      <p class="f-12 font-success">2 mins ago</p>
                    </div>
                  </li>
                  <li>
                    <div class="d-flex"><img class="img-fluid rounded-circle me-3" src="../assets/images/user/1.jpg" alt="">
                      <div class="status-circle online"></div>
                      <div class="flex-grow-1"><a href="user-profile"><span>Erica Hughes</span>
                          <p>Thank you for rating us.</p></a></div>
                      <p class="f-12 font-success">5 mins ago</p>
                    </div>
                  </li>
                  <li>
                    <div class="d-flex"><img class="img-fluid rounded-circle me-3" src="../assets/images/user/7.jpg" alt="">
                      <div class="status-circle offline"></div>
                      <div class="flex-grow-1"><a href="user-profile"><span>Kori Thomas</span>
                          <p>What`s the project report update?</p></a></div>
                      <p class="f-12 font-danger">9 mins ago</p>
                    </div>
                  </li>
                  <li class="text-center"> <a class="btn btn-primary" href="chat">View All     </a></li>
                </ul>
              </li>
              <li class="maximize"><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
              <li class="profile-nav onhover-dropdown p-0 me-0">
                <div class="d-flex profile-media"><img class="b-r-50" src="../assets/images/dashboard/profile.png" alt="">
                  <div class="flex-grow-1"><span>Helen Walter</span>
                    <p class="mb-0 font-roboto">Admin <i class="middle fa fa-angle-down"></i></p>
                  </div>
                </div>
                <ul class="profile-dropdown onhover-show-div">
                  <li><a href="user-profile"><i data-feather="user"></i><span>Account </span></a></li>
                  <li><a href="email_inbox"><i data-feather="mail"></i><span>Inbox</span></a></li>
                  <li><a href="kanban"><i data-feather="file-text"></i><span>Taskboard</span></a></li>
                  <li><a href="login"><i data-feather="log-in"> </i><span>Log in</span></a></li>
                </ul>
              </li>
            </ul>
          </div>
          <script class="result-template" type="text/x-handlebars-template">
            <div class="ProfileCard u-cf">                        
            <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
            <div class="ProfileCard-details">
            <div class="ProfileCard-realName"></div>
            </div>
            </div>
          </script>
          <script class="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
        </div>
      </div>
      <!-- Page Header Ends                              -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        <div class="sidebar-wrapper">
          <div>
            <div class="logo-wrapper"><a href="index"><img class="img-fluid for-light" src="../assets/images/logo/logo.png" alt=""><img class="img-fluid for-dark" src="../assets/images/logo/logo-dark.png" alt=""></a>
              <div class="back-btn"><i class="fa fa-angle-left"></i></div>
              <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="align-left"> </i></div>
            </div>
            <div class="logo-icon-wrapper"><a href="index"><img class="img-fluid for-light" src="../assets/images/logo/logo-icon.png" alt=""><img class="img-fluid for-dark" src="../assets/images/logo/logo-icon-dark.png" alt=""></a></div>
            <nav class="sidebar-main">
              <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
              <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                  <li class="back-btn"><a href="index"><img class="img-fluid for-light" src="../assets/images/logo/logo-icon.png" alt=""><img class="img-fluid for-dark" src="../assets/images/logo/logo-icon-dark.png" alt=""></a>
                    <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                  </li>
                  <li class="sidebar-main-title">  
                    <div>       
                      <h4 class="lan-1">General         </h4>
                    </div>
                  </li>
                 
                 




                  <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="layout"></i>Manager Categories</a>
                    <ul class="sidebar-submenu">
                      <li><a href="{{route('admin.show')}}">categories</a></li>
                      <li><a href="{{route('admin.subcategories')}}">Sub Categories</a></li>
                      
                  
                    </ul>
</li>



<li class="sidebar-list"><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="layout"></i>Manager Products</a>
                    <ul class="sidebar-submenu">
                      <li><a href="{{route('admin.brand')}}">Brands</a></li>
                     
                      <li><a href="{{route('admin.allproducts')}}">All Products</a></li>
                      <li><a href="{{route('admin.stockoutproducts')}}">Stock Out Products</a></li>
                      <li><a href="{{route('admin.export')}}">CSV Import & Export</a></li>
                      
                      <li><a href=" {{route('admin.productreviews')}}"> Product Reviews</a></li>
                  
                  
                    </ul>
</li>


<li class="sidebar-list"><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="layout"></i>Manager Orders</a>
                    <ul class="sidebar-submenu">
                      <li><a href="{{route('admin.orders')}}">All Orders</a></li>
                      <li><a href="{{route('admin.pending')}}">Pending Orders</a></li>
                      <li><a href="{{route('admin.progress')}}">In Progress Orders</a></li>
                      <li><a href="{{route('admin.delivered')}}">Delivered Orders</a></li>
                      <li><a href="{{route('admin.canceled')}}"> Canceled Orders</a></li>
                  
                  
                    </ul>
</li>













<li class="sidebar-list"><a class="sidebar-link sidebar-title" href="{{route('admin.transactions')}}">Transactions</a>
             
</li>









<li class="sidebar-list"><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="layout"></i>Ecommerce</a>
                    <ul class="sidebar-submenu">
                      <li><a href="{{route('admin.coupons')}}">Set Coupons</a></li>
                      <li><a href="{{route('admin.shipping')}}">Shipping </a></li>
                      <li><a href="{{route('admin.state')}}">State</a></li>
                      <li><a href="{{route('admin.tax')}}"> Tax</a></li>
                      <li><a href=""> Currency </a></li>
                  
                  
                    </ul>
</li>




<li class="sidebar-list"><a class="sidebar-link sidebar-title" href="{{route('admin.list')}}">Customers List</a>
             
</li>





<li class="sidebar-list"><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="layout"></i>Manage Tickets</a>
                    <ul class="sidebar-submenu">
                      <li><a href="{{route('admin.tickets')}}">Manage Tickets </a></li>
                  
                 
                  
                  
                    </ul>
</li>

<li class="sidebar-list"><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="layout"></i>Manage Faps</a>
                    <ul class="sidebar-submenu">
                      <li><a href="{{route('admin.categories')}}">Categories  </a></li>
                     
                      <li><a href="{{route('admin.contents')}}">FAQ Contents  </a></li>
                      
                  
                  
                    </ul>
</li>




<li class="sidebar-list"><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="layout"></i>Manager Blogs</a>
                    <ul class="sidebar-submenu">
                      <li><a href="{{route('admin.blogs')}}">Categories</a></li>
                    
                      <li><a href="{{route('admin.index')}}">Manage Blogs </a></li>
                    
                      
                  
                  
                    </ul>
</li>




<li class="sidebar-list"><a class="sidebar-link sidebar-title" href="email"> Subscribers List</a>
             
</li>


<li class="sidebar-list"><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="layout"></i>System User</a>
                    <ul class="sidebar-submenu">
                      <li><a href="{{route('admin.role')}}">Role</a></li>
                    
                      <li><a href="{{route('admin.user')}}">System User</a></li>
                    
                      
                  
                  
                    </ul>
</li>



                  
               
                  <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="support-ticket"><i data-feather="users"> </i><span>Support Ticket      </span></a></li>
                </ul>
                <div class="sidebar-img-section">
                  <div class="sidebar-img-content"><img class="img-fluid" src="../assets/images/dashboard/upgrade/2.png" alt="">
                    <h4>Experiance with more Features</h4><a class="btn btn-primary" href="https://themeforest.net/user/pixelstrap/portfolio" target="_blank">Check now</a>
                  </div>
                </div>
              </div>
              <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
            </nav>
          </div>
        </div>
        @yield('categories')
        @yield('mohmad')
        @yield('testt')
        @yield('sub')
        @yield('addcategories')
        @yield('orders')
        @yield('brand')
        @yield('home')
        @yield('export')
        @yield('productreviews')
        @yield('pending')
        @yield('progress')
        @yield('delivered')
        @yield('canceled')
        @yield('transactions')
        @yield('coupons')
        @yield('shipping')
        @yield('state')
        @yield('tax')
        @yield('currency')
        @yield('list')
        @yield('create')
        @yield('tickets')
        @yield('categories')
        @yield('contents')
        @yield('createcategories')
        @yield('createcontents')
        @yield('blogs')
        @yield('createblo')
        @yield('createblogs')
        @yield('index')
        @yield('email')
        @yield('user')
        @yield('role')
        @yield('createuser')
        @yield('createrole')
        @yield('addbrand')
        @yield('createstate')
        @yield('createtax')
        @yield('editshipping')
        @yield('updatestate')
        @yield('editcoupons')
            </div>
          
          </div>

      

  </body>
</html>


