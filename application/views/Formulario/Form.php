<div class="pagetitle">
    <h1>Tabla Formulario</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?= base_url("/Dashboard") ?>"><i class="bi bi-house-door"></i></a>
            </li>
            <li class="breadcrumb-item active">Formulario</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Formulario</h5>

                    <!-- Table with stripped rows -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Email</th>
                                <th scope="col">Consulta</th>
                                <th scope="col">Telefono</th>
                                <th scope="col">Mensaje</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($datos as $d) { ?>
                                <tr>
                                    <th scope="row"><?= $d->id ?></th>
                                    <td><?= $d->nombrecompleto ?></td>
                                    <td><?= $d->correoelectronico ?></td>
                                    <td>
                                        <?= ($d->tipoentrega == 1) ? '<i class="btn btn-success bi bi-hourglass" title="Consulta Normal"></i>' : '<i class="btn btn-warning bi bi-hourglass-split" title="Consulta Urgente"></i>'; ?>
                                    </td>

                                    <td><?= $d->telefono ?></td>
                                    <td><?= $d->mensaje ?></td>
                                    <td>
                                        <button data-id="<?= $d->id ?>" id="eliminar_formulario" class="btn btn-danger">
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