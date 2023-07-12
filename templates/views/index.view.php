<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profesores</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>

<div class="actual">
    <div><?= $profesor_actual['nombre'] ?></div>
    <div><?= $profesor_actual['curso'] ?></div>
</div>

<?php foreach ($profesores as $profesor) {
    require 'partials/tarjeta.php';
} ?>

<p><a href="/about">About</a></p>
</body>
</html>
