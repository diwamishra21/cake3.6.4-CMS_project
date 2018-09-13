
<div class="container-fluid container-padding-top">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 bg-white margin-bottom-xl">
            <div class="padding-md">
                <div class="text-center">
                    <h3>Reschedule Session </h3>
                </div>
            </div>
            <hr/>
            <div class="<?php echo @$class; ?>">
                <a href="#" class="close" data-dismiss="alert" aria-label="close"><?php echo @$close; ?></a>
                <i class="<?php echo @$iclass; ?>"></i><?php echo @$sucessful; ?>.
            </div>
            <div class="" id="add_user" >
            <?php echo $this->Form->create();?>
            <input type="hidden" name="session_id" id="session_id" value="<?php echo $sess_data[0]['id'];?>">
            <input type="hidden" name="joinee_id" id="joinee_id" value="<?php echo $sess_data[0]['joinee_id'];?>">
               <div class="col-xs-12 margin-top-lg">
                <div class="row">
                    
                    <div class="col-md-6">
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="title" class="padding-top-md">Business Unit</label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <select required class="form-control bu_name" id="bu_name" name="bu_name">
                                        <option value="">Select</option>
                                        <?php foreach($business_units as $bus){?>
                                        <option 
                                            <?php if($business_unit_id == $bus['id']){?>selected="selected"<?php }?>
                                            value=<?php echo $bus['id'];?> ><?php echo $bus['title']; ?>
                                        </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="title" class="padding-top-md">Department</label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                     <select required class="form-control dept" id="dept" name="dept">
                                         <option value="">Select</option>
                                         <?php foreach($departments as $dep){?>
                                        <option selected value=<?php echo $dep['id'];?> ><?php echo $dep['title']; ?>
                                        </option>
                                        <?php } ?>
                                     </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="col-md-6">
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="title" class="padding-top-md">Sub Department</label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <select required class="form-control" id="sub_dept" name="sub_dept">
                                        <option value="">Select</option>
                                        <?php foreach($sub_departments as $sub_dep){?>
                                        <option selected value=<?php echo $sub_dep['id'];?> ><?php echo $sub_dep['title']; ?>
                                        </option>
                                        <?php } ?>
                                     </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="title" class="padding-top-md">Meeting With</label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <select required  class="form-control user_id_0" id="user_id" name="user_id">
                                        <option value="">Select</option>
                                        <?php foreach($meeting_with as $meet_with){?>
                                        <option selected value=<?php echo $meet_with['id'];?> ><?php echo $meet_with['first_name'].' '.$meet_with['last_name']; ?>
                                        </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="title" class="padding-top-md">note</label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <textarea required type="text" id="note" name="note" cols="3" rows="3" class="form-control" placeholder='Enter Title'><?php echo $sess_data[0]['note'];?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="type" class="padding-top-md">Date</label>
                            </div>
                            <div class="col-md-9">
                                <input required type="date" class="form-control" name="session_date" id="session_date" value="<?php echo date("Y-m-d", strtotime($sess_data[0]['session_date']));?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="type" class="padding-top-md">From</label>
                            </div>
                            <div class="col-md-9">
                                <input required type="time" class="form-control" name="start_time" id="start_time" value="<?php echo date("h:i", strtotime($sess_data[0]['start_time']));?>">
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="type" class="padding-top-md">To</label>
                            </div>
                            <div class="col-md-9">
                                <input required type="time" class="form-control" name="end_time" id="end_time" value="<?php echo date("h:i", strtotime($sess_data[0]['end_time']));?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="type" class="padding-top-md">Duration</label>
                            </div>
                            <div class="col-md-9">
                                <?php $datetime1 = new DateTime($sess_data[0]['end_time']);
                                    $datetime2 = new DateTime($sess_data[0]['start_time']);
                                    $interval = $datetime1->diff($datetime2);
                                    $dur = $interval->format('%h')." Hours ".$interval->format('%i')." Minutes";
                                    ?>
                                <input disabled type="text" class="form-control" name="duration" value="<?php echo  $dur; ?>" id="duration">
                            </div>
                        </div>
                    </div>
                    
                </div>
                <hr/>
                <div class="col-xs-12 text-center">
                    <button class="btn btn-danger padding-left-xl padding-right-xl" type="submit">Update</button>
                </div>
            </div>
                <?php echo $this->Form->end();?>
            </div>
            <?php $dept_url = $this->Url->build(['controller' => 'Logistics', 'action' => 'getdepartments']); 
             $s_dept_url = $this->Url->build(['controller' => 'Logistics', 'action' => 'getsubdepartments']); 
             $meeting_with_url = $this->Url->build(['controller' => 'Users', 'action' => 'getmeetingwithuser']);
            
             ?>
        </div>
    </div>
</div>

<script src="./js/jquery-1.12.4.js"></script>
<script src="./js/jquery-ui.js"></script>
<?php echo $this->Html->script(['jquery-1.12.4', 'bootstrap.min', 'sidebar','jquery-ui','dashboard','chart.min','guage']); ?>
<script type="text/javascript">
$(document).ready(function() {
    /*  for department   */
    $('#dept').prop('disabled', true);
    $("#bu_name").change(function () {
         $('#dept').prop('disabled', false);
        $('#sub_dept').children('option:not(:first)').remove();
        $('#dept').children('option:not(:first)').remove();
        $('#dept').prop('disabled', false);
        var business_unit_id ="";
        $('#dept').val('');
        $('#sub_dept').val('');
        business_unit_id = $('#bu_name').find(":selected").val();
        console.log("business_unit_id - "+business_unit_id);
        $.ajax({
            url: "<?= $dept_url; ?>",
            //url: '/cake3.6.4/Tests/getstates',
            type: 'POST',
            data: {"business_unit_id": business_unit_id},
            success: function(data){
            var parsedata= JSON.parse(data);
            $("#dept").append(parsedata);
            },
            error: function(e) 
            {
                alert("An error occurred: " + e.responseText.message);
                console.log(e);
            }
        });
    });
    
    /*  for subdepartment   */
    $('#sub_dept').prop('disabled', true);
    $("#dept").change(function () {
        $('#sub_dept').prop('disabled', false);
        $('#sub_dept').children('option:not(:first)').remove();
        var business_unit_id1="";
        var department_id1="";
        $('#sub_dept').val('');
        //$('#sub_dept').find('option').remove().end().append('<option value="">Select</option>').val('whatever');
        
        business_unit_id1 = $('#bu_name').find(":selected").val();
        department_id1 = $('#dept').find(":selected").val();
        console.log("business_unit_id1 - "+business_unit_id1+"    department_id1 - "+department_id1);
        $.ajax({
            url: "<?= $s_dept_url; ?>",
            //url: '/cake3.6.4/Tests/getstates',
            type: 'POST',
            data: {"id": department_id1,"business_unit_id": business_unit_id1},
            success: function(data){
            var parsedata1= JSON.parse(data);
            $("#sub_dept").append(parsedata1);
            },
            error: function(e) 
            {
                alert("An error occurred: " + e.responseText.message);
                console.log(e);
            }
        });
    });
    
    
    /*  for Meeting with data   */
    $("#user_id").prop('disabled', true);
    $("#sub_dept").change(function () {
        console.log("sub_dept_ changed with increment");
        $("#user_id").prop('disabled', false);
        var business_unit_id1 = "";
        var department_id1 = "";
        var sub_department_id1 = "";
        $("#user_id").val('');
        //$('#sub_dept').find('option').remove().end().append('<option value="">Select</option>').val('whatever');

        business_unit_id1 = $("#bu_name").find(":selected").val();
        department_id1 = $("#dept").find(":selected").val();
        sub_department_id1 = $("#sub_dept").find(":selected").val();
        console.log("business_unit_id1 - " + business_unit_id1 + "    department_id1 - " + department_id1 + "    sub_department_id1 - " + sub_department_id1);
        $.ajax({
            url: "<?= $meeting_with_url; ?>",
            type: 'POST',
            data: {"business_unit_id": business_unit_id1, "department_id": department_id1, "sub_department_id": sub_department_id1},
            success: function (data) {
                var parsedata1 = JSON.parse(data);
                $("#user_id").append(parsedata1);
            },
            error: function (e)
            {
                alert("An error occurred: " + e.responseText.message);
                console.log(e);
            }
        });
    });
    
    /*for getting duration */
    $("#start_time").change(function () {
        getmeetingduration();
    });

    /*for getting duration */
    $("#end_time").change(function () {
        getmeetingduration();
    });
    
    
});



function getmeetingduration() {
        var start = $("#start_time").val();
        var end = $("#end_time").val();

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
        $("#duration").val(diffc);
    }
</script>