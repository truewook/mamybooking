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
							<h4>Multi Language Inputs</h4>
						    <form enctype="multipart/form-data">
						        <label>French Input</label>
						        <input id="file-fr" name="file-fr[]" type="file" multiple>
						        <hr style="border: 2px dotted">
						        <label>Spanish Input</label>
						        <input id="file-es" name="file-es[]" type="file" multiple>
						    </form>
						    <hr>
						    <br>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="col-md-12">
								<h2>ข้อมูลทัวร์</h2>
								<hr>
							</div>
	                        <div class="row">
	                            <div class="col-md-7">
	                            	<div class="row">
	                            		<div class="col-md-12">
	                            			<div class="form-group col-sm-6 col-md-6">
			                                    <label>ชื่อทัวร์(ภาษาไทย)</label>
			                                    <input type="text" class="input-text full-width" value="" placeholder="" />
			                                </div>
			                                <div class="form-group col-sm-6 col-md-6">
			                                    <label>ชื่อทัวร์(ภาษาอังกฤษ)</label>
			                                    <input type="text" class="input-text full-width" value="" placeholder="" />
			                                </div>
			                            </div>
			                        </div>
			                        <div class="row">
			                        	<div class="col-md-12">
			                                <div class="form-group col-sm-6 col-md-3">
			                                	<div class="co-md-12">
			                                    	<label>ระยะเวลา</label>
			                                		<div class="row">
			                                			<div class="col-md-6">
			                                				<div class="with-icon-cus full-width">
	                                        					<input type="text" class="input-text full-width" placeholder="">
	                                        					<button class="unit icon blue-bg white-color days" disabled="">วัน</button>
                                    						</div>
			                                			</div>
			                                			<div class="col-md-6">
			                                				<div class="with-icon-cus full-width">
	                                        					<input type="text" class="input-text full-width" placeholder="">
	                                        					<button class="unit icon blue-bg white-color" disabled="">คืน</button>
                                    						</div>
			                                			</div>
			                                		</div>
			                                	</div>
			                                    
			                                </div>
			                                <div class="form-group col-sm-6 col-md-3">
			                                    <label>วันที่เริ่มเดินทาง</label>
			                                    <div class="datepicker-wrap">
                                                    <input type="text" name="date_from" class="input-text full-width" placeholder="mm/dd/yy" />
                                                </div>
			                                </div><div class="form-group col-sm-6 col-md-2">
			                                    <label>จำนวนที่นั่ง</label>
			                                    <input type="text" class="input-text full-width" value="" placeholder="" />
			                                </div>
			                                <div class="form-group col-sm-6 col-md-4">
			                                    <label>ราคา</label>
			                                    <input type="text" class="input-text full-width" value="" placeholder="" />
			                                </div>
	                            		</div>
	                            	</div>
	                            </div>
	                            <div class="col-md-5">
	                            	<div class="form-group col-sm-6 col-md-12">
	                                    <label>รายละเอียด</label>
	                                	<textarea class="full-width" rows="10"></textarea>
	                                </div>
	                            </div>
	                        </div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-12">
									<div class="col-md-12">
										<h2>แผนทัวร์</h2>
										<hr>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-2 border-right">
									<div class="form-group col-sm-6 col-md-12">
										<input type="text" class="input-text full-width" value="" placeholder="" />
									</div>
								</div>
								<div class="col-md-10">
									<div class="row planOfDay"> 
										<div class="col-md-12">
											<div class="form-group col-sm-6 col-md-12">
												<input type="text" class="input-text full-width" value="" placeholder="" />
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="col-md-12 marginBottom20">
												<a class="button btn-medium green pull-right addPlanOfday">เพิ่ม</a>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-6 border-right">
									<div class="col-md-12">
										<h2>สิ่งอำนวยความสะดวก</h2>
										<hr>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="row facilities">
			                            		<div class="col-md-12">
													<div class="form-group col-sm-6 col-md-12">
														<input type="text" class="input-text full-width" value="" placeholder="" />
													</div>
			                            		</div>
			                            	</div>
			                            	<div class="row">
												<div class="col-md-12">
													<div class="col-md-12 marginBottom20">
														<a class="button btn-medium green pull-right facilitiesAdd">เพิ่ม</a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<hr>
									</div>	
								</div>

								<div class="col-md-6">
									<div class="col-md-12">
										<h2>หมายเหตุ</h2>
										<hr>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="row annotation">
			                            		<div class="col-md-12">
													<div class="form-group col-sm-6 col-md-12">
														<input type="text" class="input-text full-width" value="" placeholder="" />
													</div>
			                            		</div>
			                            	</div>
			                            	<div class="row">
												<div class="col-md-12">
													<div class="col-md-12 marginBottom20">
														<a class="button btn-medium green pull-right annotationAdd">เพิ่ม</a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<hr>
									</div>	
								</div>
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
    	tjq(".addPlanOfday").click(function(){
    		tjq(".plan")
    	});

    	tjq(".annotationAdd").click(function(){
        	tjq(".annotation").append("<div class='col-md-12'><div class='form-group col-sm-6 col-md-12'><input type='text' class='input-text full-width' value='' placeholder='' /></div></div>");
    	});

    	tjq(".facilitiesAdd").click(function(){
        	tjq(".facilities").append("<div class='col-md-12'><div class='form-group col-sm-6 col-md-12'><input type='text' class='input-text full-width' value='' placeholder='' /></div></div>");
    	});
    });
</script>

@endsection
