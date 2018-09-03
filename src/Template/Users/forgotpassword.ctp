<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Forgot Password | Spring Board</title>
    <!-- Bootstrap -->
    <?php echo $this->Html->css(['bootstrap', 'style']); ?>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="./js/html5shiv.min.js"></script>
    <script src="./js/respond.min.js"></script>
    <![endif]-->
</head>
<body class="bg-light">

<nav class="navbar navbar-default navbar-white navbar-fixed-top" role="navigation">
    <div class="navbar-header">
        <a class="navbar-brand navbar-brand-image" href=""></a>
    </div>
</nav>

<div class="container-fluid container-padding-top">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 bg-white margin-bottom-xl">
            <div class="padding-md">
                <div class="text-center">
                    <h3>Forgot Password</h3>
                </div>
                <hr/>
                <?php echo $this->Form->create('',['id'=>"forgot_password"]);?>
                    <div class="margin-top-lg">
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="username" class="padding-top-md">Email</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" id="username" name="username" class="form-control" placeholder="Email">
                                <small class="text-muted">You shall receive a link on your email to reset your password</small>
                            </div>
                        </div>
                        <div class="form-group text-center margin-top-xl">
                            <button class="btn btn-danger" id="forgotpassword"><i class="fa fa-paper-plane"></i> Send me a link</button>
                            <div>
                                <?php $url1= $this->Url->build(['controller' => 'Users', 'action' => 'login']);?>
                                <a href="<?= $url1; ?>"><small class="text-muted">&larr;Back to SpringBoard</small></a>
                            </div>
                        </div>
                    </div>
                <?php echo $this->Form->end();?>
            </div>
        </div>
    </div>
</div>

<footer class="bg-white container-fluid">
    <div class="row">
        <div class="col-md-12 text-center">
            <?php echo $this->Html->image('springboard-logo.png'); ?>
        </div>
    </div>
</footer>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="./js/jquery-1.12.4.js"></script>
<script src="./js/jquery-ui.js"></script>
<?php echo $this->Html->script(['bootstrap.min', 'custom']); ?>

        <script>
        $(document).ready(function(){
            $('#forgotpassword').click(function(){

            if
                $('#forgot_password').submit();
            });
        });
        </script>
</body>
</html>