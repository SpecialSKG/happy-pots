<div class="pagetitle">
    <h1>Reserva</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><i class="bi bi-house-door"></i></li>
            <li class="breadcrumb-item active">Reserva</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section contact">
    <div class="row gy-4">
        <div class="col-xl-6 offset-lg-3">
            <div class="row">
                <div class="col-lg-6">
                    <div class="info-box card">
                        <i class="bi bi-emoji-laughing"></i>
                        <h3>Usuario</h3>
                        <select class="form-select" id="floating_usuario" aria-label="State" disabled>
                            <option selected>Opciones</option>
                            <?php if (isset($detalle->lugar)) { ?>
                                <?php foreach ($usuario as $u) : ?>
                                    <option value="<?= $u->id; ?>" <?= $u->id == $detalle->usuario  ? 'selected' : '' ?>>
                                        <?= $u->nombre; ?>
                                    </option>
                                <?php endforeach; ?>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="info-box card">
                        <i class="bi bi-compass"></i>
                        <h3>Lugar</h3>
                        <select class="form-select" id="floating_lugar" aria-label="State" disabled>
                            <option selected>Opciones</option>
                            <?php if (isset($detalle->lugar)) { ?>
                                <?php foreach ($lugar as $l) : ?>
                                    <option value="<?= $l->id; ?>" <?= $l->id == $detalle->lugar  ? 'selected' : '' ?>>
                                        <?= $l->lugar; ?>
                                    </option>
                                <?php endforeach; ?>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="info-box card">
                        <i class="bi bi-calendar-day"></i>
                        <h3>Fecha</h3>
                        <?php if (isset($detalle->usuario)) { ?>
                            <p><?= $detalle->fecha; ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="info-box card">
                        <i class="bi bi-clock"></i>
                        <h3>Hora</h3>
                        <?php if (isset($detalle->hora)) { ?>
                            <p><?= $detalle->hora; ?></p>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section">
    <div class="container my-2">
        <h2 class="display-4 py-2">Mis reservas</h2>
        <?php
        foreach ($reservas as $r) {

            $date = DateTime::createFromFormat('Y-m-d', $r->fecha); ?>

            <div class="row my-4">
                <div class="col-sm-12 col-md-4 col-lg-4 alert alert-success" role="alert">
                    <h3><i class="bi bi-info-circle"></i> <strong>Detalle de entrega</strong></h3>
                    <br>
                    <ul class="list-inline">
                        <li><strong>Lugar:</strong> <?= $r->lugar; ?></li>
                        <li><strong>Fecha:</strong> <?= $date->format('d/m/Y'); ?></li>
                        <li><strong>Hora:</strong> <?= $r->hora; ?></li>
                        <li><strong>Total:</strong> $<?= $r->total; ?></li>
                    </ul>
                </div>
                <div class="col-sm-12 col-md-8 col-lg-8 alert alert-light" role="alert">
                    <h3><i class="bi bi-bag"></i> <strong>Productos</strong></h3>
                    <br>
                    <?php
                    $detalle = $this->CrudModel->listarLoQueSea("select r.id as id_reserva, r.id as id_usuario, p.id as id_producto, m.id as id_material, r.fecha as fecha, r.hora as hora, r.total as total, p.nombre as producto, p.img_producto_id as img, p.precio as precio, d.cantidad as cantidad,l.lugar from reserva r inner join detalle d on r.id = d.reserva inner join producto p on d.producto = p.id inner join material m on d.material = m.id inner join lugar l on r.lugar = l.id where r.id = " . $r->id_reserva);
                    $i = 0;
                    foreach ($detalle as $d) { ?>
                        <?php $i++; ?>
                        <div class="row mb-4">
                            <div class="col-sm-12 col-md-4 col-lg-4" style="position:relative;display:inline-block;">
                                <span class="badge rounded bg-success" style="position: absolute;"><?php echo $i; ?></span>
                                <img class="img-fluid img-thumbnail w-100" src="<?= base_url() . "assets/images/productos/" . $d->img; ?>" alt="<?= $d->producto; ?>">
                            </div>
                            <div class="col-sm-12 col-md-8 col-lg-8">
                                <div>
                                    <h3><?= $d->producto ?></h3>
                                </div>
                                <div>
                                    <h6>Cantidad: <?= $d->cantidad ?></h6>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>

        <?php } ?>
    </div>
</section>