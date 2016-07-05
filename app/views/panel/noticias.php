                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Noticias <small>Panel de Noticias (newsletter)</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i> Panel de Control
                            </li>
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Noticias
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Últimas noticias creadas</h3>
                            </div>
                            <div class="panel-body">
                                <?php foreach ($noticias as $noticia) { ?>
                                    <div class="well well-sm">
                                        <h3><?php echo $noticia["titulo"]; ?> <small>por <strong><?php echo $nombresUsuarios[$noticia["id_usuarios"]]; ?></strong></small></h3>
                                        <?php echo $noticia["mensaje"]; ?>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Crear Nueva noticia</h3>
                            </div>
                            <div class="panel-body">
                                <form id="Formulario-noticia" action="" method="POST" class="form-horizontal" role="form">
                                    <label>Seleccione el correo que desea ocupar</label>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="email-radio" id="email-radio" value="0" checked="checked">Usar mi email
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="email-radio" id="email-radio" value="1">Usar NO-REPLY
                                            </label>
                                        </div>
                                    
                                    <label>Título de la noticia</label>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" name="titulo-noticia" id="titulo-noticia" placeholder="Ingrese el título de la noticia ACÁ">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <textarea name="mensaje-noticia" id="mensaje-noticia" class="form-control tinymce-msg" rows="3" required="required"></textarea>
                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-4 col-sm-offset-4">
                                            <button id="btn-enviar-noticia" type="submit" class="btn btn-primary btn-block">Enviar Noticia</button>
                                        </div>
                                    </div>
                                </form>
                                <div id="msg-news">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>