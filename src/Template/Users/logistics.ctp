
<aside data-sidebar>
    <div class="padding-bottom-md container-fluid">
        <div class="row">
            <div class="col-xs-12 bg-dark">
                <div class="padding-md">
                    <div class="panel-close-btn" data-sidebar-button><i class="fa fa-times fa-lg text-white"></i></div>
                    <h3 class="margin-0">User's Logistics details</h3>
                </div>
            </div>
            <div class="col-xs-12 margin-top-md">
                <div class="nav-center">
                    <ul class="nav nav-pills text-center" style="margin-top:35px;">
                        <li class="active"><a data-toggle="pill" href="#joinee_information" id="joinee_tab">Joinee Information</a></li>
                        <!--<li><a data-toggle="pill" href="#interval_feedback" id="interval_tab">Interval Feedback</a></li>
                        <li><a data-toggle="pill" href="#roadmap" id="roadmap_tab">Roadmap</a></li>  -->
                    </ul>
                </div>
                <hr class="margin-top-0"/>
                <div class="tab-content">
                    <div id="joinee_information" class="tab-pane fade in active">
					
                 
                        <div id="logistics_arrangements" class="">
                            <ol class="breadcrumb">
                                <li class="text-blue pointer" onclick="">Joinee Information</li>
                                <li class="active">Logistics Arrangements</li>
                            </ol>
                            <div class="margin-top-sm">
                                <div class="row">
                                    <div class="col-md-3">
                                        <span id="">Name : </span>
                                        <strong id="username"></strong>
                                    </div>
                                    <div class="col-md-3">
                                        <span>Emp Id : </span>
                                        <strong id="empid"></strong>
                                    </div>
                                    <div class="col-md-3">
                                        <span>DOJ : </span>
                                        <strong id="logdoj"></strong>
                                    </div>
                                    <div class="col-md-3 text-right">
                                        <i class="fa fa-share text-red pointer fa-lg"></i>
                                    </div>
                                </div>
                            </div>
                            <hr/>
                            <div class="row">
<?php echo $this->Form->create();?>
<?php 
$i=1;

foreach($logistics as $logistic){
$cstatus = $logistic['department_id'];
$location_id = $logistic['location_id'];
$location_name=$locationarr[$location_id];
 @$cstatusTxt=$cstatusData[$cstatus];
  ?>
                                <div class="col-md-4">
                                    <div class="panel panel-primary joinee-blocks" onclick="dashboard.panelCheckboxToggle(this)">
                                        <div class="panel-body">
                                            <div class="panel-proceed-btn"  >
<input  id="logistic_id_<?php echo $logistic->id ;?>" type="checkbox" class="checkbox log_check" name="logistic_id[]" value="<?= $logistic->id ?>" multiple>


</div>
                                            
 

<strong><?= $logistic->title ?></strong>
                                            <p class="margin-bottom-0 text-muted"><?= $location_name ?></p>
                                            <p class="margin-bottom-0 text-primary"><?= @$cstatusTxt ?></p>
                                        </div>
                                    </div>
                                </div>

<?php   } ?>
                 <?php echo $this->Form->input('userid',(['name'=>'userid','type'=>'hidden','id'=>'userid'])); ?>               
                        
                      
                                
                            </div>
                            <hr class="margin-top-0"/>
                            <div class="row">
                                <div class="col-md-4 col-md-offset-4">
 <?php echo $this->Form->button('<i class="fa fa-paper-plane-o"></i> Send Requirements',(['class'=>'btn btn-danger btn-block','type'=>'button','onclick'=>'return logisticinsert();','id'=>''])); ?>  
                                  
                                </div>
                            </div>
  <?php echo $this->Form->end(); ?>      
                        </div>
                    
                      
                        
                       
                    </div>
                 
        </div>
    </div>
</aside>
<div class="overlay" data-sidebar-overlay></div>

<div class="container-fluid container-padding-top">
    <div class="row">
        <div class="col-xs-12 text-center">
            <h4>Manage Logistics</h4>
        </div>
        <div class="col-xs-12 margin-top-lg ">
            <table class="table table-bordered table-striped" id="report_table">
                <thead>
                <tr>
                    <th><div data-toggle="tooltip" data-placement="bottom" data-original-title="List of all the employees" class="red-tooltip">Employee Name</div></th>
                  
                    <th><div data-toggle="tooltip" data-placement="bottom" data-original-title="Employee ID" class="red-tooltip">Emp ID</div></th>
                    <th><div data-toggle="tooltip" data-placement="bottom" data-original-title="Date of joining of the employee" class="red-tooltip">DOJ</div></th>
                    <th><div data-toggle="tooltip" data-placement="bottom" data-original-title="Confirmation status of employees" class="red-tooltip">Confirm</div></th>
<th><div data-toggle="tooltip" data-placement="bottom" data-original-title="Status of logistics" class="red-tooltip">Logistics</div></th>
                </tr>
                </thead>
                <tbody>
				
				<?php 

foreach($userrecord as $userrecords) :
				@$log_userid= @$userrecords->logistics_arrangement[0]['user_id']; ?>
                    <tr>
                        <td><div class="text-blue logistic_user_arrangements" data-sidebar-button data-panel-type="" id="<?= 'user_'.$userrecords['id'] ?>" onclick="return displayIdBasedData('<?= $userrecords['id'] ?>');"><?= $userrecords['first_name']; ?> <?= $userrecords['last_name']; ?>

</div></td>
                      
                        <td><?= $userrecords['emp_id']; ?></td>
                        <td><?= $userrecords['doj']; ?></td>
  <td><i class="fa fa-check text-green"></i></td>
                        <td>
<?php if(!empty(@$log_userid)){ ?>
<i class="fa fa-check text-green"></i>
<?php } else { ?>
<i class="fa fa-times text-red"></i>
<?php } ?>
</td>
                    </tr>
					<?php endforeach; ?>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php echo $this->Html->script(['jquery-1.12.4', 'bootstrap.min', 'sidebar','jquery-ui','dashboard']); ?>
<?php $logistic_data = $this->Url->build(['controller'=>'Users','action'=>'userlogistic_data']) ?>
<?php $fetchlogisticsPopup = $this->Url->build(['controller'=>'Users','action'=>'fetchlogisticsPopup']) ?>
<?php $insertlogistics = $this->Url->build(['controller'=>'Users','action'=>'logisticinsert']) ?>

<script>
    $('[data-toggle="tooltip"]').tooltip();
</script>


<script>

function displayIdBasedData(id){
    $.ajax({
        url: '<?= $fetchlogisticsPopup ?>',
        method: 'POST',
        data: {id:id},
        success: function(data){
           var parsData = JSON.parse(data);
           var name = parsData[0].first_name + ' ' + parsData[0].last_name;
      
      $('#userid').val(parsData[0].id);
           $('#username').html(name);
  $('#name').html(parsData[0].first_name + ' ' + parsData[0].last_name);
        $('#empid').html(parsData[0].emp_id);
 
            $('#logdoj').html(parsData[0].doj.substring(0,10));


		   
        
        }
    });

 $.ajax({
        url: '<?= $logistic_data ?>',
        method: 'POST',

        data: {'user_id':id
                },
        success: function(data){
       
      $('.logstmsg').remove();
        $('.log_check').show();
        var assigned = 0;
        var recvd = 0;
        data = $.parseJSON(data);
        console.log(data.length);
        if (data.length > 0) {
            $(data).each(function (i, u) {
                if (u.logistic.id != undefined) {
                    var ik = u.logistic.id;
                    assigned++;
                    if (u.r_status == 1) {
                        recvd++;                        
                        $('#logistic_id_' + ik).parent().append('<p class="margin-bottom-0 text-green logstmsg">Received</p>');
                        $('#logistic_id_' + ik).hide();
                    } else if (u.r_status == 0) {
                       
		
                      $('#logistic_id_' + ik).parent().append('<p class="margin-bottom-0 text-orange logstmsg">InProcess</p>');
					   $('#logistic_id_' + ik).hide();
                    }
                }
            });
        }
        var stHtml = '<span class="text-green">' + recvd + '</span>/' + '<span class="text-orange">' + assigned + '</span>';
        console.log(stHtml);
		console.log(assigned);
		$('#logistic_count').html(stHtml);
$('.logistic_date').html(data[0].time_created.substring(0,10));
}
});





} 
</script>

<script>
function logisticinsert(){

var userid= $("#userid").val();
var logistic_id = new Array();
        $('input:checkbox[name="logistic_id[]"]:checked').each(function() {
           logistic_id.push($(this).val());
        });
   
    $.ajax({
        url: '<?= $insertlogistics ?>',
        method: 'POST',
        data: {userid:userid,
               logistic_id:logistic_id },
			    cache: false,
      beforeSend:function(){
         return confirm("Are you sure ? to insert Logisticas Requirments request  ");
      },
        success: function(data){
         		 
		 location.reload();
		 //alert("Logisticas Requirments request successfully inserted");
		  
	 
}
 });
} 
</script>


<style>
  
   .dataTables_info{width: 220px;}
    .paging_simple_numbers{width: 220px;float: right;margin-top: -44px;margin-top: -15px;}
    .dataTables_filter{float: right;}
    .form-control input-sm{width: 71px;}
    /*.col-sm-12{margin-top: -12px;}*/
    .col-xs-12{margin-bottom: -40px;}
</style>


<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
<script>
    $(document).ready(function () {
    $('#report_table').DataTable({
       "aaSorting" : [] 
         
    });
});
</script>
