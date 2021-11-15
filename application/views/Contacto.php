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
            <li><a href="<?=base_url()?>">Inicio</a></li>
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
                        <div class="col-md-6">
                            <div class="form-wrap">
                                <input class="form-input" id="contact-your-name-5" type="text" name="nombrecompleto" data-constraints="@Required">
                                <label class="form-label" for="contact-your-name-5">Nombre completo</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-wrap">
                                <input class="form-input" id="contact-email-5" type="email" name="correoelectronico" data-constraints="@Email @Required">
                                <label class="form-label" for="contact-email-5">Correo electrónico</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-wrap">
                                <!--Select 2-->
                                <select class="form-input" data-minimum-results-for-search="Infinity" data-constraints="@Required" name="tipoentrega">
                                    <option>-- Tipo de entrega --</option>
                                    <option value="1">Entrega rápida</option>
                                    <option value="2">Entrega normal</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-wrap">
                                <input class="form-input" id="contact-phone-5" type="text" name="telefono" data-constraints="@Numeric">
                                <label class="form-label" for="contact-phone-5">Teléfono</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-wrap">
                                <label class="form-label" for="contact-message-5">Mensaje</label>
                                <textarea class="form-input textarea-lg" id="contact-message-5" name="mensaje" data-constraints="@Required"></textarea>
                            </div>
                        </div>
                    </div>
                    <input type="submit" class="button button-lg button-primary button-winona wow fadeInRight" value="Enviar mensaje">
                </form>
            </div>
            <div class="col-lg-4">
                <div class="aside-contacts">
                    <div class="row row-30">
                        <div class="col-sm-6 col-lg-12 aside-contacts-item">
                            <p class="aside-contacts-title">Síguenos</p>
                            <ul class="list-inline contacts-social-list list-inline-sm">
                                <li><a class="icon mdi mdi-facebook" href="#"></a></li>
                                <li><a class="icon fa fa-instagram" href="#"></a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-lg-12 aside-contacts-item">
                            <p class="aside-contacts-title">Llámanos</p>
                            <div class="unit unit-spacing-xs justify-content-center justify-content-md-start">
                                <div class="unit-left"><span class="icon mdi mdi-phone"></span></div>
                                <div class="unit-body"><a class="phone" href="tel:+50374700643">(503) 7470-0643</a></div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-12 aside-contacts-item">
                            <p class="aside-contacts-title">E-mail</p>
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