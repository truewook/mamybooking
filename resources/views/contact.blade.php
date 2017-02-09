@extends('layouts.master')

@section('style')

@endsection

@section('content')
<div class="page-title-container style4">
	<div class="container">
	    <div class="page-title">
	        <i class="soap-icon-support"></i>
	        <h2 class="entry-title">ติดต่อเรา</h2>
	    </div>
	    <ul class="breadcrumbs">
	        <li><a href="{{url('/')}}">HOME</a></li>
	        <li class="active">Contact US</li>
	    </ul>
	</div>
</div>
<section id="content">
	<div class="container">
		<div class="row">
	    	<div class="col-md-12">
	    		<div class="large-block">
                    <h2>องค์กรของเรา</h2>
                    <div class="row image-box style1 team">
                        <div class="col-sm-6 col-md-3">
                            <article class="box">
                                <figure>
                                    <a href="#"><img src="https://www.mamybooking.com/wp-content/uploads/2016/05/muay2-1-260x365.png" alt="" width="270" height="263" /></a>
                                </figure>
                                <div class="details">
                                    <h4 class="box-title"><a href="#">เจ๊หมวย<small>Big Mom</small></a></h4>

                                </div>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <article class="box">
                                <figure>
                                    <a href="#"><img src="https://www.mamybooking.com/wp-content/uploads/2016/05/jo-260x365.jpg" alt="" width="270" height="263" /></a>
                                </figure>
                                <div class="details">
                                    <h4 class="box-title"><a href="#">พีระศิลป์ กฤชเทียมเมฆ<small>Managing Director</small></a></h4>

                                </div>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <article class="box">
                                <figure>
                                    <a href="#"><img src="https://www.mamybooking.com/wp-content/uploads/2016/05/Slack-for-iOS-Upload-260x365.jpg" alt="" width="270" height="263" /></a>
                                </figure>
                                <div class="details">
                                    <h4 class="box-title"><a href="#">ศศิมิตรา ชัยเดชอนันต์กุล<small>Sales Representative</small></a></h4>

                                </div>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <article class="box">
                                <figure>
                                    <a href="#"><img src="https://www.mamybooking.com/wp-content/uploads/2016/05/chris-260x365.jpg" alt="" width="270" height="263" /></a>
                                </figure>
                                <div class="details">
                                    <h4 class="box-title"><a href="#">วรรธนะ รักษาชาติ<small>Content Manager</small></a></h4>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
	    	</div> <!-- col-md-12 -->
	    </div> <!-- row -->
	    <div class="row">
	    	<div class="col-md-6 col-sm-6 col-xs-12">
	    		<div class="travelo-google-map block"></div>
	    	</div>
	    	<div class="col-md-6 col-sm-6 col-xs-12">
                <div class="travelo-box contact-us-box">
                    <h3>บริษัท หม่ามี๊ บุ๊คกิ้ง จำกัด (สาขากรุงเทพมหานคร)</h3>
                    <ul class="contact-address">
                        <li class="address">
                            <i class="soap-icon-address circle"></i>
                            <h5 class="title">ที่อยู่ 2000/44 ซอย เจริญกรุง 72 แขวง วัดพระยาไกร เขต บางคอแหลม จังหวัด กทม. 10120</h5>
                        </li>
                        <li class="phone">
                            <i class="soap-icon-phone circle"></i>
                            <h5 class="title">โทร 02-2921344 </h5>
                            <h5 class="title">แฟกซ์ 02-2921343</h5>
                        </li>
                    </ul>
                </div>
            </div>
	    </div>
        
	    <div class="row">
	    	<div class="col-md-6 col-sm-6 col-xs-12">
	    		<div class="travelo-google-map block"></div>
	    	</div>
	    	<div class="col-md-6 col-sm-6 col-xs-12">
                <div class="travelo-box contact-us-box">
                    <h3>บริษัท หม่ามี๊ บุ๊คกิ้ง จำกัด (สาขาใหญ่)</h3>
                    <ul class="contact-address">
                        <li class="address">
                            <i class="soap-icon-address circle"></i>
                            <h5 class="title">ที่อยู่ 161/76 ม. 11 ถ. สุขุมวิท ต. หนองปรือ อ. บางละมุง จ. ชลบุรี 20150</h5>
                        </li>
                        <li class="phone">
                            <i class="soap-icon-phone circle"></i>
                            <h5 class="title">โทร 038-425228 </h5>
                            <h5 class="title">แฟกซ์ 38-4252293</h5>
                        </li>
                    </ul>
                </div>
            </div>
	    </div>
	    <div class="row">
	    	<div class="col-md-12">
	    		<div class="travelo-box">
                    <form class="contact-form" action="contact-us-handler.php" method="post" onsubmit="return false;">
                        <h4 class="box-title">Send us a Message</h4>
                        <div class="alert small-box" style="display: none;"></div>
                        <div class="row form-group">
                            <div class="col-xs-6">
                                <label>Your Name</label>
                                <input type="text" name="name" class="input-text full-width">
                            </div>
                            <div class="col-xs-6">
                                <label>Your Email</label>
                                <input type="text" name="email" class="input-text full-width">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Your Message</label>
                            <textarea name="message" rows="6" class="input-text full-width" placeholder="write message here"></textarea>
                        </div>
                        <button type="submit" class="btn-large full-width">SEND MESSAGE</button>
                    </form>
                </div>
	    	</div>
	    </div>
	</div>
<section>
@endsection

@section('script')
<!-- Google Map Api -->
<script type='text/javascript' src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
<script type="text/javascript" src="{{asset('js/gmap3.min.js')}}"></script>
    

<script type="text/javascript" src="{{asset('js/contact.js')}}"></script>

    <script type="text/javascript">
        tjq(".travelo-google-map").gmap3({
            map: {
                options: {
                    center: [48.85661, 2.35222],
                    zoom: 12
                }
            },
            marker:{
                values: [
                    {latLng:[48.85661, 2.35222], data:"Paris"}

                ],
                options: {
                    draggable: false
                },
            }
        });
        // tjq(".travelo-google-map2").gmap3({
        //     map: {
        //         options: {
        //             center: [48.85661, 2.35222],
        //             zoom: 12
        //         }
        //     },
        //     marker:{
        //         values: [
        //             {latLng:[48.85661, 2.35222], data:"Paris"}

        //         ],
        //         options: {
        //             draggable: false
        //         },
        //     }
        // });
    </script>
@endsection
