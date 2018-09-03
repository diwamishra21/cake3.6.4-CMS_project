
<?php $insertsuperlogistics = $this->Url->build(['controller'=>'Supervisor','action'=>'logisticsupinsert']) ?>

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
                        <li><a data-toggle="pill" href="#roadmap">Roadmap</a></li>
                        <li><a data-toggle="pill" href="#interval_feedback">Feedback</a></li>
                    </ul>
                </div>
                <hr class="margin-top-0"/>
                <div class="tab-content">
                    <div id="joinee_information" class="tab-pane fade in active">
                        <div id="joinee-details-outer">
						<div class="success-msg" id="send_requirments" style="display:none;">
				<i class="fa fa-check"></i>Logistics requirments sucessfully send.
</div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="panel panel-danger joinee-blocks" onclick="dashboard.toggleLogistics()">
                                        <div class="panel-body">
                                            <div class="panel-proceed-btn"><i class="fa fa-angle-double-right fa-lg"></i></div>
                                            <strong>Logistics Arrangements</strong>
                                            <p class="margin-bottom-0 text-green" id="logistic_user_id"  style="display:none;">Done</p>
	 <p class="margin-bottom-0 text-red" id="pending">Pending</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="margin-top-0"/>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <div class="col-md-3">
                                            <label for="name" class="padding-top-md">Name</label>
                                        </div>
                                        <div class="col-md-9">
                                            <p class="j-name-html padding-top-md"></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <div class="col-md-3">
                                            <label for="doj" class="padding-top-md">DOJ</label>
                                        </div>
                                        <div class="col-md-9">
                                            <p class="j-doj-html padding-top-md"></p>
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
                                            <p class="j-emp_id-html padding-top-md"></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <div class="col-md-3">
                                            <label for="emp_email" class="padding-top-sm">Employee Email</label>
                                        </div>
                                        <div class="col-md-9">
                                            <p id="j-emp_email" class="padding-top-md"></p>
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
                                            <p id="j-business" class="padding-top-md"></p>
                                        </div>
                                    </div>
                                </div>
                               <div class="col-md-6">
                                    <div class="form-group row">
                                        <div class="col-md-3">
                                            <label for="designation" class="padding-top-md">Designation</label>
                                        </div>
                                        <div class="col-md-9">
                                            <p id="designation" class="padding-top-md"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <div class="col-md-3">
                                            <label for="j-city" class="padding-top-md">City</label>
                                        </div>
                                        <div class="col-md-9">
                                            <p id="j-city" class="padding-top-md"></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <div class="col-md-3">
                                            <label for="j-state" class="padding-top-md">State</label>
                                        </div>
                                        <div class="col-md-9">
                                            <p id="j-state" class="padding-top-md"></p>
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
                            <?php echo $this->Form->create();?><div class="row">
							
							 <?php foreach ($logisticrecord as $logisticrecorddata) { ?>
                                <div class="col-md-4">
                                    <div class="panel panel-primary joinee-blocks" onclick="dashboard.panelCheckboxToggle(this)">
                                        <div class="panel-body">
                                            <div class="panel-proceed-btn"><input id="logistic_id" type="checkbox" class="checkbox" name="logistic_id[]" value="<?=$logisticrecorddata->id ?>"></div>
                                            <strong><?php echo $logisticrecorddata->title ?></strong>
                                            <p class="margin-bottom-0 text-muted"><?php echo $logisticrecorddata['location']['title'] ?></p>
                                            <p class="margin-bottom-0 text-primary"><?php echo $logisticrecorddata['department']['title'] ?></p>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                                <?php echo $this->Form->input('userid',(['name'=>'userid','type'=>'hidden','id'=>'userid'])); ?>
								<?php echo  $this->Form->input('logistic_arrangement_add_by',(['name'=>'logistic_arrangement_add_by','type'=>'hidden','id'=>'logistic_arrangement_add_by','value'=>'1'])); ?>
								
								
                            </div>
                            <hr class="margin-top-0"/>
                            <div class="row">
                              <div class="col-md-4 col-md-offset-4">
 <?php echo $this->Form->button('<i class="fa fa-paper-plane-o"></i> Send Requirements',(['class'=>'btn btn-danger btn-block','type'=>'button','onclick'=>'return logisticinsert();','id'=>''])); ?>  
                                  
                                </div>
                            </div>
							<?php echo $this->Form->end(); ?>  
							
                        </div>
                    </div>
                    <div id="interval_feedback" class="tab-pane fade">
                        <div id="interval_feedback_outer">
                            <div class="margin-top-sm">
                                <div class="row">
                                    <div class="col-md-4">
                                        <span>Name : </span>
                                        <strong class="j-name-html"></strong>
                                    </div>
                                    <div class="col-md-4">
                                        <span>Emp Id : </span>
                                        <strong class="j-emp_id-html"></strong>
                                    </div>
                                    <div class="col-md-4">
                                        <span>DOJ : </span>
                                        <strong class="j-doj-html"></strong>
                                    </div>
                                </div>
                            </div>
                            <hr/>
                            <div class="row" id="f-info-sec">
                            </div>
                        </div>
                        <div id="f-details-sec">
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
                                        <strong class="j-name-html"></strong>
                                    </div>
                                    <div class="col-md-4">
                                        <span>Emp Id : </span>
                                        <strong class="j-emp_id-html"></strong>
                                    </div>
                                    <div class="col-md-4">
                                        <span>DOJ : </span>
                                        <strong class="j-doj-html"></strong>
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
                                        <strong class="j-name-html"></strong>
                                    </div>
                                    <div class="col-md-4">
                                        <span>Emp Id : </span>
                                        <strong class="j-emp_id-html"></strong>
                                    </div>
                                    <div class="col-md-4">
                                        <span>DOJ : </span>
                                        <strong class="j-doj-html"></strong>
                                    </div>
                                </div>
                            </div>
                            <hr/>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel panel-default">
                                        <div class="panel-body" id="rmap-section">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-right">
                                    <button type="button" class="btn btn-danger" id="add-road-map"><i class="fa fa-check"></i> Recommend</button>
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
            <?php
            //echo $this->Html->link('<i class="fa fa-plus"></i> Add', ['controller' => 'users', 'action' => 'add-user'], ['escape' => false, 'class' => 'btn btn-danger btn-sm']);
            ?>
        </div>
        <div class="col-md-6 text-right">
            <button type="button" class="btn btn-danger btn-sm" onclick="dashboard.toggleDashboard()"><i class="fa fa-bar-chart"></i></button>
        </div>
        <div class="col-md-8 margin-top-lg">
            <table class="table table-bordered table-striped" id="myTable">
                <thead>
                    <tr>
                        <!--th><input type="checkbox" class="checkbox" name="select_all" onclick="dashboard.toggleSelectAllCheckbox(this)"></th-->
                        <th class="pointer" onclick="sortTable(1)"><div data-toggle="tooltip" data-placement="bottom" data-original-title="List of all the employees" class="red-tooltip">Employee Name</div></th>
                        <th class="pointer" onclick="sortTable(2)"><div data-toggle="tooltip" data-placement="bottom" data-original-title="Confirmation status of employees" class="red-tooltip">Confirm</div></th>
                        <th><div data-toggle="tooltip" data-placement="bottom" data-original-title="Employee ID" class="red-tooltip">Emp ID</div></th>
                        <th class="pointer" onclick="sortTable(4)"><div data-toggle="tooltip" data-placement="bottom" data-original-title="Date of joining of the employee" class="red-tooltip">DOJ</div></th>
                        <th><div data-toggle="tooltip" data-placement="bottom" data-original-title="Details" class="red-tooltip">Logistics</div></th>
                        <th><div data-toggle="tooltip" data-placement="bottom" data-original-title="Status of Roadmap" class="red-tooltip">Roadmap</div></th>
                        <th><div data-toggle="tooltip" data-placement="bottom" data-original-title="Status of feedback submitted" class="red-tooltip">Feedback</div></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (!empty($joineeData)) {
                        foreach ($joineeData as $jd) {
                            //pr($jd);die;
                            ?>        
                            <tr>
                                <!--td><input type="checkbox" class="checkbox" name="select_individual"></td-->
                                <td>
                                    <div class="text-blue show_user" data-sidebar-button  data-key="<?= $jd['id']; ?>">
                                        <?php
                                        if (!empty($jd['first_name'])) {
                                            echo $jd['first_name'];
                                        }
                                        ?>
                                    </div>
                                </td>
                                <td>
                                    <?php
                                    if ($jd['status'] == 2) {
                                        echo '<i class="fa fa-circle text-green"></i>';
                                    } else if ($jd['status'] == 3) {
                                        echo '<i class="fa fa-times text-red"></i>';
                                    } else {
                                        echo '<i class="fa fa-circle text-orange"></i>';
                                    }
                                    ?>

                                </td>
                                <td>
                                    <?php
                                    if (!empty($jd['emp_id'])) {
                                        echo $jd['emp_id'];
                                    }
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if (!empty($jd['doj'])) {
                                        echo date('d/m/Y', strtotime($jd['doj']));
                                    }
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if ($jd['status'] == 2) {
                                        echo '<i class="fa fa-circle text-green"></i>';
                                    } else if ($jd['status'] == 3) {
                                        echo '<i class="fa fa-times text-red"></i>';
                                    } else {
                                        echo '<i class="fa fa-circle text-orange"></i>';
                                    }
                                    ?>

                                </td>
                                <td><i class="fa fa-circle text-orange"></i></td>
                                <td>
                                    <?php
                                    if ($jd['fcomplete']) {
                                        echo '<i class="fa fa-circle text-green"></i>';
                                    }else {
                                        echo '<i class="fa fa-circle text-orange"></i>';
                                    }
                                    ?>

                                </td>
                            </tr>
                            <?php
                        }
                    } else {
                        ?>    
                        <tr>
                            <td colspan="8" rowspan="3">No Data found !</td>
                        </tr>
                    <?php }
                    ?>

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
<script src="js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
<?php
echo $this->Html->script(['guage', 'custom', 'dashboard', 'sidebar', 'supervisor']);
?>
<script>
function logisticinsert(){

var userid= $("#userid").val();
var logistic_arrangement_add_by= $("#logistic_arrangement_add_by").val();
var logistic_id = new Array();
        $('input:checkbox[name="logistic_id[]"]:checked').each(function() {
           logistic_id.push($(this).val());
        });
   
    $.ajax({
        url: '<?= $insertsuperlogistics ?>',
        method: 'POST',
        data: {userid:userid,
		logistic_arrangement_add_by:logistic_arrangement_add_by,
               logistic_id:logistic_id },
        success: function(data){
         $("#send_requirments").show();
		
		 dashboard.toggleLogistics();
		  setTimeout(function(){
        $("#send_requirments").fadeOut();
    },6000);
	  $("#logistic_user_id").show();
           $("#pending").hide();	 
}
 });
} 
</script>


</body>
</html>