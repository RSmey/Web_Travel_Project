<!-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Hsoft">
    <meta name="MobileOptimized" content="320">
    
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Let's Travel</title>

    
    <script src="{{ asset('js/app.js') }}" defer></script>

    
    <link rel="{{ asset('dns-prefetch')}}" href="https://fonts.gstatic.com">
    <link href="{{ asset('https://fonts.googleapis.com/css?family=Nunito')}}" rel="stylesheet" type="text/css">

    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <link rel="icon" type="image/icon" href="{{ asset('favicon.png')}}">
    
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('css/fonts.css')}}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{ asset('css/custom-animation.css')}}">
    <link rel="stylesheet" href="{{ asset('js/plugin/owl/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('js/plugin/owl/owl.theme.css')}}">
    <link rel="stylesheet" href="{{ asset('js/plugin/magnific/magnific-popup.css')}}">
    <link href="{{ asset('js/plugin/revolution/css/settings.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('js/plugin/revolution/css/layers.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('js/plugin/revolution/css/navigation.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
</head>
<body> -->
        <div class="loader_wrapper">
            <div class='loader'>
                <img src="images/loader.gif" alt="loader">	
            </div>
        </div>
        <!--Top bar start-->
        <div class="cy_top_wrapper">
            <div class="cy_top_info">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="cy_top_detail">
                                <ul>
                                    <li><a href="#">EMAIL: Info@yourmail.com</a></li>
                                    <li>PHONE: 18009001010</li>
                                    <li>
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-tumblr" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </li>
                                    <li class="cart"><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                        <span>2</span></a>
                                        <ul class="cart_box">
                                            <li>
                                                <div class="cart_section">
                                                    <div class="cart_img">
                                                        <a href="#"><img src="images/cart/1.jpg" alt="cart" class="img-fluid"></a>
                                                    </div>
                                                    <div class="cart_detail">
                                                        <h4><a href="cart.html">Road Bicycle</a></h4>
                                                        <h5>$2200</h5>
                                                    </div>
                                                    <a class="cart_delete"><i class="fa fa-times" aria-hidden="true"></i></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="cart_section">
                                                    <div class="cart_img">
                                                        <a href="#"><img src="images/cart/2.jpg" alt="cart" class="img-fluid"></a>
                                                    </div>
                                                    <div class="cart_detail">
                                                        <h4><a href="cart.html">Road Bicycle</a></h4>
                                                        <h5>$2500</h5>
                                                    </div>
                                                    <a class="cart_delete"><i class="fa fa-times" aria-hidden="true"></i></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="cart_section">
                                                    <div class="cart_total">
                                                        <h4>Total<span>$4700</span></h4>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="cart_section">
                                                    <a href="cart.html" class="cy_button">view cart</a>
                                                    <a href="checkout.html" class="cy_button">Checkout</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- sign icons -->
        <div class="cy_sign_wrapper">
            <h2 class="signin"><i class="fa fa-sign-in" aria-hidden="true"></i><a href="#signin" data-toggle="modal">Sign In</a></h2>
            <h2 class="signup"><i class="fa fa-user-plus" aria-hidden="true"></i><a href="#signup" data-toggle="modal">Sign Up</a></h2>
        </div>
        <!-- sign in modal -->
        <div class="modal" id="signin">
            <div class="cy_signin">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="cy_sign_img">
                            <img src="images/popup.jpg" alt="popup" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="cy_sign_form">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h1>Sign In</h1>
                            <input type="text" placeholder="Username" class="form-control">
                            <input type="password" placeholder="Password" class="form-control">
                            <div class="forget_password">
                                <div class="remember_checkbox">
                                    <label>Keep me signed in
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <a href="#">Forgot Password ?</a>
                            </div>
                            <a href="#" class="cy_button">sign in</a>
                            <p>Dont Have An Account? <a href="#signup" data-toggle="modal" class="cy_modal">Sign Up</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- sign up modal -->
        <div class="modal" id="signup">
            <div class="cy_signup">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="cy_sign_img">
                            <img src="images/popup.jpg" alt="popup" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="cy_sign_form">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h1>Sign up</h1>
                            <input type="text" placeholder="Username" class="form-control">
                            <input type="text" placeholder="Email or Phone" class="form-control">
                            <input type="password" placeholder="Password" class="form-control">
                            <a href="#" class="cy_button">register</a>
                            <p>Already Have An Account? <a href="#">Sign In</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Banner section start-->
        <div class="cy_banner_wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div id="rev_slider_1068_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="levano4export" data-source="gallery" style="background-color:transparent;padding:0px;">
                        <div id="rev_slider_1068_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.3.0.2">
                            <ul>
                                <li data-index="rs-1596" data-transition="zoomout" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="500" data-thumb="" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="1000" data-fsslotamount="7" data-saveperformance="off" data-title="Intro" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                    <!-- MAIN IMAGE -->
                                    <img src="js/plugin/revolution/assets/main_banner.jpg" alt="banner" data-bgposition="center center" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 -500" data-offsetend="0 500" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                                    <!-- LAYERS -->

                                    <!-- LAYER NR. 1 -->
                                    <div class="tp-caption NotGeneric-Title   tp-resizeme" id="slide-1596-layer-1" data-x="['left','left','left','left']" data-hoffset="['-110','50','50','50']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-fontsize="['65','55','45','45']" data-lineheight="['85','55','50','50']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];","speed":2500,"to":"o:1;","delay":1000,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;","ease":"Power2.easeInOut"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[10,10,10,10]" data-paddingright="[0,0,0,0]" data-paddingbottom="[10,10,10,10]" data-paddingleft="[0,20,20,20]" style="z-index: 5; white-space: nowrap;text-transform:left;color:#ffffff;font-family: 'Montserrat', sans-serif;text-shadow: 0px 2px 10px rgba(0, 0, 0, 0.2);text-transform:uppercase;">EXTREME
                                        <br>MOUNTAIN BIKE <br>ENTHUSIASTS
                                    </div>
                                </li>
                                <!--slide2-->
                                <li data-index="rs-3010" data-transition="zoom" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="1000" data-thumb="" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="1000" data-fsslotamount="7" data-saveperformance="off" data-title="Intro" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                    <!-- MAIN IMAGE -->
                                    <img src="js/plugin/revolution/assets/main_banner1.jpg" alt="banner" data-bgposition="center center" data-kenburns="on" data-duration="2000" data-ease="Power2.easeOut" data-scalestart="110" data-scaleend="100" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 500" data-offsetend="0 -500" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                                    <!-- LAYERS -->

                                    <!-- LAYER NR. 1 -->
                                    <div class="tp-caption NotGeneric-Title   tp-resizeme" id="slide-1596-layer-2" data-x="['left','left','left','left']" data-hoffset="['-110','50','50','50']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-fontsize="['65','55','45','45']" data-lineheight="['85','55','50','50']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];","speed":2500,"to":"o:1;","delay":500,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;","ease":"Power2.easeInOut"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[10,10,10,10]" data-paddingright="[0,0,0,0]" data-paddingbottom="[10,10,10,10]" data-paddingleft="[0,20,20,20]" style="z-index: 5; white-space: nowrap;text-transform:left;color:#ffffff;font-family: 'Montserrat', sans-serif;text-shadow: 0px 2px 10px rgba(0, 0, 0, 0.2);text-transform:uppercase;">for those, who <br>are interested in <br> bicycle riding
                                    </div>      
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Menus Start-->
        <div class="cy_menu_wrapper">
            <div class="cy_logo_box">
                <a href="index.html"><img src="images/logo.png" alt="logo" class="img-fluid"/></a>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <button class="cy_menu_btn">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </button>
                        <div class="cy_menu">
                            <nav>
                                <ul>
                                    <li><a href="index.html" class="active">home</a></li>
                                    <li><a href="about.html">about</a></li>
                                    <li class="dropdown"><a href="javascript:;">event</a>
                                        <ul class="sub-menu">
                                            <li><a href="event.html">event</a></li>
                                            <li><a href="event_single.html">event single</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="javascript:;">blog</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog.html">blog</a></li>
                                            <li><a href="blog_single.html">blog single</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="javascript:;">pages</a>
                                        <ul class="sub-menu">
                                            <li><a href="shop.html">shop</a></li>
                                            <li><a href="shop_single.html">shop single</a></li>
                                            <li><a href="cart.html">cart</a></li>
                                            <li><a href="checkout.html">checkout</a></li>
                                            <li><a href="404.html">404</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="gallery.html">gallery</a></li>
                                    <li><a href="contact.html">contact us</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="cy_search">
                            <a href="#" class="search_open"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- search section -->
        <div class="cy_search_form">
            <button class="search_close"><i class="fa fa-times"></i></button>
            <div class="cy_search_input">
            <input type="search" placeholder="search">
            <i class="fa fa-search"></i>
            </div>
        </div>

<!-- </body>
</html> -->