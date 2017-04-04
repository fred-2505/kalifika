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
    </head>
    <body>
        <div class="wrapper">
            <div class="container">
                <h1 class=" text-primary">
                    <b>
                        LIBRO DE RECLAMACIONES
                    </b>
                </h1>
                <div class="row m-b-10">
                    <div class="col-xs-12 col-sm-6 p-l-0">
                        <div class="col-xs-3 text-left ">
                            Fecha :
                        </div>
                        <div class="col-xs-3 col-sm-2">
                            <select class="form-control kfk-select-reclamo input-sm">
                                <option>
                                    05
                                </option>
                            </select>
                        </div>
                        <div class="col-xs-3 col-sm-2">
                            <select class="form-control kfk-select-reclamo input-sm">
                                <option>
                                    01
                                </option>
                            </select>
                        </div>
                        <div class="col-xs-3">
                            <select class="form-control kfk-select-reclamo input-sm">
                                <option>
                                    2017
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 p-l-0">
                        <span class="pull-right">
                            Hoja de Reclamación N° 000000000x - 201x
                        </span>
                    </div>
                </div>
                <div class="company">
                    <b>
                        FOR INNOVATION TECHNOLOGY S.A / RUC 20600518128
                    </b>
                    <br/>
                    <span>
                        Av. República de Panamá
                    </span>
                    <br/>
                    <span>
                        3418 Piso 11
                    </span>
                    <br/>
                    <span>
                        San Isidro, Lima - Perú
                    </span>
                </div>
                <hr/>
                <form class="form-horizontal">
                    <div class="bodyComplain">
                        <h3 class="text-primary">
                            1.- IDENTIFICACIÓN DEL CONSUMIDOR RECLAMANTE
                        </h3>
                        <div class="form-group">
                            <label class="col-sm-2 hidden-xs control-label" for="nameMain">
                                Nombre
                            </label>
                            <div class="col-sm-10 col-xs-12">
                                <input class="form-control" id="nameMain" placeholder="Nombre" type="text">
                                </input>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 hidden-xs control-label" for="dniMain">
                                DNI / CE
                            </label>
                            <div class="col-sm-10 col-xs-12">
                                <input class="form-control" id="dniMain" placeholder="DNI / CE" type="number">
                                </input>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 hidden-xs control-label" for="adressMain">
                                Domicilio
                            </label>
                            <div class="col-sm-10 col-xs-12">
                                <input class="form-control" id="adressMain" placeholder="Domicilio" type="text">
                                </input>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 hidden-xs control-label" for="celMain">
                                Telefono / Celular
                            </label>
                            <div class="col-sm-10 col-xs-12">
                                <input class="form-control" id="celMain" placeholder="Telefono / Celular" type="number">
                                </input>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 hidden-xs control-label" for="mailMain">
                                Email
                            </label>
                            <div class="col-sm-10 col-xs-12">
                                <input class="form-control" id="mailMain" placeholder="Email" type="email">
                                </input>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 hidden-xs control-label" for="nameSec">
                                Padre o Madre
                                <br/>
                                <small style="font-size:10px">
                                    (En caso de menores de edad)
                                </small>
                            </label>
                            <div class="col-sm-10 col-xs-12">
                                <input class="form-control" id="nameSec" placeholder="Padre o Madre (En caso de menores de edad)" type="text">
                                </input>
                            </div>
                        </div>
                        <h3 class="text-primary">
                            2.- IDENTIFICACIÓN DEL BIEN CONTRATADO
                        </h3>
                        <div class="m-b-10" style="margin-left:10%;">
                            <div class="radio radio-primary m-b-0 radio-inline">
                                <input id="kfk-producto" name="inlineBien" type="radio">
                                    <label for="kfk-producto">
                                        PRODUCTO
                                    </label>
                                </input>
                            </div>
                            <div class="radio radio-primary m-b-0 radio-inline">
                                <input id="kfk-servicio" name="inlineBien" type="radio">
                                    <label for="kfk-servicio">
                                        SERVICIO
                                    </label>
                                </input>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 hidden-xs control-label" for="amount">
                                Monto Reclamado
                            </label>
                            <div class="col-sm-10 col-xs-12">
                                <input class="form-control" id="amount" placeholder="Monto Reclamado" type="number">
                                </input>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 hidden-xs control-label" for="descripcion">
                                Descripción
                            </label>
                            <div class="col-sm-10 col-xs-12">
                                <textarea class="form-control" id="descripcion" placeholder="Descripcion">
                                </textarea>
                            </div>
                        </div>
                        <h3 class="text-primary">
                            3.- DETALLE DE LA RECLAMACIÓN Y PEDIDO DEL CONSUMIDOR
                        </h3>
                        <div class="m-b-10" style="margin-left:10%;">
                            <div class="radio radio-primary m-b-0 radio-inline">
                                <input id="kfk-reclamo" name="inlinePedido" type="radio">
                                    <label for="kfk-reclamo">
                                        RECLAMO
                                        <small style="vertical-align:super; font-size:10px">
                                            1
                                        </small>
                                    </label>
                                </input>
                            </div>
                            <div class="radio radio-primary m-b-0 radio-inline">
                                <input id="kfk-queja" name="inlinePedido" type="radio">
                                    <label for="kfk-queja">
                                        QUEJA
                                        <small style="vertical-align:super; font-size:10px">
                                            2
                                        </small>
                                    </label>
                                </input>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 hidden-xs control-label" for="detalle">
                                Detalle
                            </label>
                            <div class="col-sm-10 col-xs-12">
                                <textarea class="form-control" id="detalle" placeholder="Detalle">
                                </textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 hidden-xs control-label" for="pedido">
                                Pedido
                            </label>
                            <div class="col-sm-10 col-xs-12">
                                <textarea class="form-control" id="pedido" placeholder="Descripcion">
                                </textarea>
                            </div>
                        </div>
                        <small>
                            <small style="vertical-align:super; font-size:10px">
                                1
                            </small>
                            RECLAMO :  Disconformidad relacionado a los productos o servicios
                        </small>
                        <br/>
                        <small>
                            <small style="vertical-align:super; font-size:10px">
                                2
                            </small>
                            QUEJA :  Disconformidad no relacionado a los productos o servicios; o , malestar o descontento respecto a la atención al público
                        </small>
                        <br/>
                        <br/>
                        <div class="col-xs-offset-4 col-xs-4">
                            <button class="btn btn-primary btn-lg" type="submit">
                                ENVIAR
                            </button>
                        </div>
                        <br/>
                        <br/>
                        <br/>
                        <small>
                            * La formulación del reclamo no impide acudir a otras vías de solución de controversias ni es requisito previo para interponer una denuncia ante el INDECOPI
                        </small>
                        <br/>
                        <small>
                            * El proveedor deberá dar respuesta en un plazo no mayor a treinta (30) días calendario, pudiendo ampliar el plazo hasta por treinta (30) días más, previa comunicación al consumidor
                        </small>
                    </div>
                </form>
            </div>
        </div>
        <br/>
        <br/>
        <script src="assets/plugins/jquery/jquery-1.11.1.min.js" type="text/javascript">
        </script>
    </body>
</html>