
<div class="container-fluid container-padding-top">
    <?php $flash_message = $this->Flash->render(); ?>
    <?php if (!empty(@$flash_message)) { ?>
        <div class="success-msg" id="success" style="text-align:center;">
            <?php echo $flash_message ?><!--File Uploaded Successfully.-->
        </div>
    <?php } ?>
    <div class="row">
        <div class="col-md-8 col-md-offset-2 bg-white margin-bottom-xl">
            <div class="padding-md">
                <div class="text-center">
                    <h3>Add Multiple Users using Excel File </h3>
                </div>
            </div>
            <hr/>
            <div class="<?php echo @$class; ?>">
                <a href="#" class="close" data-dismiss="alert" aria-label="close"><?php echo @$close; ?></a>
                <i class="<?php echo @$iclass; ?>"></i><?php echo @$sucessful; ?>.
            </div>
            
<!--            <div class="col-md-8 col-md-offset-2 bg-white margin-bottom-xl">
                  <h6><b>Instrunctions to upload Excel Data</b></h6>
                  <li>Add Multiple Users using Excel File</li>
            </div>-->
            
            
            <div class="" id="add_user" >
                <?php echo $this->Form->create('', ['type' => 'file', 'onsubmit'=>"return confirm('Do you really want to submit the form?');"]); ?>
                    <div class="col-xs-4">
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="name" class="padding-top-md">Excel File<span style="color: red">*</span></label>
                                </div>
                                <div class="col-md-9">
                                    <?php echo $this->Form->input('Excel file', ['required' => true, 'type' => 'file','class'=>'file_upload', 'id'=>'file_upload', 'label'=> false, 'name'=>'file_upload']); ?> 
                                    <span id="check_filename"></span>
                                </div>
                            </div>
                        
                        
                        <div class="col-xs-12 padding-bottom-lg text-center margin-top-lg">
                            <button type="reset" class="btn btn-primary btn-sm  padding-left-lg padding-right-lg">Reset</button>
                            <button type="submit" class="btn btn-danger btn-sm padding-left-lg padding-right-lg" id="adduser">Upload</button>
                            <?php $instr="Please keep the column of excel as it is like users table\n"
                                    . "id column should be empty as it will be taken by DB as autoincrement\n"
                                    . "\nMandatory Columns in excel are :-\n"
                                    . "user_type\n"
                                    . "username\n"
                                    . "emp_id\n"
                                    . "first_name\n"
                                    . "last_name\n"
                                    . "doj\n"
                                    . "email\n"
                                    . "mobile\n"; ?>
                            <i class="fa fa-info-circle" title="<?php echo $instr; ?>">
                                Instructions for uploading file
                            </i>
                            
                        </div>
                        <?php echo $this->Form->end(); ?>
                    </div>
                    
                    <div class="col-xs-8" style="border-color: #c8d7e4;height: 112px;border-style: ridge;">
<!--                        <div class="col-xs-12 padding-bottom-lg text-center margin-top-lg" >-->
                            <img src="../img/excel1.png" alt="Instruction for excel file to upload">
                        <!--</div>-->
                        
                    </div>
            </div>
            
            
            
        </div>
        
        
        
        
        
        <?php if(!empty($sheetData)){ ?>
        <div class="col-md-12 text-center">
            <h4 class="margin-0 padding-top-xs">Data Uploaded</h4>
        </div>
            <table class="table table-bordered table-striped" id="report_table">
                <thead>
<!--                    <tr>
                        <th>Username</th>
                        <th>Emp Id</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>DOJ</th>
                        <th>Email</th>
                        <th>Mobile</th>
                    </tr>-->
                </thead>
                <tbody>
                    <?php foreach ($sheetData as $logisticrecorddata) { ?>
                        <tr>
                            
                            <td><?php echo $logisticrecorddata['B'] ?></td>
                            <td><?php echo $logisticrecorddata['C'] ?></td>
                            <td><?php echo $logisticrecorddata['D'] ?></td>
                            <td><?php echo $logisticrecorddata['E'] ?></td>
                            <td><?php echo $logisticrecorddata['F'] ?></td>
                            <td><?php echo $logisticrecorddata['G'] ?></td>
                            <td><?php echo $logisticrecorddata['H'] ?></td>
                            <td><?php echo $logisticrecorddata['I'] ?></td>
                        </tr> 
                    <?php } ?>

                </tbody>
            </table>
        <?php } ?>
    </div>
    
    
    
    <?php echo $this->Html->script(['jquery-1.12.4', 'bootstrap.min', 'sidebar', 'jquery-ui', 'guage']); ?>
    <?php $username_url = $this->Url->build(['controller' => 'Users', 'action' => 'uploadUsersByExcel']); ?>

    <script>
        $( ".file_upload" ).change(function() {
            console.log( "Handler for .change() called.");
            
            /* getting filename */
            var filename =$("#file_upload").val();
            console.log( "filename - "+filename);
            
            /* checking extension of file */
            var parts = filename.split('.');
            var extension = parts[parts.length - 1];
            console.log( "extension - "+extension);
            
            /* Applying validation */
            if(extension == 'xls' || extension == 'xlsx'){
                console.log( "Seems Good! File is excel type");
                $('#file_upload').css('border','1px solid #cccccc');
                $('#check_filename').text('');
                $('#adduser').prop('disabled', false);
                valid = true;
                }else{
                    $('#file_upload').css('border','1px solid red');
                    $('#check_filename').text('File should be excel type only');
                    $('#check_filename').addClass('error_label');
                    $('#adduser').prop('disabled', true);
                    valid = false;
                    return false;
                }
        });
   </script>
   <style>
       .file_upload{margin-top: 12px;}
   </style>