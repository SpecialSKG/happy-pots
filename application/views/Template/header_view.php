<!DOCTYPE html>
<html class="wide wow-animation" lang="es">

<head>
    <title><?= $page_title; ?></title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="<?= base_url() . 'assets/images/happyicon.ico'; ?>" type="image/gif">

    <!-- Stylesheets-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:100,300,300i,400,500,600,700,900%7CRaleway:500">

    <link href="https://fonts.googleapis.com/css2?family=Zen+Antique&display=swap" rel="stylesheet">

    <link type="text/css" rel="stylesheet" href="<?= base_url() . 'assets/css/bootstrap.css'; ?>">
    <link type="text/css" rel="stylesheet" href="<?= base_url() . 'assets/css/fonts.css"'; ?>">
    <link type="text/css" rel="stylesheet" href="<?= base_url() . 'assets/css/style.css'; ?>">
    <link type="text/css" rel="stylesheet" href="<?= base_url() . 'assets/css/alertify.min.css'; ?>">
    <link type="text/css" rel="stylesheet" href="<?= base_url('assets/css/jqueryui/jquery-ui.structure.css') ?>">
    <link type="text/css" rel="stylesheet" href="<?= base_url('assets/css/jqueryui/jquery-ui.theme.css') ?>">

    <link rel="stylesheet" href="<?= base_url() . 'assets/plugins/sweetalert/sweetalert2.css' ?>">

    <script src="<?= base_url() . 'assets/js/jquery.js'; ?>"></script>
    <script src="<?= base_url('assets/js/jqueryui/jquery-ui.js') ?>"></script>
    <script src="<?= base_url() . 'assets/js/alertify.min.js'; ?>"></script>
    <script src="<?= base_url() . 'assets/js/push.min.js'; ?>"></script>



    <!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="preloader">
        <div class="wrapper-triangle">
            <div class="pen">
                <div class="line-triangle">
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                </div>
                <div class="line-triangle">
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                </div>
                <div class="line-triangle">
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="page">

        <!-- Page Header-->
        <header class="section page-header">
            <!-- RD Navbar-->
            <div class="rd-navbar-wrap">
                <nav class="rd-navbar rd-navbar-modern" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="56px" data-xl-stick-up-offset="56px" data-xxl-stick-up-offset="56px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
                    <div class="rd-navbar-inner-outer">
                        <div class="rd-navbar-inner">
                            <!-- RD Navbar Panel-->
                            <div class="rd-navbar-panel">
                                <!-- RD Navbar Toggle-->
                                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap">
                                    <span></span>
                            </button>
                                <!-- RD Navbar Brand-->
                                <div class="rd-navbar-brand">
                                    <a class="brand d-flex align-items-center display-6" href="<?= base_url() ?>">
                                        <img class="brand-logo-dark img-fluid" src="<?= base_url() . 'assets/images/happypots.jpg'; ?>" alt="Logo de Happy Pots" width="50" height="50" />
                                    </a>
                                </div>
                            </div>

                            <div class="rd-navbar-right rd-navbar-nav-wrap">
                                <div class="rd-navbar-aside">
                                    <ul class="rd-navbar-contacts-2">
                                        <li>
                                            <div class="unit unit-spacing-xs">
                                                <div class="unit-left"><span class="icon mdi mdi-phone"></span></div>
                                                <div class="unit-body"><a class="phone" href="tel:+50374700643">(+503) 7470-0643</a></div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="unit unit-spacing-xs">
                                                <div class="unit-left"><span class="icon mdi mdi-map-marker"></span></div>
                                                <div class="unit-body"><a class="address" href="#">San Salvador, El Salvador</a></div>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul class="list-share-2">
                                        <!-- <li>
                                            <a class="icon mdi mdi-facebook" href="#" target="_blank"></a>
                                        </li> -->
                                        <li>
                                            <a class="icon fa fa-instagram" href="https://www.instagram.com/happy.potsv/" target="_blank"></a>
                                        </li>
                                        <li>
                                            <a class="icon fa fa-user-o" href="<?= base_url() . 'Login'; ?>"></a>
                                        </li>
                                        <li>
                                            <a class="icon mdi mdi-cart" href="<?= base_url() . 'Carrito'; ?>"></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="rd-navbar-main">
                                    <!-- RD Navbar Nav-->
                                    <ul class="rd-navbar-nav">
                                        <li class="rd-nav-item <?= $view == 'Bienvenida' ? $activo : ''; ?>">
                                        <a class="rd-nav-link" href="<?= base_url(); ?>">Inicio</a>
                                        </li>
                                        <li class="rd-nav-item <?= $view == 'Acercade' ? $activo : ''; ?>">
                                        <a class="rd-nav-link" href="<?= base_url() . 'Acerca'; ?>">¿Quiénes somos?</a>
                                        </li>
                                        <li class="rd-nav-item <?= $view == 'Producto' ? $activo : ''; ?>">
                                        <a class="rd-nav-link" href="<?= base_url() . 'Product'; ?>">Productos</a>
                                        </li>
                                        <li class="rd-nav-item <?= $view == 'Contacto' ? $activo : ''; ?>">
                                        <a class="rd-nav-link" href="<?= base_url() . 'Contact'; ?>">Contáctanos</a>
                                        </li>
                                        <!--<li class="rd-nav-item <?= $view == 'Reserva' ? $activo : ''; ?>"><a class="rd-nav-link" href="<?= base_url() . 'Reserva'; ?>">Reserva</a>
                                        </li>-->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>

        </header>