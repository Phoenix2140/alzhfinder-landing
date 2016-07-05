                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Contactos <small>administración de contactos</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Panel de Control
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tabpanel">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active">
                                        <a href="#contactos" aria-controls="contactos" role="tab" data-toggle="tab">Nuevos Contactos</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#archivados" aria-controls="archivados" role="tab" data-toggle="tab">Archivados (contactados)</a>
                                    </li>
                                </ul>    
                            </div>
                            <div class="panel-body">
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="contactos">
                                        <?php foreach ($listaContactos as $contacto) { ?>
                                            <a class="btn-contacto" data-toggle="modal" href='#contact-<?php echo $contacto["id_contactos"]; ?>'>
                                                <div class="panel panel-default">
                                                    <div class="panel-body">
                                                        <h3><?php echo $contacto["nombre"]; ?> <small><?php echo $contacto["fono"] ?></small></h3>
                                                        <p><?php echo $contacto["texto"]; ?></p>
                                                        <p>Responder <strong>Ahora</strong> a su email: <?php echo $contacto["email"]; ?></p>
                                                    </div>
                                                </div>
                                            </a>
                                        <?php } ?>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="archivados">
                                        <?php foreach ($listaContactados as $contacto) { ?>
                                            <div class="panel panel-info">
                                                <div class="panel-body">
                                                    <h3><?php echo $contacto["nombre"]; ?> <small><?php echo $contacto["fono"] ?></small></h3>
                                                    <p><?php echo $contacto["texto"]; ?></p>
                                                    <p>Responder <strong>Ahora</strong> a su email: <?php echo $contacto["email"]; ?></p>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <?php foreach ($listaContactos as $contacto) { ?>
                <div class="modal fade" id="contact-<?php echo $contacto["id_contactos"];?>">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title">Contactar a <?php echo $contacto["nombre"]; ?></h4>
                            </div>
                            <div class="modal-body">
                                <div id="msg-contacto-<?php echo $contacto["id_contactos"]; ?>">
                                </div>
                                <form action="" method="POST" role="form">
                                    <input type="hidden" name="email-<?php echo $contacto["id_contactos"]; ?>" id="email-<?php echo $contacto["id_contactos"]; ?>" class="form-control" value="<?php echo $contacto["email"]; ?>">
                                    
                                    <div class="form-group">
                                        <label for="titulo-<?php echo $contacto["id_contactos"]; ?>">Titulo</label>
                                        <input type="text" name="titulo-<?php echo $contacto["id_contactos"]; ?>" id="titulo-<?php echo $contacto["id_contactos"]; ?>" class="form-control" required="required" Placeholder="Ingresa el título del mensaje">
                                    </div>
                                    <div class="form-group">
                                        <label for="mensaje-<?php echo $contacto["id_contactos"]; ?>">Mensaje</label>
                                        <textarea name="mensaje-<?php echo $contacto["id_contactos"]; ?>" id="mensaje-<?php echo $contacto["id_contactos"]; ?>" class="form-control" rows="4" required="required" Placeholder="Ingresa el texto acá"></textarea>
                                    </div>

                            </div>
                            <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                    <button type="submit" class="btn btn-primary btn-contactar" value="<?php echo $contacto["id_contactos"]; ?>">Contactar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>

                <!--<a class="btn btn-primary" data-toggle="modal" href='#modal-id'>Trigger modal</a>
                <div class="modal fade" id="modal-id">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title">Modal title</h4>
                            </div>
                            <div class="modal-body">
                                
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div> -->