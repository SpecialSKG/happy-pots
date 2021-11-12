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
                    <h5 class="card-title">Agregar Productos</h5>

                    <!-- General Form Elements -->
                    <form action="<?= base_url("/ProductosAd/insertar_producto") ?>" method="post" enctype="multipart/form-data" class="d-flex flex-column">

                        <div class="row mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="estado" id="gridRadios1" value="1" checked>
                                <label class="form-check-label" for="gridRadios1">
                                    Activo
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="estado" id="gridRadios2" value="2">
                                <label class="form-check-label" for="gridRadios2">
                                    Inactivo
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-3 col-form-label">Nombre</label>
                            <div class="col-sm-9">
                                <input type="text" required class="form-control" name="nombre" id="nombre">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputEmail" class="col-sm-3 col-form-label">Descripcion</label>
                            <div class="col-sm-9">
                                <input type="text" required class="form-control" name="descripcion" id="descripcion">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputPassword" class="col-sm-3 col-form-label">Precio</label>
                            <div class="col-sm-9">
                                <input type="text" required class="form-control" name="precio" id="precio">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputNumber" class="col-sm-3 col-form-label">Subir Archivo</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="file" required name="img" id="img">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Categorias</label>
                            <div class="col-sm-9">
                                <select class="form-select" aria-label="Default select example" name="id_categoria" id="id_categoria">
                                    <option disabled value="">Opciones</option>
                                    <?php foreach ($categorias as $c) { ?>
                                        <option value="<?= $c->id ?>">
                                            <?= $c->nombre_categorias ?>
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