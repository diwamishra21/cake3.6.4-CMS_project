<?php
$session = $this->request->session();
$session_data=$session->read();
$user_type = $session_data["Auth"]["User"]["user_type"];


 if($user_type == 1 || $user_type == 2 || $user_type == 3){?>
    <ul class="nav navbar-nav custom-nav">
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars fa-lg"></i> <span class="hidden-lg hidden-md hidden-sm">Menu</span></a>
            <ul class="dropdown-menu multi-column columns-4">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-4">
                            <ul class="multi-column-dropdown">
                                <li><strong>Onboarding</strong></li>
                                <li class="divider"></li>
                               <!--  <li><?php echo $this->Html->link('Add Joinee',['controller' => 'Users', 'action' => 'addUser']); ?></li> -->
                                <li><?php echo $this->Html->link('Manage Joinee',['controller' => 'Users', 'action' => 'manageUser']); ?></li>
                                <li><?php echo $this->Html->link('Logistics',['controller' => 'Users', 'action' => 'logistics']); ?></li>
                                <li><?php echo $this->Html->link('Confirmation',['controller' => 'Users', 'action' => 'confirmation']); ?></li>
                            </ul>
                        </div>
                        <div class="col-sm-4">
                            <ul class="multi-column-dropdown">
                                <li><strong>Roadmap & Feedback</strong></li>
                                <li class="divider"></li>
                                <li><?php echo $this->Html->link('Roadmap',['controller' => 'Users', 'action' => 'roadmap']); ?></li>
                                <li><?php echo $this->Html->link('Feedback',['controller' => 'feedback', 'action' => 'questions']); ?></li>
                            </ul>
                        </div>
                        <div class="col-sm-4">
                            <ul class="multi-column-dropdown">
                                <li><strong>Administration</strong></li>
                                <li class="divider"></li>
                               <!--  <li><?php echo $this->Html->link('Reporting',['controller' => 'Users', 'action' => 'report']); ?></li> -->
                                <li><?php echo $this->Html->link('Roles',['controller' => 'Users', 'action' => 'manageRole']); ?></li>
                                <li><?php echo $this->Html->link('Users',['controller' => 'Users', 'action' => 'userManagement']); ?></li>
                                <li><?php echo $this->Html->link('Manage Logistics',['controller' => 'Logistics', 'action' => 'index']); ?></li>
                                <li><?php echo $this->Html->link('Manage Feedback Questions',['controller' => 'Feedback', 'action' => 'questionslist']); ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </ul>
    </li>
</ul>
<?php }?>

