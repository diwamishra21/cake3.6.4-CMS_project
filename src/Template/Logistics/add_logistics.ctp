
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
               <?php echo $this->Form->create();?>
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
                                        <option value=<?php echo $bus['id'];?> ><?php echo $bus['title']; ?></option>
                                        <?php }?>
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
                                     </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="title" class="padding-top-md">Location</label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <select required class="form-control" id="location" name="location">
                                        <option value="">Select</option>
                                        <?php foreach($locations as $loc){?>
                                        <option value=<?php echo $loc['id'];?> ><?php echo $loc['title']; ?></option>
                                        <?php }?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="title" class="padding-top-md">Title</label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <input required type="text" id="title" name="title" class="form-control" placeholder='Enter Title'>
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
                                <textarea required name="description" id="description" cols="3" rows="3" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <hr/>
                <div class="col-xs-12 text-center">
                    <button class="btn btn-danger padding-left-xl padding-right-xl" type="submit">Submit</button>
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
    $(".bu_name").change(function () {
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
    $(".dept").change(function () {
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
});
</script>