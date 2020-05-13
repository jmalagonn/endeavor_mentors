<?php
require 'views/head.php';
?>

<h2>Sesiones</h2>
<?php foreach($this->sessions as $session ){ ?>
    
<p>Area: <?php echo $session->area; ?></p>
<p>Nombre: <?php echo $session->name; }?></p>

</body>
</html>