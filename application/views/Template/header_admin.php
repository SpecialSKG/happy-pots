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

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li><!-- End Search Icon-->

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
                                <span>Sign Out</span>
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


                <li class="nav-heading">Otros</li>

            <?php elseif ($this->session->userdata('tipo') == '3') : ?>

                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                        <i class="bi bi-menu-button-wide"></i><span>Components</span><i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="components-alerts.html">
                                <i class="bi bi-circle"></i><span>Alerts</span>
                            </a>
                        </li>
                        <li>
                            <a href="components-accordion.html">
                                <i class="bi bi-circle"></i><span>Accordion</span>
                            </a>
                        </li>
                        <li>
                            <a href="components-badges.html">
                                <i class="bi bi-circle"></i><span>Badges</span>
                            </a>
                        </li>
                        <li>
                            <a href="components-breadcrumbs.html">
                                <i class="bi bi-circle"></i><span>Breadcrumbs</span>
                            </a>
                        </li>
                        <li>
                            <a href="components-buttons.html">
                                <i class="bi bi-circle"></i><span>Buttons</span>
                            </a>
                        </li>
                        <li>
                            <a href="components-cards.html">
                                <i class="bi bi-circle"></i><span>Cards</span>
                            </a>
                        </li>
                        <li>
                            <a href="components-carousel.html">
                                <i class="bi bi-circle"></i><span>Carousel</span>
                            </a>
                        </li>
                        <li>
                            <a href="components-list-group.html">
                                <i class="bi bi-circle"></i><span>List group</span>
                            </a>
                        </li>
                        <li>
                            <a href="components-modal.html">
                                <i class="bi bi-circle"></i><span>Modal</span>
                            </a>
                        </li>
                        <li>
                            <a href="components-tabs.html">
                                <i class="bi bi-circle"></i><span>Tabs</span>
                            </a>
                        </li>
                        <li>
                            <a href="components-pagination.html">
                                <i class="bi bi-circle"></i><span>Pagination</span>
                            </a>
                        </li>
                        <li>
                            <a href="components-progress.html">
                                <i class="bi bi-circle"></i><span>Progress</span>
                            </a>
                        </li>
                        <li>
                            <a href="components-spinners.html">
                                <i class="bi bi-circle"></i><span>Spinners</span>
                            </a>
                        </li>
                        <li>
                            <a href="components-tooltips.html">
                                <i class="bi bi-circle"></i><span>Tooltips</span>
                            </a>
                        </li>
                    </ul>
                </li><!-- End Components Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                        <i class="bi bi-journal-text"></i><span>Forms</span><i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="forms-elements.html">
                                <i class="bi bi-circle"></i><span>Form Elements</span>
                            </a>
                        </li>
                        <li>
                            <a href="forms-layouts.html">
                                <i class="bi bi-circle"></i><span>Form Layouts</span>
                            </a>
                        </li>
                        <li>
                            <a href="forms-editors.html">
                                <i class="bi bi-circle"></i><span>Form Editors</span>
                            </a>
                        </li>
                        <li>
                            <a href="forms-validation.html">
                                <i class="bi bi-circle"></i><span>Form Validation</span>
                            </a>
                        </li>
                    </ul>
                </li><!-- End Forms Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                        <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="tables-general.html">
                                <i class="bi bi-circle"></i><span>General Tables</span>
                            </a>
                        </li>
                        <li>
                            <a href="tables-data.html">
                                <i class="bi bi-circle"></i><span>Data Tables</span>
                            </a>
                        </li>
                    </ul>
                </li><!-- End Tables Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
                        <i class="bi bi-bar-chart"></i><span>Charts</span><i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="charts-chartjs.html">
                                <i class="bi bi-circle"></i><span>Chart.js</span>
                            </a>
                        </li>
                        <li>
                            <a href="charts-apexcharts.html">
                                <i class="bi bi-circle"></i><span>ApexCharts</span>
                            </a>
                        </li>
                        <li>
                            <a href="charts-echarts.html">
                                <i class="bi bi-circle"></i><span>ECharts</span>
                            </a>
                        </li>
                    </ul>
                </li><!-- End Charts Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
                        <i class="bi bi-gem"></i><span>Icons</span><i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="icons-bootstrap.html">
                                <i class="bi bi-circle"></i><span>Bootstrap Icons</span>
                            </a>
                        </li>
                        <li>
                            <a href="icons-remix.html">
                                <i class="bi bi-circle"></i><span>Remix Icons</span>
                            </a>
                        </li>
                        <li>
                            <a href="icons-boxicons.html">
                                <i class="bi bi-circle"></i><span>Boxicons</span>
                            </a>
                        </li>
                    </ul>
                </li><!-- End Icons Nav -->

                <li class="nav-heading">Page</li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="pages-faq.html">
                        <i class="bi bi-question-circle"></i>
                        <span>F.A.Q</span>
                    </a>
                </li><!-- End F.A.Q Page Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" href="pages-contact.html">
                        <i class="bi bi-envelope"></i>
                        <span>Contact</span>
                    </a>
                </li><!-- End Contact Page Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" href="pages-register.html">
                        <i class="bi bi-card-list"></i>
                        <span>Register</span>
                    </a>
                </li><!-- End Register Page Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" href="pages-login.html">
                        <i class="bi bi-box-arrow-in-right"></i>
                        <span>Login</span>
                    </a>
                </li><!-- End Login Page Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" href="pages-error-404.html">
                        <i class="bi bi-dash-circle"></i>
                        <span>Error 404</span>
                    </a>
                </li><!-- End Error 404 Page Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" href="pages-blank.html">
                        <i class="bi bi-file-earmark"></i>
                        <span>Blank</span>
                    </a>
                </li><!-- End Blank Page Nav -->

            <?php endif; ?>

        </ul>

    </aside>
    <!-- End Sidebar-->