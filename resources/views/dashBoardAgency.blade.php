@extends('layouts.master')

@section('style')

@endsection

@section('content')
<div id="page-wrapper">
    <div class="page-title-container">
        <div class="container">
            <div class="page-title pull-left">
                <h2 class="entry-title">Agency</h2>
            </div>
            <ul class="breadcrumbs pull-right">
                <li><a href="#">HOME</a></li>
                <li class="active">Agency</li>
            </ul>
        </div>
    </div>
    <section id="content" class="gray-area">
        <div class="container">
            <div id="main">
                <div class="tab-container full-width-style arrow-left dashboard">
                    <ul class="tabs">
                        <li class="active"><a data-toggle="tab" href="#profile"><i class="soap-icon-user circle"></i>Profile</a></li>
                        <li class=""><a data-toggle="tab" href="#owner"><i class="soap-icon-businessbag circle"></i>เป็นเจ้าของ</a></li>
                        <li class=""><a data-toggle="tab" href="#settings"><i class="soap-icon-settings circle"></i>Settings</a></li>
                    </ul>
                    <div class="tab-content">
                        <!-- profile -->
                        <div id="profile" class="tab-pane fade in active">
                            <div class="view-profile">
                                <article class="image-box style2 box innerstyle personal-details">
                                    <figure>
                                        <a title="" href="#"><img width="270" height="263" alt="" src="http://placehold.it/270x263"></a>
                                    </figure>
                                    <div class="details">
                                        <div class="col-md-12">
                                            <a href="#" class="button btn-mini pull-right edit-profile-btn">EDIT PROFILE</a>
                                            <h2 class="box-title fullname">Ton Saengket</h2>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-horizontal">
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="username">user name:</label>
                                                    <div class="col-sm-10 label-show">
                                                      agency1
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="firstname">first name:</label>
                                                    <div class="col-sm-10 label-show">
                                                      Ton
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="lastname">last name:</label>
                                                    <div class="col-sm-10 label-show">
                                                      Saengket
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="phone">Phone:</label>
                                                    <div class="col-sm-10 label-show">
                                                      000-0000-0000
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="Address">Address:</label>
                                                    <div class="col-sm-10 label-show">
                                                      7/12 ศรีนครินทร์ ซอย 8
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="Town">Town:</label>
                                                    <div class="col-sm-10 label-show">
                                                      Bangkok
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="Country">Country:</label>
                                                    <div class="col-sm-10 label-show">
                                                      Thailand
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="postcode">Post code:</label>
                                                    <div class="col-sm-10 label-show">
                                                      12110
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="status">Status:</label>
                                                    <div class="col-sm-10 label-show">
                                                      Agency
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <hr>
                                <h2>About You</h2>
                                <div class="intro">
                                    <p>เป็น agency ที่ได้รับการรับรอง จากแอดมิน</p>
                                </div>
                            </div>
                            <div class="edit-profile">
                                <form class="edit-profile-form">
                                    <h2>ข้อมูลส่วนตัว</h2>
                                    <div class="col-sm-9 no-padding no-float">
                                        <div class="row form-group">
                                            <div class="col-sms-6 col-sm-6">
                                                <label>First Name</label>
                                                <input type="text" class="input-text full-width" placeholder="">
                                            </div>
                                            <div class="col-sms-6 col-sm-6">
                                                <label>Last Name</label>
                                                <input type="text" class="input-text full-width" placeholder="">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-sms-6 col-sm-6">
                                                <label>Email Address</label>
                                                <input type="text" class="input-text full-width" placeholder="">
                                            </div>
                                            <div class="col-sms-6 col-sm-6">
                                                <label>Verify Email Address</label>
                                                <input type="text" class="input-text full-width" placeholder="">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-sms-6 col-sm-6">
                                                <label>Country Code</label>
                                                <div class="selector">
                                                    <select class="full-width">
                                                        <option>United Kingdom (+44)</option>
                                                        <option>United States (+1)</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sms-6 col-sm-6">
                                                <label>Phone Number</label>
                                                <input type="text" class="input-text full-width" placeholder="">
                                            </div>
                                        </div>
                                        <label>Date of Birth</label>
                                        <div class="row form-group">
                                            <div class="col-sms-4 col-sm-2">
                                                <div class="selector">
                                                    <select class="full-width">
                                                        <option value="">date</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sms-4 col-sm-2">
                                                <div class="selector">
                                                    <select class="full-width">
                                                        <option value="">month</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sms-4 col-sm-2">
                                                <div class="selector">
                                                    <select class="full-width">
                                                        <option value="">year</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <h2>ที่อยู่</h2>
                                        <div class="row form-group">
                                            <div class="col-sms-6 col-sm-6">
                                                <label>Street Name</label>
                                                <input type="text" class="input-text full-width">
                                            </div>
                                            <div class="col-sms-6 col-sm-6">
                                                <label>Address</label>
                                                <input type="text" class="input-text full-width">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-sms-6 col-sm-6">
                                                <label>City</label>
                                                <div class="selector">
                                                    <select class="full-width">
                                                        <option value="">Select...</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sms-6 col-sm-6">
                                                <label>Country</label>
                                                <div class="selector">
                                                    <select class="full-width">
                                                        <option value="">Select...</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-sms-6 col-sm-6">
                                                <label>Region State</label>
                                                <div class="selector">
                                                    <select class="full-width">
                                                        <option value="">Select...</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <h2>Upload Profile Photo</h2>
                                        <div class="row form-group">
                                            <div class="col-sms-12 col-sm-6 no-float">
                                                <div class="fileinput full-width">
                                                    <input type="file" class="input-text" data-placeholder="select image/s">
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <h2>Describe Yourself</h2>
                                        <div class="form-group">
                                            <textarea rows="5" class="input-text full-width" placeholder="please tell us about you"></textarea>
                                        </div>
                                        <div class="from-group">
                                            <button type="submit" class="btn-medium col-sms-6 col-sm-4">UPDATE SETTINGS</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- end view profile -->
                        <div id="owner" class="tab-pane fade">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="tab-container1">
                                        <ul class="tabs1">
                                            <li class="active"><a href="#carTab" data-toggle="tab">CARS</a></li>
                                            <li class=""><a href="#tourTab" data-toggle="tab">TOUR</a></li>
                                        </ul>
                                        <div class="tab-content full-width">
                                            <div class="tab-pane fade in active" id="carTab">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <a href="#" class="button btn-medium green pull-right"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;เพิ่ม</a>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="car-list">
                                                            <div class="row image-box car listing-style1">
                                                                <?php for ($i=1; $i <= 12 ; $i++) { ?>
                                                                <div class="col-sms-6 col-sm-6 col-md-6">
                                                                    <article class="box">
                                                                        <figure>
                                                                            <a title="" href="#"><img alt=""  src="{{asset('images/Isuzu-Mu-X.jpg')}}"></a>
                                                                        </figure>
                                                                        <div class="details">
                                                                            <span class="price"><small>per day</small>$45.39</span>
                                                                            <h4 class="box-title">Economy Car<small>bmw mini</small></h4>
                                                                            <div class="amenities">
                                                                                <h1> jdfkdjkf </h1>
                                                                                <ul>
                                                                                    <li><i class="soap-icon-user circle"></i>4</li>
                                                                                    <li><i class="soap-icon-suitcase circle"></i>3</li>
                                                                                    <li><i class="soap-icon-aircon circle"></i>AC</li>
                                                                                    <li><i class="soap-icon-fueltank circle"></i>12</li>
                                                                                    <li><i class="soap-icon-fmstereo circle"></i>YES</li>
                                                                                </ul>
                                                                            </div>
                                                                            <p class="mile"><span class="skin-color">Mileage:</span> up to 300 miles</p>
                                                                            <a href="#" class="button btn-mini yellow pull-right"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;Edit</a>
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
                                            <div class="tab-pane fade" id="tourTab">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <a href="#" class="button btn-medium green pull-right"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;เพิ่ม</a>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
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
                                                                            <div class="action">
                                                                                <a class="button btn-mini light-yellow pull-right"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;Edit</a>
                                                                            </div>
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
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="settings" class="tab-pane fade">
                            <h2>Account Settings</h2>
                            <h5 class="skin-color">Change Your Password</h5>
                            <form>
                                <div class="row form-group">
                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                        <label>Old Password</label>
                                        <input type="text" class="input-text full-width">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                        <label>Enter New Password</label>
                                        <input type="text" class="input-text full-width">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                        <label>Confirm New password</label>
                                        <input type="text" class="input-text full-width">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button class="btn-medium">UPDATE PASSWORD</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('script')
<script type="text/javascript">
    tjq(document).ready(function() {
        tjq("#profile .edit-profile-btn").click(function(e) {
            e.preventDefault();
            tjq(".view-profile").fadeOut();
            tjq(".edit-profile").fadeIn();
        });

        setTimeout(function() {
            tjq(".notification-area").append('<div class="info-box block"><span class="close"></span><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus ab quis a dolorem, placeat eos doloribus esse repellendus quasi libero illum dolore. Esse minima voluptas magni impedit, iusto, obcaecati dignissimos.</p></div>');
        }, 10000);
    });
    tjq('a[href="#profile"]').on('shown.bs.tab', function (e) {
        tjq(".view-profile").show();
        tjq(".edit-profile").hide();
    });
</script>

@endsection
