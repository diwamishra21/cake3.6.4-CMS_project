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
                        <li><a data-toggle="pill" href="#roadmap" id="roadmap_tab">Roadmap</a></li>
                    </ul>
                </div>
                <hr class="margin-top-0"/>
                <div class="tab-content">
                    <!-- add session road map start -->
                    <div id="roadmap" class="tab-pane fade" class="hidden">
                        <?php echo $this->Form->create('Addsessionform', array('url' => array('controller' => 'Users', 'action' => 'addsession'))); ?>

                        <input type="hidden" name="as_id_0" id="as_id_0">
                        <div id="roadmap_arrange" >
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
                            
                            <!-- list of session inside add session start -->
                            <div class="col-xs-12 margin-top-lg" id="session_table_div">
                                <table class="table table-bordered table-striped" style="margin-left: -15px;">
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
                                            <th><div data-toggle="tooltip" data-placement="bottom" data-original-title="Status of roadmap" class="red-tooltip">Action</div></th>
                                        </tr>
                                    </thead>
                                    <tbody id="session_table">
                                    </tbody>
                                </table>
                            </div>
                            <!-- list of session inside add session end -->
                            
                            <hr/>
                            <div class="row" >
                                <div class="col-xs-12" id="session_blocks">
                                    <div class="panel panel-default" id="panel_id_0">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-12 witnessRow_0">
                                                    <div class="col-md-3">
                                                        <div class="form-group" id="0">
                                                            <label for="bu_name">Business Unit <span style="color: red"> * </span></label>
                                                            <select required class="form-control" onchange="getdepartment(0,this);" id="bu_name_0" name="bu_name[]">
                                                                <option value="">Select</option>
                                                                <?php foreach ($business_units as $business_unit) { ?>
                                                                    <option id="bu_op_0" value="<?= $business_unit['id']; ?>"><?= $business_unit['title']; ?>
                                                                    </option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group" id="0">
                                                            <label for="dept">Department <span style="color: red"> * </span></label>
                                                            <select required class="form-control" onchange="getsubdepartment(0,this);" id="dept_0" name="dept[]" >
                                                                <option value="">Select</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group" id="0">
                                                            <label for="sub_dept">Sub Department <span style="color: red"> * </span></label>
                                                            <select required class="form-control" onchange="getmeetingwithdata(0,this);" id="sub_dept_0" name="sub_dept[]">
                                                                <option value="">Select</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="meeting_with">Meeting With <span style="color: red"> * </span></label>
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
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="session_meeting_date">Date <span style="color: red"> * </span></label>
                                                                    <input required type="date" class="form-control" name="session_date[]" id="session_date_0">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group" id="0">
                                                                    <label for="session_meeting_time">From <span style="color: red"> * </span></label>
                                                                    <input required type="time" class="form-control" name="start_time[]" onchange="getmeetingduration(0,this);" id="start_time_0">
                                                                </div>
                                                            </div>

                                                            <div class="col-md-3">
                                                                <div class="form-group" id="0">
                                                                    <label for="session_meeting_time">To <span style="color: red"> * </span></label>
                                                                    <input required type="time" class="form-control" name="end_time[]" onchange="getmeetingduration(0,this);" id="end_time_0">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
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
                                <button type="submit" class="btn btn-danger btn-sm" onclick=""> Add Session</button>
                                <button type="button" class="btn btn-primary btn-sm add_session11 addbu" onclick="dashboard.roadmapSessionAdd(); get_bus_dept();"><i class="fa fa-plus"></i> Add More</button>
                            </div>
                        </div>
                        <?php echo $this->Form->end(); ?>
                    </div>
                    <!-- add session road map end -->
                    
                    <!-- div for edit session start -->
                    <div id="edit_session" class="hidden">
                        
                        <?php //echo $this->Form->create('Updatesessionform', array('url' => array('controller' => 'Users', 'action' => 'updateSession'))); ?>
                        <input type="hidden" name="es_id" id="es_id">
                        <input type="hidden" name="joinee_id_es" id="joinee_id_es">
    <div id="edit_session_arrange" >
        <ol class="breadcrumb">
            <li onclick="back_to_add_session();"><a style="cursor: pointer;">Roadmap</a></li>
            <li class="active">Edit Session</li>
        </ol>
        <div class="margin-top-sm">
            <div class="row">
                <div class="col-md-4">
                    <span>Name : </span>
                    <strong id="es_user_name"></strong>
                </div>
                <div class="col-md-4">
                    <span>Emp Id : </span>
                    <strong id="es_user_empid"></strong>
                </div>
                <div class="col-md-4">
                    <span>DOJ : </span>
                    <strong id="es_user_doj"></strong>
                </div>
            </div>
        </div>
        <hr/>
        <div class="row" >
            <div class="col-xs-12" id="session_blocks">
                <div class="panel panel-default" id="panel_id_0">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12 witnessRow_0">
                                <div class="col-md-3">
                                    <div class="form-group bu_name_es_ap" id="es">
                                        <label for="bu_name">Business Unit <span style="color: red"> * </span></label>
                                        <select required class="form-control" onchange="getdepartment('es', this);" id="bu_name_es" name="bu_name_es">
                                            <option value="">Select</option>
                                            <?php foreach ($business_units as $business_unit) { ?>
                                                <option value="<?= $business_unit['id']; ?>"><?= $business_unit['title']; ?>
                                                </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group dept_es_ap" id="es">
                                        <label for="dept">Department <span style="color: red"> * </span></label>
                                        <select required class="form-control" onchange="getsubdepartment('es', this);" id="dept_es" name="dept_es" >
                                            <option value="">Select</option>
                                            <?php foreach ($departments as $dep_es) { ?>
                                                <option value="<?= $dep_es['id']; ?>"><?= $dep_es['title']; ?>
                                                </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group sub_dept_es_ap" id="es">
                                        <label for="sub_dept">Sub Department <span style="color: red"> * </span></label>
                                        <select required class="form-control" onchange="getmeetingwithdata('es',this);" id="sub_dept_es" name="sub_dept_es">
                                            <option value="">Select</option>
                                            <?php foreach ($sub_departments as $sub_dep_es) { ?>
                                                <option value="<?= $sub_dep_es['id']; ?>"><?= $sub_dep_es['title']; ?>
                                                </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group user_id_es_ap">
                                        <label for="meeting_with">Meeting With <span style="color: red"> * </span></label>
                                        <select required  class="form-control user_id_es" id="user_id_es" name="user_id_es">
                                            <option value="">Select</option>
                                            <?php foreach ($users_data as $users_data_es) { ?>
                                                <option value="<?= $users_data_es['id']; ?>"><?= $users_data_es['first_name'].''.$users_data_es['last_name']; ?>
                                                </option>
                                            <?php } ?>
                                        </select>

                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="note">Note</label>
                                        <textarea class="form-control" type="text" name="note_es" id="note_es">
                                        </textarea>
                                    </div>
                                </div>

                                <div class="col-md-9">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="session_meeting_date">Date <span style="color: red"> * </span></label>
                                                <input required type="date" class="form-control" name="session_date_es" id="session_date_es">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group" id="es">
                                                <label for="session_meeting_time">From <span style="color: red"> * </span></label>
                                                <input required type="time" onchange="getmeetingduration('es', this);" class="form-control" name="start_time_es" id="start_time_es">
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group" id="es">
                                                <label for="session_meeting_time">To <span style="color: red"> * </span></label>
                                                <input required type="time" onchange="getmeetingduration('es', this);" class="form-control" name="end_time_es" id="end_time_es">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="session_meeting_time">Duration</label>
                                                <input disabled type="text" class="form-control" name="duration_es" id="duration_es">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div id="edit_mode_s_error" class="hidden" style="color: red;text-align: center;">Please fill Mandatory Fields</div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
                        <div class="row">
                            <div class="col-md-12 text-right">
                                <button type="button" class="btn btn-primary btn-sm" onclick="back_to_add_session();"> Back </button>
                                <button type="submit" class="btn btn-danger btn-sm" id="reschedule" onclick=""> Reschedule</button>
                            </div>
                        </div>
                        <?php //echo $this->Form->end(); ?>
                    </div>   
                    <!-- div for edit session end -->    
                    
                </div>
            </div>
        </div>
    </div>
</div>
</aside>
<div class="overlay" data-sidebar-overlay></div>

<div class="container-fluid container-padding-top">
    <?php $flash_message = $this->Flash->render() ?>
    <?php if (!empty(@$flash_message)) { ?>
        <div class="success-msg" id="success" style="text-align:center;">
            <i class="fa fa-check"></i>
            <!--<?= $this->Flash->render('flash', ['element' => 'success']); ?>-->
            Changes Done Successfully.
        </div>
    <?php } ?>
    <div class="row">
        <div class="col-xs-12 text-center">
            <h4>Manage Roadmap</h4>
        </div>
        <div class="col-xs-12 margin-top-lg">
            <table class="table table-bordered table-striped" id="report_table">
                <thead>
                    <tr>
                        <th><div data-toggle="tooltip" data-placement="bottom" data-original-title="List of all the employees" class="red-tooltip">Employee Name</div></th>
                        <th><div data-toggle="tooltip" data-placement="bottom" data-original-title="Employee ID" class="red-tooltip">Emp ID</div></th>
                        <th><div data-toggle="tooltip" data-placement="bottom" data-original-title="Date of joining of the employee" class="red-tooltip">DOJ</div></th>
                        <th><div data-toggle="tooltip" data-placement="bottom" data-original-title="Department of employees" class="red-tooltip">Department</div></th>
                        <th><div data-toggle="tooltip" data-placement="bottom" data-original-title="Manager Name" class="red-tooltip">Manager Name</div></th>
                        <th><div data-toggle="tooltip" data-placement="bottom" data-original-title="Confirmation status of employees" class="red-tooltip">Confirm</div></th>
                        <th><div data-toggle="tooltip" data-placement="bottom" data-original-title="Status of roadmap" class="red-tooltip">Status</div></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($roadmaplisting as $roadmaplistings) { ?>
                        <tr>
                            <td>
                                <div class="text-blue" data-sidebar-button data-panel-type="roadmap" id="<?= 'user_' . $roadmaplistings['id'] ?>" onclick="roadmap.openRoadmap('arrange');editdata('<?= $roadmaplistings['id'] ?>');getsessions('<?= $roadmaplistings['id'] ?>')">
                                <?= $roadmaplistings['employee_name']; ?></div>
                            </td>
                            <td><?= $roadmaplistings['emp_id']; ?></td>
                            <td><?= $roadmaplistings['doj']; ?></td>
                            <td><?= $roadmaplistings['department']; ?></td>
                            <td><?= $roadmaplistings['manager_name']; ?></td>
                            <td>
                                <div class="text-blue" id="roadmap_div" data-panel-type="roadmap">
                                    <?php if($roadmaplistings['status'] == 2){?>
                                        <i class="fa fa-check text-green"></i>
                                    <?php }else{?>
                                        <i class="fa fa-circle text-orange"></i>
                                        <?php }?>
                                    
                                </div>
                            </td>
                            <td>
                                <?php if($roadmaplistings['status'] == 1){?>
                                        <i class="fa fa-check text-green"></i>
                                    <?php }else{?>
                                        <i class="fa fa-circle text-orange"></i>
                                        <?php }?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php
$fetchroadmapPopup = $this->Url->build(['controller' => 'Users', 'action' => 'fetchroadmapPopup']);
$dept_url = $this->Url->build(['controller' => 'Logistics', 'action' => 'getdepartments']);
$get_bus_url = $this->Url->build(['controller' => 'Logistics', 'action' => 'getbusinessunits']);
$s_dept_url = $this->Url->build(['controller' => 'Logistics', 'action' => 'getsubdepartments']);
$addbussiness = $this->Url->build(['controller' => 'Users', 'action' => 'addbussiness']);
$meeting_with_url = $this->Url->build(['controller' => 'Users', 'action' => 'getmeetingwithuser']);
$user_detail_by_id = $this->Url->build(['controller' => 'Users', 'action' => 'fetchuserbyid']);
$session_detail_by_id = $this->Url->build(['controller' => 'Users', 'action' => 'fetchusersessionbyid']);
$inactive_session = $this->Url->build(['controller' => 'Users', 'action' => 'inactivesession']);
$url_edit_session = $this->Url->build(['controller' => 'Users', 'action' => 'editSession']);
$url_update_session = $this->Url->build(['controller' => 'Users', 'action' => 'updateSession']);
        
?>

<?php echo $this->Html->script(['jquery-1.12.4', 'bootstrap.min', 'sidebar', 'jquery-ui', 'dashboard', 'roadmap']); ?>

<script>
    $('[data-toggle="tooltip"]').tooltip();
</script>
<script src="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
<script>
    $(document).ready(function () {
    $('#report_table').DataTable({
       "aaSorting" : []
    });
});

</script>

<script type="text/javascript">  
    var increment = 0;
    $("#dept_" + increment + "").prop('disabled', true);
    $("#sub_dept_" + increment + "").prop('disabled', true);
    $("#user_id_" + increment + "").prop('disabled', true);
    function getdepartment(sid, t) {
        if(sid=="es"){
           c_div_id = "es";
        }
        
        var c_div_id = $(t).closest("div").prop("id");
        console.log("id of parent div - "+c_div_id);
        
        $("#dept_" + c_div_id + "").prop('disabled', false);
        $("#sub_dept_" + c_div_id + "").prop('disabled', true);
        $("#user_id_" + c_div_id + "").prop('disabled', true);
        
        console.log("bu_name changed with increment" + increment);
        $("#dept_0").prop('disabled', false);
        $("#dept_" + c_div_id + "").prop('disabled', false);
        var business_unit_id = "";
        $("#dept_" + c_div_id + "").html('<option value="">Select</option>');
        $("#sub_dept_" + c_div_id + "").html('<option value="">Select</option>');
        $("#user_id_" + c_div_id + "").html('<option value="">Select</option>');
        $("#dept_" + c_div_id + "").val('');
        $("#sub_dept_" + c_div_id + "").val('');
        $("#user_id_" + c_div_id + "").val('');
        business_unit_id = $("#bu_name_" + c_div_id + "").find(":selected").val();
        console.log("business_unit_id - " + business_unit_id);
        $.ajax({
            url: "<?= $dept_url; ?>",
            type: 'POST',
            data: {"business_unit_id": business_unit_id},
            success: function (data) {
                var parsedata = JSON.parse(data);
                $("#dept_" + c_div_id + "").append(parsedata);
            },
            error: function (e)
            {
                console("An error occurred: " + e.responseText.message);
                console.log(e);
            }
        });
    }

    function getsubdepartment(id, t) {
        if(id=="es"){
           c_div_id = "es";
        }
        var c_div_id = $(t).closest("div").prop("id");
        console.log("id of parent div - "+c_div_id);
        
        
        
        $("#user_id_" + c_div_id + "").prop('disabled', true);
        
        console.log("dept_ changed with increment" + c_div_id);
        $("#sub_dept_0").prop('disabled', false);
        $("#sub_dept_" + c_div_id + "").prop('disabled', false);
        var business_unit_id1 = "";
        var department_id1 = "";
        $("#sub_dept_" + c_div_id + "").html('<option value="">Select</option>');
         $("#sub_dept_" + c_div_id + "").val('');
        //$('#sub_dept').find('option').remove().end().append('<option value="">Select</option>').val('whatever');

        business_unit_id1 = $("#bu_name_" + c_div_id + "").find(":selected").val();
        department_id1 = $("#dept_" + c_div_id + "").find(":selected").val();
        console.log("business_unit_id1 - " + business_unit_id1 + "    department_id1 - " + department_id1);
        $.ajax({
            url: "<?= $s_dept_url; ?>",
            type: 'POST',
            data: {"id": department_id1, "business_unit_id": business_unit_id1},
            success: function (data) {
                var parsedata1 = JSON.parse(data);
                $("#sub_dept_" + c_div_id + "").append(parsedata1);
            },
            error: function (e)
            {
                console("An error occurred: " + e.responseText.message);
                console.log(e);
            }
        });
    }

    function getmeetingwithdata(id, t) {
        if(id=="es"){
           c_div_id = "es";
        }
        var c_div_id = $(t).closest("div").prop("id");
        console.log("id of parent div - "+c_div_id);
        
        
        $("#user_id_" + c_div_id + "").prop('disabled', false);
        
        console.log("sub_dept_ changed with increment" + c_div_id);
        $("#user_id_0").prop('disabled', false);
        
        var business_unit_id1 = "";
        var department_id1 = "";
        var sub_department_id1 = "";
        $("#user_id_" + c_div_id + "").html('<option value="">Select</option>');
        $("#user_id_" + c_div_id + "").val('');
        //$('#sub_dept').find('option').remove().end().append('<option value="">Select</option>').val('whatever');

        business_unit_id1 = $("#bu_name_" + c_div_id + "").find(":selected").val();
        department_id1 = $("#dept_" + c_div_id + "").find(":selected").val();
        sub_department_id1 = $("#sub_dept_" + c_div_id + "").find(":selected").val();
        console.log("business_unit_id1 - " + business_unit_id1 + "    department_id1 - " + department_id1 + "    sub_department_id1 - " + sub_department_id1);
        $.ajax({
            url: "<?= $meeting_with_url; ?>",
            type: 'POST',
            data: {"business_unit_id": business_unit_id1, "department_id": department_id1, "sub_department_id": sub_department_id1},
            success: function (data) {
                var parsedata1 = JSON.parse(data);
                $("#user_id_" + c_div_id + "").append(parsedata1);
            },
            error: function (e)
            {
                console("An error occurred: " + e.responseText.message);
                console.log(e);
            }
        });
    }

    function getmeetingduration(id, t) {
        if(id=="es"){
           c_div_id = "es";
        }
        var c_div_id = $(t).closest("div").prop("id");
        console.log("id of parent div - "+c_div_id);
        
        var start = $("#start_time_" + c_div_id + "").val();
        var end = $("#end_time_" + c_div_id + "").val();

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
        console.log("typeof duration- " + validdata);
        console.log("time diff - " + diffc);
        $("#duration_" + c_div_id + "").val(diffc);
    }

</script>

<script type="text/javascript">
    function get_bus_dept() {
        /*  for business Unit name   */
        $.ajax({
            url: "<?= $get_bus_url; ?>",
            type: 'POST',
            data: {},
            success: function (data) {
                //console.log("data fetched on click of bu_name and result - "+data);
                var parsedata1 = JSON.parse(data);
                $("#bu_name_" + increment + "").append(parsedata1);
                $("#dept_" + increment + "").prop('disabled', true);
                $("#sub_dept_" + increment + "").prop('disabled', true);
                $("#user_id_" + increment + "").prop('disabled', true);
            },
            error: function (e)
            {
                console.log("An error occurred: " + e.responseText.message);
                console.log(e);
            }
        });
    }
</script>



<script type="text/javascript">
    function editdata(id) {
        $.ajax({
            type: "POST",
            url: "<?= $user_detail_by_id; ?>",
            data: {'id': id},
            success: function (data) {
                data = JSON.parse(data);
                //console.log(data);
                var name = data.user_data[0].first_name + " " + data.user_data[0].last_name;
                var extract_date = data.user_data[0].doj.substring(0, 10);
                var stringdate = new Date(extract_date);
                var doj = stringdate.toLocaleDateString();
                
                
                $('#as_id_0').val(data.user_data[0].id);
                $('#user_name').html(name);
                $('#user_doj').html(doj);
                $('#user_empid').html(data.user_data[0].emp_id);
                
                $('#es_id').val(data.user_data[0].id);
                $('#es_user_name').html(name);
                $('#es_user_doj').html(doj);
                $('#es_user_empid').html(data.user_data[0].emp_id);
            },
            error: function () {
                console.log("Value NOT reaching to controller ");
            }
        });
    }
    
    function inactivesession(id)
 {
    var status = 0;
     if (confirm('Are you sure?')) {
    $.ajax({
    type:"POST",
        url: "<?= $inactive_session; ?>",
        data:{'id':id,
               'status' : status
               },
        success : function(data) {
            //console.log('Session deleted Successfuly');
           location.reload();
          },
        error : function() {
           console.log("Value NOT reaching to controller ");
           
        }
    });
    }


 }
 
    function getsessions(id) {
        $('#session_table').html('');
        console.log('id - '+id);
        $.ajax({
            type: "POST",
            url: "<?= $session_detail_by_id; ?>",
            data: {'id': id},
            success: function (data) {
                //console.log("data fetched - "+data);
                var parsedata1 = JSON.parse(data);
                if(parsedata1!=""){
                    $("#session_table_div").show();
                    
                    $("#session_table").append(parsedata1);
                }else{
                    $("#session_table_div").hide();
                }
                
            },
            error: function () {
                console.log("Value NOT reaching to controller ");
            }
        });
    }
    
    function closediv(button_id) {
        console.log('close button clicked with id - '+id);
        var id = "panel_id_"+button_id;
       $("#" + id +"").remove();
    }
    
    function open_edit_mode(edit_session){
        console.log("edit session clicked");
        $("#roadmap").addClass("hidden");
        $("#edit_session").removeClass("hidden");
    }
    
    function back_to_add_session(){
        console.log("edit session clicked");
        $("#roadmap").removeClass("hidden");
        $("#edit_session").addClass("hidden");
    }
    
    function editsessiondata(id){
        console.log("id - "+id);
    $.ajax({
        type:"POST",
        url: "<?= $url_edit_session; ?>",
        data:{'id':id},
        success : function(data) {
           data = JSON.parse(data);
           console.log(data);
            increment = "es";
            console.log('increment - '+increment);
           $('#es_id').val(data.sess_data[0].id);
           $("div.bu_name_es_ap select").val(data.sess_data[0].business_unit_id);
           $("div.dept_es_ap select").val(data.sess_data[0].department_id);
           $("div.sub_dept_es_ap select").val(data.sess_data[0].sub_department_id);
           $("div.user_id_es_ap select").val(data.sess_data[0].user_id);
           $('#note_es').val(data.sess_data[0].note);
           $('#session_date_es').val(data.session_date);
           $('#start_time_es').val(data.start_time);
           $('#end_time_es').val(data.end_time);
           $('#duration_es').val(data.duration);
           $('#joinee_id_es').val(data.sess_data[0].joinee_id);
           $("#dept_es").prop('disabled', true);
           $("#sub_dept_es").prop('disabled', true);
           $("#user_id_es").prop('disabled', true);
        },
        error : function() {
           console.log("some error occured in fetch data using editsessiondata function");
        }
    });
}

     $('#reschedule').click(function(){
        var es_id       = $('#es_id').val();
        var joinee_id_es       = $('#joinee_id_es').val();
        var bu_name_es = $('#bu_name_es').val();
        var dept_es  = $('#dept_es').val();
        var sub_dept_es  = $('#sub_dept_es').val();
        var note_es = $('#note_es').val();
        var user_id_es = $('#user_id_es').val();
        var session_date_es = $('#session_date_es').val();
        var start_time_es = $('#start_time_es').val();
        var end_time_es = $('#end_time_es').val();
        
        
        console.log("bu_name_es -"+bu_name_es+"    dept_es -"+dept_es+"    sub_dept_es -"+sub_dept_es+"    note_es -"+note_es+"    user_id_es -"+user_id_es+"    session_date_es- "+session_date_es+"    start_time_es- "+start_time_es+"    end_time_es- "+end_time_es);
        if(bu_name_es == '' || dept_es == '' || sub_dept_es == '' || session_date_es == '' || start_time_es == '' || end_time_es == ''){
            $("#edit_mode_s_error").removeClass("hidden");
            return false;
        }else{
        $.ajax({
            type:"POST",
            url: "<?= $url_update_session ?>",
            data: {
               es_id       : es_id,
               joinee_id_es : joinee_id_es,
               bu_name_es  : bu_name_es,
               dept_es  : dept_es,
               sub_dept_es  : sub_dept_es,
               user_id_es : user_id_es,
               note_es : note_es,
               session_date_es  : session_date_es,
               start_time_es  : start_time_es,
               end_time_es  : end_time_es,
           },
            success : function(data) {
                console.log(data);
                console.log("Session Updated Sucessfully");
                location.reload(true);
               },
              error : function() {
                console.log("some error occured in updating session");
                } 
            });}
 });


</script>
<style>
  
   .dataTables_info{width: 200px;}
    .paging_simple_numbers{width: 220px;float: right;margin-top: -44px;margin-top: -15px;}
    .dataTables_filter{float: right;}
    
    /*.col-sm-12{margin-top: -12px;}*/
   
</style>