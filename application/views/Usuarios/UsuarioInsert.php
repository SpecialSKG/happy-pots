<div class="pagetitle">
    <h1>Tabla Usuarios</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?= base_url("/Dashboard") ?>"><i class="bi bi-house-door"></i></a>
            </li>
            <li class="breadcrumb-item"><a href="<?= base_url("/Usuario") ?>">Usuarios</a></li>
            <li class="breadcrumb-item active">Data</li>
        </ol>
    </nav>
</div><!-- End Page Title --><br><br>

<section class="section">
    <div class="row justify-content-center">
        <div class="col-lg-8">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Insertar Usuario</h5>

                    <!-- Floating Labels Form -->
                    <form class="row g-3">
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floating_nombre" placeholder="Nombre" required>
                                <label for="floating_nombre">Nombre</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="floating_email" placeholder="Correo" required>
                                <label for="floating_email">Correo</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <select class="form-select" id="floating_tipo" aria-label="State" required>
                                    <option selected>Opciones</option>
                                    <?php foreach ($tipo as $t) : ?>
                                        <option value="<?= $t->id; ?>">
                                            <?= $t->nombre_tipo; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                                <label for="floating_usuario">Tipo</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floating_pass" placeholder="Password" required>
                                <label for="floating_pass">Password</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="floating_cell" placeholder="Telefono" required>
                                    <label for="floating_cell">Telefono</label>
                                </div>
                            </div>
                        </div>

                        <div class="text-center">
                            <input class="btn btn-primary" type="button" id="insert_usuario" value="Guardar">

                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                    </form><!-- End floating Labels Form -->

                </div>
            </div>

        </div>
    </div>
</section>

<script src="<?php echo base_url() . 'assets/js/usuario/insertar_usuario.js'; ?>"></script>