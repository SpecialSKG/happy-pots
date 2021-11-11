<div class="pagetitle">
    <h1>Productos</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><i class="bi bi-house-door"></i></li>
            <li class="breadcrumb-item">Productos</li>
            <li class="breadcrumb-item active">Data</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-8 offset-2">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Actualizar Productos</h5>

                    <!-- General Form Elements -->
                    <form action="<?= base_url("/ProductosAd/insertar_producto") ?>" method="post" enctype="multipart/form-data" class="d-flex flex-column">

                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-3 col-form-label">Nombre</label>
                            <div class="col-sm-9">
                                <input type="text" required class="form-control" name="nombre" id="nombre" value="<?= $detalle->nombre; ?>">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputEmail" class="col-sm-3 col-form-label">Descripcion</label>
                            <div class="col-sm-9">
                                <input type="text" required class="form-control" name="descripcion" id="descripcion" value="<?= $detalle->descripcion; ?>">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputPassword" class="col-sm-3 col-form-label">Precio</label>
                            <div class="col-sm-9">
                                <input type="text" required class="form-control" name="precio" id="precio" value="<?= $detalle->precio; ?>">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputNumber" class="col-sm-3 col-form-label">Subir Archivo</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="file" required name="img" id="img" value="<?= $detalle->img_producto_id; ?>">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Categorias</label>
                            <div class="col-sm-9">
                                <select class="form-select" aria-label="Default select example" name="categoria" id="categoria">
                                    <option selected>Opciones</option>
                                    <?php foreach ($categorias as $c) { ?>
                                        <option value="<?= $c->id ?>" <?= $d == $detalle->categorias  ? 'selected' : '' ?>>
                                            <?= $c->nombre ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="d-grid gap-2 mt-3">
                                <input type="submit" class="btn btn-primary" value="Guardar">
                            </div>
                        </div>

                    </form><!-- End General Form Elements -->

                </div>
            </div>

        </div>

    </div>
</section>