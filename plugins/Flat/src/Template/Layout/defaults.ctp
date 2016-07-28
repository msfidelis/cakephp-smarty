<!DOCTYPE html>
<html>
    <head>
        <title>Flat Admin V.2 - Free Bootstrap Admin Templates</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>

        <!-- CSS/BOOTSTRAP -->
        <?=
        $this->Html->css(array(
          '/flat/css/bootstrap.min.css',
          '/flat/css/font-awesome.min.css',
          '/flat/css/animate.min.css',
          '/flat/css/bootstrap-switch.min.css',
          '/flat/css/checkbox3.min.css',
          '/flat/css/jquery.dataTables.min.css',
          '/flat/css/dataTables.bootstrap.css',
          '/flat/css/select2.min.css'
        ));
        ?>

        <!-- CSS App -->         
        <?=
        $this->Html->css(array(
          '/flat/css/style.css',
          '/flat/css/themes/flat-blue.css',
          '/flat/css/themes.css'
        ));
        ?>

    </head>
    <body class="flat-blue">
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
                                        Notification <span class="badge pull-right">0</span>
                                    </li>
                                    <li class="message">
                                        No new notification
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
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Emily Hart <span class="caret"></span></a>
                                <ul class="dropdown-menu animated fadeInDown">
                                    <li class="profile-img">
                                        <img src="img/profile/picjumbo.com_HNCK4153_resize.jpg" class="profile-img">
                                    </li>
                                    <li>
                                        <div class="profile-info">
                                            <h4 class="username">Emily Hart</h4>
                                            <p>emily_hart@email.com</p>
                                            <div class="btn-group margin-bottom-2x" role="group">
                                                <button type="button" class="btn btn-default"><i class="fa fa-user"></i> Profile</button>
                                                <button type="button" class="btn btn-default"><i class="fa fa-sign-out"></i> Logout</button>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
                <?php echo $this->Element('navbar/navbar') ;?>
                <!-- Main Content -->
                <div class="container-fluid">
                    <div class="side-body padding-top">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                <a href="#">
                                    <div class="card red summary-inline">
                                        <div class="card-body">
                                            <i class="icon fa fa-inbox fa-4x"></i>
                                            <div class="content">
                                                <div class="title">50</div>
                                                <div class="sub-title">New Mails</div>
                                            </div>
                                            <div class="clear-both"></div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                <a href="#">
                                    <div class="card yellow summary-inline">
                                        <div class="card-body">
                                            <i class="icon fa fa-comments fa-4x"></i>
                                            <div class="content">
                                                <div class="title">23</div>
                                                <div class="sub-title">New Message</div>
                                            </div>
                                            <div class="clear-both"></div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                <a href="#">
                                    <div class="card green summary-inline">
                                        <div class="card-body">
                                            <i class="icon fa fa-tags fa-4x"></i>
                                            <div class="content">
                                                <div class="title">280</div>
                                                <div class="sub-title">Product View</div>
                                            </div>
                                            <div class="clear-both"></div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                <a href="#">
                                    <div class="card blue summary-inline">
                                        <div class="card-body">
                                            <i class="icon fa fa-share-alt fa-4x"></i>
                                            <div class="content">
                                                <div class="title">16</div>
                                                <div class="sub-title">Share</div>
                                            </div>
                                            <div class="clear-both"></div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row  no-margin-bottom">
                            <div class="col-sm-6 col-xs-12">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="card primary">
                                            <div class="card-jumbotron no-padding">
                                                <canvas id="jumbotron-line-chart" class="chart no-padding"></canvas>
                                            </div>
                                            <div class="card-body half-padding">
                                                <h4 class="float-left no-margin font-weight-300">Profits</h4>
                                                <h2 class="float-right no-margin font-weight-300">$3200</h2>
                                                <div class="clear-both"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="thumbnail no-margin-bottom">
                                            <img src="/img/thumbnails/picjumbo.com_IMG_4566.jpg" class="img-responsive">
                                            <div class="caption">
                                                <h3 id="thumbnail-label">Thumbnail label<a class="anchorjs-link" href="#thumbnail-label"><span class="anchorjs-icon"></span></a></h3>
                                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                                <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="thumbnail no-margin-bottom">
                                            <img src="/img/thumbnails/picjumbo.com_IMG_3241.jpg" class="img-responsive">
                                            <div class="caption">
                                                <h3 id="thumbnail-label">Thumbnail label<a class="anchorjs-link" href="#thumbnail-label"><span class="anchorjs-icon"></span></a></h3>
                                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                                <p><a href="#" class="btn btn-success" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php $this->fetch('content'); ?>
                            <div class="col-sm-6 col-xs-12">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="card primary">
                                            <div class="card-jumbotron no-padding">
                                                <canvas id="jumbotron-bar-chart" class="chart no-padding"></canvas>
                                            </div>
                                            <div class="card-body half-padding">
                                                <h4 class="float-left no-margin font-weight-300">Orders</h4>
                                                <div class="clear-both"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="card primary">
                                            <div class="card-jumbotron no-padding">
                                                <canvas id="jumbotron-line-2-chart" class="chart no-padding"></canvas>
                                            </div>
                                            <div class="card-body half-padding">
                                                <h4 class="float-left no-margin font-weight-300">Pages view</h4>
                                                <div class="clear-both"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-success">
                                    <div class="card-header">
                                        <div class="card-title">
                                            <div class="title"><i class="fa fa-comments-o"></i> Last Message</div>
                                        </div>
                                        <div class="clear-both"></div>
                                    </div>
                                    <div class="card-body no-padding">
                                        <ul class="message-list">
                                            <a href="#">
                                                <li>
                                                    <img src="/img/profile/profile-1.jpg" class="profile-img pull-left">
                                                    <div class="message-block">
                                                        <div><span class="username">Tui2Tone</span> <span class="message-datetime">12 min ago</span>
                                                        </div>
                                                        <div class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.</div>
                                                    </div>
                                                </li>
                                            </a>
                                            <a href="#">
                                                <li>
                                                    <img src="/img/profile/profile-1.jpg" class="profile-img pull-left">
                                                    <div class="message-block">
                                                        <div><span class="username">Tui2Tone</span> <span class="message-datetime">15 min ago</span>
                                                        </div>
                                                        <div class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.</div>
                                                    </div>
                                                </li>
                                            </a>
                                            <a href="#">
                                                <li>
                                                    <img src="/img/profile/profile-1.jpg" class="profile-img pull-left">
                                                    <div class="message-block">
                                                        <div><span class="username">Tui2Tone</span> <span class="message-datetime">2 hour ago</span>
                                                        </div>
                                                        <div class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.</div>
                                                    </div>
                                                </li>
                                            </a>
                                            <a href="#">
                                                <li>
                                                    <img src="/img/profile/profile-1.jpg" class="profile-img pull-left">
                                                    <div class="message-block">
                                                        <div><span class="username">Tui2Tone</span> <span class="message-datetime">1 day ago</span>
                                                        </div>
                                                        <div class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.</div>
                                                    </div>
                                                </li>
                                            </a>
                                            <a href="#" id="message-load-more">
                                                <li class="text-center load-more">
                                                    <i class="fa fa-refresh"></i> load more..
                                                </li>
                                            </a>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="app-footer">
                <div class="wrapper">
                    <span class="pull-right">2.1 <a href="#"><i class="fa fa-long-arrow-up"></i></a></span> © 2015 Copyright.
                </div>
            </footer>
            <div>

                </body>

                <?php
                $this->Html->script(array(
                  'jquery-2.2.2.min.js',
                  '/flat/js/bootstrap.min.js',
                  '/flat/js/Chart.min.js',
                  '/flat/js/bootstrap-switch.min.js',
                  '/flat/js/jquery.matchHeight-min.js',
                  '/flat/js/jquery.dataTables.min.js',
                  '/flat/js/select2.full.min.js',
                  '/flat/js/ace.js',
                  '/flat/js/mode-html.js',
                  '/flat/js/theme-github.js',
                  '/flat/js/index.js',
                  '/flat/js/app.js',
                ));
                ?>