<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sign In | Spring Board</title>
        <!-- Bootstrap -->
        <?php echo $this->Html->css(['bootstrap', 'style']); ?>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="h-100 login-wrapper">
        <div class="container-fluid h-100">
            <div class="row h-100 login-bg-image">
                <div class="col-md-8 hidden-sm hidden-xs">

                </div>
                <div class="col-md-4 bg-white h-100">
                    <div class="container-fluid">
                        <div class="client-logo text-center padding-lg">
                            <?php echo $this->Html->image('logo-quatrro.png', ['alt' => "Quatrro Logo"]); ?>
                        </div>
                       <!--  <div class="nav-center">
                            <ul class="nav nav-pills text-center padding-top-lg">
                                <li class="active"><a data-toggle="pill" href="#signIn">Sign In</a></li>
                                <li><a data-toggle="pill" href="#signUp">Request Access</a></li>
                            </ul>
                        </div> -->
                        <?php echo $this->Form->create();?>
                        <div class="tab-content padding-top-lg">
                            <div id="signIn" class="tab-pane fade in active">
                                    <div class="form-group margin-top-lg">
                                        <h5 style="color:red;padding-bottom:20px;">
                                        <?= $this->Flash->render('flash', ['element' => 'login_error']); ?>
                                        </h5>    
                                        <label class="hidden" for="username">Username</label>
                                       <?php echo $this->Form->input('username',["label"=>false,'type'=>'text','id'=>'','placeholder'=>'Enter E-mail Id','class'=>'form-control']);?>
                                    </div>
                                    <div class="form-group">
                                        <label class="hidden" for="password">Password</label>
                                       	<?php echo $this->Form->input('password',["label"=>false,'type'=>'password','id'=>'','placeholder'=>' Enter Password','class'=>'form-control']);?>
                                    </div>
                                    <div class="form-group margin-top-lg">
									<?php echo $this->Form->button('Sign In',(['type'=>'submit','class'=>'btn btn-danger btn-lg btn-block sbt']));?>
                                      
                                    </div>
                                    <div class="text-center">
                               <?php $url= $this->Url->build(['controller' => 'Users', 'action' => 'forgotpassword']);?>
                                <a href="<?= $url; ?>"><small class="text-muted">Forgot Password?</small></a>
                            </div>
                                <?php echo $this->Form->end();?>
                            </div>
                            <div id="signUp" class="tab-pane fade">
                                <form id="signup_form">
                                    <div class="form-group margin-top-lg">
                                        <label class="hidden" for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                                    </div>
                                    <div class="form-group margin-top-lg">
                                        <button class="btn btn-danger btn-lg btn-block">Request</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="margin-top-xl padding-top-xl client-logo text-center">
                            <?php echo $this->Html->image('springboard-logo.png', ['alt' => "Logo"]); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <?php echo $this->Html->script(['bootstrap.min', 'custom']); ?>
        <script>
        $(document).ready(function(){
            $('.sbt').click(function(){
                $('#login_form').submit();
            });
        });
        </script>
    </body>
</html>
