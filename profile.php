<!DOCTYPE html>
<html lang="es_PE">
    <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="utf-8" />
        <title>Kalifika</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
        <?php require_once './sections/_metas.php'; ?>
        <?php require_once './sections/_links.php'; ?>
    </head>
    <body>
        <div class="wrapper">
            <?php require_once './sections/user/_header.php'; ?>
            <section class="m-t-100">
                <div class="container">

                    <div class="row m-t-20">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="panel panel-transparent">
                                <ul class="nav nav-tabs nav-tabs-simple nav-tabs-left" id="tab-3">
                                    <li class="active">
                                        <a data-toggle="tab" class="hidden-xs" href="#tab3hellowWorld">Editar Perfil</a>
                                        <a data-toggle="tab" class="visible-xs" href="#tab3hellowWorld">
                                        <i class="fa fa-user"> </i></a>
                                    </li>
                                    <li class="">
                                        <a data-toggle="tab" class="hidden-xs" href="#tab3FollowUs">Cambio de contraseña</a>
                                        <a data-toggle="tab" class="visible-xs" href="#tab3FollowUs">
                                        <i class="fa fa-key"> </i></a>
                                    </li>
                                    <li class="">
                                        <a data-toggle="tab" class="hidden-xs" href="#tab3Inspire">Comentarios</a>
                                        <a data-toggle="tab" class="visible-xs" href="#tab3Inspire">
                                        <i class="fa fa-comments"> </i></a>
                                    </li>
                                </ul>
                                <div class="tab-content bg-white p-l-20 p-r-20 p-t-100 p-b-20 ">
                                    <div class="text-center kfk-image-user">
                                        <input type="file" class="hidden" id="kfk-image-user">
                                        <img id="kfk-change-image-user" class="img-circle img-thumbnail kfk-cursor" src="assets/images/user_default_primary_x69.png" width="69">
                                        <h4 class="m-t-0">Renzo Aliaga</h4>
                                    </div>
                                    <div class="tab-pane active padding-20" id="tab3hellowWorld">
                                        <form class="form-horizontal">
                                            <div class="form-group">
                                                <label class="col-md-3 text-right control-label kfk-label">Nombres</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 text-right control-label kfk-label">Apellidos</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 text-right control-label kfk-label">DNI</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group m-t-20">
                                                <label class="col-md-3 text-right control-label kfk-label">&nbsp;</label>
                                                <div class="col-md-9">
                                                    <span class=""><strong>INFORMACIÓN PRIVADA</strong></span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 text-right control-label kfk-label">Correo Electrónico</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 text-right control-label kfk-label">Número Telefónico</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="text-center m-t-40">
                                                <button class="btn btn-primary">Guardar</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane padding-20" id="tab3FollowUs">
                                        <form class="form-horizontal">
                                            <div class="form-group">
                                                <label class="col-md-4 text-right control-label kfk-label">Contraseña Antigua</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-4 text-right control-label kfk-label">Contraseña Nueva</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-4 text-right control-label kfk-label">Repetir Contraseña Nueva</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="text-center m-t-40">
                                                <button class="btn btn-primary">Guardar</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane padding-20" id="tab3Inspire">
                                        <h3>
                                            Comentarios
                                        </h3>
                                        <p class="m-b-20">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                        </p>
                                        <textarea class="form-control" rows="6"></textarea>
                                        <div class="text-center m-t-40">
                                            <button class="btn btn-primary">Enviar</button>
                                        </div>
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <?php require_once './sections/_footer.php'; ?>
        <?php require_once './sections/_scripts.php'; ?>
        <script type="text/javascript" src="assets/js/kfk-profile.js"></script>
    </body>
</html>