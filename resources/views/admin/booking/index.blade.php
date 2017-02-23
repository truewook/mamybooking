@extends('layouts.admin')

@section('menu-booking-active')
active 
@endsection

@section('content')
			<!-- BEGIN CONTAINER -->
       	<div class="page-content">
                    <div class="container">
                        <!-- BEGIN PAGE BREADCRUMBS -->
                        <ul class="page-breadcrumb breadcrumb">
                            <li>
                                <a href="index.html">Home</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <a href="{{url('admin/booking')}}">Booking</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <a href="#">Booking Summary</a>
                                <!-- <i class="fa fa-circle"></i> -->
                            </li>
                            <!-- <li>
                                <span>Datatables</span>
                            </li> -->
                        </ul>
                        <!-- END PAGE BREADCRUMBS -->
                        <!-- BEGIN PAGE CONTENT INNER -->
                        <div class="page-content-inner">
                            <div class="m-heading-1 border-green m-bordered" style="display: none;">
                                <h3>DataTables jQuery Plugin</h3>
                                <p> DataTables is a plug-in for the jQuery Javascript library. It is a highly flexible tool, based upon the foundations of progressive enhancement, and will add advanced interaction controls to any HTML table. </p>
                                <p> For more info please check out
                                    <a class="btn red btn-outline" href="http://datatables.net/" target="_blank">the official documentation</a>
                                </p>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                    <div class="portlet light ">
                                        <div class="portlet-title">
                                            <div class="caption font-dark">
                                                <i class="icon-settings font-dark"></i>
                                                <span class="caption-subject bold uppercase"> Booking Summary</span>
                                            </div>
                                            <div class="actions">
                                                <div class="btn-group btn-group-devided" data-toggle="buttons">
                                                    <label class="btn btn-transparent dark btn-outline btn-circle btn-sm active">
                                                        <input type="radio" name="options" class="toggle" id="option1">Actions</label>
                                                    <label class="btn btn-transparent dark btn-outline btn-circle btn-sm">
                                                        <input type="radio" name="options" class="toggle" id="option2">Settings</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="portlet-body">
                                            <div class="table-toolbar">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="btn-group" style="display: none;">
                                                            <button id="sample_editable_1_new" class="btn sbold green"> Add New
                                                                <i class="fa fa-plus"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="btn-group pull-right">
                                                            <button class="btn green  btn-outline dropdown-toggle" data-toggle="dropdown">Tools
                                                                <i class="fa fa-angle-down"></i>
                                                            </button>
                                                            <ul class="dropdown-menu pull-right">
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="fa fa-print"></i> Print </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="fa fa-file-pdf-o"></i> Save as PDF </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="fa fa-file-excel-o"></i> Export to Excel </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="sample_1_wrapper" class="dataTables_wrapper no-footer"><div class="row"><div class="col-md-6 col-sm-6"><div class="dataTables_length" id="sample_1_length"><label>Show <select name="sample_1_length" aria-controls="sample_1" class="form-control input-sm input-xsmall input-inline"><option value="5">5</option><option value="15">15</option><option value="20">20</option><option value="-1">All</option></select></label></div></div><div class="col-md-6 col-sm-6"><div id="sample_1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm input-small input-inline" placeholder="" aria-controls="sample_1"></label></div></div></div><div class="table-scrollable"><table class="table table-striped table-bordered table-hover table-checkable order-column dataTable no-footer" id="sample_1" role="grid" aria-describedby="sample_1_info">
                                                <thead>
                                                    <tr role="row"><th class="sorting_disabled" rowspan="1" colspan="1" aria-label="
                                                            
                                                                
                                                                
                                                            
                                                        " style="width: 71.2px;">
                                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                <input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes">
                                                                <span></span>
                                                            </label>
                                                        </th>
                                                        <th class="sorting_asc" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label=" Username : activate to sort column descending" style="width: 161.2px;"> Booking Code </th>
                                                        <th class="sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label=" Email : activate to sort column ascending" style="width: 242.2px;"> Firstname&Lastname </th>
                                                        <th class="sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label=" Status : activate to sort column ascending" style="width: 129.2px;"> Status </th>
                                                        <th class="sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label=" Joined : activate to sort column ascending" style="width: 122.2px;"> Booking Date </th>
                                                        <th class="sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label=" Actions : activate to sort column ascending" style="width: 127px;"> Actions </th>
                                                        </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                    
                                                    
                                                <tr class="gradeX odd" role="row">
                                                        <td>
                                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                <input type="checkbox" class="checkboxes" value="1">
                                                                <span></span>
                                                            </label>
                                                        </td>
                                                        <td class="sorting_1"> AA91-0000000138 </td>
                                                        <td>
                                                            <a href="mailto:userwow@gmail.com"> test test </a>
                                                        </td>
                                                        <td>
                                                            <span class="label label-sm label-warning"> Suspended </span>
                                                        </td>
                                                        <td class="center"> 16/02/2017 </td>
                                                        <td>
                                                            <div class="btn-group">
                                                                <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                                    <i class="fa fa-angle-down"></i>
                                                                </button>
                                                                <ul class="dropdown-menu" role="menu">
                                                                    <li>
                                                                        <a href="javascript:;">
                                                                            <i class="icon-eye"></i> View </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:;">
                                                                            <i class="icon-pencil"></i> Edit </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:;">
                                                                            <i class="icon-trash"></i> Trash </a>
                                                                    </li>
                                                                    <!-- <li class="divider"> </li>
                                                                    <li>
                                                                        <a href="javascript:;">
                                                                            <i class="icon-flag"></i> Comments
                                                                            <span class="badge badge-success">4</span>
                                                                        </a>
                                                                    </li> -->
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr></tbody>
                                            </table></div><div class="row"><div class="col-md-5 col-sm-5"><div class="dataTables_info" id="sample_1_info" role="status" aria-live="polite">Showing 11 to 15 of 25 records</div></div><div class="col-md-7 col-sm-7"><div class="dataTables_paginate paging_bootstrap_full_number" id="sample_1_paginate"><ul class="pagination" style="visibility: visible;"><li class="prev"><a href="#" title="First"><i class="fa fa-angle-double-left"></i></a></li><li class="prev"><a href="#" title="Prev"><i class="fa fa-angle-left"></i></a></li><li><a href="#">1</a></li><li><a href="#">2</a></li><li class="active"><a href="#">3</a></li><li><a href="#">4</a></li><li><a href="#">5</a></li><li class="next"><a href="#" title="Next"><i class="fa fa-angle-right"></i></a></li><li class="next"><a href="#" title="Last"><i class="fa fa-angle-double-right"></i></a></li></ul></div></div></div></div>
                                        </div>
                                    </div>
                                    <!-- END EXAMPLE TABLE PORTLET-->
                                </div>
                            </div>
                            <div class="row" style="display: none;">
                                <div class="col-md-6 col-sm-12">
                                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                    <div class="portlet light portlet-fit portlet-datatable ">
                                        <div class="portlet-title">
                                            <div class="caption">
                                                <i class=" icon-layers font-green"></i>
                                                <span class="caption-subject font-green sbold uppercase">Sample Datatable</span>
                                            </div>
                                            <div class="actions">
                                                <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                    <i class="icon-cloud-upload"></i>
                                                </a>
                                                <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                    <i class="icon-wrench"></i>
                                                </a>
                                                <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                    <i class="icon-trash"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="portlet-body">
                                            <div id="sample_2_wrapper" class="dataTables_wrapper no-footer"><div class="row"><div class="col-md-6 col-sm-6"><div class="dataTables_length" id="sample_2_length"><label>Show <select name="sample_2_length" aria-controls="sample_2" class="form-control input-sm input-xsmall input-inline"><option value="5">5</option><option value="15">15</option><option value="20">20</option><option value="-1">All</option></select></label></div></div><div class="col-md-6 col-sm-6"><div id="sample_2_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm input-small input-inline" placeholder="" aria-controls="sample_2"></label></div></div></div><div class="table-scrollable"><table class="table table-striped table-bordered table-hover table-checkable order-column dataTable no-footer" id="sample_2" role="grid" aria-describedby="sample_2_info">
                                                <thead>
                                                    <tr role="row"><th class="table-checkbox sorting_disabled" rowspan="1" colspan="1" aria-label="
                                                            
                                                                
                                                                
                                                            
                                                        " style="width: 48.2px;">
                                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                <input type="checkbox" class="group-checkable" data-set="#sample_2 .checkboxes">
                                                                <span></span>
                                                            </label>
                                                        </th><th class="sorting_asc" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="1" aria-sort="ascending" aria-label=" Username : activate to sort column descending" style="width: 95.2px;"> Username </th><th class="sorting" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="1" aria-label=" Email : activate to sort column ascending" style="width: 149.2px;"> Email </th><th class="sorting" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="1" aria-label=" Status : activate to sort column ascending" style="width: 74px;"> Status </th></tr>
                                                </thead>
                                                <tbody>
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                <tr class="gradeX odd" role="row">
                                                        <td>
                                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                <input type="checkbox" class="checkboxes" value="1">
                                                                <span></span>
                                                            </label>
                                                        </td>
                                                        <td class="sorting_1"> coop </td>
                                                        <td>
                                                            <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                                        </td>
                                                        <td>
                                                            <span class="label label-sm label-success"> Approved </span>
                                                        </td>
                                                    </tr><tr class="gradeX even" role="row">
                                                        <td>
                                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                <input type="checkbox" class="checkboxes" value="1">
                                                                <span></span>
                                                            </label>
                                                        </td>
                                                        <td class="sorting_1"> foopl </td>
                                                        <td>
                                                            <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                                        </td>
                                                        <td>
                                                            <span class="label label-sm label-success"> Approved </span>
                                                        </td>
                                                    </tr><tr class="gradeX odd" role="row">
                                                        <td>
                                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                <input type="checkbox" class="checkboxes" value="1">
                                                                <span></span>
                                                            </label>
                                                        </td>
                                                        <td class="sorting_1"> looper </td>
                                                        <td>
                                                            <a href="mailto:looper90@gmail.com"> looper90@gmail.com </a>
                                                        </td>
                                                        <td>
                                                            <span class="label label-sm label-warning"> Suspended </span>
                                                        </td>
                                                    </tr><tr class="gradeX even" role="row">
                                                        <td>
                                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                <input type="checkbox" class="checkboxes" value="1">
                                                                <span></span>
                                                            </label>
                                                        </td>
                                                        <td class="sorting_1"> pppol </td>
                                                        <td>
                                                            <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                                        </td>
                                                        <td>
                                                            <span class="label label-sm label-success"> Approved </span>
                                                        </td>
                                                    </tr><tr class="gradeX odd" role="row">
                                                        <td>
                                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                <input type="checkbox" class="checkboxes" value="1">
                                                                <span></span>
                                                            </label>
                                                        </td>
                                                        <td class="sorting_1"> restest </td>
                                                        <td>
                                                            <a href="mailto:userwow@gmail.com"> test@gmail.com </a>
                                                        </td>
                                                        <td>
                                                            <span class="label label-sm label-success"> Approved </span>
                                                        </td>
                                                    </tr></tbody>
                                            </table></div><div class="row"><div class="col-md-5 col-sm-5"><div class="dataTables_info" id="sample_2_info" role="status" aria-live="polite">Showing 1 to 5 of 12 records</div></div><div class="col-md-7 col-sm-7"><div class="dataTables_paginate paging_bootstrap_extended" id="sample_2_paginate"><div class="pagination-panel"> Page <a href="#" class="btn btn-sm default prev disabled"><i class="fa fa-angle-left"></i></a><input type="text" class="pagination-panel-input form-control input-sm input-inline input-mini" maxlenght="5" style="text-align:center; margin: 0 5px;"><a href="#" class="btn btn-sm default next"><i class="fa fa-angle-right"></i></a> of <span class="pagination-panel-total">3</span></div></div></div></div></div>
                                        </div>
                                    </div>
                                    <!-- END EXAMPLE TABLE PORTLET-->
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                    <div class="portlet box red">
                                        <div class="portlet-title">
                                            <div class="caption">
                                                <i class="fa fa-cogs"></i>Table </div>
                                            <div class="actions">
                                                <a href="javascript:;" class="btn btn-default btn-sm">
                                                    <i class="fa fa-plus"></i> Add </a>
                                                <a href="javascript:;" class="btn btn-default btn-sm">
                                                    <i class="fa fa-print"></i> Print </a>
                                            </div>
                                        </div>
                                        <div class="portlet-body">
                                            <div id="sample_3_wrapper" class="dataTables_wrapper no-footer"><div class="row"><div class="col-md-6 col-sm-6"><div class="dataTables_length" id="sample_3_length"><label>Show <select name="sample_3_length" aria-controls="sample_3" class="form-control input-sm input-xsmall input-inline"><option value="6">6</option><option value="15">15</option><option value="20">20</option><option value="-1">All</option></select></label></div></div><div class="col-md-6 col-sm-6"><div id="sample_3_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm input-small input-inline" placeholder="" aria-controls="sample_3"></label></div></div></div><div class="table-scrollable"><table class="table table-striped table-bordered table-hover table-checkable order-column dataTable no-footer" id="sample_3" role="grid" aria-describedby="sample_3_info">
                                                <thead>
                                                    <tr role="row"><th class="table-checkbox sorting_disabled" rowspan="1" colspan="1" aria-label="
                                                            
                                                                
                                                                
                                                            
                                                        " style="width: 49.2px;">
                                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                <input type="checkbox" class="group-checkable" data-set="#sample_3 .checkboxes">
                                                                <span></span>
                                                            </label>
                                                        </th><th class="sorting_asc" tabindex="0" aria-controls="sample_3" rowspan="1" colspan="1" aria-sort="ascending" aria-label=" Username : activate to sort column descending" style="width: 97.2px;"> Username </th><th class="sorting" tabindex="0" aria-controls="sample_3" rowspan="1" colspan="1" aria-label=" Email : activate to sort column ascending" style="width: 153.2px;"> Email </th><th class="sorting" tabindex="0" aria-controls="sample_3" rowspan="1" colspan="1" aria-label=" Status : activate to sort column ascending" style="width: 75px;"> Status </th></tr>
                                                </thead>
                                                <tbody>
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                <tr class="gradeX odd" role="row">
                                                        <td>
                                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                <input type="checkbox" class="checkboxes" value="1">
                                                                <span></span>
                                                            </label>
                                                        </td>
                                                        <td class="sorting_1"> coop </td>
                                                        <td>
                                                            <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                                        </td>
                                                        <td>
                                                            <span class="label label-sm label-success"> Approved </span>
                                                        </td>
                                                    </tr><tr class="gradeX even" role="row">
                                                        <td>
                                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                <input type="checkbox" class="checkboxes" value="1">
                                                                <span></span>
                                                            </label>
                                                        </td>
                                                        <td class="sorting_1"> foopl </td>
                                                        <td>
                                                            <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                                        </td>
                                                        <td>
                                                            <span class="label label-sm label-success"> Approved </span>
                                                        </td>
                                                    </tr><tr class="gradeX odd" role="row">
                                                        <td>
                                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                <input type="checkbox" class="checkboxes" value="1">
                                                                <span></span>
                                                            </label>
                                                        </td>
                                                        <td class="sorting_1"> looper </td>
                                                        <td>
                                                            <a href="mailto:looper90@gmail.com"> looper90@gmail.com </a>
                                                        </td>
                                                        <td>
                                                            <span class="label label-sm label-warning"> Suspended </span>
                                                        </td>
                                                    </tr><tr class="gradeX even" role="row">
                                                        <td>
                                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                <input type="checkbox" class="checkboxes" value="1">
                                                                <span></span>
                                                            </label>
                                                        </td>
                                                        <td class="sorting_1"> pppol </td>
                                                        <td>
                                                            <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                                        </td>
                                                        <td>
                                                            <span class="label label-sm label-success"> Approved </span>
                                                        </td>
                                                    </tr><tr class="gradeX odd" role="row">
                                                        <td>
                                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                <input type="checkbox" class="checkboxes" value="1">
                                                                <span></span>
                                                            </label>
                                                        </td>
                                                        <td class="sorting_1"> restest </td>
                                                        <td>
                                                            <a href="mailto:userwow@gmail.com"> test@gmail.com </a>
                                                        </td>
                                                        <td>
                                                            <span class="label label-sm label-success"> Approved </span>
                                                        </td>
                                                    </tr><tr class="gradeX even" role="row">
                                                        <td>
                                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                <input type="checkbox" class="checkboxes" value="1">
                                                                <span></span>
                                                            </label>
                                                        </td>
                                                        <td class="sorting_1"> shuxer </td>
                                                        <td>
                                                            <a href="mailto:shuxer@gmail.com"> shuxer@gmail.com </a>
                                                        </td>
                                                        <td>
                                                            <span class="label label-sm label-success"> Approved </span>
                                                        </td>
                                                    </tr></tbody>
                                            </table></div><div class="row"><div class="col-md-5 col-sm-5"><div class="dataTables_info" id="sample_3_info" role="status" aria-live="polite">Showing 1 to 6 of 12 records</div></div><div class="col-md-7 col-sm-7"><div class="dataTables_paginate paging_bootstrap_number" id="sample_3_paginate"><ul class="pagination" style="visibility: visible;"><li class="prev disabled"><a href="#" title="Prev"><i class="fa fa-angle-left"></i></a></li><li class="active"><a href="#">1</a></li><li><a href="#">2</a></li><li class="next"><a href="#" title="Next"><i class="fa fa-angle-right"></i></a></li></ul></div></div></div></div>
                                        </div>
                                    </div>
                                    <!-- END EXAMPLE TABLE PORTLET-->
                                </div>
                            </div>
                            <div class="row" style="display: none;">
                                <div class="col-md-6 col-sm-12">
                                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                    <div class="portlet light portlet-fit portlet-datatable ">
                                        <div class="portlet-title">
                                            <div class="caption">
                                                <i class=" icon-layers font-dark"></i>
                                                <span class="caption-subject font-dark sbold uppercase">Table Footer</span>
                                            </div>
                                            <div class="actions">
                                                <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                    <i class="icon-cloud-upload"></i>
                                                </a>
                                                <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                    <i class="icon-wrench"></i>
                                                </a>
                                                <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                    <i class="icon-trash"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="portlet-body">
                                            <div id="sample_4_wrapper" class="dataTables_wrapper"><div class="row"><div class="col-md-6 col-sm-6"><div class="dataTables_length" id="sample_4_length"><label>Show <select name="sample_4_length" aria-controls="sample_4" class="form-control input-sm input-xsmall input-inline"><option value="6">6</option><option value="15">15</option><option value="20">20</option><option value="-1">All</option></select></label></div></div><div class="col-md-6 col-sm-6"><div id="sample_4_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm input-small input-inline" placeholder="" aria-controls="sample_4"></label></div></div></div><div class="table-scrollable"><table class="table table-striped table-bordered table-hover table-checkable order-column dataTable" id="sample_4" role="grid" aria-describedby="sample_4_info">
                                                <thead>
                                                    <tr role="row"><th class="table-checkbox sorting_disabled" rowspan="1" colspan="1" aria-label="
                                                            
                                                                
                                                                
                                                            
                                                        " style="width: 49.2px;">
                                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                <input type="checkbox" class="group-checkable" data-set="#sample_4 .checkboxes">
                                                                <span></span>
                                                            </label>
                                                        </th><th class="sorting_asc" tabindex="0" aria-controls="sample_4" rowspan="1" colspan="1" aria-sort="ascending" aria-label=" Username : activate to sort column descending" style="width: 98.2px;"> Username </th><th class="sorting" tabindex="0" aria-controls="sample_4" rowspan="1" colspan="1" aria-label=" Email : activate to sort column ascending" style="width: 155.2px;"> Email </th><th class="sorting" tabindex="0" aria-controls="sample_4" rowspan="1" colspan="1" aria-label=" Salary : activate to sort column ascending" style="width: 63px;"> Salary </th></tr>
                                                </thead>
                                                <tfoot>
                                                    <tr><th class="table-checkbox" rowspan="1" colspan="1"> </th><th rowspan="1" colspan="1"> Username </th><th rowspan="1" colspan="1"> Email </th><th rowspan="1" colspan="1"> Salary </th></tr>
                                                </tfoot>
                                                <tbody>
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                <tr class="gradeX odd" role="row">
                                                        <td>
                                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                <input type="checkbox" class="checkboxes" value="1">
                                                                <span></span>
                                                            </label>
                                                        </td>
                                                        <td class="sorting_1"> coop </td>
                                                        <td>
                                                            <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                                        </td>
                                                        <td> $5422 </td>
                                                    </tr><tr class="gradeX even" role="row">
                                                        <td>
                                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                <input type="checkbox" class="checkboxes" value="1">
                                                                <span></span>
                                                            </label>
                                                        </td>
                                                        <td class="sorting_1"> foopl </td>
                                                        <td>
                                                            <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                                        </td>
                                                        <td> $4321 </td>
                                                    </tr><tr class="gradeX odd" role="row">
                                                        <td>
                                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                <input type="checkbox" class="checkboxes" value="1">
                                                                <span></span>
                                                            </label>
                                                        </td>
                                                        <td class="sorting_1"> looper </td>
                                                        <td>
                                                            <a href="mailto:looper90@gmail.com"> looper90@gmail.com </a>
                                                        </td>
                                                        <td> $2122 </td>
                                                    </tr><tr class="gradeX even" role="row">
                                                        <td>
                                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                <input type="checkbox" class="checkboxes" value="1">
                                                                <span></span>
                                                            </label>
                                                        </td>
                                                        <td class="sorting_1"> pppol </td>
                                                        <td>
                                                            <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                                        </td>
                                                        <td> $1234 </td>
                                                    </tr><tr class="gradeX odd" role="row">
                                                        <td>
                                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                <input type="checkbox" class="checkboxes" value="1">
                                                                <span></span>
                                                            </label>
                                                        </td>
                                                        <td class="sorting_1"> restest </td>
                                                        <td>
                                                            <a href="mailto:userwow@gmail.com"> test@gmail.com </a>
                                                        </td>
                                                        <td> $1233 </td>
                                                    </tr><tr class="gradeX even" role="row">
                                                        <td>
                                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                <input type="checkbox" class="checkboxes" value="1">
                                                                <span></span>
                                                            </label>
                                                        </td>
                                                        <td class="sorting_1"> shuxer </td>
                                                        <td>
                                                            <a href="mailto:shuxer@gmail.com"> shuxer@gmail.com </a>
                                                        </td>
                                                        <td> $1240 </td>
                                                    </tr></tbody>
                                            </table></div><div class="row"><div class="col-md-5 col-sm-5"><div class="dataTables_info" id="sample_4_info" role="status" aria-live="polite">Showing 1 to 6 of 12 records</div></div><div class="col-md-7 col-sm-7"><div class="dataTables_paginate paging_bootstrap_number" id="sample_4_paginate"><ul class="pagination" style="visibility: visible;"><li class="prev disabled"><a href="#" title="Prev"><i class="fa fa-angle-left"></i></a></li><li class="active"><a href="#">1</a></li><li><a href="#">2</a></li><li class="next"><a href="#" title="Next"><i class="fa fa-angle-right"></i></a></li></ul></div></div></div></div>
                                        </div>
                                    </div>
                                    <!-- END EXAMPLE TABLE PORTLET-->
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                    <div class="portlet light portlet-fit portlet-datatable ">
                                        <div class="portlet-title">
                                            <div class="caption">
                                                <i class=" icon-layers font-red"></i>
                                                <span class="caption-subject font-red sbold uppercase">Table Footer Feedback</span>
                                            </div>
                                            <div class="actions">
                                                <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                    <i class="icon-cloud-upload"></i>
                                                </a>
                                                <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                    <i class="icon-wrench"></i>
                                                </a>
                                                <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                    <i class="icon-trash"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="portlet-body">
                                            <div id="sample_5_wrapper" class="dataTables_wrapper"><div class="row"><div class="col-md-6 col-sm-6"><div class="dataTables_length" id="sample_5_length"><label>Show <select name="sample_5_length" aria-controls="sample_5" class="form-control input-sm input-xsmall input-inline"><option value="6">6</option><option value="15">15</option><option value="20">20</option><option value="-1">All</option></select></label></div></div><div class="col-md-6 col-sm-6"><div id="sample_5_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm input-small input-inline" placeholder="" aria-controls="sample_5"></label></div></div></div><div class="table-scrollable"><table class="table table-striped table-bordered table-hover table-checkable order-column dataTable" id="sample_5" role="grid" aria-describedby="sample_5_info">
                                                <thead>
                                                    <tr role="row"><th class="table-checkbox sorting_disabled" rowspan="1" colspan="1" aria-label="
                                                            
                                                                
                                                                
                                                            
                                                        " style="width: 49.2px;">
                                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                <input type="checkbox" class="group-checkable" data-set="#sample_5 .checkboxes">
                                                                <span></span>
                                                            </label>
                                                        </th><th class="sorting_asc" tabindex="0" aria-controls="sample_5" rowspan="1" colspan="1" aria-sort="ascending" aria-label=" Username : activate to sort column descending" style="width: 98.2px;"> Username </th><th class="sorting" tabindex="0" aria-controls="sample_5" rowspan="1" colspan="1" aria-label=" Email : activate to sort column ascending" style="width: 155.2px;"> Email </th><th class="sorting" tabindex="0" aria-controls="sample_5" rowspan="1" colspan="1" aria-label=" Salary : activate to sort column ascending" style="width: 63px;"> Salary </th></tr>
                                                </thead>
                                                <tfoot>
                                                    <tr><th colspan="3" style="text-align:right" rowspan="1">Total:&nbsp;&nbsp;</th><th rowspan="1" colspan="1">$15572 ( $30253 total)</th></tr>
                                                </tfoot>
                                                <tbody>
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                <tr class="gradeX odd" role="row">
                                                        <td>
                                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                <input type="checkbox" class="checkboxes" value="1">
                                                                <span></span>
                                                            </label>
                                                        </td>
                                                        <td class="sorting_1"> coop </td>
                                                        <td>
                                                            <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                                        </td>
                                                        <td> $5422 </td>
                                                    </tr><tr class="gradeX even" role="row">
                                                        <td>
                                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                <input type="checkbox" class="checkboxes" value="1">
                                                                <span></span>
                                                            </label>
                                                        </td>
                                                        <td class="sorting_1"> foopl </td>
                                                        <td>
                                                            <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                                        </td>
                                                        <td> $4321 </td>
                                                    </tr><tr class="gradeX odd" role="row">
                                                        <td>
                                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                <input type="checkbox" class="checkboxes" value="1">
                                                                <span></span>
                                                            </label>
                                                        </td>
                                                        <td class="sorting_1"> looper </td>
                                                        <td>
                                                            <a href="mailto:looper90@gmail.com"> looper90@gmail.com </a>
                                                        </td>
                                                        <td> $2122 </td>
                                                    </tr><tr class="gradeX even" role="row">
                                                        <td>
                                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                <input type="checkbox" class="checkboxes" value="1">
                                                                <span></span>
                                                            </label>
                                                        </td>
                                                        <td class="sorting_1"> pppol </td>
                                                        <td>
                                                            <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                                        </td>
                                                        <td> $1234 </td>
                                                    </tr><tr class="gradeX odd" role="row">
                                                        <td>
                                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                <input type="checkbox" class="checkboxes" value="1">
                                                                <span></span>
                                                            </label>
                                                        </td>
                                                        <td class="sorting_1"> restest </td>
                                                        <td>
                                                            <a href="mailto:userwow@gmail.com"> test@gmail.com </a>
                                                        </td>
                                                        <td> $1233 </td>
                                                    </tr><tr class="gradeX even" role="row">
                                                        <td>
                                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                <input type="checkbox" class="checkboxes" value="1">
                                                                <span></span>
                                                            </label>
                                                        </td>
                                                        <td class="sorting_1"> shuxer </td>
                                                        <td>
                                                            <a href="mailto:shuxer@gmail.com"> shuxer@gmail.com </a>
                                                        </td>
                                                        <td> $1240 </td>
                                                    </tr></tbody>
                                            </table></div><div class="row"><div class="col-md-5 col-sm-5"><div class="dataTables_info" id="sample_5_info" role="status" aria-live="polite">Showing 1 to 6 of 12 records</div></div><div class="col-md-7 col-sm-7"><div class="dataTables_paginate paging_bootstrap_number" id="sample_5_paginate"><ul class="pagination" style="visibility: visible;"><li class="prev disabled"><a href="#" title="Prev"><i class="fa fa-angle-left"></i></a></li><li class="active"><a href="#">1</a></li><li><a href="#">2</a></li><li class="next"><a href="#" title="Next"><i class="fa fa-angle-right"></i></a></li></ul></div></div></div></div>
                                        </div>
                                    </div>
                                    <!-- END EXAMPLE TABLE PORTLET-->
                                </div>
                            </div>
                        </div>
                        <!-- END PAGE CONTENT INNER -->
                    </div>
                </div>
            <!-- END CONTENT -->
@endsection