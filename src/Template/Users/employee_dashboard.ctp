
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard | Spring Board</title>
    <!-- Bootstrap -->
    <?php echo $this->Html->css(['bootstrap', 'style','font-awesome.min']); ?>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
   

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
        .bs-wizard {margin-top: 40px;}
        .bs-wizard {border-bottom: solid 1px #e0e0e0; padding: 0 0 10px 0;}
        .bs-wizard > .bs-wizard-step {padding: 0; position: relative;}
        .bs-wizard > .bs-wizard-step + .bs-wizard-step {}
        .bs-wizard > .bs-wizard-step .bs-wizard-stepnum {color: #595959; font-size: 16px; margin-bottom: 5px;}
        .bs-wizard > .bs-wizard-step .bs-wizard-info {color: #999; font-size: 14px;}
        .bs-wizard > .bs-wizard-step > .bs-wizard-dot {position: absolute; width: 30px; height: 30px; display: block; background: #fbe8aa; top: 45px; left: 50%; margin-top: -15px; margin-left: -15px; border-radius: 50%;}
        .bs-wizard > .bs-wizard-step > .bs-wizard-dot:after {content: ' '; width: 14px; height: 14px; background: #fbbd19; border-radius: 50px; position: absolute; top: 8px; left: 8px; }
        .bs-wizard > .bs-wizard-step > .progress {position: relative; border-radius: 0px; height: 8px; box-shadow: none; margin: 20px 0;}
        .bs-wizard > .bs-wizard-step > .progress > .progress-bar {width:0px; box-shadow: none; background: #fbe8aa;}
        .bs-wizard > .bs-wizard-step.complete > .progress > .progress-bar {width:100%;}
        .bs-wizard > .bs-wizard-step.active > .progress > .progress-bar {width:50%;}
        .bs-wizard > .bs-wizard-step:first-child.active > .progress > .progress-bar {width:0%;}
        .bs-wizard > .bs-wizard-step:last-child.active > .progress > .progress-bar {width: 100%;}
        .bs-wizard > .bs-wizard-step.disabled > .bs-wizard-dot {background-color: #f5f5f5;}
        .bs-wizard > .bs-wizard-step.disabled > .bs-wizard-dot:after {opacity: 0;}
        .bs-wizard > .bs-wizard-step:first-child  > .progress {left: 50%; width: 50%;}
        .bs-wizard > .bs-wizard-step:last-child  > .progress {width: 50%;}
        .bs-wizard > .bs-wizard-step.disabled a.bs-wizard-dot{ pointer-events: none; }
    </style>
</head>
<body class="bg-light">
<div id="navbar"> <?php echo $this->element('employee_header'); ?></div>
<aside data-sidebar>
    <div class="padding-bottom-md container-fluid">
        <div class="row">
            <div class="col-xs-12 bg-dark">
                <div class="padding-md">
                    <div class="panel-close-btn" data-sidebar-button><i class="fa fa-times fa-lg text-white"></i></div>
                    <h3 class="margin-0" id="sidebar_header">15 Day Checklist</h3>
                </div>
            </div>

            <div id="15_day_checklist_completed" class="col-xs-12 hidden sidebar-section margin-top-md">
                <h4>Organisation Overview</h4>
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
                <h4>Process Overview</h4>
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
                <h4>Learning Overview</h4>
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
            <div id="15_day_checklist_pending" class="col-xs-12 hidden sidebar-section margin-top-md">
                <h4>Organisation Overview</h4>
                <div class="well well-sm">
                    <p>Q. I am aware of Quatrro values and its journey</p>
                    <div class="form-group">
                        <label>Answer:</label>
                        <input type="text" class="form-control bg-white">
                    </div>
                    <hr class="margin-top-sm margin-bottom-sm"/>
                    <p>Q. I am aware of Quatrro values and its journey</p>
                    <div class="form-group">
                        <label>Answer:</label>
                        <input type="text" class="form-control bg-white">
                    </div>
                    <hr class="margin-top-sm margin-bottom-sm"/>
                    <p>Q. I am aware of Quatrro values and its journey</p>
                    <div class="form-group">
                        <label>Answer:</label>
                        <input type="text" class="form-control bg-white">
                    </div>
                    <hr class="margin-top-sm margin-bottom-sm"/>
                    <p>Q. I am aware of Quatrro values and its journey</p>
                    <div class="form-group">
                        <label>Answer:</label>
                        <input type="text" class="form-control bg-white">
                    </div>
                </div>
                <hr/>
                <h4>Process Overview</h4>
                <div class="well well-sm">
                    <p>Q. I am aware of Quatrro values and its journey</p>
                    <div class="form-group">
                        <label>Answer:</label>
                        <input type="text" class="form-control bg-white">
                    </div>
                    <hr class="margin-top-sm margin-bottom-sm"/>
                    <p>Q. I am aware of Quatrro values and its journey</p>
                    <div class="form-group">
                        <label>Answer:</label>
                        <input type="text" class="form-control bg-white">
                    </div>
                    <hr class="margin-top-sm margin-bottom-sm"/>
                    <p>Q. I am aware of Quatrro values and its journey</p>
                    <div class="form-group">
                        <label>Answer:</label>
                        <input type="text" class="form-control bg-white">
                    </div>
                    <hr class="margin-top-sm margin-bottom-sm"/>
                    <p>Q. I am aware of Quatrro values and its journey</p>
                    <div class="form-group">
                        <label>Answer:</label>
                        <input type="text" class="form-control bg-white">
                    </div>
                </div>
                <hr/>
                <h4>Learning Overview</h4>
                <div class="well well-sm">
                    <p>Q. I am aware of Quatrro values and its journey</p>
                    <div class="form-group">
                        <label>Answer:</label>
                        <input type="text" class="form-control bg-white">
                    </div>
                    <hr class="margin-top-sm margin-bottom-sm"/>
                    <p>Q. I am aware of Quatrro values and its journey</p>
                    <div class="form-group">
                        <label>Answer:</label>
                        <input type="text" class="form-control bg-white">
                    </div>
                    <hr class="margin-top-sm margin-bottom-sm"/>
                    <p>Q. I am aware of Quatrro values and its journey</p>
                    <div class="form-group">
                        <label>Answer:</label>
                        <input type="text" class="form-control bg-white">
                    </div>
                    <hr class="margin-top-sm margin-bottom-sm"/>
                    <p>Q. I am aware of Quatrro values and its journey</p>
                    <div class="form-group">
                        <label>Answer:</label>
                        <input type="text" class="form-control bg-white">
                    </div>
                </div>
                <div class="col-xs-12 text-center">
                    <button class="btn btn-danger">Submit</button>
                </div>
            </div>

            <div id="logistics_completed" class="col-xs-12 hidden sidebar-section margin-top-md">
                <div class="row">
                    <div class="success-msg" id="send_requirments" style="display:none;">
                    <i class="fa fa-check"></i>Logistic status updated sucessfully.
                     </div><br>

                    <?php foreach($logistic_detail as $logistic_detail){ $date1 = $logistic_detail['time_created']; $date = substr($date1, 0,10); ?>
                    <div class="col-md-4">
                        <div class="panel panel-primary joinee-blocks" onclick="dashboard.panelCheckboxToggle(this)">
                            <div class="panel-body">
                                <div class="panel-proceed-btn">
                                    <?php if($logistic_detail['r_status'] == 0){ ?>
                                      <span class="badge bg-warning" id="pending">Pending</span>
                                      <i class="fa fa-check text-green" id="check" style="display: none"></i>
                                <?php } else { ?>
                                        <i class="fa fa-check text-green"></i>
                                <?php }?>
                                   </div>
                                <strong><?php echo $logistic_detail['logistic_name'] ?></strong>
                                <p class="margin-bottom-0 text-muted">Gurgaon</p>
                                <p class="margin-bottom-0 text-primary">Information Technology</p>
                                <div class="padding-top-md">
                                    <?php if($logistic_detail['r_status'] == 0){ ?>
                                     <button class="btn btn-danger btn-sm" onclick="return updatelogisticstatus(<?php echo $logistic_detail['id'] ?>)" id="recieved"><i class="fa fa-check"></i> Received</button>
                                <?php } else { ?>

                                <?php }?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <!-- <div class="col-md-4">
                        <div class="panel panel-primary joinee-blocks" onclick="dashboard.panelCheckboxToggle(this)">
                            <div class="panel-body">
                                <div class="panel-proceed-btn"><span class="badge bg-warning">Pending</span></div>
                                <strong>Business Card</strong>
                                <p class="margin-bottom-0 text-muted">Chennai</p>
                                <p class="margin-bottom-0 text-primary">Infrastructure Services</p>
                                <div class="padding-top-md"><button class="btn btn-danger btn-sm"><i class="fa fa-check"></i> Received</button></div>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="col-md-4">
                        <div class="panel panel-primary joinee-blocks" onclick="dashboard.panelCheckboxToggle(this)">
                            <div class="panel-body">
                                <div class="panel-proceed-btn"><span class="badge bg-warning">Pending</span></div>
                                <strong>Voice Support</strong>
                                <p class="margin-bottom-0 text-muted">Chennai</p>
                                <p class="margin-bottom-0 text-primary">IT Support</p>
                                <div class="padding-top-md"><button class="btn btn-danger btn-sm"><i class="fa fa-check"></i> Received</button></div>
                            </div>
                        </div>
                    </div> -->
                </div>
                <div class="row">
                    <!-- <div class="col-md-4">
                        <div class="panel panel-primary joinee-blocks" onclick="dashboard.panelCheckboxToggle(this)">
                            <div class="panel-body">
                                <div class="panel-proceed-btn"><span class="badge bg-warning">Pending</span></div>
                                <strong>Car Parking Sticker</strong>
                                <p class="margin-bottom-0 text-muted">Chennai</p>
                                <p class="margin-bottom-0 text-primary">Infrastructure Services</p>
                                <div class="padding-top-md"><button class="btn btn-danger btn-sm"><i class="fa fa-check"></i> Received</button></div>
                            </div>
                        </div> -->
                    </div>
                    <!-- <div class="col-md-4">
                        <div class="panel panel-primary joinee-blocks" onclick="dashboard.panelCheckboxToggle(this)">
                            <div class="panel-body">
                                <div class="panel-proceed-btn"><i class="fa fa-check text-green"></i></div>
                                <strong>LAN Id Creation</strong>
                                <p class="margin-bottom-0 text-muted">Gurgaon</p>
                                <p class="margin-bottom-0 text-primary">Information Technology</p>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="col-md-4">
                        <div class="panel panel-primary joinee-blocks" onclick="dashboard.panelCheckboxToggle(this)">
                            <div class="panel-body">
                                <div class="panel-proceed-btn"><span class="badge bg-warning">Pending</span></div>
                                <strong>Business Card</strong>
                                <p class="margin-bottom-0 text-muted">Chennai</p>
                                <p class="margin-bottom-0 text-primary">Infrastructure Services</p>
                                <div class="padding-top-md"><button class="btn btn-danger btn-sm"><i class="fa fa-check"></i> Received</button></div>
                            </div>
                        </div>
                    </div> -->
                </div>
               <!--  <div class="row">
                    <div class="col-md-4">
                        <div class="panel panel-primary joinee-blocks" onclick="dashboard.panelCheckboxToggle(this)">
                            <div class="panel-body">
                                <div class="panel-proceed-btn"><i class="fa fa-check text-green"></i></div>
                                <strong>Voice Support</strong>
                                <p class="margin-bottom-0 text-muted">Chennai</p>
                                <p class="margin-bottom-0 text-primary">IT Support</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-primary joinee-blocks" onclick="dashboard.panelCheckboxToggle(this)">
                            <div class="panel-body">
                                <div class="panel-proceed-btn"><i class="fa fa-check text-green"></i></div>
                                <strong>Car Parking Sticker</strong>
                                <p class="margin-bottom-0 text-muted">Chennai</p>
                                <p class="margin-bottom-0 text-primary">Infrastructure Services</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-primary joinee-blocks" onclick="dashboard.panelCheckboxToggle(this)">
                            <div class="panel-body">
                                <div class="panel-proceed-btn"><i class="fa fa-check text-green"></i></div>
                                <strong>LAN Id Creation</strong>
                                <p class="margin-bottom-0 text-muted">Gurgaon</p>
                                <p class="margin-bottom-0 text-primary">Information Technology</p>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="row">
                    <div class="col-md-4">
                        <div class="panel panel-primary joinee-blocks" onclick="dashboard.panelCheckboxToggle(this)">
                            <div class="panel-body">
                                <div class="panel-proceed-btn"><i class="fa fa-check text-green"></i></div>
                                <strong>Business Card</strong>
                                <p class="margin-bottom-0 text-muted">Chennai</p>
                                <p class="margin-bottom-0 text-primary">Infrastructure Services</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-primary joinee-blocks" onclick="dashboard.panelCheckboxToggle(this)">
                            <div class="panel-body">
                                <div class="panel-proceed-btn"><span class="badge bg-warning">Pending</span></div>
                                <strong>Voice Support</strong>
                                <p class="margin-bottom-0 text-muted">Chennai</p>
                                <p class="margin-bottom-0 text-primary">IT Support</p>
                                <div class="padding-top-md"><button class="btn btn-danger btn-sm"><i class="fa fa-check"></i> Received</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-primary joinee-blocks" onclick="dashboard.panelCheckboxToggle(this)">
                            <div class="panel-body">
                                <div class="panel-proceed-btn"><i class="fa fa-check text-green"></i></div>
                                <strong>Car Parking Sticker</strong>
                                <p class="margin-bottom-0 text-muted">Chennai</p>
                                <p class="margin-bottom-0 text-primary">Infrastructure Services</p>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="row">
                    <div class="col-md-4">
                        <div class="panel panel-primary joinee-blocks" onclick="dashboard.panelCheckboxToggle(this)">
                            <div class="panel-body">
                                <div class="panel-proceed-btn"><i class="fa fa-check text-green"></i></div>
                                <strong>LAN Id Creation</strong>
                                <p class="margin-bottom-0 text-muted">Gurgaon</p>
                                <p class="margin-bottom-0 text-primary">Information Technology</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-primary joinee-blocks" onclick="dashboard.panelCheckboxToggle(this)">
                            <div class="panel-body">
                                <div class="panel-proceed-btn"><i class="fa fa-check text-green"></i></div>
                                <strong>Business Card</strong>
                                <p class="margin-bottom-0 text-muted">Chennai</p>
                                <p class="margin-bottom-0 text-primary">Infrastructure Services</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-primary joinee-blocks" onclick="dashboard.panelCheckboxToggle(this)">
                            <div class="panel-body">
                                <div class="panel-proceed-btn"><i class="fa fa-check text-green"></i></div>
                                <strong>Voice Support</strong>
                                <p class="margin-bottom-0 text-muted">Chennai</p>
                                <p class="margin-bottom-0 text-primary">IT Support</p>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="row">
                    <!-- <div class="col-md-4">
                        <div class="panel panel-primary joinee-blocks" onclick="dashboard.panelCheckboxToggle(this)">
                            <div class="panel-body">
                                <div class="panel-proceed-btn"><span class="badge bg-warning">Pending</span></div>
                                <strong>Car Parking Sticker</strong>
                                <p class="margin-bottom-0 text-muted">Chennai</p>
                                <p class="margin-bottom-0 text-primary">Infrastructure Services</p>
                                <div class="padding-top-md"><button class="btn btn-danger btn-sm"><i class="fa fa-check"></i> Received</button></div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
            <div id="logistics_pending" class="col-xs-12 hidden sidebar-section margin-top-md">
                <div class="well text-center">
                    <h5>Logistics Arrangements still pending!</h5>
                </div>
            </div>

            <div id="confirmation_status_completed" class="col-xs-12 hidden sidebar-section margin-top-md">
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
                                <div class="col-md-10">
                                    <strong>Feedback</strong>
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
                                    <strong>BHR 45 Day Session</strong>
                                    <p class="margin-0">10/01/2018</p>
                                    <p class="margin-0">4:00 PM</p>
                                    <p class="margin-0">Anil</p>
                                </div>
                                <div class="col-md-10">
                                    <strong>Feedback</strong>
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
            <div id="confirmation_status_pending" class="col-xs-12 hidden sidebar-section margin-top-md">
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
                                <div class="col-md-10">
                                    <strong>Feedback</strong>
                                    <div class="form-group">
                                        <textarea class="form-control bg-white" rows="5"></textarea>
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
                                    <strong>BHR 45 Day Session</strong>
                                    <p class="margin-0">10/01/2018</p>
                                    <p class="margin-0">4:00 PM</p>
                                    <p class="margin-0">Anil</p>
                                </div>
                                <div class="col-md-10">
                                    <strong>Feedback</strong>
                                    <div class="form-group">
                                        <textarea class="form-control bg-white" rows="5"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <button class="btn btn-danger">Submit</button>
                    </div>
                </div>
            </div>

            <div id="bhr_45_day_completed" class="col-xs-12 hidden sidebar-section margin-top-md">
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
            <div id="bhr_45_day_pending" class="col-xs-12 hidden sidebar-section margin-top-md">
                <div class="well text-center">
                    <h5>BHR 45 Day meeting not yet scheduled!</h5>
                </div>
            </div>

            <div id="bhr_90_day_completed" class="col-xs-12 hidden sidebar-section margin-top-md">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
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
                </div>
            </div>
            <div id="bhr_90_day_pending" class="col-xs-12 hidden sidebar-section margin-top-md">
                <div class="well text-center">
                    <h5>No Records Found</h5>
                </div>
            </div>

            <div id="bhr_bi_annual_completed" class="col-xs-12 hidden sidebar-section margin-top-md">
                <div class="well text-center">
                    <h5>30 Day BHR Meeting Feedback</h5>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div>
                            <p>1. How would you rate his/her performance up to this point???</p>
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
            </div>
            <div id="bhr_bi_annual_pending" class="col-xs-12 hidden sidebar-section margin-top-md">
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
                            <div class="form-group">
                                <textarea class="form-control" rows="5"></textarea>
                            </div>
                        </div>
                        <hr class="margin-sm"/>
                        <div>
                            <p>7. How would you rate his/her performance up to this point?</p>
                            <div class="form-group">
                                <textarea class="form-control" rows="5"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 text-center">
                        <button class="btn btn-danger">Submit</button>
                    </div>
                </div>
            </div>

            <div id="bhr_annual_completed" class="col-xs-12 hidden sidebar-section margin-top-md">
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
            </div>
            <div id="bhr_annual_pending" class="col-xs-12 hidden sidebar-section margin-top-md">
                <div class="row">
                    <div class="col-md-6">
                        <div>
                            <p>1. How would you rate his/her performance up to this point</p>
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
                            <div class="form-group">
                                <textarea class="form-control" rows="5"></textarea>
                            </div>
                        </div>
                        <hr class="margin-sm"/>
                        <div>
                            <p>7. How would you rate his/her performance up to this point?</p>
                            <div class="form-group">
                                <textarea class="form-control" rows="5"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 text-center">
                        <button class="btn btn-danger">Submit</button>
                    </div>
                </div>
            </div>

            <div id="supervisor_monthly_completed" class="col-xs-12 hidden sidebar-section margin-top-md">
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
            </div>
            <div id="supervisor_monthly_pending" class="col-xs-12 hidden sidebar-section margin-top-md">
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
                            <div class="form-group">
                                <textarea class="form-control" rows="5"></textarea>
                            </div>
                        </div>
                        <hr class="margin-sm"/>
                        <div>
                            <p>7. How would you rate his/her performance up to this point?</p>
                            <div class="form-group">
                                <textarea class="form-control" rows="5"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 text-center">
                        <button class="btn btn-danger">Submit</button>
                    </div>
                </div>
            </div>

            <div id="bhr_bi_monthly_completed" class="col-xs-12 hidden sidebar-section margin-top-md">
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
            </div>
            <div id="bhr_bi_monthly_pending" class="col-xs-12 hidden sidebar-section margin-top-md">
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
                            <div class="form-group">
                                <textarea class="form-control" rows="5"></textarea>
                            </div>
                        </div>
                        <hr class="margin-sm"/>
                        <div>
                            <p>7. How would you rate his/her performance up to this point?</p>
                            <div class="form-group">
                                <textarea class="form-control" rows="5"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 text-center">
                        <button class="btn btn-danger">Submit</button>
                    </div>
                </div>
            </div>

            <div id="roadmap_arranged" class="col-xs-12 hidden sidebar-section margin-top-md">
                <div class="row" id="session_blocks">
                    <div class="col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="session_title">Session Title</label>
                                            <input class="form-control" id="session_title" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="session_business">Business</label>
                                            <input class="form-control" id="session_business" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="session_department">Department</label>
                                            <input class="form-control" id="session_department" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="session_sub_department">Sub Department</label>
                                            <input class="form-control" id="session_sub_department" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="session_band">Band</label>
                                            <input class="form-control" id="session_band" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="session_meeting_with">Meeting With</label>
                                            <input class="form-control" id="session_meeting_with" value="">
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
                                        <i class="fa fa-calendar fa-lg padding-top-lg text-danger"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="roadmap_completed" class="col-xs-12 hidden sidebar-section margin-top-md">
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
            <div id="roadmap_pending" class="col-xs-12 hidden sidebar-section margin-top-md">
                <div class="well text-center">
                    <h5>No Roadmap is arranged!</h5>
                </div>
            </div>
        </div>
    </div>
</aside>
<div class="overlay" data-sidebar-overlay></div>

<div class="container-fluid container-padding-top">
    <div class="panel">
        <div class="panel-body">
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <p class="m-0">Name</p>
                        <h4 class="m-0"><?php echo $user_details[0]['first_name'].$user_details[0]['last_name']?></h4>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <p class="m-0">Location</p>
                        <h4 class="m-0"><?php echo $user_details[0]['city']?></h4>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <p class="m-0">Emp Id</p>
                        <h4 class="m-0"><?php echo $user_details[0]['emp_id']?></h4>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <p class="m-0">Business</p>
                        <h4 class="m-0"><?php echo $user_details[0]['businees_unit']?></h4>
                    </div>
                </div>
            </div>
            <hr/>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <p class="m-0">Designation</p>
                        <h4 class="m-0"><?php echo $user_details[0]['designation']?></h4>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <p class="m-0">Department</p>
                        <h4 class="m-0"><?php echo $user_details[0]['department']?></h4>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <p class="m-0">Email</p>
                        <h4 class="m-0"><?php echo $user_details[0]['email']?></h4>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <p class="m-0">Sub Department</p>
                        <h4 class="m-0"><?php echo $user_details[0]['sub_department']?></h4>
                    </div>
                </div>
            </div>
            <hr/>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <p class="m-0">Date of joining</p>
                        <h4 class="m-0"><?php echo $user_details[0]['doj']?></h4>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <p class="m-0">Band</p>
                        <h4 class="m-0"><?php echo $user_details[0]['band']?></h4>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <p class="m-0">Manager Name</p>
                        <h4 class="m-0"><?php echo $user_details[0]['manager_name']?></h4>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <p class="m-0">Manager Email ID</p>
                        <h4 class="m-0"><?php echo $user_details[0]['manager_email']?></h4>
                    </div>
                </div>
            </div>
            <hr/>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <p class="m-0">Business HR Name</p>
                        <h4 class="m-0"><?php echo $user_details[0]['bhr_name']?></h4>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <p class="m-0">Business HR Email ID</p>
                        <h4 class="m-0"><?php echo $user_details[0]['bhr_email']?></h4>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <div class="panel">
        <div class="panel-body">
            <div class="row bs-wizard" style="border-bottom:0;">
                <div class="col-sm-2 bs-wizard-step <?php if($user_details[0]['ob_status'] == 1){ echo "complete";} ?>">
                    <div class="text-center bs-wizard-stepnum">Step 1</div>
                    <div class="progress"><div class="progress-bar"></div></div>
                    <span class="bs-wizard-dot"></span>
                    <div class="bs-wizard-info text-center">Welcome</div>
                </div>

                <div class="col-sm-2 bs-wizard-step <?php echo $status1; ?>">
                    <div class="text-center bs-wizard-stepnum">Step 2</div>
                    <div class="progress"><div class="progress-bar"></div></div>
                    <span class="bs-wizard-dot"></span>
                    <div class="bs-wizard-info text-center">Logistics</div>
                </div>

                <div class="col-sm-2 bs-wizard-step <?php if($status2 == "0"){echo "active";} else{ echo "disabled";} ?>">
                    <div class="text-center bs-wizard-stepnum">Step 3</div>
                    <div class="progress"><div class="progress-bar"></div></div>
                    <span class="bs-wizard-dot"></span>
                    <div class="bs-wizard-info text-center">Team Interaction</div>
                </div>

                <div class="col-sm-2 bs-wizard-step disabled">
                    <div class="text-center bs-wizard-stepnum">Step 4</div>
                    <div class="progress"><div class="progress-bar"></div></div>
                    <span class="bs-wizard-dot"></span>
                    <div class="bs-wizard-info text-center">Roadmap</div>
                </div>

                <div class="col-sm-2 bs-wizard-step disabled">
                    <div class="text-center bs-wizard-stepnum">Step 5</div>
                    <div class="progress"><div class="progress-bar"></div></div>
                    <span class="bs-wizard-dot"></span>
                    <div class="bs-wizard-info text-center">Feedback</div>
                </div>

                <div class="col-sm-2 bs-wizard-step disabled">
                    <div class="text-center bs-wizard-stepnum">Step 6</div>
                    <div class="progress"><div class="progress-bar"></div></div>
                    <span class="bs-wizard-dot"></span>
                    <div class="bs-wizard-info text-center">Confirmation</div>
                </div>
            </div>
        </div>
    </div>
    <div class="panel">
        <div class="panel-body">
            <div class="row">
                <!-- <div class="col-md-3">
                    <div class="panel panel-success joinee-blocks" data-sidebar-button onclick="dashboard.toggle15DayChecklist('completed')">
                        <div class="panel-body">
                            <div class="panel-proceed-btn"><i class="fa fa-angle-double-right fa-lg"></i></div>
                            <strong>15 Day Checklist</strong>
                            <p class="margin-bottom-0 text-muted">15/01/2018</p>
                            <p class="margin-bottom-0 text-success">Done</p>
                        </div>
                    </div>
                </div> -->
                <div class="col-md-3">
                    <div class="panel panel-success joinee-blocks" data-sidebar-button onclick="dashboard.toggleLogistics('completed')">
                        <div class="panel-body">
                            <div class="panel-proceed-btn"><i class="fa fa-angle-double-right fa-lg"></i></div>
                            <strong>Logistics</strong>
                            <p class="margin-bottom-0 text-muted"><?php if(empty($date)){ echo "";} else{ echo $date;}?></p>

                            <?php $value = "";$class = ""; if($status2 == 0){ $value = "Done"; $class = "text-success" ?>
                                    <?php } else { $value = "Pending"; $class = "text-danger" ?> <?php } ?>
                            <p class="margin-bottom-0 <?php echo $class; ?>"><?php echo $value; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="panel panel-danger joinee-blocks" data-sidebar-button onclick="dashboard.toggle15DayChecklist('pending')">
                        <div class="panel-body">
                            <div class="panel-proceed-btn"><i class="fa fa-angle-double-right fa-lg"></i></div>
                            <strong>15 Day Checklist</strong>
                            <p class="margin-bottom-0 text-muted">-</p>
                            <p class="margin-bottom-0 text-danger">Pending</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="panel panel-danger joinee-blocks" data-sidebar-button onclick="dashboard.toggleBHRAnnualFeedback('pending')">
                        <div class="panel-body">
                            <div class="panel-proceed-btn"><i class="fa fa-angle-double-right fa-lg"></i></div>
                            <strong>30 Day BHR Meeting Feedback</strong>
                            <p class="margin-bottom-0 text-muted">-</p>
                            <p class="margin-bottom-0 text-danger">Pending</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="panel panel-danger joinee-blocks" data-sidebar-button onclick="dashboard.toggleBHRBiAnnualFeedback('pending')">
                        <div class="panel-body">
                            <div class="panel-proceed-btn"><i class="fa fa-angle-double-right fa-lg"></i></div>
                            <strong>45 Day BHR Meeting Feedback</strong>
                            <p class="margin-bottom-0 text-muted">-</p>
                            <p class="margin-bottom-0 text-danger">Pending</p>
                        </div>
                    </div>
                </div>

                
                <!-- <div class="col-md-3">
                    <div class="panel panel-danger joinee-blocks" data-sidebar-button onclick="dashboard.toggleLogistics('pending')">
                        <div class="panel-body">
                            <div class="panel-proceed-btn"><i class="fa fa-angle-double-right fa-lg"></i></div>
                            <strong>Logistics</strong>
                            <p class="margin-bottom-0 text-muted">-</p>
                            <p class="margin-bottom-0 text-danger">Pending</p>
                        </div>
                    </div>
                </div> -->
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="panel panel-success joinee-blocks" data-sidebar-button onclick="dashboard.toggle90DayMeeting('pending')">
                        <div class="panel-body">
                            <div class="panel-proceed-btn"><i class="fa fa-angle-double-right fa-lg"></i></div>
                            <strong> 90 Day BHR Meeting Feedback</strong>
                            <p class="margin-bottom-0 text-muted">15/01/2018</p>
                            <p class="margin-bottom-0 text-success">Done</p>
                        </div>
                    </div>
                </div>
               <!--  <div class="col-md-3">
                    <div class="panel panel-danger joinee-blocks" data-sidebar-button onclick="dashboard.toggleConfirmationStatus('pending')">
                        <div class="panel-body">
                            <div class="panel-proceed-btn"><i class="fa fa-angle-double-right fa-lg"></i></div>
                            <strong>Confirmation Status</strong>
                            <p class="margin-bottom-0 text-muted">-</p>
                            <p class="margin-bottom-0 text-danger">Pending</p>
                        </div>
                    </div>
                </div> -->

               <!--  <div class="col-md-3">
                    <div class="panel panel-success joinee-blocks" data-sidebar-button onclick="dashboard.toggle45DayMeeting('completed')">
                        <div class="panel-body">
                            <div class="panel-proceed-btn"><i class="fa fa-angle-double-right fa-lg"></i></div>
                            <strong>BHR 45 Day Meeting</strong>
                            <p class="margin-bottom-0 text-muted">15/01/2018</p>
                            <p class="margin-bottom-0 text-success">Done</p>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="col-md-3">
                    <div class="panel panel-danger joinee-blocks" data-sidebar-button onclick="dashboard.toggle45DayMeeting('pending')">
                        <div class="panel-body">
                            <div class="panel-proceed-btn"><i class="fa fa-angle-double-right fa-lg"></i></div>
                            <strong>BHR 45 Day Meeting</strong>
                            <p class="margin-bottom-0 text-muted">-</p>
                            <p class="margin-bottom-0 text-danger">Pending</p>
                        </div>
                    </div>
                </div> -->
            </div>

            <div class="row">
                <!-- <div class="col-md-3">
                    <div class="panel panel-success joinee-blocks" data-sidebar-button onclick="dashboard.toggle90DayMeeting('completed')">
                        <div class="panel-body">
                            <div class="panel-proceed-btn"><i class="fa fa-angle-double-right fa-lg"></i></div>
                            <strong>BHR 90 Day Meeting</strong>
                            <p class="margin-bottom-0 text-muted">15/01/2018</p>
                            <p class="margin-bottom-0 text-success">Done</p>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="col-md-3">
                    <div class="panel panel-danger joinee-blocks" data-sidebar-button onclick="dashboard.toggle90DayMeeting('pending')">
                        <div class="panel-body">
                            <div class="panel-proceed-btn"><i class="fa fa-angle-double-right fa-lg"></i></div>
                            <strong>BHR 90 Day Meeting</strong>
                            <p class="margin-bottom-0 text-muted">-</p>
                            <p class="margin-bottom-0 text-danger">Pending</p>
                        </div>
                    </div>
                </div> -->

                <!-- <div class="col-md-3">
                    <div class="panel panel-success joinee-blocks" data-sidebar-button onclick="dashboard.toggleBHRBiAnnualFeedback('completed')">
                        <div class="panel-body">
                            <div class="panel-proceed-btn"><i class="fa fa-angle-double-right fa-lg"></i></div>
                            <strong>BHR Bi Annual Feedback</strong>
                            <p class="margin-bottom-0 text-muted">15/01/2018</p>
                            <p class="margin-bottom-0 text-success">Done</p>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="col-md-3">
                    <div class="panel panel-danger joinee-blocks" data-sidebar-button onclick="dashboard.toggleBHRBiAnnualFeedback('pending')">
                        <div class="panel-body">
                            <div class="panel-proceed-btn"><i class="fa fa-angle-double-right fa-lg"></i></div>
                            <strong>BHR Bi Annual Feedback</strong>
                            <p class="margin-bottom-0 text-muted">-</p>
                            <p class="margin-bottom-0 text-danger">Pending</p>
                        </div>
                    </div>
                </div> -->
            </div>

            <div class="row">
                <!-- <div class="col-md-3">
                    <div class="panel panel-success joinee-blocks" data-sidebar-button onclick="dashboard.toggleBHRAnnualFeedback('completed')">
                        <div class="panel-body">
                            <div class="panel-proceed-btn"><i class="fa fa-angle-double-right fa-lg"></i></div>
                            <strong>BHR Annual Feedback</strong>
                            <p class="margin-bottom-0 text-muted">15/01/2018</p>
                            <p class="margin-bottom-0 text-success">Done</p>
                        </div>
                    </div>
                </div> -->
                

                <!-- <div class="col-md-3">
                    <div class="panel panel-success joinee-blocks" data-sidebar-button onclick="dashboard.supervisorMonthlyFeedback('completed')">
                        <div class="panel-body">
                            <div class="panel-proceed-btn"><i class="fa fa-angle-double-right fa-lg"></i></div>
                            <strong>Supervisor Monthly Feedback</strong>
                            <p class="margin-bottom-0 text-muted">15/01/2018</p>
                            <p class="margin-bottom-0 text-success">Done</p>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="col-md-3">
                    <div class="panel panel-danger joinee-blocks" data-sidebar-button onclick="dashboard.supervisorMonthlyFeedback('pending')">
                        <div class="panel-body">
                            <div class="panel-proceed-btn"><i class="fa fa-angle-double-right fa-lg"></i></div>
                            <strong>Supervisor Monthly Feedback</strong>
                            <p class="margin-bottom-0 text-muted">-</p>
                            <p class="margin-bottom-0 text-danger">Pending</p>
                        </div>
                    </div>
                </div> -->
            </div>

            <div class="row">
                <!-- <div class="col-md-3">
                    <div class="panel panel-success joinee-blocks" data-sidebar-button onclick="dashboard.toggleBHRBiMonthlyFeedback('completed')">
                        <div class="panel-body">
                            <div class="panel-proceed-btn"><i class="fa fa-angle-double-right fa-lg"></i></div>
                            <strong>BHR Bi Monthly Feedback</strong>
                            <p class="margin-bottom-0 text-muted">15/01/2018</p>
                            <p class="margin-bottom-0 text-success">Done</p>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="col-md-3">
                    <div class="panel panel-danger joinee-blocks" data-sidebar-button onclick="dashboard.toggleBHRBiMonthlyFeedback('pending')">
                        <div class="panel-body">
                            <div class="panel-proceed-btn"><i class="fa fa-angle-double-right fa-lg"></i></div>
                            <strong>BHR Bi Monthly Feedback</strong>
                            <p class="margin-bottom-0 text-muted">-</p>
                            <p class="margin-bottom-0 text-danger">Pending</p>
                        </div>
                    </div>
                </div> -->

                <!-- <div class="col-md-3">
                    <div class="panel panel-success joinee-blocks" data-sidebar-button onclick="dashboard.toggleRoadmap('arranged')">
                        <div class="panel-body">
                            <div class="panel-proceed-btn"><i class="fa fa-angle-double-right fa-lg"></i></div>
                            <strong>Roadmap</strong>
                            <p class="margin-bottom-0 text-muted">15/01/2018</p>
                            <p class="margin-bottom-0 text-success">Arranged</p>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="col-md-3">
                    <div class="panel panel-success joinee-blocks" data-sidebar-button onclick="dashboard.toggleRoadmap('completed')">
                        <div class="panel-body">
                            <div class="panel-proceed-btn"><i class="fa fa-angle-double-right fa-lg"></i></div>
                            <strong>Roadmap</strong>
                            <p class="margin-bottom-0 text-muted">15/01/2018</p>
                            <p class="margin-bottom-0 text-success">Completed</p>
                        </div>
                    </div>
                </div> -->
            </div>

            <!-- <div class="row">
                <div class="col-md-3">
                    <div class="panel panel-danger joinee-blocks" data-sidebar-button onclick="dashboard.toggleRoadmap('pending')">
                        <div class="panel-body">
                            <div class="panel-proceed-btn"><i class="fa fa-angle-double-right fa-lg"></i></div>
                            <strong>Roadmap</strong>
                            <p class="margin-bottom-0 text-muted">-</p>
                            <p class="margin-bottom-0 text-danger">Pending</p>
                        </div>
                    </div>
            </div>
            </div> -->
        </div>
    </div>
</div>

<footer class="bg-white container-fluid">
    <div class="row">
        <div class="col-md-12 text-center">
             <?php echo $this->Html->image('springboard-logo.png', ['alt' => "Logo"]); ?>
        </div>
    </div>
</footer>

<!-- Include all compiled plugins (below), or include individual files as needed -->

 <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 <?php echo $this->Html->script(['bootstrap.min', 'custom','employee_dashboard','sidebar']); ?>
 <?php $updatestatus = $this->Url->build(['controller' => 'Users', 'action' => 'employeeDashboard']); ?>
<script>
 $('[data-toggle="tooltip"]').tooltip();

 function updatelogisticstatus(id)
 {
    var r_status = 1;
    $.ajax({
        type:"POST",
        url: "<?= $updatestatus; ?>",
        data:{'id':id,
               'r_status':r_status 
              },
        success : function(data) {
           $("#send_requirments").show();
                  setTimeout(function(){
                $("#send_requirments").fadeOut();
            },6000);
               $('#recieved').hide();
               $('#pending').hide();
               $('#check').show();
             //value right now is in this variable ... i want to send this variable value to the controller
//           alert(data);
        },
        error : function() {
           alert("Value NOT reaching to controller ");
           //console.log(data);
        }
    });
 }
</script>
</body>
</html>