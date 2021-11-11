<div class="pagetitle">
    <h1>Tabla Usuarios</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><i class="bi bi-house-door"></i></li>
            <li class="breadcrumb-item">Producto</li>
            <li class="breadcrumb-item active">Data</li>
        </ol>
    </nav>
</div><!-- End Page Title --><br><br>

<section class="section">
    <div class="row justify-content-center">
        <div class="col-lg-8">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Actualizar Productos</h5>

                    <!-- Floating Labels Form -->
                    <form class="row g-3">
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floating_nombre" value="<?= $detalle->nombre; ?>" placeholder="Nombre" required>
                                <label for="floating_nombre">Nombre</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="descripcion" class="form-control" id="floating_descrip" value="<?= $detalle->descripcion; ?>" placeholder="Descripcion" required>
                                <label for="floating_email">Descripcion</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="floating_precio" value="<?= $detalle->precio; ?>" placeholder="Precio" required>
                                    <label for="floating_cell">Precio</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="floating_img" value="<?= $detalle->img; ?>" placeholder="Imagen" required>
                                    <label for="floating_cell">Imagen</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="floating_estado" value="<?= $detalle->estado; ?>" placeholder="Estado" required>
                                    <label for="floating_cell">Estado</label>
                                </div>
                            </div>
                        </div>

                        <div class="text-center">
                            <input hidden id="floating_id" value="<?= $detalle->id; ?>">
                            <input class="btn btn-primary" type="button" id="update_usuario" value="Guardar">

                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                    </form><!-- End floating Labels Form -->

                </div>
            </div>

        </div>
    </div>
</section>

