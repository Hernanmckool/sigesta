<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="plugins/select2/select2.min.css"> <!-- usuario-->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
          <!-- Conteniene el la cabecera "HEADER" -->
        <?php include "header.php"; ?>      <!-- Incluimos el header del proyecto -->
          <!-- Conteniene el menu lateral -->
        <?php include "menu_lateral.php"; ?>      <!-- Incluimos el menu lateral -->
          <!-- Contenido Wrapper. Contiene la informacion de la pagina -->
        <div class="content-wrapper">
            <!-- Cabecera de Contenido (Page header) -->
          <?php include "ruta_navegacion.php"; ?>      <!-- Incluimos el ruta de navegacion -->
            <!-- Seccion Principal de CONTENIDO -->
            <section class="content">


              <!-- HACER ALGO AQUI -->
        <?php include "usuarios.php"; ?>      <!-- Incluimos el fotter del documento -->

            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->
          <!-- Fotter -->
        <?php include "fotter.php"; ?>      <!-- Incluimos el fotter del documento -->
          <!-- Control Sidebar -->
        <?php include "menu_sidebar.php"; ?>      <!-- Incluimos el menu del sidebar -->
    </div><!-- ./wrapper -->

    <!-- Incluimos nuestras librerias -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="dist/js/app.min.js"></script>    <!-- Pertenece a la plantilla -->
    <script src="plugins/select2/select2.full.min.js"></script><!-- usuario-->
    <script src="plugins/input-mask/jquery.inputmask.js"></script><!-- usuario-->
    <script src="plugins/input-mask/jquery.inputmask.date.extensions.js"></script><!-- usuario-->
    <script src="plugins/input-mask/jquery.inputmask.extensions.js"></script><!-- usuario-->
    <script src="plugins/fastclick/fastclick.min.js"></script><!-- usuario-->
    <script src="dist/js/app.min.js"></script>
<!--<script src="dist/js/demo.js"></script>            Pertenece a la plantilla -->
    <script src="js/script.js"></script> <!-- usuario-->
  </body>
</html>
