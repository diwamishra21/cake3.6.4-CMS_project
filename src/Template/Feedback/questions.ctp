<aside data-sidebar>
    <div class="padding-bottom-md container-fluid">
        <div class="row">
            <div class="col-xs-12 bg-dark">
                <div class="padding-md">
                    <div class="panel-close-btn" data-sidebar-button><i class="fa fa-times fa-lg text-white"></i></div>
                    <h3 class="margin-0">Question Management</h3>
                </div>
            </div>
            <?php
            echo $this->Form->create('', ['id' => 'add-question-form']);
            ?>
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
                            <div class="col-md-9">
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
                            <div class="col-md-9">
                                <select class="form-control" id="type" name="q-for">
                                    <option value="4">Employee</option>
                                    <option value="2">Supervisor</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <hr/>
                <div class="col-xs-12 text-center">
                    <button class="btn btn-danger padding-left-xl padding-right-xl" type="submit">Submit</button>
                </div>

            </div>
            <?php
            echo $this->Form->end();
            ?>
        </div>
    </div>
</aside>
<div class="overlay" data-sidebar-overlay></div>

<div class="container-fluid container-padding-top">
    <div class="row">
        <div class="col-md-4">
            <button class="btn btn-danger btn-sm" data-sidebar-button><i class="fa fa-plus"></i> Add</button>
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
                                    }
                                    echo $role_for;
                                    ?>
                                </td>
                                <td>
                                    <button class="btn btn-danger btn-sm edit-q" data-sidebar-button data-key="<?=$qInfo['id'];?>"><i class="fa fa-pencil"></i> Edit</button>
                                    <button class="btn btn-primary btn-sm" data-key="<?=$qInfo['id'];?>"><i class="fa fa-trash-o"></i> Delete</button>
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

<?php echo $this->Html->script(['jquery-1.12.4', 'bootstrap.min', 'sidebar', 'jquery-ui']); ?>
<script>
    $('[data-toggle="tooltip"]').tooltip();
    $(document).ready(function(){
       $('.edit-q').click(function(){
          var key=$(this).attr('data-key');
          $.ajax({
            url:webroot+'feedback/get/'+key
            
          }).done(function(data){
              if(typeof(data.id)==undefined){
                  alert('error occurred !');
                  return false;
              }
              console.log(data);
          });
       }); 
    });
</script>