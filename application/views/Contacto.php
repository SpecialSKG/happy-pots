<!-- Breadcrumbs -->
<section class="bg-gray-7">
    <div class="breadcrumbs-custom box-transform-wrap context-dark">
        <div class="container">
            <h3 class="breadcrumbs-custom-title">Contáctanos</h3>
            <div class="breadcrumbs-custom-decor"></div>
        </div>
    </div>
    <div class="container">
        <ul class="breadcrumbs-custom-path">
            <li><a href="<?= base_url() ?>">Inicio</a></li>
            <li class="active">Contáctanos</li>
        </ul>
    </div>
</section>
<!-- Contacts-->
<section class="section section-lg bg-default text-md-left">
    <div class="container">
        <div class="row row-60 justify-content-center">

            <div class="col-lg-8">
                <h4 class="text-spacing-25 text-transform-none">Ponerse en contacto</h4>

                <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="<?= base_url("/Inicio/insertarFormulario") ?>">
                    <div class="row row-20 gutters-20">
                        <div class="col-md-6 col-lg-6 oh-desktop">
                            <div class="form-wrap wow slideInDown">
                                <input class="form-input" id="nombrecompleto" type="text" name="nombrecompleto">
                                <label class="form-label" for="nombrecompleto">Nombre completo</label>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 oh-desktop">
                            <div class="form-wrap wow slideInUp">
                                <input class="form-input" id="correoelectronico" type="email" name="correoelectronico">
                                <label class="form-label" for="correoelectronico">Correo electrónico</label>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 oh-desktop">
                            <div class="form-wrap wow slideInDown">
                                <!--Select 2-->
                                <select class="form-input" data-minimum-results-for-search="Infinity" name="tipoentrega" id="tipoentrega">
                                    <option>-- Tipo de entrega --</option>
                                    <option value="1">Consulta Normal</option>
                                    <option value="2">Consulta Urgente</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 oh-desktop">
                            <div class="form-wrap">
                                <input class="form-input" id="telefono" type="text" name="telefono">
                                <label class="form-label" for="telefono">Teléfono</label>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12 oh-desktop">
                            <div class="form-wrap wow fadeIn">
                                <label class="form-label" for="mensaje">Mensaje</label>
                                <textarea class="form-input textarea-lg" id="mensaje" name="mensaje"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="group-custom-1 group-middle oh-desktop">
                        <input type="button" class="button button-lg button-primary button-winona wow fadeInRight" value="Enviar mensaje" id="registro_form">
                    </div>
                </form>

            </div>

            <div class="col-lg-4">
                <div class="aside-contacts">
                    <div class="row row-30">
                        <div class="col-sm-6 col-lg-12 aside-contacts-item">
                            <p class="aside-contacts-title">Síguenos</p>
                            <ul class="list-inline contacts-social-list list-inline-sm">
                                <!-- <li><a class="icon mdi mdi-facebook" href="#"></a></li> -->
                                <li><a class="icon fa fa-instagram" href="https://www.instagram.com/happy.potsv/" target="_blank"></a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-lg-12 aside-contacts-item">
                            <p class="aside-contacts-title">Llámanos</p>
                            <div class="unit unit-spacing-xs justify-content-center justify-content-md-start">
                                <div class="unit-left"><span class="icon mdi mdi-phone"></span></div>
                                <div class="unit-body"><a class="phone" href="tel:+50374700643">(+503) 7470-0643</a></div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-12 aside-contacts-item">
                            <p class="aside-contacts-title">Correo Electronico</p>
                            <div class="unit unit-spacing-xs justify-content-center justify-content-md-start">
                                <div class="unit-left"><span class="icon mdi mdi-email-outline"></span></div>
                                <div class="unit-body"><a class="mail" href="mailto:happypots@outlook.es">happypots@outlook.es</a></div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-12 aside-contacts-item">
                            <p class="aside-contacts-title">Dirección</p>
                            <div class="unit unit-spacing-xs justify-content-center justify-content-md-start">
                                <div class="unit-left"><span class="icon mdi mdi-map-marker"></span></div>
                                <div class="unit-body"><a class="address" href="#">San Salvador, <br class="d-md-none">El Salvador</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>