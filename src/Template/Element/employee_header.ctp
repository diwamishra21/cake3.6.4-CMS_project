<nav class="navbar navbar-default navbar-white navbar-fixed-top" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand navbar-brand-image" href="./dashboard.html"></a>
    </div>
    <!--/.navbar-header-->

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
           <!--  <li><a href="#"><i class="fa fa-bell-o fa-lg text-blue"></i> <span class="hidden-lg hidden-md hidden-sm text-blue">Notifications</span></a></li>
            <li><a href="#"><i class="fa fa-question-circle fa-lg text-orange"></i> <span class="hidden-lg hidden-md hidden-sm text-orange">Help</span></a></li> -->
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    <div class="inline-block">
                        <img src="http://via.placeholder.com/25x25" class="img-circle">
                    </div>
                    <div class="inline-block padding-left-sm padding-right-md">
                        <?php 
                            $session = $this->request->session();
                            $user = $session->read('Auth.User');
                            $name = ucfirst($user['first_name']).' '.ucfirst($user['last_name']);

                        ?>
                        <span class="text-red"><?= $name ?><i class="fa fa-caret-down"></i></span>
                    </div>
                </a>
                <ul class="dropdown-menu">
                    <?php $changepassword= $this->Url->build(['controller' => 'Users', 'action' => 'changepassword'])?>
                            <li><a href="<?= $changepassword?>">Change Password</a></li>
                            <li role="separator" class="divider"></li>
                            <?php $logout= $this->Url->build(['controller' => 'Users', 'action' => 'logout']);?>
                            <li><a href="<?= $logout;?>">Sign out</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <!--/.navbar-collapse-->
</nav>