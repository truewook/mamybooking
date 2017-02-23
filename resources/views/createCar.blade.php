@extends('layouts.master')

@section('style')

@endsection

@section('content')
<div id="page-wrapper">
    <div class="page-title-container">
        <div class="container">
            <div class="page-title pull-left">
                <h2 class="entry-title">CreateCar</h2>
            </div>
            <ul class="breadcrumbs pull-right">
                <li><a href="#">HOME</a></li>
                <li class="active">CreateCar</li>
            </ul>
        </div>
    </div>
    <section id="content" class="gray-area">
        <div class="container block">
        	<div class="white" style="background-color: white;">
	            <form>
					<div class="row">
						<div class="col-md-12" style="height: 300px;">
							<center><h1><font color="red">Upload Picture</font></h1></center>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="col-md-12">
								<h2>ข้อมูลรถ</h2>
								<hr>
							</div>
	                        <div class="row">
	                            <div class="col-md-7">
	                            	<div class="row">
	                            		<div class="col-md-12">
	                            			<div class="form-group col-sm-6 col-md-3">
			                                    <label>ชื่อรถ</label>
			                                    <input type="text" class="input-text full-width" value="" placeholder="" />
			                                </div>
			                                <div class="form-group col-sm-6 col-md-3">
			                                    <label>จำนวนคนทั้งหมด</label>
			                                    <input type="text" class="input-text full-width" value="" placeholder="" />
			                                </div>
			                                <div class="form-group col-sm-6 col-md-2">
			                                    <label>ผู้ใหญ่</label>
			                                    <input type="text" class="input-text full-width" value="" placeholder="" />
			                                </div><div class="form-group col-sm-6 col-md-2">
			                                    <label>เด็ก</label>
			                                    <input type="text" class="input-text full-width" value="" placeholder="" />
			                                </div>
			                                <div class="form-group col-sm-6 col-md-2">
			                                    <label>จำนวนสัมภาระ</label>
			                                    <input type="text" class="input-text full-width" value="" placeholder="" />
			                                </div>
	                            		</div>
	                            	</div>
	                            	<div class="row">
	                            		<div class="col-md-12">
	                            			<div class="form-group col-sm-6 col-md-3">
			                                    <label>ประเภทรถ</label>
			                                    <div class="selector full-width">
			                                        <select>
			                                            <option value="uk">รถขนาดกลาง</option>
			                                        </select>
			                                    </div>
			                                </div>
			                                <div class="form-group col-sm-6 col-md-2">
			                                    <label>ระบบเกียร์</label>
			                                    <div class="selector full-width">
			                                        <select>
			                                            <option value="1">Auto</option>
			                                            <option value="2">Manual</option>
			                                        </select>
			                                    </div>
			                                </div>
			                                <div class="form-group col-sm-6 col-md-2">
			                                    <label>แอร์</label>
			                                    <div class="selector full-width">
			                                        <select>
			                                            <option value="1">มี</option>
			                                            <option value="2">ไม่มี</option>
			                                        </select>
			                                    </div>
			                                </div>
			                                <div class="form-group col-sm-6 col-md-2">
			                                    <label>จำนวนนำ้มัน</label>
			                                    <div class="selector full-width">
			                                        <select>
			                                            <option value="1">Full</option>
			                                            <option value="2">Half</option>
			                                            <option value="2">Empty</option>
			                                        </select>
			                                    </div>
			                                </div>
			                                <div class="form-group col-sm-6 col-md-3">
			                                    <label>ราคา/วัน</label>
			                                    <input type="text" class="input-text full-width" value="" placeholder="" />
			                                </div>
	                            		</div>
	                            	</div>
	                            </div>
	                            <div class="col-md-5">
	                            	<div class="form-group col-sm-6 col-md-12">
	                                    <label>รายละเอียด</label>
	                                	<textarea class="full-width" rows="6"></textarea>
	                                </div>
	                            </div>
	                        </div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="col-md-12">
								<h2>เงื่อนไข</h2>
								<hr>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="row">
										<div class="col-md-12">
											<div class="col-md-12 marginBottom20">
												<a class="button btn-medium green pull-right addCondition">เพิ่มเงื่อนไข</a>
											</div>
										</div>
									</div>
									<div class="row">
	                            		<div class="col-md-12 condition">
											
	                            		</div>
	                            	</div>
								</div>
							</div>
						<div class="col-md-12">
							<hr>
						</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-12">
							<div class="col-md-12 marginBottom20">
								<a class="button btn-medium green pull-right"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp;บันทึก</a>
							</div>
						</div>
					</div>
	            </form>
        	</div>
        </div>
    </section>

@endsection

@section('script')
<script type="text/javascript">
    tjq(document).ready(function(){
    	tjq(".addCondition").click(function(){
        	tjq(".condition").append("<div class='form-group col-sm-6 col-md-4'><label>หัวข้อ</label><input type='text' class='input-text full-width' value='' placeholder='' /><label>รายละเอียด</label><textarea class='full-width' rows='6'></textarea></div>");
    	});
    });
</script>

@endsection
