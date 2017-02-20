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
                        <li class=""><a data-toggle="tab" href="#ownercar"><i class="soap-icon-businessbag circle"></i>บริการรถเช่า</a></li>
                        <li class=""><a data-toggle="tab" href="#ownertour"><i class="soap-icon-businessbag circle"></i>บริการรถทัวร์</a></li>
                        <li class=""><a data-toggle="tab" href="#settings"><i class="soap-icon-settings circle"></i>Settings</a></li>
                    </ul>
                    <div class="tab-content">
                        <!-- profile -->
                        <div id="profile" class="tab-pane fade in active">
                            <div class="row" style="border-bottom: 1px solid #ddd;">
                                <div class="col-md-6"><h2 class="kanit">ข้อมูลส่วนตัว</h2></div>
                                <div class="col-md-6"><a href="{{url('dashboardagency/car/ceate')}}" class="button btn-medium dark-blue2 pull-right edit-profile-btn"><i class="fa fa-plus" aria-hidden="true"></i> แก้ไข</a></div>
                            </div>
                            <div class="view-profile">
                                <article class="image-box style2 box innerstyle personal-details">
                                    <figure>
                                        <a title="" href="#"><img width="270" height="263" alt="" src="http://placehold.it/270x263"></a>
                                    </figure>
                                    <div class="details">
                                        <div class="col-md-12">
                                            <!-- <a href="#" class="button btn-mini pull-right edit-profile-btn">EDIT PROFILE</a> -->
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
                        <div id="ownercar" class="tab-pane fade">
                            <div class="row" style="border-bottom: 1px solid #ddd;">
                                <div class="col-md-6"><h2 class="kanit">รายการ รถเช่า</h2></div>
                                <div class="col-md-6"><a href="{{url('dashboardagency/car/ceate')}}" class="button btn-medium dark-blue2 pull-right"><i class="fa fa-plus" aria-hidden="true"></i> เพิ่ม</a></div>
                            </div>
                            <div class="car-list listing-style3 car">
                                @for($i=0; $i < 10 ; $i++)
                                <article class="box tour-box-dashboard">
                                    <figure class="col-xs-3">
                                        <span><img alt="" src="http://placehold.it/270x160"></span>
                                    </figure>
                                    <div class="details col-xs-9 clearfix">
                                        <div class="col-sm-8">
                                            <div class="clearfix">
                                                <h4 class="box-title">Economy Car<small>bmw mini</small></h4>
                                                <div class="logo">
                                                    <img src="http://placehold.it/110x25" alt="" />
                                                </div>
                                            </div>
                                            <div class="amenities">
                                                <ul>
                                                    <li><i class="soap-icon-user circle"></i>4</li>
                                                    <li><i class="soap-icon-suitcase circle"></i>3</li>
                                                    <li><i class="soap-icon-aircon circle"></i>AC</li>
                                                    <li><i class="soap-icon-fueltank circle"></i>12</li>
                                                    <li><i class="soap-icon-fmstereo circle"></i>YES</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-2 character">
                                            <dl class="">
                                                <dt class="skin-color">mileage</dt><dd>3000 miles</dd>
                                                <dt class="skin-color">Pickup Time</dt><dd>5:45 pm</dd>
                                                <dt class="skin-color">Location</dt><dd>London city</dd>
                                            </dl>
                                        </div>
                                        <div class="action col-xs-6 col-sm-2">
                                            <a href="{{url('')}}" class="button btn-small sky-blue1 full-width text-center">แก้ไข</a>
                                                <a href="{{url('')}}" class="button btn-small red full-width text-center">ลบ</a>
                                        </div>
                                    </div>
                                </article>
                                @endfor
                            </div>
                        </div>
                        <div id="ownertour" class="tab-pane fade">
                            <div class="row" style="border-bottom: 1px solid #ddd;">
                                <div class="col-md-6"><h2 class="kanit">รายการ ทริปท่องเที่ยว</h2></div>
                                <div class="col-md-6"><a href="{{url('dashboardagency/tour/ceate')}}" class="button btn-medium dark-blue2 pull-right"><i class="fa fa-plus" aria-hidden="true"></i> เพิ่ม</a></div>
                            </div>
                            
                            <div class="hotel-list listing-style3 hotel">
                                @for($i=0; $i < 10 ; $i++)
                                <article class="box car-box-dashboard">
                                    <figure class="col-sm-5 col-md-4">
                                        <a title="" href="ajax/slideshow-popup.html" class="popup-gallery"><img width="270" height="160" alt="" src="http://placehold.it/270x160"></a>
                                    </figure>
                                    <div class="details col-sm-7 col-md-8">
                                        <div>
                                            <div>
                                                <h4 class="box-title">Hotel Hilton and Resorts<small><i class="soap-icon-departure yellow-color"></i> Bastille, Paris france</small></h4>
                                                <div class="amenities">
                                                    <i class="soap-icon-wifi circle"></i>
                                                    <i class="soap-icon-fitnessfacility circle"></i>
                                                    <i class="soap-icon-fork circle"></i>
                                                    <i class="soap-icon-television circle"></i>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="five-stars-container">
                                                    <span class="five-stars" style="width: 80%;"></span>
                                                </div>
                                                <span class="review">270 reviews</span>
                                            </div>
                                        </div>
                                        <div>
                                            <p>Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id, consectetur adipi deese cing elit maus fringilla bibe endum.</p>
                                            <div>
                                                <a href="{{url('')}}" class="button btn-small sky-blue1 full-width text-center">แก้ไข</a>
                                                <a href="{{url('')}}" class="button btn-small red full-width text-center">ลบ</a>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                @endfor
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
