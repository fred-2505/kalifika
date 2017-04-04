<!DOCTYPE html>
<html lang="es_PE">
    <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="utf-8" />
        <title>Kalifika</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
        <?php require_once './sections/_metas.php';?>
        <?php require_once './sections/_links.php';?>
    </head>
    <body class="bg-primary">
        <div class="wrapper">
            <?php require_once './sections/signin/_header.php';?>
            <section class=" m-t-20">
                <div class="container">
                    <div class="row m-t-60">
                        <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
                            <div class="panel panel-default m-t-20">
                                <div class="panel-body p-t-20 text-center">
                                    <h2 class="text-center text-primary"><strong>Iniciar Sesión</strong></h2>
                                    <div class="p-l-45 p-b-45 p-r-50 p-t-20">
                                        <form class="" id="kfk-form1" role="form" action="" method="post">
                                            <div class="form-group">
                                                <input type="text" class="form-control text-center" placeholder="Ingrese su DNI">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control text-center" placeholder="Ingrese su password">
                                            </div>
                                            <div class="checkbox text-left">
                                            <input type="checkbox" id="kfk-checkbox1">
                                                <label for="kfk-checkbox1">
                                                    Recordar mi correo
                                                </label>
                                            </div>
                                            <a type="submit" href="mikalifika.php" class="btn btn-primary btn-block text-center">Ingresar</a>
                                            <hr/>
                                            <div>¿No tienes una cuenta?</div>
                                            <a href="signup.php" class="link">Regístrate ahora, es gratis</a>
                                            <hr/>
                                            <div>¿Tienes problemas para ingresar?</div>
                                            <a href="index.php#kfk-section-contactos" class="link">Contáctenos aquí</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <?php require_once './sections/_footer.php';?>
        <?php require_once './sections/_scripts.php';?>
    </body>
</html>