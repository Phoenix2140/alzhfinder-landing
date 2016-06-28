<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo $titulo; ?></title>
    <link href="<?php echo $baseUrl; ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $baseUrl; ?>/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo $baseUrl; ?>/css/prettyPhoto.min.css" rel="stylesheet">
    <link href="<?php echo $baseUrl; ?>/css/animate.min.css" rel="stylesheet">
    <link href="<?php echo $baseUrl; ?>/css/main.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $baseUrl; ?>/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $baseUrl; ?>/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $baseUrl; ?>/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo $baseUrl; ?>/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->
<body>  
	<?php echo $menu; ?>

	<?php echo $content; ?>

	<section id="bottom" class="wet-asphalt">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <h4>Acerca de Nosotros</h4>
                    <p>Creemos que la seguridad de tus seres queridos es lo principal ante todo</p>
                    <p>Nos dedicamos a cuidar de tus seres queridos.</p>
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <h4>Donde encontrarnos</h4>
                    <address>
                        <strong>Alzhfinder.</strong><br>
                        Francisco Salazar<br>
                        Temuco, Chile<br>
                        <abbr title="Phone">P:</abbr> (56) XXXXXXXX
                    </address>
                </div><!--/.col-md-3-->


                <div class="col-md-3 col-sm-6">
                    <h4>Newsletter</h4>
                    <p>Mantente siempre informado sobre nuestra noticias!</p>
                    <form role="form">
                        <div class="input-group">
                            <input type="email" class="form-control" name="news-mail" id="news-mail" autocomplete="off" placeholder="Ingresa tu email">
                            <span class="input-group-btn">
                                <button id="newsletter-btn" class="btn btn-danger" type="sbmit">Registrate</button>
                            </span>
                        </div>
                    </form>
                    <div id="post-msg-news">
                        
                    </div>
                </div> <!--/.col-md-3-->
                <div class="col-md-3 col-sm-6">
                    <h4>Búscanos en la redes sociales</h4>
                    <div>
                        <div class="col-xs-3">
                            <a href=""><i class="fa fa-twitter fa-2x"></i></a>
                        </div>
                        <div class="col-xs-3">
                            <a href=""><i class="fa fa-facebook fa-2x"></i></a>
                        </div>
                        <div class="col-xs-3">
                            <a href=""><i class="fa fa-google-plus fa-2x"></i></a>
                        </div>
                        <div class="col-xs-3">
                            <a href=""><i class="fa fa-youtube fa-2x"></i></a>
                        </div>
                    </div>  
                </div><!--/.col-md-3-->
            </div>
        </div>
    </section><!--/#bottom-->

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2016 Alzhfinder. Todos los derechos reservados.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="<?php echo $baseUrl; ?>">Inicio</a></li>
                        <li><a href="<?php echo $baseUrl; ?>/acerca">Acerca de Nosotros</a></li>
                        <li><a href="<?php echo $baseUrl; ?>/faq">FAQ</a></li>
                        <li><a href="<?php echo $baseUrl; ?>/contacto">Contacto</a></li>
                        <li><a id="gototop" class="gototop" href="#"><i class="icon-chevron-up"></i></a></li><!--#gototop-->
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script>
        var baseUrl = "<?php echo $baseUrl; ?>";
    </script>
    <script src="<?php echo $baseUrl; ?>/js/jquery.js"></script>
    <script src="<?php echo $baseUrl; ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo $baseUrl; ?>/js/main.min.js"></script>
</body>
</html>