@extends('layouts.app')
@section('content')

    @include('layouts.header.header')

    <!--About section start-->
    <div class="cy_about_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12">
                    <div class="cy_about_img">
                        <img src="images/about/about.png" alt="about" class="img-fluid"/>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12">
                    <div class="cy_about_data">
                        <h1 class="cy_heading">ABOUT US</h1>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary.</p>
                        <a href="#" class="cy_button">read more f**k more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Team section start-->
    <div class="cy_team_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1 class="cy_heading">meet our team</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="cy_team_box">
                        <img src="images/team/team1.jpg" alt="team" class="img-fluid" />
                        <div class="cy_team_overlay">
                            <div class="cy_team_text">
                                <h2><a href="#">Max Burton</a></h2>
                                <p>Head Coach</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="cy_team_box">
                        <img src="images/team/team2.jpg" alt="team" class="img-fluid" />
                        <div class="cy_team_overlay">
                            <div class="cy_team_text">
                                <h2><a href="#">Norick Abe</a></h2>
                                <p>Head Coach</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="cy_team_box">
                        <img src="images/team/team3.jpg" alt="team" class="img-fluid" />
                        <div class="cy_team_overlay">
                            <div class="cy_team_text">
                                <h2><a href="#">Shuja Arai</a></h2>
                                <p>Head Coach</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="cy_team_box">
                        <img src="images/team/team4.jpg" alt="team" class="img-fluid" />
                        <div class="cy_team_overlay">
                            <div class="cy_team_text">
                                <h2><a href="#">John Ashmead</a></h2>
                                <p>Head Coach</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Achievements section start-->
    <div class="cy_achieve_wrapper">
        <div class="cy_achieve_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="cy_achieve_img wow cy_anim_left">
                        <img src="images/achieve/cycle.png" alt="achievement" class="img-fluid" />
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 cy_counter_wrapper">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <h1 class="cy_heading">Our Achievement</h1>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="cy_count_box">
                                <img src="images/svg/miles-driven.svg" alt="counter">
                                <h1 class="cy_counter_num" data-to="5000" data-speed="1500">5000</h1>
                                <p>Miles Driven</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="cy_count_box">
                                <img src="images/svg/club-members.svg" alt="counter">
                                <h1 class="cy_counter_num" data-to="150" data-speed="1500">150</h1>
                                <p>Club Members</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="cy_count_box">
                                <img src="images/svg/award-won.svg" alt="counter">
                                <h1 class="cy_counter_num" data-to="16" data-speed="1500">16</h1>
                                <p>award Won</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Gallery section css start-->
    <div class="cy_gallery_wrapper cy_section_padding padder_bottom70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1 class="cy_heading">Our gallery</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="cy_gal_img">
                        <img src="images/gallery/gal_img1.jpg" alt="gallery" class="img-fluid" />
                        <div class="img_gal_ovrly"></div>
                        <div class="gal_buttons">
                            <a href="images/gallery/gal_big1.jpg" class="fa fa-search"></a>
                            <a href="#" class="fa fa-link"></a>
                        </div>
                    </div>
                    <div class="cy_gal_img">
                        <img src="images/gallery/gal_img2.jpg" alt="gallery" class="img-fluid" />
                        <div class="img_gal_ovrly"></div>
                        <div class="gal_buttons">
                            <a href="images/gallery/gal_big2.jpg" class="fa fa-search"></a>
                            <a href="#" class="fa fa-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="cy_gal_img">
                        <img src="images/gallery/gal_img3.jpg" alt="gallery" class="img-fluid" />
                        <div class="img_gal_ovrly"></div>
                        <div class="gal_buttons">
                            <a href="images/gallery/gal_big3.jpg" class="fa fa-search"></a>
                            <a href="#" class="fa fa-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="row">
                        <div class="col-mg-6 col-md-6">
                            <div class="cy_gal_img">
                                <img src="images/gallery/gal_img4.jpg" alt="gallery" class="img-fluid" />
                                <div class="img_gal_ovrly"></div>
                                <div class="gal_buttons">
                                    <a href="images/gallery/gal_big4.jpg" class="fa fa-search"></a>
                                    <a href="#" class="fa fa-link"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="cy_gal_img">
                                <img src="images/gallery/gal_img5.jpg" alt="gallery" class="img-fluid" />
                                <div class="img_gal_ovrly"></div>
                                <div class="gal_buttons">
                                    <a href="images/gallery/gal_big5.jpg" class="fa fa-search"></a>
                                    <a href="#" class="fa fa-link"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="cy_gal_img">
                                <img src="images/gallery/gal_img6.jpg" alt="gallery" class="img-fluid" />
                                <div class="img_gal_ovrly"></div>
                                <div class="gal_buttons">
                                    <a href="images/gallery/gal_big6.jpg" class="fa fa-search"></a>
                                    <a href="#" class="fa fa-link"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Cycle Tour section start-->
    <div class="cy_tour_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7">
                    <div class="cy_tour_data">
                        <h1>JOIN THE 2018 CYCLE TOUR OR OUR BICYCLE TEAM!</h1>
                        <a href="#" class="cy_button">read more</a>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5">
                    <div class="cy_tour_heading">
                        <h1>join our club</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Events Sevtion Start-->
    <div class="cy_event_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1 class="cy_heading">Upcoming Event</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="cy_event_box">
                        <div class="cy_event_img">
                            <img src="images/event/event1.jpg" alt="event" class="img-fluid" />
                            <div class="cy_event_detail">
                                <div class="cy_event_time">
                                    <ul>
                                        <li><i><img src="images/svg/clock.svg" alt="event time"></i> 12:00 PM to 5:00PM</li>
                                        <li><i><img src="images/svg/map.svg" alt="event address"></i>Northumberland</li>
                                    </ul>
                                </div>
                                <div class="cy_event_date">
                                    <span class="ev_date">08 nov</span>
                                    <span class="ev_yr">2018</span>
                                </div>
                            </div>
                        </div>
                        <div class="cy_event_data">
                            <h2><a href="event_single.html">Northumberland Cycling Event 2018</a></h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
                            <a href="event_single.html" class="cy_button">read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="cy_event_box">
                        <div class="cy_event_img">
                            <img src="images/event/event2.jpg" alt="event" class="img-fluid" />
                            <div class="cy_event_detail">
                                <div class="cy_event_time">
                                    <ul>
                                        <li><i><img src="images/svg/clock.svg" alt="event time"></i> 12:00 PM to 5:00PM</li>
                                        <li><i><img src="images/svg/map.svg" alt="event address"></i>Northumberland</li>
                                    </ul>
                                </div>
                                <div class="cy_event_date">
                                    <span class="ev_date">08 nov</span>
                                    <span class="ev_yr">2018</span>
                                </div>
                            </div>
                        </div>
                        <div class="cy_event_data">
                            <h2><a href="event_single.html">Tour de Felasco 2018</a></h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
                            <a href="event_single.html" class="cy_button">read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="cy_event_box">
                        <div class="cy_event_img">
                            <img src="images/event/event3.jpg" alt="event" class="img-fluid" />
                            <div class="cy_event_detail">
                                <div class="cy_event_time">
                                    <ul>
                                        <li><i><img src="images/svg/clock.svg" alt="event time"></i> 12:00 PM to 5:00PM</li>
                                        <li><i><img src="images/svg/map.svg" alt="event address"></i>Northumberland</li>
                                    </ul>
                                </div>
                                <div class="cy_event_date">
                                    <span class="ev_date">08 nov</span>
                                    <span class="ev_yr">2018</span>
                                </div>
                            </div>
                        </div>
                        <div class="cy_event_data">
                            <h2><a href="event_single.html">Covered Bridges Ride 2018</a></h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
                            <a href="event_single.html" class="cy_button">read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Our sponsors section start-->
    <div class="cy_sponsors_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="cy_ride_text">
                        <h3>Next Ride Start at</h3>
                        <h2>April 20, 2018 - 10:30 Am</h2>
                        <a href="#" class="cy_button">read more</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="cy_sponsor_slider cy_section_padding">
                        <h1 class="cy_heading">our sponsors</h1>
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <img src="images/sponsors/brand1.png" alt="sponsor" />
                            </div>
                            <div class="item">
                                <img src="images/sponsors/brand2.png" alt="sponsor" />
                            </div>
                            <div class="item">
                                <img src="images/sponsors/brand3.png" alt="sponsor" />
                            </div>
                            <div class="item">
                                <img src="images/sponsors/brand4.png" alt="sponsor" />
                            </div>
                            <div class="item">
                                <img src="images/sponsors/brand1.png" alt="sponsor" />
                            </div>
                            <div class="item">
                                <img src="images/sponsors/brand2.png" alt="sponsor" />
                            </div>
                            <div class="item">
                                <img src="images/sponsors/brand3.png" alt="sponsor" />
                            </div>
                            <div class="item">
                                <img src="images/sponsors/brand4.png" alt="sponsor" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--upcoming races section Start-->
    <div class="cy_races_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1 class="cy_heading">Upcoming races</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="cy_races_box">
                        <div class="cy_races_img">
                            <img src="images/races/1.jpg" alt="races" class="img-fluid">
                            <div class="cy_races_img_overlay">
                                <h4>08<br>NOV</h4>
                            </div>
                        </div>
                        <div class="cy_races_data">
                            <h2><a href="#">Northumberland Race 2018</a></h2>
                            <ul>
                                <li><a href="#"><img src="images/svg/map-mark.svg" alt="event address">Northumberland</a></li>
                                <li><a href="#"><img src="images/svg/clock2.svg" alt="event time">12:00 PM</a></li>
                            </ul>
                            <p>Lorem Ipsum is simply dummy text of the printing.</p>
                            <a href="#" class="cy_button">book now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="cy_races_box">
                        <div class="cy_races_img">
                            <img src="images/races/2.jpg" alt="races" class="img-fluid">
                            <div class="cy_races_img_overlay">
                                <h4>08<br>NOV</h4>
                            </div>
                        </div>
                        <div class="cy_races_data">
                            <h2><a href="#">Northumberland Race 2018</a></h2>
                            <ul>
                                <li><a href="#"><img src="images/svg/map-mark.svg" alt="event address">Northumberland</a></li>
                                <li><a href="#"><img src="images/svg/clock2.svg" alt="event time">12:00 PM</a></li>
                            </ul>
                            <p>Lorem Ipsum is simply dummy text of the printing.</p>
                            <a href="#" class="cy_button">book now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="cy_races_box">
                        <div class="cy_races_img">
                            <img src="images/races/3.jpg" alt="races" class="img-fluid">
                            <div class="cy_races_img_overlay">
                                <h4>08<br>NOV</h4>
                            </div>
                        </div>
                        <div class="cy_races_data">
                            <h2><a href="#">Northumberland Race 2018</a></h2>
                            <ul>
                                <li><a href="#"><img src="images/svg/map-mark.svg" alt="event address">Northumberland</a></li>
                                <li><a href="#"><img src="images/svg/clock2.svg" alt="event time">12:00 PM</a></li>
                            </ul>
                            <p>Lorem Ipsum is simply dummy text of the printing.</p>
                            <a href="#" class="cy_button">book now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="cy_races_box">
                        <div class="cy_races_img">
                            <img src="images/races/4.jpg" alt="races" class="img-fluid">
                            <div class="cy_races_img_overlay">
                                <h4>08<br>NOV</h4>
                            </div>
                        </div>
                        <div class="cy_races_data">
                            <h2><a href="#">Northumberland Race 2018</a></h2>
                            <ul>
                                <li><a href="#"><img src="images/svg/map-mark.svg" alt="event address">Northumberland</a></li>
                                <li><a href="#"><img src="images/svg/clock2.svg" alt="event time">12:00 PM</a></li>
                            </ul>
                            <p>Lorem Ipsum is simply dummy text of the printing.</p>
                            <a href="#" class="cy_button">book now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--result section start-->
    <div class="cy_result_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="cy_result_text">
                        <h3>Previous Race Results</h3>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="cy_result_slider">
                        <h4 class="cy_heading">Northumberland Race 2018</h4>
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="cy_result_box">
                                    <div class="cy_result_icon">
                                        <img src="images/result.svg" alt="result">
                                    </div>
                                    <div class="cy_result_data">
                                        <h1>1</h1>
                                        <h4><span>st</span>Lauren Harris - 1 hr 24 min 48 sec</h4>
                                    </div>
                                </div>
                                <div class="cy_result_box">
                                    <div class="cy_result_icon">
                                        <img src="images/result.svg" alt="result">
                                    </div>
                                    <div class="cy_result_data">
                                        <h1>2</h1>
                                        <h4><span>nd</span>Eric Dickens - 1 hr 18 min 11 sec</h4>
                                    </div>
                                </div>
                                <div class="cy_result_box">
                                    <div class="cy_result_icon">
                                        <img src="images/result.svg" alt="result">
                                    </div>
                                    <div class="cy_result_data">
                                        <h1>3</h1>
                                        <h4><span>rd</span>Harry Russell - 1 hr 04 min 37 sec</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="cy_result_box">
                                    <div class="cy_result_icon">
                                        <img src="images/result.svg" alt="result">
                                    </div>
                                    <div class="cy_result_data">
                                        <h1>4</h1>
                                        <h4><span>th</span>Lauren Harris - 1 hr 02 min 48 sec</h4>
                                    </div>
                                </div>
                                <div class="cy_result_box">
                                    <div class="cy_result_icon">
                                        <img src="images/result.svg" alt="result">
                                    </div>
                                    <div class="cy_result_data">
                                        <h1>5</h1>
                                        <h4><span>th</span>Eric Dickens -  58 min 49 sec</h4>
                                    </div>
                                </div>
                                <div class="cy_result_box">
                                    <div class="cy_result_icon">
                                        <img src="images/result.svg" alt="result">
                                    </div>
                                    <div class="cy_result_data">
                                        <h1>6</h1>
                                        <h4><span>th</span>Harry Russell - 58 min 40 sec</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Store section start-->
    <div class="cy_store_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1 class="cy_heading">to our store</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="cy_store_slider">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="cy_store_box">
                                    <div class="cy_store_img">
                                        <a href="shop_single.html"><img src="images/store/1.jpg" alt="store" class="img-fluid"></a>
                                        <div class="cy_store_img_overlay">
                                            <p>Sale</p>
                                        </div>
                                    </div>
                                    <div class="cy_store_data">
                                        <div class="cy_store_text">
                                            <h3><a href="shop_single.html">Road Bicycles</a></h3>
                                            <ul>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star-half-o" aria-hidden="true"></i></li>
                                            </ul>
                                        </div>
                                        <a href="cart.html" class="cy_button" data-hover="Add to Cart"><span>$2500</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="cy_store_box">
                                    <div class="cy_store_img">
                                        <a href="shop_single.html"><img src="images/store/2.jpg" alt="store" class="img-fluid"></a>
                                    </div>
                                    <div class="cy_store_data">
                                        <div class="cy_store_text">
                                            <h3><a href="shop_single.html">Road Bicycles</a></h3>
                                            <ul>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            </ul>
                                        </div>
                                        <a href="cart.html" class="cy_button" data-hover="Add to Cart"><span>$2500</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="cy_store_box">
                                    <div class="cy_store_img">
                                        <a href="shop_single.html"><img src="images/store/3.jpg" alt="store" class="img-fluid"></a> 
                                    </div>
                                    <div class="cy_store_data">
                                        <div class="cy_store_text">
                                            <h3><a href="shop_single.html">Road Bicycles</a></h3>
                                            <ul>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star-half-o" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                            </ul>
                                        </div>
                                        <a href="cart.html" class="cy_button" data-hover="Add to Cart"><span>$2500</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="cy_store_box">
                                    <div class="cy_store_img">
                                        <a href="shop_single.html"><img src="images/store/4.jpg" alt="store" class="img-fluid"></a>
                                        <div class="cy_store_img_overlay">
                                            <p>Sale</p>
                                        </div>
                                    </div>
                                    <div class="cy_store_data">
                                        <div class="cy_store_text">
                                            <h3><a href="shop_single.html">Road Bicycles</a></h3>
                                            <ul>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star-half-o" aria-hidden="true"></i></li>
                                            </ul>
                                        </div>
                                        <a href="cart.html" class="cy_button" data-hover="Add to Cart"><span>$2500</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="cy_store_box">
                                    <div class="cy_store_img">
                                        <a href="shop_single.html"><img src="images/store/5.jpg" alt="store" class="img-fluid"></a>
                                    </div>
                                    <div class="cy_store_data">
                                        <div class="cy_store_text">
                                            <h3><a href="shop_single.html">Road Bicycles</a></h3>
                                            <ul>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            </ul>
                                        </div>
                                        <a href="cart.html" class="cy_button" data-hover="Add to Cart"><span>$2500</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Prices section start-->
    <div class="cy_price_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1 class="cy_heading">fee structure & Races</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="cy_price_box">
                        <div class="cy_price_head">
                            <h3>short</h3>
                            <h1>$30</h1>
                        </div>
                        <div class="cy_price_body">
                            <ul>
                                <li>Solo</li>
                                <li>Length: 20 km</li>
                                <li>120 Member</li>
                                <li>Accessories</li>
                            </ul>
                            <div class="cy_price_btn">
                                <a href="#" class="cy_button">register now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="cy_price_box">
                        <div class="cy_price_head">
                            <h3>medium</h3>
                            <h1>$50</h1>
                        </div>
                        <div class="cy_price_body">
                            <ul>
                                <li>Solo</li>
                                <li>Length: 40 km</li>
                                <li>100 Member</li>
                                <li>Accessories</li>
                            </ul>
                            <div class="cy_price_btn">
                                <a href="#" class="cy_button">register now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="cy_price_box">
                        <div class="cy_price_head">
                            <h3>long</h3>
                            <h1>$80</h1>
                        </div>
                        <div class="cy_price_body">
                            <ul>
                                <li> 2 Team</li>
                                <li>Length: 60 km</li>
                                <li>80 Member</li>
                                <li>Accessories</li>
                            </ul>
                            <div class="cy_price_btn">
                                <a href="#" class="cy_button">register now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Blog section start-->
    <div class="cy_blog_wrapper cy_section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1 class="cy_heading">latest from blog</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="cy_blog_box">
                        <div class="cy_blog_img">
                            <img src="images/blog/blog1.jpg" alt="blog" class="img-fluid" />
                            <div class="cy_blog_overlay"></div>
                            <div class="cy_blog_links">
                                <ul>
                                    <li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 15</a></li>
                                    <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i> 120</a></li>
                                    <li><a href="#" class="cy_relative"><i class="fa fa-share-alt" aria-hidden="true"></i> share</a>
                                        <ul class="cy_so_icons">
                                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-tumblr" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="cy_blog_data">
                            <ul class="cy_blog_info">
                                <li><a href="#">by maria</a></li>
                                <li><a href="#">14 apr, 2018</a></li>
                                <li><a href="#">cycling</a></li>
                            </ul>
                            <h2><a href="blog_single.html">Selecting The Proper Bicycle</a></h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                            <a href="blog_single.html" class="cy_button">read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="cy_blog_box">
                        <div class="cy_blog_img">
                            <img src="images/blog/blog2.jpg" alt="blog" class="img-fluid" />
                            <div class="cy_blog_overlay"></div>
                            <div class="cy_blog_links">
                                <ul>
                                    <li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 15</a></li>
                                    <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i> 120</a></li>
                                    <li><a href="#" class="cy_relative"><i class="fa fa-share-alt" aria-hidden="true"></i> share</a>
                                        <ul class="cy_so_icons">
                                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-tumblr" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="cy_blog_data">
                            <ul class="cy_blog_info">
                                <li><a href="#">by maria</a></li>
                                <li><a href="#">14 apr, 2018</a></li>
                                <li><a href="#">cycling</a></li>
                            </ul>
                            <h2><a href="blog_single.html">The New Year's Duathlon & 5K Run</a></h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                            <a href="blog_single.html" class="cy_button">read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footer.footer')

@endsection