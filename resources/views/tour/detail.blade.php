 @extends('layouts.master')

@section('menu-tour-active')
active 
@endsection

@section('style')

@endsection

@section('content')
 <div class="page-title-container">
            <div class="container">
                <div class="page-title pull-left">
                    <h2 class="entry-title">ทัวร์ 3 เกาะของระนอง, ทัวร์4 เกาะหัวใจมรกต 3วัน 2คืน</h2>
                </div>
                <ul class="breadcrumbs pull-right">
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">PAGES</a></li>
                    <li class="active">Rome City Tour</li>
                </ul>
            </div>
        </div>

        <section id="content">
            <div class="container tour-detail-page">
                <div class="row">
                    <div id="main" class="col-md-9">
                        <div class="featured-gallery image-box">
                            <span class="discount"><span class="discount-text">10% Discount</span></span>
                            <div class="flexslider photo-gallery style1" id="post-slideshow1" data-sync="#post-carousel1" data-func-on-start="showTourDetailedDiscount">
                                <ul class="slides">
                                    <li><a href="pages-blog-read.html"><img src="{{asset('images/tour/demo/HorseShoe1.png')}}" alt=""></a></li>
                                    <li><a href="pages-blog-read.html"><img src="{{asset('images/tour/demo/HorseShoe2.png')}}" alt=""></a></li>
                                    <li><a href="pages-blog-read.html"><img src="{{asset('images/tour/demo/HorseShoe3.png')}}" alt=""></a></li>
                                    <li><a href="pages-blog-read.html"><img src="{{asset('images/tour/demo/HorseShoe4.png')}}" alt=""></a></li>
                                   <!--  <li><a href="pages-blog-read.html"><img src="http://placehold.it/870x442" alt=""></a></li>
                                    <li><a href="pages-blog-read.html"><img src="http://placehold.it/870x442" alt=""></a></li>
                                    <li><a href="pages-blog-read.html"><img src="http://placehold.it/870x442" alt=""></a></li>
                                    <li><a href="pages-blog-read.html"><img src="http://placehold.it/870x442" alt=""></a></li>
                                    <li><a href="pages-blog-read.html"><img src="http://placehold.it/870x442" alt=""></a></li>
                                    <li><a href="pages-blog-read.html"><img src="http://placehold.it/870x442" alt=""></a></li>
                                    <li><a href="pages-blog-read.html"><img src="http://placehold.it/870x442" alt=""></a></li>
                                    <li><a href="pages-blog-read.html"><img src="http://placehold.it/870x442" alt=""></a></li>
                                    <li><a href="pages-blog-read.html"><img src="http://placehold.it/870x442" alt=""></a></li>
                                    <li><a href="pages-blog-read.html"><img src="http://placehold.it/870x442" alt=""></a></li>
                                    <li><a href="pages-blog-read.html"><img src="http://placehold.it/870x442" alt=""></a></li>
                                    <li><a href="pages-blog-read.html"><img src="http://placehold.it/870x442" alt=""></a></li>
                                    <li><a href="pages-blog-read.html"><img src="http://placehold.it/870x442" alt=""></a></li> -->
                                </ul>
                            </div>
                            <div class="flexslider image-carousel style1" id="post-carousel1"  data-animation="slide" data-item-width="70" data-item-margin="10" data-sync="#post-slideshow1">
                                <ul class="slides">
                                <li><img src="{{asset('images/tour/demo/HorseShoe1.png')}}" alt=""></li>
                                <li><img src="{{asset('images/tour/demo/HorseShoe2.png')}}" alt=""></li>
                                <li><img src="{{asset('images/tour/demo/HorseShoe3.png')}}" alt=""></li>
                                <li><img src="{{asset('images/tour/demo/HorseShoe4.png')}}" alt=""></li>
                                   <!--  <li><img src="http://placehold.it/70x70" alt="" /></li>
                                    <li><img src="http://placehold.it/70x70" alt="" /></li>
                                    <li><img src="http://placehold.it/70x70" alt="" /></li>
                                    <li><img src="http://placehold.it/70x70" alt="" /></li>
                                    <li><img src="http://placehold.it/70x70" alt="" /></li>
                                    <li><img src="http://placehold.it/70x70" alt="" /></li>
                                    <li><img src="http://placehold.it/70x70" alt="" /></li>
                                    <li><img src="http://placehold.it/70x70" alt="" /></li>
                                    <li><img src="http://placehold.it/70x70" alt="" /></li>
                                    <li><img src="http://placehold.it/70x70" alt="" /></li>
                                    <li><img src="http://placehold.it/70x70" alt="" /></li>
                                    <li><img src="http://placehold.it/70x70" alt="" /></li>
                                    <li><img src="http://placehold.it/70x70" alt="" /></li>
                                    <li><img src="http://placehold.it/70x70" alt="" /></li> -->
                                </ul>
                            </div>
                        </div>

                        <div id="tour-details" class="travelo-box">
                            <div class="intro2 small-box border-box table-wrapper hidden-table-sms">
                                <div class="image-container table-cell"><img src="http://placehold.it/166x104" alt=""></div>
                                <div class="table-cell">
                                    <dl class="term-description">
                                        <dt>วันเดินทาง:</dt><dd>Daily</dd>
                                        <dt>ระยะเวลา:</dt><dd>1 Day</dd>
                                        <dt>ผู้เข้าชม:</dt><dd>250</dd>
                                        <dt>จำนวนที่ว่าง:</dt><dd>20 seats</dd>
                                    </dl>
                                </div>
                                <div class="price-section table-cell">
                                    <div class="price"><small>3 days tour</small><div class="price-per-unit">$534</div></div>
                                    <a href="tour-booking.html" class="button green btn-small uppercase">Book Tour</a>
                                </div>
                            </div>

                            <div class="tour-google-map block"></div>

                            <h2>General Information About Rome</h2>
                            <p>Sed aliquam nunc eget velit imperdiet, in rutrum mauris malesuada. Quisque ullamcorper vulputate nisi, et fringilla ante convallis quis. Nullam vel tellus non elit suscipit volutpat. Integer id felis et nibh rutrum dignissim ut non risus. In tincidunt urna quis sem luctus, sed accumsan magna pellentesque. Donec et iaculis tellus. Vestibulum ut iaculis justo, auctor sodales lectus. Donec et tellus tempus, dignissim maurornare, consequat lacus. Integer dui neque, scelerisque nec sollicitudin sit amet, sodales a erat. Duis vitae condimentum ligula. Integer eu mi nisl. Donec massa dui, commodo id arcu quis, venenatis scelerisque velit.</p>

                            <h2>Day 01</h2>
                            <p>Praesent eros turpis, commodo vel justo at, pulvinar mollis eros. Mauris aliquet eu quam id ornare. Morbi ac quam enim. Cras vitae nulla condimentum, semper dolor non, faucibus dolor. Vivamus adipiscing eros quis orci fringilla, sed pretium lectus viverra. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec nec velit non odio aliquam suscipit. Sed non neque faucibus, condimentum lectus at, accumsan enim. Fusce pretium egestas cursus. Etiam consectetur, orci vel rutrum volutpat, odio odio pretium nisiodo tellus libero et urna. Sed commodo ipsum ligula, id volutpat risus vehicula in. Pellentesque non massa eu nibh posuere bibendum non sed enim. Maecenas lobortis nulla sem, vel egestas dui ullamcorper ac.</p>

                            <h2>Day 02</h2>
                            <p>Sed scelerisque lectus sit amet faucibus sodales. Proin ut risus tortor. Etiam fermentum tellus auctor, fringilla sapien et, congue quam. In a luctus tortor. Suspendisse eget tempor libero, ut sollicitudin ligula. Nulla vulputate tincidunt est non congue. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus at est imperdiet, dapibus ipsum vel, lacinia nulla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus id interdum lectus, ut elementum elit. Nullam a molestie magna. Praesent eros turpis, commodo vel justo at, pulvinar mollis eros. Mauris aliquet eu quam id ornare. Morbi ac quam enim. Cras vitae nulla condimentum, semper dolor non, faucibus dolor. Vivamus adipiscing eros quis orci fringilla, sed pretium lectus viverra.</p>

                            <h2>Day 03</h2>
                            <p>Praesent eros turpis, commodo vel justo at, pulvinar mollis eros. Mauris aliquet eu quam id ornare. Morbi ac quam enim. Cras vitae nulla condimentum, semper dolor non, faucibus dolor. Vivamus adipiscing eros quis orci fringilla, sed pretium lectus viverra. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec nec velit non odio aliquam suscipit. Sed non neque faucibus, condimentum lectus at, accumsan enim. Fusce pretium egestas cursus. Etiam consectetur, orci vel rutrum volutpat, odio odio pretium nisiodo tellus libero et urna. Sed commodo ipsum ligula, id volutpat risus vehicula in. Pellentesque non massa eu nibh posuere bibendum non sed enim. Maecenas lobortis nulla </p>
                        </div>
                    </div>
                    <div class="sidebar col-md-3">
                        <!-- <div class="travelo-box">
                            <h4 class="box-title">Last Minute Deals</h4>
                            <div class="image-box style14">
                                <article class="box">
                                    <figure><a href="#" title=""><img width="63" height="59" src="http://placehold.it/63x60" alt=""></a></figure>
                                    <div class="details">
                                        <h5 class="box-title"><a href="#">Plaza Tour Eiffel</a></h5>
                                        <label class="price-wrapper"><span class="price-per-unit">$170</span>avg/night</label>
                                    </div>
                                </article>
                                <article class="box">
                                    <figure><a href="#" title=""><img width="63" height="59" src="http://placehold.it/63x60" alt=""></a></figure>
                                    <div class="details">
                                        <h5 class="box-title"><a href="#">Ocean Park Tour</a></h5>
                                        <label class="price-wrapper"><span class="price-per-unit">$620</span>avg/night</label>
                                    </div>
                                </article>
                                <article class="box">
                                    <figure><a href="#" title=""><img width="63" height="59" src="http://placehold.it/63x60" alt=""></a></figure>
                                    <div class="details">
                                        <h5 class="box-title"><a href="#">Dream World Trip</a></h5>
                                        <label class="price-wrapper"><span class="price-per-unit">$322</span>avg/night</label>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div class="travelo-box book-with-us-box">
                            <h4>Why Book with us?</h4>
                            <ul>
                                <li>
                                    <i class="soap-icon-hotel-1 circle"></i>
                                    <h5 class="title"><a href="#">135,00+ Hotels</a></h5>
                                    <p>Nunc cursus libero pur congue arut nimspnty.</p>
                                </li>
                                <li>
                                    <i class="soap-icon-savings circle"></i>
                                    <h5 class="title"><a href="#">Low Rates &amp; Savings</a></h5>
                                    <p>Nunc cursus libero pur congue arut nimspnty.</p>
                                </li>
                                <li>
                                    <i class="soap-icon-support circle"></i>
                                    <h5 class="title"><a href="#">Excellent Support</a></h5>
                                    <p>Nunc cursus libero pur congue arut nimspnty.</p>
                                </li>
                            </ul>
                        </div> -->
                        <div class="travelo-box contact-box">
                            <h4 class="box-title">Need Travelo Help?</h4>
                            <p>We would be more than happy to help you. Our team advisor are 24/7 at your service to help you.</p>
                            <address class="contact-details">
                                <span class="contact-phone"><i class="soap-icon-phone"></i> 1-800-123-HELLO</span>
                                <br />
                                <a href="#" class="contact-email">help@travelo.com</a>
                            </address>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endsection