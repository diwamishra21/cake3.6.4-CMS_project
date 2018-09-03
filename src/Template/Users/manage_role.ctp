<aside data-sidebar>
    <div class="padding-bottom-md container-fluid">
        <div class="row">
            <div class="col-xs-12 bg-dark">
                <div class="padding-md">
                    <div class="panel-close-btn" data-sidebar-button><i class="fa fa-times fa-lg text-white"></i></div>
                    <h3 class="margin-0">Role Management</h3>
                </div>
            </div>
            <?php
            echo $this->Form->create('', ['id' => 'add-role-form']);
            ?>
            <div class="col-xs-12 margin-top-lg">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="name" class="padding-top-md">Role Name</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" id="name" name="name" class="form-control" placeholder="Name">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="description" class="padding-top-md">Description</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" id="description" name="description" class="form-control" placeholder="Description">
                            </div>
                        </div>
                    </div>
                </div>
                <hr/>
                <h4>Access Level</h4>
                <?php
                if (!empty($aCatData)) {
                    foreach ($aCatData as $parentCat) {
                        ?>   
                        <div class="well well-sm">
                            <h5>
                                <?php if (!empty($parentCat['name'])) echo $parentCat['name']; ?>
                            </h5>
                            <hr/>
                            <div class="row">
                                <?php
                                if (!empty($parentCat['children'])) {
                                    if (!empty($parentCat['children'][0]['children'])) {
                                        foreach ($parentCat['children'] as $subCat) {
                                            ?>
                                            <div class="col-md-4">
                                                <div class="panel panel-default joinee-blocks">
                                                    <div class="panel-body">
                                                        <?php
                                                        if (!empty($subCat['children'])) {
                                                            ?>
                                                            <strong>
                                                                <label><input type="checkbox" name="access-cat[]" value="<?php if (!empty($subCat['id'])) echo $subCat['id']; ?>" class="checkbox_all" onchange="roleManagement.roleManagementCheckbox(this)"> <?php if (!empty($subCat['name'])) echo $subCat['name']; ?></label>
                                                            </strong>
                                                            <?php
                                                            if (!empty($subCat['children'])) {
                                                                echo ' <div class="padding-left-lg">';
                                                                foreach ($subCat['children'] as $child) {
                                                                    ?>
                                                                    <div><label><input type="checkbox" name="access-cat[]" value="<?php if (!empty($child['id'])) echo $child['id']; ?>" class="checkbox_add_edit"> <?php if (!empty($child['name'])) echo $child['name']; ?></label></div>
                                                                    <?php
                                                                }
                                                                echo '</div>';
                                                            }
                                                            ?>
                                                            <?php
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                    }else {
                                        ?> 
                                        <div class="col-md-4">
                                            <div class="panel panel-default joinee-blocks">
                                                <div class="panel-body">
                                                    <?php foreach ($parentCat['children'] as $subCat) {
                                                        ?>
                                                        <div>
                                                            <strong>
                                                                <label><input type="checkbox" name="access-cat[]" value="<?php if (!empty($subCat['id'])) echo $subCat['id']; ?>"> <?php if (!empty($subCat['name'])) echo $subCat['name']; ?></label>
                                                            </strong>
                                                        </div>    
                                                        <?php
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>

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
            <h4 class="margin-0 padding-top-xs">Role Management</h4>
        </div>
        <div class="col-xs-12 margin-top-lg overflow-scroll">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th><div data-toggle="tooltip" data-placement="bottom" data-original-title="Name of the Role" class="red-tooltip">Name</div></th>
                        <?php
                        if (!empty($aCatData)) {
                            foreach ($aCatData as $cate) {
                                ?>
                                <th><div data-toggle="tooltip" data-placement="bottom" data-original-title="Access for <?php if (!empty($cate['name'])) echo $cate['name']; ?>" class="red-tooltip"><?php if (!empty($cate['name'])) echo $cate['name']; ?></div></th>
                                <?php
                            }
                        }
                        ?>
                        <th><div data-toggle="tooltip" data-placement="bottom" data-original-title="Action" class="red-tooltip">Action</div></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (!empty($roleData)) {
                        foreach ($roleData as $roleInfo) {
                            ?>
                            <tr>
                                <td><?php if (!empty($roleInfo['title'])) echo ucfirst($roleInfo['title']); ?></td>
                                <?php
                                $access = [];
                                if (!empty($roleInfo['access'])) {
                                    $access = json_decode($roleInfo['access'], true);
                                }

                                if (!empty($aCatData)) {
                                    $i = 1;
                                    foreach ($aCatData as $cate) {
                                        ?> 
                                        <td>
                                            <div>
                                                <?php
                                                if (!empty($cate['children'])) {
                                                    foreach ($cate['children'] as $sub) {
                                                        $name = "";
                                                        $sel = "";
                                                        $show = false;
                                                        if (!empty($sub['name'])) {
                                                            $name = $sub['name'];
                                                        }

                                                        // For roadmap only
                                                        if ($i == 3) {
                                                            if (in_array($sub['id'], $access)) {
                                                                $show = true;
                                                            }
                                                        }

                                                        if (!empty($sub['children'])) {
                                                            foreach ($sub['children'] as $child) {
                                                                if (in_array($child['id'], $access)) {
                                                                    $show = true;
                                                                    if (!empty($child['name'])) {
                                                                        if ($sel == "") {
                                                                            $sel = $child['name'];
                                                                        } else {
                                                                            $sel = $sel . ", " . $child['name'];
                                                                        }
                                                                    }
                                                                }
                                                            }
                                                        }
                                                        if ($show) {
                                                            if ($i == 3) {
                                                                echo '<p class="margin-0" style="text-align:left;"><strong>' . $name . '</strong>' . $sel . '</p>';
                                                            } else {
                                                                echo '<p class="margin-0" style="text-align:left;"><strong>' . $name . '</strong> : ' . $sel . '</p>';
                                                            }
                                                        }
                                                    }
                                                }
                                                ?>
                                            </div>
                                        </td>
                                        <?php
                                        $i++;
                                    }
                                }
                                ?>
                                <td>
                                    <button class="btn btn-danger btn-sm" data-sidebar-button><i class="fa fa-pencil"></i> Edit</button>
                                    <button class="btn btn-primary btn-sm"><i class="fa fa-trash-o"></i> Delete</button>
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

<?php echo $this->Html->script(['jquery-1.12.4', 'bootstrap.min', 'sidebar', 'jquery-ui', 'role-management']); ?>
<script>
    $('[data-toggle="tooltip"]').tooltip();
</script>