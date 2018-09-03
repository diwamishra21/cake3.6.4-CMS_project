<aside data-sidebar>
    <div class="padding-bottom-md container-fluid">
        <div class="row">
            <div class="col-xs-12 bg-dark">
                <div class="padding-md">
                    <div class="panel-close-btn" data-sidebar-button><i class="fa fa-times fa-lg text-white"></i></div>
                    <h3 class="margin-0">Question Management</h3>
                </div>
            </div>
            <form>
            <div class="col-xs-12 margin-top-lg">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="title" class="padding-top-md">Title</label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <textarea class="form-control" rows="6" id="title" name="title"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="type" class="padding-top-md">Question type</label>
                            </div>
                            <div class="col-md-9 type_append">
                                <select class="form-control" id="type" name="type">
                                    <option value="1">Text</option>
                                    <option value="2">Rating</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="type" class="padding-top-md">Question for</label>
                            </div>
                            <div class="col-md-9 user_type_append">
                                <select class="form-control" id="user_type" name="user_type">
                                    <option value="4">Employee</option>
                                    <option value="2">Supervisor</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="hidden" id="id" name="id" class="form-control">
                <input type="hidden" value="" id="feedback_id" name="feedback_id" class="form-control">
                <hr/>
                <div class="col-xs-12 text-center">
                    <button class="btn btn-danger padding-left-xl padding-right-xl" id="update_qns" type="submit">Submit</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</aside>
<div class="overlay" data-sidebar-overlay></div>

<div class="container-fluid container-padding-top">
    <div class="row">
        <div class="col-md-4">
            <?php $addqns = $this->Url->build(['controller' => 'Feedback', 'action' => 'addQuestions']); ?>
            <a href="<?= $addqns; ?>" class="btn btn-danger btn-sm"><i class="fa fa-plus"></i> Add</a>
            
        </div>
        <div class="col-md-4 text-center">
            <h4 class="margin-0 padding-top-xs">Question Management</h4>
        </div>
        <div class="col-xs-12 margin-top-lg">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th><div data-toggle="tooltip" data-placement="bottom" data-original-title="" class="red-tooltip">Title</div></th>
                        <th><div data-toggle="tooltip" data-placement="bottom" data-original-title="" class="red-tooltip">Type</div></th>
                        <th><div data-toggle="tooltip" data-placement="bottom" data-original-title="" class="red-tooltip">Created for</div></th>
                        <th><div data-toggle="tooltip" data-placement="bottom" data-original-title="" class="red-tooltip">Action</div></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (!empty($qData)) {
                        foreach ($qData as $qInfo) {
                            ?>
                            <tr>
                                <td>
                                    <?php
                                    if (!empty($qInfo['title']))
                                        echo $qInfo['title'];
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    $type = "";
                                    if (!empty($qInfo['type'])) {
                                        if ($qInfo['type'] == 1) {
                                            $type = "Text";
                                        } else if ($qInfo['type'] == 2) {
                                            $type = "Rating";
                                        }
                                    }
                                    echo $type;
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    $role_for = "";
                                    if (!empty($qInfo['user_type'])) {
                                        if ($qInfo['user_type'] == 4) {
                                            $role_for = "Employee";
                                        }
                                        else {
                                            $role_for = "Supervisor";
                                        }
                                    }
                                    echo $role_for;
                                    ?>
                                </td>
                                <td>
                                    <button class="btn btn-danger btn-sm edit-q" data-sidebar-button onclick="return editdata('<?php echo $qInfo['id']; ?>')"><i class="fa fa-pencil"></i> Edit</button>
                                    <?php if($qInfo['status'] == '1'){ ?>
                                <button class="btn btn-primary btn-sm"onclick="return inactivequestion('<?php echo $qInfo['id'];  ?>')"><i class="fa fa-trash-o"></i> Inactive</button>
                                <?php }else{ ?>
                                <button class="btn btn-primary btn-sm"onclick="return activequestion('<?php echo $qInfo['id'];  ?>')"><i class="fa fa-trash-o"></i> Active</button>
                                <?php  } ?>
                                </td>
                            </tr>
                            <?php
                        }
                    } else {
                        ?>    
                        <tr>
                            <td rowspan="3" colspan="5">No data found!</td>

                        </tr>
                        <?php
                    }
                    ?>                    
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $f_qns_details = $this->Url->build(['controller' => 'Feedback', 'action' => 'questionslist']); ?>
<?php $update_qns = $this->Url->build(['controller' => 'Feedback', 'action' => 'updatequestion']); ?>
<?php $delete_qns = $this->Url->build(['controller' => 'Feedback', 'action' => 'deletequestion']); ?>
<?php echo $this->Html->script(['jquery-1.12.4', 'bootstrap.min', 'sidebar', 'jquery-ui']); ?>
<script>
function editdata(id)
{
    $.ajax({
        type:"POST",
        url: "<?= $f_qns_details; ?>",
        data:{'id':id},
        success : function(data) {
           data = JSON.parse(data);
           console.log(data);
           $('#id').val(data[0].id);
           $("#title").val(data[0].title);
           $("#feedback_id").val(data[0].feedback_id);
           $("div.type_append select").val(data[0].type);
           $("div.user_type_append select").val(data[0].user_type);
        },
        error : function() {
           alert("Value NOT reaching to controller ");
        }
    });
}

 $('#update_qns').click(function(){
        var id       = $('#id').val();
        var title = $('#title').val();
        var feedback_id  = $('#feedback_id').val();
        var type  = $('#type').val();
        var user_type = $('#user_type').val();
        console.log("feedback_id -"+feedback_id+"type -"+type+"user_type -"+user_type+"title -"+title);
        $.ajax({
            type:"POST",
            url: "<?= $update_qns; ?>",
            data: {
               id       : id,
               feedback_id : feedback_id,
               type  : type,
               user_type  : user_type,
               title : title,
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

function inactivequestion(id)
 {  
    var status = 0;
    $.ajax({
    type:"POST",
        url: "<?= $delete_qns; ?>",
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
 function activequestion(id)
 {  
    var status = 1;
    $.ajax({
    type:"POST",
        url: "<?= $delete_qns; ?>",
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