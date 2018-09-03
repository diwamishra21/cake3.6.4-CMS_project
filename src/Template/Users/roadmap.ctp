<?php 
$fetchroadmapPopup = $this->Url->build(['controller'=>'Users','action'=>'fetchroadmapPopup']);
$dept_url = $this->Url->build(['controller' => 'Logistics', 'action' => 'getdepartments']);
$get_bus_url = $this->Url->build(['controller' => 'Logistics', 'action' => 'getbusinessunits']);
$s_dept_url = $this->Url->build(['controller' => 'Logistics', 'action' => 'getsubdepartments']); 
//$managing_url = $this->Url->build(['controller' => 'Users', 'action' => 'matchingusers']);
$addbussiness= $this->Url->build(['controller' => 'Users', 'action' => 'addbussiness']);
$meeting_with_url = $this->Url->build(['controller' => 'Users', 'action' => 'getmeetingwithuser']);
?>
<aside data-sidebar>
    <div class="padding-bottom-md container-fluid">
        <div class="row">
            <div class="col-xs-12 bg-dark">
                <div class="padding-md">
                    <div class="panel-close-btn" data-sidebar-button><i class="fa fa-times fa-lg text-white"></i></div>
                    <h3 class="margin-0">Joinee Details</h3>
                </div>
            </div>
            <div class="col-xs-12 margin-top-md">
                <div class="nav-center">
                    <ul class="nav nav-pills text-center">
                        <li class="active"><a data-toggle="pill" href="#joinee_information" id="joinee_tab">Joinee Information</a></li>
                      <li><a data-toggle="pill" href="#roadmap" id="roadmap_tab">Roadmap</a></li>
 <li><a data-toggle="pill" href="#interval_feedback" id="interval_tab">Interval Feedback</a></li>
                    </ul>
                </div>
                <hr class="margin-top-0"/>
                <div class="tab-content">
                    <div id="joinee_information" class="tab-pane fade in active">
                        <div id="joinee-details-outer">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="panel panel-danger joinee-blocks" onclick="dashboard.toggleLogistics()">
                                        <div class="panel-body">
                                            <div class="panel-proceed-btn"><i class="fa fa-angle-double-right fa-lg"></i></div>
                                            <strong>Logistics Arrangements</strong>
                                            <p class="margin-bottom-0 text-muted">-</p>
                                            <p class="margin-bottom-0 text-red">Pending</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="panel panel-success joinee-blocks" onclick="dashboard.toggle15DayChecklist()">
                                        <div class="panel-body">
                                            <div class="panel-proceed-btn"><i class="fa fa-angle-double-right fa-lg"></i></div>
                                            <strong>15 Day Checklist</strong>
                                            <p class="margin-bottom-0 text-muted">15/01/2017</p>
                                            <p class="margin-bottom-0 text-green">Done</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="panel panel-danger joinee-blocks" onclick="dashboard.toggle45DayMeeting()">
                                        <div class="panel-body">
                                            <div class="panel-proceed-btn"><i class="fa fa-angle-double-right fa-lg"></i></div>
                                            <strong>BHR 45 Day Meeting</strong>
                                            <p class="margin-bottom-0 text-muted">-</p>
                                            <p class="margin-bottom-0 text-danger">Pending</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="panel panel-danger joinee-blocks" onclick="dashboard.toggle90dayMeeting()">
                                        <div class="panel-body">
                                            <div class="panel-proceed-btn"><i class="fa fa-angle-double-right fa-lg"></i></div>
                                            <strong>BHR 90 Day Meeting</strong>
                                            <p class="margin-bottom-0 text-muted">-</p>
                                            <p class="margin-bottom-0 text-danger">Pending</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="panel panel-success joinee-blocks" onclick="dashboard.toggleConfirmationStatus()">
                                        <div class="panel-body">
                                            <div class="panel-proceed-btn"><i class="fa fa-angle-double-right fa-lg"></i></div>
                                            <strong>Confirmation Status</strong>
                                            <p class="margin-bottom-0 text-muted">15/05/2017</p>
                                            <p class="margin-bottom-0 text-green">Done</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="margin-top-0"/>
                            <!-- <form id="joinee_details">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <div class="col-md-3">
                                                <label for="name" class="padding-top-md">Name</label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="text" id="name" class="form-control" placeholder="Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <div class="col-md-3">
                                                <label for="doj" class="padding-top-md">DOJ</label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="text" id="doj" class="form-control" placeholder="Date of Joining">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <div class="col-md-3">
                                                <label for="emp_id" class="padding-top-sm">Employee ID</label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="text" id="emp_id" class="form-control" placeholder="Employee ID">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <div class="col-md-3">
                                                <label for="emp_email" class="padding-top-sm">Employee Email</label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="text" id="emp_email" class="form-control" placeholder="Employee Email">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <div class="col-md-3">
                                                <label for="business" class="padding-top-md">Business</label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="text" id="business" class="form-control" placeholder="Business">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <div class="col-md-3">
                                                <label for="location" class="padding-top-md">Location</label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="text" id="location" class="form-control" placeholder="Location">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <div class="col-md-3">
                                                <label for="dept" class="padding-top-md">Department</label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="text" id="dept" class="form-control" placeholder="Department">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <div class="col-md-3">
                                                <label for="sub_dept" class="padding-top-sm">Sub Department</label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="text" id="" class="form-control" placeholder="Sub Department">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <div class="col-md-3">
                                                <label for="level" class="padding-top-md">Level</label>
                                            </div>
                                            <div class="col-md-9">
                                                <select class="form-control" id="level">
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <div class="col-md-3">
                                                <label for="designation" class="padding-top-md">Designation</label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="text" id="designation" class="form-control" placeholder="Designation">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <div class="col-md-3">
                                                <label for="supervisor" class="padding-top-md">Supervisor</label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="text" id="supervisor" class="form-control" placeholder="Supervisor">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <div class="col-md-3">
                                                <label for="spoc" class="padding-top-md">SPOC</label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="text" id="spoc" class="form-control" placeholder="SPOC">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <div class="col-md-3">
                                                <label for="business_hr" class="padding-top-sm">Business HR</label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="text" id="business_hr" class="form-control" placeholder="Business HR">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 hidden">
                                        <div class="text-center">
                                            <button class="btn btn-danger btn-block"><i class="fa fa-pencil"></i> Modify</button>
                                        </div>
                                    </div>
                                </div>
                            </form> -->
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
                                        <strong id="jusername"></strong>
                                    </div>
                                    <div class="col-md-3">
                                        <span>Emp Id : </span>
                                        <strong id="jempid"></strong>
                                    </div>
                                    <div class="col-md-3">
                                        <span>DOJ : </span>
                                        <strong id="jdoj"></strong>
                                    </div>
                                    <div class="col-md-3 text-right">
                                        <i class="fa fa-share text-red pointer fa-lg"></i>
                                    </div>
                                </div>
                            </div>
                            <hr/>
                            <div class="row">
<?php foreach($query2 as $query2s){
$department_id=$query2s['department_id'];
$departmentname=$departmentarray[$department_id];
$location_id=$query2s['location_id'];
$locationname=$locationarr[$location_id];
 ?>
                                <div class="col-md-4">
                                    <div class="panel panel-primary joinee-blocks" onclick="dashboard.panelCheckboxToggle(this)">
                                        <div class="panel-body">
                                            <div class="panel-proceed-btn"><i class="fa fa-check text-green"></i></div>
                                            <strong><?= $query2s['title'] ?></strong>
                                            <p class="margin-bottom-0 text-muted"><?= $locationname ;?></p>
                                            <p class="margin-bottom-0 text-primary"><?= $departmentname ;?></p>
                                        </div>
                                    </div>
                                </div>
                         <?php } ?>       
                                
                                
                                
                                
                                
                                

                            </div>
                        </div>
                        <div id="15_day_checklist" class="hidden">
                            <ol class="breadcrumb">
                                <li class="text-blue pointer" onclick="dashboard.toggle15DayChecklist()">Joinee Information</li>
                                <li class="active">15 Day Checklist</li>
                            </ol>
                            <div class="margin-top-sm">
                                <div class="row">
                                    <div class="col-md-3">
                                        <span>Name : </span>
                                        <strong id="username1"></strong>
                                    </div>
                                    <div class="col-md-3">
                                        <span>Emp Id : </span>
                                        <strong id="empid1"></strong>
                                    </div>
                                    <div class="col-md-3">
                                        <span>DOJ : </span>
                                        <strong id="rdoj1"></strong>
                                    </div>
                                    <div class="col-md-3 text-right">
                                        <i class="fa fa-share text-red pointer fa-lg"></i>
                                    </div>
                                </div>
                            </div>
                            <hr/>
                            <h5>Organisation Overview</h5>
                            <div class="well well-sm">
                                <p>Q. I am aware of Quatrro values and its journey</p>
                                <p class="margin-bottom-0">A. I am almost certain</p>
                                <hr class="margin-top-sm margin-bottom-sm"/>
                                <p>Q. I am aware of Quatrro values and its journey</p>
                                <p class="margin-bottom-0">A. I am almost certain</p>
                                <hr class="margin-top-sm margin-bottom-sm"/>
                                <p>Q. I am aware of Quatrro values and its journey</p>
                                <p class="margin-bottom-0">A. I am almost certain</p>
                                <hr class="margin-top-sm margin-bottom-sm"/>
                                <p>Q. I am aware of Quatrro values and its journey</p>
                                <p class="margin-bottom-0">A. I am almost certain</p>
                            </div>
                            <h5>Process Overview</h5>
                            <div class="well well-sm">
                                <p>Q. I am aware of Quatrro values and its journey</p>
                                <p class="margin-bottom-0">A. I am almost certain</p>
                                <hr class="margin-top-sm margin-bottom-sm"/>
                                <p>Q. I am aware of Quatrro values and its journey</p>
                                <p class="margin-bottom-0">A. I am almost certain</p>
                                <hr class="margin-top-sm margin-bottom-sm"/>
                                <p>Q. I am aware of Quatrro values and its journey</p>
                                <p class="margin-bottom-0">A. I am almost certain</p>
                                <hr class="margin-top-sm margin-bottom-sm"/>
                                <p>Q. I am aware of Quatrro values and its journey</p>
                                <p class="margin-bottom-0">A. I am almost certain</p>
                            </div>
                            <h5>Learning Overview</h5>
                            <div class="well well-sm">
                                <p>Q. I am aware of Quatrro values and its journey</p>
                                <p class="margin-bottom-0">A. I am almost certain</p>
                                <hr class="margin-top-sm margin-bottom-sm"/>
                                <p>Q. I am aware of Quatrro values and its journey</p>
                                <p class="margin-bottom-0">A. I am almost certain</p>
                                <hr class="margin-top-sm margin-bottom-sm"/>
                                <p>Q. I am aware of Quatrro values and its journey</p>
                                <p class="margin-bottom-0">A. I am almost certain</p>
                                <hr class="margin-top-sm margin-bottom-sm"/>
                                <p>Q. I am aware of Quatrro values and its journey</p>
                                <p class="margin-bottom-0">A. I am almost certain</p>
                            </div>
                        </div>
                        <div id="bhr_45_day_meeting" class="hidden">
                            <ol class="breadcrumb">
                                <li class="text-blue pointer" onclick="dashboard.toggle45DayMeeting()">Joinee Information</li>
                                <li class="active">BHR 45 Day Meeting</li>
                            </ol>
                            <div class="margin-top-sm">
                                <div class="row">
                                    <div class="col-md-3">
                                        <span>Name : </span>
                                        <strong>Dhanya Menon</strong>
                                    </div>
                                    <div class="col-md-3">
                                        <span>Emp Id : </span>
                                        <strong>QA110231</strong>
                                    </div>
                                    <div class="col-md-3">
                                        <span>DOJ : </span>
                                        <strong>13/01/18</strong>
                                    </div>
                                    <div class="col-md-3 text-right">
                                        <i class="fa fa-share text-red pointer fa-lg"></i>
                                    </div>
                                </div>
                            </div>
                            <hr/>
                            <div class="row">
                              
                            </div>
                        </div>
                        <div id="bhr_90_day_meeting" class="hidden">
                            <ol class="breadcrumb">
                                <li class="text-blue pointer" onclick="dashboard.toggle90dayMeeting()">Joinee Information</li>
                                <li class="active">BHR 90 Day Meeting</li>
                            </ol>
                            <div class="margin-top-sm">
                                <div class="row">
                                    <div class="col-md-3">
                                        <span>Name : </span>
                                        <strong>Dhanya Menon</strong>
                                    </div>
                                    <div class="col-md-3">
                                        <span>Emp Id : </span>
                                        <strong>QA110231</strong>
                                    </div>
                                    <div class="col-md-3">
                                        <span>DOJ : </span>
                                        <strong>13/01/18</strong>
                                    </div>
                                    <div class="col-md-3 text-right">
                                        <i class="fa fa-share text-red pointer fa-lg"></i>
                                    </div>
                                </div>
                            </div>
                            <hr/>
							
							
                            <div class="row">
                            
                            </div>
                        </div>
                        <div id="confirmation_status" class="hidden">
                            <ol class="breadcrumb">
                                <li class="text-blue pointer" onclick="dashboard.toggleConfirmationStatus()">Joinee Information</li>
                                <li class="active">Confirmation Status</li>
                            </ol>
                            <div class="margin-top-sm">
                                <div class="row">
                                    <div class="col-md-3">
                                        <span>Name : </span>
                                        <strong>Dhanya Menon</strong>
                                    </div>
                                    <div class="col-md-3">
                                        <span>Emp Id : </span>
                                        <strong>QA110231</strong>
                                    </div>
                                    <div class="col-md-3">
                                        <span>DOJ : </span>
                                        <strong>13/01/18</strong>
                                    </div>
                                    <div class="col-md-3 text-right">
                                        <i class="fa fa-share text-red pointer fa-lg"></i>
                                    </div>
                                </div>
                            </div>
                            <hr/>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="well well-sm">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <strong>BHR 45 Day Session</strong>
                                                <p class="margin-0">10/01/2018</p>
                                                <p class="margin-0">4:00 PM</p>
                                                <p class="margin-0">Anil</p>
                                            </div>
                                            <div class="col-md-5">
                                                <strong>Joinee Feedback</strong>
                                                <div class="panel panel-default">
                                                    <div class="panel-body">
                                                        <small class="text-muted">
                                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                        </small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <strong>BHR Feedback</strong>
                                                <div class="panel panel-default">
                                                    <div class="panel-body">
                                                        <small class="text-muted">
                                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                        </small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="well well-sm">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <strong>BHR 90 Day Session</strong>
                                                <p class="margin-0">10/01/2018</p>
                                                <p class="margin-0">4:00 PM</p>
                                                <p class="margin-0">Anil</p>
                                            </div>
                                            <div class="col-md-5">
                                                <strong>Joinee Feedback</strong>
                                                <div class="panel panel-default">
                                                    <div class="panel-body">
                                                        <small class="text-muted">
                                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                        </small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <strong>BHR Feedback</strong>
                                                <div class="panel panel-default">
                                                    <div class="panel-body">
                                                        <small class="text-muted">
                                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                        </small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="interval_feedback" class="tab-pane fade">
                        <div id="interval_feedback_outer">
                            <div class="margin-top-sm">
                                <div class="row">
                                    <div class="col-md-4">
                                        <span>Name : </span>
                                        <strong id="if_username"></strong>
                                    </div>
                                    <div class="col-md-4">
                                        <span>Emp Id : </span>
                                        <strong id="if_empid"></strong>
                                    </div>
                                    <div class="col-md-4">
                                        <span>DOJ : </span>
                                        <strong id="if_doj"></strong>
                                    </div>
                                </div>
                            </div>
                            <hr/>
                            <div class="row">
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
                            </div>
                        </div>
                        <div id="supervisor_monthly_feedback" class="hidden">
                            <ol class="breadcrumb">
                                <li class="text-blue pointer" onclick="dashboard.supervisorMonthlyFeedback()">Interval Feedback</li>
                                <li class="active">Supervisor Monthly Feedback</li>
                            </ol>
                            <div class="margin-top-sm">
                                <div class="row">
                                    <div class="col-md-3">
                                        <span>Name : </span>
                                        <strong>Dhanya Menon</strong>
                                    </div>
                                    <div class="col-md-3">
                                        <span>Emp Id : </span>
                                        <strong>QA110231</strong>
                                    </div>
                                    <div class="col-md-3">
                                        <span>DOJ : </span>
                                        <strong>13/01/18</strong>
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
                        </div>
                        <div id="BHR_Bi_annual_feedback" class="hidden">
                            <ol class="breadcrumb">
                                <li class="text-blue pointer" onclick="dashboard.toggleBHRBiAnnualFeedback()">Interval Feedback</li>
                                <li class="active">BHR Bi-Annual Feedback Feedback</li>
                            </ol>
                            <div class="margin-top-sm">
                                <div class="row">
                                    <div class="col-md-3">
                                        <span>Name : </span>
                                        <strong>Dhanya Menon</strong>
                                    </div>
                                    <div class="col-md-3">
                                        <span>Emp Id : </span>
                                        <strong>QA110231</strong>
                                    </div>
                                    <div class="col-md-3">
                                        <span>DOJ : </span>
                                        <strong>13/01/18</strong>
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
                        </div>
                        <div id="BHR_annual_feedback" class="hidden">
                            <ol class="breadcrumb">
                                <li class="text-blue pointer" onclick="dashboard.toggleBHRAnnualFeedback()">Interval Feedback</li>
                                <li class="active">BHR Annual Feedback Feedback</li>
                            </ol>
                            <div class="margin-top-sm">
                                <div class="row">
                                    <div class="col-md-3">
                                        <span>Name : </span>
                                        <strong>Dhanya Menon</strong>
                                    </div>
                                    <div class="col-md-3">
                                        <span>Emp Id : </span>
                                        <strong>QA110231</strong>
                                    </div>
                                    <div class="col-md-3">
                                        <span>DOJ : </span>
                                        <strong>13/01/18</strong>
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
                        </div>
                    </div>

<!-- add session road map -->
<div id="roadmap" class="tab-pane fade">
    <?php echo $this->Form->create('Addsessionform',array('url' => array('controller' => 'Users', 'action' =>'addsession')));?>
    
    <input type="hidden" name="as_id_0" id="as_id_0">
    <div id="roadmap_arrange" class="hidden">
        <ol class="breadcrumb">
            <li>Roadmap</li>
            <li class="active">Arrange</li>
        </ol>
        <div class="margin-top-sm">
            <div class="row">
                <div class="col-md-4">
                    <span>Name : </span>
                    <strong id="user_name"></strong>
                </div>
                <div class="col-md-4">
                    <span>Emp Id : </span>
                    <strong id="user_empid"></strong>
                </div>
                <div class="col-md-4">
                    <span>DOJ : </span>
                    <strong id="user_doj"></strong>
                </div>
            </div>
        </div>
        <hr/>

<div class="row" >
    <div class="col-xs-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row" id="session_blocks">
        <div class="col-md-12 witnessRow_0">
            <div class="col-md-3">
                <div class="form-group">
                    <label for="bu_name">Business Unit</label>
                    <select required class="form-control bu_name_0" id="bu_name_0" name="bu_name[]">
                        <option value="">Select</option>
                        <?php foreach ($business_units as $business_unit) { ?>
                            <option value="<?= $business_unit['id']; ?>"><?= $business_unit['title']; ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label for="dept">Department</label>
                    <select required class="form-control dept_0" id="dept_0" name="dept[]" >
                        <option value="">Select</option>
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="sub_dept">Sub Department</label>
                    <select required class="form-control sub_dept_0" id="sub_dept_0" name="sub_dept[]">
                        <option value="">Select</option>
                    </select>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label for="meeting_with">Meeting With</label>
                    <select required  class="form-control user_id_0" id="user_id_0" name="user_id[]">
                        <option value="">Select</option>
                    </select>

                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label for="note">Note</label>
                    <input class="form-control" type="text" name="note[]" id="note_0">
                </div>
            </div>

            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="session_meeting_date">Date</label>
                            <input required type="date" class="form-control" name="session_date[]" id="session_date_0">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="session_meeting_time">From</label>
                            <input required type="time" class="form-control" name="start_time[]" id="start_time_0">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="session_meeting_time">To</label>
                            <input required type="time" class="form-control" name="end_time[]" id="end_time_0">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="session_meeting_time">Duration</label>
                            <input disabled type="text" class="form-control" name="duration_0" id="duration_0">
                        </div>
                    </div>
                </div>
            </div>
        </div>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
    <div class="row">
        <div class="col-md-12 text-right">
            <button type="submit" class="btn btn-primary" onclick=""> Add Session</button>
            <button type="button" class="btn btn-primary add_session11 addbu" onclick="dashboard.roadmapSessionAdd(); get_bus_dept();"><i class="fa fa-plus"></i> Add More</button>
        </div>
    </div>
<?php echo $this->Form->end(); ?>
</div>
						
						
						
                        <div id="roadmap_recommend" class="hidden">
                            <ol class="breadcrumb">
                                <li>Roadmap</li>
                                <li class="active">Recommend</li>
                            </ol>
                            <div class="margin-top-sm">
                                <div class="row">
                                    <div class="col-md-3">
                                        <span>Name : </span>
                                        <strong>Dhanya Menon</strong>
                                    </div>
                                    <div class="col-md-3">
                                        <span>Emp Id : </span>
                                        <strong>QA110231</strong>
                                    </div>
                                    <div class="col-md-3">
                                        <span>DOJ : </span>
                                        <strong>13/01/18</strong>
                                    </div>
                                    <div class="col-md-3 text-right">
                                        <i class="fa fa-share text-red pointer fa-lg"></i>
                                    </div>
                                </div>
                            </div>
                            <hr/>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h5 class="margin-0">Roadmap Training 1</h5>
                                                    <small class="margin-top-lg text-muted">
                                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                    </small>
                                                </div>
                                                <div class="col-md-3">
                                                    <strong>6 hours</strong>
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="checkbox">
                                                </div>
                                            </div>
                                            <hr/>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h5 class="margin-0">Roadmap Training 2</h5>
                                                    <small class="margin-top-lg text-muted">
                                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                    </small>
                                                </div>
                                                <div class="col-md-3">
                                                    <strong>12 hours</strong>
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="checkbox">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-right">
                                    <button type="button" class="btn btn-danger"><i class="fa fa-check"></i> Recommend</button>
                                </div>
                            </div>
                        </div>
                        <div id="roadmap_view" class="">
                            <ol class="breadcrumb">
                                <li>Roadmap</li>
                                <li class="active">View Roadmap</li>
                            </ol>
                            <div class="margin-top-sm">
                                <div class="row">
                                    <div class="col-md-3">
                                        <span>Name : </span>
                                        <strong id="rv_username"></strong>
                                    </div>
                                    <div class="col-md-3">
                                        <span>Emp Id : </span>
                                        <strong id="rv_empid"></strong>
                                    </div>
                                    <div class="col-md-3">
                                        <span>DOJ : </span>
                                        <strong id="rv_doj"></strong>
                                    </div>
                                    <div class="col-md-3 text-right">
                                        <i class="fa fa-share text-red pointer fa-lg"></i>
                                    </div>
                                </div>
                            </div>
                            <hr/>
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <div class="row text-center">
                                                <div class="col-md-4">
                                                    <strong>BHR 45 Days Session</strong>
                                                </div>
                                                <div class="col-md-4">
                                                    <p class="margin-0">21/01/2017</p>
                                                </div>
                                                <div class="col-md-4">
                                                    <p class="margin-0">7 Hours</p>
                                                </div>
                                            </div>
                                            <hr/>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Joinee Feedback</label>
                                                    <div class="well well-sm">
                                                        <p class="margin-0">
                                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label>BHR Feedback</label>
                                                    <div class="well well-sm">
                                                        <p class="margin-0">
                                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <strong>Comment</strong>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <textarea class="form-control" rows="6" id="comments"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 text-center">
                                                    <button class="btn btn-danger">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="padding-xl text-center bg-dark">
                                        <div>
                                            <span><i class="fa fa-star fa-lg text-gold"></i></span>
                                            <span><i class="fa fa-star fa-lg text-gold"></i></span>
                                            <span><i class="fa fa-star fa-lg text-gold"></i></span>
                                            <span><i class="fa fa-star-half-o fa-lg text-gold"></i></span>
                                            <span><i class="fa fa-star-o fa-lg text-gold"></i></span>
                                        </div>
                                        <div>
                                            <h3>9/10</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</aside>
<div class="overlay" data-sidebar-overlay></div>

<div class="container-fluid container-padding-top">
    <?php $flash_message= $this->Flash->render() ?>
    <?php if(!empty(@$flash_message)){ ?>
    <div class="success-msg" id="success" style="text-align:center;">
     <i class="fa fa-check"></i>
        <!--<?= $this->Flash->render('flash', ['element' => 'success']);?>-->
     Session Added Successfully.
    </div>
    <?php } ?>
    <div class="row">
        <div class="col-xs-12 text-center">
            <h4>Manage Roadmap</h4>
        </div>
        <div class="col-xs-12 margin-top-lg overflow-scroll">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th><div data-toggle="tooltip" data-placement="bottom" data-original-title="List of all the employees" class="red-tooltip">Employee Name</div></th>
                  
                    <th><div data-toggle="tooltip" data-placement="bottom" data-original-title="Employee ID" class="red-tooltip">Emp ID</div></th>
  <th><div data-toggle="tooltip" data-placement="bottom" data-original-title="Department of employees" class="red-tooltip">Department</div></th>
                    <th><div data-toggle="tooltip" data-placement="bottom" data-original-title="Date of joining of the employee" class="red-tooltip">DOJ</div></th>
  <th><div data-toggle="tooltip" data-placement="bottom" data-original-title="Manager Name" class="red-tooltip">Manager Name</div></th>
  <th><div data-toggle="tooltip" data-placement="bottom" data-original-title="Confirmation status of employees" class="red-tooltip">Confirm</div></th>
                    <th><div data-toggle="tooltip" data-placement="bottom" data-original-title="Status of roadmap" class="red-tooltip">Status</div></th>
                </tr>
                </thead>
                <tbody>
           <?php foreach($roadmaplisting as $roadmaplistings ) {

@$department=$roadmaplistings['department'];
@$department_data=$departmentarray[$department];
?>
                    <tr>
                        <td><div class="text-blue" data-sidebar-button data-panel-type="roadmap" id="<?= 'user_'.$roadmaplistings['id'] ?>" onclick="return displayIdBasedData('<?= $roadmaplistings['id'] ?>');"><?= $roadmaplistings['first_name'] ;?><?= $roadmaplistings['last_name'] ;?></div></td>
                        <td><?= $roadmaplistings['emp_id'] ;?></td>
                       <td><?= @$department_data ?></td>
 <td><?= $roadmaplistings['doj'] ;?></td>
                       <td></td>
                        <td>
                            <div class="text-blue" id="roadmap_div" data-sidebar-button data-panel-type="roadmap" onclick="roadmap.openRoadmap('arrange');editdata('<?= $roadmaplistings['id'] ?>')"><i class="fa fa-check text-green"></i>
                            </div>
                        </td>
                        <td><i class="fa fa-check text-green"></i></td>
                    </tr>



                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php echo $this->Html->script(['jquery-1.12.4', 'bootstrap.min', 'sidebar','jquery-ui','dashboard','roadmap']); ?>
<?php $user_detail_by_id = $this->Url->build(['controller' => 'Users', 'action' => 'fetchuserbyid']); ?>
<script>
    $('[data-toggle="tooltip"]').tooltip();
</script>


<script type="text/javascript">
var increment = 0;

    /*  for department   */
    $("#dept_"+increment+"").prop('disabled', true);
    $(".bu_name_"+increment+"").change(function () {
        getdepartment();
    });
    
    /*  for subdepartment   */
    $("#sub_dept_"+increment+"").prop('disabled', true);
    $(".dept_"+increment+"").change(function () {
        getsubdepartment();
    });
    
    
    
    /*  for Meeting with data   */
    $("#user_id_"+increment+"").prop('disabled', true);
    $(".sub_dept_"+increment+"").change(function () {
        getmeetingwithdata();
    });
    
    
    /*for getting duration */
    $("#start_time_"+increment+"").change(function () {
        getmeetingduration();
    });
    
    /*for getting duration */
    $("#end_time_"+increment+"").change(function () {
        getmeetingduration();
    });
    



    function getdepartment(){
        console.log("bu_name changed with increment"+increment);
        $("#dept_"+increment+"").prop('disabled', false);
        var business_unit_id ="";
        $("#dept_"+increment+"").val('');
        $("#sub_dept_"+increment+"").val('');
        business_unit_id = $("#bu_name_"+increment+"").find(":selected").val();
        console.log("business_unit_id - "+business_unit_id);
        $.ajax({
            url: "<?= $dept_url; ?>",
            type: 'POST',
            data: {"business_unit_id": business_unit_id},
            success: function(data){
            var parsedata= JSON.parse(data);
            $("#dept_"+increment+"").append(parsedata);
            },
            error: function(e) 
            {
                alert("An error occurred: " + e.responseText.message);
                console.log(e);
            }
        });
    }
    
    function getsubdepartment(){
        console.log("dept_ changed with increment"+increment);
        $("#sub_dept_"+increment+"").prop('disabled', false);
        var business_unit_id1="";
        var department_id1="";
        $("#sub_dept_"+increment+"").val('');
        //$('#sub_dept').find('option').remove().end().append('<option value="">Select</option>').val('whatever');
        
        business_unit_id1 = $("#bu_name_"+increment+"").find(":selected").val();
        department_id1 = $("#dept_"+increment+"").find(":selected").val();
        console.log("business_unit_id1 - "+business_unit_id1+"    department_id1 - "+department_id1);
        $.ajax({
            url: "<?= $s_dept_url; ?>",
            type: 'POST',
            data: {"id": department_id1,"business_unit_id": business_unit_id1},
            success: function(data){
            var parsedata1= JSON.parse(data);
            $("#sub_dept_"+increment+"").append(parsedata1);
            },
            error: function(e) 
            {
                alert("An error occurred: " + e.responseText.message);
                console.log(e);
            }
        });
    }
    
    function getmeetingwithdata(){
        console.log("sub_dept_ changed with increment"+increment);
        $("#user_id_"+increment+"").prop('disabled', false);
        var business_unit_id1="";
        var department_id1="";
        var sub_department_id1="";
        $("#user_id_"+increment+"").val('');
        //$('#sub_dept').find('option').remove().end().append('<option value="">Select</option>').val('whatever');
        
        business_unit_id1 = $("#bu_name_"+increment+"").find(":selected").val();
        department_id1 = $("#dept_"+increment+"").find(":selected").val();
        sub_department_id1 = $("#sub_dept_"+increment+"").find(":selected").val();
        console.log("business_unit_id1 - "+business_unit_id1+"    department_id1 - "+department_id1+"    sub_department_id1 - "+sub_department_id1);
        $.ajax({
            url: "<?= $meeting_with_url; ?>",
            type: 'POST',
            data: {"business_unit_id": business_unit_id1,"department_id": department_id1,"sub_department_id": sub_department_id1},
            success: function(data){
            var parsedata1= JSON.parse(data);
            $("#user_id_"+increment+"").append(parsedata1);
            },
            error: function(e) 
            {
                alert("An error occurred: " + e.responseText.message);
                console.log(e);
            }
        });
    }
    
    function getmeetingduration(){
        var start = $("#start_time_"+increment+"").val();
        var end = $("#end_time_"+increment+"").val();

        start = start.split(":");
        end = end.split(":");
        var startDate = new Date(0, 0, 0, start[0], start[1], start[2] ? start[2] : 0, 0);
        var endDate = new Date(0, 0, 0, end[0], end[1], end[2] ? end[2] : 0, 0);

        //for calculation to work if endtime cross over next day. Eg. 11pm to 2am
        if (endDate.getTime() < startDate.getTime()) {
            endDate.setDate(endDate.getDate() + 1);
        }
        var diff = endDate.getTime() - startDate.getTime();
        var hours = Math.floor(diff / 1000 / 60 / 60);
        diff -= hours * 1000 * 60 * 60;
        var minutes = Math.floor(diff / 1000 / 60);
        diff -= minutes * 1000 * 60;
        var seconds = Math.floor(diff / 1000);
        var diffc = (hours < 9 ? "0" : "") + hours + ":" + (minutes < 9 ? "0" : "") + minutes + ":" + (seconds < 9 ? "0" : "") + seconds;
        var validdata = typeof diffc;
        console.log("typeof duration- "+validdata);
        console.log("time diff - "+diffc);
        $("#duration_"+increment+"").val(diffc);
    }
    
</script>

<script type="text/javascript">
    function get_bus_dept(){
    /*  for business Unit name   */
        $.ajax({
            url: "<?= $get_bus_url; ?>",
            type: 'POST',
            data: {},
            success: function(data){
            //console.log("data fetched on click of bu_name and result - "+data);
            var parsedata1= JSON.parse(data);
            $("#bu_name_"+increment+"").append(parsedata1);
            },
            error: function(e) 
            {
                alert("An error occurred: " + e.responseText.message);
                console.log(e);
            }
        });
 }
</script>



<script type="text/javascript">
function editdata(id){
    $.ajax({
        type:"POST",
        url: "<?= $user_detail_by_id; ?>",
        data:{'id':id},
        success : function(data) {
           data = JSON.parse(data);
           console.log(data);
           var name = data[0].first_name+" "+data[0].last_name;
           $('#as_id_0').val(data[0].id);
           $('#user_name').html(name);
           $('#user_doj').html(data[0].doj);
           $('#user_empid').html(data[0].emp_id);
        },
        error : function() {
           alert("Value NOT reaching to controller ");
        }
    });
}
</script>

<script type="text/javascript">
/*$(document).ready(function() {
    $(".sub_dept_0").change(function () {
      var  sub_dept = $('#sub_dept_0').val();
        $.ajax({
            url: "<?=  $managing_url; ?>",
            //url: '/cake3.6.4/Tests/getstates',
            type: 'POST',
            data: {"sub_dept": sub_dept},
            success: function(data){
                    var parseData3 = JSON.parse(data); 
                     $("#meeting_with_0").append(parseData3);	
            }
        });
    });
   });*/
</script>





