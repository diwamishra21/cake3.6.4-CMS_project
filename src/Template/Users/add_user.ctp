<?php $search_url  = $this->Url->build(['controller'=>'Users' ,'action'=>'searchuser']); ?>
<style>

.info-msg,
.success-msg,
.warning-msg,
.error-msg {
  margin: 10px 0;
  padding: 10px;
  border-radius: 3px 3px 3px 3px;
}
.info-msg {
  color: #059;
  background-color: #BEF;
}
.success-msg {
  color: #270;
  background-color: #DFF2BF;
}
.warning-msg {
  color: #9F6000;
  background-color: #FEEFB3;
}
.error-msg {
  color: #D8000C;
  background-color: #FFBABA;
}

</style>


<div class="container-fluid container-padding-top">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 bg-white margin-bottom-xl">
            <div class="padding-md">
                <div class="text-center">
                    <h3>Add Users / Joinee </h3>
                </div>
              <div class="row margin-top-xl" >
                    <div class="col-md-6 col-md-offset-3">
					 <?php //echo $this->Form->create('Users',['url' => ['controller' => 'Users', 'action' => 'searchuser']]);?>
					  <?php echo $this->Form->create('Users');?>
                        <div class="form-group">
                            <div class="input-group">
							 <?php echo $this->Form->input('search',(['label'=>false,'type'=>'text','name' => 'search','id' => 'search','placeholder'=>'Search by Emp Id / Email Id / DOJ','class' => 'form-control' ,'required']));?>
                              
                                <span class="input-group-btn">
                                      <button class="btn btn-secondary" onclick="return ajaxsearch();" type="button"><i class="fa fa-search"></i></button>
                                  </span>
                            </div>
                        </div>
						 <?php echo $this->Form->end();?>
						
                    </div>
                </div>
                <hr/>
				<div class="col-md-12 col-md-offset-1">
				<div class="warning-msg" id="error" style="display:none;">
				
				 <i class="fa fa-warning"></i>
                                 <span id="err"> </span>
</div>
				<div class="info-msg" id="alreadyonboarding" style="display:none;">
				 <i class="fa fa-info"></i>
 Employee is already onboarded.
</div>
<?php $flash_message= $this->Flash->render() ?>
<?php if(!empty(@$flash_message)){ ?>
				<div class="success-msg" id="success" style="">
				 <i class="fa fa-check"></i>
                   Employee is successfully  onboarded.
</div>
<?php } ?>	
				 
  
  <div class="" id="add_user" style="display:none;">
                <?php echo $this->Form->create('Users',['url' => ['controller' => 'Users', 'action' => 'updatesearchuser']]);?>
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
                                    <input type="text" id="username" name="username" class="form-control" readonly>
                                </div>
                            </div>
							
							<div class="form-group row">
                                <div class="col-md-3">
                                    <label for="level" class="padding-top-md">User Type</label>
                                </div>
                                <div class="col-md-9">
								  <input type="text" id="user_type" name="user_type" class="form-control" readonly>
								
                                    
                                </div>
                            </div>
				<div class="form-group row">
                                <div class="col-md-3">
                                    <label for="level" class="padding-top-md">Authentication Method</label>
                                </div>
                                <div class="col-md-9">
								<input type="text" id="auth_type" name="auth_type" class="form-control" readonly>
								
                                   
                                </div>
                            </div>
							
							
							
							<div class="form-group row">
                                <div class="col-md-3">
                                    <label for="emp_id" class="padding-top-md">Employee ID</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" id="emp_id" name="emp_id" class="form-control"  readonly>
                                </div>
                            </div>
							

							
							<div class="form-group row">
                                <div class="col-md-3">
                                    <label for="name" class="padding-top-md">First Name</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" id="first_name" name="first_name" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="name" class="padding-top-md">Last Name</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" id="last_name" name="last_name" class="form-control" readonly>
                                </div>
                            </div>
							
							  <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="doj" class="padding-top-md">DOJ</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="date" id="doj" name="doj" class="form-control" readonly>
                                </div>
                            </div>
							
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="emp_email" class="padding-top-md">Email</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" id="email" name="email" class="form-control" readonly>
                                </div>
                            </div>
							
							 <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="emp_email" class="padding-top-md">Mobile</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" id="mobile" name="mobile" class="form-control" readonly>
                                </div>
                            </div>
							
				<div class="form-group row">
                                <div class="col-md-3">
                                    <label for="level" class="padding-top-md">City</label>
                                </div>
                                <div class="col-md-9">
								 <input type="text" id="city" name="city" class="form-control" readonly>
                                   
                                </div>
                            </div>
							
							<div class="form-group row">
                                <div class="col-md-3">
                                    <label for="level" class="padding-top-md">Country</label>
                                </div>
                                <div class="col-md-9">
								 <input type="text" id="country" name="country" class="form-control" readonly>
                                    
                                </div>
                            </div>
							
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="business" class="padding-top-md">Business Unit</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" id="businees_unit" name="businees_unit" class="form-control"  readonly>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="dept" class="padding-top-md">Department</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" id="department" name="department" class="form-control"  readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="sub_dept" class="padding-top-md">Sub Department</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" id="sub_department" name="sub_department" class="form-control"  readonly>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="designation" class="padding-top-md">Designation</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" id="designation" name="designation" class="form-control"  readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="supervisor" class="padding-top-md">Band</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" id="band" name="band" class="form-control"  readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="spoc" class="padding-top-md">Manager Emp ID</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" id="manager_emp_id" name="manager_emp_id" class="form-control"  readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="business_hr" class="padding-top-md">Business HR</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" id="bhr_emp_id" name="bhr_emp_id" class="form-control"  readonly>
                                </div>
                            </div>
                        </div>
                        
                    </div>
				
					<span id="ob_status" ></span>
				<div id="update_obstatus">
				 <input type="hidden" id="" name="ob_status" class="form-control" value="1">
				 
                    <div class="col-xs-12 padding-bottom-lg text-center margin-top-lg">
                    <button type="submit" class="btn btn-danger padding-left-lg padding-right-lg" id="adduser">Add</button>
                    </div>
					</div>
                <?php echo $this->Form->end();?>
            </div>
			
		
			
			
        </div>
    </div>
	<br><br><br><br><br><br><br><br><br><br><br><br>
</div>

<?php echo $this->Html->script(['jquery-1.12.4', 'bootstrap.min', 'sidebar','jquery-ui','dashboard','chart.min','guage']); ?>


<script>
function ajaxsearch(){	
var search=$('#search').val();
if(search === ''){
    $('#err').html('Please enter Emp Id / Email Id / DOJ');
    $('#error').show();
	$('#add_user').hide();
	$('#alreadyonboarding').hide();
	$('#success').hide();
    return false;
}
$.ajax({
    url:'<?= $search_url ?>',
    data:{'search':search},
    method:'POST',
    success:function(data){
    
	if(data){
		result = JSON.parse(data);
		$('#username').val(result[0].username);
		$('#user_type').val(result[0].user_type);
		$('#auth_type').val(result[0].auth_type);
		
		$('#emp_id').val(result[0].emp_id);
		$('#first_name').val(result[0].first_name);
		$('#last_name').val(result[0].last_name);
		$('#doj').val(result[0].doj);
			$('#email').val(result[0].email);
		$('#mobile').val(result[0].mobile);
		$('#city').val(result[0].city);
		$('#country').val(result[0].country);
		$('#businees_unit').val(result[0].businees_unit);
		$('#department').val(result[0].department);
		$('#sub_department').val(result[0].sub_department);
		
		$('#designation').val(result[0].designation);
		$('#band').val(result[0].band);
		$('#manager_emp_id').val(result[0].manager_emp_id);
		$('#bhr_emp_id').val(result[0].bhr_emp_id);
		
		if( result[0].ob_status == 1){
			$('#update_obstatus').hide();
			$('#alreadyonboarding').show();
		$('#success').hide();
			$('#error').hide();
			
		}
		
		if( result[0].ob_status == '' || result[0].ob_status == null){
			$('#update_obstatus').show();
			$('#alreadyonboarding').hide();
		$('#success').hide();
			$('#error').hide();
			
		}
		
		$('#add_user').show();
				$('#error').hide();
		
	}
	else {
		$('#add_user').hide();
		$('#success').hide();
                $('#err').html('Record not found ');
		$('#error').show();
		
		$('#alreadyonboarding').hide();
		
	}
	
   
    }
	});

}			
        </script>



        