<div class="container-fluid container-padding-top">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 bg-white margin-bottom-xl">
            <div class="padding-md">
                <div class="text-center">
                    <h3>Add Question </h3>
                </div>
            </div>
            <hr/>
            <div class="<?php echo @$class; ?>">
                <a href="#" class="close" data-dismiss="alert" aria-label="close"><?php echo @$close; ?></a>
                <i class="<?php echo @$iclass; ?>"></i><?php echo @$sucessful; ?>.
            </div>
            <div class="" id="add_user" >
               <?php echo $this->Form->create();?>
               <div class="col-xs-12 margin-top-lg">
                <div class="row">
                    
					<div class="col-md-6">
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="title" class="padding-top-md">Assigned To</label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <select class="form-control" id="user_type" name="user_type">
                                        <option value="4">Employee</option>
                                        <option value="2">Supervisor</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
					
					
					
					<div class="col-md-6">
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="title" class="padding-top-md">Feedback Type</label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group type_append">
                                     <select class="form-control" id="type" name="feedback_type">
                                        <option value="15 days">15 days</option>
                                        <option value="90 days">90 days</option>
										<option value="30 days">30 days</option>
                                        <option value="180 days">180 days</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="title" class="padding-top-md">Category</label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <select class="form-control" id="user_type" name="category">
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
                                    <textarea required name="title[]" id="title" cols="3" rows="3" class="form-control"></textarea>
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
                                    <textarea  name="describtion[]" id="" cols="3" rows="3" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
					
					<div class="col-md-12">
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="title" class="padding-top-md">Status</label>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
								 <input type="checkbox" name="status[]"  class="form-control" value="1">
                                  
                                </div>
                            </div>
							</div>
                    </div>
					
					
						
					
                    </div>
					
					
					<div class="col-md-12">
                                <div class="form-group">
								 <button type="button" name="" onclick="return addquestion();"  class="btn btn-info" >Add More</button>
                                  
                                </div>
                            </div>
					
					
                    
					
					
                </div>
                <hr/>
                <div class="col-xs-12 text-center">
                    <button class="btn btn-danger padding-left-xl padding-right-xl" type="submit">Submit</button>
                </div>
            </div>
                <?php echo $this->Form->end();?>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>

<?php
echo $this->Html->script(['guage', 'custom', 'dashboard', 'sidebar', 'supervisor']);
?>

<script>
function addquestion(){

 var str = '<div class="col-md-6"><div class="form-group row"><div class="col-md-3"><label for="title" class="padding-top-md">Title</label></div><div class="col-md-9"><div class="form-group"><textarea required name="title[]" id="title" cols="3" rows="6" class="form-control"></textarea></div></div></div></div><div class="col-md-6"><div class="form-group row"><div class="col-md-3"><label for="title" class="padding-top-md">Desc</label></div><div class="col-md-9"><div class="form-group"><textarea  name="describtion[]" id="title" cols="3" rows="6" class="form-control"></textarea></div></div></div></div><div class="col-md-12"><div class="form-group row"><div class="col-md-3"><label for="title" class="padding-top-md">Status</label></div><div class="col-md-2"><div class="form-group"><input type="checkbox" name="status[]"  class="form-control" value="1" ></div></div></div></div>';
$("#add_question").append(str);
}
</script>


</body>
</html>
