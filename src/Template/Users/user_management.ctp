
<aside data-sidebar>
    <div class="padding-bottom-md container-fluid">
        <div class="row">
            <div class="col-xs-12 bg-dark">
                <div class="padding-md">
                    <div class="panel-close-btn" data-sidebar-button><i class="fa fa-times fa-lg text-white"></i></div>
                    <h3 class="margin-0">Update user details</h3>
                </div>
            </div>
            <div class="col-xs-12 margin-top-md">
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="username" class="padding-top-md">Username</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" id="username" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="usertype" class="padding-top-md">Usertype</label>
                                </div>
                                <div class="col-md-9">
                                    <select class="form-control" id="user_type" name="user_type"> 
                                        <?php foreach($roles as $roles){?>
                                        <option value=<?php echo $roles['id'];?> ><?php echo $roles['title']; ?></option>
                                        <?php }?>   
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="authmethod" class="padding-top-md">Authentication method</label>
                                </div>
                                <div class="col-md-9">
                                    <select class="form-control" id="authmethod" name="authmethod">
                                        <option value="Manual">Manual</option>
                                        <option value="Web Services">Web Services Authentication</option>
                                        <option value="Authenticate">Authentication</option>
                                        <option value="ADServer">AD Server</option>
                                        
                                    </select>
                                </div>
                            </div>
                        </div>
                          <div class="col-md-6">
                            <div class="form-group row">
                                <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="empid" class="padding-top-md">Employee ID</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" id="empid" name="empid" class="form-control">
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                     <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="frstname" class="padding-top-md">First name</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" id="frstname" name="frstname" class="form-control">
                                </div>
                            </div>
                        </div>
                          <div class="col-md-6">
                            <div class="form-group row">
                                <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="lstname" class="padding-top-md">Last name</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" id="lstname" name="lstname" class="form-control">
                                </div>
                            </div>
                            </div>
                        </div>  
                    </div>
                     <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="doj" class="padding-top-md">DOJ</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="doj" id="doj" name="doj" class="form-control">
                                </div>
                            </div>
                        </div>
                          <div class="col-md-6">
                            <div class="form-group row">
                                <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="email" class="padding-top-md">Email</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" id="email" name="email" class="form-control">
                                </div>
                            </div>
                            </div>
                        </div>  
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="mobile" class="padding-top-md">Mobile</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" id="mobile" name="mobile" class="form-control">
                                </div>
                            </div>
                        </div>
                          <div class="col-md-6">
                            <div class="form-group row">
                                <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="city" class="padding-top-md">City</label>
                                </div>
                                <div class="col-md-9">
                                     <select class="form-control" id="city" name="city">
                                       <option value="Delhi">Delhi</option>
                                        <option value="Thane">Thane</option>
                                        <option value="Chennai">Chennai</option>
                                       
                                    </select>
                                </div>
                            </div>
                            </div>
                        </div>  
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="country" class="padding-top-md">Country</label>
                                </div>
                                <div class="col-md-9">
                                     <select class="form-control" id="country" name="country">
                                        <option value="India">India</option>
                                        <option value="USA">USA</option>
                                        <option value="Viyatnam">Viyatnam</option>
                                       
                                    </select>
                                </div>
                            </div>
                        </div>
                          <div class="col-md-6">
                            <div class="form-group row">
                                <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="bu" class="padding-top-md">Business Unit</label>
                                </div>
                                <div class="col-md-9">
                                    <select required class="form-control bu_name" id="bu" name="bu">
                                        <?php foreach($business_units as $bus){?>
                                        <option value=<?php echo $bus['id'];?> ><?php echo $bus['title']; ?></option>
                                        <?php }?>
                                    </select>
                                </div>
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
                                    <select required class="form-control bu_name" id="dept" name="dept">

                                        <?php foreach($departments as $departments){?>
                                        <option value=<?php echo $departments['id'];?> ><?php echo $departments['title']; ?></option>
                                        <?php }?>
                                    </select>
                                </div>
                            </div>
                        </div>
                          <div class="col-md-6">
                            <div class="form-group row">
                                <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="subdept" class="padding-top-md">Sub Department</label>
                                </div>
                                <div class="col-md-9">
                                    <select required class="form-control bu_name" id="subdept" name="subdept">
                                        <?php foreach($sub_departments as $sub_departments){?>
                                        <option value=<?php echo $sub_departments['id'];?> ><?php echo $sub_departments['title']; ?></option>
                                        <?php }?>
                                    </select>
                                </div>
                            </div>
                            </div>
                        </div>  
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="designation" class="padding-top-md">Designation</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" id="designation" name="designation" class="form-control">
                                </div>
                            </div>
                        </div>
                          <div class="col-md-6">
                            <div class="form-group row">
                                <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="band" class="padding-top-md">Band</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" id="band" name="band" class="form-control">
                                </div>
                            </div>
                            </div>
                        </div>  
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="manager_emp_id" class="padding-top-md">Manager Emp ID</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" id="manager_emp_id" name="manager_emp_id" class="form-control">
                                </div>
                            </div>
                        </div>
                          <div class="col-md-6">
                            <div class="form-group row">
                                <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="business_hr" class="padding-top-md">Business HR</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" id="business_hr" name="business_hr" class="form-control">
                                    <input type="hidden" id="id" name="id" class="form-control">
                                </div>
                            </div>
                            </div>
                        </div>  
                    </div>

                    <hr/>
                    <div class="col-xs-12 padding-bottom-lg text-center margin-top-lg">
                        <button type=""  data-sidebar-button class="btn btn-primary padding-left-lg padding-right-lg">Close</button>
                        <button type="button" class="btn btn-danger padding-left-lg padding-right-lg" id="adduser">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</aside>
<div class="overlay" data-sidebar-overlay></div>

<div class="container-fluid container-padding-top">
    <div class="row">
        <div class="col-md-4">
            <?php $adduser= $this->Url->build(['controller' => 'Users', 'action' => 'addUsers']);
            $uploaduser= $this->Url->build(['controller' => 'Users', 'action' => 'uploadUsersByExcel']); ?>
            <a href="<?= $adduser; ?>" class="btn btn-danger btn-sm"><i class="fa fa-plus"></i> Add</a>
            <a href="<?= $uploaduser; ?>" class="btn btn-danger btn-sm"><i class="fa fa-plus"></i> Upload Excel File</a>
        </div>
        <div class="col-md-4 text-center">
            <h4 class="margin-0 padding-top-xs">Manage Users</h4>
        </div>
     <div class="col-xs-12 margin-top-lg ">

            <table class="table table-striped" id="report_table" >
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Date Of Joinee</th>
                    <th>Employee ID</th>
                    <th>Department</th>
                    <th>Supervisor Name</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    
               <?php foreach($userrecord as $userrecords ){ ?>
                <tr>
                    <td><?php echo $userrecords['first_name'] ?> <?php echo $userrecords['last_name'] ?></td>
                    <td><?php $orgdate = $userrecords['doj'];  $date = date("M d Y", strtotime($orgdate)); echo $date; ?></td>
                    <td><?php echo $userrecords['emp_id'] ?></td>
                     <td><?php echo $userrecords['department'] ?></td>
                    <td><?php echo $userrecords['supervisor_name'] ?></td>
                    <td>
                        
                        <button class="btn btn-danger btn-sm" data-sidebar-button onclick="return editdata('<?php echo $userrecords['id'];?>')"><i class="fa fa-pencil"></i> Edit</button>
                        <?php if($userrecords['status'] == '1'){ ?>
                   <button class="btn btn-primary btn-sm"onclick="return inactiveuser('<?php echo $userrecords['id'];?>')"><i class="fa fa-trash-o"></i> Inactive</button>
                 <?php  }else{ ?>
                 <button class="btn btn-primary btn-sm"onclick="return activeuser('<?php echo $userrecords['id'];?>')"><i class="fa fa-trash-o"></i> Active</button>
                 <?php } ?>
                    </td>
                </tr> 
                <?php } ?>
                
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php echo $this->Html->script(['jquery-1.12.4', 'bootstrap.min', 'sidebar','jquery-ui','user-management']); ?>
<?php $url_userdetail = $this->Url->build(['controller' => 'Users', 'action' => 'userManagement']); ?>
<?php $update_userdetail = $this->Url->build(['controller' => 'Users', 'action' => 'addUser']); ?>
<?php $deleteuser = $this->Url->build(['controller' => 'Users', 'action' => 'deleteuser']); 
?>
<?php $dept_url = $this->Url->build(['controller' => 'Users', 'action' => 'getdepartments']); ?>
<?php $s_dept_url = $this->Url->build(['controller' => 'Users', 'action' => 'getsubdepartments']); ?>
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

    $('#dept').prop('disabled', true);
    $("#bu").change(function () {
        $('#dept').prop('disabled', false);
        $('#dept').children('option:not(:first)').remove();
        $('#subdept').children('option:not(:first)').remove();
        var business_unit_id ="";
        $('#dept').html('');
        $('#subdept').html('');
        business_unit_id = $('#bu').find(":selected").val();
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



    $('#subdept').prop('disabled', true);
    $("#dept").change(function () {
        $('#subdept').prop('disabled', false);
        $('#subdept').children('option:not(:first)').remove();
        var business_unit_id1="";
        var department_id1="";
        $('#subdept').html('');
        
        business_unit_id1 = $('#bu').find(":selected").val();
        department_id1 = $('#dept').find(":selected").val();
        console.log("business_unit_id1 - "+business_unit_id1+"    department_id1 - "+department_id1);
        $.ajax({
            url: "<?= $s_dept_url; ?>",
            //url: '/cake3.6.4/Tests/getstates',
            type: 'POST',
            data: {"id": department_id1,"business_unit_id": business_unit_id1},
            success: function(data){
                console.log(data);
            var parsedata1= JSON.parse(data);
            $("#subdept").append(parsedata1);
            },
            error: function(e) 
            {
                alert("An error occurred: " + e.responseText.message);
                console.log(e);
            }
        });
    });


</script>
<script>
    $('[data-toggle="tooltip"]').tooltip();


    function editdata(id)
{   
    $.ajax({
        type:"POST",
        url: "<?= $url_userdetail; ?>",
        data:{'id':id},
        success : function(data) {
           data = JSON.parse(data);
           var extract_date = data[0].doj.substring(0,10);
           var stringdate = new Date(extract_date);
           var date = stringdate.toLocaleDateString();
           $('#user_type').val(data[0].user_type);
           $('#username').val(data[0].username);
           $('#empid').val(data[0].emp_id);
           $('#frstname').val(data[0].first_name);
           $('#lstname').val(data[0].last_name);
           $('#doj').val(date); 
           $('#email').val(data[0].email);
           $('#mobile').val(data[0].mobile);
           $('#city').val(data[0].city);
           $('#state').val(data[0].state);
           $('#country').val(data[0].country);
           $('#bu').val(data[0].businees_unit);
           $('#dept').val(data[0].department);
           $('#subdept').val(data[0].sub_department);
           $('#designation').val(data[0].designation);
           $('#authmethod').val(data[0].auth_type);
           $('#id').val(data[0].id);
           $('#band').val(data[0].band);
           $('#manager_emp_id').val(data[0].manager_emp_id);
           $('#business_hr').val(data[0].bhr_emp_id);
           
        },
        error : function() {
           
           
        }
    });

    }

    $('#adduser').click(function(){
    
        var username = $('#username').val();
        var user_type = $('#user_type').val();
        var id       = $('#id').val();
        var first_name = $('#frstname').val();
        var last_name  = $('#lstname').val();
        var doj        = $('#doj').val();
        var emp_id     = $('#empid').val();
        var email      = $('#email').val();
        var city       = $('#city').val();
        var state      = $('#state').val();
        var country    = $('#country').val();
        var bu         = $('#bu').val();
        var department = $('#dept').val();
        var sub_department = $('#subdept').val();
        var designation = $('#designation').val();
        var auth_type = $('#authmethod').val();
        var mobile = $('#mobile').val();
        var band = $('#band').val();
        var manager_emp_id = $('#manager_emp_id').val();
        var bhr_emp_id = $('#business_hr').val();

        $.ajax({
            type:"POST",
            url: "<?= $update_userdetail; ?>",
            data: {
               username : username,
               user_type : user_type,
               id       : id,
               first_name : first_name,
               last_name  : last_name,
               doj     : doj,
               emp_id  : emp_id,
               email   : email,
               city    : city,
               country : country,
               auth_type : auth_type,
               mobile : mobile,
               department : department,
               sub_department : sub_department,
               designation : designation,
               businees_unit : bu,
               bhr_emp_id : bhr_emp_id,
               manager_emp_id : manager_emp_id,
               band : band,

           },



                   success : function(data) {
                      alert("Records Updated Sucessfully");
                     location.reload();
                 // alert(data);
                       },
                     error : function() {
                   //alert("Value NOT reaching to controller ");
                   
                      } 

   });

    });

 function inactiveuser(id)
 {  
    var status = 0;
    $.ajax({
    type:"POST",
        url: "<?= $deleteuser; ?>",
        data:{'id':id,
               'status' : status
               },
        success : function(data) {
           location.reload();
          },
        error : function() {
           // alert("Value NOT reaching to controller ");
           
        }
    });


 }
 function activeuser(id)
 {  
    var status = 1;
    $.ajax({
    type:"POST",
        url: "<?= $deleteuser; ?>",
        data:{'id':id,
               'status' : status
               },
        success : function(data) {
            location.reload();
          },
        error : function() {
           // alert("Value NOT reaching to controller ");
           
        }
    });
 }
</script>
<style>
  
   .dataTables_info{width: 220px;}
    .paging_simple_numbers{width: 220px;float: right;margin-top: -44px;margin-top: -15px;}
    .dataTables_filter{float: right;}
   /* .form-control input-sm{width: 71px;}
    .col-sm-12{margin-top: -12px;}
    .col-xs-12{margin-bottom: -40px;}*/
</style>