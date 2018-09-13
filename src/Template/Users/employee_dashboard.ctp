
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dashboard | Spring Board</title>
        <!-- Bootstrap -->
        <?php echo $this->Html->css(['bootstrap', 'style', 'font-awesome.min']); ?>
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
            /*.col-md-3 > form-group > m-0 h4{margin-top: -30px;margin-left: 101px;}*/
            .ad-h4{margin-top: -30px;margin-left: 110px;}
            /* .one:link {color:blue;}
             .one:visited {color:#purple;}
             .one:hover {color:#ffcc00;}*/
            .one {font-family:Georgia, "Times New Roman", Times, serif;cursor: auto}
            .one:link {color:blue;}
            .one:visited {color: #660066;}
            .one:hover { color: blue; }
            .one:active {color: #ff0000;text-decoration: none}

        </style>
        <script>
        <?php echo 'var webroot ="' . $this->Url->build('/') . '"'; ?>
        </script>
    </head>
    <body class="bg-light">
        <div id="navbar"> <?php echo $this->element('employee_header'); ?></div>
        <input type="hidden" value="<?= $user_id; ?>" id="u-key">
        <aside data-sidebar>
            <div class="padding-bottom-md container-fluid">
                <div class="row">
                    <div class="col-xs-12 bg-dark">
                        <div class="padding-md">
                            <div class="panel-close-btn" data-sidebar-button><i class="fa fa-times fa-lg text-white"></i></div>
                            <h3 class="margin-0" id="sidebar_header"></h3>
                        </div>
                    </div>
                    <div id="logistics_completed" class="col-xs-12 hidden sidebar-section margin-top-md">
                        <div class="row">
                            <div class="success-msg" id="send_requirments" style="display:none;">
                                <i class="fa fa-check"></i>Logistic status updated sucessfully.
                            </div><br>

                            <?php
                            foreach ($logistic_detail as $logistic_detail) {
                                $date1 = $logistic_detail['time_created'];
                                $date = substr($date1, 0, 10);
                                ?>
                                <div class="col-md-4">
                                    <div class="panel panel-primary joinee-blocks" onclick="dashboard.panelCheckboxToggle(this)">
                                        <div class="panel-body"style="width: 285px;height: 132px;">
                                            <div class="panel-proceed-btn">
                                                <?php if ($logistic_detail['r_status'] == 0) { ?>
                                                    <span class="badge bg-warning" id="pending_<?php echo $logistic_detail['id'] ?>">Pending</span>
                                                    <i class="fa fa-check text-green" id="check_<?php echo $logistic_detail['id'] ?>" style="display: none"></i>
                                                <?php } else { ?>
                                                    <i class="fa fa-check text-green"></i>
                                                <?php } ?>
                                            </div>
                                            <strong><?php echo $logistic_detail['logistic_name'] ?></strong>
                                            <p class="margin-bottom-0 text-muted">Gurgaon</p>
                                            <p class="margin-bottom-0 text-primary">Information Technology</p>
                                            <div class="padding-top-md">
                                                <?php if ($logistic_detail['r_status'] == 0) { ?>
                                                    <button class="btn btn-danger btn-sm" onclick="return updatelogisticstatus(<?php echo $logistic_detail['id'] ?>)" id="recieved_<?php echo $logistic_detail['id'] ?>"><i class="fa fa-check"></i> Received</button>
                                                <?php } else { ?>

                                                <?php } ?>
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
                    <div id="logistics_pending" class="col-xs-12 hidden sidebar-section margin-top-md">
                <div class="well text-center">
                    <h5>Logistics Arrangements still pending!</h5>
                </div>
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
                    <div class="panel-body panel panel-default">
                        <div class="row">
                            <div class="col-md-3">       
                                <div class="form-group">
                                    <p class="m-0"><b>Name</b></p>
                                    <p class="m-0"><?php echo $user_details[0]['first_name'] . ' ' . $user_details[0]['last_name'] ?></p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <p class="m-0"><b>Location</b></p>
                                    <p class="m-0"><?php echo $user_details[0]['city'] ?></p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <p class="m-0"><b>Emp Id</b></p>
                                    <p class="m-0"><?php echo $user_details[0]['emp_id'] ?></p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <p class="m-0"><b>Business</b></p>
                                    <p class="m-0"><?php echo $user_details[0]['businees_unit'] ?></p>
                                </div>
                            </div>
                        </div>
                        <hr/>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <p class="m-0"><b>Designation</b></p>
                                    <p class="m-0"><?php echo $user_details[0]['designation'] ?></p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <p class="m-0"><b>Department</b></p>
                                    <p class="m-0"><?php echo $user_details[0]['department'] ?></p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <p class="m-0"><b>Email</b></p>
                                    <p class="m-0"><?php echo $user_details[0]['email'] ?></p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <p class="m-0"><b>Sub Department</b></p>
                                    <p class="m-0"><?php echo $user_details[0]['sub_department'] ?></p4>
                                </div>
                            </div>
                        </div>
                        <hr/>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <p class="m-0"><b>Date of joining</b></p>
                                    <p class="m-0"><?php
                                        $orgdate = $user_details[0]['doj'];
                                        $date = date("d-m-Y", strtotime($orgdate));
                                        echo $date;
                                        ?></p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <p class="m-0"><b>Band</b></p>
                                    <p class="m-0"><?php echo $user_details[0]['band'] ?></p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <p class="m-0"><b>Manager Name</b></p>
                                    <p class="m-0"><?php echo $user_details[0]['manager_name'] ?></p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <p class="m-0"><b>Manager Email ID</b></p>
                                    <p class="m-0"><?php echo $user_details[0]['manager_email'] ?></p>
                                </div>
                            </div>
                        </div>
                        <hr/>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <p class="m-0"><b>Business HR Name</b></p>
                                    <p class="m-0"><?php echo $user_details[0]['bhr_name'] ?></p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <p class="m-0"><b>Business HR Email ID</b></p>
                                    <p class="m-0"><?php echo $user_details[0]['bhr_email'] ?></p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div id="roadmap_arranged" class="col-xs-12 hidden sidebar-section margin-top-md">
                    <table class="table table-bordered table-striped" style="margin-left: -15px;">
                        <thead>
                            <tr>
                                <th>Meeting With</th>
                                <th>Department</th>
                                <th>Note</th>
                                <th>Date</th>
                                <th>Start time</th>
                                <th>End Time</th>
                                <th>Duration</th> 
                                <th>Status</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($sessions_data as $sessions_data) { ?>

                                <tr>
                                    <td><?php echo $sessions_data['manager_name']?></td>
                                    <td><?php echo $sessions_data['department']?></td> 
                                    <td><?php
                                        $note = substr($sessions_data['note'], 0, 20) . '...';
                                        echo'<span title="' . $sessions_data['note'] . '">' . $note . '</span>';
                                        ?></td> 
                                    <td><?php 
                                      $orgdate = $sessions_data['session_date'];
                                    $date = date("d-m-Y", strtotime($orgdate));
                                    echo $date; ?></td>   
                                    <td><?php echo $sessions_data['start_time'] ?></td>     
                                    <td><?php echo $sessions_data['end_time'] ?></td> 
                                     
                                    <td><?php
                                        $strtdate = new \DateTime($sessions_data['start_time']);
                                        $enddate = new \DateTime($sessions_data['end_time']);
                                        $diff = date_diff($strtdate, $enddate);
                                         $hours = $diff->h;
                                         $minute = $diff->i;
                                         $dur = $hours . "Hr " . $minute . " Min";
                                        echo $dur;
                                        ?></td>   
                                    <td><?php
                                       if ($sessions_data['is_accepted'] == 1) {
                                                $status = 'fa fa-check text-green';
                                            } else {
                                                $status = 'fa fa-circle text-orange';
                                            }

                                      ?>
                                      <i class='<?php echo $status?>'></i>
                                    </td>   
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
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
                <div id="f-details-sec">

                </div>
            </div>
        </div>
    </aside>
    <div class="overlay" data-sidebar-overlay></div>

    <div class="container-fluid container-padding-top">
        <div class="panel">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-2">
                        <?php echo $this->Html->image('images1.png', ['alt' => "Logo", "style" => "width: 120px"]); ?>
                       <!-- <img src="http://via.placeholder.com/200x200" alt="" style="width: 120px; height: 120px;">  -->    
                    </div>
                    <div class="col-md-10">
                        <div class="row bs-wizard" style="border-bottom:0;">
                            <div class="col-sm-2 bs-wizard-step <?php
                            if ($user_details[0]['ob_status'] == 1) {
                                echo "complete";
                            }
                            ?>">
                                <div class="text-center bs-wizard-stepnum">&nbsp;</div>
                                <div class="progress"><div class="progress-bar"></div></div>
                                <span class="bs-wizard-dot"></span>
                                <div class="bs-wizard-info text-center">Welcome Onboard</div>
                            </div>

                            <div class="col-sm-2 bs-wizard-step <?php echo $status1; ?>">
                                <div class="text-center bs-wizard-stepnum">&nbsp;</div>
                                <div class="progress"><div class="progress-bar"></div></div>
                                <span class="bs-wizard-dot" data-sidebar-button onclick="dashboard.toggleLogistics('completed')"></span>
                                <div class="bs-wizard-info text-center" data-sidebar-button onclick="dashboard.toggleLogistics('completed')" >My Logistics</div>
                            </div>

                            <div class="col-sm-2 bs-wizard-step <?php
                            if (!empty($sessions_data)) {
                                echo "complete";
                            } else {
                                echo "disabled";
                            }
                            ?>">
                                <div class="text-center bs-wizard-stepnum">&nbsp;</div>
                                <div class="progress"><div class="progress-bar"></div></div>
                                <span class="bs-wizard-dot" data-sidebar-button onclick="<?php
                                if (empty($sessions_data)) {
                                    echo "dashboard.toggleRoadmap('pending')";
                                } else {
                                    echo"dashboard.toggleRoadmap('arranged')";
                                }
                                ?>"></span>
                                <div class="bs-wizard-info text-center" data-sidebar-button onclick="<?php
                                if (empty($sessions_data)) {
                                    echo "dashboard.toggleRoadmap('pending')";
                                } else {
                                    echo"dashboard.toggleRoadmap('arranged')";
                                }
                                ?>">My Roadmap</div>
                            </div>

                            <div class="col-sm-2 bs-wizard-step <?php $value = $feedback_value; if($value != 0) {
                                echo "complete";
                            } else {
                                echo "disabled";
                            }
                            ?>">
                                <div class="text-center bs-wizard-stepnum">&nbsp;</div>
                                <div class="progress"><div class="progress-bar"></div></div>
                                <span class="bs-wizard-dot"></span>
                                <div class="bs-wizard-info text-center">My Feedback</div>
                            </div>

                            <div class="col-sm-2 bs-wizard-step  <?php
                            if ($user_details[0]['status'] == 2) {
                                echo "complete";
                            } else {
                                echo "disabled";
                            }
                            ?>">
                                <div class="text-center bs-wizard-stepnum">&nbsp;</div>
                                <div class="progress"><div class="progress-bar"></div></div>
                                <span class="bs-wizard-dot"></span>
                                <div class="bs-wizard-info text-center">Confirmation</div>
                            </div>

                            <!-- <div class="col-sm-2 bs-wizard-step disabled">
                                <div class="text-center bs-wizard-stepnum">&nbsp;</div>
                                <div class="progress"><div class="progress-bar"></div></div>
                                <span class="bs-wizard-dot"></span>
                                <div class="bs-wizard-info text-center">Confirmation</div>
                            </div> -->
                        </div>   
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">       
                        <div class="form-group">
                            <p class="m-0"><b>Name</b></p>
                            <p class="m-0 ad-h4"><?php echo $user_details[0]['first_name'] . ' ' . $user_details[0]['last_name'] ?></p>
                            <p class="m-0"><b>Emp Id</b></p>
                            <p class="m-0 ad-h4"><?php echo $user_details[0]['emp_id'] ?></p>
                            <p class="m-0"><b>Department</b></p>
                            <p class="m-0 ad-h4"><?php echo $user_details[0]['department'] ?></p>
                            <p class="m-0"><b>DOJ</b></p>
                            <p class="m-0 ad-h4"><?php
                                $orgdate = $user_details[0]['doj'];
                                $date = date("d-m-Y", strtotime($orgdate));
                                echo $date;
                                ?></p>
                            <p class="one" data-sidebar-button onclick="dashboard.toggleConfirmationStatus('pending')"><u>View Detail</u></p>
                        </div>
                    </div>
                    <!-- <div class="col-md-3">
                        <div class="form-group">
                            <p class="m-0">Location</p>
                            <h4 class="m-0 ad-h4"><?php echo $user_details[0]['city'] ?></h4>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <p class="m-0">Emp Id</p>
                            <h4 class="m-0 ad-h4"><?php echo $user_details[0]['emp_id'] ?></h4>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <p class="m-0">Business</p>
                            <h4 class="m-0 ad-h4"><?php echo $user_details[0]['businees_unit'] ?></h4>
                        </div>
                    </div>
                </div>
                <hr/>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <p class="m-0">Designation</p>
                            <h4 class="m-0"><?php echo $user_details[0]['designation'] ?></h4>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <p class="m-0">Department</p>
                            <h4 class="m-0"><?php echo $user_details[0]['department'] ?></h4>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <p class="m-0">Email</p>
                            <h4 class="m-0"><?php echo $user_details[0]['email'] ?></h4>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <p class="m-0">Sub Department</p>
                            <h4 class="m-0"><?php echo $user_details[0]['sub_department'] ?></h4>
                        </div>
                    </div>
                </div>
                <hr/>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <p class="m-0">Date of joining</p>
                            <h4 class="m-0"><?php echo $user_details[0]['doj'] ?></h4>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <p class="m-0">Band</p>
                            <h4 class="m-0"><?php echo $user_details[0]['band'] ?></h4>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <p class="m-0">Manager Name</p>
                            <h4 class="m-0"><?php echo $user_details[0]['manager_name'] ?></h4>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <p class="m-0">Manager Email ID</p>
                            <h4 class="m-0"><?php echo $user_details[0]['manager_email'] ?></h4>
                        </div>
                    </div>
                </div>
                <hr/>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <p class="m-0">Business HR Name</p>
                            <h4 class="m-0"><?php echo $user_details[0]['bhr_name'] ?></h4>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <p class="m-0">Business HR Email ID</p>
                            <h4 class="m-0"><?php echo $user_details[0]['bhr_email'] ?></h4>
                        </div>
                    </div>
                    
                </div> -->
                </div>
            </div>
            <!--  <div class="panel">
                 <div class="panel-body">
                     <div class="row bs-wizard" style="border-bottom:0;">
                         <div class="col-sm-2 bs-wizard-step <?php
            if ($user_details[0]['ob_status'] == 1) {
                echo "complete";
            }
            ?>">
                             <div class="text-center bs-wizard-stepnum">&nbsp;</div>
                             <div class="progress"><div class="progress-bar"></div></div>
                             <span class="bs-wizard-dot"></span>
                             <div class="bs-wizard-info text-center">Welcome</div>
                         </div>
         
                         <div class="col-sm-2 bs-wizard-step <?php echo $status1; ?>">
                             <div class="text-center bs-wizard-stepnum">&nbsp;</div>
                             <div class="progress"><div class="progress-bar"></div></div>
                             <span class="bs-wizard-dot" data-sidebar-button onclick="dashboard.toggleLogistics('completed')"></span>
                             <div class="bs-wizard-info text-center" data-sidebar-button onclick="dashboard.toggleLogistics('completed')" >My Logistics</div>
                         </div>
         
                         <div class="col-sm-2 bs-wizard-step <?php
            if ($status2 == "0") {
                echo "active";
            } else {
                echo "disabled";
            }
            ?>">
                             <div class="text-center bs-wizard-stepnum">&nbsp;</div>
                             <div class="progress"><div class="progress-bar"></div></div>
                             <span class="bs-wizard-dot"></span>
                             <div class="bs-wizard-info text-center">My Roadmap</div>
                         </div>
         
                         <div class="col-sm-2 bs-wizard-step disabled">
                             <div class="text-center bs-wizard-stepnum">&nbsp;</div>
                             <div class="progress"><div class="progress-bar"></div></div>
                             <span class="bs-wizard-dot"></span>
                             <div class="bs-wizard-info text-center">My Feedback</div>
                         </div>
         
                         <div class="col-sm-2 bs-wizard-step disabled">
                             <div class="text-center bs-wizard-stepnum">&nbsp;</div>
                             <div class="progress"><div class="progress-bar"></div></div>
                             <span class="bs-wizard-dot"></span>
                             <div class="bs-wizard-info text-center">Confirmation</div>
                         </div>
         
                         <div class="col-sm-2 bs-wizard-step disabled">
                             <div class="text-center bs-wizard-stepnum">&nbsp;</div>
                             <div class="progress"><div class="progress-bar"></div></div>
                             <span class="bs-wizard-dot"></span>
                             <div class="bs-wizard-info text-center">Confirmation</div>
                         </div> -->
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
                <div class="panel panel-success joinee-blocks" data-sidebar-button onclick="<?php
                if (empty($logistic_detail)) {
                    echo "dashboard.toggleLogistics('pending')";
                } else {
                    echo"dashboard.toggleLogistics('completed')";
                }
                ?>">
                    <div class="panel-body">
                        <div class="panel-proceed-btn"><i class="fa fa-angle-double-right fa-lg"></i></div>
                        <strong>Logistics</strong>
                        <p class="margin-bottom-0 text-muted"><?php
                          if(empty($logistic_detail['time_created'])){
                            $orgdate="";
                          }else{
                            $orgdate = $logistic_detail['time_created'];}
                            $date = date("d-m-Y", strtotime($orgdate));
                            if(!empty($orgdate)){echo $date;}else{echo"-";}
                            ?></p>

                        <?php
                        $value = "";
                        $class = "";
                        if ($status2 == 0) {
                            $value = "Pending";
                            $class = "text-danger"
                            ?>
                            <?php
                        } else {
                            $value = "Done";
                            $class = "text-success"
                            ?> <?php }
                        ?>
                        <p class="margin-bottom-0 <?php echo $class; ?>"><?php echo $value; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel panel-success joinee-blocks" data-sidebar-button onclick="<?php
                if (empty($sessions_data)) {
                    echo "dashboard.toggleRoadmap('pending')";
                } else {
                    echo"dashboard.toggleRoadmap('arranged')";
                }
                ?>">
                    <div class="panel-body">
                        <div class="panel-proceed-btn"><i class="fa fa-angle-double-right fa-lg"></i></div>
                        <strong>Roadmap</strong>
                        <p class="margin-bottom-0 text-muted">10/09/2018</p>
                        <?php
                        $value = "";
                        $class = "";
                        if (!empty($sessions_data)) {
                            $value = "Done";
                            $class = "text-success"
                            ?>
                            <?php
                        } else {
                            $value = "Pending";
                            $class = "text-danger"
                            ?> <?php } ?>
                        <p class="margin-bottom-0 <?php echo $class; ?>"><?php echo $value; ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" id="f-info-sec">

        </div>
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
<?php echo $this->Html->script(['bootstrap.min', 'custom', 'employee_dashboard', 'sidebar']); ?>
<?php $updatestatus = $this->Url->build(['controller' => 'Users', 'action' => 'employeeDashboard']); ?>
<script>
                    $('[data-toggle="tooltip"]').tooltip();
                    $(document).ready(function () {
                        var ukey = $('#u-key').val();
                        showFeedbackData(ukey);
                        $(document).on('click', '.info-sec', function () {
                            var key = $(this).attr('data-rel');
                            var title = $(this).attr('data-title');
                            selectFeedback(key, title);
                        });
                        $(document).on('mouseover', '.star-rate', function () {
                            var star = $(this);
                            var curInd = star.parent().index();
                            var root = star.parent().parent();
                            var rt = star.parent().parent().attr('data-rate');
                            rt = parseInt(rt);
                            if (star.hasClass('fa-star')) {
                                rt = curInd;
                                root.find('span:eq(' + (curInd) + ')').find('i').addClass('fa-star-o').removeClass('fa-star');
                            } else if (star.hasClass('fa-star-o')) {
                                rt = curInd + 1;
                                root.find('span:eq(' + (curInd) + ')').find('i').addClass('fa-star').removeClass('fa-star-o');
                            }
                            root.find('span:lt(' + (curInd) + ')').find('i').addClass('fa-star').removeClass('fa-star-o');
                            root.find('span:gt(' + (curInd) + ')').find('i').addClass('fa-star-o').removeClass('fa-star');
                            star.parent().parent().attr('data-rate', rt);
                            if (rt < 1) {
                                tr = 0;
                            }
                            root.siblings('.rate').val(rt);
                            star.parent().parent().attr('data-rate', rt);
                        });
                        $(document).on('click', '.save-feedback', function () {
                            var sidebar = $('[data-sidebar]');
                            var overlay = $('[data-sidebar-overlay]');
                            var body = $("body");
                            var sBtn = $(this);
                            var fdata = sBtn.parent().parent().parent().parent().parent('.feedback-form').serialize();
                            var key = $(this).attr('data-key');
                            sBtn.hide();
                            $.ajax({
                                url: webroot + 'joinees/feedbackResponse/',
                                data: {fdata},
                                method: 'POST'
                            }).done(function () {
                                showFeedbackData(key);
                                sidebar.css('margin-right', sidebar.width() * -1 + 'px');

                                overlay.fadeTo('500', 0, function () {
                                    overlay.hide();
                                    body.css("overflow", "scroll");
                                });
                            });
                        });
                    });

                    function updatelogisticstatus(id)
                    {
                        var r_status = 1;
                        $.ajax({
                            type: "POST",
                            url: "<?= $updatestatus; ?>",
                            data: {'id': id,
                                'r_status': r_status
                            },
                            success: function (data) {
                                $("#send_requirments").show();
                                setTimeout(function () {
                                    $("#send_requirments").fadeOut();
                                }, 6000);
                                $('#recieved_' + id).css('display', 'none');
                                $('#pending_' + id).hide();
                                $('#check_' + id).show();
                                //value right now is in this variable ... i want to send this variable value to the controller
//           alert(data);
                            },
                            error: function () {
                                // alert("Value NOT reaching to controller ");
                                //console.log(data);
                            }
                        });
                    }
                    function showFeedbackData(key) {
                        $('#f-info-sec').html('');
                        $('#f-details-sec').html('');
                        $.ajax({
                            url: webroot + 'joinees/getFeedbackData/' + key

                        }).done(function (data) {
                            data = $.parseJSON(data);
                            $('#f-info-sec,#f-details-sec').html('');
                            $(data).each(function (i, u) {
                                $('#f-info-sec').append(u.info);
                                $('#f-details-sec').append(u.details);
                            });
                            $('#interval_feedback_outer').removeClass('hidden');
                        });
                    }
                    function selectFeedback(key, title) {
                        var sidebar = $('[data-sidebar]');
                        var overlay = $('[data-sidebar-overlay]');
                        var body = $("body");
                        sidebar.css('margin-right', '0');
                        overlay.show(0, function () {
                            overlay.fadeTo('500', 0.7);
                            body.css("overflow", "hidden");
                        });
                        $(".sidebar-section").addClass("hidden");
                        $("#sidebar_header").html(title);
                        $('#feed_sec_' + key).removeClass("hidden");
                    }



</script>
</body>
</html>