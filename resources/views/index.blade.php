@extends('layouts.master')

@section('style')

@endsection

@section('content')
<section id="content" class="slideshow-bg">
    <div id="slideshow">
        <div class="flexslider">
            <ul class="slides" style="background-image: url('http://phptravels.net/uploads/images/slider/67qrxnp6yhc8w80.jpg'); background-repeat: no-repeat;background-size: 100% 600px;object-fit: cover;">
                <li>
                    <div class="slidebg" style="background-image: url('http://placehold.it/2080x1214');"></div>
                </li>
                <li>
                    <div class="slidebg" style="background-image: url('http://placehold.it/2080x1214');"></div>
                </li>
                <li>
                    <div class="slidebg" style="background-image: url('http://placehold.it/2080x1214');"></div>
                </li>
                <li>
                    <div class="slidebg" style="background-image: url('http://placehold.it/2080x1214');"></div>
                </li>
                <li>
                    <div class="slidebg" style="background-image: url('http://placehold.it/2080x1214');"></div>
                </li>
                <li>
                    <div class="slidebg" style="background-image: url('http://placehold.it/2080x1214');"></div>
                </li>
                <li>
                    <div class="slidebg" style="background-image: url('http://placehold.it/2080x1214');"></div>
                </li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div id="main">
            <h1 class="page-title f20">มั่นใจไปกับเรา MamyBooking</h1>
            <h2 class="page-description col-md-6 no-float no-padding">มั่นใจไปกับเรา MamyBooking</h2>
            <div class="search-box-wrapper style2">
                <div class="search-box">
                    <ul class="search-tabs clearfix">
                        <li class="active"><a href="#hotels-tab" data-toggle="tab"><i class="soap-icon-hotel"></i><span>ทริปท่องเที่ยว</span></a></li>
                        <li><a href="#cars-tab" data-toggle="tab"><i class="soap-icon-car"></i><span>รถเช่า</span></a></li>
                    </ul>
                    <div class="visible-mobile">
                        <ul id="mobile-search-tabs" class="search-tabs clearfix">
                            <li class="active"><a href="#hotels-tab">ทริปท่องเที่ยว</a></li>
                            <li><a href="#cars-tab">รถเช่า</a></li>
                        </ul>
                    </div>
                    
                    <div class="search-tab-content">
                        <div class="tab-pane fade active in" id="hotels-tab">
                            <form action="{{url('tour')}}">
                                <h4 class="title">คำค้นหา</h4>
                                <div class="row">
                                    <div class="form-group col-sm-9 col-md-9">
                                        <input type="text" class="input-text full-width" placeholder="เมื่อง, ย่าน, ทริปท่องเที่ยว..." />
                                    </div>
                                    <div class="form-group col-sm-3 col-md-3">
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <div class="datepicker-wrap">
                                                    <input type="text" name="date_from" class="input-text full-width" placeholder="Check In" />
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <button type="submit" class="button-bule full-width">ค้นหา</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        
                        <div class="tab-pane fade" id="cars-tab">
                            <form action="{{url('car')}}">
                                <h4 class="title">Where do you want to go?</h4>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="input-text full-width" placeholder="Pick Up (city, distirct or specific airpot)" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="input-text full-width" placeholder="Drop Off (city, distirct or specific airpot)" />
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="datepicker-wrap">
                                                        <input type="text" name="date_from" class="input-text full-width" placeholder="Pick-Up Date / Time" />
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
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="datepicker-wrap">
                                                        <input type="text" name="date_to" class="input-text full-width" placeholder="Drop-Off Date / Time" />
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
                                    </div>
                                    
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <div class="col-xs-3">
                                                <div class="selector">
                                                    <select class="full-width">
                                                        <option value="">Adults</option>
                                                        <option value="1">01</option>
                                                        <option value="2">02</option>
                                                        <option value="3">03</option>
                                                        <option value="4">04</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-3">
                                                <div class="selector">
                                                    <select class="full-width">
                                                        <option value="">Kids</option>
                                                        <option value="1">01</option>
                                                        <option value="2">02</option>
                                                        <option value="3">03</option>
                                                        <option value="4">04</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <input type="text" class="input-text full-width" placeholder="Promo Code" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-xs-6">
                                                <div class="selector">
                                                    <select class="full-width">
                                                        <option value="">select a car type</option>
                                                        <option value="economy">Economy</option>
                                                        <option value="compact">Compact</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <button class="button-bule full-width">ค้นหา</button>
                                            <div class="col-xs-6 pull-right">
                                                <label>&nbsp;</label>
                                                
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
    
</section>

<section class="features">
<div class="wrapper">
       <div class="ribbon-wrapper-green"><div class="ribbon-green">NEWS</div></div>
</div>​
</section>

<section id="content" class="gray-area">
    <div class="container shortcode">
        <div class="block">
            <br>
            <h3>ทริปท่องเที่ยวที่เราคัดสรรค์</h3>
            <div class="row image-box style1">
                <div class="col-sm-6 col-md-3">
                    <article class="box">
                        <figure>
                            <a href="#" title="" class="hover-effect"><img src="http://phptravels.net/uploads/images/tours/slider/thumbs/294159_nile.jpg" alt="" width="270" height="160" /></a>
                        </figure>
                        <div class="details">
                            <span class="price"><small>FROM</small>$490</span>
                            <h4 class="box-title">Atlantis - The Palm<small>Paris</small></h4>
                        </div>
                        <div class="ribbon-wrapper-green"><div class="ribbon-green">NEWS</div></div>
                    </article>
                </div>
                <div class="col-sm-6 col-md-3">
                    <article class="box">
                        <figure>
                            <a href="#" title="" class="hover-effect"><img src="http://phptravels.net/uploads/images/tours/slider/thumbs/thailand.jpg" alt="" width="270" height="160" /></a>
                        </figure>
                        <div class="details">
                            <span class="price"><small>FROM</small>$170</span>
                            <h4 class="box-title">Hilton Hotel<small>LONDON</small></h4>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-md-3">
                    <article class="box">
                        <figure>
                            <a href="#" title="" class="hover-effect"><img src="http://phptravels.net/uploads/images/tours/slider/thumbs/hongkong.jpg" alt="" width="270" height="160" /></a>
                        </figure>
                        <div class="details">
                            <span class="price"><small>FROM</small>$130</span>
                            <h4 class="box-title">MGM Grand<small>LAS VEGAS</small></h4>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-md-3">
                    <article class="box">
                        <figure>
                            <a href="#" title="" class="hover-effect"><img src="http://phptravels.net/uploads/images/tours/slider/thumbs/211701_delhi.jpg" alt="" width="270" height="160" /></a>
                        </figure>
                        <div class="details">
                            <span class="price"><small>FROM</small>$290</span>
                            <h4 class="box-title">Crown Casino<small>ASUTRALIA</small></h4>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-md-3">
                    <article class="box">
                        <figure>
                            <a href="#" title="" class="hover-effect"><img src="http://phptravels.net/uploads/images/hotels/slider/thumbs/596771_5.jpg" alt="" width="270" height="160" /></a>
                        </figure>
                        <div class="details">
                            <span class="price"><small>FROM</small>$290</span>
                            <h4 class="box-title">Crown Casino<small>ASUTRALIA</small></h4>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-md-3">
                    <article class="box">
                        <figure>
                            <a href="#" title="" class="hover-effect"><img src="http://phptravels.net/uploads/images/hotels/slider/thumbs/100617_6.jpg" alt="" width="270" height="160" /></a>
                        </figure>
                        <div class="details">
                            <span class="price"><small>FROM</small>$290</span>
                            <h4 class="box-title">Crown Casino<small>ASUTRALIA</small></h4>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-md-3">
                    <article class="box">
                        <figure>
                            <a href="#" title="" class="hover-effect"><img src="http://phptravels.net/uploads/images/hotels/slider/thumbs/964202_7.jpg" alt="" width="270" height="160" /></a>
                        </figure>
                        <div class="details">
                            <span class="price"><small>FROM</small>$290</span>
                            <h4 class="box-title">Crown Casino<small>ASUTRALIA</small></h4>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-md-3">
                    <article class="box">
                        <figure>
                            <a href="#" title="" class="hover-effect"><img src="http://phptravels.net/uploads/images/hotels/slider/thumbs/731415_8.jpg" alt="" width="270" height="160" /></a>
                        </figure>
                        <div class="details">
                            <span class="price"><small>FROM</small>$290</span>
                            <h4 class="box-title">Crown Casino<small>ASUTRALIA</small></h4>
                        </div>
                    </article>
                </div>
            </div>
        </div>
        <div class="block">
            <h2>Carousel Style 02</h2>
            <div class="image-carousel style3 flex-slider" data-item-width="170" data-item-margin="30">
                <ul class="slides image-box style9">
                    <li>
                        <article class="box">
                            <figure>
                                <a href="#" title="" class="hover-effect yellow"><img src="http://placehold.it/170x160" alt="" width="170" height="160" /></a>
                            </figure>
                        </article>
                    </li>
                    <li>
                        <article class="box">
                            <figure>
                                <a href="#" title="" class="hover-effect yellow"><img src="http://placehold.it/170x160" alt="" width="170" height="160" /></a>
                            </figure>
                            
                        </article>
                    </li>
                    <li>
                        <article class="box">
                            <figure>
                                <a href="#" title="" class="hover-effect yellow"><img src="http://placehold.it/170x160" alt="" width="170" height="160" /></a>
                            </figure>
                        </article>
                    </li>
                    <li>
                        <article class="box">
                            <figure>
                                <a href="#" title="" class="hover-effect yellow"><img src="http://placehold.it/170x160" alt="" width="170" height="160" /></a>
                            </figure>
                        </article>
                    </li>
                    <li>
                        <article class="box">
                            <figure>
                                <a href="#" title="" class="hover-effect yellow"><img src="http://placehold.it/170x160" alt="" width="170" height="160" /></a>
                            </figure>
                        </article>
                    </li>
                    <li>
                        <article class="box">
                            <figure>
                                <a href="#" title="" class="hover-effect yellow"><img src="http://placehold.it/170x160" alt="" width="170" height="160" /></a>
                            </figure>
                        </article>
                    </li>
                    <li>
                        <article class="box">
                            <figure>
                                <a href="#" title="" class="hover-effect yellow"><img src="http://placehold.it/170x160" alt="" width="170" height="160" /></a>
                            </figure>
                        </article>
                    </li>
                    <li>
                        <article class="box">
                            <figure>
                                <a href="#" title="" class="hover-effect yellow"><img src="http://placehold.it/170x160" alt="" width="170" height="160" /></a>
                            </figure>
                        </article>
                    </li>
                    
                </ul>
            </div>
        </div>

        <div class="block image-box style6">
            <article class="box">
                <figure class="col-md-5 pull-right ">
                    <a href="#" title=""><img class="middle-item" src="{{asset('images/about-home.jpg')}}" alt="" width="100%" height="auto" style="object-fit: cover;" /></a>
                </figure>
                <div class="details col-md-7">
                    <h2>หม่ามี๊บุ๊คกิ้ง</h2>
                    <p>พวกเรา (บริษัทหม่ามี๊บุ๊คกิ้ง หรือ www.mamybooking.com) เป็นบริษัท Start-up ซึ่งมีเจ้าของเป็นคนไทย ในรูปแบบออนไลน์ หรือ OTA (Online Travel Agency คือ เว็บไซต์ที่ให้บริการเกี่ยวกับที่พัก และการท่องเที่ยวรูปแบบต่างๆ โดยทำหน้าที่เป็นตัวกลางให้กับสมาชิก) ที่การันตีการบริการการท่องเที่ยวที่ครบรูปแบบที่สุดและไม่ต้องผ่านนายหน้า โดยงานบริการของพวกเรานั้นแบ่งออกเป็น 4 ส่วนในภาคปัจจุบันดังนี้</p>
                    <a href="{{url('/')}}" class="button btn-medium sky-blue1">อ่านต่อ</a>
                    <a href="{{url('about')}}" class="button btn-medium silver">เกี่ยวกับเรา</a>

                </div>
            </article>

        </div>
    </div>
</section>
<section id="content" class="gray-area">
    <div class="container shortcode">
        <div class="row">
            <div class="col-sm-6">
                <h2>Style 01</h2>
                <div class="testimonial style1 box">
                    <ul class="slides ">
                        <li>
                            <p class="description">This is the 3rd time I’ve used Travelo website and telling you the truth their services are always realiable and it only takes few minutes to plan and finalize your entire trip using their extremely fast website and up to date listings. I’m super excited about my next trip to Paris.</p>
                            <div class="author clearfix">
                                <a href="#"><img src="http://placehold.it/270x270" alt="" width="74" height="74" /></a>
                                <h5 class="name">Jessica Brown<small>guest</small></h5>
                            </div>
                        </li>
                        <li>
                            <p class="description">This is the 3rd time I’ve used Travelo website and telling you the truth their services are always realiable and it only takes few minutes to plan and finalize your entire trip using their extremely fast website and up to date listings. I’m super excited about my next trip to Paris.</p>
                            <div class="author clearfix">
                                <a href="#"><img src="http://placehold.it/270x270" alt="" width="74" height="74" /></a>
                                <h5 class="name">Lisa Kimberly<small>guest</small></h5>
                            </div>
                        </li>
                        <li>
                            <p class="description">This is the 3rd time I’ve used Travelo website and telling you the truth their services are always realiable and it only takes few minutes to plan and finalize your entire trip using their extremely fast website and up to date listings. I’m super excited about my next trip to Paris.</p>
                            <div class="author clearfix">
                                <a href="#"><img src="http://placehold.it/270x270" alt="" width="74" height="74" /></a>
                                <h5 class="name">Jessica Brown<small>guest</small></h5>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6">
                <h2>Style 02</h2>
                <div class="testimonial style2 box">
                    <ul class="slides">
                        <li>
                            <p class="description">This is the 3rd time I’ve used Travelo website and telling you the truth their services are always realiable and it only takes few minutes to plan and finalize your entire trip using their extremely fast website and up to date listings. I’m super excited about my next trip to Paris.</p>
                            <div class="author clearfix">
                                <a href="#"><img src="http://placehold.it/270x270" alt="" width="74" height="74" /></a>
                                <h5 class="name">Jessica Brown<small>guest</small></h5>
                            </div>
                        </li>
                        <li>
                            <p class="description">This is the 3rd time I’ve used Travelo website and telling you the truth their services are always realiable and it only takes few minutes to plan and finalize your entire trip using their extremely fast website and up to date listings. I’m super excited about my next trip to Paris.</p>
                            <div class="author clearfix">
                                <a href="#"><img src="http://placehold.it/270x270" alt="" width="74" height="74" /></a>
                                <h5 class="name">Lisa Kimberly<small>guest</small></h5>
                            </div>
                        </li>
                        <li>
                            <p class="description">This is the 3rd time I’ve used Travelo website and telling you the truth their services are always realiable and it only takes few minutes to plan and finalize your entire trip using their extremely fast website and up to date listings. I’m super excited about my next trip to Paris.</p>
                            <div class="author clearfix">
                                <a href="#"><img src="http://placehold.it/270x270" alt="" width="74" height="74" /></a>
                                <h5 class="name">Jessica Brown<small>guest</small></h5>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="global-map-area promo-box parallax" data-stellar-background-ratio="0.5" style="">
        <div class="container">
            <div class="content-section description pull-right col-sm-9">
                <div class="table-wrapper hidden-table-sm">
                    <div class="table-cell">
                        <h2 class="m-title" style="font-size: 18px !important;">
                            ลงทะเบียนกับ MAMYBOOKING.COM เพื่อรับข่าวสารดีลสุดพิเศษจากเรา<br /><em>และโอกาสในการจองตั๋วเครื่องบินพร้อมที่พักและทริปท่องเที่ยวราคาพิเศษอีกมากมาย</em>
                        </h2>
                    </div>
                    <div class="table-cell action-section col-md-4 no-float">
                        <form>
                            <div class="row">
                                <div class="col-xs-6 col-md-12">
                                    <input type="text" class="input-text input-large full-width" value="" placeholder="ใส่อีเมล์ของคุณที่นี่" />
                                </div>
                                <div class="col-xs-6 col-md-12">
                                    <button class="full-width btn-large">รับข่าวสาร</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="image-container col-sm-4">
                <img src="http://placehold.it/342x258" alt="" width="342" height="258" />
            </div>
        </div>
    </div>

</section>

@endsection
