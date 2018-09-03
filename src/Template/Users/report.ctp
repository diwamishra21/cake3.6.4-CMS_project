<div class="overlay" data-sidebar-overlay></div>

<div class="container container-padding-top">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel-block bg-transparent" id="reports">
                <div class="row">
                    <div class="col-xs-8">
                        <h4 class="panel-block-title">Reports</h4>
                    </div>
                    <div class="col-xs-4 text-right">
                        <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#downloadReport"><i class="fa fa-download"></i> Download Report</button>
                    </div>
                </div>
            </div>
            <hr/>
            <table class="table table-striped" id="report_table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Employee Name</th>
                    <th>Confirm</th>
                    <th>Emp Id</th>
                    <th>DOJ</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Dhanya Menon</td>
                        <td><span class="text-green">Confirmed</span></td>
                        <td>QA110231</td>
                        <td>01/05/2018</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Dhanya Menon</td>
                        <td><span class="text-green">Confirmed</span></td>
                        <td>QA110231</td>
                        <td>01/05/2018</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Dhanya Menon</td>
                        <td><span class="text-green">Confirmed</span></td>
                        <td>QA110231</td>
                        <td>01/05/2018</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Dhanya Menon</td>
                        <td><span class="text-green">Confirmed</span></td>
                        <td>QA110231</td>
                        <td>01/05/2018</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Dhanya Menon</td>
                        <td><span class="text-green">Confirmed</span></td>
                        <td>QA110231</td>
                        <td>01/05/2018</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Dhanya Menon</td>
                        <td><span class="text-red">Pending</span></td>
                        <td>QA110231</td>
                        <td>01/05/2018</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="downloadReport" tabindex="-1" role="dialog" aria-labelledby="downloadReport">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Download Report</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="report_name">Report Name</label>
                            <input id="report_name" name="report_name" class="form-control"/>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <label>Choose fields to download in report</label>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="checkbox" id="report_checkbox1" class="checkbox-inline"/>
                            <label for="report_checkbox1">Emp Id</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="checkbox" id="report_checkbox2" class="checkbox-inline"/>
                            <label for="report_checkbox2">Name</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="checkbox" id="report_checkbox3" class="checkbox-inline"/>
                            <label for="report_checkbox3">Confirmation Status</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="checkbox" id="report_checkbox4" class="checkbox-inline"/>
                            <label for="report_checkbox4">DOJ</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="checkbox" id="report_checkbox5" class="checkbox-inline"/>
                            <label for="report_checkbox5">Intimation</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="checkbox" id="report_checkbox6" class="checkbox-inline"/>
                            <label for="report_checkbox6">Arrangements</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="checkbox" id="report_checkbox7" class="checkbox-inline"/>
                            <label for="report_checkbox7">Session Intimation</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="checkbox" id="report_checkbox8" class="checkbox-inline"/>
                            <label for="report_checkbox8">15 Day Checklist</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="checkbox" id="report_checkbox9" class="checkbox-inline"/>
                            <label for="report_checkbox9">30 Day Feedback</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="checkbox" id="report_checkbox10" class="checkbox-inline"/>
                            <label for="report_checkbox10">45 Day Feedback</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="checkbox" id="report_checkbox11" class="checkbox-inline"/>
                            <label for="report_checkbox11">90 Day Feedback</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-dark">Download Report</button>
            </div>
        </div>
    </div>
</div>

<?php echo $this->Html->script(['jquery-1.12.4', 'bootstrap.min', 'sidebar','jquery-ui','dashboard']); ?>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
<script>
    $('#report_table').DataTable();
</script>