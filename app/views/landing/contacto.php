<section id="title" class="emerald">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Contacto</h1>
                    <p>Si quieres saber más de nosotros, no dudes en contactarnos</p>
                </div>
                <div class="col-sm-6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="<?php echo $baseUrl; ?>">Inicio</a></li>
                        <li class="active">Contacto</li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!--/#title-->    

    <section id="contact-page" class="container">
        <div class="row">
            <div class="col-sm-8">
                <h4>Contacto</h4>
                <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" role="form">
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="form-group">
                                <input type="text" name="nombre" class="form-control" required="required" placeholder="Nombre">
                            </div>
                            <div class="form-group">
                                <input type="text" name="fono" class="form-control" required="required" placeholder="Fono">
                            </div>
                            <div class="form-group">
                                <input type="email" name="mail" class="form-control" required="required" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Enviar</button>
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Mensaje"></textarea>
                        </div>
                    </div>
                </form>
            </div><!--/.col-sm-8-->
            <div class="col-sm-4">
                <h4>Donde encontrarnos</h4>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d5233.216776803731!2d-72.61875303088524!3d-38.74789117197011!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sau!4v1467038280024" width="100%" height="215" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div><!--/.col-sm-4-->
        </div>
    </section><!--/#contact-page-->