
<div class="container-fluid container-padding-top">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 bg-white margin-bottom-xl">
            <div class="padding-md">
                <div class="text-center">
                    <h3>Change Password</h3>
                </div>
                <div class="<?php echo @$class; ?>">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close"><?php echo @$close; ?></a>
                   <i class="<?php echo @$iclass; ?>"></i><?php echo @$sucessful; ?>.
                </div>
                <hr/>
                <?php 
                    $session = $this->request->session();
                    $session_data=$session->read();
                    $user_id = $session_data["Auth"]["User"]["id"];
                 ?>   
                <?php echo $this->Form->create('',['id'=>"change_password"]);?>
                    <div class="margin-top-lg">
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="old_password" class="padding-top-md">Old Password</label>
                            </div>
                            <div class="col-md-9">
                                <input type="password" id="old_password" name="old_password" class="form-control" >
                                <span id="check_old_password"></span>
                            </div>
                            
                        </div>
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="new_password" class="padding-top-md">New Password</label>
                            </div>
                            <div class="col-md-9">
                                <input type="password" id="new_password" name="new_password" class="form-control" >
                                <span id="check_new_password"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="confirm_password" class="padding-top-md">Confirm New Password</label>
                            </div>
                            <div class="col-md-9">
                                <input type="password" id="confirm_password" name="confirm_password" class="form-control">
                                <span id="check_confirm_password"></span>
                                <input type="hidden" id="userid" name="userid" class="form-control" value="<?php echo $user_id; ?>"
                            </div>
                        </div>
                        <div class="form-group text-center margin-top-xl">
                            <button class="btn btn-danger" id="changepaswrd"><i class="fa fa-paper-plane"></i> Change Password</button>
                        </div>
                    </div>
                <?php echo $this->Form->end(); ?>
            </div>
        </div>
    </div>
</div>


<!-- Include all compiled plugins (below), or include individual files as needed -->

<?php echo $this->Html->script(['jquery-1.12.4', 'bootstrap.min', 'sidebar','jquery-ui','dashboard','chart.min','guage']); ?>
<script type="text/javascript">
    $(document).ready(function(){
     
     $('#changepaswrd').click(function(){
        var valid = true;
        if($('#old_password').val()=='')
            {
                $('#old_password').css('border','1px solid red');
                $('#check_old_password').text('Please enter current password');
                $('#check_old_password').addClass('error_label');
                valid = false;
            }
            else {
                $('#old_password').css('border','1px solid #cccccc');
                $('#check_old_password').text('');
            }

            if($('#new_password').val()=='')
            {
                $('#new_password').css('border','1px solid red');
                $('#check_new_password').text('Please enter new password');
                $('#check_new_password').addClass('error_label');
                valid = false;
            }
            else {
                $('#new_password').css('border','1px solid #cccccc');
                $('#check_new_password').text('');
            }

            if($('#confirm_password').val()=='')
            {
                $('#confirm_password').css('border','1px solid red');
                $('#check_confirm_password').text('Please enter confirm password');
                $('#check_confirm_password').addClass('error_label');
                valid = false;
            }
            else {
                $('#confirm_password').css('border','1px solid #cccccc');
                $('#check_confirm_password').text('');
            }
            if(($('#new_password').val()!= '' && $('#confirm_password').val()!='') && ($('#new_password').val() != $('#confirm_password').val()))
            {
                $('#confirm_password').css('border','1px solid red');
                $('#new_password').css('border','1px solid red');
                $('#check_confirm_password').text('Password mismatch');
                $('#check_confirm_password').addClass('error_label');
                $('#check_new_password').text('Password mismatch');
                $('#check_new_password').addClass('error_label');
                valid = false;
            }
            else
            {   
                
            }

            if(valid == true){
                $('#change_password').submit();
            }

            else
            {
                return false;
            }
       
         
     }) ;   
 
    });

</script>
