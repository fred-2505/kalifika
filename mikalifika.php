<!DOCTYPE html>
<html lang="es_PE">
    <head>
        <meta content="text/html;charset=utf-8" http-equiv="content-type"/>
        <meta charset="utf-8"/>
        <title>
            Kalifika
        </title>
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" name="viewport"/>
        <?php require_once './sections/_metas.php';?>
        <?php require_once './sections/_links.php';?>
        <script src="assets/plugins/amcharts/amcharts/amcharts.js" type="text/javascript">
        </script>
        <script src="assets/plugins/amcharts/amcharts/serial.js" type="text/javascript">
        </script>
                <script src="assets/plugins/amcharts/amcharts/themes/light.js" type="text/javascript">
        </script>
    </head>
    <body>
        <div class="wrapper">
            <?php require_once './sections/user/_header.php';?>
            <div class="container m-t-80">
                <div class="row">
                    <div class="col-xs-12 col-sm-4">
                        <div class="panel panel-default no-borders">
                            <div class="panel-body">
                                <div class="visible-xs">
                                    <div class="col-xs-6 bold">
                                        Renzo E. Aliaga R.
                                    </div>
                                    <div class="col-xs-5 text-right">
                                        DNI : 47019851
                                    </div>
                                    <br/>
                                    <hr/>
                                </div>
                                <div class=" col-xs-4 col-sm-12">
                                    <h3 class="text-left kfk-category m-b-20 m-t-10 vertical">
                                        <small>
                                            Categoría:
                                        </small>
                                        <br/>
                                        CONSTANTE
                                    </h3>
                                </div>
                                <div class="col-xs-4 col-sm-12 col-md-12 col-lg-8 vertical">
                                    <div class="kfk-score">
                                        <div class="kfk-score-number">
                                            350
                                        </div>
                                        <img class="img-responsive hidden-xs " src="assets/images/avatars/avatar_.png"/>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-12 col-md-12 col-lg-4 p-l-0 p-r-0">
                                    <div class="hidden-xs m-t-30">
                                    </div>
                                    <div class="text-justify m-t-10 m-l-10" style="font-size:14px">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    </div>
                                </div>
                                <div class="col-xs-12 padding-0  m-t-30">
                                    <div class="kfk-score-bar" data-score="350" data-min=200 data-max=700 id="chartDiv">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hidden-xs hidden-sm m-t-10">
                    </div>
                    <div class="col-xs-12 col-sm-8">
                        <div class="panel panel-default no-borders">
                            <div class="panel-body">
                                <div class="row" id="kfk-user-actions">
                                    <div class="col-xs-6 col-sm-4">
                                        <a class="cursor" id="kfk-dialog-bootbox" data-deuda-min=200 data-score-min=100 data-deuda-max=500 data-score-max=900 >
                                            <div class="kfk-user-action">
                                                <div class="col-xs-12 text-center">
                                                    <h4 class="m-b-0">
                                                        Historial Score y Deuda
                                                    </h4>
                                                    <img alt="Subasta" class="img-responsive m-auto max-h-100" src="assets/images/icons/icon_detalle_64x64.png"/>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-xs-6 col-sm-4">
                                        <a class="cursor" href="subasta.php">
                                            <div class="kfk-user-action">
                                                <div class="col-xs-12 text-center">
                                                    <h4 class="m-b-0">
                                                        Subastar Deuda
                                                    </h4>
                                                    <img alt="Subasta" class="img-responsive m-auto max-h-100" src="assets/images/icons/icon_subasta_64x64.png"/>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-xs-6 col-sm-4">
                                        <a class="cursor" href="prestamo.php">
                                            <div class="kfk-user-action">
                                                <div class="col-xs-12 text-center">
                                                    <h4 "="" class=" m-b-0">
                                                        Solicitar Crédito
                                                    </h4>
                                                    <img alt="Credito" class="img-responsive m-auto max-h-100" src="assets/images/icons/icon_credito_64x64.png"/>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-xs-6 col-sm-4">
                                        <a class="cursor" href="terceros.php">
                                            <div class="kfk-user-action">
                                                <div class="col-xs-12 text-center">
                                                    <h4 class="m-b-0">
                                                        Consulta de Terceros
                                                    </h4>
                                                    <img alt="Terceros" class="img-responsive m-auto max-h-100" src="assets/images/icons/icon_tercero_64x64.png"/>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-xs-6 col-sm-4">
                                        <a class="cursor" href="notification.php">
                                            <div class="kfk-user-action">
                                                <div class="col-xs-12 text-center">
                                                    <h4 class="m-b-0">
                                                        Notificaciones
                                                    </h4>
                                                    <img alt="Notificaciones" class="img-responsive m-auto max-h-100" src="assets/images/icons/icon_notificacion_64x64.png"/>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-xs-6 col-sm-4">
                                        <a class="cursor" href="cuenta.php">
                                            <div class="kfk-user-action">
                                                <div class="col-xs-12 text-center">
                                                    <h4 class="m-b-0">
                                                        Cuenta
                                                    </h4>
                                                    <img alt="Cuenta" class="img-responsive m-auto max-h-100" src="assets/images/icons/icon_user_64x64.png"/>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br/>
        <?php require_once './sections/user/_footer.php';?>
        <?php require_once './sections/_scripts.php';?>
        <script src="assets/js/kfk-dashboard.min.js" type="text/javascript">
        </script>
    </body>
</html>