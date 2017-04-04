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
            <section class="m-t-80">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-3">
                            <div class="panel panel-default padding-10">
                                <div class="panel-body">
                                    <div><strong> What are you looking to do?</strong></div>
                                    <div class="radio radio-primary m-b-0">
                                        <input type="radio" checked="" id="filter_1_1" name="filter_1">
                                        <label for="filter_1_1">Subastar deuda</label>
                                    </div>
                                    <div class="radio radio-primary m-b-0">
                                        <input type="radio" id="filter_1_2" name="filter_1">
                                        <label for="filter_1_2">Tarjeta de Crédito</label>
                                    </div>
                                    <div class="radio radio-primary m-t-0">
                                        <input type="radio" id="filter_1_3" name="filter_1">
                                        <label for="filter_1_3">Solicitar Crédito</label>
                                    </div>
                                    <div class="p-t-5 p-b-10"><strong> How much are you looking to borrow?</strong></div>
                                    <div class="kfk-filter-subasta">
                                        <small>Tipo de moneda</small>
                                        <div class="radio radio-primary m-b-0">
                                            <input type="radio" checked="" id="filter_2_1" name="filter_2">
                                            <label for="filter_2_1">En Soles (S/.)</label>
                                        </div>
                                        <div class="radio radio-primary m-t-0">
                                            <input type="radio" id="filter_2_2" name="filter_2">
                                            <label for="filter_2_2">En Dólares (U$$)</label>
                                        </div>
                                        <small>Tipo de deuda</small>
                                        <div class="radio radio-primary m-b-0">
                                            <input type="radio" checked="" id="filter_3_1" name="filter_3">
                                            <label for="filter_3_1"><i class="fa fa-money"></i> Consumo</label>
                                        </div>
                                        <div class="radio radio-primary m-t-0">
                                            <input type="radio" id="filter_3_2" name="filter_3">
                                            <label for="filter_3_2"><i class="fa fa-car"></i> Vehículo</label>
                                        </div>
                                        <div class="m-b-10">
                                            <small>Monto</small>
                                            <input type="text" class="form-control m-t-10">
                                        </div>
                                        <div>
                                            <small>Meses</small>
                                            <div class="checkbox check-primary">
                                                <input type="checkbox" checked="" value="1" id="filter_5_0">
                                                <label for="filter_5_0">Show All</label>
                                            </div>
                                            <div class="checkbox check-primary">
                                                <input type="checkbox" value="1" id="filter_5_1">
                                                <label for="filter_5_1">< 1 Year</label>
                                            </div>
                                            <div class="checkbox check-primary">
                                                <input type="checkbox" value="1" id="filter_5_2">
                                                <label for="filter_5_2">12-35 Months</label>
                                            </div>
                                            <div class="checkbox check-primary">
                                                <input type="checkbox" value="1" id="filter_5_3">
                                                <label for="filter_5_3">36-47 Months</label>
                                            </div>
                                            <div class="checkbox check-primary">
                                                <input type="checkbox" value="1" id="filter_5_4">
                                                <label for="filter_5_4">48-59 Months</label>
                                            </div>
                                            <div class="checkbox check-primary">
                                                <input type="checkbox" value="1" id="filter_5_5">
                                                <label for="filter_5_5">60-71 Months</label>
                                            </div>
                                        </div>
                                        <div class="m-t-20">
                                            <button class="btn btn-primary btn-block">
                                                <i class="fa fa-search"></i>
                                                Buscar
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-9">
                            <div class="row p-l-30 p-r-30">
                                <div class="col-xs-12 ">
                                    <h2>We've Found 27 Personal Loans For You!</h2>
                                    <p>A personal loan might be right for you if you want to fund a big expense or if you want to consolidate debt. Personal loans may come with lower interest rates than credit cards, so funding a big expense or project with a personal loan could save you thousands of dollars on interest payments.</p>
                                    <p>Your personal loan will also add another line of credit to your credit report, and if you make on-time payments, you'll build credit while paying down debt.</p>
                                    <p>On this page you'll see reviews and potential offers to find the best financial loans. See where to get a loan, consolidate debt, build credit, and improve your credit health today.</p>
                                </div>
                            </div>
                            <div class="row m-b-20  p-l-30 p-r-30">
                                <div class="col-xs-12 col-sm-10">
                                    <h3 class="">Your Personal Loan Offers</h3>
                                </div>
                                <div class="col-xs-12 col-sm-2">
                                    <select class="form-control m-t-20">
                                        <option>Sorty by</option>
                                    </select>
                                </div>
                            </div>
                            <div class=" p-l-30 p-r-30">
                                <div class="panel panel-default">
                                    <div class="page-header m-t-10 m-b-10 p-l-20 p-b-0">
                                        <h4 class="text-primary">Banco 1</h4>
                                    </div>
                                    <div class="panel-body p-t-0">
                                        <div class="padding-10">
                                            <img src="assets/images/banco1.png" width="100">
                                            <a class="pull-right btn btn-primary">Get Started</a>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-xs-6 col-sm-6 col-md-3">
                                                <div class="text-center">
                                                    <i class="fa fa-money fa-2x text-primary"></i>
                                                    <div><strong>Monto Préstamo</strong></div>
                                                    <h3 class="m-t-0">S/. 5,000.00</h3>
                                                </div>
                                            </div> 
                                            <div class="col-xs-6 col-sm-6 col-md-3">
                                                <div class="text-center">
                                                    <i class="fa fa-percent fa-2x text-danger"><strong>%</strong></i>
                                                    <div><strong>Taza</strong></div>
                                                    <h3 class="m-t-0">20%</h3>
                                                </div>
                                            </div> 
                                            <div class="col-xs-6 col-sm-6 col-md-3">
                                                <div class="text-center">
                                                    <i class="fa fa-calendar fa-2x text-success"></i>
                                                    <div><strong>Plazo Préstamo</strong></div>
                                                    <h3 class="m-t-0">12 <small>meses</small></h3>
                                                </div>
                                            </div> 
                                            <div class="col-xs-6 col-sm-6 col-md-3">
                                                <div class="text-center">
                                                    <i class="fa fa-money fa-2x text-warning"></i>
                                                    <div><strong>Cuota</strong></div>
                                                    <h3 class="m-t-0">S/. 500.00</h3>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="panel-footer">
                                        <ul>
                                            <li>Borrow $1,000 to $50,000 at fixed rates from 4.66% to 29.99% APR</li>
                                            <li>Rates that consider education, work history and earning potential to supplement your credit profile</li>
                                            <li>Get your rate in 2 minutes without affecting your credit score!</li>
                                            <li>No prepayment penalties or hidden fees</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="page-header m-t-10 m-b-10 p-l-20 p-b-0">
                                        <h4 class="text-primary">Banco 2</h4>
                                    </div>
                                    <div class="panel-body p-t-0">
                                        <div class="padding-10">
                                            <img src="assets/images/banco2.png" width="100">
                                            <a class="pull-right btn btn-primary">Get Started</a>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-xs-6 col-sm-6 col-md-3">
                                                <div class="text-center">
                                                    <i class="fa fa-money fa-2x text-primary"></i>
                                                    <div><strong>Monto Préstamo</strong></div>
                                                    <h3 class="m-t-0">S/. 5,000.00</h3>
                                                </div>
                                            </div> 
                                            <div class="col-xs-6 col-sm-6 col-md-3">
                                                <div class="text-center">
                                                    <i class="fa fa-percent fa-2x text-danger"><strong>%</strong></i>
                                                    <div><strong>Taza</strong></div>
                                                    <h3 class="m-t-0">20%</h3>
                                                </div>
                                            </div> 
                                            <div class="col-xs-6 col-sm-6 col-md-3">
                                                <div class="text-center">
                                                    <i class="fa fa-calendar fa-2x text-success"></i>
                                                    <div><strong>Plazo Préstamo</strong></div>
                                                    <h3 class="m-t-0">12 <small>meses</small></h3>
                                                </div>
                                            </div> 
                                            <div class="col-xs-6 col-sm-6 col-md-3">
                                                <div class="text-center">
                                                    <i class="fa fa-money fa-2x text-warning"></i>
                                                    <div><strong>Cuota</strong></div>
                                                    <h3 class="m-t-0">S/. 500.00</h3>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="panel-footer">
                                        <ul>
                                            <li>Borrow $1,000 to $50,000 at fixed rates from 4.66% to 29.99% APR</li>
                                            <li>Rates that consider education, work history and earning potential to supplement your credit profile</li>
                                            <li>Get your rate in 2 minutes without affecting your credit score!</li>
                                            <li>No prepayment penalties or hidden fees</li>
                                        </ul>
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
        <script type="text/javascript" src="assets/js/kfk-filters.min.js"></script>
    </body>
</html>