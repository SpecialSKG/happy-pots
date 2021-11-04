
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
        <div class="row">
            <?php foreach($producto as $p){ ?>
                <div class="col-sm-12 col-md-3 col-lg-3 my-3">
                    <div class="card" style="width: 18rem;">
                        <img src="<?=base_url().'assets/images/producto.jpg'?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?=$p->nombre?></h5>
                            <p>$ <?=$p->precio?></p>
                            <a href="#" class="btn btn-sm btn-block btn-primary mt-5">Reservar</a>
                            <br>
                            <a href="<?=base_url().'DetalleProducto';?>" class="btn btn-sm btn-block">Ver producto</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <nav aria-label="Page navigation example">
                    <?php echo $this->pagination->create_links();?>
                </nav>
            </div>
        </div>
    </div>
</section>