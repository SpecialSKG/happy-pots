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
            <li><a href="<?= base_url() ?>">Inicio</a></li>
            <li class="active">Carrito</li>
        </ul>
    </div>
</section>
<!-- Base typography-->
<section class="section section-sm section-first bg-default section-style-2 text-md-left">
    <div class="container">

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
            <?php $numeracion = 1;
            $subtota = 0;
            $total = 0;
            foreach ($detalles as $d) { ?>

                <tr>
                    <td><?= $numeracion ?><?php $numeracion = $numeracion + 1 ?></td>
                    <td><?= $d->nombre ?></td>
                    <td><img src="<?= base_url('assets/images/productos/') . $d->img_producto_id ?>" alt="" /></td>
                    <td><?= "$ " . $d->precio ?></td>
                    <td>
                        <form action="<?= base_url('/Carrito/actualizarCantidad') ?>" method="post">
                            <input type="number" name="cantidad" value="<?= $d->cantidad ?>" style="width: 100%;" />
                            <input type="hidden" name="id" value="<?= $d->id ?>" />
                            <input class="my-2" type="submit" name="submit" value="Actualizar" style="border: none;width: 100%;background-color: #98BF44;" />
                        </form>
                    </td>
                    <td>
                        <?php $totalproducto = sprintf("%01.2f", (($d->precio) * ($d->cantidad)));
                        $subtota = sprintf("%01.2f", $subtota + $totalproducto); //round(($subtota + $totalproducto), 2,PHP_ROUND_HALF_UP);
                        echo ("$ " . $totalproducto);
                        ?>
                    </td>
                    <td>
                        <form action="<?= base_url('/Carrito/removerCarrito') ?>" method="post">
                            <input type="hidden" name="id" value="<?= $d->id ?>" />
                            <input type="submit" name="submit" value="Quitar" style="border: none;background-color: #6046B6;color: #ffffff;" />
                        </form>
                    </td>
                </tr>
            <?php } ?>

            <!-- Esto dentro de foreach() -->
        </table>
        <form action="<?= base_url('Carrito/reserva'); ?>" name="formulario" id="formulario" method="post">
            <div class="row my-0">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                        <label for="lugar">Lugar</label>
                        <Select class="form-control form-control-sm" id="lugar" type="text" style="font-size: 1.2rem;" required>
                            <?php foreach ($lugares as $lugar) { ?>
                                <option value="<?= $lugar->id ?>"><?= $lugar->lugar ?></option>
                            <?php } ?>
                        </Select>
                    </div>
                </div>
            </div>
            <div class="row my-0">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group">
                        <label for="fecha">Fecha</label>
                        <input class="form-control form-control-sm" id="fecha" name="fecha" type="text" style="font-size: 1.2rem;background:white;" readonly="readonly" required>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group">
                        <label for="hora">Hora</label>
                        <select class="form-control form-control-sm" id="hora" style="font-size: 1.2rem;" required></select>
                    </div>
                </div>
            </div>
            <table class="table text-left">
                <tr>
                    <th>Sub Total : </th>
                    <td><?php
                        $subtota = sprintf("%01.2f", $subtota);
                        echo ("$ " . $subtota);
                        ?></td>
                </tr>
                <tr>
                    <th>Envio : </th>
                    <td>
                        <?php
                        $iva = sprintf("%01.2f", $subtota * 0.03);
                        $total = sprintf("%01.2f", $subtota + $iva);
                        echo ("$ " . $iva);
                        ?>
                    </td>
                </tr>
                <tr>
                    <th>Total a pagar :</th>
                    <td><?= "$" . $total ?></td>
                    <input type="hidden" value="<?= $total ?>" name="total" id="total" />
                    <input type="hidden" name="lugarhidden" id="lugarhidden" />
                    <input type="hidden" name="horahidden"  id="horahidden" />
                </tr>
            </table>
            <input name="enviar" id="enviar" type="submit" class="btn btn-sm btn-primary m-0" value="Reservar" />
        </form>

        <!-- Aquí mostrar un mensaje cuando el carrito este vacío -->
        <div class="row">
            <div class="col">
                <a class="btn btn-sm" href="<?php base_url() . 'Product'; ?>">Seguir comprando</a>
            </div>
        </div>

    </div>
</section>
<script>
    $(document).ready(function() {
        var today = new Date();
        var dateDay = new Date(today.getFullYear(), today.getMonth(), today.getDate() + 2);
        $("#lugarhidden").val($("#lugar").val());
        $("#horahidden").val("02:30 pm");

        $('#fecha').datepicker({
            beforeShowDay: function(date) {
                return [date.getDay() == 0 || date.getDay() == 6]
            },
            minDate: dateDay,
            dateFormat: 'yy-mm-dd' 
        },
        
        );
        $("#hora").append("<option value='02:30 pm'>02:30 pm</option><option value='03:00 pm'>03:00 pm</option>");

        $('input #cantidad').keyup(function(e) {
            if ($('input #cantidad').val() < 0) {
                $('input #cantidad').val(1);
            }
        });

        $("#lugar").change(function (e) { 
            $("#lugarhidden").val($("#lugar").val());
            $("#horahidden").val($("#hora option").val());
        });

        $("#hora").change(function (e) { 
            $("#horahidden").val($("#hora").val());
        });

        $("#lugar").change(function(e) {
            e.preventDefault();
            var optiones = "";
            $("#hora").empty();
            $("#hora").val('');
            if ($("#lugar").val() == 1) {

                optiones += "<option value='04:00 pm'  > 04:00 pm </option>";
                optiones += "<option value='04:30 pm'  > 04:30 pm </option>";
            } else if ($("#lugar").val() == 2) {
                optiones += "<option value='10:00 am'  > 10:00 am </option>";
                optiones += "<option value='10:30 am'  > 10:30 am </option>";
            } else if ($("#lugar").val() == 3) {

                optiones += "<option value='01:00 pm'  > 01:00 pm </option>";
                optiones += "<option value='01:30 pm'  > 01:30 pm </option>";
            } else if ($("#lugar").val() == 4) {
                optiones += "<option value='01:30 pm' selected > 01:30 pm </option>";
                optiones += "<option value='02:00 pm'  > 02:00 pm </option>";
            } else if ($("#lugar").val() == 5) {
                optiones += "<option value='02:30 pm'  > 02:30 pm </option>";
                optiones += "<option value='03:00 pm'  > 03:00 pm </option>";
            }
            $("#hora").append(optiones);
        });
        
        $("form[name='formulario'] ").validate({
            rules: {
                lugar: "required",
                fecha: "required",
                hora: "required"
            }
        });
    });
</script>