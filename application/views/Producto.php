<!-- Breadcrumbs -->
<section class="bg-gray-7">
    <div class="breadcrumbs-custom box-transform-wrap context-dark">
        <div class="container">
            <h3 class="breadcrumbs-custom-title">Nuestros Productos</h3>
            <div class="breadcrumbs-custom-decor"></div>
        </div>
        <!-- <div class="box-transform" style="background-image: url(<?= base_url() . 'assets/images/bg-1.jpg'; ?>);"></div> -->
    </div>
    <div class="container">
        <ul class="breadcrumbs-custom-path">
            <li><a href="<?=base_url()?>">Inicio</a></li>
            <li class="active">Productos</li>
        </ul>
    </div>
</section>
<!-- Base typography-->
<section class="section section-sm section-first bg-default section-style-2 text-md-left">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="<?=base_url().'assets/images/productos/elefantito-pot.jpg'?>" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="<?=base_url().'assets/images/productos/elefantito-pot-2.jpg'?>" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <!-- <img src="<?=base_url().'assets/images/productos/elefantito-pot.jpg'?>" class="img-fluid w-100" alt=""> -->
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h2>Elefantito</h2>
                <br>
                <p><del>$15.00</del></p>
                <h5>$10.00</h5>
                <p>Colores</p>
                <div id="color" style="width:40px; height:40px; background-color:grey; display:inline-block;"></div>
                <div id="color" style="width:40px; height:40px; background-color:blue; display:inline-block;"></div>
                <div id="color" style="width:40px; height:40px; background-color:brown; display:inline-block;"></div>                
                <input type="number" class="form-control mt-5" id="cantidad" placeholder="¿Cuántos quieres?" style="font-size:1.3rem;">
                <button class="btn btn-primary mt-4">Reservar producto</button>
                <button class="btn mt-4">Ver canasta</button>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist" style="border-bottom: none;">
                    <a class="nav-link active" id="nav-des-tab" data-toggle="tab" href="#nav-des" role="tab" aria-controls="nav-des" aria-selected="true">Descripción</a>
                    <a class="nav-link" id="nav-car-tab" data-toggle="tab" href="#nav-car" role="tab" aria-controls="nav-car" aria-selected="false">Características</a>
                </div>
            </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-des" role="tabpanel" aria-labelledby="nav-des-tab">
                        <h3 class="my-4">Elefantito</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur accumsan rhoncus erat quis faucibus. Ut ultrices mi sed augue finibus, a euismod arcu egestas. Cras dapibus rhoncus enim, ac hendrerit purus tristique ut. Suspendisse accumsan efficitur dignissim. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc nec commodo purus. Phasellus sed purus mi. Ut ex nunc, eleifend non aliquet a, egestas at massa. Suspendisse facilisis risus lectus, id tempor sem venenatis interdum. Proin vestibulum neque sit amet eros tristique, auctor fringilla massa pharetra. Nullam lacinia auctor libero, in aliquet velit commodo sed. Vivamus dictum pellentesque lorem vitae tristique.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="nav-car" role="tabpanel" aria-labelledby="nav-car-tab">
                        <table class="table table-hover my-4">
                            <thead>
                                <tr>
                                    <th>Detalles del producto</th>
                                    <th>Dimensiones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br> Curabitur accumsan rhoncus erat quis faucibus.</td>
                                    <td>12 cm x 9.50 cm</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>