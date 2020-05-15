<?php require 'views/head.php'; ?>

<section class="main-event-section">
    <header class="main-header">
        <div class="logo-main-header">
            <img src="<?php echo constant('URL')?>public/images/LogoBlanco.svg" alt="Endeavor Mentors' Live">
        </div>
        <a href="<?php echo constant('URL') ?>/event/logOut" class="log-out">Cerrar sesión</a>
    </header>
    <div class="container">
        <div class="row justify-content-center pt-5 pb-3">
            <div class="col text-center">
                <h2 class="normal-text">¡Ya estás en <span class="green">MENTORS' DAY </span>LIVE!</h2>
                <p class="normal-text pt-3">Para aprovechar al máximo esta experiencia, te invitamos a ver con atención el siguiente video</p>
            </div>
        </div>
        <div class="row justify-content-center pb-5">
            <div class="col-lg-6 col-md-10">
                <img src="https://via.placeholder.com/1920x1080" alt="" class="img-thumb-live">
            </div>
        </div>
    </div>
    <div class="container-fluid featured-allies">
        <div class="row featured-allies-row">
            <div class="col-12">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img class="featured-ally-img" src="<?php echo constant('URL')?>public/images/allies/FMSD Blanco.png" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="featured-ally-img" src="<?php echo constant('URL')?>public/images/allies/FBD Blanco.png" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="featured-ally-img" src="https://endeavor.org.co/wp-content/uploads/2020/05/Finsocial-Blanco.png" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="featured-ally-img" src="https://endeavor.org.co/wp-content/uploads/2020/05/Uni-Norte-Blanco.png" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="featured-ally-img" src="https://endeavor.org.co/wp-content/uploads/2020/05/SAP-Blanco.png" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="featured-ally-img" src="https://endeavor.org.co/wp-content/uploads/2020/05/Eventtia-Blanco.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center pt-5 pb-4">
            <div class="col">
                <h2 class="title-red">TUS SESIONES</h2>
                <p class="pt-3">Ten presente que cada sesión tiene una hora indicada de ingreso. Una vez finalice cada mentoría regresa aquí para acceder a la siguiente.</p>
            </div>
        </div>        
        <div class="row justify-content-center">
        <?php $i = 0; foreach($this->sessions as $session ){ ?>
            <div class="col-md-4 col-sm-6 pt-1 pb-1">
                <div class="event-card h-100">
                <?php if($this->user[0]->type === 3){
                    switch($i){
                        case 0:
                            echo '<p class="event-hour">Sesión 1:<br>9:00 A.M. - 10:00 A.M.</p>';
                            break;
                        case 1:
                            echo '<p class="event-hour">Sesión 2:<br>10:10 A.M. - 11:10 A.M.</p>';
                            break;
                        case 2:
                            echo '<p class="event-hour">Sesión 3:<br>11:20 A.M. - 12:20 P.M.</p>';
                            break;
                    }
                }?>
                <p class="area-event"><?php echo $session->area; ?></p>
                <p class="name-event"><?php echo $session->name;?></p>
                <p class="name-event">Contraseña:<?php echo $session->password;?></p>
                <a class="button-event" href="<?php echo $session->link; ?>" target="_blank">Entrar</a>
                </div>
            </div>
        <?php $i++; }?>
        </div>
        <div class="row pt-5 pb-5">
            <div class="col-12 pb-4">
                <h2 class="title-green">RECOMENDACIONES IMPORTANTES</h2>
            </div>
            <div class="col">
                <ul>
                    <li>Accede desde un portátil o un equipo de escritorio para tener una mejor experiencia.</li>
                    <li>Comprueba tu conexión a internet. Tener tu equipo conectado por medio de un cable de red garantizará una mayor estabilidad de la señal.</li>
                    <li>Ten a la mano una libreta para tomar nota de cada lección. Te recomendamos también tener listas tus preguntas para los mentores.</li>
                    <li>No olvides calificar cada mentoría, aparecerá una breve encuesta apenas termine la sesión. Es la forma de conocer tu opinión y mejorar nuestros eventos.</li>
                    <li>Tendrás 10 minutos de receso entre las sesiones para tomar un respiro o ir por un café. ¡No te pierdas la siguiente mentoría!</li>
                    <li>Comparte en redes sociales los mejores consejos que recibiste de los Mentores Endeavor con el #MentorsDay. ¡Tendremos sorpresas para quienes compartan su experiencia!</li>
                </ul>
            </div>
        </div>
        <div class="row pb-4 justify-content-center">
            <div class="col-12 text-center social-networks">
                <ul class="social-media-list">
                    <li><a class="social-media-icon" href="https://endeavor.org.co/" target="_blank"><img src="<?php echo constant('URL')?>public/images/socialMedia/endeavorE.png" alt=""></a></li>
                    <li><a class="social-media-icon" href="https://www.facebook.com/endeavorcolombia/" target="_blank"><img src="<?php echo constant('URL')?>public/images/socialMedia/facebook.png" alt=""></a></li>
                    <li><a class="social-media-icon" href="https://twitter.com/EndeavorCol" target="_blank"><img src="<?php echo constant('URL')?>public/images/socialMedia/twitter.png" alt=""></a></li>
                    <li><a class="social-media-icon" href="https://www.youtube.com/channel/UCABxynec_xVkaWMtIk0c-Eg" target="_blank"><img src="<?php echo constant('URL')?>public/images/socialMedia/youtube.png" alt=""></a></li>
                    <li><a class="social-media-icon" href="https://www.linkedin.com/company/endeavor-colombia/" target="_blank"><img src="<?php echo constant('URL')?>public/images/socialMedia/linkedin.png" alt=""></a></li>
                    <li><a class="social-media-icon" href="https://www.instagram.com/endeavorcolombia/" target="_blank"><img src="<?php echo constant('URL')?>public/images/socialMedia/instagram.png" alt=""></a></li>
                </ul>
            </div>
            <div class="col-md-6">
                <p class="normal-text text-center">
                    ¿Tienes problemas? Comunícate con nosotros:     <a class="qa-link" href="https://wa.me/573134945050" target="_blank"><img class="qa-icon" src="<?php echo constant('URL')?>public/images/socialMedia/whatsapp.png" alt=""></a></p>
            </div>
        </div>
        <div class="row pb-5 justify-content-center">
            <div class="col-12 pb-5">
                <h2 class="title-red">ALIADOS DE DIFUSIÓN</h2>
            </div>
            <div class="col-12">
                <img src="<?php echo constant('URL')?>public/images/allies/Aliados difusión.png" alt="">
            </div>
        </div>
    </div>
    <footer class="text-center">
        <p class="text-center m-0">Un evento de:</p>
        <img src="<?php echo constant('URL')?>public/images/Logo Endeavor Blanco.png" alt="" class="logo-footer">
    </footer>
</section>

<script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
<script src="<?php echo constant('URL') ?>public/js/events.js"></script>
<?php require 'views/footer.php' ?>