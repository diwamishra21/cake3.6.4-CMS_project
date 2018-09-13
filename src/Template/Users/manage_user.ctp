
<!-- asidebar starts here -->
<aside data-sidebar>
    <div class="padding-bottom-md container-fluid">
        <div class="row">
            <input type="hidden" id="getvalue" value="">
            <div class="col-xs-12 bg-dark">
                <div class="padding-md">
                    <div class="panel-close-btn" data-sidebar-button><i class="fa fa-times fa-lg text-white"></i></div>
                    <h3 class="margin-0">Joinee Details</h3>
                </div>
            </div>
            <div class="col-xs-12 margin-top-md">
                <div class="nav-center">
                    <ul class="nav nav-pills text-center">
                        <li class="active"><a data-toggle="pill" href="#joinee_information" id="joinee_tab">Joinee / Emp</a></li>
                        <li><a data-toggle="pill" href="#interval_feedback" id="interval_tab">Feedback</a></li>
                        <li><a data-toggle="pill" href="#roadmap" id="roadmap_tab">Roadmap</a></li>
                    </ul>
                </div>
                <hr class="margin-top-0"/>
                <div class="tab-content">
                    <div id="joinee_information" class="tab-pane fade in active">
                        <div id="joinee-details-outer">
                            <form id="joinee_details">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <label for="name" class="padding-top-md">Name &nbsp;</label>
                                                <span id="name"></span>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <label for="doj" class="padding-top-md">DOJ &nbsp;</label>
                                                <span id="doj"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <label for="emp_id" class="padding-top-sm">Employee ID &nbsp;</label>
                                                <span id="emp_id"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <label for="business" class="padding-top-md">Business &nbsp;</label>
                                                <span id="business"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <label for="business_hr" class="padding-top-sm">Business HR &nbsp;</label>
                                                <span id="business_hr"></span>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <label for="location" class="padding-top-md">Location &nbsp;</label>
                                                <span id="location"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <label for="dept" class="padding-top-md">Department &nbsp;</label>
                                                <span id="dept"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <label for="sub_dept" class="padding-top-sm">Sub Department &nbsp;</label>
                                                <span id="sub_dept"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <label for="level" class="padding-top-md">Level &nbsp;</label>
                                                <span id="level"></span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <label for="designation" class="padding-top-md">Designation &nbsp;</label>
                                                <span id="designation"></span>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <label for="supervisor" class="padding-top-md">Supervisor &nbsp;</label>
                                                <span id="supervisor"></span>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <label for="spoc" class="padding-top-md">SPOC &nbsp;</label>
                                                <span id="spoc"></span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <label for="emp_email" class="padding-top-sm">Email &nbsp;</label>
                                                <span id="emp_email"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 hidden">
                                        <div class="text-center">
                                            <button class="btn btn-danger btn-block"><i class="fa fa-pencil"></i> Modify</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <hr class="margin-top-0"/>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="panel panel-danger joinee-blocks" onclick="dashboard.toggleLogistics()">
                                        <div class="panel-body">
                                            <div class="panel-proceed-btn"><i class="fa fa-angle-double-right fa-lg"></i></div>
                                            <strong>Logistics Arrangements</strong>
                                            <p class="margin-bottom-0 text-muted logistic_date"></p>
                                            <p class="margin-bottom-0 text-green" id="logistic_count"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="logistics_arrangements" class="hidden">
                            <ol class="breadcrumb">
                                <li class="text-blue pointer" onclick="dashboard.toggleLogistics()">Joinee Information</li>
                                <li class="active">Logistics Arrangements</li>
                            </ol>
                            <div class="margin-top-sm">
                                <div class="row">
                                    <div class="col-md-3">
                                        <span>Name : </span>
                                        <strong class="joineeinformation_name"></strong>
                                    </div>
                                    <div class="col-md-3">
                                        <span>Emp Id : </span>
                                        <strong class="joineeinformation_empid"></strong>
                                    </div>
                                    <div class="col-md-3">
                                        <span>DOJ : </span>
                                        <strong class="joineeinformation_doj"></strong>
                                    </div>
                                    <div class="col-md-3 text-right">
                                        <i class="fa fa-share text-red pointer fa-lg"></i>
                                    </div>
                                </div>
                            </div>
                            <hr/>
                            <div class="row">
                                <?php
                                foreach ($query2 as $querys) {
                                    $cstatus = $querys['department_id'];
                                    $location_id = $querys['location_id'];
                                    $location_name = $locationarr[$location_id];
                                    @$cstatusTxt = $cstatusData[$cstatus];
                                    ?>
                                    <div class="col-md-4">
                                        <div class="panel panel-primary joinee-blocks" onclick="dashboard.panelCheckboxToggle(this)">
                                            <div class="panel-body">
                                                <div class="panel-proceed-btn">
                                                     <span id="logistic_id_<?= $querys->id; ?>"  class="checkbox log_check" ></span> 
                                                </div>
                                                <strong><?= $querys['title']; ?></strong>
                                                <p class="margin-bottom-0 text-muted"><?= $location_name; ?></p>
                                                <p class="margin-bottom-0 text-primary"><?= @$cstatusTxt; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>


                            </div>
                        </div>                        
                    </div>
                    <div id="interval_feedback" class="tab-pane fade">
                        <div id="interval_feedback_outer">
                            <div class="margin-top-sm">
                                <div class="row">
                                    <div class="col-md-4">
                                        <span>Name : </span>
                                        <strong class="joineeinformation_name"></strong>
                                    </div>
                                    <div class="col-md-4">
                                        <span>Emp Id : </span>
                                        <strong class="joineeinformation_empid"></strong>
                                    </div>
                                    <div class="col-md-4">
                                        <span>DOJ : </span>
                                        <strong class="joineeinformation_doj"></strong>
                                    </div>
                                </div>
                            </div>
                            <hr/>
                            <div class="row" style="margin-left: 1px;margin-bottom: 9px;">
                                <strong>Feedback by Supervisor</strong>
                            </div>
                            <div class="row" id="f-info-sec">

                            </div>
                            <hr>
                            <div class="row" style="margin-left: 1px;margin-bottom: 9px;">
                                <strong>Feedback by Employee</strong>
                            </div>
                            <div class="row" id="f-info-sec-emp">

                            </div>
                            <!--<div class="row">
                                <div class="col-md-4">
                                    <div class="panel panel-success joinee-blocks" onclick="dashboard.supervisorMonthlyFeedback()">
                                        <div class="panel-body">
                                            <div class="panel-proceed-btn"><i class="fa fa-angle-double-right fa-lg"></i></div>
                                            <strong>Supervisor Monthly Feedback</strong>
                                            <p class="margin-bottom-0 text-muted">15/01/18</p>
                                            <p class="margin-bottom-0 text-green">Completed</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="panel panel-danger joinee-blocks disabled-pointer" onclick="dashboard.intervalFeedback()">
                                        <div class="panel-body">
                                            <div class="panel-proceed-btn"><i class="fa fa-angle-double-right fa-lg"></i></div>
                                            <strong>BHR Bi-Monthly Feedback</strong>
                                            <p class="margin-bottom-0 text-muted">-</p>
                                            <p class="margin-bottom-0 text-red">Pending</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="panel panel-success joinee-blocks" onclick="dashboard.toggleBHRBiAnnualFeedback()">
                                        <div class="panel-body">
                                            <div class="panel-proceed-btn"><i class="fa fa-angle-double-right fa-lg"></i></div>
                                            <strong>BHR Bi-Annual Feedback</strong>
                                            <p class="margin-bottom-0 text-muted">02/05/18</p>
                                            <p class="margin-bottom-0 text-green">Completed</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="panel panel-success joinee-blocks" onclick="dashboard.toggleBHRAnnualFeedback()">
                                        <div class="panel-body">
                                            <div class="panel-proceed-btn"><i class="fa fa-angle-double-right fa-lg"></i></div>
                                            <strong>BHR Annual Feedback</strong>
                                            <p class="margin-bottom-0 text-muted">25/10/18</p>
                                            <p class="margin-bottom-0 text-green">Completed</p>
                                        </div>
                                    </div>
                                </div>
                            </div>-->
                        </div>
                        <div id="f-details-sec">
                        </div>
                        <div id="f-details-sec-emp">
                        </div>
                        <!--<div id="supervisor_monthly_feedback" class="hidden">
                            <ol class="breadcrumb">
                                <li class="text-blue pointer" onclick="dashboard.supervisorMonthlyFeedback()">Interval Feedback</li>
                                <li class="active">Supervisor Monthly Feedback</li>
                            </ol>
                            <div class="margin-top-sm">
                                <div class="row">
                                    <div class="col-md-3">
                                        <span>Name : </span>
                                        <strong class="joineeinformation_name"></strong>
                                    </div>
                                    <div class="col-md-3">
                                        <span>Emp Id : </span>
                                        <strong class="joineeinformation_empid"></strong>
                                    </div>
                                    <div class="col-md-3">
                                        <span>DOJ : </span>
                                        <strong class="joineeinformation_doj"></strong>
                                    </div>
                                    <div class="col-md-3 text-right">
                                        <i class="fa fa-share text-red pointer fa-lg"></i>
                                    </div>
                                </div>
                            </div>
                            <hr/>
                            <div class="row">
                                <div class="col-xs-12">
                                    <h4 class="margin-0">Supervisor Monthly Feedback Form</h4>
                                    <h5 class="text-muted">Completed on 15/01/17</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div>
                                        <p>1. How would you rate his/her performance up to this point?</p>
                                        <div>
                                            A.
                                            <span><i class="fa fa-star fa-lg text-gold"></i></span>
                                            <span><i class="fa fa-star fa-lg text-gold"></i></span>
                                            <span><i class="fa fa-star fa-lg text-gold"></i></span>
                                            <span><i class="fa fa-star-half-o fa-lg text-gold"></i></span>
                                            <span><i class="fa fa-star-o fa-lg text-gold"></i></span>
                                        </div>
                                    </div>
                                    <hr class="margin-sm"/>
                                    <div>
                                        <p>2. How would you rate his/her performance up to this point?</p>
                                        <div>
                                            A.
                                            <span><i class="fa fa-star fa-lg text-gold"></i></span>
                                            <span><i class="fa fa-star fa-lg text-gold"></i></span>
                                            <span><i class="fa fa-star fa-lg text-gold"></i></span>
                                            <span><i class="fa fa-star-half-o fa-lg text-gold"></i></span>
                                            <span><i class="fa fa-star-o fa-lg text-gold"></i></span>
                                        </div>
                                    </div>
                                    <hr class="margin-sm"/>
                                    <div>
                                        <p>3. How would you rate his/her performance up to this point?</p>
                                        <div>
                                            A.
                                            <span><i class="fa fa-star fa-lg text-gold"></i></span>
                                            <span><i class="fa fa-star fa-lg text-gold"></i></span>
                                            <span><i class="fa fa-star fa-lg text-gold"></i></span>
                                            <span><i class="fa fa-star-half-o fa-lg text-gold"></i></span>
                                            <span><i class="fa fa-star-o fa-lg text-gold"></i></span>
                                        </div>
                                    </div>
                                    <hr class="margin-sm"/>
                                    <div>
                                        <p>4. How would you rate his/her performance up to this point?</p>
                                        <div>
                                            A.
                                            <span><i class="fa fa-star fa-lg text-gold"></i></span>
                                            <span><i class="fa fa-star fa-lg text-gold"></i></span>
                                            <span><i class="fa fa-star fa-lg text-gold"></i></span>
                                            <span><i class="fa fa-star-half-o fa-lg text-gold"></i></span>
                                            <span><i class="fa fa-star-o fa-lg text-gold"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <p>5. How would you rate his/her performance up to this point?</p>
                                        <div>
                                            A.
                                            <span><i class="fa fa-star fa-lg text-gold"></i></span>
                                            <span><i class="fa fa-star fa-lg text-gold"></i></span>
                                            <span><i class="fa fa-star fa-lg text-gold"></i></span>
                                            <span><i class="fa fa-star-half-o fa-lg text-gold"></i></span>
                                            <span><i class="fa fa-star-o fa-lg text-gold"></i></span>
                                        </div>
                                    </div>
                                    <hr class="margin-sm"/>
                                    <div>
                                        <p>6. How would you rate his/her performance up to this point?</p>
                                        <div>
                                            <div class="well well-sm">
                                                <small class="text-muted">
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="margin-sm"/>
                                    <div>
                                        <p>7. How would you rate his/her performance up to this point?</p>
                                        <div>
                                            <div class="well well-sm">
                                                <small class="text-muted">
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr/>
                            <h4>SPOC Comments (if any)</h4>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <textarea class="form-control" rows="5"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-md-offset-4 text-right">
                                    <button class="btn btn-danger btn-block">Submit</button>
                                </div>
                            </div>
                        </div>-->
                        <!--<div id="BHR_Bi_annual_feedback" class="hidden">
                            <ol class="breadcrumb">
                                <li class="text-blue pointer" onclick="dashboard.toggleBHRBiAnnualFeedback()">Interval Feedback</li>
                                <li class="active">BHR Bi-Annual Feedback Feedback</li>
                            </ol>
                            <div class="margin-top-sm">
                                <div class="row">
                                    <div class="col-md-3">
                                        <span>Name : </span>
                                        <strong class="joineeinformation_name"></strong>
                                    </div>
                                    <div class="col-md-3">
                                        <span>Emp Id : </span>
                                        <strong class="joineeinformation_empid"></strong>
                                    </div>
                                    <div class="col-md-3">
                                        <span>DOJ : </span>
                                        <strong class="joineeinformation_doj"></strong>
                                    </div>
                                    <div class="col-md-3 text-right">
                                        <i class="fa fa-share text-red pointer fa-lg"></i>
                                    </div>
                                </div>
                            </div>
                            <hr/>
                            <div class="row">
                                <div class="col-xs-12">
                                    <h4 class="margin-0">Supervisor Monthly Feedback Form</h4>
                                    <h5 class="text-muted">Completed on 15/01/17</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div>
                                        <p>1. How would you rate his/her performance up to this point?</p>
                                        <div>
                                            A.
                                            <span><i class="fa fa-star fa-lg text-gold"></i></span>
                                            <span><i class="fa fa-star fa-lg text-gold"></i></span>
                                            <span><i class="fa fa-star fa-lg text-gold"></i></span>
                                            <span><i class="fa fa-star-half-o fa-lg text-gold"></i></span>
                                            <span><i class="fa fa-star-o fa-lg text-gold"></i></span>
                                        </div>
                                    </div>
                                    <hr class="margin-sm"/>
                                    <div>
                                        <p>2. How would you rate his/her performance up to this point?</p>
                                        <div>
                                            A.
                                            <span><i class="fa fa-star fa-lg text-gold"></i></span>
                                            <span><i class="fa fa-star fa-lg text-gold"></i></span>
                                            <span><i class="fa fa-star fa-lg text-gold"></i></span>
                                            <span><i class="fa fa-star-half-o fa-lg text-gold"></i></span>
                                            <span><i class="fa fa-star-o fa-lg text-gold"></i></span>
                                        </div>
                                    </div>
                                    <hr class="margin-sm"/>
                                    <div>
                                        <p>3. How would you rate his/her performance up to this point?</p>
                                        <div>
                                            A.
                                            <span><i class="fa fa-star fa-lg text-gold"></i></span>
                                            <span><i class="fa fa-star fa-lg text-gold"></i></span>
                                            <span><i class="fa fa-star fa-lg text-gold"></i></span>
                                            <span><i class="fa fa-star-half-o fa-lg text-gold"></i></span>
                                            <span><i class="fa fa-star-o fa-lg text-gold"></i></span>
                                        </div>
                                    </div>
                                    <hr class="margin-sm"/>
                                    <div>
                                        <p>4. How would you rate his/her performance up to this point?</p>
                                        <div>
                                            A.
                                            <span><i class="fa fa-star fa-lg text-gold"></i></span>
                                            <span><i class="fa fa-star fa-lg text-gold"></i></span>
                                            <span><i class="fa fa-star fa-lg text-gold"></i></span>
                                            <span><i class="fa fa-star-half-o fa-lg text-gold"></i></span>
                                            <span><i class="fa fa-star-o fa-lg text-gold"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <p>5. How would you rate his/her performance up to this point?</p>
                                        <div>
                                            A.
                                            <span><i class="fa fa-star fa-lg text-gold"></i></span>
                                            <span><i class="fa fa-star fa-lg text-gold"></i></span>
                                            <span><i class="fa fa-star fa-lg text-gold"></i></span>
                                            <span><i class="fa fa-star-half-o fa-lg text-gold"></i></span>
                                            <span><i class="fa fa-star-o fa-lg text-gold"></i></span>
                                        </div>
                                    </div>
                                    <hr class="margin-sm"/>
                                    <div>
                                        <p>6. How would you rate his/her performance up to this point?</p>
                                        <div>
                                            <div class="well well-sm">
                                                <small class="text-muted">
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="margin-sm"/>
                                    <div>
                                        <p>7. How would you rate his/her performance up to this point?</p>
                                        <div>
                                            <div class="well well-sm">
                                                <small class="text-muted">
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr/>
                            <h4>SPOC Comments (if any)</h4>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <textarea class="form-control" rows="5"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-md-offset-4 text-right">
                                    <button class="btn btn-danger btn-block">Submit</button>
                                </div>
                            </div>
                        </div>-->
                        <!--<div id="BHR_annual_feedback" class="hidden">
                            <ol class="breadcrumb">
                                <li class="text-blue pointer" onclick="dashboard.toggleBHRAnnualFeedback()">Interval Feedback</li>
                                <li class="active">BHR Annual Feedback Feedback</li>
                            </ol>
                            <div class="margin-top-sm">
                                <div class="row">
                                    <div class="col-md-3">
                                        <span>Name : </span>
                                        <strong class="joineeinformation_name"></strong>
                                    </div>
                                    <div class="col-md-3">
                                        <span>Emp Id : </span>
                                        <strong class="joineeinformation_empid"></strong>
                                    </div>
                                    <div class="col-md-3">
                                        <span>DOJ : </span>
                                        <strong class="joineeinformation_doj"></strong>
                                    </div>
                                    <div class="col-md-3 text-right">
                                        <i class="fa fa-share text-red pointer fa-lg"></i>
                                    </div>
                                </div>
                            </div>
                            <hr/>
                            <div class="row">
                                <div class="col-xs-12">
                                    <h4 class="margin-0">Supervisor Monthly Feedback Form</h4>
                                    <h5 class="text-muted">Completed on 15/01/17</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div>
                                        <p>1. How would you rate his/her performance up to this point?</p>
                                        <div>
                                            A.
                                            <span><i class="fa fa-star fa-lg text-gold"></i></span>
                                            <span><i class="fa fa-star fa-lg text-gold"></i></span>
                                            <span><i class="fa fa-star fa-lg text-gold"></i></span>
                                            <span><i class="fa fa-star-half-o fa-lg text-gold"></i></span>
                                            <span><i class="fa fa-star-o fa-lg text-gold"></i></span>
                                        </div>
                                    </div>
                                    <hr class="margin-sm"/>
                                    <div>
                                        <p>2. How would you rate his/her performance up to this point?</p>
                                        <div>
                                            A.
                                            <span><i class="fa fa-star fa-lg text-gold"></i></span>
                                            <span><i class="fa fa-star fa-lg text-gold"></i></span>
                                            <span><i class="fa fa-star fa-lg text-gold"></i></span>
                                            <span><i class="fa fa-star-half-o fa-lg text-gold"></i></span>
                                            <span><i class="fa fa-star-o fa-lg text-gold"></i></span>
                                        </div>
                                    </div>
                                    <hr class="margin-sm"/>
                                    <div>
                                        <p>3. How would you rate his/her performance up to this point?</p>
                                        <div>
                                            A.
                                            <span><i class="fa fa-star fa-lg text-gold"></i></span>
                                            <span><i class="fa fa-star fa-lg text-gold"></i></span>
                                            <span><i class="fa fa-star fa-lg text-gold"></i></span>
                                            <span><i class="fa fa-star-half-o fa-lg text-gold"></i></span>
                                            <span><i class="fa fa-star-o fa-lg text-gold"></i></span>
                                        </div>
                                    </div>
                                    <hr class="margin-sm"/>
                                    <div>
                                        <p>4. How would you rate his/her performance up to this point?</p>
                                        <div>
                                            A.
                                            <span><i class="fa fa-star fa-lg text-gold"></i></span>
                                            <span><i class="fa fa-star fa-lg text-gold"></i></span>
                                            <span><i class="fa fa-star fa-lg text-gold"></i></span>
                                            <span><i class="fa fa-star-half-o fa-lg text-gold"></i></span>
                                            <span><i class="fa fa-star-o fa-lg text-gold"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <p>5. How would you rate his/her performance up to this point?</p>
                                        <div>
                                            A.
                                            <span><i class="fa fa-star fa-lg text-gold"></i></span>
                                            <span><i class="fa fa-star fa-lg text-gold"></i></span>
                                            <span><i class="fa fa-star fa-lg text-gold"></i></span>
                                            <span><i class="fa fa-star-half-o fa-lg text-gold"></i></span>
                                            <span><i class="fa fa-star-o fa-lg text-gold"></i></span>
                                        </div>
                                    </div>
                                    <hr class="margin-sm"/>
                                    <div>
                                        <p>6. How would you rate his/her performance up to this point?</p>
                                        <div>
                                            <div class="well well-sm">
                                                <small class="text-muted">
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="margin-sm"/>
                                    <div>
                                        <p>7. How would you rate his/her performance up to this point?</p>
                                        <div>
                                            <div class="well well-sm">
                                                <small class="text-muted">
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr/>
                            <h4>SPOC Comments (if any)</h4>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <textarea class="form-control" rows="5"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-md-offset-4 text-right">
                                    <button class="btn btn-danger btn-block">Submit</button>
                                </div>
                            </div>
                        </div>-->
                    </div>
                    <div id="roadmap" class="tab-pane fade">
                        <div id="roadmap_view" class="">
                            <ol class="breadcrumb">
                                <li>Roadmap</li>
                                <li class="active">View Roadmap</li>
                            </ol>
                            <div class="margin-top-sm">
                                <div class="row">
                                    <div class="col-md-3">
                                        <span>Name : </span>
                                        <strong class="joineeinformation_name"></strong>
                                    </div>
                                    <div class="col-md-3">
                                        <span>Emp Id : </span>
                                        <strong class="joineeinformation_empid"></strong>
                                    </div>
                                    <div class="col-md-3">
                                        <span>DOJ : </span>
                                        <strong class="joineeinformation_doj"></strong>
                                    </div>
                                </div>
                            </div>
                            <hr/>
                            <div class="col-xs-12 margin-top-lg" id="session_table_div">
                                <table class="table table-bordered table-striped" style="margin-left: -15px;" id="table1">
                                    <thead>
                                        <tr>
                                            <th><div data-toggle="tooltip" data-placement="bottom" data-original-title="List of all the employees" class="red-tooltip">Business Unit</div></th>
                                            <th><div data-toggle="tooltip" data-placement="bottom" data-original-title="Employee ID" class="red-tooltip">Department</div></th>
                                            <!--<th><div data-toggle="tooltip" data-placement="bottom" data-original-title="Department of employees" class="red-tooltip">Sub Department</div></th>-->
                                            <th><div data-toggle="tooltip" data-placement="bottom" data-original-title="Date of joining of the employee" class="red-tooltip">Meeting With</div></th>
                                            <th><div data-toggle="tooltip" data-placement="bottom" data-original-title="Manager Name" class="red-tooltip">Note</div></th>
                                            <th><div data-toggle="tooltip" data-placement="bottom" data-original-title="Confirmation status of employees" class="red-tooltip">Date</div></th>
                                            <th><div data-toggle="tooltip" data-placement="bottom" data-original-title="Status of roadmap" class="red-tooltip">Start Time</div></th>
                                            <th><div data-toggle="tooltip" data-placement="bottom" data-original-title="Status of roadmap" class="red-tooltip">End Time</div></th>
                                            <th><div data-toggle="tooltip" data-placement="bottom" data-original-title="Status of roadmap" class="red-tooltip">Duration</div></th>
                                            <th><div data-toggle="tooltip" data-placement="bottom" data-original-title="Status of roadmap" class="red-tooltip">Status</div></th>
                                        </tr>
                                    </thead>
                                    <tbody id="session_table">
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</aside>
<!-- asidebar ends here -->

<div class="overlay" data-sidebar-overlay></div>

<!-- fluid container starts here -->
<div class="container-fluid container-padding-top">
    <div class="row" id="dashboard_table">

<div clas="col-md-12 ">
 <div class="<?php echo @$class; ?> text-center">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close"><?php echo @$close; ?></a>
                   <i class="<?php echo @$iclass; ?>"></i><h5 style="color:green;"><?php echo $this->Flash->render(); ?></h5>
                </div>
        </div>
        <?php $adduser = $this->Url->build(['controller' => 'Users', 'action' => 'addUser']); ?>
        <?php echo $this->Form->create('Users', ['url' => ['Controller' => 'Users', 'action' => 'delete']]); ?>
        <div class="col-md-6">

            <a href="<?= $adduser; ?>" class="btn btn-danger btn-sm"><i class="fa fa-plus"></i> Add</a>
            <?php echo $this->Form->button('<i class="fa fa-trash-o"></i> Delete', (['class' => 'btn btn-primary btn-sm', 'type' => 'submit'])); ?>

        </div>
        <div class="col-md-6 text-right">
            <a href="<?= $this->Url->build(['controller' => 'Dashboard', 'action' => 'dashboard']) ?>" class="btn btn-danger btn-sm"><i class="fa fa-bar-chart"></i></a>
        </div>
        <div class="col-xs-12 margin-top-lg">
            <table class="table table-bordered table-striped" id="myTable">
                <thead>
                    <tr>
                        <th></th>
                        <th class="pointer" onclick="sortTable(1)"><div data-toggle="tooltip" data-placement="bottom" data-original-title="List of all the employees" class="red-tooltip">Employee Name</div></th>
                        <th><div data-toggle="tooltip" data-placement="bottom" data-original-title="Employee ID" class="red-tooltip">Emp ID</div></th>
                        <th class="pointer" onclick="sortTable(4)"><div data-toggle="tooltip" data-placement="bottom" data-original-title="Date of joining of the employee" class="red-tooltip">DOJ</div></th>
                        <th><div data-toggle="tooltip" data-placement="bottom" data-original-title="Status of intimation sent to the new employee" class="red-tooltip">Logistics</div></th>
                        <th><div data-toggle="tooltip" data-placement="bottom" data-original-title="Status of arrangements provided for the employee" class="red-tooltip">15 Day Check List</div></th>
                        <th><div data-toggle="tooltip" data-placement="bottom" data-original-title="Status of session intimation" class="red-tooltip">Feedback</div></th>
                        <th><div data-toggle="tooltip" data-placement="bottom" data-original-title="Status of 45 Day BHR Connect" class="red-tooltip">Confirm</div></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    //pr($feedbacksfetch);die;
                    if (!empty($users)):
                        foreach ($users as $showUser):
                            ?>    
                            <tr data-type="completed">
                                <td><input type="checkbox" class="checkbox" name="id[]" value="<?= $showUser['id'] ?>"></td>
                                <td><div class="text-blue logistic_user_arrangements" data-key="<?= $showUser['id'] ?>" data-sidebar-button id="<?= 'user_' . $showUser['id'] ?>" onclick="displayIdBasedData('<?= $showUser['id'] ?>');getsessions('<?= $showUser['id'] ?>');">
                                        <?= $showUser['first_name'] . ' ' . $showUser['last_name'] ?>
                                        <td><?= $showUser['emp_id'] ?></td>
                                        <td><?= $showUser['doj'] ?></td>
                                        <td>
                                            <?php
                                            $logIcon = '<i class="fa fa-circle text-red"></i>';
                                            if (isset($showUser['lcomplete'])) {
                                                if ($showUser['lcomplete'] == 1) {
                                                    $logIcon = '<i class="fa fa-circle text-green"></i>';
                                                } else if ($showUser['lcomplete'] == 0) {
                                                    $logIcon = '<i class="fa fa-circle text-orange"></i>';
                                                }
                                            }
                                            echo $logIcon;
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                            $fIcon = '<i class="fa fa-circle text-orange"></i>';
                                            if (!empty($showUser['fifteen'])) {
                                                $fIcon = '<i class="fa fa-circle text-green"></i>';
                                            }
                                            echo $fIcon;
                                            ?>


                                        </td>
                                        <td><i class="fa fa-circle text-red"></i></td>
                                        <td>
                                            <?php
                                            if ($showUser['status'] == 3) {
                                                echo '<span class="badge badge-error"><i class="fa fa-times"></i> Rejected</span>';
                                            } else if ($showUser['status'] == 2) {
                                                echo '<span class="badge badge-success"><i class="fa fa-check"></i> Confirmed</span>';
                                            } else {
                                                echo '<button class="btn btn-success btn-sm u_confirm" data-key="' . $showUser['id'] . '">Confirm</button>';
                                                echo '&nbsp;<button class="btn btn-danger btn-sm u_reject" data-key="' . $showUser['id'] . '">Reject</button>';
                                            }
                                            ?>
                                        </td>
                            </tr>
                            <?php
                        endforeach;
                    endif;
                    $this->Form->end();
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row hidden" id="dashboard_graph">
        <div class="col-md-12 text-right">
            <button type="button" class="btn btn-danger btn-sm" onclick="dashboard.toggleDashboard()"><i class="fa fa-table"></i></button>
        </div>
        <div class="col-xs-12 margin-top-lg ">
            <div class="row">
                <div class="col-md-6">
                    <div class="padding-md bg-white">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <select class="form-control">
                                        <option value="7 Days">Last 7 Days</option>
                                        <option value="1 Month">Last 1 Month</option>
                                        <option value="3 Months">Last 3 Months</option>
                                        <option value="6 Months">Last 6 Months</option>
                                        <option value="1 Year">Last 1 Year</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <canvas id="myChart" width="400"></canvas>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="padding-md bg-white">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <select class="form-control">
                                        <option value="7 Days">Last 7 Days</option>
                                        <option value="1 Month">Last 1 Month</option>
                                        <option value="3 Months">Last 3 Months</option>
                                        <option value="6 Months">Last 6 Months</option>
                                        <option value="1 Year">Last 1 Year</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 text-center">
                                <h4>Roadmap</h4>
                            </div>
                        </div>
                        <canvas id="myChart1" width="400"></canvas>
                    </div>
                </div>
            </div>
            <div class="row margin-top-lg">
                <div class="col-md-4">
                    <div class="padding-md bg-white">
                        <div class="text-center">
                            <h4>BHR Meetings</h4>
                        </div>
                        <canvas id="piechart" width="400" height="400"></canvas>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="padding-md bg-white text-center">
                        <h4>Logistics</h4>
                        <canvas id="foo1"></canvas>
                        <p><strong>Logistics completed</strong> : 7</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="padding-md bg-white text-center">
                        <h4>Average Score</h4>
                        <canvas id="foo" width="400"></canvas>
                        <p><strong>Weighted Score</strong> : 3.7</p>
                        <p><strong>Actual Score</strong> : 1.7</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- fluid container ends here  -->

<?php echo $this->Html->script(['jquery-1.12.4', 'bootstrap.min', 'sidebar', 'jquery-ui', 'dashboard', 'chart.min', 'guage', 'customquery', 'manageuser']); ?>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
<?php
$logistic_data = $this->Url->build(['controller' => 'Users', 'action' => 'userlogistic_data']);
$session_detail_by_id = $this->Url->build(['controller' => 'Users', 'action' => 'fetchusersessionbyidcommon']);
?>
<script>
                $(document).ready(function () {
                    $('#myTable').DataTable({
                        "aaSorting": []

                    });
                });
</script>
<script>
    $('[data-toggle="tooltip"]').tooltip();

    function sortTable(n) {
        var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
        table = document.getElementById("myTable");
        switching = true;
        dir = "asc";

        while (switching) {
            switching = false;
            rows = table.getElementsByTagName("TR");
            for (i = 1; i < (rows.length - 1); i++) {
                shouldSwitch = false;
                x = rows[i].getElementsByTagName("TD")[n];
                y = rows[i + 1].getElementsByTagName("TD")[n];
                if (dir == "asc") {
                    if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                        shouldSwitch = true;
                        break;
                    }
                } else if (dir == "desc") {
                    if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                        shouldSwitch = true;
                        break;
                    }
                }
            }
            if (shouldSwitch) {
                rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                switching = true;
                switchcount++;
            } else {
                if (switchcount == 0 && dir == "asc") {
                    dir = "desc";
                    switching = true;
                }
            }
        }
    }


    function getsessions(id) {
        $('#session_table').html('');
        $.ajax({
            type: "POST",
            url: "<?= $session_detail_by_id; ?>",
            data: {'id': id},
            success: function (data) {
                //console.log("data fetched - "+data);
                var parsedata1 = JSON.parse(data);
                if (parsedata1 != "") {
                    $("#session_table_div").show();

                    $("#session_table").append(parsedata1);
                } else {
                    parsedata1 = "<tr><td></td><td></td><td></td><td></td><td>No Data Found</td><td></td><td></td><td></td><td></td></tr>";
                    //$("#session_table_div").hide();
                    $("#session_table").append(parsedata1);
                }
            },
            error: function () {
                // alert("Value NOT reaching to controller ");
            }
        });
    }

    $(document).on('click', '.u_confirm', function () {
        var r = confirm("Confirm the joinee ..?");
        if (r != true) {
            return false;
        }
        var btn = $(this);
        var key = $(this).attr('data-key');
        $.ajax({
            url: webroot + 'users/stchange/' + key + '/1'
        }).done(function () {
            btn.parent().html('<span class="badge badge-success"><i class="fa fa-check"></i> Confirmed</span>');
        });
    });
    $(document).on('click', '.u_reject', function () {
        var r = confirm("Are you sure to reject joinee ..?");
        if (r != true) {
            return false;
        }
        var btn = $(this);
        var key = $(this).attr('data-key');
        $.ajax({
            url: webroot + 'users/stchange/' + key + '/0'
        }).done(function () {
            btn.parent().html('<span class="badge badge-error"><i class="fa fa-times"></i> Rejected</span>');
        });
    });
</script>
<style>

    .dataTables_info{width: 220px;}
    .paging_simple_numbers{width: 220px;float: right;margin-top: -44px;margin-top: -15px;}
    .dataTables_filter{float: right;}
    /* .form-control input-sm{width: 71px;}
     .col-sm-12{margin-top: -12px;}
     .col-xs-12{margin-bottom: -40px;}*/
</style>
