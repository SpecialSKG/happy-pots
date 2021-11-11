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
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Descripcion</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Categoria</th>
                                <th scope="col">Imagen</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data as $d) { ?>
                                <tr>
                                    <th scope="row"><?= $d->id ?></th>
                                    <td><?= $d->nombre ?></td>
                                    <td><?= $d->descripcion ?></td>
                                    <td><?= $d->precio ?></td>
                                    <td><?= $d->nombre ?></td>
                                    <td>
                                        <img src="<?= base_url() . 'assets/images/productos/' . $d->img_producto_id ?>" alt="..." width="100" >
                                    </td>
                                    <td>
                                        <a type="submit" href="<?= base_url() . 'ProductosAd/obtenerProducto/' . $d->id ?>" class="btn btn-info">
                                            <i class="bi bi-info-circle"></i>
                                        </a>
                                        <a type="submit" data-id="<?= $d->id ?>" id="delete" class="btn btn-danger">
                                            <i class="bi bi-exclamation-octagon"></i>
                                        </a>
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