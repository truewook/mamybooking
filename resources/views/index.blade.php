@extends('layouts.master')

@section('style')

@endsection

@section('content')
        <div class="bg-img"></div>
            <div class="container">
                <div class="search">
                    <div class="search-box-wrapper">
                <div class="search-box container">
                    <ul class="search-tabs clearfix">
                        <li class="active"><a href="#hotels-tab" data-toggle="tab">Tour</a></li>
                        <li><a href="#flights-tab" data-toggle="tab">Car</a></li>
                    </ul>
                    <div class="visible-mobile">
                        <ul id="mobile-search-tabs" class="search-tabs clearfix">
                            <li class="active"><a href="#hotels-tab" data-toggle="tab">Tour</a></li>
                            <li><a href="#flights-tab" data-toggle="tab">Car</a></li>
                        </ul>
                    </div>
                    
                    <div class="search-tab-content">
                        <div class="tab-pane fade active in" id="hotels-tab">
                            <form action="hotel-list-view.html" method="post">
                                <div class="row">
                                    <div class="form-group col-sm-6 col-md-3 ">
                                        <h4 class="title"><center>ค้นหาทริปท่องเที่ยว</center></h4>
                                        <label>สถานที่</label>
                                        <input type="text" class="input-text full-width" placeholder="city, distirct or specific airpot" />

                                    </div>
                                    
                                    
                                    
                                    <div class="form-group col-sm-6 col-md-2 fixheight">
                                        <label class="hidden-xs">&nbsp;</label>
                                        <button type="submit" class="full-width icon-check animated" data-animation-type="bounce" data-animation-duration="1">SEARCH NOW</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="flights-tab">
                            <form action="flight-list-view.html" method="post">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4 class="title">Where</h4>
                                        <div class="form-group">
                                            <label>Leaving From</label>
                                            <input type="text" class="input-text full-width" placeholder="city, distirct or specific airpot" />
                                        </div>
                                        <div class="form-group">
                                            <label>Going To</label>
                                            <input type="text" class="input-text full-width" placeholder="city, distirct or specific airpot" />
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-4">
                                        <h4 class="title">When</h4>
                                        <label>Departing On</label>
                                        <div class="form-group row">
                                            <div class="col-xs-6">
                                                <div class="datepicker-wrap">
                                                    <input type="text" name="date_from" class="input-text full-width" placeholder="mm/dd/yy" />
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="selector">
                                                    <select class="full-width">
                                                        <option value="1">anytime</option>
                                                        <option value="2">morning</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <label>Arriving On</label>
                                        <div class="form-group row">
                                            <div class="col-xs-6">
                                                <div class="datepicker-wrap">
                                                    <input type="text" name="date_to" class="input-text full-width" placeholder="mm/dd/yy" />
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="selector">
                                                    <select class="full-width">
                                                        <option value="1">anytime</option>
                                                        <option value="2">morning</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-4">
                                        <h4 class="title">Who</h4>
                                        <div class="form-group row">
                                            <div class="col-xs-3">
                                                <label>Adults</label>
                                                <div class="selector">
                                                    <select class="full-width">
                                                        <option value="1">01</option>
                                                        <option value="2">02</option>
                                                        <option value="3">03</option>
                                                        <option value="4">04</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-3">
                                                <label>Kids</label>
                                                <div class="selector">
                                                    <select class="full-width">
                                                        <option value="1">01</option>
                                                        <option value="2">02</option>
                                                        <option value="3">03</option>
                                                        <option value="4">04</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <label>Promo Code</label>
                                                <input type="text" class="input-text full-width" placeholder="type here" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-xs-3">
                                                <label>Infants</label>
                                                <div class="selector">
                                                    <select class="full-width">
                                                        <option value="1">01</option>
                                                        <option value="2">02</option>
                                                        <option value="3">03</option>
                                                        <option value="4">04</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 pull-right">
                                                <label>&nbsp;</label>
                                                <button class="full-width icon-check">SERACH NOW</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                    </div>
                </div>
            </div>
            
        <section id="content">
            
            
            <!-- Popuplar Destinations -->
            <div class="destinations section">
                <div class="container">
                    <h2>Popular Destinations</h2>
                    <div class="row image-box style1 add-clearfix">
                        <div class="col-sms-6 col-sm-6 col-md-3">
                            <article class="box">
                                <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1">
                                    <a href="ajax/slideshow-popup.html" title="" class="hover-effect popup-gallery"><img src="http://placehold.it/270x160" alt="" width="270" height="160" /></a>
                                </figure>
                                <div class="details">
                                    <span class="price"><small>FROM</small>$490</span>
                                    <h4 class="box-title"><a href="hotel-detailed.html">Atlantis - The Palm<small>Paris</small></a></h4>
                                </div>
                            </article>
                        </div>
                        <div class="col-sms-6 col-sm-6 col-md-3">
                            <article class="box">
                                <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.3">
                                    <a href="ajax/slideshow-popup.html" title="" class="hover-effect popup-gallery"><img src="http://placehold.it/270x160" alt="" width="270" height="160" /></a>
                                </figure>
                                <div class="details">
                                    <span class="price"><small>FROM</small>$170</span>
                                    <h4 class="box-title"><a href="hotel-detailed.html">Hilton Hotel<small>LONDON</small></a></h4>
                                </div>
                            </article>
                        </div>
                        <div class="col-sms-6 col-sm-6 col-md-3">
                            <article class="box">
                                <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.6">
                                    <a href="ajax/slideshow-popup.html" title="" class="hover-effect popup-gallery"><img src="http://placehold.it/270x160" alt="" width="270" height="160" /></a>
                                </figure>
                                <div class="details">
                                    <span class="price"><small>FROM</small>$130</span>
                                    <h4 class="box-title"><a href="hotel-detailed.html">MGM Grand<small>LAS VEGAS</small></a></h4>
                                </div>
                            </article>
                        </div>
                        <div class="col-sms-6 col-sm-6 col-md-3">
                            <article class="box">
                                <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.9">
                                    <a href="ajax/slideshow-popup.html" title="" class="hover-effect popup-gallery"><img src="http://placehold.it/270x160" alt="" width="270" height="160" /></a>
                                </figure>
                                <div class="details">
                                    <span class="price"><small>FROM</small>$290</span>
                                    <h4 class="box-title"><a href="hotel-detailed.html">Crown Casino<small>ASUTRALIA</small></a></h4>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Honeymoon -->
            <div class="honeymoon section global-map-area promo-box parallax" data-stellar-background-ratio="0.5">
                <div class="container">
                    <div class="col-sm-6 content-section description pull-right">
                        <h1 class="title">Popular Destinations for Honeymoon</h1>
                        <p>Nunc cursus libero purusac congue arcu cursus utsed vitae pulvinar massa idporta neque purusac Etiam elerisque mi id faucibus iaculis vitae pulvinar.</p>
                        <div class="row places image-box style9">
                            <div class="col-sms-4 col-sm-4">
                                <article class="box">
                                    <figure>
                                        <a href="hotel-list-view.html" title="" class="hover-effect yellow middle-block animated" data-animation-type="fadeInUp" data-animation-duration="1">
                                            <img src="http://placehold.it/370x170" alt="" /></a>
                                    </figure>
                                    <div class="details">
                                        <h4 class="box-title">Paris<small>(990 PLACES)</small></h4>
                                        <a href="hotel-list-view.html" title="" class="button">SEE ALL</a>
                                    </div>
                                </article>
                            </div>
                            <div class="col-sms-4 col-sm-4">
                                <article class="box">
                                    <figure>
                                        <a href="hotel-list-view.html" title="" class="hover-effect yellow middle-block animated" data-animation-type="fadeInUp" data-animation-duration="1" data-animation-delay="0.4"><img src="http://placehold.it/370x170" alt="" /></a>
                                    </figure>
                                    <div class="details">
                                        <h4 class="box-title">Greece<small>(990 PLACES)</small></h4>
                                        <a href="hotel-list-view.html" title="" class="button">SEE ALL</a>
                                    </div>
                                </article>
                            </div>
                            <div class="col-sms-4 col-sm-4">
                                <article class="box">
                                    <figure>
                                        <a href="hotel-list-view.html" title="" class="hover-effect yellow middle-block animated" data-animation-type="fadeInUp" data-animation-duration="1" data-animation-delay="0.8"><img src="http://placehold.it/370x170" alt="" /></a>
                                    </figure>
                                    <div class="details">
                                        <h4 class="box-title">Australia<small>(990 PLACES)</small></h4>
                                        <a href="hotel-list-view.html" title="" class="button">SEE ALL</a>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 image-container no-margin">
                        <img src="http://placehold.it/524x540" alt="" class="animated" data-animation-type="fadeInUp" data-animation-duration="2">
                    </div>
                </div>
            </div>
            
            <!-- Did you Know? section -->
            <div class="offers section">
                <div class="container">
                    <h1 class="text-center">Did you know?</h1>
                    <p class="col-xs-9 center-block no-float text-center">Mauris ullamcorper nibh quis leo ultrices in hendrerit velit tristiqueut augue in nulla lacinia bibendum liberoras rutrum ac purus ut tristique.
Nullam placerat lacinia dolor quis pretium. Phasellus vitae lacinia quam, at pellentesque lorem. Sed euismod turpis quis mattis fringilla.</p>
                    <div class="row image-box style2">
                        <div class="col-md-6">
                            <article class="box">
                                <figure class="animated" data-animation-type="fadeInLeft" data-animation-duration="1">
                                    <a href="#" title=""><img src="http://placehold.it/270x192" alt="" width="270" height="192" /></a>
                                </figure>
                                <div class="details">
                                    <h4>Hire Cars</h4>
                                    <p>Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id.</p>
                                    <a href="#" title="" class="button">SEE ALL</a>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-6">
                            <article class="box">
                                <figure class="animated" data-animation-type="fadeInLeft" data-animation-duration="1" data-animation-delay="0.4">
                                    <a href="#" title=""><img src="http://placehold.it/270x192" alt="" width="270" height="192" /></a>
                                </figure>
                                <div class="details">
                                    <h4>Cruise Deals</h4>
                                    <p>Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id.</p>
                                    <a href="#" title="" class="button">SEE ALL</a>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-6">
                            <article class="box">
                                <figure class="animated" data-animation-type="fadeInLeft" data-animation-duration="1">
                                    <a href="#" title=""><img src="http://placehold.it/270x192" alt="" width="270" height="192" /></a>
                                </figure>
                                <div class="details">
                                    <h4>Things To Do</h4>
                                    <p>Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id.</p>
                                    <a href="#" title="" class="button">SEE ALL</a>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-6">
                            <article class="box">
                                <figure class="animated" data-animation-type="fadeInLeft" data-animation-duration="1" data-animation-delay="0.4">
                                    <a href="#" title=""><img src="http://placehold.it/270x192" alt="" width="270" height="192" /></a>
                                </figure>
                                <div class="details">
                                    <h4>Fly in Comfort</h4>
                                    <p>Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id.</p>
                                    <a href="#" title="" class="button">SEE ALL</a>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Features section -->
            <div class="features section global-map-area parallax" data-stellar-background-ratio="0.5">
                <div class="container">
                    <div class="row image-box style7">
                        <div class="col-sms-6 col-sm-6 col-md-3">
                            <article class="box">
                                <figure class="middle-block">
                                    <img src="http://placehold.it/300x120" alt="" class="middle-item" />
                                    <span class="opacity-wrapper"></span>
                                </figure>
                                <div class="details">
                                    <h4><a href="#">Best Price Guarantee</a></h4>
                                    <p>
                                        Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam elerisque mi id faucibus iaculis vitae pulvinar.
                                    </p>
                                </div>
                            </article>
                        </div>
                        <div class="col-sms-6 col-sm-6 col-md-3">
                             <article class="box">
                                <figure class="middle-block">
                                    <img src="http://placehold.it/300x120" alt="" class="middle-item" />
                                    <span class="opacity-wrapper"></span>
                                </figure>
                                <div class="details">
                                    <h4><a href="#">Travel Insurance</a></h4>
                                    <p>
                                        Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam elerisque mi id faucibus iaculis vitae pulvinar.
                                    </p>
                                </div>
                            </article>
                        </div>
                        <div class="col-sms-6 col-sm-6 col-md-3">
                             <article class="box">
                                <figure class="middle-block">
                                    <img src="http://placehold.it/300x120" alt="" class="middle-item" />
                                    <span class="opacity-wrapper"></span>
                                </figure>
                                <div class="details">
                                    <h4><a href="#">Why Chose Us</a></h4>
                                    <p>
                                        Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam elerisque mi id faucibus iaculis vitae pulvinar.
                                    </p>
                                </div>
                            </article>
                        </div>
                        <div class="col-sms-6 col-sm-6 col-md-3">
                             <article class="box">
                                <figure class="middle-block">
                                    <img src="http://placehold.it/300x120" alt="" class="middle-item" />
                                    <span class="opacity-wrapper"></span>
                                </figure>
                                <div class="details">
                                    <h4><a href="#">Need Help?</a></h4>
                                    <p>
                                        Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam elerisque mi id faucibus iaculis vitae pulvinar.
                                    </p>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
