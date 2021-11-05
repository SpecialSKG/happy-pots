<div class="pagetitle">
    <h1>Perfil</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><i class="bi bi-house-door"></i></li>
            <li class="breadcrumb-item">Usuario</li>
            <li class="breadcrumb-item active">Perfil</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section profile">
    <div class="row">
        <div class="col-xl-4">

            <div class="card">
                <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                    <img src="<?= base_url() . 'assets/images/happypots.jpg'; ?>" alt="Profile" class="rounded-circle">
                    <h2><?php echo $this->session->userdata('nombre') ?></h2>
                    <input hidden id="id" value="<?= $Perfil->id; ?>">

                    <?php if ($this->session->userdata('tipo') == '1') : ?>
                        <span>Admnistrador</span>
                    <?php else : ?>
                        <span>Usuario</span>
                    <?php endif; ?>

                </div>
            </div>

        </div>

        <div class="col-xl-8">

            <div class="card">
                <div class="card-body pt-3">
                    <!-- Bordered Tabs -->
                    <ul class="nav nav-tabs nav-tabs-bordered">

                        <li class="nav-item">
                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Visión General</button>
                        </li>

                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Editar Perfil</button>
                        </li>

                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Cambiar la Contraseña</button>
                        </li>

                    </ul>
                    <div class="tab-content pt-2">

                        <div class="tab-pane fade show active profile-overview" id="profile-overview">
                            <h5 class="card-title">Detalle de Perfil</h5>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label ">Nombre Completo</div>
                                <div class="col-lg-9 col-md-8"><?= $Perfil->nombre; ?></div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Telefono</div>
                                <div class="col-lg-9 col-md-8"><?= $Perfil->cell; ?></div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Email</div>
                                <div class="col-lg-9 col-md-8"><?= $Perfil->email; ?></div>
                            </div>

                        </div>

                        <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                            <!-- Profile Edit Form -->
                            <form>

                                <div class="row mb-3">
                                    <label for="nombre" class="col-md-4 col-lg-3 col-form-label">Nombre Completo</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="nombre" type="text" class="form-control" id="nombre" value="<?= $Perfil->nombre; ?>">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="cell" class="col-md-4 col-lg-3 col-form-label">Telefono</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="cell" type="text" class="form-control" id="cell" value="<?= $Perfil->cell; ?>">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="email" type="email" class="form-control" id="email" value="<?= $Perfil->email; ?>">
                                    </div>
                                </div>

                                <div class="text-center">
                                    <input class="btn btn-primary" type="button" id="update_perfil_datos" value="Guardar Cambios">
                                </div>
                            </form><!-- End Profile Edit Form -->

                        </div>

                        <div class="tab-pane fade pt-3" id="profile-change-password">
                            <!-- Change Password Form -->
                            <form>

                                <div class="row mb-3">
                                    <label for="pass" class="col-md-4 col-lg-3 col-form-label">Nueva contraseña</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="pass" type="password" class="form-control" id="pass">
                                    </div>
                                </div>

                                <div class="text-center">
                                    <input class="btn btn-primary" type="button" id="update_perfil_pass" value="Cambiar la contraseña">
                                </div>
                            </form><!-- End Change Password Form -->

                        </div>

                    </div><!-- End Bordered Tabs -->

                </div>
            </div>

        </div>
    </div>
</section>

<script src="<?php echo base_url() . 'assets/js/usuario/update_perfil.js'; ?>"></script>