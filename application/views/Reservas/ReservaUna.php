<div class="pagetitle">
    <h1>Reserva</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?= base_url("/DashboardCliente") ?>"><i class="bi bi-house-door"></i></a>
            </li>
            <li class="breadcrumb-item active">Reserva</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="container my-2">
        
        <div class="row my-4">
            <?php
            if(isset($reserva[0])){
                $r = $reserva[0];
                $date = DateTime::createFromFormat('Y-m-d', $r->fecha);
                ?>
                <h2 class="display-4 py-2">Reserva de <?= $r->usuario?></h2>

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
                    $i = 0;
                    foreach ($reserva as $d) { ?>
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
                                    <div>
                                    <h6>Color:</h6>
                                    <img src="<?= base_url() . 'assets/images/materiales/' . $d->material ?>" class="d-block w-25 h-25 border" alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <?php 
                }else{
                     echo "no hay informacion sobre esta reserva"; 
                     } ?>
        </div>
    </div>
</section>