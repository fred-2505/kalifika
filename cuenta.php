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
            <section class="m-t-100">
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
                        <li>
                            <a href="notification.php">
                                Notificaciones
                            </a>
                        </li>
                        <li class="selected">
                            <a href="#">
                                Cuenta
                            </a>
                        </li>
                    </ul>
                    <div class="row m-t-80 p-b-100">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="panel panel-transparent">
                                <ul class="nav nav-tabs nav-tabs-simple nav-tabs-left" id="tab-3">
                                    <li class="active">
                                        <a class="hidden-xs" data-toggle="tab" href="#profile">
                                            Mi Cuenta
                                        </a>
                                        <a class="visible-xs text-center" data-toggle="tab" href="#profile">
                                            <i class="fa fa-user">
                                            </i>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a class="hidden-xs" data-toggle="tab" href="#password">
                                            Cambio de contraseña
                                        </a>
                                        <a class="visible-xs text-center" data-toggle="tab" href="#password">
                                            <i class="fa fa-key">
                                            </i>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a class="hidden-xs" data-toggle="tab" href="#email">
                                            Cambio de correo
                                        </a>
                                        <a class="visible-xs text-center" data-toggle="tab" href="#email">
                                            <i class="fa fa-at">
                                            </i>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a class="hidden-xs" data-toggle="tab" href="#cellphone">
                                            Cambio de celular
                                        </a>
                                        <a class="visible-xs text-center" data-toggle="tab" href="#cellphone">
                                            <i class="fa fa-mobile">
                                            </i>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a class="hidden-xs" data-toggle="tab" href="#comments">
                                            Comentarios
                                        </a>
                                        <a class="visible-xs text-center" data-toggle="tab" href="#comments">
                                            <i class="fa fa-comments">
                                            </i>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content bg-white p-l-20 p-r-20 p-t-75 p-b-20 ">
                                    <div class="text-center kfk-image-user">
                                        <input class="hidden" id="kfk-image-user" type="file">
                                            <img class="img-circle img-thumbnail kfk-cursor" id="kfk-change-image-user" src="assets/images/user_default_primary_x69.png" width="69">
                                                <h4 class="m-t-0">
                                                    Renzo Aliaga
                                                </h4>
                                            </img>
                                        </input>
                                    </div>
                                    <div class="tab-pane active padding-20" id="profile">
                                        <form class="form-horizontal">
                                            <div class="form-group">
                                                <label class="col-md-3 text-right control-label kfk-label">
                                                    Nombres
                                                </label>
                                                <div class="col-md-9">
                                                    <input class="form-control" readonly="readonly" type="text" value="Renzo Emanuel"/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 text-right control-label kfk-label">
                                                    Apellidos
                                                </label>
                                                <div class="col-md-9">
                                                    <input class="form-control" readonly="readonly" type="text" value="Aliaga Rios"/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 text-right control-label kfk-label">
                                                    DNI
                                                </label>
                                                <div class="col-md-5">
                                                    <input class="form-control" readonly="readonly" type="text" value="47019851"/>
                                                </div>
                                            </div>
                                            <div class="form-group m-t-20">
                                                <label class="col-md-3 text-right control-label kfk-label">
                                                </label>
                                                <div class="col-md-9">
                                                    <span class="text-grey">
                                                        INFORMACIÓN PRIVADA
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 text-right control-label kfk-label">
                                                    Correo Electrónico
                                                </label>
                                                <div class="col-md-9">
                                                    <input class="form-control" readonly="readonly" type="text" value="raliaga@insite.pe"/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 text-right control-label kfk-label">
                                                    Número Telefónico
                                                </label>
                                                <div class="col-md-5">
                                                    <input class="form-control" readonly="readonly" type="text" value="987646910"/>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane padding-20" id="password">
                                        <form class="form-horizontal">
                                            <div class="form-group">
                                                <label class="col-md-4 text-right control-label kfk-label">
                                                    Contraseña Antigua
                                                </label>
                                                <div class="col-md-8">
                                                    <input class="form-control" type="password"/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-4 text-right control-label kfk-label">
                                                    Contraseña Nueva
                                                </label>
                                                <div class="col-md-8">
                                                    <input class="form-control" type="password">
                                                    </input>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-4 text-right control-label kfk-label">
                                                    Repetir Contraseña Nueva
                                                </label>
                                                <div class="col-md-8">
                                                    <input class="form-control" type="password">
                                                    </input>
                                                </div>
                                            </div>
                                            <div class="text-center m-t-40">
                                                <button class="btn btn-primary" type="button">
                                                    Guardar
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane p-b-20 p-l-20 p-r-20 " id="cellphone">
                                        <form class="form-horizontal">
                                            <div class="form-group">
                                                <label class="col-md-4 text-right control-label kfk-label">
                                                    Número actual
                                                </label>
                                                <div class="col-md-8">
                                                    <input class="form-control" readonly="" type="text" value="*****9879"/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-4 text-right control-label kfk-label">
                                                    Número Nuevo
                                                </label>
                                                <div class="col-md-8">
                                                    <input class="form-control" type="text">
                                                    </input>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-4 text-right control-label kfk-label">
                                                    Repetir Número Nuevo
                                                </label>
                                                <div class="col-md-8">
                                                    <input class="form-control" type="text">
                                                    </input>
                                                </div>
                                            </div>
                                            <div class="text-center m-t-40">
                                                <button class="btn btn-primary" id="btnCell" type="button">
                                                    Cambiar
                                                </button>
                                            </div>
                                            <div id="verifyNumber">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane padding-20" id="email">
                                        <form class="form-horizontal">
                                            <div class="form-group">
                                                <label class="col-md-4 text-right control-label kfk-label">
                                                    Correo Nuevo
                                                </label>
                                                <div class="col-md-8">
                                                    <input class="form-control" type="text"/>
                                                </div>
                                            </div>
                                            <div class="text-center m-t-40">
                                                <button class="btn btn-primary" id="btnMail" type="button">
                                                    Cambiar Correo
                                                </button>
                                            </div>
                                        </form>
                                        <div id="verifyMail">
                                        </div>
                                    </div>
                                    <div class="tab-pane p-b-20 p-l-20 p-r-20" id="comments">
                                        <h3>
                                            Comentarios
                                        </h3>
                                        <p class="m-b-20 text-justify">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        </p>
                                        <textarea class="form-control" rows="6">
                                        </textarea>
                                        <div class="text-center m-t-40">
                                            <button class="btn btn-primary" id="btnMail" type="button">
                                                Enviar
                                            </button>
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
        <script src="assets/js/kfk-profile.min.js" type="text/javascript">
        </script>
    </body>
</html>