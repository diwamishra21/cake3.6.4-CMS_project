<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" />
<aside data-sidebar>
    <div class="padding-bottom-md container-fluid">
        <div class="row">
            <div class="col-xs-12 bg-dark">
                <div class="padding-md text-center">
                    <div class="panel-close-btn" data-sidebar-button=""><i class="fa fa-times fa-lg text-white"></i></div>
                    <h3 class="margin-0"><span class="sub_btn">Add</span> Feedback</h3>
                </div>
            </div>
            <hr>
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <?php
                        echo $this->Form->create('');
                        ?>
                        <input type="hidden" id="edit_key" name="edit_key">
                        <div class="col-xs-12 margin-top-lg">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <div class="col-md-3">
                                            <label for="title" class="padding-top-md">Title</label>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <textarea class="form-control" rows="1" id="title" name="title"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <div class="col-md-3">
                                            <label for="description" class="padding-top-md">Description</label>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <textarea class="form-control" rows="1" id="description" name="description"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <div class="col-md-3">
                                            <label for="interval" class="padding-top-md">Interval (Days)</label>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <input class="form-control" type="number" id="interval" name="interval" placeholder="0"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <label for="for_joinee" class="padding-top-md">Joinee</label>
                                                </div>
                                                <div class="col-md-8 margin-top-md">
                                                    <div class="form-group ">
                                                        <input name="for_joinee" class="checkbox" value="1" type="checkbox">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <label for="for_supervisor" class="padding-top-md">Supervisor</label>
                                                </div>
                                                <div class="col-md-8 margin-top-md">
                                                    <div class="form-group margin-left-md">
                                                        <input name="for_supervisor" class="checkbox" value="1" type="checkbox">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12" id="joinee_q_sec">
                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <label for="type" class="padding-top-md">Select Questions for joinee</label>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="panel panel-default">
                                                <div class="panel-body" style="max-height:300px; overflow-y:scroll;overflow-x: hidden;">
                                                    <?php
                                                    foreach ($qData as $q) {
                                                        if (!empty($q)) {
                                                            ?>
                                                            <div class="form-group row">
                                                                <div class="col-md-2 margin-top-md">
                                                                    <input name="q_j[]" class="checkbox" value="<?= $q['id']; ?>" type="checkbox">
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <?php
                                                                    if ($q['type'] == 1) {
                                                                        echo '<i class="fa fa-pencil margin-top-md" title="Text" aria-hidden="true"></i>';
                                                                    } else if ($q['type'] == 2) {
                                                                        echo '<i class="fa fa-star fa-lg margin-top-md text-gold" title="Rating"></i>';
                                                                    }
                                                                    ?>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <label for="description" class="padding-top-md"><?= $q['title']; ?></label>
                                                                </div>                                                    
                                                            </div>
                                                            <?php
                                                        }
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12" id="sup_q_sec">
                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <label for="type" class="padding-top-md">Select Questions for supervisor</label>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="panel panel-default">
                                                <div class="panel-body" style="max-height:300px; overflow-y:scroll;overflow-x: hidden;">
                                                    <?php
                                                    foreach ($qData as $q) {
                                                        if (!empty($q)) {
                                                            ?>
                                                            <div class="form-group row">
                                                                <div class="col-md-2 margin-top-md">
                                                                    <input name="q_s[]" class="checkbox" value="<?= $q['id']; ?>" type="checkbox">
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <?php
                                                                    if ($q['type'] == 1) {
                                                                        echo '<i class="fa fa-pencil margin-top-md" title="Text" aria-hidden="true"></i>';
                                                                    } else if ($q['type'] == 2) {
                                                                        echo '<i class="fa fa-star fa-lg margin-top-md text-gold" title="Rating"></i>';
                                                                    }
                                                                    ?>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <label for="description" class="padding-top-md"><?= $q['title']; ?></label>
                                                                </div>                                                    
                                                            </div>
                                                            <?php
                                                        }
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr/>
                            <div class="col-xs-12 text-center">
                                <button type=""  data-sidebar-button class="btn btn-primary btn-sm padding-left-lg padding-right-lg">Close</button>
                                <button class="btn btn-danger btn-sm padding-left-xl padding-right-xl sub_btn" type="submit">Update</button>
                            </div>

                        </div>
                        <?php
                        echo $this->Form->end();
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</aside>
<div class="overlay" data-sidebar-overlay></div>
<div class="container-fluid container-padding-top">
    <div class="row">
        <div class="col-md-3">
            <button class="btn btn-danger btn-sm" data-sidebar-button  id="add_f"><i class="fa fa-plus"></i> Add</button>
            <?php
            echo $this->Html->link('<button class="btn btn-danger btn-sm">Question Management</button>', ['action' => 'questionslist'], ['escape' => false]);
            ?>            
        </div>
        <div class="col-md-9 text-left">
            <h4 class="margin-0 padding-top-xs">Feedback Management</h4>
        </div>
        <div class="col-xs-12 margin-top-lg">
            <table class="table table-bordered table-striped" id="feedback_table">
                <thead>
                    <tr>
                        <th><div data-toggle="tooltip" data-placement="bottom" data-original-title="" class="red-tooltip">Title</div></th>
                        <th><div data-toggle="tooltip" data-placement="bottom" data-original-title="" class="red-tooltip">Description</div></th>
                        <th><div data-toggle="tooltip" data-placement="bottom" data-original-title="" class="red-tooltip">Interval (Days)</div></th>
                        <th><div data-toggle="tooltip" data-placement="bottom" data-original-title="" class="red-tooltip">For joinee</div></th>
                        <th><div data-toggle="tooltip" data-placement="bottom" data-original-title="" class="red-tooltip">For supervisor</div></th>
                        <th><div data-toggle="tooltip" data-placement="bottom" data-original-title="" class="red-tooltip">Action</div></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (!empty($fData)) {
                        foreach ($fData as $fInfo) {
                            ?>
                            <tr>
                                <td>
                                    <?php
                                    if (!empty($fInfo['title']))
                                        echo $fInfo['title'];
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if (!empty($fInfo['description']))
                                        echo $fInfo['description'];
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    echo $fInfo['interval_days'];
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if (!empty($fInfo['for_joinee'])) {
                                        echo '<i class="fa fa-check text-green"></i>';
                                    } else {
                                        echo '<i class="fa fa-times text-red"></i>';
                                    }
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if (!empty($fInfo['for_supervisor'])) {
                                        echo '<i class="fa fa-check text-green"></i>';
                                    } else {
                                        echo '<i class="fa fa-times text-red"></i>';
                                    }
                                    ?>
                                </td>
                                <td>
        <!--                                    <button class="btn btn-danger btn-sm view-f" data-key=""><i class="fa fa"></i> View Questions</button>-->
                                    <button class="btn btn-danger btn-sm edit-f" data-sidebar-button data-key="<?= $fInfo['id']; ?>"><i class="fa fa-pencil"></i> Edit</button>
                                    <?php
                                    if (!empty($fInfo['status'])) {
                                        $sicon = 'Inactive';
                                        $class = "st_0";
                                    } else {
                                        $sicon = 'Active';
                                        $class = "st_1";
                                    }
                                    ?>
                                    <button class="btn btn-primary btn-sm <?= $class; ?>" data-key="<?= $fInfo['id']; ?>"><?= $sicon; ?></button>
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

<?php echo $this->Html->script(['jquery-1.12.4', 'bootstrap.min', 'sidebar']); ?>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
<style>

    .dataTables_wrapper .dataTables_filter {
        float: right;
        text-align: left;

    }
</style>
<script>
    $('[data-toggle="tooltip"]').tooltip();
    $(document).ready(function () {
        $('.edit-f').click(function () {
            $('#joinee_q_sec').hide();
            $('#sup_q_sec').hide();
            // Reset
            $('.sub_btn').html('Edit');
            reset();
            var key = $(this).attr('data-key');
            $.ajax({
                url: webroot + 'feedback/get/' + key
            }).done(function (data) {
                data = $.parseJSON(data);
                //console.log(data);
                if (data.length < 1) {
                    alert('Invalid feedback selected !');
                    hideSidebar();
                    return false;
                }
                $('#edit_key').val(data.id);
                $('#title').html(data.title);
                $('#description').html(data.description);
                $('#interval').val(data.interval_days);
                if (data.for_joinee == '1') {
                    $('input[name="for_joinee"]').prop('checked', true);
                    $('#joinee_q_sec').show();
                }
                if (data.for_supervisor == '1') {
                    $('input[name="for_supervisor"]').prop('checked', true);
                    $('#sup_q_sec').show();
                }
                if (data.feedback_questions.length > 0) {
                    $(data.feedback_questions).each(function (i, u) {
                        if (u.question_for == 1) {
                            $('input[name="q_j[]"][value=' + u.question_id + ']').prop('checked', true);
                        } else if (u.question_for == 2) {
                            $('input[name="q_s[]"][value=' + u.question_id + ']').prop('checked', true);
                        }
                    });
                }
            });
        });
        $(document).on('click', '.st_1', function () {
            var btn = $(this);
            var key = $(this).attr('data-key');
            var r = confirm("Active the feedback ..?");
            if (r != true) {
                return false;
            }
            $.ajax({
                url: webroot + 'feedback/stchange/' + key
            }).done(function () {
                btn.html('Inactive');
                btn.removeClass('st_1');
                btn.addClass('st_0');
            });
        });
        $(document).on('click', '.st_0', function () {
            var btn = $(this);
            var key = $(this).attr('data-key');
            var r = confirm("Inactive the feedback ..?");
            if (r != true) {
                return false;
            }
            $.ajax({
                url: webroot + 'feedback/stchange/' + key
            }).done(function () {
                btn.html('Active');
                btn.removeClass('st_0');
                btn.addClass('st_1');
            });
        });
        $(document).on('change', 'input[name=for_joinee]', function () {
            if (this.checked) {
                $('#joinee_q_sec').show();
            } else {
                $('input[name="q_j[]"]').prop('checked', false);
                $('#joinee_q_sec').hide();
            }
        });
        $(document).on('change', 'input[name=for_supervisor]', function () {
            if (this.checked) {
                $('#sup_q_sec').show();
            } else {
                $('input[name="q_s[]"]').prop('checked', false);
                $('#sup_q_sec').hide();
            }
        });
        $('#add_f').click(function () {
            reset();
            $('#joinee_q_sec').hide();
            $('#sup_q_sec').hide();
            $('.sub_btn').html('Add');
        });
        $('#feedback_table').DataTable({
            aaSorting: []
        });
    });
    function hideSidebar() {
        var sidebar = $('[data-sidebar]');
        var body = $("body");
        sidebar.css('margin-right', sidebar.width() * -1 + 'px');
        var overlay = $('[data-sidebar-overlay]');
        overlay.fadeTo('500', 0, function () {
            overlay.hide();
            body.css("overflow", "scroll");
        });
    }
    function reset() {
        $('#edit_key,#interval').val('');
        $('#title,#description').html('');
        $('input[name=for_joinee],input[name=for_supervisor],input[name="q_j[]"],input[name="q_s[]"]').prop('checked', false);
    }
</script>
<style>
    .dataTables_info{width: 170px;}
    .paging_simple_numbers{width: 170px;float: right;margin-top: -27px;}
    #report_table td {text-align:left;}
</style> 