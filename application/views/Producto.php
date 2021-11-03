<!-- Breadcrumbs -->
<section class="bg-gray-7">
    <div class="breadcrumbs-custom box-transform-wrap context-dark">
        <div class="container">
            <h3 class="breadcrumbs-custom-title">Nuestros Productos</h3>
            <div class="breadcrumbs-custom-decor"></div>
        </div>
    </div>
    <div class="container">
        <ul class="breadcrumbs-custom-path">
            <li><a href="<?= base_url() ?>">Inicio</a></li>
            <li class="active">Productos</li>
        </ul>
    </div>
</section>
<!-- Base typography-->
<section class="section section-sm section-first bg-default section-style-2 text-md-left">
    <div class="container">
        <div class="d-flex flex-wrap justify-content-between col-12">
            <?php foreach ($productos as $producto) { ?>

                <div class="col-sm-12 col-md-4 col-lg-3 my-3 px-1">
                    <div class="card col-12" >
                        <img src="<?= base_url() . 'assets/images/productos/' . $producto->img_producto_id ?>" class="card-img-top" alt="<?= $producto->img_producto_id ?>" style="height: 300px !important;">
                        <div class="card-body">
                            <h5 class="card-title"><?=$producto->nombre?></h5>
                            <p><?= $producto->precio?></p>
                            <a href="<?=base_url("Product/maceta/").$producto->id?>" class="btn btn-sm btn-block btn-primary mt-5">Reservar</a>
                            </div>
                    </div>
                </div>
            <?php } ?>


        </div>

        <!-- TODO PAGINACION NO TIENE FUNCIONALIDAD -->
        <div class="row">
            <div class="col">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled"><a class="page-link" href="#">Anterior</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item"><a class="page-link" href="#">Siguiente</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>