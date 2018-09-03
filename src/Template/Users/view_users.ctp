<aside data-sidebar>
    <div class="padding-bottom-md container-fluid">
        <div class="row">
            <div class="col-xs-12 bg-dark">
                <div class="padding-md">
                    <div class="panel-close-btn" data-sidebar-button><i class="fa fa-times fa-lg text-white"></i></div>
                    <h3 class="margin-0">User Management</h3>
                </div>
            </div>
            <div class="col-xs-12 margin-top-md">
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="name" class="padding-top-md">Name</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" id="name" class="form-control" placeholder="Name">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="emp_id" class="padding-top-md">Emp ID</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" id="emp_id" class="form-control" placeholder="Employee ID">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="role" class="padding-top-md">Role</label>
                                </div>
                                <div class="col-md-9">
                                    <select class="form-control" id="role" name="role">
                                        <option value="Admin">Admin</option>
                                        <option value="SPOC">SPOC</option>
                                        <option value="Supervisor">Supervisor</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr/>
                    <div class="text-center">
                        <button class="btn btn-danger padding-left-lg padding-right-lg">Submit</button>
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
            <button class="btn btn-danger btn-sm" data-sidebar-button><i class="fa fa-plus"></i> Add</button>
        </div>
        <div class="col-md-4 text-center">
            <h4 class="margin-0 padding-top-xs">User Management</h4>
        </div>
        <div class="col-xs-12 margin-top-lg overflow-scroll">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th><div data-toggle="tooltip" data-placement="bottom" data-original-title="Name of the user" class="red-tooltip">User Name</div></th>
                    <th><div data-toggle="tooltip" data-placement="bottom" data-original-title="Role assigned" class="red-tooltip">Role</div></th>
                    <th><div data-toggle="tooltip" data-placement="bottom" data-original-title="Last logged-in details" class="red-tooltip">Last Logged-in Details</div></th>
                    <th><div data-toggle="tooltip" data-placement="bottom" data-original-title="Action" class="red-tooltip">Action</div></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Dhanya Menon</td>
                    <td>Admin</td>
                    <td>13/01/18 15:05:12</td>
                    <td>
                        <button class="btn btn-danger btn-sm" data-sidebar-button><i class="fa fa-pencil"></i> Edit</button>
                        <button class="btn btn-primary btn-sm"><i class="fa fa-trash-o"></i> Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>Dhanya Menon</td>
                    <td>Admin</td>
                    <td>13/01/18 15:05:12</td>
                    <td>
                        <button class="btn btn-danger btn-sm" data-sidebar-button><i class="fa fa-pencil"></i> Edit</button>
                        <button class="btn btn-primary btn-sm"><i class="fa fa-trash-o"></i> Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>Dhanya Menon</td>
                    <td>Admin</td>
                    <td>13/01/18 15:05:12</td>
                    <td>
                        <button class="btn btn-danger btn-sm" data-sidebar-button><i class="fa fa-pencil"></i> Edit</button>
                        <button class="btn btn-primary btn-sm"><i class="fa fa-trash-o"></i> Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>Dhanya Menon</td>
                    <td>Admin</td>
                    <td>13/01/18 15:05:12</td>
                    <td>
                        <button class="btn btn-danger btn-sm" data-sidebar-button><i class="fa fa-pencil"></i> Edit</button>
                        <button class="btn btn-primary btn-sm"><i class="fa fa-trash-o"></i> Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>Dhanya Menon</td>
                    <td>Admin</td>
                    <td>13/01/18 15:05:12</td>
                    <td>
                        <button class="btn btn-danger btn-sm" data-sidebar-button><i class="fa fa-pencil"></i> Edit</button>
                        <button class="btn btn-primary btn-sm"><i class="fa fa-trash-o"></i> Delete</button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php echo $this->Html->script(['jquery-1.12.4', 'bootstrap.min', 'sidebar','jquery-ui','user-management']); ?>
<script>
    $('[data-toggle="tooltip"]').tooltip();
</script>