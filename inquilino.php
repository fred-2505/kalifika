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
        <script src="assets/plugins/amcharts/amcharts/serial.js" type="text/javascript"></script>
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
                                        Analizar Inquilino
                                        <br/>
                                        <small class="text-center" style="font-size:12px">
                                            Ingresa número de DNI
                                        </small>
                                    </h4>
                                    <div class="m-b-10 m-t-25 text-center collapse in" id="filter">
                                        <div class="row">
                                            <div class="col-xs-5">
                                                <div class="radio radio-primary m-t-0">
                                                    <input id="kfk-individuo" name="inlineType" type="radio"/>
                                                    <label for="kfk-individuo">
                                                        Individual
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-7  kfk-row">
                                                <input class="form-control" max="999999999" min="0" type="number"/>
                                            </div>
                                        </div>
                                        <hr/>
                                        <div class="row">
                                            <div class="col-xs-5">
                                                <div class="radio radio-primary m-t-0">
                                                    <input id="kfk-conyuge" name="inlineType" type="radio"/>
                                                    <label for="kfk-conyuge">
                                                        Conyugal
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-7  kfk-row">
                                                <input class="form-control m-b-10" max="999999999" min="0" type="number"/>
                                                <input class="form-control" max="999999999" min="0" type="number"/>
                                            </div>
                                        </div>
                                        <hr/>
                                        <div class="radio radio-primary radio-inline">
                                            <input id="kfk-soles" name="inlineBien" type="radio"/>
                                            <label for="kfk-soles">
                                                Soles S/.
                                            </label>
                                        </div>
                                        <div class="radio radio-primary m-b-0 radio-inline">
                                            <input id="kfk-dolar" name="inlineBien" type="radio"/>
                                            <label for="kfk-dolar">
                                                Dólares U$$.
                                            </label>
                                        </div>
                                        <br/>
                                        <div class="text-center col-xs-12 m-b-20  kfk-row">
                                            <input class="form-control" max="999999999" min="0" placeholder="Monto" type="number"/>
                                        </div>
                                        <br/>
                                        <div class="m-t-20">
                                            <button class="btn btn-primary btn-block">
                                                <i class="fa fa-search">
                                                </i>
                                                | Consultar
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
                                    <div class="panel-body p-t-0 text-center table-responsive" style="font-size:14px">
                                        <h3 class="text-center text-primary">
                                            Resultados
                                        </h3>
                                        <hr/>
                                        <div class="row">
                                            <div class="col-sm-6 col-xs-12">
                                                DNI : 47019851
                                            </div>
                                            <div class="col-sm-6 col-xs-12">
                                                Nombre : Milagritos Martha Leiva Suarez
                                            </div>
                                        </div>
                                        <hr/>
                                        <div class="row">
                                            <div class="col-sm-6 col-xs-12">
                                                <h3>
                                                    RECOMENDACIÓN
                                                </h3>
                                                <br/>
                                                <span class="m-b-20 btn btn-primary btn-circle btn-xl">
                                                    SI
                                                </span>
                                                <br/>
                                                <span>
                                                    Categoría : Constante
                                                    <sup class="btn-primary badge cursor help" title="Persona que se encuentra en crecimiento crediticio y con la oportunidad de tener otros tipos de creditos">
                                                        ?
                                                    </sup>
                                                </span>
                                                <br/>  <br/>
                                                <div class="col-xs-12 m-t-20">
                                                   <div id="chartDiv" class="kfk-score-bar" data-score="230"></div>
                                                </div>
                                                <br/>
                                                <div class="text-left m-l-50 m-t-40">
                                                    <small>
                                                        Consideraciones :
                                                        <br/>
                                                        Inquilino necesita aval
                                                    </small>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-xs-12">
                                                <vr class="hidden-xs"></vr>
                                                <hr class="visible-xs"></hr>
                                                <div class="text-left">
                                                    <div class="hidden-xs m-t-50"></div>
                                                    <small class="m-l-50">Monto Solicitado:</small>
                                                    <h2 class="text-center m-t-0 text-grey">S/. 3,500</h2>
                                                    <br/>
                                                    <small class="m-l-50">Valor seguro:</small>
                                                    <h2 class="text-center m-t-0 text-grey">S/. 1,120</h2>
                                                </div>
                                            </div>
                                        </div>
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
        <script src="assets/js/kfk-person.min.js" type="text/javascript">
        <script src="assets/js/kfk-filters.min.js" type="text/javascript">
        </script>
    </body>
</html>