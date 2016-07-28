<head>
    <title>Flat Admin V.2 - Free Bootstrap Admin Templates</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>

    <!-- CSS/BOOTSTRAP -->

    <link rel="stylesheet" href="/flat/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/flat/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="/flat/css/animate.min.css"/>
    <link rel="stylesheet" href="/flat/css/bootstrap-switch.min.css"/>
    <link rel="stylesheet" href="/flat/css/checkbox3.min.css"/>
    <link rel="stylesheet" href="/flat/css/jquery.dataTables.min.css"/>
    <link rel="stylesheet" href="/flat/css/dataTables.bootstrap.css"/>
    <link rel="stylesheet" href="/flat/css/select2.min.css"/>

    <!-- CSS App -->         

    <link rel="stylesheet" href="/flat/css/style.css"/>
    <link rel="stylesheet" href="/flat/css/themes/flat-blue.css"/>
    <link rel="stylesheet" href="/flat/css/themes.css"/>

</head>
<body class="flat-blue login-page">
    <div class="container">
        <div class="login-box">
            <div>
                <div class="login-form row">
                    <div class="col-sm-12 text-center login-header">
                        <i class="login-logo fa fa-connectdevelop fa-5x"></i>
                        <h4 class="login-title">Flat Admin V2</h4>
                    </div>
                    <div class="col-sm-12">
                        <div class="login-body">
                            <div class="progress hidden" id="login-progress">
                                <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                    Log In...
                                </div>
                            </div>
                            <?php
                            echo$this->Form->create();
                            echo $this->Form->input('username', ['class' => 'form-control']);
                            echo $this->Form->input('password', ['class' => 'form-control']);
                            echo $this->Form->button('Login', ['class' => 'btn btn-default']);
                            echo$this->Form->end();
                            ?>
                        </div>
                        <div class="login-footer">
                            <span class="text-right"><a href="#" class="color-white">Forgot password?</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
