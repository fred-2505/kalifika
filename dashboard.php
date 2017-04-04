<!DOCTYPE html>
<html lang="es_PE">
    <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="utf-8" />
        <title>Kalifika</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
        <?php require_once './sections/_metas.php'; ?>
        <?php require_once './sections/_links.php'; ?>
        <script src="assets/plugins/amcharts/amcharts/amcharts.js" type="text/javascript"></script>
        <script src="assets/plugins/amcharts/amcharts/serial.js" type="text/javascript"></script>
        <script src="assets/plugins/amcharts/amcharts/themes/light.js" type="text/javascript">
        </script>
    </head>
    <body>
        <div class="wrapper">
            <?php require_once './sections/user/_header.php'; ?>
            <div class="container m-t-80">
                <div class="row">
                    <div class="col-xs-12 col-sm-5">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <h2 class="text-left m-b-20">Categorías</h2>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                        <div class="kfk-score kfk-score-danger">
                                            <div class="kfk-score-number">100</div>
                                            <img class="img-responsive" src="assets/images/dashboard/score_.png">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                        <h5 class="text-center m-t-40">"Lorem ipsum dolor sit amet, ad has dolores delectus, has cu persecuti percipitur"</h5>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="btn-group m-t-20">
                                            <div class="btn btn-danger kfk-category-score" data-category="danger" data-score="100">Danger</div>
                                            <div class="btn btn-warning kfk-category-score" data-category="warning" data-score="450">Warning</div>
                                            <div class="btn btn-success kfk-category-score" data-category="good" data-score="800">Good</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-7">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <h2 class="text-center">Acciones del Usuario</h2>
                                <div class="alert alert-warning">
                                    <p class="text-justify">Lorem ipsum dolor sit amet, ad has dolores delectus, has cu persecuti percipitur, quo qualisque vituperata et. Ut officiis philosophia vel. Eam ex impedit atomorum, id prima ceteros fabellas vel, in choro iuvaret perpetua qui. Eam ex voluptua percipit phaedrum, pri ad dicta consulatu imperdiet, elit oporteat omittantur ius ex. Minim corrumpit mei an.</p>
                                </div>
                                <div class="row" id="kfk-user-actions">
                                    <div class="col-xs-6 col-sm-6">
                                        <a href="#" class="kfk-data-dialog" data-dialog="kfk-dialog-detalle-score">
                                            <img class="img-responsive kfk-user-action" src="assets/images/dashboard/action_01.jpg">
                                        </a>
                                    </div>
                                    <div class="col-xs-6 col-sm-6">
                                        <a href="#" class="kfk-data-dialog" data-dialog="kfk-dialog-detalle-deuda">
                                            <img class="img-responsive kfk-user-action" src="assets/images/dashboard/action_02.jpg">
                                        </a>
                                    </div>
                                    <div class="col-xs-6 col-sm-6">
                                        <a href="filters.php">
                                            <img class="img-responsive kfk-user-action" src="assets/images/dashboard/action_03.jpg">
                                        </a>
                                    </div>
                                    <div class="col-xs-6 col-sm-6">
                                        <a href="filters.php">
                                            <img class="img-responsive kfk-user-action" src="assets/images/dashboard/action_04.jpg">
                                        </a>
                                    </div>
                                    <div class="col-xs-6 col-sm-6">
                                        <a href="filters.php">
                                            <img class="img-responsive kfk-user-action" src="assets/images/dashboard/action_05.jpg">
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <?php require_once './sections/user/_modal_detalle_score.php'; ?>
        <?php require_once './sections/user/_modal_detalle_deuda.php'; ?>

        <?php require_once './sections/_footer.php'; ?>
        <?php require_once './sections/_scripts.php'; ?>
        <script type="text/javascript" src="assets/js/kfk-dashboard.min.js"></script>
    </body>
</html>