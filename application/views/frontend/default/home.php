<section class="banner_home">
    <div class="bg-overlay"></div>
    <video loop muted autoplay preload="auto" style="width:100%;height:100%">
                    <source src="assets/frontend/images/rec.mp4" type="video/mp4">
                </video>
</section>
<section class="favs_home">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">Historia de la empresa</h2>
                <p class="text-center">ABYC, Idea enfocada a un sentido humanitario, con calidad y profesionalismo, creando, implementando y ejecutando estrategias especificas a cada necesidad empresarial en el área de recursos humanos; Recapitulando la evolución de esta magnifica empresa, se genera la idea de creación y, se lleva a cabo iniciando con gran entusiasmo, pasión y experiencia, durante estos inicios se va creando un gran equipo de trabajo solido, durante la aplicacion de conocimiento en esta area  se realizaron aportaciones fundamentales hacia esta magnifica empresa, adquiridas en su respetable trayectoria profesional y demostrando un alto grado de responsabilidad, compromiso, liderazgo y amor a su profesión. Se determina establecer un nombre que reflejara el valor y enfoque humanitario tanto para clientes como para candidatos, ABYC, que por sus siglas en inglés significa (administration, business and coaching). De igual manera se establecen los servicios  de calidad que se ofertarían, determinando iniciar con  reclutamiento y selección de personal, consultoría y asesoría de Recursos Humanos, pruebas psicométricas, estudio socioeconómico, capacitación, organización de eventos empresariales y de integración, mapeo de procesos.
                Cabe mencionar que nuestro primer cliente llego cuando aun no se había estructurado la empresa, generando una gran satisfacción con el servicio profesional otorgado y que hasta el momento seguimos brindando nuestros servicios para su desarrollo empresarial.
                ABYC, Comienza sus actividades en forma un 3 Junio 2018. Logrando tener presencia en diferentes estados de la república como Guadalajara, Monterrey, Tlaxcala, Querétaro, ciudad de México.
                Conforme avanza el tiempo el rumbo de nuestra magnifica empresa va evolucionando en todos los sentidos, pero siempre con la misma esencia y visión de ayudar, aportando la experiencia y profesionalismo sin perder de vista la misión que se genero en nuestros inicios, beneficiando a nuestros clientes y personas que depositan la confianza en nosotros.

                Actualmente ABYC es representada por la Lic. Antonia Sanchez Deolarte, Directora General de esta empresa, la cual ha logrado un posicionamiento importante dentro del sector empresarial, gubernamental y privado, teniendo como logros la ampliación de cartera de clientes, ingreso a nuevos mercados, la vinculación de sinergias empresariales, negocios integrales  y expansión de servicios,   considerando constantemente nuestro slogan “HUMAN ESSENCE” y misión fundamental que caracteriza a esta organizacion en el  área de recursos humanos y asi mismo generando impacto positivo en toda aquella persona que confía en nuestra magnifica empresa, logrando crecimiento profesional y exito laboral-empresarial.
                Se pretende seguir evolucionando tecnológicamente en el mercado, brindando el mejor servicio y atención a empresarios y personas que nos brindan la confianza de otorgarles algún servicio de interés, de igual forma incorporando huella profesional a estudiantes que se incorporan a esta magnífica empresa.

                </p>
                <h2 class="text-center">Valores</h2>
                                            <p>Trabajamos con:</p>

                <div class="row banners_min ds-nn" style="text-align:center;">
                    <div class="col-md-3">
                        <img src="<?php echo base_url().'assets/frontend/images/1.png'; ?>" alt="" >
                        <a>Responsabilidad.</a>
                        <p>.</p>
                    </div>
                    <div class="col-md-3">
                        <img src="<?php echo base_url().'assets/frontend/images/2.png'; ?>" alt="" >
                        <a>Eficiencia.</a>
                        <p>.</p>
                    </div>
                    <div class="col-md-3">
                        <img src="<?php echo base_url().'assets/frontend/images/4.png'; ?>" alt="" >
                        <a>Calidad.</a>
                        <p>.</p>
                    </div>
                    <div class="col-md-3">
                        <img src="<?php echo base_url().'assets/frontend/images/3.png'; ?>" alt="" >
                        <a>Confidencialidad.</a>
                        <p>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="banner">
    <div class="full">
        <div class="row">
            <div class="col-md-6 text">
                <h3 class="big">Mision</h3>
                <p>Garantizar eficientemente soluciones integrales a nuestros clientes en el area de recursos humanos.</p>
                <!--<a href="#" class="basic light">
                    E
                </a>-->
            </div>
            <div class="col-md-6">
                <img src="<?php echo base_url().'assets/frontend/images/.png'; ?>" alt="">
            </div>
        </div>
    </div>
</section>



<section class="banner image-left">
    <div class="full">
        <div class="row">
            <div class="col-md-6">
                <img src="<?php echo base_url().'assets/frontend/image/.png'; ?>" alt="">
            </div>
            <div class="col-md-6 text">
                <h3 class="big ">Vsion.</h3>
                <p>ser una empresa reconocida  a nivel nacional por el excelente servicio que se otorga en integracion ,administracion y gestion en el area de recursos humanos.</p>
            </div>
        </div>
    </div>
</section>



<script type="text/javascript">
function handleWishList(elem) {

    $.ajax({
        url: '<?php echo site_url('home/handleWishList');?>',
        type : 'POST',
        data : {course_id : elem.id},
        success: function(response)
        {
            if (!response) {
                window.location.replace("<?php echo site_url('login'); ?>");
            }else {
                if ($(elem).hasClass('active')) {
                    $(elem).removeClass('active')
                }else {
                    $(elem).addClass('active')
                }
                $('#wishlist_items').html(response);
            }
        }
    });
}

function handleCartItems(elem) {
    url1 = '<?php echo site_url('home/handleCartItems');?>';
    url2 = '<?php echo site_url('home/refreshWishList');?>';
    $.ajax({
        url: url1,
        type : 'POST',
        data : {course_id : elem.id},
        success: function(response)
        {
            $('#cart_items').html(response);
            if ($(elem).hasClass('addedToCart')) {
                $('.big-cart-button-'+elem.id).removeClass('addedToCart')
                $('.big-cart-button-'+elem.id).text("<?php echo get_phrase('add_to_cart'); ?>");
            }else {
                $('.big-cart-button-'+elem.id).addClass('addedToCart')
                $('.big-cart-button-'+elem.id).text("<?php echo get_phrase('added_to_cart'); ?>");
            }
            $.ajax({
                url: url2,
                type : 'POST',
                success: function(response)
                {
                    $('#wishlist_items').html(response);
                }
            });
        }
    });
}

function handleEnrolledButton() {
    $.ajax({
        url: '<?php echo site_url('home/isLoggedIn');?>',
        success: function(response)
        {
            if (!response) {
                window.location.replace("<?php echo site_url('login'); ?>");
            }
        }
    });
}
</script>
