<?php require 'views/head.php'; ?>

<section class="main-event-section">
    <header class="main-header">
        <div class="logo-main-header">
            <img src="<?php echo constant('URL')?>public/images/LogoBlanco.svg" alt="Endeavor Mentors' Live">
        </div>
    </header>
    <div class="container">
        <div class="row justify-content-center pt-5 pb-5">
            <div class="col-1 text-center">
                <img class="instruction-number" src="<?php echo constant('URL')?>public/images/one.png" alt="">
            </div>
            <div class="col-9">
                <p class="normal-text">
                    ¡Acabas de entrar a nuestro Mentors´ Day Live!<br>Para aprovechar mejor esta experiencia, mira con atención el siguiente video que te explicará cómo acceder a tus sesiones.
                </p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-10">
                <img src="https://via.placeholder.com/1920x1080" alt="" class="img-thumb-live">
            </div>
        </div>
        <div class="row justify-content-center pt-5 pb-4">
            <div class="col-1 text-center">
                <img class="instruction-number" src="<?php echo constant('URL')?>public/images/two.png" alt="">
            </div>
            <div class="col-9">
                <p class="normal-text">
                    Estas son las sesiones en las que estás inscrito.<br>No olvides repasar los horarios para ingresar a la hora indicada.
                </p>
            </div>
        </div>        
        <div class="row justify-content-center">
        <?php $i = 0; foreach($this->sessions as $session ){ ?>
            <div class="col-sm-4 pt-1 pb-1">
                <div class="event-card h-100">
                <?php if($this->user[0]->type === 3){
                    switch($i){
                        case 0:
                            echo '<p class="event-hour">9:00 A.M. - 10:00 A.M.</p>';
                            break;
                        case 1:
                            echo '<p class="event-hour">10:10 A.M. - 11:10 A.M.</p>';
                            break;
                        case 2:
                            echo '<p class="event-hour">11:20 A.M. - 12:30 P.M.</p>';
                            break;
                    }
                }?>
                <p class="area-event"><?php echo $session->area; ?></p>
                <p class="name-event"><?php echo $session->name;?></p>
                <a class="button-event" href="<?php echo $session->link; ?>" target="_blank">Entrar</a>
                </div>
            </div>
        <?php $i++; }?>
        </div>
        <div class="row justify-content-center pt-4 pb-5">
            <div class="col-1 text-center">
                <img class="instruction-number" src="<?php echo constant('URL')?>public/images/three.png" alt="">
            </div>
            <div class="col-9">
                <p class="normal-text">
                    Una vez termine cada sesión, regresa aquí para ver la siguiente.
                </p>
            </div>
        </div>
        <div class="row justify-content-center pb-5">
            <div class="col-1 text-center">
                <img class="instruction-number" src="<?php echo constant('URL')?>public/images/four.png" alt="">
            </div>
            <div class="col-9">
                <p class="normal-text">
                    No olvides calificar cada mentoría, aparecerá una breve encuesta apenas termina la sesión. Es la forma de conocer tu opinión y mejorar nuestros eventos.
                </p>
            </div>
        </div>
        <div class="row justify-content-center pb-5">
            <div class="col-1 text-center">
                <img class="instruction-number" src="<?php echo constant('URL')?>public/images/five.png" alt="">
            </div>
            <div class="col-9">
                <p class="normal-text">
                    Comparte en redes sociales los mejores consejos que recibiste de los Mentores Endeavor con el #MentorsDayLive.<br>¡Tendremos sorpresas para quienes compartan su experiencia!
                </p>
            </div>
        </div>
    </div>
</section>

<?php require 'views/footer.php' ?>