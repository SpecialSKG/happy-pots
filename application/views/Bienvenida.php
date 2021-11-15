<!-- Swiper-->
<section class="section swiper-container swiper-slider swiper-slider-2 swiper-slider-3" data-loop="true" data-autoplay="5000" data-simulate-touch="false" data-slide-effect="fade">
    <div class="swiper-wrapper text-sm-left">
        <div class="swiper-slide" data-slide-bg="<?=base_url().'assets/images/slide-1.jpg';?>">
            <div class="swiper-slide-caption section-md">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-9 col-md-8 col-lg-7 col-xl-7 offset-lg-1 offset-xxl-0">
                            <h2 class="oh swiper-title" style="color: #98BF44;-webkit-text-stroke: 1px grey;">
                                <span class="d-inline-block" data-caption-animate="slideInUp" data-caption-delay="0">Set Geométrico</span>
                            </h2>
                            <p class="big swiper-text text-white" data-caption-animate="fadeInLeft" data-caption-delay="800">Nuestras macetas hechas con mucho amor</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- context-dark -->
        <div class="swiper-slide" data-slide-bg="<?=base_url().'assets/images/slide-2.jpg';?>">
            <div class="swiper-slide-caption section-md">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-lg-7 offset-lg-1 offset-xxl-0">
                            <h2 class="oh swiper-title" style="color: #98BF44;-webkit-text-stroke: 1px grey;">
                                <span class="d-inline-block" data-caption-animate="slideInDown" data-caption-delay="0">Set Geométrico</span>
                            </h2>
                            <p class="big swiper-text text-white" data-caption-animate="fadeInRight" data-caption-delay="800">Cada macetita hecha a mano y con mucho amor para ti</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Swiper Pagination-->
    <div class="swiper-pagination" data-bullet-custom="true"></div>
    <!-- Swiper Navigation-->
    <div class="swiper-button-prev">
        <div class="preview">
            <div class="preview__img"></div>
        </div>
        <div class="swiper-button-arrow"></div>
    </div>
    <div class="swiper-button-next">
        <div class="swiper-button-arrow"></div>
        <div class="preview">
            <div class="preview__img"></div>
        </div>
    </div>
</section>
<!-- What We Offer-->
<section class="section section-md bg-default">
    <div class="container">
        <h3 class="oh-desktop"><span class="d-inline-block wow slideInDown">Categorías</span></h3>
        <div class="row row-md row-30">
            <div class="col-sm-6 col-lg-4">
                <div class="oh-desktop">
                    <!-- Services Terri-->
                    <article class="services-terri wow slideInUp">
                        <div class="services-terri-figure"><img src="<?= base_url() . 'assets/images/menu-1-370x278.jpg'; ?>" alt="" width="370" height="278" />
                        </div>
                        <div class="services-terri-caption"><span class="services-terri-icon linearicons-leaf"></span>
                            <h5 class="services-terri-title"><a href="#">Plantas</a></h5>
                        </div>
                    </article>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="oh-desktop">
                    <!-- Services Terri-->
                    <article class="services-terri wow slideInDown">
                        <div class="services-terri-figure"><img src="<?= base_url() . 'assets/images/producto-categoria-2.jpg'; ?>" alt="" width="370" height="278" />
                        </div>
                        <div class="services-terri-caption"><span class="services-terri-icon linearicons-heart"></span>
                            <h5 class="services-terri-title"><a href="#">Formas</a></h5>
                        </div>
                    </article>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="oh-desktop">
                    <!-- Services Terri-->
                    <article class="services-terri wow slideInDown">
                        <div class="services-terri-figure"><img src="<?= base_url() . 'assets/images/menu-3-370x278.jpg'; ?>" alt="" width="370" height="278" />
                        </div>
                        <div class="services-terri-caption"><span class="services-terri-icon linearicons-paw"></span>
                            <h5 class="services-terri-title"><a href="#">Animales</a></h5>
                        </div>
                    </article>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Section CTA-->
<section class="primary-overlay section parallax-container" data-parallax-img="<?= base_url() . 'assets/images/bg-3.jpg'; ?>">
    <div class="parallax-content section-xl context-dark text-md-left">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-sm-8 col-md-7 col-lg-5">
                    <div class="cta-modern">
                        <h3 class="cta-modern-title wow fadeInRight">Un Bello complemento</h3>
                        <p class="lead">Un complemento que puede estar contigo ya sea en tu hogar como en tu trabajo.</p>
                        <p class="cta-modern-text cta-modern-text-2 oh-desktop" data-wow-delay=".1s">
                            <span class="cta-modern-decor cta-modern-decor-2 wow slideInLeft"></span>
                            <span class="d-inline-block wow slideInUp"><strong>Ana Beatriz López Sorto</strong></span>
                            <span class="small d-block"><i>Fundadora</i></span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Shop-->
<section class="section section-lg bg-default">
    <div class="container">
        <h3 class="oh-desktop"><span class="d-inline-block wow slideInUp">Nuevos Pots</span></h3>
        <div class="row row-lg row-30">
        <?php foreach($producto as $p){ ?>
            <div class="col-sm-6 col-lg-4 col-xl-3">
                <!-- Product-->
                <article class="product wow fadeInLeft" data-wow-delay=".15s">
                    <div class="product-figure"><img src="<?= base_url() . 'assets/images/productos/' . $p->img_producto_id ?>" alt="" width="161" height="162" />
                    </div>
                    <br>
                    <h6 class="product-title"><?=$p->nombre;?></h6>
                    <div class="product-price-wrap">
                        <div class="product-price">$<?=$p->precio;?></div>
                    </div>
                    <div class="product-button">
                        <div class="button-wrap"><a class="button button-xs button-secondary button-winona" href="<?=base_url(). "Product/maceta/". $p->id?>">Ver producto</a></div>
                    </div><span class="product-badge product-badge-new">Nuevo</span>
                </article>
            </div>
        <?php } ?>            
        </div>
    </div>
</section>

<!-- Section CTA-->
<section class="primary-overlay section parallax-container" data-parallax-img="<?= base_url() . 'assets/images/bg-4.jpg'; ?>">
    <div class="parallax-content section-xxl context-dark text-md-left">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-sm-9 col-md-7 col-lg-5">
                    <div class="cta-modern">
                        <h3 class="cta-modern-title cta-modern-title-2 oh-desktop">
                            <span class="d-inline-block wow fadeInLeft">Toda flor es un alma floreciendo en la naturaleza.</span>
                        </h3>
                        <p class="cta-modern-text cta-modern-text-2 oh-desktop" data-wow-delay=".1s">
                            <span class="cta-modern-decor cta-modern-decor-2 wow slideInLeft"></span>
                            <span class="d-inline-block wow slideInUp"><strong>Ana Beatriz López Sorto</strong></span>
                            <span class="small d-block"><i>Fundadora</i></span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Tell-->
<section class="section section-sm section-first bg-default">
    <div class="container">
        <h3 class="heading-3">Contáctanos</h3>
        <form class="rd-form rd-mailform form-style-1" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
            <div class="row row-20 gutters-20">
                <div class="col-md-6 col-lg-4 oh-desktop">
                    <div class="form-wrap wow slideInDown">
                        <input class="form-input" id="contact-your-name-6" type="text" name="name" data-constraints="@Required">
                        <label class="form-label" for="contact-your-name-6">Nombre completo</label>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 oh-desktop">
                    <div class="form-wrap wow slideInUp">
                        <input class="form-input" id="contact-email-6" type="email" name="email" data-constraints="@Email @Required">
                        <label class="form-label" for="contact-email-6">Correo electrónico</label>
                    </div>
                </div>
                <div class="col-lg-4 oh-desktop">
                    <div class="form-wrap wow slideInDown">
                        <!--Select 2-->
                        <select class="form-input" data-minimum-results-for-search="Infinity" data-constraints="@Required">
                            <option>-- Tipo de entrega --</option>
                            <option value="1">Entrega rápida</option>
                            <option value="2">Entrega normal</option>
                        </select>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-wrap wow fadeIn">
                        <label class="form-label" for="contact-message-6">Mensaje</label>
                        <textarea class="form-input textarea-lg" id="contact-message-6" name="message" data-constraints="@Required"></textarea>
                    </div>
                </div>
            </div>
            <div class="group-custom-1 group-middle oh-desktop">
                <button class="button button-lg button-primary button-winona wow fadeInRight" type="submit">Enviar mensaje</button>
                <!-- Quote Classic-->
                <article class="quote-classic quote-classic-3 wow slideInDown">
                    <div class="quote-classic-text">
                        <p class="q">Recuerda reservar con 1 día de anticipación</p>
                    </div>
                </article>
            </div>
        </form>
    </div>
</section>

<!-- Section Services  Last section-->
<section class="section section-sm bg-default">
    <div class="container">
        <div class="owl-carousel owl-style-11 dots-style-2" data-items="1" data-sm-items="1" data-lg-items="2" data-xl-items="4" data-margin="30" data-dots="true" data-mouse-drag="true" data-rtl="true">

            <article class="box-icon-megan wow fadeInUp">
                <div class="box-icon-megan-header">
                    <div class="box-icon-megan-icon linearicons-calendar-full"></div>
                </div>
                <h5 class="box-icon-megan-title"><a href="#">Reservas</a></h5>
                <p class="box-icon-megan-text">Somos responsables con nuestros pedidos, por eso pedimos una reserva y confirmación a la hora de entrega.</p>
            </article>

            <article class="box-icon-megan wow fadeInUp" data-wow-delay=".05s">
                <div class="box-icon-megan-header">
                    <div class="box-icon-megan-icon linearicons-bag"></div>
                </div>
                <h5 class="box-icon-megan-title"><a href="#">Entregas</a></h5>
                <p class="box-icon-megan-text">Nuestras entregas se realizan en centros comerciales o lugares donde ambas partes puedan estar cómodas y no se tengan problemas.</p>
            </article>

            <article class="box-icon-megan wow fadeInUp" data-wow-delay=".1s">
                <div class="box-icon-megan-header">
                    <div class="box-icon-megan-icon linearicons-tag"></div>
                </div>
                <h5 class="box-icon-megan-title"><a href="#">Productos</a></h5>
                <p class="box-icon-megan-text">Nuestros productos son elaborados a mano, por tal razón, llevan todo nuestro cariño en la elaboración.</p>
            </article>

            <article class="box-icon-megan wow fadeInUp" data-wow-delay=".15s">
                <div class="box-icon-megan-header">
                    <div class="box-icon-megan-icon linearicons-thumbs-up"></div>
                </div>
                <h5 class="box-icon-megan-title"><a href="#">Servicio</a></h5>
                <p class="box-icon-megan-text">El cliente es nuestra prioridad #1, ya que brindamos un servicio al cliente de primer nivel.</p>
            </article>

        </div>
    </div>
</section>