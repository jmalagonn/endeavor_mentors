<?php require 'views/head.php'; ?>

<div class="container-fluid container-home">
    <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6">
            <img src="<?php echo constant('URL')?>public/images/LogoBlanco.svg" alt="Endeavor Mentors Live" class="logo-home">
        </div>
    </div>
    <div class="row pt-3 pb-2">
        <div class="col text-center">
            <h1 class="welcome-title">¡LLEGÓ EL DÍA!</h1>
            <p class="description-text-home pt-1">
            Inicia sesión con el email y el número de identificación o NIT con el que realizaste el registro.<br>(Si te registraste con un NIT, ingresa solo los 9 dígitos sin código de verificación).
            </p>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-4 col-md-8">
            <form action="<?php echo constant('URL') ?>home/logIn" method="post" class="form-group">
                <input type="email" name="email" id="" required class="form-control" placeholder="Email">
                <input type="number" name="id" required class="form-control" placeholder="CC o NIT">
                <div class="button-block">
                    <button type="submit" class="mt-3 login-button">Ingresar</button>
                </div>
            </form>
            <p class="normal-p m-0 red">
                <?php echo $this->msg ?>
            </p>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col text-center">
            <p class="promo-text">
                No olvides tener
            </p>
            <img src="<?php echo constant('URL')?>/public/images/icons_home.png" alt="" class="icons-home">
        </div>
    </div>
</div>


<?php require 'views/footer.php'; ?>