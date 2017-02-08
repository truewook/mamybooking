<!DOCTYPE html>
<!--[if IE 8]>          <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>          <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->  <html> <!--<![endif]-->
<head>
    <!-- Page Title -->
    <title>Travelo - Travel, Tour Booking HTML5 Template</title>
    
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Travelo - Travel, Tour Booking HTML5 Template">
    <meta name="author" content="SoapTheme">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}" type="image/x-icon">
    
    <!-- Theme Styles -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
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

    <!-- Javascript Page Loader -->
    <!-- <script type="text/javascript" src="{{asset('js/pace.min.js')}}" data-pace-options='{ "ajax": false }'></script> -->
    <!-- <script type="text/javascript" src="{{asset('js/page-loading.js')}}"></script> -->
</head>
<body>
     <div id="page-wrapper">
        <header id="header" class="navbar-static-top style4">
            <div class="container">
                <h1 class="logo navbar-brand">
                    <a href="{{url('/')}}" title="mamybooking home">
                        <img src="{{asset('images/logo-02-01.png')}}" width="auto" height="50" alt="mamybooking logo" />
                    </a>
                </h1>
                
                <div class="pull-right hidden-mobile">
                    <form method="post" class="quick-search">
                        <div class="with-icon">
                            <input type="text" class="input-text" value="" name="q" placeholder="SEARCH" />
                            <button class="icon" type="submit"><i class="soap-icon-search"></i></button>
                        </div>
                    </form>
                    <button class="btn-medium blue-bg soap-popupbox" data-target="#travelo-signup">สมัครสมาชิก</button>
                    <button class="btn-medium soap-popupbox" data-target="#travelo-login">เข้าสู่ระบบ</button>
                </div>
            </div>
            <a href="#mobile-menu-01" data-toggle="collapse" class="mobile-menu-toggle">
                Mobile Menu Toggle
            </a>
            
            <div class="main-navigation">
                <div class="container">
                    <nav id="main-menu" role="navigation">
                        <ul class="menu">
                            <li class="menu-item active">
                                <a href="{{url('/')}}"><b>หน้าแรก</b></a>
                            </li>
                            <li class="menu-item">
                                <a href="{{url('tour')}}"><b>ทริปท่องเที่ยว</b></a>
                            </li>
                            <li class="menu-item">
                                <a href="{{url('car')}}"><b>รถเช่า</b></a>
                            </li>
                            <li class="menu-item">
                                <a href="{{url('about')}}"><b>เกี่ยวกับเรา</b></a>
                            </li>
                            <li class="menu-item">
                                <a href="{{url('faq')}}"><b>คำถามที่พบบ่อย</b></a>
                            </li>
                            <li class="menu-item">
                                <a href="{{url('contact')}}"><b>ติดต่อ</b></a>
                            </li>
                            
                        </ul>
                    </nav>
                    <div class="topnav">
                        <ul class="quick-menu pull-right clearfix">
                            <li><a href="#">ACCOUNT</a></li>
                            <li class="ribbon">
                                <a href="#" class="lang-flag en-us">Eng</a>
                                <ul class="menu mini">
                                    <li class="active"><a href="#" title="English" class="lang-flag en-us">English (US)</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <nav id="mobile-menu-01" class="mobile-menu collapse">
                <ul id="mobile-primary-menu" class="menu">
                    <li class="menu-item active">
                        <a href="{{url('/')}}"><b>หน้าแรก</b></a>
                    </li>
                    <li class="menu-item">
                        <a href="{{url('tour')}}"><b>ทริปท่องเที่ยว</b></a>
                    </li>
                    <li class="menu-item">
                        <a href="{{url('car')}}"><b>รถเช่า</b></a>
                    </li>
                    <li class="menu-item">
                        <a href="{{url('about')}}"><b>เกี่ยวกับเรา</b></a>
                    </li>
                    <li class="menu-item">
                                <a href="{{url('faq')}}"><b>คำถามที่พบบ่อย</b></a>
                            </li>
                    <li class="menu-item">
                        <a href="{{url('contact')}}"><b>ติดต่อ</b></a>
                    </li>
                </ul>
                
                <ul class="mobile-topnav container">
                    <li><a href="#">MY ACCOUNT</a></li>
                    <li class="ribbon language menu-color-skin">
                        <a href="#" data-toggle="collapse">ENGLISH</a>
                        <ul class="menu mini">
                            <li><a href="#" title="Dansk">Dansk</a></li>
                            <li><a href="#" title="Deutsch">Deutsch</a></li>
                            <li class="active"><a href="#" title="English">English</a></li>
                            <li><a href="#" title="Español">Español</a></li>
                            <li><a href="#" title="Français">Français</a></li>
                            <li><a href="#" title="Italiano">Italiano</a></li>
                            <li><a href="#" title="Magyar">Magyar</a></li>
                            <li><a href="#" title="Nederlands">Nederlands</a></li>
                            <li><a href="#" title="Norsk">Norsk</a></li>
                            <li><a href="#" title="Polski">Polski</a></li>
                            <li><a href="#" title="Português">Português</a></li>
                            <li><a href="#" title="Suomi">Suomi</a></li>
                            <li><a href="#" title="Svenska">Svenska</a></li>
                        </ul>
                    </li>
                    <li><a href="#travelo-login" class="soap-popupbox">LOGIN</a></li>
                    <li><a href="#travelo-signup" class="soap-popupbox">SIGNUP</a></li>
                    <li class="ribbon currency menu-color-skin">
                        <a href="#">USD</a>
                        <ul class="menu mini">
                            <li><a href="#" title="AUD">AUD</a></li>
                            <li><a href="#" title="BRL">BRL</a></li>
                            <li class="active"><a href="#" title="USD">USD</a></li>
                            <li><a href="#" title="CAD">CAD</a></li>
                            <li><a href="#" title="CHF">CHF</a></li>
                            <li><a href="#" title="CNY">CNY</a></li>
                            <li><a href="#" title="CZK">CZK</a></li>
                            <li><a href="#" title="DKK">DKK</a></li>
                            <li><a href="#" title="EUR">EUR</a></li>
                            <li><a href="#" title="GBP">GBP</a></li>
                            <li><a href="#" title="HKD">HKD</a></li>
                            <li><a href="#" title="HUF">HUF</a></li>
                            <li><a href="#" title="IDR">IDR</a></li>
                        </ul>
                    </li>
                </ul>
                
            </nav>
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
                    <a href="#" class="button login-facebook"><i class="soap-icon-facebook"></i>Login with Facebook</a>
                    <a href="#" class="button login-googleplus"><i class="soap-icon-googleplus"></i>Login with Google+</a>
                </div>
                <div class="seperator"><label>OR</label></div>
                <form>
                    <div class="form-group">
                        <input type="text" class="input-text full-width" placeholder="email address">
                    </div>
                    <div class="form-group">
                        <input type="password" class="input-text full-width" placeholder="password">
                    </div>
                    <div class="form-group">
                        <a href="#" class="forgot-password pull-right">Forgot password?</a>
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

