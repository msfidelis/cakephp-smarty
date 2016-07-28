<script src="/js/loader.js" type="text/javascript"></script>
<script src="/js/Dashboard/graphs.js" type="text/javascript"></script>
<div class="container-fluid">
    <div class="side-body padding-top">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <a href="#">
                    <div class="card red summary-inline">
                        <div class="card-body">
                            <i class="icon fa fa-calendar-check-o fa-4x"></i>
                            <div class="content">
                                <div class="title">12</div>
                                <div class="sub-title">Agendamentos de Hoje</div>
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
                                <div class="title">02</div>
                                <div class="sub-title">Novos Alertas</div>
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
                                <div class="title">46</div>
                                <div class="sub-title">Produtos Cadastrados</div>
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
                            <i class="icon fa fa-calendar fa-4x"></i>
                            <div class="content">
                                <div class="title">45</div>
                                <div class="sub-title">Agendamentos em Aberto</div>
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
                    <div class="col-md-12 col-sm-12">
                        <div class="thumbnail no-margin-bottom">
                            <div class="card card-success">
                                <div class="card-header">
                                    <div class="card-title">
                                        <div class="title"><i class="fa fa-area-chart"></i>Principais Serviços - Faturamento Trimestral</div>
                                    </div>
                                    <div class="clear-both"></div>
                                </div>
                                <div class="card-body no-padding">
                                    <div id="donutchart" style="width: 100%; height: 400px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xs-12">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="thumbnail no-margin-bottom">
                            <div class="card card-success">
                                <div class="card-header">
                                    <div class="card-title">
                                        <div class="title"><i class="fa fa-area-chart"></i>Status dos Agendamentos</div>
                                    </div>
                                    <div class="clear-both"></div>
                                </div>
                                <div class="card-body no-padding">
                                    <div id="faturamento" style="width: 100%; height: 400px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row  no-margin-bottom">
            <div class="col-sm-12 col-xs-12">
                <div class="col-md-12 col-sm-12">
                    <div class="thumbnail no-margin-bottom">
                        <div class="card card-success">
                            <div class="card-header">
                                <div class="card-title">
                                    <div class="title"><i class="fa fa-area-chart"></i>Faturamento Anual 2016</div>
                                </div>
                                <div class="clear-both"></div>
                            </div>
                            <div class="card-body no-padding">
                                <div id="resumo" style="width: 100%; height: 400px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

