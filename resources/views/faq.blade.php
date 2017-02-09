@extends('layouts.master')

@section('style')

@endsection

@section('content')
<div class="page-title-container style4">
    <div class="container">
        <div class="page-title">
            <!-- <i class="soap-icon-plane-right takeoff-effect"></i> -->
            <i class="fa fa-question-circle" aria-hidden="true"></i>
            <h2 class="entry-title">คำถามที่พบบ่อย</h2>
        </div>
        <ul class="breadcrumbs">
            <li><a href="{{url('/')}}">HOME</a></li>
            <li class="active">FAQ</li>
        </ul>
    </div>
</div>
<section id="content">
<div class="container">
    <div class="row">
    	<br>
        <div class="col-md-4">
        	<div class="col-md-12">
                <div class="row">
                    <h2>SEND YOUR REQUEST</h2>
                    <div class="contact-form-container white-bg">
                        <form class="contact-form" method="post" role="form">
                            <div class="row form-group">
                                <div class="col-xs-6">
                                    <label for="name">your name</label>
                                    <input type="text" class="input-text full-width" id="name" placeholder="" />
                                </div>
                                <div class="col-xs-6">
                                    <label for="email">email address</label>
                                    <input type="email" class="input-text full-width" id="email" placeholder="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Question</label>
                                <textarea class="full-width" rows="6"></textarea>
                            </div>
                            <div class="form-group clearfix">
                                <div class="pull-right col-xs-6">
                                    <div class="row">
                                      <button type="submit" class="button btn-medium full-width">SEND QUESTION</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="row">
        	<div class="col-md-12">
                <h2>MAMY BOOKING</h2>
                <div class="toggle-container box" id="accordion2">
                    <div class="panel style1">
                        <h4 class="panel-title">
                            <a class="collapsed" href="#acc111" data-toggle="collapse" data-parent="#accordion1">Mamy Booking คือใคร ?</a>
                        </h4>
                        <div class="panel-collapse collapse" id="acc111">
                            <div class="panel-content">
                                <p>บริษัท Mamy Booking (หม่ามี๊บุ๊คกิ้ง) คือบริษัท  Online Travel Agency หรือ OTA ให้บริการในรูปแบบออนไลน์ ที่การันตีดีลที่ดีที่สุดสำหรับการท่องเที่ยวที่ครบรูปแบบที่สุดและไม่ต้องผ่านนายหน้า </p>
                            </div><!-- end content -->
                        </div>
                    </div>
                    
                    <div class="panel style1">
                        <h4 class="panel-title">
                            <a class="collapsed" href="#acc22" data-toggle="collapse" data-parent="#accordion1">บริษัท Mamy Booking แตกต่างจากบริษัทอื่นๆ ยังไง</a>
                        </h4>
                        <div class="panel-collapse collapse" id="acc22">
                            <div class="panel-content">
                                <p>การันตีราคาที่ถูกที่สุดให้กับสมาชิกทุกท่าน
    บริการแบบ One Stop Service ซึ่งมีความรวดเร็วและสะดวกสบายให้กับสมาชิกทุกท่าน โดยสมาชิกทุกท่านสามารถจัดจองทริปท่องเที่ยวของตัวเองได้อย่างง่ายดายเพียงไม่กี่คลิ๊ก
    บริการการชำระเงินที่รวดเร็วและสะดวกสบาย โดยสมาชิกทุกท่านสามารถชำระได้ถึง 3 ช่องทางคือ ผ่านระบบออนไลน์ Paypal ผ่านระบบการโอนเงิน และผ่านระบบ Kasikorn Payment Gateway ทำให้สมาชิกทุกท่านสามารถชำระเงินได้ผ่านบัตรเครดิต/เดบิตเพียงใบเดียว
    ใช้ระบบรักษาความปลอดภัย Secure Socket Layer (SSL) เพื่อสร้างความมั่นใจให้กับสมาชิกทุกท่านในเรื่องของข้อมูลส่วนตัว บัตรเครดิต/เดบิต และรหัสผ่านต่างๆ</p>
                            </div><!-- end content -->
                        </div>
                    </div>
                    
                    <div class="panel style1">
                        <h4 class="panel-title">
                            <a class="collapsed" href="#acc33" data-toggle="collapse" data-parent="#accordion1">สามารถเชื่อใจ Mamy Booking ได้หรือไม่ ?</a>
                        </h4>
                        <div class="panel-collapse collapse" id="acc33">
                            <div class="panel-content">
                                <p>บริษัท Mamy Booking นั้นการันตีเรื่องความปลอดภัยของลูกค้า ซึ่งสามารถตรวจสอบได้
    ใช้ระบบรักษาความปลอดภัย Secure Socket Layer (SSL) เพื่อสร้างความมั่นใจให้กับสมาชิกทุกท่านในเรื่องของข้อมูลส่วนตัว บัตรเครดิต/เดบิต และรหัสผ่านต่างๆ
    มีรับรองจากกรมพัฒนาธุรกิจการค้ากระทรวงพาณิชย์ (DBD) : #0205559009570
    มีระบบจ่ายเงินแบบออนไลน์ Paypal และ Kasikorn Payment Gateway</p>
                            </div><!-- end content -->
                        </div>
                    </div>
                </div>
            </div>
        	<div class="col-md-12">
                <h2>การชำระเงิน/จอง</h2>
                <div class="toggle-container box" id="accordion3">
                    <div class="panel style1">
                        <h4 class="panel-title">
                            <a class="collapsed" href="#acc4" data-toggle="collapse" data-parent="#accordion1">สามารถชำระเงินค่าบริการได้ช่องทางใหนบ้าง ?</a>
                        </h4>
                        <div class="panel-collapse collapse" id="acc4">
                            <div class="panel-content">
                                <p>เรามีบริการชำระเงินผ่านระบบ 3 ช่อง คือ Paypal, Payment Gateway หรือจ่ายเงินผ่านบัตรเดบิต/เครดิตในรูปแบบออนไลน์, และโอนเงิน</p>
                            </div><!-- end content -->
                        </div>
                    </div>
                    
                    <div class="panel style1">
                        <h4 class="panel-title">
                            <a class="collapsed" href="#acc5" data-toggle="collapse" data-parent="#accordion1">จองแล้วเปลี่ยนวันจองได้หรือไม่ ?</a>
                        </h4>
                        <div class="panel-collapse collapse" id="acc5">
                            <div class="panel-content">
                                <p>สมาชิกที่ได้ทำการจองทริป/โรงแรม/รถเช่ากับทาง Mamy Booking ไปแล้วต้องการจะเปลี่ยนวัน สามารถติดต่อเจ้าหน้าที่ได้ทันที โดยเงื่อนไขการเปลี่ยนวันนั้นต้องเป็นไปตามที่บริษัทกำหนด(หรือ 3 วันก่อนวันออกเดินทางของสมาชิก) ***หมายเหตุ:เว้นแต่จะมีสาเหตุอันควร เช่น มีใบรับรองแพทย์ หรืออุบัติต่างๆ ซึ่งสามารถติดต่อทางบริษัท Mamy Booking เพื่อตกลงเลื่อนวันจองได้ ทั้งนี้ทางบริษัทขอสงวนสิทธิ์ในการคืนเงิน หากสมาชิกไม่ปฎิบัติตามเงื่อนไขดังกล่าว***</p>
                            </div><!-- end content -->
                        </div>
                    </div>              
                </div>
            </div>

        	<div class="col-md-12">
                <h2>ทั่วไป</h2>
                <div class="toggle-container box" id="accordion3">
                    <div class="panel style1">
                        <h4 class="panel-title">
                            <a class="collapsed" href="#acc6" data-toggle="collapse" data-parent="#accordion1">OTA คืออะไร</a>
                        </h4>
                        <div class="panel-collapse collapse" id="acc6">
                            <div class="panel-content">
                                <p>Online Travel Agencies (OTAs) คือเว็บไซต์กลุ่มหนึ่งผู้ให้บริการด้านการจองที่พักโรงแรมรวมถึงบริการด้านการท่องเที่ยวต่างๆ ซึ่งทำหน้าที่เป็นตัวกลางในการให้บริการให้สมาชิกได้เจอกับผู้ให้บริการที่พัก ตั๋วเครื่องบิน บริการท่องเที่ยวต่างๆ และจัดจองที่พักตั๋วโรงแรมให้</p>
                            </div><!-- end content -->
                        </div>
                    </div>
                    
                    <div class="panel style1">
                        <h4 class="panel-title">
                            <a class="collapsed" href="#acc7" data-toggle="collapse" data-parent="#accordion1">One Stop Service คืออะไร ?</a>
                        </h4>
                        <div class="panel-collapse collapse" id="acc7">
                            <div class="panel-content">
                                <p>One Stop Service คือ การรวมงานบริการที่เกี่ยวข้องกันมาอยู่ในสถานที่เดียวกัน ในลักษณะที่สามรถเสร็จในขั้นตอนหรือเสร็จในจุดให้บริการเดียว โดยมีจุดประสงค์เพื่อให้การให้บริการมีความสะดวกสบายและรวดเร็วยิ่งขึ้น</p>
                            </div><!-- end content -->
                        </div>
                    </div>  
                    <div class="panel style1">
                        <h4 class="panel-title">
                            <a class="collapsed" href="#acc8" data-toggle="collapse" data-parent="#accordion1">Payment Gateway คืออะไร ?</a>
                        </h4>
                        <div class="panel-collapse collapse" id="acc8">
                            <div class="panel-content">
                                <p>  Payment Gateway คือ เว็บไซต์ที่สามารถจ่ายเงินออนไลน์ได้ ซึ่งเมื่อก่อนผู้ซื้ออาจจะต้องออกไปโอนเงินที่ธนาคารหรือเดินไปจ่ายเงินที่ 7-11 แต่ระบบ Payment Gateway เป็นอีกช่องทางนึงให้ผู้ซื้อสามารถชำระเงินจากคอมพิวเตอร์ได้เลยเพิ่มความสะดวกสบายให้กับผู้ซื้อมากขึ้น ซึ่งระบบ Payment Gateway ถูกแบ่งออกเป็น 2 รูปแบบคือ เชื่อมต่อกับธนาคารโดยตรง หรือ ผ่านเว็บไซต์ที่เป็นตัวกลาง เช่น Paypal</p>
                            </div><!-- end content -->
                        </div>
                    </div>    
                    <div class="panel style1">
                        <h4 class="panel-title">
                            <a class="collapsed" href="#acc9" data-toggle="collapse" data-parent="#accordion1">Secure Socket Layer (SSL) คืออะไร ?</a>
                        </h4>
                        <div class="panel-collapse collapse" id="acc9">
                            <div class="panel-content">
                                <p>Secure Socket Layer (SSL) เป็นเครื่องหมายรับรองความปลอดภัยทางอิเล็กทรอนิกส์ที่อนุมัติโดย Certificate Authority (CA) ซึ่งเว็บไซต์ที่ใช้บริการ SSL จะเรียกผ่าน URL บน Browser ต่างๆ ด้วย https:// และมีรูปกุญแจ แสดงอยู่ในส่วนของ Address Bar ซึ่งการแสดงข้อมูลการจด SSL อาจจะแตกต่างกันไปตาม Brand และตามลักษณะของเทคโนโลยีของ SSL ที่ใช้บริการอยู่</p>
                            </div><!-- end content -->
                        </div>
                    </div>               
                </div>
            </div>

        	<div class="col-md-12">
                <h2>ช่องทางการติดต่อ</h2>
                <div class="toggle-container box" id="accordion3">
                    <div class="panel style1">
                        <h4 class="panel-title">
                            <a class="collapsed" href="#acc10" data-toggle="collapse" data-parent="#accordion1">จะเป็น Partner กับ Mamy Booking ต้องทำยังไง ?</a>
                        </h4>
                        <div class="panel-collapse collapse" id="acc10">
                            <div class="panel-content">
                                <p>วิธีการสมัครเป็น Partner กับ Mamy Booking สามารถทำได้โดยการติดต่อโดยตรงมาที่ Tel. 081-305-3355 เท่านั้น</p>
                            </div><!-- end content -->
                        </div>
                    </div>
                    
                    <div class="panel style1">
                        <h4 class="panel-title">
                            <a class="collapsed" href="#acc11" data-toggle="collapse" data-parent="#accordion1">สามารถติดตาม Mamy Booking ได้ช่องทางใหนบ้าง ?</a>
                        </h4>
                        <div class="panel-collapse collapse" id="acc11">
                            <div class="panel-content">
                                <p>Facebook: Mamy Booking</p>
    							<p>IG: mamybooking</p>
    							<p>Twitter: mamybooking</p>
    							<p>Line ID: @mamybooking</p>
    							<p>Mobile: 081-305-355 หรือ 061-386-3388</p>
    							<p>www.mamybooking.com</p>
                            </div><!-- end content -->
                        </div>
                    </div>              
                </div>
            </div>
        </div>  
        </div>
    </div>
</div>
</section>
@endsection

@section('script')

@endsection
