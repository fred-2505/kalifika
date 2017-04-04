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
                        <li class="selected">
                            <a href="#">
                                Solicitar un Crédito
                            </a>
                        </li>
                        <li>
                            <a href="terceros.php">
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
                    <div class="row">
                        <div class="container">
                            <div class="col-sm-12 m-b-20 kfk-text-center">
                                Indica el tipo de producto a solicitar
                                <div class="visible-sm visible-xs">
                                    <br/>
                                </div>
                                <a #"="" class="btn btn-primary bt-sm" style="font-size: 13px; href=">
                                    Préstamo
                                </a>
                                <a class="btn btn-default bt-sm" href="credito.php" style="font-size: 13px;">
                                    Tarjeta de Crédito
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3">
                            <div class="panel panel-default padding-10 no-borders">
                                <div class="panel-body">
                                    <h4 class="text-primary m-t-0 text-center">
                                        <a class="pull-right accordion-toggle" data-target="#filter" data-toggle="collapse" id="angle">
                                        </a>
                                        Solicitar Préstamo
                                        <br/>
                                        <small class="text-center" style="font-size:12px">
                                            Indica el monto y tipo de préstamo
                                        </small>
                                    </h4>
                                    <div class="m-b-10 text-center collapse in" id="filter">
                                        <div class="radio radio-primary radio-inline">
                                            <input id="kfk-producto" name="inlineBien" type="radio">
                                                <label for="kfk-producto">
                                                    Soles S/.
                                                </label>
                                            </input>
                                        </div>
                                        <div class="radio radio-primary m-b-0 radio-inline">
                                            <input id="kfk-servicio" name="inlineBien" type="radio">
                                                <label for="kfk-servicio">
                                                    Dólares U$$.
                                                </label>
                                            </input>
                                        </div>
                                        <div class="row m-b-10 kfk-row">
                                            <div class="col-sm-6 col-xs-6">
                                                <a class="btn form-control kfk-button kfk-bag btn-default">
                                                    <span class="p-l-10">
                                                        Consumo
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="col-sm-6 col-xs-6">
                                                <a class="btn form-control kfk-button kfk-car btn-default">
                                                    <span class="p-l-10">
                                                        Vehicular
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row kfk-row">
                                            <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                                                <input class="form-control" min="0" placeholder="Monto" step="1" type="number"/>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary btn-block m-t-20">
                                            <i class="fa fa-search">
                                            </i>
                                            | Buscar
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-9 border-left">
                            <div class="row p-l-30 p-r-30">
                                <div class="col-xs-12 ">
                                    <h4>
                                        <span class="hidden-xs">
                                            Elige la entidad financiera y vende tu deuda
                                        </span>
                                        <a class="close pull-right" href="mikalifika.php">
                                            <small class="text-primary">
                                                volver
                                                <i class="fa fa-arrow-right">
                                                </i>
                                            </small>
                                        </a>
                                        <span class="visible-xs" style="font-size:14px">
                                            Elige la entidad financiera y vende tu deuda
                                        </span>
                                    </h4>
                                </div>
                            </div>
                            <div class=" p-l-30 p-r-30">
                                <div class="panel panel-default no-borders">
                                    <div class="panel-body p-t-20 text-center table-responsive" style="font-size:14px">
                                        <table class="table hidden-xs kfk-list-table" width="100%">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        Pre - aprobado por :
                                                        <br/>
                                                        Banco 1
                                                    </td>
                                                    <td>
                                                        Monto de Préstamo:
                                                    </td>
                                                    <td>
                                                        Tasa :
                                                    </td>
                                                    <td>
                                                        Plazo de Préstamo :
                                                    </td>
                                                    <td>
                                                        Cuota :
                                                    </td>
                                                    <td>
                                                        <a class="btn btn-primary btn-block kfk-dialog" data-id="1" data-type="préstamo">
                                                            Elegir
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="http://placehold.it/120x50"/>
                                                    </td>
                                                    <td>
                                                        <span class="text-info">
                                                            S/. 10,000.00
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="text-info">
                                                            20%
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="text-info">
                                                            12 meses
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <b class="text-info">
                                                            S/. 1, 000.00
                                                        </b>
                                                    </td>
                                                    <td>
                                                        <a class="pull-right accordion-toggle collapsed cursor" data-id="1" data-target="#condiciones_1" data-toggle="collapse">
                                                            <span class="text-primary" id="condice_1">
                                                                Ver Condiciones
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="visible-xs">
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <img src="http://placehold.it/120x50"/>
                                                </div>
                                                <div class="col-xs-6">
                                                    <a class="btn btn-primary btn-block kfk-dialog" data-id="1" data-type="préstamo" style="height: 100%">
                                                        Elegir
                                                    </a>
                                                </div>
                                            </div>
                                            <hr/>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    Monto de Préstamo:
                                                    <br/>
                                                    <span class="text-info">
                                                        S/. 10,000.00
                                                    </span>
                                                </div>
                                                <div class="col-xs-6">
                                                    Tasa :
                                                    <br/>
                                                    <span class="text-info">
                                                        20%
                                                    </span>
                                                </div>
                                            </div>
                                            <br/>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    Cuota :
                                                    <br/>
                                                    <b class="text-info">
                                                        S/. 1,000.00
                                                    </b>
                                                </div>
                                                <div class="col-xs-6">
                                                    Plazo de Préstamo :
                                                    <br/>
                                                    <span class="text-info">
                                                        12 meses
                                                    </span>
                                                </div>
                                            </div>
                                            <hr/>
                                            <div class="row">
                                                <a class="accordion-toggle collapsed" data-id="1" data-target="#condiciones_1" data-toggle="collapse">
                                                    <span class="text-primary" id="condice_1_xs">
                                                        Ver Condiciones
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-footer collapse bg-white" id="condiciones_1">
                                        Condiciones :
                                        <ul>
                                            <li>
                                                Borrow $1,000 to $50,000 at fixed rates from 4.66% to 29.99% APR
                                            </li>
                                            <li>
                                                Rates that consider education, work history and earning potential to supplement your credit profile
                                            </li>
                                            <li>
                                                Get your rate in 2 minutes without affecting your credit score!
                                            </li>
                                            <li>
                                                No prepayment penalties or hidden fees
                                            </li>
                                        </ul>
                                    </div>
                                    <hr/>
                                    <div class="panel-body p-t-20 text-center table-responsive" style="font-size:14px">
                                        <table class="table hidden-xs kfk-list-table" width="100%">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        Preaprobado por :
                                                        <br/>
                                                        Banco 2
                                                    </td>
                                                    <td>
                                                        Monto de Préstamo:
                                                    </td>
                                                    <td>
                                                        Tasa :
                                                    </td>
                                                    <td>
                                                        Plazo de Préstamo :
                                                    </td>
                                                    <td>
                                                        Cuota :
                                                    </td>
                                                    <td>
                                                        <a class="btn btn-primary btn-block kfk-dialog" data-id="2" data-type="préstamo">
                                                            Elegir
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="http://placehold.it/120x50"/>
                                                    </td>
                                                    <td>
                                                        <span class="text-info">
                                                            S/. 10,000.00
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="text-info">
                                                            50%
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="text-info">
                                                            24 meses
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <b class="text-info">
                                                            S/. 833.00
                                                        </b>
                                                    </td>
                                                    <td>
                                                        <a class="pull-right accordion-toggle collapsed cursor" data-id="2" data-target="#condiciones_2" data-toggle="collapse">
                                                            <span class="text-primary" id="condice_2">
                                                                Ver Condiciones
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="visible-xs">
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <img src="http://placehold.it/120x50"/>
                                                </div>
                                                <div class="col-xs-6">
                                                    <a class="btn btn-primary btn-block kfk-dialog" data-id="2" data-type="préstamo" style="height: 100%">
                                                        Elegir
                                                    </a>
                                                </div>
                                            </div>
                                            <hr/>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    Monto de Préstamo:
                                                    <br/>
                                                    <span class="text-info">
                                                        S/. 10,000.00
                                                    </span>
                                                </div>
                                                <div class="col-xs-6">
                                                    Tasa :
                                                    <br/>
                                                    <span class="text-info">
                                                        20%
                                                    </span>
                                                </div>
                                            </div>
                                            <br/>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    Cuota :
                                                    <br/>
                                                    <b class="text-info">
                                                        S/. 1,000.00
                                                    </b>
                                                </div>
                                                <div class="col-xs-6">
                                                    Plazo de Préstamo :
                                                    <br/>
                                                    <span class="text-info">
                                                        12 meses
                                                    </span>
                                                </div>
                                            </div>
                                            <hr/>
                                            <div class="row">
                                                <a class="accordion-toggle collapsed" data-id="2" data-target="#condiciones_2" data-toggle="collapse">
                                                    <span class="text-primary" id="condice_2_xs">
                                                        Ver Condiciones
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-footer collapse bg-white" id="condiciones_2">
                                        Condiciones :
                                        <ul>
                                            <li>
                                                Borrow $1,000 to $50,000 at fixed rates from 4.66% to 29.99% APR
                                            </li>
                                            <li>
                                                Rates that consider education, work history and earning potential to supplement your credit profile
                                            </li>
                                            <li>
                                                Get your rate in 2 minutes without affecting your credit score!
                                            </li>
                                            <li>
                                                No prepayment penalties or hidden fees
                                            </li>
                                        </ul>
                                    </div>
                                    <hr/>
                                    <div class="panel-body p-t-20 text-center table-responsive" style="font-size:14px">
                                        <table class="table hidden-xs kfk-list-table" width="100%">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        Preaprobado por :
                                                        <br/>
                                                        Banco 3
                                                    </td>
                                                    <td>
                                                        Monto de Préstamo:
                                                    </td>
                                                    <td>
                                                        Tasa :
                                                    </td>
                                                    <td>
                                                        Plazo de Préstamo :
                                                    </td>
                                                    <td>
                                                        Cuota :
                                                    </td>
                                                    <td>
                                                        <a class="btn btn-primary btn-block kfk-dialog" data-id="3" data-type="préstamo">
                                                            Elegir
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="http://placehold.it/120x50"/>
                                                    </td>
                                                    <td>
                                                        <span class="text-info">
                                                            S/. 10,000.00
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="text-info">
                                                            20%
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="text-info">
                                                            12 meses
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <b class="text-info">
                                                            S/. 1, 000.00
                                                        </b>
                                                    </td>
                                                    <td>
                                                        <a class="pull-right accordion-toggle collapsed cursor" data-id="3" data-target="#condiciones_3" data-toggle="collapse">
                                                            <span class="text-primary" id="condice_3">
                                                                Ver Condiciones
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="visible-xs">
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <img src="http://placehold.it/120x50"/>
                                                </div>
                                                <div class="col-xs-6">
                                                    <a class="btn btn-primary btn-block kfk-dialog" data-id="3" data-type="préstamo" style="height: 100%">
                                                        Elegir
                                                    </a>
                                                </div>
                                            </div>
                                            <hr/>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    Monto de Préstamo:
                                                    <br/>
                                                    <span class="text-info">
                                                        S/. 10,000.00
                                                    </span>
                                                </div>
                                                <div class="col-xs-6">
                                                    Tasa :
                                                    <br/>
                                                    <span class="text-info">
                                                        20%
                                                    </span>
                                                </div>
                                            </div>
                                            <br/>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    Cuota :
                                                    <br/>
                                                    <b class="text-info">
                                                        S/. 1,000.00
                                                    </b>
                                                </div>
                                                <div class="col-xs-6">
                                                    Plazo de Préstamo :
                                                    <br/>
                                                    <span class="text-info">
                                                        12 meses
                                                    </span>
                                                </div>
                                            </div>
                                            <hr/>
                                            <div class="row">
                                                <a class="accordion-toggle collapsed" data-id="3" data-target="#condiciones_3" data-toggle="collapse">
                                                    <span class="text-primary" id="condice_3_xs">
                                                        Ver Condiciones
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-footer collapse bg-white" id="condiciones_3">
                                        Condiciones :
                                        <ul>
                                            <li>
                                                Borrow $1,000 to $50,000 at fixed rates from 4.66% to 29.99% APR
                                            </li>
                                            <li>
                                                Rates that consider education, work history and earning potential to supplement your credit profile
                                            </li>
                                            <li>
                                                Get your rate in 2 minutes without affecting your credit score!
                                            </li>
                                            <li>
                                                No prepayment penalties or hidden fees
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <br/>
        <?php require_once './sections/user/_footer.php';?>
        <?php require_once './sections/_scripts.php';?>
        <script src="assets/js/kfk-filters.min.js" type="text/javascript">
        </script>
    </body>
</html>
