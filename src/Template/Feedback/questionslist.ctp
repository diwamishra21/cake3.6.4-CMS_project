<aside data-sidebar>
    <div class="padding-bottom-md container-fluid">
        <div class="row">
            <div class="col-xs-12 bg-dark">
                <div class="padding-md">
                    <div class="panel-close-btn" data-sidebar-button><i class="fa fa-times fa-lg text-white"></i></div>
                    <h3 class="margin-0">Question Management</h3>
                </div>
            </div>

            <?php echo $this->Form->create(); ?>
            <div class="col-xs-12 margin-top-lg">
                <div class="row">

                    
                    

                    <div class="col-md-6">
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="title" class="padding-top-md">Category</label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <select class="form-control" id="category" name="category">
                                        <option value="Organize Behaviour">Organize Behaviour </option>
                                        <option value="Process Overview">Process Overview</option>
                                        <option value="Learning Outsource">Learning Outsource </option>
                                        <option value="Human Resource">Human Resource</option>
                                        <option value="Support Resource">Support Resource </option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="col-md-6">
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="title" class="padding-top-md">Question Type</label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group type_append">
                                    <select class="form-control" id="type" name="type">
                                        <option value="1">Text</option>
                                        <option value="2">Rating</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="add_question">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="title" class="padding-top-md">Title</label>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <textarea required name="title" id="title" cols="3" rows="3" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="title" class="padding-top-md">Desc</label>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <textarea  name="describtion" id="describtion" cols="3" rows="3" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group row">
                                <div class="col-md-1">
                                    <label for="title" class="padding-top-md">Status</label>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input type="checkbox" name="status" style="height: 20px;" id="status" class="form-control" value="1" >
                                        <input type="hidden" name="id" id="id" class="form-control" value=""  >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <hr/>
                <div class="col-xs-12 text-center">
                    <button type=""  data-sidebar-button class="btn btn-primary btn-sm padding-left-lg padding-right-lg">Close</button>
                    <button class="btn btn-danger btn-sm padding-left-xl padding-right-xl" type="button" id="update_qns">Update</button>
                </div>
            </div>
            <?php echo $this->Form->end(); ?>
        </div>
    </div>
</aside>
<div class="overlay" data-sidebar-overlay></div>

<div class="container-fluid container-padding-top">
    <div class="row">
        <div class="col-md-4">
            <?php $addqns = $this->Url->build(['controller' => 'Feedback', 'action' => 'addQuestions']); ?>
          <?php $feedback = $this->Url->build(['controller' => 'Feedback', 'action' => 'index']); ?>
            <a href="<?= $addqns; ?>" class="btn btn-danger btn-sm"><i class="fa fa-plus"></i> Add</a>&nbsp;
        <a href="<?= $feedback; ?>" class="btn btn-danger btn-sm"> Feedback Management</a>

        </div>
        <div class="col-md-4 text-center">
            <h4 class="margin-0 padding-top-xs">Question Management</h4>
        </div>
        <div class="col-md-12">
            <?php $flash_message = $this->Flash->render() ?>
            <?php if (!empty(@$flash_message)) { ?>
                <div class="success-msg" id="success" style="text-align:center;">
                    <i class="fa fa-check"></i>
                    Question added sucessfully.
                </div>
            <?php } ?></div>


        <div class="col-xs-12 margin-top-lg">
            <table class="table table-bordered table-striped" id="report_table">
                <thead>
                    <tr>
                        <th><input type="checkbox" class="checkbox" name="select_all" onclick="dashboard.toggleSelectAllCheckbox(this)"></th>
                        <th><div data-toggle="tooltip" data-placement="bottom" data-original-title="" class="red-tooltip" style="text-align:left !important;width:30% !important;"> Question Title</div></th>
                        <th><div data-toggle="tooltip" data-placement="bottom" data-original-title="" class="red-tooltip">Type</div></th>
           <th><div data-toggle="tooltip" data-placement="bottom" data-original-title="Category" class="red-tooltip">Category</div></th>
                        <th><div data-toggle="tooltip" data-placement="bottom" data-original-title="Description" class="red-tooltip">Description</div></th>
                        <th><div data-toggle="tooltip" data-placement="bottom" data-original-title="" class="red-tooltip">Action</div></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (!empty($qData)) {
                        foreach ($qData as $qInfo) {
                            ?>
                            <tr>
                                <td><input type="checkbox" class="checkbox" name="select_individual"></td>


                                <td class="text-left" style="text-align:left !important;width:30% !important;">
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
                                
                            <td><?= $qInfo['category'] ;?></td>
                            <td><?= $qInfo['describtion'] ;?></td>
                                <td>
                                    <button class="btn btn-danger btn-sm " data-sidebar-button onclick="return editdata('<?php echo $qInfo['id']; ?>')"><i class="fa fa-pencil"></i> Edit</button>
                                    <?php if ($qInfo['status'] == '1') { ?>
                                        <button class="btn btn-primary btn-sm"onclick="return inactivequestion('<?php echo $qInfo['id']; ?>')"><i class="fa fa-trash-o"></i> Inactive</button>
                                    <?php } else { ?>
                                        <button class="btn btn-primary btn-sm"onclick="return activequestion('<?php echo $qInfo['id']; ?>')"><i class="fa fa-trash-o"></i> Active</button>
                                    <?php } ?>
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

<?php $f_qns_details = $this->Url->build(['controller' => 'Feedback', 'action' => 'fetchquestionslist']); ?>
<?php $update_qns = $this->Url->build(['controller' => 'Feedback', 'action' => 'updatequestion']); ?>
<?php $delete_qns = $this->Url->build(['controller' => 'Feedback', 'action' => 'deletequestion']); ?>
<?php echo $this->Html->script(['jquery-1.12.4', 'bootstrap.min', 'sidebar', 'jquery-ui', 'dataTables.bootstrap.min', 'jquery.dataTables.min']); ?>

<script src="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
<script>
                                            $(document).ready(function () {
                                                $('#report_table').DataTable({
                                                    "aaSorting": []

                                                });
                                            });
</script>
<script>
    function editdata(id)
    {
        $.ajax({
            type: "POST",
            url: "<?= $f_qns_details; ?>",
            data: {'id': id},
            success: function (data) {
                data = JSON.parse(data);
                $('#id').val(data[0].id);
                $("#user_type").val(data[0].user_type);
                $("#feedback_type").val(data[0].feedback_type);
                $("#type").val(data[0].type);
                $("#category").val(data[0].category);
                $("#title").val(data[0].title);
                $("#describtion").val(data[0].describtion);
                $("#status").attr('checked', true);

            }

        });
    }
</script>
<script>
    $('#update_qns').click(function () {

        var id = $('#id').val();

        var user_type = $('#user_type').val();
        var feedback_type = $('#feedback_type').val();
        var type = $('#type').val();
        var category = $('#category').val();
        var title = $('#title').val();
        var describtion = $('#describtion').val();
        var status = $('#status').val();

        $.ajax({
            type: "POST",
            url: "<?= $update_qns; ?>",
            data: {'id': id,
                'user_type': user_type,
                'feedback_type': feedback_type,
                'type': type,
                'category': category,
                'title': title,
                'describtion': describtion,
                'status': status
            },
            success: function (data) {
                alert("Records Updated Sucessfully");
                location.reload();
            }

        });
    });

</script>
<script>
    function inactivequestion(id)
    {
        var status = 0;
        $.ajax({
            type: "POST",
            url: "<?= $delete_qns; ?>",
            data: {'id': id,
                'status': status
            },
            success: function (data) {
            },
            error: function () {
                alert("Value NOT reaching to controller ");

            }
        });


    }
    function activequestion(id)
    {
        var status = 1;
        $.ajax({
            type: "POST",
            url: "<?= $delete_qns; ?>",
            data: {'id': id,
                'status': status
            },
            success: function (data) {
                location.reload();
            },
            error: function () {
                alert("Value NOT reaching to controller ");

            }
        });
    }
</script>

<style>

    .dataTables_wrapper .dataTables_filter {
        float: right;
        text-align: left;

    }
 
    .dataTables_info{width: 200px;}
    .paging_simple_numbers{width: 235px;float: right;margin-top: -27px;}
    #report_table td {text-align:left;}

</style>
