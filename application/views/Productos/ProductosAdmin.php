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
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Lista de Productos</h5>
                    <nav class="d-flex justify-content-end">
                        <a class="btn btn-primary" href="<?= base_url(); ?>ProductosAd/insertProd">
                            <i class="bi bi-star me-1"></i> Agregar
                        </a>
                    </nav>
                    <!-- Table with stripped rows -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Descripcion</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Categoria</th>
                                <th scope="col">Imagen</th>
                                <th scope="col">Estado</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data as $d) { ?>
                                <tr class="<?php $d->estado == 1 ? print '' : print 'table-warning' ?>">
                                    <th scope="row"><?= $d->id ?></th>
                                    <td><?= $d->nombre ?></td>
                                    <td><?= $d->descripcion ?></td>
                                    <td><?= $d->precio ?></td>
                                    <td><?= $d->nombre_categorias ?></td>
                                    <td>
                                        <img src="<?= base_url() . 'assets/images/productos/' . $d->img_producto_id ?>" alt="..." width="100">
                                    </td>
                                    <td>
                                        <?= ($d->estado == 1) ? '<i class="btn btn-success bi bi-bag-check"></i>' : '<i class="btn btn-warning bi bi-bag-dash"></i>'; ?>
                                    </td>
                                    <td>
                                        <a type="submit" href="<?= base_url() . 'ProductosAd/obtenerProducto/' . $d->id ?>" class="btn btn-info">
                                            <i class="bi bi-info-circle"></i>
                                        </a>
                                        <button data-id="<?= $d->id ?>" id="eliminar_producto" class="btn btn-danger">
                                            <i class="bi bi-exclamation-octagon"></i>
                                        </button>
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