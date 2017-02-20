@extends('layouts.master')

@section('menu-tour-active')
active 
@endsection

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
                                                <label>{{trans('tour.keyword')}}</label>
                                                <input type="text" class="input-text full-width" placeholder="" value="" />
                                            </div>
                                            <div class="form-group row">
                                            <div class="col-md-12">
                                                <label>{{trans('tour.lang_choose_location')}}</label>
                                                <!-- <input type="text" class="input-text full-width" placeholder="city, district, or specific airpot" value="" /> -->
                                                <div class="selector">
                                                <select class="full-width" name="location">
<option value="" selected="selected">เลือกสถานที่</option>
<option value="doiinthanon">Doi Inthanon (ดอยอินทนนท์)</option>
<option value="doi-suthep">Doi Suthep (ดอยสุเทพ)</option>
<option value="chiang-mai">Chiang Mai (เชียงใหม่)</option>
<option value="goldentriangle">Golden Triangle (สามเหลี่ยมทองคำ)</option>
<option value="wat-rong-khun">Wat Rong Khun (วัดร่องขุ่น)</option>
<option value="chiang-rai">Chiang Rai (เชียงราย)</option>
<option value="khao-sok">Khao Sok (เกาะสก)</option>
<option value="koh-tao">Koh Tao (เกาะเต่า)</option>
<option value="koh-samui">Koh Samui (เกาะสมุย)</option>
<option value="koh-pha-ngan">Koh Pha-Ngan (เกาะพงัน)</option>
<option value="koh-nang-yuan">Koh Nang Yuan (เกาะนางยวน)</option>
<option value="angthong-islands-national-marine-park">Angthong Islands National Marine Park (อ่างทอง)</option>
<option value="cheow-lan-waterfall">Cheow Lan Waterfall (เขื่อนเชี่ยวหลาน)</option>
<option value="surat-thani">Surat Thani (สุราษฎร์ธานี)</option>
<option value="koh-adang">Koh Adang (เกาะอาดัง)</option>
<option value="koh-hin-ngam">Koh Hin Ngam (เกาะหินงาม)</option>
<option value="koh-lipe">Koh Lipe (เกาะหลีเป๊ะ)</option>
<option value="koh-ravi">Koh Ravi (เกาะระวิ)</option>
<option value="koh-tarutao">Koh Tarutao (เกาะตะรุเตา)</option>
<option value="pakbara">Pakbara (ปากบารา)</option>
<option value="satun">Satun (สตูล)</option>
<option value="%e0%b9%89horse-shoe-island">Horse Shoe Island (เกาะฮอสชู)</option>
<option value="cocks-comb-island">Cock's Comb Island (เกาะหัวใจมรกต)</option>
<option value="kawthaung">Kawthaung (แก้วท่วง)</option>
<option value="son-island">Son Island (เกาะสน)</option>
<option value="zedetkyikyun-island">Zedetkyikyun Island ()</option>
<option value="tafook-island">Tafook Island (เกาะตาฟุ๊ก)</option>
<option value="yeepun-island">Yeepun Island (เกาะญี่ปุ่น)</option>
<option value="khang-khao-island">Khang Khao Island (เกาะข้างข้าว)</option>
<option value="kham-tok-island">Kham Tok Island (เกาะข้ามตก)</option>
<option value="ranong">Ranong (ระนอง)</option>
<option value="promthep-cape">Promthep Cape (แหลมพรมเทพ)</option>
<option value="maithon-island">Maithon Island (เกาะไม้ท่อน)</option>
<option value="bamboo-island">Bamboo Island (เกาะแบมบู)</option>
<option value="coral-island">Coral Island (เกาะคอรัล)</option>
<option value="racha-island">Racha Island (เกาะราชา)</option>
<option value="naka-island">Naka Island (เกาะนาคา)</option>
<option value="maya-bay">Maya Bay (อ่าวมาหยา)</option>
<option value="phuket">Phuket (ภูเก็ต)</option>
<option value="koh-lan">Koh Lan (เกาะล้าน)</option>
<option value="pattaya">Pattaya (พัทยา)</option>
<option value="khao-lak">Khao Lak (เขาหลัก)</option>
<option value="koh-khai">Koh Khai (เกาะไข่)</option>
<option value="james-bond-island">James Bond Island (เกาะเจมส์บอนด์)</option>
<option value="hong-island">Hong Island (เกาะห้อง)</option>
<option value="panak-island">Panak Island (เกาะพนัก)</option>
<option value="panyee-island">Panyee Island (เกาะปันหยี)</option>
<option value="phang-nga">Phang-nga (พังงา)</option>
<option value="phang-nga-bay">Phang-nga Bay (อ่าวพังงา)</option>
<option value="surin-islands">Surin Islands (หมู่เกาะสุรินทร์)</option>
<option value="similan-islands">Similan Islands (หมู่เกาะสิมิลัน)</option>
<option value="tham-lod">Tham Lod (ถ้ำลอด)</option>
<option value="koh-changtrat">Koh Chang (เกาะช้าง)</option>
<option value="trat">Trat (ตราด)</option>
<option value="lawa-island">Lawa Island (เกาะลาวา)</option>
<option value="%e0%b9%87hin-pae">Hin Pae (หินแพ)</option>
<option value="chumphon">Chumphon (ชมพร)</option>
<option value="rai-island">Rai Island (เกาะไร่)</option>
<option value="krabi">Krabi (กระบี่)</option>
<option value="chicken-island">Chicken Island (เกาะไก่)</option>
<option value="dang-island">Dang Island (เกาะแดง)</option>
<option value="lading-island">Lading Island (เกาะลาดิง)</option>
<option value="pakbia-island">Pakbia Island (เกาะปากเบีย)</option>
<option value="poda-island">Poda Island (เกาะโพดา)</option>
<option value="tub-island">Tub Island (เกาะทับ)</option>
<option value="loh-samah-bay">Loh Samah Bay (เกาะพีพีเล)</option>
<option value="phi-phi-islands">Phi Phi Islands (หมู่เกาะพีพี)</option>
<option value="viking-cave">Viking Cave (ถ้ำไวกิ้ง)</option>
<option value="phra-nang-cave">Phra Nang Cave (อ่าวพระนาง)</option>
</select>
</div>
    </div>
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
                                    <a data-toggle="collapse" href="#cartype-filter" class="" aria-expanded="true">แท็ก</a>
                                </h4>
                                <div id="cartype-filter" class="panel-collapse collapse filters-container in">
                                    <div class="panel-content">
                                        <ul class="check-square filters-option">
                                            <li><a href="#">ครอบครัว<small>(10)</small></a></li>
                                            <li><a href="#">ชมทิวทัศน์<small>(82)</small></a></li>
                                           
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
		                                    <a href="{{URL::to('/tour/detail/'.str_slug('ทัวร์ 3 เกาะของระนอง, ทัวร์4 เกาะหัวใจมรกต 3วัน 2คืน'))}}">
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