<!DOCTYPE html>
<!--[if IE 8]>          <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>          <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->  <html> <!--<![endif]-->
<head>
    <!-- Page Title -->
    <title>Mamybooking.com</title>
    
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="keywords" content="travel,car-rent" />
    <meta name="description" content="Travel and Car-rent booking date start date end">
    <meta name="author" content="SoapTheme">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}" type="image/x-icon">
    
    <!-- Theme Styles -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
    
    <!-- Current Page Styles -->
    <link rel="stylesheet" type="text/css" href="{{asset('components/revolution_slider/css/settings.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{asset('components/revolution_slider/css/style.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{asset('components/jquery.bxslider/jquery.bxslider.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{asset('components/flexslider/flexslider.css')}}" media="screen" />
    
    <!-- Main Style -->
    <link id="main-style" rel="stylesheet" href="{{asset('css/style.css')}}">
    
    <!-- Updated Styles -->
    <link rel="stylesheet" href="{{asset('css/updates.css')}}">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    
    <!-- Responsive Styles -->
    <link rel="stylesheet" href="{{asset('css/bootstrap-select.min.css')}}">

    <!-- Select -->
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('style')
    
    <!-- CSS for IE -->
    <!--[if lte IE 9]>
        <link rel="stylesheet" type="text/css" href="css/ie.css" />
    <![endif]-->
    
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script type='text/javascript' src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
      <script type='text/javascript' src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
    <![endif]-->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

    <style>
        section#content {  min-height: 500px; padding: 0; position: relative; overflow: hidden; }
        #main { padding-top: 50px; padding-bottom: 45px; }
        .page-title, .page-description { color: #fff; }
        .page-title { font-size: 4.1667em; font-weight: bold; }
        .page-description { font-size: 2.5em; margin-bottom: 50px; }
        .featured { position: absolute; right: 50px; bottom: 50px; z-index: 9; margin-bottom: 0;  text-align: right; }
        .featured figure a { border: 2px solid #fff; }
        .featured .details { margin-right: 10px; }
        .featured .details > * { color: #fff; line-height: 1.25em; margin: 0; font-weight: bold; text-shadow: 2px -2px rgba(0, 0, 0, 0.2); }
    </style>

    <!-- Javascript Page Loader -->
    <!-- <script type="text/javascript" src="{{asset('js/pace.min.js')}}" data-pace-options='{ "ajax": false }'></script> -->
    <!-- <script type="text/javascript" src="{{asset('js/page-loading.js')}}"></script> -->
</head>
<body>
     <div id="page-wrapper">
       <header id="header" class="navbar-static-top">
            <div class="topnav hidden-xs">
                <div class="container">
                    <ul class="quick-menu pull-left">
                        @if (Auth::guest())
                       
                        @else
                         <li><a href="#">MY ACCOUNT</a></li>
                        @endif
                        <li class="ribbon">
                            <a href="#">ไทย</a>
                            <ul class="menu mini">
                                <li class="active"><a href="{{url('lang/th')}}" title="th">ไทย</a></li>
                                <li class=""><a href="{{url('lang/en')}}" title="English">English</a></li>
                              
                            </ul>
                        </li>
                    </ul>
                    <ul class="quick-menu pull-right">
                        @if (Auth::guest())
                        <li><a href="#travelo-login" class="soap-popupbox">{{trans('site.login')}}</a></li>
                        <li><a href="#travelo-signup" class="soap-popupbox">{{trans('site.register')}}</a></li>
                        @else
                        @endif
                       
                    </ul>
                </div>
            </div>
            
            <div class="main-header">
                
                <a href="#mobile-menu-01" data-toggle="collapse" class="mobile-menu-toggle">
                    Mobile Menu Toggle
                </a>

                <div class="container">
                    <h1 class=" navbar-brand">
                        <!-- <img src="http://phptravels.net/uploads/global/logo.png"> -->
                        <a href="{{url('/')}}" title="Travelo - home">
                            <img src="{{URL::to('/images/logo.png')}}" alt="Travelo HTML5 Template" />
                        </a>

                    </h1>


                    
                    <nav id="main-menu" role="navigation">
                        <ul class="menu">
                            <li class="menu-item @yield('menu-index-active')">
                                <a href="{{url('/')}}" class="menu-font">หน้าแรก</a>
                            </li>
                            <li class="menu-item @yield('menu-tour-active')">
                                <a href="{{url('tour')}}" class="menu-font">ทริปท่องเที่ยว</a>
                            </li>
                            <li class="menu-item @yield('menu-car-active')">
                                <a href="{{url('car')}}" class="menu-font">รถเช่า</a>
                            </li>
                            <li class="menu-item @yield('menu-about-active')">
                                <a href="{{url('about')}}" class="menu-font">เกี่ยวกับเรา</a>
                            </li>
                            <li class="menu-item @yield('menu-faq-active')">
                                <a href="{{url('faq')}}" class="menu-font">คำถามที่พบบ่อย</a>
                            </li>
                            <li class="menu-item @yield('menu-contact-active')">
                                <a href="{{url('contact')}}" class="menu-font">ติดต่อ</a>
                            </li>
                            
                        </ul> 
                    </nav>
                </div>
                
                <nav id="mobile-menu-01" class="mobile-menu collapse">
                    <ul id="mobile-primary-menu" class="menu">
                        <li class="menu-item-has-children">
                            <a href="aaa">Home</a>
                            <ul>
                                <li><a href="index.html">Home Layout 1</a></li>
                                <li><a href="homepage2.html">Home Layout 2</a></li>
                                <li><a href="homepage3.html">Home Layout 3</a></li>
                                <li><a href="homepage4.html">Home Layout 4</a></li>
                                <li><a href="homepage5.html">Home Layout 5</a></li>
                                <li><a href="homepage6.html">Home Layout 6</a></li>
                                <li><a href="homepage7.html">Home Layout 7</a></li>
                                <li><a href="homepage8.html">Home Layout 8</a></li>
                                <li><a href="homepage9.html">Home Layout 9</a></li>
                                <li><a href="homepage10.html">Home Layout 10</a></li>
                                <li><a href="homepage11.html">Home Layout 11</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="hotel-index.html">Hotels</a>
                            <ul>
                                <li><a href="hotel-index.html">Home Hotels</a></li>
                                <li><a href="hotel-list-view.html">List View</a></li>
                                <li><a href="hotel-grid-view.html">Grid View</a></li>
                                <li><a href="hotel-block-view.html">Block View</a></li>
                                <li><a href="hotel-detailed.html">Detailed</a></li>
                                <li><a href="hotel-booking.html">Booking</a></li>
                                <li><a href="hotel-thankyou.html">Thank You</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="flight-index.html">Flights</a>
                            <ul>
                                <li><a href="flight-index.html">Home Flights</a></li>
                                <li><a href="flight-list-view.html">List View</a></li>
                                <li><a href="flight-grid-view.html">Grid View</a></li>
                                <li><a href="flight-block-view.html">Block View</a></li>
                                <li><a href="flight-detailed.html">Detailed</a></li>
                                <li><a href="flight-booking.html">Booking</a></li>
                                <li><a href="flight-thankyou.html">Thank You</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="car-index.html">Cars</a>
                            <ul>
                                <li><a href="car-index.html">Home Cars</a></li>
                                <li><a href="car-list-view.html">List View</a></li>
                                <li><a href="car-grid-view.html">Grid View</a></li>
                                <li><a href="car-block-view.html">Block View</a></li>
                                <li><a href="car-detailed.html">Detailed</a></li>
                                <li><a href="car-booking.html">Booking</a></li>
                                <li><a href="car-thankyou.html">Thank You</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="cruise-index.html">Cruises</a>
                            <ul>
                                <li><a href="cruise-index.html">Home Cruises</a></li>
                                <li><a href="cruise-list-view.html">List View</a></li>
                                <li><a href="cruise-grid-view.html">Grid View</a></li>
                                <li><a href="cruise-block-view.html">Block View</a></li>
                                <li><a href="cruise-detailed.html">Detailed</a></li>
                                <li><a href="cruise-booking.html">Booking</a></li>
                                <li><a href="cruise-thankyou.html">Thank You</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="tour-index.html">Tour</a>
                            <ul>
                                <li><a href="tour-index.html">Home Tour</a></li>
                                <li><a href="tour-fancy-package-2column.html">Fancy Packages 2 Column</a></li>
                                <li><a href="tour-fancy-package-3column.html">Fancy Packages 3 Column</a></li>
                                <li><a href="tour-fancy-package-4column.html">Fancy Packages 4 Column</a></li>
                                <li><a href="tour-simple-package-2column.html">Simple Packages 2 Column</a></li>
                                <li><a href="tour-simple-package-3column.html">Simple Packages 3 Column</a></li>
                                <li><a href="tour-simple-package-4column.html">Simple Packages 4 Column</a></li>
                                <li><a href="tour-simple-package-3column.html">Location - Eruope</a></li>
                                <li><a href="tour-simple-package-4column.html">Location - North America</a></li>
                                <li><a href="tour-detailed1.html">Detailed 1</a></li>
                                <li><a href="tour-detailed2.html">Detailed 2</a></li>
                                <li><a href="tour-booking.html">Booking</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Pages</a>
                            <ul>
                                <li class="menu-item-has-children">
                                    <a href="#">Standard Pages</a>
                                    <ul>
                                        <li><a href="pages-aboutus1.html">About Us 1</a></li>
                                        <li><a href="pages-aboutus2.html">About Us 2</a></li>
                                        <li><a href="pages-services1.html">Services 1</a></li>
                                        <li><a href="pages-services2.html">Services 2</a></li>
                                        <li><a href="pages-photogallery-4column.html">Gallery 4 Column</a></li>
                                        <li><a href="pages-photogallery-3column.html">Gallery 3 Column</a></li>
                                        <li><a href="pages-photogallery-2column.html">Gallery 2 Column</a></li>
                                        <li><a href="pages-photogallery-fullview.html">Gallery Read</a></li>
                                        <li><a href="pages-blog-rightsidebar.html">Blog Right Sidebar</a></li>
                                        <li><a href="pages-blog-leftsidebar.html">Blog Left Sidebar</a></li>
                                        <li><a href="pages-blog-fullwidth.html">Blog Full Width</a></li>
                                        <li><a href="pages-blog-read.html">Blog Read</a></li>
                                        <li><a href="pages-faq1.html">Faq 1</a></li>
                                        <li><a href="pages-faq2.html">Faq 2</a></li>
                                        <li><a href="pages-layouts-leftsidebar.html">Layouts Left Sidebar</a></li>
                                        <li><a href="pages-layouts-rightsidebar.html">Layouts Right Sidebar</a></li>
                                        <li><a href="pages-layouts-twosidebar.html">Layouts Two Sidebar</a></li>
                                        <li><a href="pages-layouts-fullwidth.html">Layouts Full Width</a></li>
                                        <li><a href="pages-contactus1.html">Contact Us 1</a></li>
                                        <li><a href="pages-contactus2.html">Contact Us 2</a></li>
                                        <li><a href="pages-contactus3.html">Contact Us 3</a></li>
                                        <li><a href="pages-travelo-policies.html">Travelo Policies</a></li>
                                        <li><a href="pages-sitemap.html">Site Map</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Extra Pages</a>
                                    <ul>
                                        <li><a href="extra-pages-holidays.html">Holidays</a></li>
                                        <li><a href="extra-pages-hotdeals.html">Hot Deals</a></li>
                                        <li><a href="extra-pages-before-you-fly.html">Before You Fly</a></li>
                                        <li><a href="extra-pages-inflight-experience.html">Inflight Experience</a></li>
                                        <li><a href="extra-pages-things-todo1.html">Things To Do 1</a></li>
                                        <li><a href="extra-pages-things-todo2.html">Things To Do 2</a></li>
                                        <li><a href="extra-pages-travel-essentials.html">Travel Essentials</a></li>
                                        <li><a href="extra-pages-travel-stories.html">Travel Stories</a></li>
                                        <li><a href="extra-pages-travel-guide.html">Travel Guide</a></li>
                                        <li><a href="extra-pages-travel-ideas.html">Travel Ideas</a></li>
                                        <li><a href="extra-pages-travel-insurance.html">Travel Insurance</a></li>
                                        <li><a href="extra-pages-group-booking.html">Group Bookings</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Special Pages</a>
                                    <ul>
                                        <li><a href="pages-404-1.html">404 Page 1</a></li>
                                        <li><a href="pages-404-2.html">404 Page 2</a></li>
                                        <li><a href="pages-404-3.html">404 Page 3</a></li>
                                        <li><a href="pages-coming-soon1.html">Coming Soon 1</a></li>
                                        <li><a href="pages-coming-soon2.html">Coming Soon 2</a></li>
                                        <li><a href="pages-coming-soon3.html">Coming Soon 3</a></li>
                                        <li><a href="pages-loading1.html">Loading Page 1</a></li>
                                        <li><a href="pages-loading2.html">Loading Page 2</a></li>
                                        <li><a href="pages-loading3.html">Loading Page 3</a></li>
                                        <li><a href="pages-login1.html">Login Page 1</a></li>
                                        <li><a href="pages-login2.html">Login Page 2</a></li>
                                        <li><a href="pages-login3.html">Login Page 3</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Shortcodes</a>
                            <ul>
                                <li><a href="shortcode-accordions-toggles.html">Accordions &amp; Toggles</a></li>
                                <li><a href="shortcode-tabs.html">Tabs</a></li>
                                <li><a href="shortcode-buttons.html">Buttons</a></li>
                                <li><a href="shortcode-icon-boxes.html">Icon Boxes</a></li>
                                <li><a href="shortcode-gallery-styles.html">Image &amp; Gallery Styles</a></li>
                                <li><a href="shortcode-image-box-styles.html">Image Box Styles</a></li>
                                <li class="menu-item-has-children">
                                    <a href="#">Listing Styles</a>
                                    <ul>
                                        <li><a href="shortcode-listing-style1.html">Listing Style 01</a></li>
                                        <li><a href="shortcode-listing-style2.html">Listing Style 02</a></li>
                                        <li><a href="shortcode-listing-style3.html">Listing Style 03</a></li>
                                    </ul>
                                </li>
                                <li><a href="shortcode-dropdowns.html">Dropdowns</a></li>
                                <li><a href="shortcode-pricing-tables.html">Pricing Tables</a></li>
                                <li><a href="shortcode-testimonials.html">Testimonials</a></li>
                                <li><a href="shortcode-our-team.html">Our Team</a></li>
                                <li><a href="shortcode-gallery-popup.html">Gallery Popup</a></li>
                                <li><a href="shortcode-map-popup.html">Map Popup</a></li>
                                <li><a href="shortcode-style-changer.html">Style Changer</a></li>
                                <li><a href="shortcode-typography.html">Typography</a></li>
                                <li><a href="shortcode-animations.html">Animations</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Bonus</a>
                            <ul>
                                <li><a href="dashboard1.html">Dashboard 1</a></li>
                                <li><a href="dashboard2.html">Dashboard 2</a></li>
                                <li><a href="dashboard3.html">Dashboard 3</a></li>
                                <li class="menu-item-has-children">
                                    <a href="#">7 Footer Styles</a>
                                    <ul>
                                        <li><a href="#">Default Style</a></li>
                                        <li><a href="footer-style1.html">Footer Style 1</a></li>
                                        <li><a href="footer-style2.html">Footer Style 2</a></li>
                                        <li><a href="footer-style3.html">Footer Style 3</a></li>
                                        <li><a href="footer-style4.html">Footer Style 4</a></li>
                                        <li><a href="footer-style5.html">Footer Style 5</a></li>
                                        <li><a href="footer-style6.html">Footer Style 6</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">8 Header Styles</a>
                                    <ul>
                                        <li><a href="#">Default Style</a></li>
                                        <li><a href="header-style1.html">Header Style 1</a></li>
                                        <li><a href="header-style2.html">Header Style 2</a></li>
                                        <li><a href="header-style3.html">Header Style 3</a></li>
                                        <li><a href="header-style4.html">Header Style 4</a></li>
                                        <li><a href="header-style5.html">Header Style 5</a></li>
                                        <li><a href="header-style6.html">Header Style 6</a></li>
                                        <li><a href="header-style7.html">Header Style 7</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">7 Inner Start Styles</a>
                                    <ul>
                                        <li><a href="#">Default Style</a></li>
                                        <li><a href="inner-starts-style1.html">Inner Start Style 1</a></li>
                                        <li><a href="inner-starts-style2.html">Inner Start Style 2</a></li>
                                        <li><a href="inner-starts-style3.html">Inner Start Style 3</a></li>
                                        <li><a href="inner-starts-style4.html">Inner Start Style 4</a></li>
                                        <li><a href="inner-starts-style5.html">Inner Start Style 5</a></li>
                                        <li><a href="inner-starts-style6.html">Inner Start Style 6</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">3 Search Styles</a>
                                    <ul>
                                        <li><a href="search-style1.html">Search Style 1</a></li>
                                        <li><a href="search-style2.html">Search Style 2</a></li>
                                        <li><a href="search-style3.html">Search Style 3</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    
                    <ul class="mobile-topnav container">
                        <li><a href="#">MY ACCOUNT</a></li>
                        <li class="ribbon language menu-color-skin">
                            <a href="#" data-toggle="collapse">ENGLISH</a>
                            <ul class="menu mini">
                                <li><a href="#" title="Dansk">ไทย</a></li>
                                <li class="active"><a href="#" title="English">English</a></li>
                            </ul>
                        </li>
                        <li><a href="#travelo-login" class="soap-popupbox">เข้าสู่ระบบ</a></li>
                        <li><a href="#travelo-signup" class="soap-popupbox">สมัครสมาชิก</a></li>
                        
                    </ul>
                    
                </nav>
            </div>
            <div id="travelo-signup" class="travelo-signup-box travelo-box">
                <div class="login-social">
                    <a href="#" class="button login-facebook"><i class="soap-icon-facebook"></i>Login with Facebook</a>
                    <a href="#" class="button login-googleplus"><i class="soap-icon-googleplus"></i>Login with Google+</a>
                </div>
                <div class="seperator"><label>OR</label></div>
                <div class="simple-signup">
                    <div class="text-center signup-email-section">
                        <a href="#" class="signup-email"><i class="soap-icon-letter"></i>Sign up with Email</a>
                    </div>
                    <p class="description">By signing up, I agree to Travelo's Terms of Service, Privacy Policy, Guest Refund olicy, and Host Guarantee Terms.</p>
                </div>
                <div class="email-signup">
                    <form>
                        <div class="form-group">
                            <input type="text" class="input-text full-width" placeholder="first name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="input-text full-width" placeholder="last name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="input-text full-width" placeholder="email address">
                        </div>
                        <div class="form-group">
                            <input type="password" class="input-text full-width" placeholder="password">
                        </div>
                        <div class="form-group">
                            <input type="password" class="input-text full-width" placeholder="confirm password">
                        </div>
                        <div class="form-group">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Tell me about Travelo news
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <p class="description">By signing up, I agree to Travelo's Terms of Service, Privacy Policy, Guest Refund Policy, and Host Guarantee Terms.</p>
                        </div>
                        <button type="submit" class="full-width btn-medium">SIGNUP</button>
                    </form>
                </div>
                <div class="seperator"></div>
                <p>Already a Travelo member? <a href="#travelo-login" class="goto-login soap-popupbox">Login</a></p>
            </div>
            <div id="travelo-login" class="travelo-login-box travelo-box">
                <div class="login-social">
                    <a href="{{url('auth/facebook')}}" class="button login-facebook"><i class="soap-icon-facebook"></i>Login with Facebook</a>
                    
                </div>
                <div class="seperator"><label>OR</label></div>
                <form method="POST" action="{{ url('/login') }}">
                    {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                        <input type="text" id="username" name="username" value="{{ old('username') }}" class="input-text full-width" placeholder="email address" required>
                        @if ($errors->has('username'))
                            <span class="help-block">
                                <strong>{{ $errors->first('username') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <input id="password" type="password" name="password" class="input-text full-width" placeholder="password">
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <a href="{{ url('/password/reset') }}" class="forgot-password pull-right">Forgot password?</a>
                        <div class="checkbox checkbox-inline">
                            <label>
                                <input type="checkbox"> Remember me
                            </label>
                        </div>
                    </div>
                </form>
                <div class="seperator"></div>
                <p>Don't have an account? <a href="#travelo-signup" class="goto-signup soap-popupbox">Sign up</a></p>
            </div>
        </header>

        @yield('content')

        <footer id="footer" class="style4">
            <div class="footer-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                            <h2>Site Maps</h2>
                            <ul class="discover triangle hover row">
                                <li class="col-xs-12">&nbsp;<a href="{{url('/')}}">หน้าแรก</a></li>
                                <li class="col-xs-12">&nbsp;<a href="{{url('tour')}}">ทัวร์</a></li>
                                <li class="col-xs-12">&nbsp;<a href="{{url('car')}}">รถเช่า</a></li>
                                <li class="col-xs-12">&nbsp;<a href="{{url('about')}}">เกี่ยวกับเรา</a></li>
                                <li class="col-xs-12">&nbsp;<a href="{{url('faq')}}">คำถามที่พบบ่อย</a></li>
                                <li class="col-xs-12">&nbsp;<a href="{{url('contact')}}">ติดต่อ</a></li>
                             
                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                            <h2>Recommended Tours</h2>
                            <ul class="discover hover">
                                <li>
                                   <a href="javascript:void(0);">ทัวร์ 3 เกาะของระนอง</a>
                                </li>
                                <li>
                                   <a href="javascript:void(0);">ทัวร์ 3 เกาะของระนอง</a>
                                </li>
                                <li>
                                   <a href="javascript:void(0);">ทัวร์ 3 เกาะของระนอง</a>
                                </li>
                                <li>
                                   <a href="javascript:void(0);">ทัวร์ 3 เกาะของระนอง</a>
                                </li>
                                <li>
                                   <a href="javascript:void(0);">ทัวร์ 3 เกาะของระนอง</a>
                                </li>
                                
                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">

                            <script>(function(d, s, id) {
                              var js, fjs = d.getElementsByTagName(s)[0];
                              if (d.getElementById(id)) return;
                              js = d.createElement(s); js.id = id;
                              js.src = "//connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v2.8";
                              fjs.parentNode.insertBefore(js, fjs);
                            }(document, 'script', 'facebook-jssdk'));</script>
                            <h2>Facebook</h2>
                            <div class="fb-page" data-href="https://www.facebook.com/mamybooking"  data-height="245" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" ><blockquote cite="https://www.facebook.com/mamybooking" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/mamybooking">Mamy Booking</a></blockquote></div>
                           
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                            <h2>Contact</h2>
                            <ul class="discover hover row">
                                <li class="col-xs-12"><i class="icons fa fa-map-marker"></i> &nbsp;&nbsp;161/76 หมู่ที่ 11 ตำบลหนองปรือ อำเภอบางละมุง จังหวัดชลบุรี</li>
                                <li class="col-xs-12">Sign up for our mailing list to get latest updates and offers</li>
                                <li class="col-xs-12">
                                    <form method="post" class="quick-search">
                                        <div class="icon-check">
                                            <input type="text" class="input-text full-width" placeholder="your email" />
                                        </div>
                                    </form>
                                </li>
                            </ul>
                            <br />
                            <address class="contact-details">
                                <span class="contact-phone"><i class="soap-icon-phone"></i> 081-305-3355</span>
                                <br />
                                <a href="mailto:mamybooking@gmail.com" class="contact-email"> &nbsp;&nbsp;mamybooking@gmail.com</a>
                            </address>
                            <ul class="social-icons clearfix">
                                <li class="twitter"><a title="twitter" href="#" data-toggle="tooltip"><i class="soap-icon-twitter"></i></a></li>
                                <li class="googleplus"><a title="googleplus" href="#" data-toggle="tooltip"><i class="soap-icon-googleplus"></i></a></li>
                                <li class="facebook"><a title="facebook" href="#" data-toggle="tooltip"><i class="soap-icon-facebook"></i></a></li>
                                <li class="linkedin"><a title="linkedin" href="#" data-toggle="tooltip"><i class="soap-icon-linkedin"></i></a></li>
                                <li class="vimeo"><a title="vimeo" href="#" data-toggle="tooltip"><i class="soap-icon-vimeo"></i></a></li>
                                <li class="dribble"><a title="dribble" href="#" data-toggle="tooltip"><i class="soap-icon-dribble"></i></a></li>
                                <li class="flickr"><a title="flickr" href="#" data-toggle="tooltip"><i class="soap-icon-flickr"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom gray-area">
                <div class="container">
                    <div class="logo pull-left">
                        <a href="index.html" title="Travelo - home">
                            <img src="images/logo.png" alt="Travelo HTML5 Template" />
                        </a>
                    </div>
                    <div class="pull-right">
                        <a id="back-to-top" href="#" class="animated" data-animation-type="bounce"><i class="soap-icon-longarrow-up circle"></i></a>
                    </div>
                    <div class="copyright pull-right">
                        <p>&copy; 2014 Travelo</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>


    <!-- Javascript -->
    <script type="text/javascript" src="{{asset('js/jquery-1.11.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.noconflict.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/modernizr.2.7.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery-migrate-1.2.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.placeholder.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery-ui.1.10.4.min.js')}}"></script>
    
    <!-- Twitter Bootstrap -->
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
    
    <!-- load revolution slider scripts -->
    <script type="text/javascript" src="{{asset('components/revolution_slider/js/jquery.themepunch.tools.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('components/revolution_slider/js/jquery.themepunch.revolution.min.js')}}"></script>
    
    <!-- load BXSlider scripts -->
    <script type="text/javascript" src="{{asset('components/jquery.bxslider/jquery.bxslider.min.js')}}"></script>

    <!-- Flex Slider -->
    <script type="text/javascript" src="{{asset('components/flexslider/jquery.flexslider.js')}}"></script>

    <!-- parallax -->
    <script type="text/javascript" src="{{asset('js/jquery.stellar.min.js')}}"></script>
    
    <!-- parallax -->
    <script type="text/javascript" src="{{asset('js/jquery.stellar.min.js')}}"></script>

    <!-- waypoint -->
    <script type="text/javascript" src="{{asset('js/waypoints.min.js')}}"></script>

    <!-- load page Javascript -->
    <script type="text/javascript" src="{{asset('js/theme-scripts.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/scripts.js')}}"></script>

    <!-- Select -->
    <script type="text/javascript" src="{{asset('js/bootstrap-select.min.js')}}"></script>

    @yield('script')
    
    <script type="text/javascript">
        tjq(document).ready(function() {
            tjq('.revolution-slider').revolution(
            {
                sliderType:"standard",
                sliderLayout:"auto",
                dottedOverlay:"none",
                delay:9000,
                navigation: {
                    keyboardNavigation:"off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation:"off",
                    mouseScrollReverse:"default",
                    onHoverStop:"on",
                    touch:{
                        touchenabled:"on",
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    }
                    ,
                    arrows: {
                        style:"default",
                        enable:true,
                        hide_onmobile:false,
                        hide_onleave:false,
                        tmp:'',
                        left: {
                            h_align:"left",
                            v_align:"center",
                            h_offset:20,
                            v_offset:0
                        },
                        right: {
                            h_align:"right",
                            v_align:"center",
                            h_offset:20,
                            v_offset:0
                        }
                    }
                },
                visibilityLevels:[1240,1024,778,480],
                gridwidth:1170,
                gridheight:646,
                lazyType:"none",
                shadow:0,
                spinner:"spinner4",
                stopLoop:"off",
                stopAfterLoops:-1,
                stopAtSlide:-1,
                shuffle:"off",
                autoHeight:"off",
                hideThumbsOnMobile:"off",
                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                debugMode:false,
                fallbacks: {
                    simplifyAll:"off",
                    nextSlideOnWindowFocus:"off",
                    disableFocusListener:false,
                }
            });
        });
    </script>
</body>
</html>

