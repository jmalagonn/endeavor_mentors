<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Endeavor Mentors' Day Live</title>
</head>
<body class="main-section">
    <form action="<?php echo constant('URL') ?>home/logIn" method="post">
        <label for="email">Correo electrónico</label>
        <input type="email" name="email" id="" required>
        <label for="id">CC o NIT con el que se registró</label>
        <input type="number" name="id" required>
        <button type="submit">Ingresar</button>
    </form>
</body>
</html>