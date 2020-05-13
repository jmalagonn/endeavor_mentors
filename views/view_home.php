<?php
require 'views/head.php';
?>
    <form action="<?php echo constant('URL') ?>home/logIn" method="post">
        <label for="email">Correo electrónico</label>
        <input type="email" name="email" id="" required>
        <label for="id">CC o NIT con el que se registró</label>
        <input type="number" name="id" required>
        <button type="submit">Ingresar</button>
    </form>
    <?php echo $this->msg ?>
</body>
</html>