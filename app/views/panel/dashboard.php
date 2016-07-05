<!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Panel de Control <small>vista parcial</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Panel de Control
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">Información de contactos</h3>
                            </div>
                            <div class="panel-body">
                                <div class="col-xs-12">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <div class="row">
                                                <div class="col-xs-3">
                                                    <i class="fa fa-comments fa-5x"></i>
                                                </div>
                                                <div class="col-xs-9 text-right">
                                                    <div class="huge"><?php echo $viejosContactos; ?></div>
                                                    <div>Contactos atendidos!</div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="<?php echo $baseUrl; ?>/panel/contactos#no-atendidos">
                                            <div class="panel-footer">
                                                <span class="pull-left">Ver detalles</span>
                                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                <div class="clearfix"></div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="panel panel-green">
                                        <div class="panel-heading">
                                            <div class="row">
                                                <div class="col-xs-3">
                                                    <i class="fa fa-tasks fa-5x"></i>
                                                </div>
                                                <div class="col-xs-9 text-right">
                                                    <div class="huge"><?php echo $misAtendidos; ?></div>
                                                    <div>Mis contactos atendidos!</div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="<?php echo $baseUrl; ?>/panel/contactos#atendidos">
                                            <div class="panel-footer">
                                                <span class="pull-left">Ver detalles</span>
                                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                <div class="clearfix"></div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="panel panel-red">
                                        <div class="panel-heading">
                                            <div class="row">
                                                <div class="col-xs-3">
                                                    <i class="fa fa-user fa-5x"></i>
                                                </div>
                                                <div class="col-xs-9 text-right">
                                                    <div class="huge"><?php echo $nuevosContactos; ?></div>
                                                    <div>Contactos sin atender!</div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="<?php echo $baseUrl; ?>/panel/contactos#atendidos">
                                            <div class="panel-footer">
                                                <span class="pull-left">Ver detalles</span>
                                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                <div class="clearfix"></div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title">Información de Noticias</h3>
                            </div>
                            <div class="panel-body">
                                <div class="col-xs-12">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <div class="row">
                                                <div class="col-xs-3">
                                                    <i class="fa fa-newspaper-o fa-5x"></i>
                                                </div>
                                                <div class="col-xs-9 text-right">
                                                    <div class="huge"><?php echo $noticiasEnviadas; ?></div>
                                                    <div>Noticias enviadas!</div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="<?php echo $baseUrl; ?>/panel/contactos#no-atendidos">
                                            <div class="panel-footer">
                                                <span class="pull-left">Ver detalles</span>
                                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                <div class="clearfix"></div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="panel panel-green">
                                        <div class="panel-heading">
                                            <div class="row">
                                                <div class="col-xs-3">
                                                    <i class="fa fa-tasks fa-5x"></i>
                                                </div>
                                                <div class="col-xs-9 text-right">
                                                    <div class="huge"><?php echo $misNoticias; ?></div>
                                                    <div>Mis noticias enviadas!</div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="<?php echo $baseUrl; ?>/panel/contactos#atendidos">
                                            <div class="panel-footer">
                                                <span class="pull-left">Ver detalles</span>
                                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                <div class="clearfix"></div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="panel panel-red">
                                        <div class="panel-heading">
                                            <div class="row">
                                                <div class="col-xs-3">
                                                    <i class="fa fa-users fa-5x"></i>
                                                </div>
                                                <div class="col-xs-9 text-right">
                                                    <div class="huge"><?php echo $suscritosNewsletter; ?></div>
                                                    <div>Inscritos al Newsletter!</div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="<?php echo $baseUrl; ?>/panel/contactos#atendidos">
                                            <div class="panel-footer">
                                                <span class="pull-left">Ver detalles</span>
                                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                <div class="clearfix"></div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-sm-12 col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right fa-fw"></i> Últimas 5 Noticias</h3>
                            </div>
                            <div class="panel-body">
                                <?php foreach ($ultimasNoticias as $not) { ?>
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <h3><?php echo $not["titulo"]; ?></h3>
                                            <?php echo $not["mensaje"]; ?>
                                        </div>
                                    </div>
                                <?php } ?>
                                <div class="text-right">
                                    <a href="<?php echo $baseUrl; ?>/panel/contactos">Ver toda la actividad <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-clock-o fa-fw"></i> Últimos 5 inscritos</h3>
                            </div>
                            <div class="panel-body">
                                <?php foreach ($ultimosInscritos as $ins) { ?>
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <p><?php echo $ins["email"]; ?></p>
                                        </div>
                                    </div>
                                <?php } ?>
                                <div class="text-right">
                                    <a href="<?php echo $baseUrl; ?>/panel/noticias">Ver toda la actividad <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-clock-o fa-fw"></i> Últimos contactos atendidos</h3>
                            </div>
                            <div class="panel-body">
                                <?php foreach ($ultimosAtendidos as $at) { ?>
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                        </div>
                                    </div>
                                <?php } ?>

                                <div class="text-right">
                                    <a href="<?php echo $baseUrl; ?>/panel/noticias">Ver toda la actividad <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                