<!-- Breadcrumbs -->
<section class="bg-gray-7">
    <div class="breadcrumbs-custom box-transform-wrap context-dark">
        <div class="container">
            <h3 class="breadcrumbs-custom-title">Detalle del producto</h3>
            <div class="breadcrumbs-custom-decor"></div>
        </div>
    </div>
    <div class="container">
        <ul class="breadcrumbs-custom-path">
            <li><a href="<?=base_url()?>">Inicio</a></li>
            <li><a href="<?=base_url().'Product'?>">Productos</a></li>
            <li class="active">Detalle</li>
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
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h2><?=$producto->nombre;?></h2>
                <br>
                <p><del>$15.00</del></p>
                <h5><?=$producto->precio;?></h5>
                <p>Colores</p>
                <select name="" id="">
                    <option value=""><?=$producto->productocol;?></option>
                </select>               
                <input type="number" class="form-control mt-5" id="cantidad" placeholder="¿Cuántos quieres?" style="font-size:1.3rem;">
                <button class="btn btn-sm btn-primary mt-4">Reservar producto</button>
                <button class="btn btn-sm mt-4">Ver canasta</button>
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
                        <h3 class="my-4"><?=$producto->nombre;?></h3>
                        <p>
                            <?=$producto->descripcion;?>
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