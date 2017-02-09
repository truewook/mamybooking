@extends('layouts.master')

@section('style')

@endsection

@section('content')
<div class="page-title-container style4">
	<div class="container">
	    <div class="page-title">
	        <i class="fa fa-globe" aria-hidden="true"></i>
	        <h2 class="entry-title">ทริปท่องเที่ยว</h2>
	    </div>
	    <ul class="breadcrumbs">
	        <li><a href="{{url('/')}}">HOME</a></li>
	        <li class="active">Tours</li>
	    </ul>
	</div>
</div>
<div class="container">
	<section id="content">
        <div class="container">
            <div id="main">
            	<div class="row">
	            	<div class="col-sm-4 col-md-3">
                        <h4 class="search-results-title"><i class="soap-icon-search"></i><b>627</b> results found.</h4>
                        <div class="toggle-container filters-container">
                            <div class="panel style1 arrow-right">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" href="#price-filter" class="collapsed">Price</a>
                                </h4>
                                <div id="price-filter" class="panel-collapse collapse">
                                    <div class="panel-content">
                                        <div id="price-range"></div>
                                        <br />
                                        <span class="min-price-label pull-left"></span>
                                        <span class="max-price-label pull-right"></span>
                                        <div class="clearer"></div>
                                    </div><!-- end content -->
                                </div>
                            </div>
                            
                            <div class="panel style1 arrow-right">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" href="#cartype-filter" class="collapsed">Car Type</a>
                                </h4>
                                <div id="cartype-filter" class="panel-collapse collapse filters-container">
                                    <div class="panel-content">
                                        <ul class="check-square filters-option">
                                            <li><a href="#">Full Size<small>(10)</small></a></li>
                                            <li><a href="#">Compact<small>(82)</small></a></li>
                                            <li class="active"><a href="#">Economy<small>(127)</small></a></li>
                                            <li><a href="#">Luxury / Premium<small>(22)</small></a></li>
                                            <li><a href="#">Mini Car<small>(38)</small></a></li>
                                            <li><a href="#">Van / Minivan<small>(39)</small></a></li>
                                            <li><a href="#">Exotic / Special<small>(72)</small></a></li>
                                        </ul>
                                        <a class="button btn-mini">MORE</a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="panel style1 arrow-right">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" href="#car-rental-agent-filter" class="collapsed">Car Rental Agent</a>
                                </h4>
                                <div id="car-rental-agent-filter" class="panel-collapse collapse">
                                    <div class="panel-content">
                                        <ul class="check-square filters-option">
                                            <li><a href="#">Fox Rent A Car<small>(08)</small></a></li>
                                            <li><a href="#">Payless<small>(32)</small></a></li>
                                            <li class="active"><a href="#">Ez rent a car<small>(227)</small></a></li>
                                            <li><a href="#">Thrifty<small>(22)</small></a></li>
                                            <li><a href="#">Enterprise<small>(18)</small></a></li>
                                            <li><a href="#">Alamo<small>(29)</small></a></li>
                                            <li><a href="#">Dollar<small>(12)</small></a></li>
                                        </ul>
                                        <a class="button btn-mini">MORE</a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="panel style1 arrow-right">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" href="#car-preferences-filter" class="collapsed">Car Preferences</a>
                                </h4>
                                <div id="car-preferences-filter" class="panel-collapse collapse">
                                    <div class="panel-content">
                                        <ul class="check-square filters-option">
                                            <li><a href="#">Passenger Quantity</a></li>
                                            <li class="active"><a href="#">Satellite Navigation</a></li>
                                            <li class="active"><a href="#">Air Conditioning</a></li>
                                            <li><a href="#">Doors</a></li>
                                            <li><a href="#">Diesel Vehicle</a></li>
                                        </ul>
                                        <a class="button btn-mini">MORE</a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="panel style1 arrow-right">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" href="#modify-search-panel" class="collapsed">Modify Search</a>
                                </h4>
                                <div id="modify-search-panel" class="panel-collapse collapse">
                                    <div class="panel-content">
                                        <form method="post">
                                            <div class="form-group">
                                                <label>pickup from</label>
                                                <input type="text" class="input-text full-width" placeholder="city, district, or specific airpot" value="" />
                                            </div>
                                            <div class="form-group">
                                                <label>pick-up date</label>
                                                <div class="datepicker-wrap">
                                                    <input type="text" name="date_from" class="input-text full-width" placeholder="mm/dd/yy" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>drop-off date</label>
                                                <div class="datepicker-wrap">
                                                    <input type="text" name="date_to" class="input-text full-width" placeholder="mm/dd/yy" />
                                                </div>
                                            </div>
                                            <br />
                                            <button class="btn-medium icon-check uppercase full-width">search again</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8 col-md-9">
                    	<div class="sort-by-section clearfix">
                            <h4 class="sort-by-title block-sm">Sort results by:</h4>
                            <ul class="sort-bar clearfix block-sm">
                                <li class="sort-by-name"><a class="sort-by-container" href="#"><span>name</span></a></li>
                                <li class="sort-by-price"><a class="sort-by-container" href="#"><span>price</span></a></li>
                                <li class="clearer visible-sms"></li>
                                <li class="sort-by-rating active"><a class="sort-by-container" href="#"><span>rating</span></a></li>
                                <li class="sort-by-popularity"><a class="sort-by-container" href="#"><span>popularity</span></a></li>
                            </ul>
                        </div>
						<div class="tour-packages row add-clearfix image-box">      
		                    <div class="row add-clearfix image-box style1 tour-locations">
		                        <div class="col-sm-6 col-md-6">
		                            <article class="box">
		                                <figure>
		                                    <a href="#" class="hover-effect">
		                                        <img src="http://placehold.it/570x270" alt="">
		                                    </a>
		                                </figure>
		                                <div class="details">
		                                    <span class="price">$620</span>
		                                    <h4 class="box-title">Hawaii City Tour</h4>
		                                    <hr>
		                                    <ul class="features check">
		                                        <li>City Tour In 3 Hours</li>
		                                        <li>Enjoy World Famous Restaurant</li>
		                                        <li>Wine Tester Trips</li>
		                                        <li>Night Street Life in Downtown </li>
		                                    </ul>
		                                    <hr>
		                                    <div class="text-center">
		                                        <div class="time">
		                                            <i class="soap-icon-clock yellow-color"></i>
		                                            <span>01 Nov 2014 - 08 Nov 2014</span>
		                                        </div>
		                                    </div>
		                                    <a href="#" class="button btn-small full-width">BOOK NOW</a>
		                                </div>
		                            </article>
		                        </div>
		                        <div class="col-sm-6">
		                            <article class="box">
		                                <figure>
		                                    <a href="#" class="hover-effect">
		                                        <img src="http://placehold.it/570x270" alt="">
		                                    </a>
		                                </figure>
		                                <div class="details">
		                                    <span class="price">$534</span>
		                                    <h4 class="box-title">Italy Family Tour</h4>
		                                    <hr>
		                                    <ul class="features check">
		                                        <li>City Tour In 3 Hours</li>
		                                        <li>Enjoy World Famous Restaurant</li>
		                                        <li>Wine Tester Trips</li>
		                                        <li>Night Street Life in Downtown </li>
		                                    </ul>
		                                    <hr>
		                                    <div class="text-center">
		                                        <div class="time">
		                                            <i class="soap-icon-clock yellow-color"></i>
		                                            <span>01 Nov 2014 - 08 Nov 2014</span>
		                                        </div>
		                                    </div>
		                                    <a href="#" class="button btn-small full-width">BOOK NOW</a>
		                                </div>
		                            </article>
		                        </div>
		                        <div class="col-sm-6">
		                            <article class="box">
		                                <figure>
		                                    <a href="#" class="hover-effect">
		                                        <img src="http://placehold.it/570x270" alt="">
		                                    </a>
		                                </figure>
		                                <div class="details">
		                                    <span class="price">$718</span>
		                                    <h4 class="box-title">Chicago Long Tour</h4>
		                                    <hr>
		                                    <ul class="features check">
		                                        <li>City Tour In 3 Hours</li>
		                                        <li>Enjoy World Famous Restaurant</li>
		                                        <li>Wine Tester Trips</li>
		                                        <li>Night Street Life in Downtown </li>
		                                    </ul>
		                                    <hr>
		                                    <div class="text-center">
		                                        <div class="time">
		                                            <i class="soap-icon-clock yellow-color"></i>
		                                            <span>01 Nov 2014 - 08 Nov 2014</span>
		                                        </div>
		                                    </div>
		                                    <a href="#" class="button btn-small full-width">BOOK NOW</a>
		                                </div>
		                            </article>
		                        </div>
		                        <div class="col-sm-6">
		                            <article class="box">
		                                <figure>
		                                    <a href="#" class="hover-effect">
		                                        <img src="http://placehold.it/570x270" alt="">
		                                    </a>
		                                </figure>
		                                <div class="details">
		                                    <span class="price">$426</span>
		                                    <h4 class="box-title">Paris Tour Package</h4>
		                                    <hr>
		                                    <ul class="features check">
		                                        <li>City Tour In 3 Hours</li>
		                                        <li>Enjoy World Famous Restaurant</li>
		                                        <li>Wine Tester Trips</li>
		                                        <li>Night Street Life in Downtown </li>
		                                    </ul>
		                                    <hr>
		                                    <div class="text-center">
		                                        <div class="time">
		                                            <i class="soap-icon-clock yellow-color"></i>
		                                            <span>01 Nov 2014 - 08 Nov 2014</span>
		                                        </div>
		                                    </div>
		                                    <a href="#" class="button btn-small full-width">BOOK NOW</a>
		                                </div>
		                            </article>
		                        </div>
		                        <div class="col-sm-6">
		                            <article class="box">
		                                <figure>
		                                    <a href="#" class="hover-effect">
		                                        <img src="http://placehold.it/570x270" alt="">
		                                    </a>
		                                </figure>
		                                <div class="details">
		                                    <span class="price">$718</span>
		                                    <h4 class="box-title">Australia Tour</h4>
		                                    <hr>
		                                    <ul class="features check">
		                                        <li>City Tour In 3 Hours</li>
		                                        <li>Enjoy World Famous Restaurant</li>
		                                        <li>Wine Tester Trips</li>
		                                        <li>Night Street Life in Downtown </li>
		                                    </ul>
		                                    <hr>
		                                    <div class="text-center">
		                                        <div class="time">
		                                            <i class="soap-icon-clock yellow-color"></i>
		                                            <span>01 Nov 2014 - 08 Nov 2014</span>
		                                        </div>
		                                    </div>
		                                    <a href="#" class="button btn-small full-width">BOOK NOW</a>
		                                </div>
		                            </article>
		                        </div>
		                        <div class="col-sm-6">
		                            <article class="box">
		                                <figure>
		                                    <a href="#" class="hover-effect">
		                                        <img src="http://placehold.it/570x270" alt="">
		                                    </a>
		                                </figure>
		                                <div class="details">
		                                    <span class="price">$534</span>
		                                    <h4 class="box-title">Dubai Family Tour</h4>
		                                    <hr>
		                                    <ul class="features check">
		                                        <li>City Tour In 3 Hours</li>
		                                        <li>Enjoy World Famous Restaurant</li>
		                                        <li>Wine Tester Trips</li>
		                                        <li>Night Street Life in Downtown </li>
		                                    </ul>
		                                    <hr>
		                                    <div class="text-center">
		                                        <div class="time">
		                                            <i class="soap-icon-clock yellow-color"></i>
		                                            <span>01 Nov 2014 - 08 Nov 2014</span>
		                                        </div>
		                                    </div>
		                                    <a href="#" class="button btn-small full-width">BOOK NOW</a>
		                                </div>
		                            </article>
		                        </div>
		                    </div>
                    		<a href="#" class="button btn-large full-width uppercase">Load More Packages</a>
                    </div>
	            </div>
            </div>   
        </div>
    </section>
</div>
@endsection

@section('script')

@endsection