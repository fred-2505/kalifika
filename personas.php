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
                        <li class="selected">
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
                    <div class="row">
                        <div class="col-sm-12 col-md-3">
                            <div class="panel panel-default padding-10 no-borders">
                                <div class="panel-body">
                                    <h4 class="text-primary m-t-0 text-center">
                                        <a class="pull-right accordion-toggle" data-target="#filter" data-toggle="collapse" id="angle">
                                        </a>
                                        Consulta Personas
                                        <br/>
                                        <small class="text-center" style="font-size:12px">
                                            Ingresa número de DNI o nombres
                                        </small>
                                    </h4>
                                    <div class="m-b-10 m-t-25 text-center collapse in" id="filter">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <div class="radio radio-primary">
                                                    <input id="kfk-dni" name="inlineBien" type="radio">
                                                        <label for="kfk-dni">
                                                            DNI
                                                        </label>
                                                    </input>
                                                </div>
                                            </div>
                                            <div class="col-xs-9 kfk-row">
                                                <input class="form-control" max="999999999" min="0" type="number"/>
                                            </div>
                                        </div>
                                        <hr/>
                                        <div class="row">
                                            <div class="col-xs-12 text-left">
                                                <div class="radio radio-primary">
                                                    <input id="kfk-name" name="inlineBien" type="radio">
                                                        <label for="kfk-name">
                                                            NOMBRE
                                                        </label>
                                                    </input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row form-group text-left" style="font-size: 13px">
                                            <div class="col-xs-6 p-r-0" style="margin-top:5px">
                                                Nombre
                                            </div>
                                            <div class="col-xs-6 p-l-0 kfk-row">
                                                <input class="form-control" name="name" placeholder="Nombre" style="padding: 1px 6px; height: 30px; font-size: 13px" type="text">
                                                </input>
                                            </div>
                                        </div>
                                        <div class="row form-group text-left" style="font-size: 13px">
                                            <div class="col-xs-6 p-r-0" style="margin-top:5px">
                                                Apellido Paterno
                                            </div>
                                            <div class="col-xs-6 p-l-0 kfk-row">
                                                <input class="form-control" name="ape_pat" placeholder="Apellido Paterno" style="padding: 1px 6px; height: 30px; font-size: 13px" type="text">
                                                </input>
                                            </div>
                                        </div>
                                        <div class="row form-group text-left" style="font-size: 13px">
                                            <div class="col-xs-6 p-r-0" style="margin-top:5px">
                                                Apellido Materno
                                            </div>
                                            <div class="col-xs-6 p-l-0 kfk-row">
                                                <input class="form-control" name="ape_mat" placeholder="Apellido Materno" style="padding: 1px 6px; height: 30px; font-size: 13px" type="text">
                                                </input>
                                            </div>
                                        </div>
                                        <br/>
                                        <div class="m-t-20">
                                            <button class="btn btn-primary btn-block">
                                                <i class="fa fa-search">
                                                </i>
                                                | Buscar
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-9 border-left">
                            <div class="row">
                                <div class="col-xs-12 ">
                                    <h4>
                                        <a class="close pull-right" href="terceros.php">
                                            <small class="text-primary">
                                                volver
                                                <i class="fa fa-arrow-right">
                                                </i>
                                            </small>
                                        </a>
                                        <br/>
                                    </h4>
                                </div>
                            </div>
                            <div id="kfk-panel">
                                <div class="panel panel-default no-borders">
                                    <div class="panel-body p-t-20 text-center table-responsive" style="font-size:14px">
                                        <h3 class="text-center text-primary">
                                            Resultados
                                        </h3>
                                        <table class="table table-striped kfk-list-table" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        DNI
                                                    </th>
                                                    <th>
                                                        Nombres y Apellidos
                                                    </th>
                                                    <th>
                                                        Edad
                                                    </th>
                                                    <th>
                                                        Fecha de Nacimiento
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <a class="text-black" href="detallePersona.php?dni=42851010">
                                                            42851010
                                                        </a>
                                                    </td>
                                                    <td>
                                                        Milagritos Martha Leiva Suarez
                                                    </td>
                                                    <td>
                                                        61 años
                                                    </td>
                                                    <td>
                                                        12/01/1956
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a class="text-black" href="detallePersona.php?dni=10102121">
                                                            10102121
                                                        </a>
                                                    </td>
                                                    <td>
                                                        Milagritos Martha Leiva Suarez
                                                    </td>
                                                    <td>
                                                        61 años
                                                    </td>
                                                    <td>
                                                        12/01/1956
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a class="text-black" href="detallePersona.php?dni=40859635">
                                                            40859635
                                                        </a>
                                                    </td>
                                                    <td>
                                                        Milagritos Martha Leiva Suarez
                                                    </td>
                                                    <td>
                                                        61 años
                                                    </td>
                                                    <td>
                                                        12/01/1956
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
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
