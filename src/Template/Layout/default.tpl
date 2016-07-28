<!DOCTYPE html>
<html>
    <head>
        {$this->Html->charset()}
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            {$cakeDescription}
            {$this->fetch('title')}
        </title>
        {$this->Html->meta('icon')}

        {$this->Html->css(array(
          '/flat/css/bootstrap.min.css',
          '/flat/css/font-awesome.min.css',
          '/flat/css/animate.min.css',
          '/flat/css/bootstrap-switch.min.css',
          '/flat/css/dataTables.bootstrap.css',
          '/flat/css/checkbox3.min.css',
          '/css/jquery-ui.css',
          '/flat/css/dataTables.bootstrap.css',
          '/flat/css/select2.min.css',
          '/flat/css/style.css',
          '/flat/css/themes.css',
          '/js/toast/src/main/resources/css/jquery.toastmessage.css',
          '/flat/css/themes/flat-green.css'
        ))}



        {$this->Html->script(array(
          '/js/jquery.min.js',
          '/js/bootstrap.min.js',
          '/flat/js/Chart.min.js',
          '/flat/js/bootstrap-switch.min.js',
          '/flat/js/jquery.matchHeight-min.js',
          '/flat/js/jquery.dataTables.min.js',
          '/js/jquery-ui.js',
          '/js/masks.js',
          '/js/toast/src/main/javascript/jquery.toastmessage.js',
          '/flat/js/dataTables.bootstrap.min.js',
          '/flat/js/select2.full.min.js',
          '/flat/js/ace.js',
          '/flat/js/app.js',
          '/flat/js/mode-html.js',
          '/flat/js/theme-github.js'
        ))}


    </head>
    <body class="flat-green">
        <div class="app-container">
            <div class="row content-container">
                <nav class="navbar navbar-default navbar-fixed-top navbar-top">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-expand-toggle">
                                <i class="fa fa-bars icon"></i>
                            </button>
                            <ol class="breadcrumb navbar-breadcrumb">
                                <li class="active">Dashboard</li>
                            </ol>
                            <button type="button" class="navbar-right-expand-toggle pull-right visible-xs">
                                <i class="fa fa-th icon"></i>
                            </button>
                        </div>
                        <ul class="nav navbar-nav navbar-right">
                            <button type="button" class="navbar-right-expand-toggle pull-right visible-xs">
                                <i class="fa fa-times icon"></i>
                            </button>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-comments-o"></i></a>
                                <ul class="dropdown-menu animated fadeInDown">
                                    <li class="title">
                                        Notificações <span class="badge pull-right">0</span>
                                    </li>
                                    <li class="message">
                                        Mensagens
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown danger">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-star-half-o"></i> 4</a>
                                <ul class="dropdown-menu danger  animated fadeInDown">
                                    <li class="title">
                                        Notification <span class="badge pull-right">4</span>
                                    </li>
                                    <li>
                                        <ul class="list-group notifications">
                                            <a href="#">
                                                <li class="list-group-item">
                                                    <span class="badge">1</span> <i class="fa fa-exclamation-circle icon"></i> new registration
                                                </li>
                                            </a>
                                            <a href="#">
                                                <li class="list-group-item">
                                                    <span class="badge success">1</span> <i class="fa fa-check icon"></i> new orders
                                                </li>
                                            </a>
                                            <a href="#">
                                                <li class="list-group-item">
                                                    <span class="badge danger">2</span> <i class="fa fa-comments icon"></i> customers messages
                                                </li>
                                            </a>
                                            <a href="#">
                                                <li class="list-group-item message">
                                                    view all
                                                </li>
                                            </a>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown profile">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{$smarty.session.Auth.User.name}<span class="caret"></span></a>
                                <ul class="dropdown-menu animated fadeInDown">
                                    <li class="profile-img">

                                    </li>
                                    <li>
                                        <div class="profile-info">
                                            <h4 class="username">{$smarty.session.Auth.User.name}</h4>
                                            <p>{$smarty.session.Auth.User.email}</p>
                                            <div class="btn-group margin-bottom-2x" role="group">
                                                <a href="/users/logout" class="btn btn-default"><i class="fa fa-sign-out"></i> Logout</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>


                {$this->element('Navbar/navbar')}
                <!-- Main Content -->

                <div class="container-fluid">
                    <div class="side-body padding-top">
                        <div class='card'>
                            {if isset($alertMessage)}
                                <div class="alert alert-{$alertMessage.type} warning alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <strong>{$alertMessage.msg}</strong>
                                </div>
                            {/if}
                            {$this->fetch('content')}
                        </div>
                    </div>
                </div>

                <footer class="app-footer">
                    <div class="wrapper">
                        <span class="pull-right">2.1 <a href="#"><i class="fa fa-long-arrow-up"></i></a></span> © 2015 Copyright.
                    </div>
                </footer>
                </body>
                </html>
