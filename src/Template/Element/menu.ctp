<?php
$session = $this->request->session();
$session_data=$session->read();
$user_type = $session_data["Auth"]["User"]["user_type"];
$access_menu=[];
if(empty($active)){
    $active = 0;
}
if(!empty($session_data['Auth']['User']['access'])){
    foreach($session_data['Auth']['User']['access'] as $ac){
        if(!empty($ac)){
            $access_menu[]=$ac['id'];
        }
    }
}
 if($user_type == 1 || $user_type == 2 || $user_type == 3){?>



            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    <span>Onboarding <i class="fa fa-caret-down"></i></span>
                </a>
                <ul class="dropdown-menu">
                   
                   <?php  $acalass=""; if($active == 1){ $acalass='active'; }
 ?>
                     <li id ="1" class="<?= $acalass ?>"><?php if(in_array(13,$access_menu)) echo $this->Html->link('Manage Joinee',['controller' => 'Users', 'action' => 'manageUser']); ?></li>
                               
<li role="separator" class="divider"></li>
 <?php $acalassl=""; if($active == 2){ $acalassl='active'; }
 ?>
<li id ="2" class="<?= $acalassl ;?>"><?php if(in_array(14,$access_menu)) echo $this->Html->link('Logistics',['controller' => 'Users', 'action' => 'logistics']); ?></li>
                                <li role="separator" class="divider"></li>
<?php $aclass=""; if($active == 3) { $aclass='active'; } ?>
<!-- <li id="3" class="<?= $aclass ?>"><?php if(in_array(15,$access_menu)) //echo $this->Html->link('Confirmation',['controller' => 'Users', 'action' => 'confirmation']); ?></li>
 -->                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    <span>Roadmap <i class="fa fa-caret-down"></i></span>
                </a>
                
 <?php if($user_type == 1 ||  $user_type == 3){ ?>
<ul class="dropdown-menu">
<?php $aclassr=""; if($active == 4) { $aclassr='active'; } ?>
                   <li id ="4" class="<?= $aclassr ?>"> <?php if(in_array(16,$access_menu)) echo $this->Html->link('Roadmap',['controller' => 'Users', 'action' => 'roadmap']); ?></li>
  <li role="separator" class="divider"></li>
<?php $aclassf=""; if($active == 5) { $aclassf='active'; } ?>
                                <li  id ="5" class="<?= $aclassf ?>"><?php if(in_array(17,$access_menu)) echo $this->Html->link('Feedback',['controller' => 'feedback', 'action' => 'index']); ?></li>
</ul>                
<?php } ?>

            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    <span>Administration <i class="fa fa-caret-down"></i></span>
                </a>
<?php if($user_type == 1 ||  $user_type == 3){ ?>
                <ul class="dropdown-menu">
                  
                         <?php $aclass=""; if($active == 6) { $aclass='active'; } ?>       
<li id="6" class=" <?= $aclass ?>"><?php if(in_array(18,$access_menu)) echo $this->Html->link('Roles',['controller' => 'Users', 'action' => 'manageRole']); ?></li>
 <li role="separator" class="divider"></li>
<?php $aclass=""; if($active == 7) { $aclass='active'; } ?> 
                                <li  id="7 "class="<?= $aclass ?>"><?php if(in_array(19,$access_menu)) echo $this->Html->link('Users',['controller' => 'Users', 'action' => 'userManagement']); ?></li>
                               <li role="separator" class="divider"></li>
<?php $aclass=""; if ($active == '8'){ $aclass='active'; } ?>
<li  id ="8" class="<?= $aclass ?>"><?php if(in_array(20,$access_menu)) echo $this->Html->link('Manage Logistics',['controller' => 'Logistics', 'action' => 'index']); ?></li>
                            
                </ul>
<?php } ?>
            </li>
            




<?php }?>

