<aside data-sidebar>
    <div class="padding-bottom-md container-fluid">
        <div class="row">
            <div class="col-xs-12 bg-dark">
                <div class="padding-md">
                    <div class="panel-close-btn" data-sidebar-button><i class="fa fa-times fa-lg text-white"></i></div>
                    <h3 class="margin-0">Update Logistics details</h3>
                </div>
            </div>
            <div class="col-xs-12 margin-top-md">
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="authmethod" class="padding-top-md">Business Unit</label>
                                </div>
                                <div class="col-md-9 bu_name_append">
                                    <select class="form-control bu_name" id="bu_name" name="bu_name">
                                        <option value="">Select</option>
                                       <?php foreach($business_units as $bus){?>
                                        <option value=<?php echo $bus['id'];?> ><?php echo $bus['title']; ?></option>
                                        <?php }?> 
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <div class="form-group row">
                                    <div class="col-md-3">
                                        <label for="empid" class="padding-top-md">Department</label>
                                    </div>
                                    <div class="col-md-9 dept_append">
                                        <select class="form-control dept" id="dept" name="dept">
                                            <option value="">Select</option>
                                            <?php foreach($departments as $dep){?>
                                        <option value=<?php echo $dep['id'];?> ><?php echo $dep['title']; ?></option>
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
                                    <label for="" class="padding-top-md">Sub Department</label>
                                </div>
                                <div class="col-md-9 sub_dept">
                                    <select class="form-control sub_dept" id="sub_dept" name="sub_dept">
                                        <option value="">Select</option>
                                        <?php foreach($sub_departments as $sub_deptv){?>
                                        <option value=<?php echo $sub_deptv['id'];?> ><?php echo $sub_deptv['title']; ?>
                                        </option>
                                        <?php }?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <div class="form-group row">
                                    <div class="col-md-3">
                                        <label for="empid" class="padding-top-md">Location</label>
                                    </div>
                                    <div class="col-md-9 location">
                                        <select required class="form-control" id="location" name="location">
                                            <option value="">Select</option>
                                            <?php foreach ($locations as $loc) { ?>
                                                <option value=<?php echo $loc['id']; ?> ><?php echo $loc['title']; ?>
                                                </option>
                                            <?php } ?>
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
                                    <label for="frstname" class="padding-top-md">Title</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" id="title" name="title" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <div class="form-group row">
                                    <div class="col-md-3">
                                        <label for="lstname" class="padding-top-md">Description</label>
                                    </div>
                                    <div class="col-md-9">
                                        <textarea required name="description" id="description" cols="3" rows="3" class="form-control"></textarea>
                                        <input type="hidden" id="id" name="id" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>

                    <hr/>
                    <div class="col-xs-12 padding-bottom-lg text-center margin-top-lg">
        <button type=""  data-sidebar-button class="btn btn-primary padding-left-lg padding-right-lg">Close</button>
        <button type="button" class="btn btn-danger padding-left-lg padding-right-lg" id="updatelogistics">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</aside>
<div class="overlay" data-sidebar-overlay></div>

<div class="container-fluid container-padding-top">
    <?php $flash_message= $this->Flash->render() ?>
    <?php if(!empty(@$flash_message)){ ?>
    <div class="success-msg" id="success" style="text-align:center;">
     <i class="fa fa-check"></i>
        <!--<?= $this->Flash->render('flash', ['element' => 'success']);?>-->
     Logistics Added Sucessfully.
    </div>
    <?php } ?>
    
    
    <div class="row">
        <div class="col-md-4">
            <?php $adduser = $this->Url->build(['controller' => 'Logistics', 'action' => 'addLogistics']); ?>
            <a href="<?= $adduser; ?>" class="btn btn-danger btn-sm"><i class="fa fa-plus"></i> Add</a>

        </div>
        <div class="col-md-4 text-center">
            <h4 class="margin-0 padding-top-xs">Manage Logistics</h4>
        </div>
        <div class="col-xs-12 margin-top-lg">
            <table class="table table-bordered table-striped" id="report_table">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>BU Name</th>
                        <th>Department</th>
                        <th>Location</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($logisticrecord as $logisticrecorddata) { ?>
                        <tr>
                            <td><?php echo $logisticrecorddata->title ?></td>
                            <td><?php echo $logisticrecorddata['business_unit']['title'] ?></td>
                            <td><?php echo $logisticrecorddata['department']['title'] ?></td>
                            <td><?php echo $logisticrecorddata['location']['title'] ?></td>
                            <td>
                                <button class="btn btn-danger btn-sm" data-sidebar-button onclick="return editdata('<?php echo $logisticrecorddata['id']; ?>')"><i class="fa fa-pencil"></i> Edit</button>
                                <?php if($logisticrecorddata['status'] == '1'){ ?>
                                <button class="btn btn-primary btn-sm"onclick="return inactivelogistic('<?php echo $logisticrecorddata['id'];  ?>')"><i class="fa fa-trash-o"></i> Inactive</button>
                                <?php }else{ ?>
                                <button class="btn btn-primary btn-sm"onclick="return activelogistic('<?php echo $logisticrecorddata['id'];  ?>')"><i class="fa fa-trash-o"></i> Active</button>
                                <?php  } ?>
                            </td>
                        </tr> 
                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div>
</div>

<?php echo $this->Html->script(['jquery-1.12.4', 'bootstrap.min', 'sidebar', 'jquery-ui', 'index']); ?>
<?php $url_logistics_details = $this->Url->build(['controller' => 'Logistics', 'action' => 'index']); ?>
<?php $update_logistics_details = $this->Url->build(['controller' => 'Logistics', 'action' => 'addLogistics']); ?>
<?php $delete_logistics = $this->Url->build(['controller' => 'Logistics', 'action' => 'deletelogistics']); ?>
<?php $dept_url = $this->Url->build(['controller' => 'Logistics', 'action' => 'getdepartments']); ?>
<?php $s_dept_url = $this->Url->build(['controller' => 'Logistics', 'action' => 'getsubdepartments']); ?>

<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
<script>
    $('#report_table').DataTable({
        "sDom": '<"row view-filter"<"col-sm-12"<"pull-left"l><"pull-right"f><"clearfix">>>t<"row view-pager"<"col-sm-12"<"text-center"ip>>>'
    });
</script>
<script type="text/javascript">
$(document).ready(function() {
    /*  for department   */
    $('#dept').prop('disabled', true);
    $(".bu_name").change(function () {
        $('#dept').prop('disabled', false);
        $('#dept').children('option:not(:first)').remove();
        $('#sub_dept').children('option:not(:first)').remove();
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
    
<script> 
function editdata(id)
{
    $.ajax({
        type:"POST",
        url: "<?= $url_logistics_details; ?>",
        data:{'id':id},
        success : function(data) {
           data = JSON.parse(data);
           console.log(data);
           
           $('#id').val(data.logistics[0].id);
           $("div.bu_name_append select").val(data.logistics[0].business_unit.id);
           $("div.dept_append select").val(data.logistics[0].department.id);
           $("div.sub_dept select").val(data.sub_departments[0].id);
           $("div.location select").val(data.logistics[0].location.id);
           $('#description').val(data.logistics[0].description);
           $('#title').val(data.logistics[0].title);
           
        },
        error : function() {
           alert("Value NOT reaching to controller ");
        }
    });
}
    
    
 $('#updatelogistics').click(function(){
        var id       = $('#id').val();
        var bu_name = $('#bu_name').val();
        var dept  = $('#dept').val();
        var sub_dept  = $('#sub_dept').val();
        var location = $('#location').val();
        var title = $('#title').val();
        var description = $('#description').val();
        console.log("bu_name -"+bu_name+"dept -"+dept+"sub_dept -"+sub_dept+"location -"+location+"title -"+title+"description- "+description);
        $.ajax({
            type:"POST",
            url: "<?= $update_logistics_details; ?>",
            data: {
               id       : id,
               bu_name : bu_name,
               dept  : dept,
               sub_dept  : sub_dept,
               location  : location,
               title : title,
               description : description,
           },
            success : function(data) {
              alert("Records Updated Sucessfully");
                location.reload(true);
               // alert(data);
               },
              error : function() {
                //alert("Value NOT reaching to controller ");
                } 
            });
 });
    
    function inactivelogistic(id)
 {  
    var status = 0;
    $.ajax({
    type:"POST",
        url: "<?= $delete_logistics; ?>",
        data:{'id':id,
               'status' : status
               },
        success : function(data) {
           location.reload();
          },
        error : function() {
           alert("Value NOT reaching to controller ");
           
        }
    });


 }
 function activelogistic(id)
 {  
    var status = 1;
    $.ajax({
    type:"POST",
        url: "<?= $delete_logistics; ?>",
        data:{'id':id,
               'status' : status
               },
        success : function(data) {
            location.reload();
          },
        error : function() {
           alert("Value NOT reaching to controller ");
           
        }
    });
 }
</script>