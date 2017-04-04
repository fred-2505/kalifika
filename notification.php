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
            <section class="m-t-80">
                <div class="container">
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
                        <li>
                            <a href="terceros.php">
                                Consulta a Terceros
                            </a>
                        </li>
                        <li class="selected">
                            <a href="#.php">
                                Notificaciones
                            </a>
                        </li>
                        <li>
                            <a href="cuenta.php">
                                Cuenta
                            </a>
                        </li>
                    </ul>
                    <h3 class="text-primary">
                        Notificaciones
                        <a class="close cursor pull-right" href="mikalifika.php">
                            <b aria-hidden="true">
                                <small class="text-primary">
                                    volver
                                    <i class="fa fa-arrow-right">
                                    </i>
                                </small>
                            </b>
                        </a>
                    </h3>
                    <div class="row">
                        <div class="col-xs-12 col-sm-offset-1 col-sm-10">
                            <div class="panel panel-default no-borders">
                                <div class="panel-body">
                                    <div class="row no-seen">
                                        <div class="col-xs-6 col-sm-3">
                                            <img src="http://placehold.it/150x50"/>
                                        </div>
                                        <div class="col-xs-6 col-sm-3" style="height: 50px">
                                            <b class="text-info vertical" style="font-size:24px">
                                                S/. 10,000
                                            </b>
                                        </div>
                                        <div class="col-xs-6 col-sm-4">
                                            <small class="hidden-xs vertical">
                                                Tipo de Solicitud:
                                                <br/>
                                            </small>
                                            <small class="bold text-grey vertical">
                                                Préstamo personal consumo
                                            </small>
                                        </div>
                                        <div class="col-xs-6 col-sm-2">
                                            <small class="vertical">
                                                Fecha :
                                                <b class="text-grey">
                                                    12/12/2016
                                                </b>
                                            </small>
                                        </div>
                                    </div>
                                    <hr class="no-spaces"/>
                                    <div class="row seen">
                                        <div class="col-xs-6 col-sm-3">
                                            <img src="http://placehold.it/150x50"/>
                                        </div>
                                        <div class="col-xs-6 col-sm-3" style="height: 50px">
                                            <b class="text-info vertical" style="font-size:24px">
                                                S/. 10,000
                                            </b>
                                        </div>
                                        <div class="col-xs-6 col-sm-4">
                                            <small class="hidden-xs vertical">
                                                Tipo de Solicitud:
                                                <br/>
                                            </small>
                                            <small class="bold text-grey vertical">
                                                Préstamo personal consumo
                                            </small>
                                        </div>
                                        <div class="col-xs-6 col-sm-2">
                                            <small class="vertical">
                                                Fecha :
                                                <b class="text-grey">
                                                    12/12/2016
                                                </b>
                                            </small>
                                        </div>
                                    </div>
                                    <hr class="no-spaces"/>
                                    <div class="row seen">
                                        <div class="col-xs-6 col-sm-3">
                                            <img src="http://placehold.it/150x50"/>
                                        </div>
                                        <div class="col-xs-6 col-sm-3" style="height: 50px">
                                            <b class="text-info vertical" style="font-size:24px">
                                                S/. 10,000
                                            </b>
                                        </div>
                                        <div class="col-xs-6 col-sm-4">
                                            <small class="hidden-xs vertical">
                                                Tipo de Solicitud :
                                                <br/>
                                            </small>
                                            <small class="bold text-grey vertical">
                                                Préstamo personal consumo
                                            </small>
                                        </div>
                                        <div class="col-xs-6 col-sm-2">
                                            <small class="vertical">
                                                Fecha :
                                                <b class="text-grey">
                                                    12/12/2016
                                                </b>
                                            </small>
                                        </div>
                                    </div>
                                    <hr class="no-spaces"/>
                                    <div class="row seen">
                                        <div class="col-xs-6 col-sm-3">
                                            <img src="http://placehold.it/150x50"/>
                                        </div>
                                        <div class="col-xs-6 col-sm-3" style="height: 50px">
                                            <b class="text-info vertical" style="font-size:24px">
                                                S/. 10,000
                                            </b>
                                        </div>
                                        <div class="col-xs-6 col-sm-4">
                                            <small class="hidden-xs vertical">
                                                Tipo de Solicitud:
                                                <br/>
                                            </small>
                                            <small class="bold text-grey vertical">
                                                Préstamo personal consumo
                                            </small>
                                        </div>
                                        <div class="col-xs-6 col-sm-2">
                                            <small class="vertical">
                                                Fecha :
                                                <b class="text-grey">
                                                    12/12/2016
                                                </b>
                                            </small>
                                        </div>
                                    </div>
                                    <hr class="no-spaces"/>
                                    <div class="row seen">
                                        <div class="col-xs-6 col-sm-3">
                                            <img src="http://placehold.it/150x50"/>
                                        </div>
                                        <div class="col-xs-6 col-sm-3" style="height: 50px">
                                            <b class="text-info vertical" style="font-size:24px">
                                                S/. 10,000
                                            </b>
                                        </div>
                                        <div class="col-xs-6 col-sm-4">
                                            <small class="hidden-xs vertical">
                                                Tipo de Solicitud:
                                                <br/>
                                            </small>
                                            <small class="bold text-grey vertical">
                                                Préstamo personal consumo
                                            </small>
                                        </div>
                                        <div class="col-xs-6 col-sm-2">
                                            <small class="vertical">
                                                Fecha :
                                                <b class="text-grey">
                                                    12/12/2016
                                                </b>
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <?php require_once './sections/user/_footer.php';?>
        <?php require_once './sections/_scripts.php';?>
    </body>
</html>
