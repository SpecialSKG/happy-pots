<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
    <title><?= $page_title; ?></title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="<?= base_url() . 'assets/images/happyicon.ico'; ?>" type="image/gif">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url() . 'assets/admin/vendor/bootstrap/css/bootstrap.min.css'; ?>" rel="stylesheet">
    <link href="<?= base_url() . 'assets/admin/vendor/bootstrap-icons/bootstrap-icons.css'; ?>" rel="stylesheet">
    <link href="<?= base_url() . 'assets/admin/vendor/remixicon/remixicon.css'; ?>" rel="stylesheet">
    <link href="<?= base_url() . 'assets/admin/vendor/boxicons/css/boxicons.min.css'; ?>" rel="stylesheet">
    <link href="<?= base_url() . 'assets/admin/vendor/quill/quill.snow.css'; ?>" rel="stylesheet">
    <link href="<?= base_url() . 'assets/admin/vendor/quill/quill.bubble.css'; ?>" rel="stylesheet">
    <link href="<?= base_url() . 'assets/admin/vendor/simple-datatables/style.css'; ?>" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url() . 'assets/plugins/sweetalert/sweetalert2.css' ?>">
    <link rel="stylesheet" href="<?= base_url() . 'assets/plugins/toastr/toastr.css' ?>">

    <!-- Template Main CSS File -->
    <link href="<?= base_url() . 'assets/admin/css/style.css'; ?>" rel="stylesheet">
    <script src="<?= base_url() . 'assets/js/jquery-3.6.0.js'; ?>"></script>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <?php if ($this->session->userdata('tipo') == '1') : ?>
                <a href="<?php echo base_url(); ?>Dashboard" class="logo d-flex align-items-center">
                    <span class="d-none d-lg-block">Happy Pots</span>
                </a>
            <?php else : ?>
                <a href="<?php echo base_url(); ?>DashboardCliente" class="logo d-flex align-items-center">
                    <span class="d-none d-lg-block">Happy Pots</span>
                </a>
            <?php endif; ?>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="<?= base_url() . 'assets/images/happypots.jpg'; ?>" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2">
                            <?php echo $this->session->userdata('nombre') ?>
                        </span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>
                                <?php echo $this->session->userdata('nombre') ?>
                            </h6>

                            <?php if ($this->session->userdata('tipo') == '1') : ?>
                                <span>Admnistrador</span>
                            <?php else : ?>
                                <span>Usuario</span>
                            <?php endif; ?>

                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="<?php echo base_url(); ?>Usuario/obtPerfil/<?php echo $this->session->userdata('id') ?>">
                                <i class="bi bi-person"></i>
                                <span>Mi Perfil</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="<?php echo base_url(); ?>Login/cerrar_sesion">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Cerrar sesion</span>
                            </a>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link collapsed" href="<?= base_url(); ?>">
                    <i class="bi bi-bank"></i>
                    <span>Sitio Web</span>
                </a>
            </li>

            <?php if ($this->session->userdata('tipo') == '2') : ?>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="<?= base_url(); ?>Reservas/obtenerReservaPerfil/<?php echo $this->session->userdata('id') ?>">
                        <i class="bi bi-layout-text-window-reverse"></i>
                        <span>Reserva Detalle</span>
                    </a>
                </li><!-- End Productos Page Nav -->

            <?php elseif ($this->session->userdata('tipo') == '1') : ?>
                <li class="nav-item">
                    <a class="nav-link " href="<?php echo base_url(); ?>Dashboard">
                        <i class="bi bi-grid"></i>
                        <span>Dashboard</span>
                    </a>
                </li><!-- End Dashboard Nav -->

                <li class="nav-heading">Paginas</li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="<?= base_url(); ?>Usuario">
                        <i class="bi bi-person"></i>
                        <span>Usuarios</span>
                    </a>
                </li><!-- End Usuarios Page Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" href="<?= base_url(); ?>ProductosAd">
                        <i class="bi bi-gem"></i>
                        <span>Productos</span>
                    </a>
                </li><!-- End Productos Page Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" href="<?= base_url(); ?>Reservas">
                        <i class="bi bi-gem"></i>
                        <span>Reservas</span>
                    </a>
                </li><!-- End Productos Page Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" href="<?= base_url(); ?>Formulario">
                        <i class="bi bi-envelope"></i>
                        <span>Formularios</span>
                    </a>
                </li><!-- End Productos Page Nav -->

            <?php endif; ?>

        </ul>

    </aside>
    <!-- End Sidebar-->