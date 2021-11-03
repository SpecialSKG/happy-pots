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
            <li><a href="<?= base_url() ?>">Inicio</a></li>
            <li><a href="<?= base_url() . 'Product' ?>">Productos</a></li>
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
                            <img src="<?= base_url() . 'assets/images/productos/' . $producto->img_producto_id ?>" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="<?= base_url() . 'assets/images/productos/' . $producto->img_producto_id ?>" class="d-block w-100" alt="...">
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
                <h2><?= $producto->nombre ?></h2>
                <br>
                <p><del><?= '$ ' . ($producto->precio + 2.5) ?></del></p>
                <h5><?= '$ ' . $producto->precio ?></h5>
                <p>Colores</p>

                <label class="col-2">
                    <input type="radio" name="material" id="material" value="4" checked>
                    <img class="border border-dark" src="<?= base_url('assets/images/materiales/Blanco.jpg') ?>">
                </label>

                <label class="col-2">
                    <input type="radio" name="material" id="material" value="3">
                    <img class="border border-dark" src="<?= base_url('assets/images/materiales/Verde.jpg') ?>">
                </label>

                <label class="col-2">
                    <input type="radio" name="material" id="material" value="2">
                    <img class="border border-dark" src="<?= base_url('assets/images/materiales/Azul.jpg') ?>">
                </label>

                <label class="col-2">
                    <input type="radio" name="material" id="material" value="1">
                    <img class="border border-dark" src="<?= base_url('assets/images/materiales/Rojo.jpg') ?>">
                </label>

                <input type="number" required class="form-control mt-5" id="cantidad" placeholder="¿Cuántos quieres?" style="font-size:1.3rem;">
                <div class="btn btn-sm btn-primary mt-4" name="agregarTemp" id="agregarTemp">Reservar producto</div>
                <button class="btn btn-sm mt-4" name="verCanasta" id="verCanasta" >Ver canasta</button>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist" style="border-bottom: none;">
                        <a class="nav-link active" id="nav-des-tab" data-toggle="tab" href="#nav-des" role="tab" aria-controls="nav-des" aria-selected="true">Descripción</a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-des" role="tabpanel" aria-labelledby="nav-des-tab">
                        <h3 class="my-4"><?= $producto->nombre ?></h3>
                        <p>
                            <?= $producto->descripcion ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    $(document).ready(function() {
        $("#agregarTemp").click(function(e) {
            e.preventDefault();
            $.ajax({
                type: "post",
                url: baseurl + "/Product/insertarDetalleTemp",
                data: {
                    cantidad: $("#cantidad").val(),
                    material: $("input[name='material']:checked").val(),
                    producto: <?= $producto->id ?>
                },
                dataType: "json",
                success: function(response) {
                    if(response.result == 1){
                        alertify.success('<div style="color: #ffffff">'+response.message+'</div>');
                    }else{
                        alertify.error('<div style="color: #ffffff">'+response.message+'</div>');
                    }
                    
                }
            });
        });

        $("#verCanasta").click(function (e) { 
            e.preventDefault();

        });
    });
</script>