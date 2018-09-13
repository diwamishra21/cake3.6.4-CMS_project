<div class="container-fluid container-padding-top">
    <div class="row">
        <div class="col-xs-12 text-center">
            <h4>Confirmation</h4>
        </div>
        <!-- <div class="col-md-12">
            <h4>Confirmation</h4>
        </div> -->
       
        <div class="col-xs-12 margin-top-lg ">
            
            <table class="table table-bordered table-striped" id="report_table">
                <thead>
                <tr>
                    <th>Employee Name</th>
                    <th>Empoyee ID</th>
                    <th>DOJ</th>
                    <th>Department</th>
                    <th>BHR Feedback</th>
                    <th>Supervisor Feedback</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach($usersdata as $usersdata ){ ?>
                        
                        <tr>
                        <td><?php echo $usersdata['first_name'] ?><?php echo " ";?><?php echo $usersdata['last_name'] ?></</td>
                        <td><?php echo $usersdata['emp_id'] ?></</td>
                         
                        <td><?php $orgdate = $usersdata['doj'];  $date = date("d-m-Y", strtotime($orgdate)); echo $date; ?></td>
                        <td><?php echo $usersdata['department'] ?></td>
                        <td width="15%"><div class="well well-sm" style="overflow: auto;"><small></small>Lorem Ipsum </div></td>
                        <td width="15%"><div class="well well-sm" style="overflow: auto;"><small></small>Lorem Ipsum</div></td>
                        <td><span class="badge badge-success" style="background-color: green"><i class="fa fa-check"></i> Confirmed</span></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php echo $this->Html->script(['jquery-1.12.4', 'bootstrap.min', 'sidebar','jquery-ui','dashboard','confirmation']); ?>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
<script>
    $('[data-toggle="tooltip"]').tooltip();
</script>
<script>
    $(document).ready(function () {
    $('#report_table').DataTable({
       "aaSorting" : [] 
         
    });
});
</script>
<style>
  
   .dataTables_info{width: 220px;}
    .paging_simple_numbers{width: 220px;float: right;margin-top: -44px;margin-top: -15px;}
    .dataTables_filter{float: right;}
    .form-control input-sm{width: 71px;}
    /*.col-sm-12{margin-top: -12px;}*/
    .col-xs-12{margin-bottom: -40px;}
</style>