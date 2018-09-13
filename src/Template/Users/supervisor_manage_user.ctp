<div id="navbar"></div>
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
                        <li class="active"><a data-toggle="pill" href="#joinee_information">Joinee Information</a></li>
                        <li><a data-toggle="pill" href="#interval_feedback">Interval Feedback</a></li>
                        <li><a data-toggle="pill" href="#roadmap">Roadmap</a></li>
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
                            <form id="joinee_details">
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
                                                <input type="text" id="sub_dept" class="form-control" placeholder="Sub Department">
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
                                    <div class="col-md-6">
                                        <div class="text-center">
                                            <button class="btn btn-danger btn-block"><i class="fa fa-pencil"></i> Modify</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div id="logistics_arrangements" class="hidden">
                            <ol class="breadcrumb">
                                <li class="text-blue pointer" onclick="dashboard.toggleLogistics()">Joinee Information</li>
                                <li class="active">Logistics Arrangements</li>
                            </ol>
                            <div class="margin-top-sm">
                                <div class="row">
                                    <div class="col-md-4">
                                        <span>Name : </span>
                                        <strong>Dhanya Menon</strong>
                                    </div>
                                    <div class="col-md-4">
                                        <span>Emp Id : </span>
                                        <strong>QA110231</strong>
                                    </div>
                                    <div class="col-md-4">
                                        <span>DOJ : </span>
                                        <strong>13/01/18</strong>
                                    </div>
                                </div>
                            </div>
                            <hr/>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="panel panel-primary joinee-blocks" onclick="dashboard.panelCheckboxToggle(this)">
                                        <div class="panel-body">
                                            <div class="panel-proceed-btn"><input type="checkbox" class="checkbox"></div>
                                            <strong>LAN Id Creation</strong>
                                            <p class="margin-bottom-0 text-muted">Gurgaon</p>
                                            <p class="margin-bottom-0 text-primary">Information Technology</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="panel panel-primary joinee-blocks" onclick="dashboard.panelCheckboxToggle(this)">
                                        <div class="panel-body">
                                            <div class="panel-proceed-btn"><input type="checkbox" class="checkbox"></div>
                                            <strong>Business Card</strong>
                                            <p class="margin-bottom-0 text-muted">Chennai</p>
                                            <p class="margin-bottom-0 text-primary">Infrastructure Services</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="panel panel-primary joinee-blocks" onclick="dashboard.panelCheckboxToggle(this)">
                                        <div class="panel-body">
                                            <div class="panel-proceed-btn"><input type="checkbox" class="checkbox"></div>
                                            <strong>Voice Support</strong>
                                            <p class="margin-bottom-0 text-muted">Chennai</p>
                                            <p class="margin-bottom-0 text-primary">IT Support</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="panel panel-primary joinee-blocks" onclick="dashboard.panelCheckboxToggle(this)">
                                        <div class="panel-body">
                                            <div class="panel-proceed-btn"><input type="checkbox" class="checkbox"></div>
                                            <strong>Car Parking Sticker</strong>
                                            <p class="margin-bottom-0 text-muted">Chennai</p>
                                            <p class="margin-bottom-0 text-primary">Infrastructure Services</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="panel panel-primary joinee-blocks" onclick="dashboard.panelCheckboxToggle(this)">
                                        <div class="panel-body">
                                            <div class="panel-proceed-btn"><input type="checkbox" class="checkbox"></div>
                                            <strong>LAN Id Creation</strong>
                                            <p class="margin-bottom-0 text-muted">Gurgaon</p>
                                            <p class="margin-bottom-0 text-primary">Information Technology</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="panel panel-primary joinee-blocks" onclick="dashboard.panelCheckboxToggle(this)">
                                        <div class="panel-body">
                                            <div class="panel-proceed-btn"><input type="checkbox" class="checkbox"></div>
                                            <strong>Business Card</strong>
                                            <p class="margin-bottom-0 text-muted">Chennai</p>
                                            <p class="margin-bottom-0 text-primary">Infrastructure Services</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="panel panel-primary joinee-blocks" onclick="dashboard.panelCheckboxToggle(this)">
                                        <div class="panel-body">
                                            <div class="panel-proceed-btn"><input type="checkbox" class="checkbox"></div>
                                            <strong>Voice Support</strong>
                                            <p class="margin-bottom-0 text-muted">Chennai</p>
                                            <p class="margin-bottom-0 text-primary">IT Support</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="panel panel-primary joinee-blocks" onclick="dashboard.panelCheckboxToggle(this)">
                                        <div class="panel-body">
                                            <div class="panel-proceed-btn"><input type="checkbox" class="checkbox"></div>
                                            <strong>Car Parking Sticker</strong>
                                            <p class="margin-bottom-0 text-muted">Chennai</p>
                                            <p class="margin-bottom-0 text-primary">Infrastructure Services</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="panel panel-primary joinee-blocks" onclick="dashboard.panelCheckboxToggle(this)">
                                        <div class="panel-body">
                                            <div class="panel-proceed-btn"><input type="checkbox" class="checkbox"></div>
                                            <strong>LAN Id Creation</strong>
                                            <p class="margin-bottom-0 text-muted">Gurgaon</p>
                                            <p class="margin-bottom-0 text-primary">Information Technology</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="panel panel-primary joinee-blocks" onclick="dashboard.panelCheckboxToggle(this)">
                                        <div class="panel-body">
                                            <div class="panel-proceed-btn"><input type="checkbox" class="checkbox"></div>
                                            <strong>Business Card</strong>
                                            <p class="margin-bottom-0 text-muted">Chennai</p>
                                            <p class="margin-bottom-0 text-primary">Infrastructure Services</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="panel panel-primary joinee-blocks" onclick="dashboard.panelCheckboxToggle(this)">
                                        <div class="panel-body">
                                            <div class="panel-proceed-btn"><input type="checkbox" class="checkbox"></div>
                                            <strong>Voice Support</strong>
                                            <p class="margin-bottom-0 text-muted">Chennai</p>
                                            <p class="margin-bottom-0 text-primary">IT Support</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="panel panel-primary joinee-blocks" onclick="dashboard.panelCheckboxToggle(this)">
                                        <div class="panel-body">
                                            <div class="panel-proceed-btn"><input type="checkbox" class="checkbox"></div>
                                            <strong>Car Parking Sticker</strong>
                                            <p class="margin-bottom-0 text-muted">Chennai</p>
                                            <p class="margin-bottom-0 text-primary">Infrastructure Services</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="panel panel-primary joinee-blocks" onclick="dashboard.panelCheckboxToggle(this)">
                                        <div class="panel-body">
                                            <div class="panel-proceed-btn"><input type="checkbox" class="checkbox"></div>
                                            <strong>LAN Id Creation</strong>
                                            <p class="margin-bottom-0 text-muted">Gurgaon</p>
                                            <p class="margin-bottom-0 text-primary">Information Technology</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="panel panel-primary joinee-blocks" onclick="dashboard.panelCheckboxToggle(this)">
                                        <div class="panel-body">
                                            <div class="panel-proceed-btn"><input type="checkbox" class="checkbox"></div>
                                            <strong>Business Card</strong>
                                            <p class="margin-bottom-0 text-muted">Chennai</p>
                                            <p class="margin-bottom-0 text-primary">Infrastructure Services</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="panel panel-primary joinee-blocks" onclick="dashboard.panelCheckboxToggle(this)">
                                        <div class="panel-body">
                                            <div class="panel-proceed-btn"><input type="checkbox" class="checkbox"></div>
                                            <strong>Voice Support</strong>
                                            <p class="margin-bottom-0 text-muted">Chennai</p>
                                            <p class="margin-bottom-0 text-primary">IT Support</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="panel panel-primary joinee-blocks" onclick="dashboard.panelCheckboxToggle(this)">
                                        <div class="panel-body">
                                            <div class="panel-proceed-btn"><input type="checkbox" class="checkbox"></div>
                                            <strong>Car Parking Sticker</strong>
                                            <p class="margin-bottom-0 text-muted">Chennai</p>
                                            <p class="margin-bottom-0 text-primary">Infrastructure Services</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="margin-top-0"/>
                            <div class="row">
                                <div class="col-md-4 col-md-offset-4">
                                    <button type="button" class="btn btn-danger btn-block" onclick="dashboard.toggleLogistics()"><i class="fa fa-paper-plane-o"></i> Send Requirements</button>
                                </div>
                            </div>
                        </div>
                        <div id="15_day_checklist" class="hidden">
                            <ol class="breadcrumb">
                                <li class="text-blue pointer" onclick="dashboard.toggle15DayChecklist()">Joinee Information</li>
                                <li class="active">15 Day Checklist</li>
                            </ol>
                            <div class="margin-top-sm">
                                <div class="row">
                                    <div class="col-md-4">
                                        <span>Name : </span>
                                        <strong>Dhanya Menon</strong>
                                    </div>
                                    <div class="col-md-4">
                                        <span>Emp Id : </span>
                                        <strong>QA110231</strong>
                                    </div>
                                    <div class="col-md-4">
                                        <span>DOJ : </span>
                                        <strong>13/01/18</strong>
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
                                    <div class="col-md-4">
                                        <span>Name : </span>
                                        <strong>Dhanya Menon</strong>
                                    </div>
                                    <div class="col-md-4">
                                        <span>Emp Id : </span>
                                        <strong>QA110231</strong>
                                    </div>
                                    <div class="col-md-4">
                                        <span>DOJ : </span>
                                        <strong>13/01/18</strong>
                                    </div>
                                </div>
                            </div>
                            <hr/>
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <label for="session_date" class="padding-top-md">Session Date</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="date" id="session_date" class="form-control" placeholder="Date">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <label for="session_time" class="padding-top-md">Session Time</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="time" id="session_time" class="form-control" placeholder="Time">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <label for="session_interval" class="padding-top-md">Session Interval</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <select class="form-control" id="session_interval" name="session_interval">
                                                            <option value="1 Hour">1 Hour</option>
                                                            <option value="2 Hour">2 Hour</option>
                                                            <option value="3 Hour">3 Hour</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <label for="session_comments" class="padding-top-md">Comments</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <textarea class="form-control" id="session_comments" rows="10"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-12 text-right">
                                                        <button class="btn btn-danger btn-block">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div id="bhr_90_day_meeting" class="hidden">
                            <ol class="breadcrumb">
                                <li class="text-blue pointer" onclick="dashboard.toggle90dayMeeting()">Joinee Information</li>
                                <li class="active">BHR 90 Day Meeting</li>
                            </ol>
                            <div class="margin-top-sm">
                                <div class="row">
                                    <div class="col-md-4">
                                        <span>Name : </span>
                                        <strong>Dhanya Menon</strong>
                                    </div>
                                    <div class="col-md-4">
                                        <span>Emp Id : </span>
                                        <strong>QA110231</strong>
                                    </div>
                                    <div class="col-md-4">
                                        <span>DOJ : </span>
                                        <strong>13/01/18</strong>
                                    </div>
                                </div>
                            </div>
                            <hr/>
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <label for="90_session_date" class="padding-top-md">Session Date</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="date" id="90_session_date" class="form-control" placeholder="Date">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <label for="90_session_time" class="padding-top-md">Session Time</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="time" id="90_session_time" class="form-control" placeholder="Time">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <label for="90_session_interval" class="padding-top-md">Session Interval</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <select class="form-control" id="90_session_interval" name="session_interval">
                                                            <option value="1 Hour">1 Hour</option>
                                                            <option value="2 Hour">2 Hour</option>
                                                            <option value="3 Hour">3 Hour</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <label for="90_session_comments" class="padding-top-md">Comments</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <textarea class="form-control" id="90_session_comments" rows="10"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-12 text-right">
                                                        <button class="btn btn-danger btn-block">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div id="confirmation_status" class="hidden">
                            <ol class="breadcrumb">
                                <li class="text-blue pointer" onclick="dashboard.toggleConfirmationStatus()">Joinee Information</li>
                                <li class="active">Confirmation Status</li>
                            </ol>
                            <div class="margin-top-sm">
                                <div class="row">
                                    <div class="col-md-4">
                                        <span>Name : </span>
                                        <strong>Dhanya Menon</strong>
                                    </div>
                                    <div class="col-md-4">
                                        <span>Emp Id : </span>
                                        <strong>QA110231</strong>
                                    </div>
                                    <div class="col-md-4">
                                        <span>DOJ : </span>
                                        <strong>13/01/18</strong>
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
                                        <strong>Dhanya Menon</strong>
                                    </div>
                                    <div class="col-md-4">
                                        <span>Emp Id : </span>
                                        <strong>QA110231</strong>
                                    </div>
                                    <div class="col-md-4">
                                        <span>DOJ : </span>
                                        <strong>13/01/18</strong>
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
                                    <div class="col-md-4">
                                        <span>Name : </span>
                                        <strong>Dhanya Menon</strong>
                                    </div>
                                    <div class="col-md-4">
                                        <span>Emp Id : </span>
                                        <strong>QA110231</strong>
                                    </div>
                                    <div class="col-md-4">
                                        <span>DOJ : </span>
                                        <strong>13/01/18</strong>
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
                                    <div class="col-md-4">
                                        <span>Name : </span>
                                        <strong>Dhanya Menon</strong>
                                    </div>
                                    <div class="col-md-4">
                                        <span>Emp Id : </span>
                                        <strong>QA110231</strong>
                                    </div>
                                    <div class="col-md-4">
                                        <span>DOJ : </span>
                                        <strong>13/01/18</strong>
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
                                    <div class="col-md-4">
                                        <span>Name : </span>
                                        <strong>Dhanya Menon</strong>
                                    </div>
                                    <div class="col-md-4">
                                        <span>Emp Id : </span>
                                        <strong>QA110231</strong>
                                    </div>
                                    <div class="col-md-4">
                                        <span>DOJ : </span>
                                        <strong>13/01/18</strong>
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
                    <div id="roadmap" class="tab-pane fade">
                        <div id="roadmap_arrange" class="hidden">
                            <ol class="breadcrumb">
                                <li>Roadmap</li>
                                <li class="active">Arrange</li>
                            </ol>
                            <div class="margin-top-sm">
                                <div class="row">
                                    <div class="col-md-4">
                                        <span>Name : </span>
                                        <strong>Dhanya Menon</strong>
                                    </div>
                                    <div class="col-md-4">
                                        <span>Emp Id : </span>
                                        <strong>QA110231</strong>
                                    </div>
                                    <div class="col-md-4">
                                        <span>DOJ : </span>
                                        <strong>13/01/18</strong>
                                    </div>
                                </div>
                            </div>
                            <hr/>
                            <div class="row" id="session_blocks">
                                <div class="col-xs-12">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="session_title">Session Title</label>
                                                        <input class="form-control" id="session_title" value="BHR Connect">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="session_business">Business</label>
                                                        <input class="form-control" id="session_business" value="Quatrro Glow">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="session_department">Department</label>
                                                        <input class="form-control" id="session_department" value="Technical Solution">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="session_sub_department">Sub Department</label>
                                                        <input class="form-control" id="session_sub_department" value="Technologies">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label for="session_band">Band</label>
                                                        <input class="form-control" id="session_band" value="Band 1">
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label for="session_meeting_with">Meeting With</label>
                                                        <input class="form-control" id="session_meeting_with" value="Technical Solution">
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="session_meeting_date">Date</label>
                                                                <input type="date" class="form-control" id="session_meeting_date">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="session_meeting_time">Time</label>
                                                                <input type="time" class="form-control" id="session_meeting_time">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label for="session_meeting_interval">Interval</label>
                                                        <select class="form-control" id="session_meeting_interval">
                                                            <option value="1">1 Hour</option>
                                                            <option value="2">2 Hours</option>
                                                            <option value="3">3 Hours</option>
                                                            <option value="4">4 Hours</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-1">
                                                    <button class="btn btn-danger margin-top-lg"><i class="fa fa-check"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-right">
                                    <button type="button" class="btn btn-primary" onclick="dashboard.roadmapSessionAdd()"><i class="fa fa-plus"></i> Add Session</button>
                                </div>
                            </div>
                        </div>
                        <div id="roadmap_recommend">
                            <ol class="breadcrumb">
                                <li>Roadmap</li>
                                <li class="active">Recommend</li>
                            </ol>
                            <div class="margin-top-sm">
                                <div class="row">
                                    <div class="col-md-4">
                                        <span>Name : </span>
                                        <strong>Dhanya Menon</strong>
                                    </div>
                                    <div class="col-md-4">
                                        <span>Emp Id : </span>
                                        <strong>QA110231</strong>
                                    </div>
                                    <div class="col-md-4">
                                        <span>DOJ : </span>
                                        <strong>13/01/18</strong>
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
                        <div id="roadmap_view" class="hidden">
                            <ol class="breadcrumb">
                                <li>Roadmap</li>
                                <li class="active">View Roadmap</li>
                            </ol>
                            <div class="margin-top-sm">
                                <div class="row">
                                    <div class="col-md-4">
                                        <span>Name : </span>
                                        <strong>Dhanya Menon</strong>
                                    </div>
                                    <div class="col-md-4">
                                        <span>Emp Id : </span>
                                        <strong>QA110231</strong>
                                    </div>
                                    <div class="col-md-4">
                                        <span>DOJ : </span>
                                        <strong>13/01/18</strong>
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
                                                <div class="col-md-2">
                                                    <strong>Comment</strong>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <textarea class="form-control" rows="6" id="comments"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <button class="btn btn-danger"><i class="fa fa-check"></i></button>
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
    <div class="row" id="dashboard_table">
        <div class="col-md-6">
            <?php $adduser= $this->Url->build(['controller' => 'Users', 'action' => 'addUser']);?>
            <a href="<?= $adduser; ?>" class="btn btn-danger btn-sm"><i class="fa fa-plus"></i> Add</a>
            <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-trash-o"></i> Delete</button>
        </div>
        <div class="col-md-6 text-right">
            <button type="button" class="btn btn-danger btn-sm" onclick="dashboard.toggleDashboard()"><i class="fa fa-bar-chart"></i></button>
        </div>
        <div class="col-md-8 margin-top-lg overflow-scroll">
            <table class="table table-bordered table-striped" id="myTable">
                <thead>
                <tr>
                    <th><input type="checkbox" class="checkbox" name="select_all" onclick="dashboard.toggleSelectAllCheckbox(this)"></th>
                    <th class="pointer" onclick="sortTable(1)"><div data-toggle="tooltip" data-placement="bottom" data-original-title="List of all the employees" class="red-tooltip">Employee Name</div></th>
                    <th class="pointer" onclick="sortTable(2)"><div data-toggle="tooltip" data-placement="bottom" data-original-title="Confirmation status of employees" class="red-tooltip">Confirm</div></th>
                    <th><div data-toggle="tooltip" data-placement="bottom" data-original-title="Employee ID" class="red-tooltip">Emp ID</div></th>
                    <th class="pointer" onclick="sortTable(4)"><div data-toggle="tooltip" data-placement="bottom" data-original-title="Date of joining of the employee" class="red-tooltip">DOJ</div></th>
                    <th><div data-toggle="tooltip" data-placement="bottom" data-original-title="Details" class="red-tooltip">Details</div></th>
                    <th><div data-toggle="tooltip" data-placement="bottom" data-original-title="Status of Roadmap" class="red-tooltip">Roadmap</div></th>
                    <th><div data-toggle="tooltip" data-placement="bottom" data-original-title="Status of feedback submitted" class="red-tooltip">Feedback</div></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><input type="checkbox" class="checkbox" name="select_individual"></td>
                    <td><div class="text-blue" data-sidebar-button>Zoya</div></td>
                    <td><i class="fa fa-times text-red"></i></td>
                    <td>QA110231</td>
                    <td>13/01/18</td>
                    <td><i class="fa fa-circle text-green"></i></td>
                    <td><i class="fa fa-circle text-orange"></i></td>
                    <td><i class="fa fa-circle text-red"></i></td>
                </tr>
                <tr>
                    <td><input type="checkbox" class="checkbox" name="select_individual"></td>
                    <td><div class="text-blue" data-sidebar-button>Dhanya Menon</div></td>
                    <td><i class="fa fa-check text-green"></i></td>
                    <td>QA110231</td>
                    <td>13/01/18</td>
                    <td><i class="fa fa-circle text-green"></i></td>
                    <td><i class="fa fa-circle text-orange"></i></td>
                    <td><i class="fa fa-circle text-red"></i></td>
                </tr>
                <tr>
                    <td><input type="checkbox" class="checkbox" name="select_individual"></td>
                    <td><div class="text-blue" data-sidebar-button>Dhanya Menon</div></td>
                    <td><i class="fa fa-check text-green"></i></td>
                    <td>QA110231</td>
                    <td>13/01/18</td>
                    <td><i class="fa fa-circle text-green"></i></td>
                    <td><i class="fa fa-circle text-orange"></i></td>
                    <td><i class="fa fa-circle text-red"></i></td>
                </tr>
                <tr>
                    <td><input type="checkbox" class="checkbox" name="select_individual"></td>
                    <td><div class="text-blue" data-sidebar-button>Bharath</div></td>
                    <td><i class="fa fa-check text-green"></i></td>
                    <td>QA110231</td>
                    <td>13/01/18</td>
                    <td><i class="fa fa-circle text-green"></i></td>
                    <td><i class="fa fa-circle text-orange"></i></td>
                    <td><i class="fa fa-circle text-red"></i></td>
                </tr>
                <tr>
                    <td><input type="checkbox" class="checkbox" name="select_individual"></td>
                    <td><div class="text-blue" data-sidebar-button>Dhanya Menon</div></td>
                    <td><i class="fa fa-check text-green"></i></td>
                    <td>QA110231</td>
                    <td>21/01/18</td>
                    <td><i class="fa fa-circle text-green"></i></td>
                    <td><i class="fa fa-circle text-orange"></i></td>
                    <td><i class="fa fa-circle text-red"></i></td>
                </tr>
                <tr>
                    <td><input type="checkbox" class="checkbox" name="select_individual"></td>
                    <td><div class="text-blue" data-sidebar-button>Adam</div></td>
                    <td><i class="fa fa-check text-green"></i></td>
                    <td>QA110231</td>
                    <td>13/01/18</td>
                    <td><i class="fa fa-circle text-green"></i></td>
                    <td><i class="fa fa-circle text-orange"></i></td>
                    <td><i class="fa fa-circle text-red"></i></td>
                </tr>
                <tr>
                    <td><input type="checkbox" class="checkbox" name="select_individual"></td>
                    <td><div class="text-blue" data-sidebar-button>Dhanya Menon</div></td>
                    <td><i class="fa fa-times text-red"></i></td>
                    <td>QA110231</td>
                    <td>18/01/18</td>
                    <td><i class="fa fa-circle text-green"></i></td>
                    <td><i class="fa fa-circle text-orange"></i></td>
                    <td><i class="fa fa-circle text-red"></i></td>
                </tr>
                <tr>
                    <td><input type="checkbox" class="checkbox" name="select_individual"></td>
                    <td><div class="text-blue" data-sidebar-button>Dominic</div></td>
                    <td><i class="fa fa-times text-red"></i></td>
                    <td>QA110231</td>
                    <td>13/01/18</td>
                    <td><i class="fa fa-circle text-green"></i></td>
                    <td><i class="fa fa-circle text-orange"></i></td>
                    <td><i class="fa fa-circle text-red"></i></td>
                </tr>
                <tr>
                    <td><input type="checkbox" class="checkbox" name="select_individual"></td>
                    <td><div class="text-blue" data-sidebar-button>Dhanya Menon</div></td>
                    <td><i class="fa fa-check text-green"></i></td>
                    <td>QA110231</td>
                    <td>13/01/18</td>
                    <td><i class="fa fa-circle text-green"></i></td>
                    <td><i class="fa fa-circle text-orange"></i></td>
                    <td><i class="fa fa-circle text-red"></i></td>
                </tr>
                <tr>
                    <td><input type="checkbox" class="checkbox" name="select_individual"></td>
                    <td><div class="text-blue" data-sidebar-button>Dhanya Menon</div></td>
                    <td><i class="fa fa-check text-green"></i></td>
                    <td>QA110231</td>
                    <td>17/01/18</td>
                    <td><i class="fa fa-circle text-green"></i></td>
                    <td><i class="fa fa-circle text-orange"></i></td>
                    <td><i class="fa fa-circle text-red"></i></td>
                </tr>
                <tr>
                    <td><input type="checkbox" class="checkbox" name="select_individual"></td>
                    <td><div class="text-blue" data-sidebar-button>Dhanya Menon</div></td>
                    <td><i class="fa fa-check text-green"></i></td>
                    <td>QA110231</td>
                    <td>13/01/18</td>
                    <td><i class="fa fa-circle text-green"></i></td>
                    <td><i class="fa fa-circle text-orange"></i></td>
                    <td><i class="fa fa-circle text-red"></i></td>
                </tr>
                <tr>
                    <td><input type="checkbox" class="checkbox" name="select_individual"></td>
                    <td><div class="text-blue" data-sidebar-button>Dhanya Menon</div></td>
                    <td><i class="fa fa-check text-green"></i></td>
                    <td>QA110231</td>
                    <td>15/01/18</td>
                    <td><i class="fa fa-circle text-green"></i></td>
                    <td><i class="fa fa-circle text-orange"></i></td>
                    <td><i class="fa fa-circle text-red"></i></td>
                </tr>
                <tr>
                    <td><input type="checkbox" class="checkbox" name="select_individual"></td>
                    <td><div class="text-blue" data-sidebar-button>Dhanya Menon</div></td>
                    <td><i class="fa fa-times text-red"></i></td>
                    <td>QA110231</td>
                    <td>13/01/18</td>
                    <td><i class="fa fa-circle text-green"></i></td>
                    <td><i class="fa fa-circle text-orange"></i></td>
                    <td><i class="fa fa-circle text-red"></i></td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-4 margin-top-lg">
            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-success">
                        <div class="panel-body">
                            <p><strong>Logistics</strong></p>
                            <p class="text-muted margin-0">
                                <i class="fa fa-star fa-lg"></i> SLA Completed
                            </p>
                            <hr class="margin-top-sm margin-bottom-sm"/>
                            <p class="text-muted margin-0">
                                <i class="fa fa-smile-o fa-lg"></i> 100% <strong class="text-green">Success</strong> feedback
                            </p>
                            <hr class="margin-top-sm margin-bottom-sm"/>
                            <div class="text-center">
                                <button class="btn btn-danger btn-sm">Accept</button>
                                <button class="btn btn-primary btn-sm">Reject</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-danger">
                        <div class="panel-body">
                            <p><strong>BHR Meeting</strong></p>
                            <p class="text-muted margin-0">
                                <i class="fa fa-frown-o fa-lg"></i> 2 meetings <strong class="text-red">pending</strong>
                            </p>
                            <hr class="margin-top-sm margin-bottom-sm"/>
                            <p class="text-muted margin-0">
                                <i class="fa fa-frown-o fa-lg"></i> 3 feedback <strong class="text-red">pending</strong>
                            </p>
                            <hr class="margin-top-sm margin-bottom-sm"/>
                            <div class="text-center">
                                <button class="btn btn-danger btn-sm">Accept</button>
                                <button class="btn btn-primary btn-sm">Reject</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-success">
                        <div class="panel-body">
                            <p><strong>Logistics</strong></p>
                            <p class="text-muted margin-0">
                                <i class="fa fa-star fa-lg"></i> SLA Completed
                            </p>
                            <hr class="margin-top-sm margin-bottom-sm"/>
                            <p class="text-muted margin-0">
                                <i class="fa fa-smile-o fa-lg"></i> 100% <strong class="text-green">Success</strong> feedback
                            </p>
                            <hr class="margin-top-sm margin-bottom-sm"/>
                            <div class="text-center">
                                <button class="btn btn-danger btn-sm">Accept</button>
                                <button class="btn btn-primary btn-sm">Reject</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-danger">
                        <div class="panel-body">
                            <p><strong>BHR Meeting</strong></p>
                            <p class="text-muted margin-0">
                                <i class="fa fa-frown-o fa-lg"></i> 2 meetings <strong class="text-red">pending</strong>
                            </p>
                            <hr class="margin-top-sm margin-bottom-sm"/>
                            <p class="text-muted margin-0">
                                <i class="fa fa-frown-o fa-lg"></i> 3 feedback <strong class="text-red">pending</strong>
                            </p>
                            <hr class="margin-top-sm margin-bottom-sm"/>
                            <div class="text-center">
                                <button class="btn btn-danger btn-sm">Accept</button>
                                <button class="btn btn-primary btn-sm">Reject</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-success">
                        <div class="panel-body">
                            <p><strong>Logistics</strong></p>
                            <p class="text-muted margin-0">
                                <i class="fa fa-star fa-lg"></i> SLA Completed
                            </p>
                            <hr class="margin-top-sm margin-bottom-sm"/>
                            <p class="text-muted margin-0">
                                <i class="fa fa-smile-o fa-lg"></i> 100% <strong class="text-green">Success</strong> feedback
                            </p>
                            <hr class="margin-top-sm margin-bottom-sm"/>
                            <div class="text-center">
                                <button class="btn btn-danger btn-sm">Accept</button>
                                <button class="btn btn-primary btn-sm">Reject</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-danger">
                        <div class="panel-body">
                            <p><strong>BHR Meeting</strong></p>
                            <p class="text-muted margin-0">
                                <i class="fa fa-frown-o fa-lg"></i> 2 meetings <strong class="text-red">pending</strong>
                            </p>
                            <hr class="margin-top-sm margin-bottom-sm"/>
                            <p class="text-muted margin-0">
                                <i class="fa fa-frown-o fa-lg"></i> 3 feedback <strong class="text-red">pending</strong>
                            </p>
                            <hr class="margin-top-sm margin-bottom-sm"/>
                            <div class="text-center">
                                <button class="btn btn-danger btn-sm">Accept</button>
                                <button class="btn btn-primary btn-sm">Reject</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-success">
                        <div class="panel-body">
                            <p><strong>Logistics</strong></p>
                            <p class="text-muted margin-0">
                                <i class="fa fa-star fa-lg"></i> SLA Completed
                            </p>
                            <hr class="margin-top-sm margin-bottom-sm"/>
                            <p class="text-muted margin-0">
                                <i class="fa fa-smile-o fa-lg"></i> 100% <strong class="text-green">Success</strong> feedback
                            </p>
                            <hr class="margin-top-sm margin-bottom-sm"/>
                            <div class="text-center">
                                <button class="btn btn-danger btn-sm">Accept</button>
                                <button class="btn btn-primary btn-sm">Reject</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-danger">
                        <div class="panel-body">
                            <p><strong>BHR Meeting</strong></p>
                            <p class="text-muted margin-0">
                                <i class="fa fa-frown-o fa-lg"></i> 2 meetings <strong class="text-red">pending</strong>
                            </p>
                            <hr class="margin-top-sm margin-bottom-sm"/>
                            <p class="text-muted margin-0">
                                <i class="fa fa-frown-o fa-lg"></i> 3 feedback <strong class="text-red">pending</strong>
                            </p>
                            <hr class="margin-top-sm margin-bottom-sm"/>
                            <div class="text-center">
                                <button class="btn btn-danger btn-sm">Accept</button>
                                <button class="btn btn-primary btn-sm">Reject</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row hidden" id="dashboard_graph">
        <div class="col-md-12 text-right">
            <button type="button" class="btn btn-danger btn-sm" onclick="dashboard.toggleDashboard()"><i class="fa fa-table"></i></button>
        </div>
        <div class="col-xs-12 margin-top-lg overflow-scroll">
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



<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
<?php echo $this->Html->script(['jquery-1.12.4', 'bootstrap.min', 'sidebar','jquery-ui','dashboard','chart.min','guage','jquery-ui']); ?>
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
                        shouldSwitch= true;
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
                switchcount ++;
            } else {
                if (switchcount == 0 && dir == "asc") {
                    dir = "desc";
                    switching = true;
                }
            }
        }
    }
</script>
