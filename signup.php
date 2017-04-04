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
    <body class="bg-primary" id="kfk-app" style="margin-bottom: 50px">
        <div class="wrapper">
            <?php require_once './sections/signup/_header.php';?>
            <?php require_once './sections/signup/_menu.php';?>
            <section class="m-t-20">
                <div class="container">
                    <div class="row m-t-60">
                        <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                            <div class="panel panel-default m-t-20 no-padding p-t-20">
                                <div class="panel-body no-margin no-padding">
                                    <h2 class="text-center text-primary" style="margin-top: 0">
                                        <strong>
                                            Regístrate
                                        </strong>
                                    </h2>
                                    <section>
                                        <div class="wizard">
                                            <div class="wizard-inner">
                                                <div class="connecting-line">
                                                </div>
                                                <ul class="nav nav-tabs" role="tablist">
                                                    <li class="active" role="presentation">
                                                        <a aria-controls="step1" data-toggle="tab" href="#step1" role="tab" title="Step 1">
                                                            <span class="fa-stack">
                                                                <i class="fa fa-circle-o fa-stack-2x text-primary circle-kfk">
                                                                </i>
                                                                <i class="fa fa-credit-card fa-stack-1x">
                                                                </i>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="disabled" role="presentation">
                                                        <a aria-controls="step2" data-toggle="tab" href="#step2" role="tab" title="Step 2">
                                                            <span class="fa-stack">
                                                                <i class="fa fa-user fa-stack-1x">
                                                                </i>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="disabled" role="presentation">
                                                        <a aria-controls="step3" data-toggle="tab" href="#step3" role="tab" title="Step 3">
                                                            <span class="fa-stack">
                                                                <i class="fa fa-lock fa-stack-1x">
                                                                </i>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="disabled" role="presentation">
                                                        <a aria-controls="step4" data-toggle="tab" href="#step4" role="tab" title="Step 4">
                                                            <span class="fa-stack">
                                                                <i class="fa fa-key fa-stack-1x">
                                                                </i>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="disabled" role="presentation">
                                                        <a aria-controls="complete" data-toggle="tab" href="#complete" role="tab" title="Complete">
                                                            <span class="fa-stack">
                                                                <i class="fa fa-check fa-stack-1x">
                                                                </i>
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tab-content padding-30">
                                                <div class="tab-pane active" id="step1" role="tabpanel">
                                                    <form action="" class="" method="post" role="form">
                                                        <div class="form-group">
                                                            <input class="form-control text-center input-lg" placeholder="Ingrese su DNI" type="text">
                                                            </input>
                                                        </div>
                                                        <div class="form-group">
                                                            <input class="form-control text-center input-lg" placeholder="Ingrese tu Correo Electrónico" type="text">
                                                            </input>
                                                        </div>
                                                        <div class="form-group">
                                                            <input class="form-control text-center input-lg" placeholder="Ingrese tu número de celular" type="text">
                                                            </input>
                                                        </div>
                                                        <div class="checkbox text-left">
                                                            <input id="kfk-checkbox1" type="checkbox">
                                                                <label class="text-primary" for="kfk-checkbox1">
                                                                    Acepto las políticas de privacidad y los términos y condiciones de Kalifica
                                                                </label>
                                                            </input>
                                                        </div>
                                                        <div class="text-center m-t-30">
                                                            <a class="btn btn-primary btn-lg text-center next-step">
                                                                Continuar
                                                            </a>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="tab-pane" id="step2" role="tabpanel">
                                                    <!--<h3 class="text-primary text-center no-padding no-margin p-b-20">Completar información</h3>-->
                                                    <form action="" class="" method="post" role="form">
                                                        <div class="form-group">
                                                            <input class="form-control text-center input-lg" placeholder="Nombres" type="text">
                                                            </input>
                                                        </div>
                                                        <div class="form-group">
                                                            <input class="form-control text-center input-lg" placeholder="Apellido Paterno" type="text">
                                                            </input>
                                                        </div>
                                                        <div class="form-group">
                                                            <input class="form-control text-center input-lg" placeholder="Apellido Materno" type="text">
                                                            </input>
                                                        </div>
                                                        <h4 class="text-center m-b-20 text-primary">
                                                            Fecha de Nacimiento
                                                        </h4>
                                                        <div class="row">
                                                            <div class="col-xs-3">
                                                                <select class="form-control input-lg">
                                                                    <option>
                                                                        01
                                                                    </option>
                                                                </select>
                                                            </div>
                                                            <div class="col-xs-5">
                                                                <select class="form-control input-lg">
                                                                    <option>
                                                                        Enero
                                                                    </option>
                                                                </select>
                                                            </div>
                                                            <div class="col-xs-4">
                                                                <select class="form-control input-lg">
                                                                    <option>
                                                                        1980
                                                                    </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="text-center m-t-30">
                                                            <a class="btn btn-primary btn-lg text-center next-step">
                                                                Continuar
                                                            </a>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="tab-pane" id="step3" role="tabpanel">
                                                    <!--<h3 class="text-primary text-center no-padding no-margin p-b-20">Verifica tu información</h3>-->
                                                    <form action="" class="" method="post" role="form">
                                                        <h4 class="text-center text-muted">
                                                            Ingresa dígito de DNI
                                                        </h4>
                                                        <div class="row">
                                                            <div class="col-xs-12 col-md-8 col-md-offset-2">
                                                                <div class="row">
                                                                    <div class="col-xs-4">
                                                                        <div class="kfk-tooltip">
                                                                            <img src="assets/images/dni.png">
                                                                            </img>
                                                                        </div>
                                                                        <input class="form-control dni-validator text-center input-lg" placeholder="-" type="text">
                                                                        </input>
                                                                    </div>
                                                                    <div class="col-xs-8">
                                                                        <a class="btn btn-primary btn-block btn-lg text-center">
                                                                            Dígito Verificador
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h4 class="text-center m-t-20 text-muted">
                                                            Ingresa el código que hemos enviado al mail
                                                        </h4>
                                                        <div class="row">
                                                            <div class="col-xs-12 col-md-8 col-md-offset-2">
                                                                <div class="row no-padding">
                                                                    <div class="col-xs-6">
                                                                        <input class="form-control text-center input-lg" placeholder="----" type="text">
                                                                        </input>
                                                                    </div>
                                                                    <div class="col-xs-6">
                                                                        <a class="btn btn-primary btn-block btn-lg">
                                                                            Re-enviar
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h4 class="text-center m-t-20 text-muted">
                                                            Ingresa el código que hemos al celular
                                                        </h4>
                                                        <div class="row">
                                                            <div class="col-xs-12 col-md-8 col-md-offset-2">
                                                                <div class="row no-padding">
                                                                    <div class="col-xs-6">
                                                                        <input class="form-control text-center input-lg" placeholder="----" type="text">
                                                                        </input>
                                                                    </div>
                                                                    <div class="col-xs-6">
                                                                        <a class="btn btn-primary btn-block btn-lg">
                                                                            Re-enviar
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="text-center m-t-30">
                                                            <a class="btn btn-primary btn-lg text-center next-step">
                                                                Continuar
                                                            </a>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="tab-pane" id="step4" role="tabpanel">
                                                    <h3 class="text-primary text-center no-padding no-margin p-b-20">
                                                        Crea tu password
                                                    </h3>
                                                    <form action="" class="" method="post" role="form">
                                                        <div class="form-group">
                                                            <input class="form-control text-center input-lg" placeholder="Ingresa tu contraseña" type="password">
                                                            </input>
                                                        </div>
                                                        <div class="form-group">
                                                            <input class="form-control text-center input-lg" placeholder="Confirma tu contraseña" type="password">
                                                            </input>
                                                        </div>
                                                        <div class="text-center m-t-30">
                                                            <a class="btn btn-primary btn-lg text-center next-step">
                                                                Continuar
                                                            </a>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="tab-pane text-center" id="complete" role="tabpanel">
                                                    <h3 class="text-primary text-center no-padding no-margin p-b-20">
                                                        Enlaza tu cuenta y
                                                        <br>
                                                            tu score crediticio
                                                        </br>
                                                    </h3>
                                                    <div id="fb-root">
                                                    </div>
                                                    <div class="fb-login-button" data-auto-logout-link="true" data-max-rows="1" data-show-faces="false" data-size="xlarge">
                                                    </div>
                                                </div>
                                                <div class="clearfix">
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <script>
            (function(d, s, id) {
                var IDFACEBOOK = '1550768728556159';
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.8&appId=" +IDFACEBOOK;
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
        </script>
        <?php require_once './sections/_footer.php';?>
        <?php require_once './sections/_scripts.php';?>
        <script src="assets/js/kfk-signup.min.js" type="text/javascript">
        </script>
    </body>
</html>