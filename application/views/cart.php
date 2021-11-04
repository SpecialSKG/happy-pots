<!-- Breadcrumbs -->
<section class="bg-gray-7">
    <div class="breadcrumbs-custom box-transform-wrap context-dark">
        <div class="container">
            <h3 class="breadcrumbs-custom-title">Carrito</h3>
            <div class="breadcrumbs-custom-decor"></div>
        </div>
    </div>
    <div class="container">
        <ul class="breadcrumbs-custom-path">
            <li><a href="<?=base_url()?>">Inicio</a></li>
            <li class="active">Carrito</li>
        </ul>
    </div>
</section>
<!-- Base typography-->
<section class="section section-sm section-first bg-default section-style-2 text-md-left">
    <div class="container">
        <form action="" method="POST">
            <div class="row my-0">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                        <label for="lugar">Lugar</label>
                        <input class="form-control form-control-sm" id="lugar" type="text" style="font-size: 1.2rem;">
                    </div>
                </div>
            </div>
            <div class="row my-0">
                <div class="col-sm-12 col-md-6 col-lg-6">
                 <div class="form-group">
                    <label for="fecha">Fecha</label>
                    <input class="form-control form-control-sm" id="fecha" type="date" style="font-size: 1.2rem;">
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                    <label for="hora">Hora</label>
                    <input class="form-control form-control-sm" id="hora" type="time" style="font-size: 1.2rem;">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-sm btn-primary m-0">Enviar</button>
    </form>
    <h4 class="text-center my-3 py-3">Detalle</h4>
    <table class="table table-striped table-responsive my-5">
        <tr style="background-color: #98BF44;">
            <th width="5%">N°</th>
            <th width="30%">Nombre del producto</th>
            <th width="10%">Imagen</th>
            <th width="15%">Precio</th>
            <th width="20%">Cantidad</th>
            <th width="15%">Precio total</th>
            <th width="5%">Acción</th>
        </tr>
        <!-- Esto dentro de foreach() -->
        <tr>
            <td>1</td>
            <td>Pot elefante</td>
            <td><img src="" alt=""/></td>
            <td>$ 10.00</td>
            <td>
                <form action="" method="post">
                    <input type="number" name="cantidad" value="1" style="width: 100%;" />
                    <input type="hidden" name="id" value="1"/>
                    <input class="my-2" type="submit" name="submit" value="Actualizar" style="border: none;width: 100%;background-color: #98BF44;" />
                </form>
            </td>
            <td>$ 10.00</td>
            <td>
                <form action="#" method="post">
                    <input type="hidden" name="id" value="1"/>
                    <input type="submit" name="submit" value="Quitar" style="border: none;background-color: #6046B6;color: #ffffff;" />
                </form>
            </td>
        </tr>
        <!-- Esto dentro de foreach() -->
    </table>
</div>
</section>