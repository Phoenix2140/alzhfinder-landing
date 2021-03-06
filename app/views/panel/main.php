<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $titulo; ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo $baseUrl; ?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo $baseUrl; ?>/css/sb-admin.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo $baseUrl; ?>/css/font-awesome.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <?php echo $menu; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <?php echo $content; ?>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->


    <script>
        var baseUrl = "<?php echo $baseUrl; ?>";
    </script>
    
    <!-- jQuery -->
    <script src="<?php echo $baseUrl; ?>/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo $baseUrl; ?>/js/bootstrap.min.js"></script>

    <script src="<?php echo $baseUrl; ?>/js/tinymce/tinymce.min.js"></script>

    <script src="<?php echo $baseUrl; ?>/js/main.min.js"></script>


</body>

</html>
