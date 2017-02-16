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
	<section id="content" class="gray-area">
        <div class="container">
            <div id="main">
            	<div class="row">
	            	<div class="col-sm-4 col-md-3">
                        <h4 class="search-results-title"><i class="soap-icon-search"></i><b>627</b> results found.</h4>
                        <div class="toggle-container filters-container">
                            <div class="panel style1 arrow-right">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" href="#modify-search-panel" class="" aria-expanded="true">Quick Search</a>
                                </h4>
                                <div id="modify-search-panel" class="panel-collapse collapse in">
                                    <div class="panel-content">
                                        <form method="post">
                                            <div class="form-group">
                                                <label>คำค้น</label>
                                                <input type="text" class="input-text full-width" placeholder="" value="" />
                                            </div>
                                            <div class="form-group">
                                                <label>pickup from</label>
                                                <input type="text" class="input-text full-width" placeholder="city, district, or specific airpot" value="" />
                                            </div>
                                            <br />
                                            <button class="btn-medium icon-check uppercase full-width">search again</button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="panel style1 arrow-right">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" href="#price-filter" class="" aria-expanded="true">Price</a>
                                </h4>
                                <div id="price-filter" class="panel-collapse collapse in">
                                    <div class="panel-content">
                                        <div id="price-range"></div>
                                        <br />
                                        <span class="min-price-label pull-left"></span>
                                        <span class="max-price-label pull-right"></span>
                                        <div class="clearer"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="panel style1 arrow-right">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" href="#rating-filter" class="" aria-expanded="true">User Rating</a>
                                </h4>
                                <div id="rating-filter" class="panel-collapse collapse in">
                                    <div class="panel-content">
                                        <div id="rating5" class="five-stars-container editable-rating"></div>
                                        <br />
                                        <div id="rating4" class="five-stars-container editable-rating"></div>
                                        <br />
                                        <div id="rating3" class="five-stars-container editable-rating"></div>
                                        <br />
                                        <div id="rating2" class="five-stars-container editable-rating"></div>
                                        <br />
                                        <div id="rating1" class="five-stars-container editable-rating"></div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="panel style1 arrow-right">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" href="#cartype-filter" class="" aria-expanded="true">Car Type</a>
                                </h4>
                                <div id="cartype-filter" class="panel-collapse collapse filters-container in">
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
                                    <a data-toggle="collapse" href="#car-rental-agent-filter" class="" aria-expanded="true"">Car Rental Agent</a>
                                </h4>
                                <div id="car-rental-agent-filter" class="panel-collapse collapse in">
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
                                    <a data-toggle="collapse" href="#car-preferences-filter" class="" aria-expanded="true">Car Preferences</a>
                                </h4>
                                <div id="car-preferences-filter" class="panel-collapse collapse in">
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
                        <br>
						<div class="tour-packages add-clearfix image-box">      
		                    <div class="row add-clearfix image-box style1 tour-locations">
		                    	<?php for ($i=1; $i <= 12 ; $i++) { ?>
		                    		
		                        <div class="col-sm-6 col-md-6">
		                            <article class="box">
		                                <figure>
		                                    <a href="#">
		                                        <img src="{{asset('images/HorseShoe1-1024x737-1-400x270.png')}}" width="100%" height="auto" alt="">
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

		                       	<?php } ?>
		                       
		                    </div>
                    		<a href="#" class="button btn-large full-width uppercase">Load More Packages</a>
                    	</div>
                    </div>
	            </div>
            </div>   
        </div>
    </section>
@endsection

@section('script')
 	<!-- load BXSlider scripts -->
    <script type="text/javascript" src="{{asset('components/jquery.bxslider/jquery.bxslider.min.js')}}"></script>
    
    <!-- load FlexSlider scripts -->
    <script type="text/javascript" src="{{asset('components/flexslider/jquery.flexslider-min.js')}}"></script>
    <script type="text/javascript">
        tjq(document).ready(function() {
            tjq("#price-range").slider({
                range: true,
                min: 0,
                max: 1000,
                values: [ 0, 1000 ],
                slide: function( event, ui ) {
                    tjq(".min-price-label").html( "$" + ui.values[ 0 ]);
                    tjq(".max-price-label").html( "$" + ui.values[ 1 ]);
                }
            });
            tjq(".min-price-label").html( "$" + tjq("#price-range").slider( "values", 0 ));
            tjq(".max-price-label").html( "$" + tjq("#price-range").slider( "values", 1 ));

            tjq("#rating5").slider({
                range: "min",
                value: 50,
                min: 0,
                max: 50,
            });
            tjq("#rating4").slider({
                range: "min",
                value: 40,
                min: 0,
                max: 50,
            });
            tjq("#rating3").slider({
                range: "min",
                value: 30,
                min: 0,
                max: 50,
            });
            tjq("#rating2").slider({
                range: "min",
                value: 20,
                min: 0,
                max: 50,
            });
            tjq("#rating1").slider({
                range: "min",
                value: 10,
                min: 0,
                max: 50,
            });
        });
    </script>
@endsection