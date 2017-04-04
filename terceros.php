<!DOCTYPE html>
<html lang="es_PE">
    <head>
        <meta content="text/html;charset=utf-8" http-equiv="content-type"/>
        <meta charset="utf-8"/>
        <title>
            Kalifika
        </title>
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" name="viewport"/>
               <script src="assets/plugins/amcharts/amcharts/amcharts.js" type="text/javascript">
        </script>
        <script src="assets/plugins/amcharts/amcharts/serial.js" type="text/javascript">
        </script>
        <script src="assets/plugins/amcharts/amcharts/themes/light.js" type="text/javascript">
        </script>
        <?php require_once './sections/_metas.php';?>
        <?php require_once './sections/_links.php';?>
    </head>
    <body>
        <div class="wrapper">
            <?php require_once './sections/user/_header.php';?>
            <div class="container m-t-80">
              <ul class="tabrow">
                <li>
                            <a href="#" id="kfk-dialog-bootbox">
                                Detalle Score y Deuda
                            </a>
                        </li>
                        <li>
                            <a href="subasta.php">
                                Subastar Deuda
                            </a>
                        </li>
                        <li>
                            <a href="prestamo.php">
                               Solicitar un Crédito
                            </a>
                        </li>
                        <li class="selected">
                            <a href="#">
                               Consulta a Terceros
                            </a>
                        </li>
                                                <li>
                            <a href="notification.php">
                                Notificaciones
                            </a>
                        </li>
                        <li>
                            <a href="cuenta.php">
                                Cuenta
                            </a>
                        </li>
                    </ul>
                    <br/>
                <div class="row" style="margin-left: auto !important">
                    <h3 class="text-primary m-t-0">
                        Consulta de Terceros
                        <a class="close pull-right" href="mikalifika.php">
                            <small class="text-primary">
                                volver
                                <i class="fa fa-arrow-right">
                                </i>
                            </small>
                        </a>
                    </h3>
                    <br/>
                    <div class="text-center" id="kfk-user-actions">
                        <div class="kfk-container">
                            <div class="col-xs-6 col-sm-2">
                                <a class="cursor" href="personas.php">
                                    <div class="kfk-user-action">
                                        <div class="col-xs-12 text-center m-t-10">
                                            <img alt="Personas" class="img-responsive" src="assets/images/icons/icon_persona_16x16.png"/>
                                            <h5>
                                                Consulta Personas
                                            </h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-6 col-sm-2">
                                <a class="cursor" href="inquilino.php">
                                    <div class="kfk-user-action">
                                        <div class="col-xs-12 text-center m-t-10">
                                            <img alt="Inquilino" class="img-responsive" src="assets/images/icons/icon_inquilino_16x16.png"/>
                                            <h5>
                                                Analizar Inquilino
                                            </h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-6 col-sm-2">
                                <a class="cursor" href="aval.php">
                                    <div class="kfk-user-action">
                                        <div class="col-xs-12 text-center m-t-10">
                                            <img alt="Aval" class="img-responsive" src="assets/images/icons/icon_aval_16x16.png"/>
                                            <h5>
                                                Analizar Aval
                                            </h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-6 col-sm-2">
                                <a class="cursor" href="#">
                                    <div class="kfk-user-action">
                                        <div class="col-xs-12 text-center m-t-10">
                                            <img alt="Inquilino" class="img-responsive" src="assets/images/icons/icon_alerta_inquilino_16x16.png"/>
                                            <h5>
                                                Alerta Inquilino
                                            </h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-6 col-sm-2">
                                <a class="cursor" href="#">
                                    <div class="kfk-user-action">
                                        <div class="col-xs-12 text-center m-t-10">
                                            <img alt="Aval" class="img-responsive" src="assets/images/icons/icon_alerta_aval_16x16.png"/>
                                            <h5>
                                                Alerta Aval
                                            </h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php require_once './sections/user/_footer.php';?>
        <?php require_once './sections/_scripts.php';?>
        </script>
    </body>
</html>