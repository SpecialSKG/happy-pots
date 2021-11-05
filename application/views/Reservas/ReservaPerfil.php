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