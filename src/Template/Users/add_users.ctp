
<div class="container-fluid container-padding-top">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 bg-white margin-bottom-xl">
            <div class="padding-md">
                <div class="text-center">
                    <h3>Add Users/Joinee </h3>
                </div>
                </div>
                <hr/>
                <div class="<?php echo @$class; ?>">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close"><?php echo @$close; ?></a>
                   <i class="<?php echo @$iclass; ?>"></i><?php echo @$sucessful; ?>.
                </div>
  <div class="" id="add_user" >
                <?php echo $this->Form->create();?>
                <form id="employee_joining">
                    <div class="row margin-top-lg">
                        <div class="col-sm-4 col-sm-push-8">
                           <!-- <div class="profile-image">
                                <img src="http://via.placeholder.com/200x200" alt="profile">
                            </div> -->
                        </div>
                      
                        <div class="col-sm-8 col-sm-pull-4">
                            
							
							
							<div class="form-group row">
                                <div class="col-md-3">
                                    <label for="name" class="padding-top-md">User Name</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" id="username" name="username" class="form-control" >
                                </div>
                            </div>
							
							<div class="form-group row">
                                <div class="col-md-3">
                                    <label for="level" class="padding-top-md">User Type</label>
                                </div>
                                <div class="col-md-9">
                                    <select class="form-control" id="user_type" name="user_type">
                                        <option >Select</option>
                                        <option value="1">Admin</option>
                                        <option value="2">Supervisor</option>
                                        <option value="3">SPOC</option>
                                        <option value="4">Employee</option>    
                                    </select>
                                </div>
                            </div>
				<div class="form-group row">
                                <div class="col-md-3">
                                    <label for="level" class="padding-top-md">Authentication Method</label>
                                </div>
                                <div class="col-md-9">
                                    <select class="form-control" id="auth_type" name="auth_type">
                                        <option >Select</option>
                                        <option value="Manual">Manual</option>
                                        <option value="Web Services">Web Services Authentication</option>
                                        <option value="Authenticate">Authentication</option>
                                        <option value="ADServer">AD Server</option>
                                        
                                    </select>
                                </div>
                            </div>
							
							<div class="form-group row">
                                <div class="col-md-3">
                                    <label for="name" class="padding-top-md">Password</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="password" id="password" name="password" class="form-control">
                                </div>
                            </div>
							
							<div class="form-group row">
                                <div class="col-md-3">
                                    <label for="emp_id" class="padding-top-md">Employee ID</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" id="emp_id" name="emp_id" class="form-control" >
                                </div>
                            </div>
							

							
							<div class="form-group row">
                                <div class="col-md-3">
                                    <label for="name" class="padding-top-md">First Name</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" id="first_name" name="first_name" class="form-control" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="name" class="padding-top-md">Last Name</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" id="last_name" name="last_name" class="form-control" >
                                </div>
                            </div>
							
							  <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="doj" class="padding-top-md">DOJ</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="date" id="doj" name="doj" class="form-control" >
                                </div>
                            </div>
							
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="emp_email" class="padding-top-md">Email</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" id="emp_email" name="email" class="form-control" >
                                </div>
                            </div>
							
							 <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="emp_email" class="padding-top-md">Mobile</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" id="mobile" name="mobile" class="form-control" >
                                    <input type="hidden" id="status" name="status" value="1" class="form-control" >
                                </div>
                            </div>
							
				<div class="form-group row">
                                <div class="col-md-3">
                                    <label for="level" class="padding-top-md">City</label>
                                </div>
                                <div class="col-md-9">
                                    <select class="form-control" id="city" name="city">
                                        <option >Select</option>
                                        <option value="Delhi">Delhi</option>
                                        <option value="Thane">Thane</option>
                                        <option value="Chennai">Chennai</option>
                                       
                                    </select>
                                </div>
                            </div>
							
							<div class="form-group row">
                                <div class="col-md-3">
                                    <label for="level" class="padding-top-md">Country</label>
                                </div>
                                <div class="col-md-9">
                                    <select class="form-control" id="country" name="country">
                                        <option >Select</option>
                                        <option value="India">India</option>
                                        <option value="USA">USA</option>
                                        <option value="Viyatnam">Viyatnam</option>
                                       
                                    </select>
                                </div>
                            </div>
							
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="business" class="padding-top-md">Business Unit</label>
                                </div>
                                <div class="col-md-9">
                                    <select required class="form-control bu_name" id="businees_unit" name="businees_unit">
                                        <option value="">Select</option>
                                        <?php foreach($business_units as $bus){?>
                                        <option value=<?php echo $bus['id'];?> ><?php echo $bus['title']; ?></option>
                                        <?php }?>
                                    </select>
                                    <!-- <input type="text" id="business" name="businees_unit" class="form-control" > -->
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="dept" class="padding-top-md">Department</label>
                                </div>
                                <div class="col-md-9">
                                    <select required class="form-control dept" id="department" name="department">
                                         <option value="">Select</option>
                                     </select>
                                    <!-- <input type="text" id="department" name="department" class="form-control" > -->
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="sub_dept" class="padding-top-md">Sub Department</label>
                                </div>
                                <div class="col-md-9">
                                    <select required class="form-control" id="sub_department" name="sub_department">
                                        <option value="">Select</option>
                                     </select>
                                   <!--  <input type="text" id="sub_department" name="sub_department" class="form-control" > -->
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="designation" class="padding-top-md">Designation</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" id="designation" name="designation" class="form-control" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="supervisor" class="padding-top-md">Band</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" id="band" name="band" class="form-control" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="spoc" class="padding-top-md">Manager Emp ID</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" id="manager_emp_id" name="manager_emp_id" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="business_hr" class="padding-top-md">Manager Name</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" id="manager_name" name="manager_name" class="form-control">
                                </div>        
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="business_hr" class="padding-top-md">Manager Email</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" id="manager_email" name="manager_email" class="form-control">
                                </div>        
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="business_hr" class="padding-top-md">BHR Emp ID</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" id="bhr_emp_id" name="bhr_emp_id" class="form-control">
                                </div>        
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="business_hr" class="padding-top-md">BHR Name</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" id="bhr_name" name="bhr_name" class="form-control">
                                </div>        
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="business_hr" class="padding-top-md">BHR Email</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" id="bhr_email" name="bhr_email" class="form-control">
                                </div>        
                            </div>
                        
                    </div>
                    <div class="col-xs-12 padding-bottom-lg text-center margin-top-lg">
                        <button type="reset" class="btn btn-primary padding-left-lg padding-right-lg">Reset</button>
                        <button type="submit" class="btn btn-danger padding-left-lg padding-right-lg" id="adduser">Add</button>
                    </div>
                <?php echo $this->Form->end();?>
            </div>
        </div>
    </div>
</div>

<script src="./js/jquery-1.12.4.js"></script>
<script src="./js/jquery-ui.js"></script>
<?php echo $this->Html->script(['jquery-1.12.4', 'bootstrap.min', 'sidebar','jquery-ui','dashboard','chart.min','guage']); ?>
<?php $dept_url = $this->Url->build(['controller' => 'Users', 'action' => 'getdepartments']); ?>
<?php $s_dept_url = $this->Url->build(['controller' => 'Users', 'action' => 'getsubdepartments']); ?>
<script type="text/javascript">
$(document).ready(function() {
    /*  for department   */
    $('#department').prop('disabled', true);
    $("#businees_unit").change(function () {
        $('#sub_department').children('option:not(:first)').remove();
        $('#department').children('option:not(:first)').remove();
        $('#department').prop('disabled', false);
        var business_unit_id ="";
        $('#department').val('');
        $('#sub_department').val('');
        business_unit_id = $('#businees_unit').find(":selected").val();
        $.ajax({
            url: "<?= $dept_url; ?>",
            //url: '/cake3.6.4/Tests/getstates',
            type: 'POST',
            data: {"business_unit_id": business_unit_id},
            success: function(data){
            var parsedata= JSON.parse(data);
            $("#department").append(parsedata);
            },
            error: function(e) 
            {
                alert("An error occurred: " + e.responseText.message);
                console.log(e);
            }
        });
    });

// geting sub department on the basis of department
    $('#sub_department').prop('disabled', true);
    $("#department").change(function () {
        $('#sub_department').prop('disabled', false);
        $('#sub_department').children('option:not(:first)').remove();
        var business_unit_id1="";
        var department_id1="";
        $('#sub_department').val('');
        //$('#sub_dept').find('option').remove().end().append('<option value="">Select</option>').val('whatever');
        
        business_unit_id1 = $('#businees_unit').find(":selected").val();
        department_id1 = $('#department').find(":selected").val();
        $.ajax({
            url: "<?= $s_dept_url; ?>",
            //url: '/cake3.6.4/Tests/getstates',
            type: 'POST',
            data: {"id": department_id1,"business_unit_id": business_unit_id1},
            success: function(data){
            var parsedata1= JSON.parse(data);
            $("#sub_department").append(parsedata1);
            },
            error: function(e) 
            {
                alert("An error occurred: " + e.responseText.message);
                console.log(e);
            }
        });
    });
    
});
</script>



        