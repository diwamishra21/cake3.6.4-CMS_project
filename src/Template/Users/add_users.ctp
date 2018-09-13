
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
                <?php echo $this->Form->create('',['id' => "add_User"]);?>
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
                                    <label for="name" class="padding-top-md">User Name<span style="color: red">*</span></label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" id="username" name="username" class="form-control" > 
                                    <span id="check_username"></span>
                                </div>
                               
                            </div>
							
							<div class="form-group row">
                                <div class="col-md-3">
                                    <label for="level" class="padding-top-md">User Type<span style="color: red">*</span></label>
                                </div>
                                <div class="col-md-9">
                                    <select class="form-control" id="user_type" name="user_type">
                                        <option value="">Select</option>
                                        <?php foreach($roles as $roles){?>
                                        <option value=<?php echo $roles['id'];?> ><?php echo $roles['title']; ?></option>
                                        <?php }?>   
                                    </select>
                                     <span id="check_user_type"></span>
                                </div>
                            </div>
				<div class="form-group row">
                                <div class="col-md-3">
                                    <label for="level" class="padding-top-md">Authentication Method<span style="color: red">*</span></label>
                                </div>
                                <div class="col-md-9">
                                    <select class="form-control" id="auth_type" name="auth_type">
                                        <option value="">Select</option>
                                        <option value="Manual">Manual</option>
                                        <option value="Web Services">Web Services Authentication</option>
                                        <option value="Authenticate">Authentication</option>
                                        <option value="ADServer">AD Server</option>
                                        
                                    </select>
                                    <span id="check_auth_type"></span>
                                </div>
                            </div>
							
							<div class="form-group row">
                                <div class="col-md-3">
                                    <label for="name" class="padding-top-md">Password<span style="color: red">*</span></label>
                                </div>
                                <div class="col-md-9">
                                    <input type="password" id="password" name="password" class="form-control">
                                    <span id="check_password"></span>
                                </div>
                            </div>
							
							<div class="form-group row">
                                <div class="col-md-3">
                                    <label for="emp_id" class="padding-top-md">Employee ID<span style="color: red">*</span></label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" id="emp_id" name="emp_id" class="form-control" >
                                    <span id="check_emp_id"></span>
                                </div>
                            </div>
							

							
							<div class="form-group row">
                                <div class="col-md-3">
                                    <label for="name" class="padding-top-md">First Name<span style="color: red">*</span></label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" id="first_name" name="first_name" class="form-control" >
                                    <span id="check_first_name"></span>
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
                                    <label for="doj" class="padding-top-md">DOJ<span style="color: red">*</span></label>
                                </div>
                                <div class="col-md-9">
                                    <input type="date" id="doj" name="doj" class="form-control" >
                                    <span id="check_doj"></span>
                                </div>
                            </div>
							
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="emp_email" class="padding-top-md">Email<span style="color: red">*</span></label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" id="emp_email" name="email" class="form-control" >
                                    <span id="check_emp_email"></span>
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
                                    <label for="level" class="padding-top-md">City<span style="color: red">*</span></label>
                                </div>
                                <div class="col-md-9">
                                    <select class="form-control" id="city" name="city">
                                        <option value="">Select</option>
                                        <option value="Delhi">Delhi</option>
                                        <option value="Thane">Thane</option>
                                        <option value="Chennai">Chennai</option>
                                       
                                    </select>
                                    <span id="check_city"></span>
                                </div>
                            </div>
							
							<div class="form-group row">
                                <div class="col-md-3">
                                    <label for="level" class="padding-top-md">Country<span style="color: red">*</span></label>
                                </div>
                                <div class="col-md-9">
                                    <select class="form-control" id="country" name="country">
                                        <option value="">Select</option>
                                        <option value="India">India</option>
                                        <option value="USA">USA</option>
                                        <option value="Viyatnam">Viyatnam</option>
                                       
                                    </select>
                                    <span id="check_country"></span>
                                </div>
                            </div>
							
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="business" class="padding-top-md">Business Unit<span style="color: red">*</span></label>
                                </div>
                                <div class="col-md-9">
                                    <select class="form-control bu_name" id="businees_unit" name="businees_unit">
                                        <option value="">Select</option>
                                        <?php foreach($business_units as $bus){?>
                                        <option value=<?php echo $bus['id'];?> ><?php echo $bus['title']; ?></option>
                                        <?php }?>
                                    </select>
                                    <span id="check_businees_unit"></span>
                                    <!-- <input type="text" id="business" name="businees_unit" class="form-control" > -->
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="dept" class="padding-top-md">Department<span style="color: red">*</span></label>
                                </div>
                                <div class="col-md-9">
                                    <select  class="form-control dept" id="department" name="department">
                                         <option value="">Select</option>
                                     </select>
                                     <span id="check_department"></span>
                                    <!-- <input type="text" id="department" name="department" class="form-control" > -->
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="sub_dept" class="padding-top-md">Sub Department</label>
                                </div>
                                <div class="col-md-9">
                                    <select  class="form-control" id="sub_department" name="sub_department">
                                        <option value="">Select</option>
                                     </select>
                                   <!--  <input type="text" id="sub_department" name="sub_department" class="form-control" > -->
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="designation" class="padding-top-md">Designation<span style="color: red">*</span></label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" id="designation" name="designation" class="form-control" >
                                    <span id="check_designation"></span>
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
                                    <label for="spoc" class="padding-top-md">Manager Emp ID<span style="color: red">*</span></label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" id="manager_emp_id" name="manager_emp_id" class="form-control">
                                    <span id="check_manager_emp_id"></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="business_hr" class="padding-top-md">Manager Name<span style="color: red">*</span></label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" id="manager_name" name="manager_name" class="form-control">
                                    <span id="check_manager_name"></span>
                                </div>        
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="business_hr" class="padding-top-md">Manager Email<span style="color: red">*</span></label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" id="manager_email" name="manager_email" class="form-control">
                                    <span id="check_manager_email"></span>
                                </div>        
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="business_hr" class="padding-top-md">BHR Emp ID<span style="color: red">*</span></label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" id="bhr_emp_id" name="bhr_emp_id" class="form-control">
                                    <span id="check_bhr_emp_id"></span>
                                </div>        
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="business_hr" class="padding-top-md">BHR Name<span style="color: red">*</span></label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" id="bhr_name" name="bhr_name" class="form-control">
                                    <span id="check_bhr_name"></span>
                                </div>        
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="business_hr" class="padding-top-md">BHR Email<span style="color: red">*</span></label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" id="bhr_email" name="bhr_email" class="form-control">
                                    <span id="check_bhr_email"></span>
                                </div>        
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="onboard" class="padding-top-md">Onboard employee</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="checkbox" id="onboard" name="onboard">
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
<?php $username_url = $this->Url->build(['controller' => 'Users', 'action' => 'addUsers']); ?>

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
     var valid = false;
     var value = 0;
    $('#username').change(function(){
    var username = $('#username').val();
       // var valid = true;
    $.ajax({
            url: "<?= $username_url; ?>",
            //url: '/cake3.6.4/Tests/getstates',
            type: 'POST',
            data: {"username": username},
            success: function(data){
                console.log(data);
                if(data != '0')
                {
                // alert("Username  exist");
                $('#username').css('border','1px solid red');
                $('#check_username').text('username already exist');
                $('#check_username').addClass('error_label');
                       valid = false;
                       value = 1;
                 }
                 else{
                    $('#username').css('border','1px solid #cccccc');
                    $('#check_username').text('');
                    valid = true;
                    value = 0;
                 }

                    
            // var parsedata= JSON.parse(data);
            // $("#department").append(parsedata);
            },
            error: function(e) 
            {
                // alert("An error occurred: " + e.responseText.message);
                // console.log(e);
            }
        });

    })

    $('#emp_email').change(function(){
    var email = $('#emp_email').val();
       // var valid = true;
    $.ajax({
            url: "<?= $username_url; ?>",
            //url: '/cake3.6.4/Tests/getstates',
            type: 'POST',
            data: {"email": email},
            success: function(data){
                console.log(data);
                if(data != '0')
                {
                // alert("Username  exist");
                $('#emp_email').css('border','1px solid red');
                $('#check_emp_email').text('Email id already exist');
                $('#check_emp_email').addClass('error_label');
                  valid = false;
                  value = 1;
                 }
                 else{
                    $('#emp_email').css('border','1px solid #cccccc');
                    $('#check_emp_email').text('');
                    valid = true;
                    value = 0;
                 }

                    
            // var parsedata= JSON.parse(data);
            // $("#department").append(parsedata);
            },
            error: function(e) 
            {
                // alert("An error occurred: " + e.responseText.message);
                // console.log(e);
            }
        });

    })
    
    
    $('#adduser').click(function(){
    //   var valid = true;

     if(($('#username').val()!='') && (value == 1))
    {   
        $('#username').css('border','1px solid red');
        $('#check_username').text('Username already exist');
        $('#check_username').addClass('error_label');
        valid = false;
    }
    else {
        $('#username').css('border','1px solid #cccccc');
        $('#check_username').text('');
    }
   


    if($('#username').val()=='')
    {   
        $('#username').css('border','1px solid red');
        $('#check_username').text('Please enter username');
        $('#check_username').addClass('error_label');
        valid = false;
    }
    else {
        $('#username').css('border','1px solid #cccccc');
        $('#check_username').text('');
    }

   
    if($('#user_type').val()=='')
    {
        $('#user_type').css('border','1px solid red');
        $('#check_user_type').text('Please select usertype');
        $('#check_user_type').addClass('error_label');
        valid = false;

    }
    else
    {
        $('#user_type').css('border','1px solid #cccccc');
        $('#check_user_type').text('');


    }
    if($('#auth_type').val()=='')
    {
        $('#auth_type').css('border','1px solid red');
        $('#check_auth_type').text('Please select authentication type');
        $('#check_auth_type').addClass('error_label');
        valid = false;

    }
    else
    {
        $('#auth_type').css('border','1px solid #cccccc');
        $('#check_auth_type').text('');


    }
    if($('#password').val()=='')
    {
        $('#password').css('border','1px solid red');
        $('#check_password').text('Please enter password');
        $('#check_password').addClass('error_label');
        valid = false;

    }
    else
    {
        $('#password').css('border','1px solid #cccccc');
        $('#check_password').text('');


    }
    if($('#emp_id').val()=='')
    {
        $('#emp_id').css('border','1px solid red');
        $('#check_emp_id').text('Please enter employee id');
        $('#check_emp_id').addClass('error_label');
        valid = false;

    }
    else
    {
        $('#emp_id').css('border','1px solid #cccccc');
        $('#check_emp_id').text('');


    }
    if($('#first_name').val()=='')
    {
        $('#first_name').css('border','1px solid red');
        $('#check_first_name').text('Please enter first name');
        $('#check_first_name').addClass('error_label');
        valid = false;

    }
    else
    {
        $('#first_name').css('border','1px solid #cccccc');
        $('#check_first_name').text('');


    }
    if($('#doj').val()=='')
    {
        $('#doj').css('border','1px solid red');
        $('#check_doj').text('Please enter doj');
        $('#check_doj').addClass('error_label');
        valid = false;

    }
    else
    {
        $('#doj').css('border','1px solid #cccccc');
        $('#check_doj').text('');


    }

    if(($('#emp_email').val()!='') && (value == 1))
    {
        $('#emp_email').css('border','1px solid red');
        $('#check_emp_email').text('Email id already exist');
        $('#check_emp_email').addClass('error_label');
        valid = false;

    }
    else
    {
        $('#emp_email').css('border','1px solid #cccccc');
        $('#check_emp_email').text('');


    }
    if($('#emp_email').val()=='')
    {
        $('#emp_email').css('border','1px solid red');
        $('#check_emp_email').text('Please enter email id');
        $('#check_emp_email').addClass('error_label');
        valid = false;

    }
    else
    {
        $('#emp_email').css('border','1px solid #cccccc');
        $('#check_emp_email').text('');


    }
    
    if($('#city').val()=='')
    {
        $('#city').css('border','1px solid red');
        $('#check_city').text('Please select city');
        $('#check_city').addClass('error_label');
        valid = false;

    }
    else
    {
        $('#city').css('border','1px solid #cccccc');
        $('#check_city').text('');


    }
    if($('#country').val()=='')
    {
        $('#country').css('border','1px solid red');
        $('#check_country').text('Please select country');
        $('#check_country').addClass('error_label');
        valid = false;

    }
    else
    {
        $('#country').css('border','1px solid #cccccc');
        $('#check_country').text('');


    }
    if($('#businees_unit').val()=='')
    {
        $('#businees_unit').css('border','1px solid red');
        $('#check_businees_unit').text('Please select business unit');
        $('#check_businees_unit').addClass('error_label');
        valid = false;

    }
    else
    {
        $('#businees_unit').css('border','1px solid #cccccc');
        $('#check_businees_unit').text('');


    }
    if($('#department').val()=='')
    {
        $('#department').css('border','1px solid red');
        $('#check_department').text('Please enter department');
        $('#check_department').addClass('error_label');
        valid = false;

    }
    else
    {
        $('#department').css('border','1px solid #cccccc');
        $('#check_department').text('');


    }
    if($('#designation').val()=='')
    {
        $('#designation').css('border','1px solid red');
        $('#check_designation').text('Please enter designation');
        $('#check_designation').addClass('error_label');
        valid = false;

    }
    else
    {
        $('#designation').css('border','1px solid #cccccc');
        $('#check_designation').text('');


    }
    if($('#manager_emp_id').val()=='')
    {
        $('#manager_emp_id').css('border','1px solid red');
        $('#check_manager_emp_id').text('Please enter manager employee id');
        $('#check_manager_emp_id').addClass('error_label');
        valid = false;

    }
    else
    {
        $('#manager_emp_id').css('border','1px solid #cccccc');
        $('#check_manager_emp_id').text('');


    }
    if($('#manager_email').val()=='')
    {
        $('#manager_email').css('border','1px solid red');
        $('#check_manager_email').text('Please enter manager email id');
        $('#check_manager_email').addClass('error_label');
        valid = false;

    }
    else
    {
        $('#manager_email').css('border','1px solid #cccccc');
        $('#check_manager_email').text('');


    }
    if($('#manager_name').val()=='')
    {
        $('#manager_name').css('border','1px solid red');
        $('#check_manager_name').text('Please enter manager name');
        $('#check_manager_name').addClass('error_label');
        valid = false;

    }
    else
    {
        $('#manager_name').css('border','1px solid #cccccc');
        $('#check_manager_name').text('');


    }
    if($('#bhr_emp_id').val()=='')
    {
        $('#bhr_emp_id').css('border','1px solid red');
        $('#check_bhr_emp_id').text('Please enter bhr employee id');
        $('#check_bhr_emp_id').addClass('error_label');
        valid = false;

    }
    else
    {
        $('#bhr_emp_id').css('border','1px solid #cccccc');
        $('#check_bhr_emp_id').text('');


    }
    if($('#bhr_email').val()=='')
    {
        $('#bhr_email').css('border','1px solid red');
        $('#check_bhr_email').text('Please enter bhr email id');
        $('#check_bhr_email').addClass('error_label');
        valid = false;

    }
    else
    {
        $('#bhr_email').css('border','1px solid #cccccc');
        $('#check_bhr_email').text('');


    }
    if($('#bhr_name').val()=='')
    {
        $('#bhr_name').css('border','1px solid red');
        $('#check_bhr_name').text('Please enter bhr name');
        $('#check_bhr_name').addClass('error_label');
        valid = false;

    }
    else
    {
        $('#bhr_name').css('border','1px solid #cccccc');
        $('#check_bhr_name').text('');


    }


    if(valid == true)
    {
     $('#add_User').submit();
    }
    else
    {
      return false;
    }



    });
    
});
</script>



        