<div class="pagetitle">
    <h1>Tabla Usuarios</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><i class="bi bi-house-door"></i></li>
            <li class="breadcrumb-item">Usuario</li>
            <li class="breadcrumb-item active">Data</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Usuarios</h5>
                    <a class="btn btn-primary" href="<?= base_url(); ?>Usuario/ins_Usuario">
                        <i class="bi bi-star me-1"></i> Agregar
                    </a>

                    <!-- Table with stripped rows -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Email</th>
                                <th scope="col">Pass</th>
                                <th scope="col">Telefono</th>
                                <th scope="col">Tipo</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data as $d) { ?>
                                <tr>
                                    <th scope="row"><?= $d->id ?></th>
                                    <td><?= $d->nombre ?></td>
                                    <td><?= $d->email ?></td>
                                    <td><?= base64_decode($d->pass) ?></td>
                                    <td><?= $d->cell ?></td>
                                    <td><?= $d->tipo ?></td>
                                    <td>
                                        <a type="submit" href="<?= base_url() . 'Usuario/obtenerUsuario/' . $d->id ?>" class="btn btn-info">
                                            <i class="bi bi-info-circle"></i>
                                        </a>
                                        <?php if ($this->session->userdata('id') == $d->id) : ?>
                                            <a type="submit" class="btn btn-outline-danger disabled">
                                                <i class="bi bi-exclamation-octagon"></i>
                                            </a>
                                        <?php else : ?>
                                            <button data-id="<?= $d->id ?>" id="delete" class="btn btn-danger">
                                                <i class="bi bi-exclamation-octagon"></i>
                                            </button>
                                        <?php endif; ?>

                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <!-- End Table with stripped rows -->

                </div>
            </div>

        </div>
    </div>
</section>

<script src="<?php echo base_url() . 'assets/js/usuario/delete_usuario.js'; ?>"></script>