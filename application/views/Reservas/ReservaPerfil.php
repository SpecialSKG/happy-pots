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
                            <?php foreach ($usuario as $u) : ?>
                                <option value="<?= $u->id; ?>" <?= $u->id == $detalle->usuario  ? 'selected' : '' ?>>
                                    <?= $u->nombre; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="info-box card">
                        <i class="bi bi-compass"></i>
                        <h3>Lugar</h3>
                        <select class="form-select" id="floating_lugar" aria-label="State" disabled>
                            <option selected>Opciones</option>
                            <?php foreach ($lugar as $l) : ?>
                                <option value="<?= $l->id; ?>" <?= $l->id == $detalle->lugar  ? 'selected' : '' ?>>
                                    <?= $l->lugar; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="info-box card">
                        <i class="bi bi-calendar-day"></i>
                        <h3>Fecha</h3>
                        <p><?= $detalle->fecha; ?></p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="info-box card">
                        <i class="bi bi-clock"></i>
                        <h3>Hora</h3>
                        <p><?= $detalle->hora; ?></p>
                    </div>
                </div>
            </div>

        </div>

    </div>

</section>

<?php foreach ($reservas as $r) { 
     $date = DateTime::createFromFormat('Y-m-d', $r->fecha);
    ?>
    <div class="container border border-dark my-2">
        <?=$r->lugar." ". $date->format('d/m/Y')." " .$r->hora. " ".$r->total?>
        <?php 
            $detalle = $this->CrudModel->listarLoQueSea("select r.id as id_reserva, r.id as id_usuario, p.id as id_producto, m.id as id_material, r.fecha as fecha, r.hora as hora, r.total as total, p.nombre as producto, p.img_producto_id as img, p.precio as precio, d.cantidad as cantidad,l.lugar from reserva r inner join detalle d on r.id = d.reserva inner join producto p on d.producto = p.id inner join material m on d.material = m.id inner join lugar l on r.lugar = l.id where r.id = ".$r->id_reserva);   
            foreach ($detalle as $d) {?>
                <div><?= $d->producto?></div> 
                <div><?= $d->cantidad?></div>
                <div><img style="height: 80px;" src="<?= base_url()."assets/images/productos/".$d->img?>" alt="<?= $d->producto?>"> </div>
        <?php } ?>
    </div>
<?php } ?>