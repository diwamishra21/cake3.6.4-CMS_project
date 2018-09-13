
<div class="container-fluid container-padding-top">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 bg-white margin-bottom-xl">
            <div class="padding-md">
                <div class="text-center">
                    <h3>Add Logistics </h3>
                </div>
            </div>
            <hr/>
            <div class="<?php echo @$class; ?>">
                <a href="#" class="close" data-dismiss="alert" aria-label="close"><?php echo @$close; ?></a>
                <i class="<?php echo @$iclass; ?>"></i><?php echo @$sucessful; ?>.
            </div>
            <div class="" id="add_user" >
               <?php echo $this->Form->create('',['id' => "add_logistics"]);?>
               <div class="col-xs-12 margin-top-lg">
                <div class="row">
                    
                    <div class="col-md-6">
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="title" class="padding-top-md">Business Unit<span style='color: red'>*</span></label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <select  class="form-control bu_name" id="bu_name" name="bu_name">
                                        <option value="">Select</option>
                                        <?php foreach($business_units as $bus){?>
                                        <option value=<?php echo $bus['id'];?> ><?php echo $bus['title']; ?></option>
                                        <?php }?>
                                    </select>
                                    <span id="check_bu_name"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="title" class="padding-top-md">Department<span style='color: red'>*</span></label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                     <select  class="form-control dept" id="dept" name="dept">
                                         <option value="">Select</option>
                                     </select>
                                     <span id="check_dept"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="col-md-6">
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="title" class="padding-top-md">Sub Department<span style='color: red'>*</span></label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">

                                    <select  class="form-control" id="sub_dept" name="sub_dept">

                                        <option value="">Select</option>
                                     </select>
                                     <span id="check_sub_dept"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="title" class="padding-top-md">Location<span style='color: red'>*</span></label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <select  class="form-control" id="location" name="location">
                                        <option value="">Select</option>
                                        <?php foreach($locations as $loc){?>
                                        <option value=<?php echo $loc['id'];?> ><?php echo $loc['title']; ?></option>
                                        <?php }?>
                                    </select>
                                    <span id="check_location"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="title" class="padding-top-md">Title<span style='color: red'>*</span></label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <input type="text" id="title" name="title" class="form-control" placeholder='Enter Title'>
                                    <span id="check_title"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="type" class="padding-top-md">Description</label>
                            </div>
                            <div class="col-md-9">
                                <textarea  name="description" id="description" cols="3" rows="3" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>

                               <div class="col-md-12">
                        <div class="form-group row">
                            <div class="col-md-4">
                                <label for="title" class="padding-top-md">Department manager Email Id<span style='color: red'>*</span></label>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" id="dept_manager_emailid" name="dept_manager_emailid" class="form-control" placeholder=''>
                                    <span id="check_dept_manager_emailid"></span>
                                </div>
                            </div>
                        </div>
                    </div>




                </div>
                <hr/>
                <div class="col-xs-12 text-center">
                    <button class="btn btn-danger padding-left-xl padding-right-xl" type="button" id="addlogistic">Submit</button>
                </div>
            </div>
                <?php echo $this->Form->end();?>
            </div>
            <?php $dept_url = $this->Url->build(['controller' => 'Logistics', 'action' => 'getdepartments']); ?>
            <?php $s_dept_url = $this->Url->build(['controller' => 'Logistics', 'action' => 'getsubdepartments']); ?>
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

    $('#addlogistic').click(function(){
        var valid = true;
      if($('#bu_name').val()=='')
       {
        $('#bu_name').css('border','1px solid red');
        $('#check_bu_name').text('Please select business unit');
        $('#check_bu_name').addClass('error_label');
        valid = false;

    }
    else
    {
        $('#bu_name').css('border','1px solid #cccccc');
        $('#check_bu_name').text('');


    }
     if($('#dept').val()=='')
       {
        $('#dept').css('border','1px solid red');
        $('#check_dept').text('Please select department');
        $('#check_dept').addClass('error_label');
        valid = false;

    }
    else
    {
        $('#dept').css('border','1px solid #cccccc');
        $('#check_dept').text('');


    }
    if($('#sub_dept').val()=='')
       {
        $('#sub_dept').css('border','1px solid red');
        $('#check_sub_dept').text('Please select sub department');
        $('#check_sub_dept').addClass('error_label');
        valid = false;

    }
    else
    {
        $('#sub_dept').css('border','1px solid #cccccc');
        $('#check_sub_dept').text('');


    }
     if($('#location').val()=='')
       {
        $('#location').css('border','1px solid red');
        $('#check_location').text('Please select location');
        $('#check_location').addClass('error_label');
        valid = false;

    }
    else
    {
        $('#location').css('border','1px solid #cccccc');
        $('#check_location').text('');


    }
     if($('#title').val()=='')
       {
        $('#title').css('border','1px solid red');
        $('#check_title').text('Please enter title');
        $('#check_title').addClass('error_label');
        valid = false;

    }
    else
    {
        $('#title').css('border','1px solid #cccccc');
        $('#check_title').text('');


    }

if($('#dept_manager_emailid').val()=='')
       {
        $('#dept_manager_emailid').css('border','1px solid red');
        $('#check_dept_manager_emailid').text('Please enter Email Id');
        $('#check_dept_manager_emailid').addClass('error_label');
        valid = false;

    }
    else
    {
        $('#dept_manager_emailid').css('border','1px solid #cccccc');
        $('#check_dept_manager_emailid').text('');


    }









    if(valid == true)
    {
       $('#add_logistics').submit();
    }
    else
    {
    return false;
    }

    });
});
</script>