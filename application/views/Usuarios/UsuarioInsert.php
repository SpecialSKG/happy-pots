<br><br>

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
                                <input type="text" class="form-control" id="floating_nombre" placeholder="Nombre">
                                <label for="floating_nombre">Nombre</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="floating_email" placeholder="Correo">
                                <label for="floating_email">Correo</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="col-sm-2 col-form-label">Tipo</label>
                            <div class="col-sm-10">
                                <select class="form-select" aria-label="Default select example" id="floating_tipo">
                                    <option selected>Menú de Selección</option>
                                    <option value="1">Administracion</option>
                                    <option value="2">Usuario</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floating_pass" placeholder="Password">
                                <label for="floating_pass">Password</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="floating_cell" placeholder="Telefono">
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