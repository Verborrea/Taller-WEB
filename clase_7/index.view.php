<!DOCTYPE html>
<html lang="es-PE">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taller WEB</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 0;
            display: grid;
            place-items: center;
            height: 100vh;
        }

        .red {
            color: red;
        }
    </style>
</head>
<body>
    <h1>Lista de profesores:</h1>

    <form action="saludo.php" method=get>
        <input type="text" name="nombre"
         placeholder="Ingresa tu nombre">
        <input type="submit" value="Saludar">
    </form>

    <ul>
        <?php foreach ($mis_profes as $profe): ?>
            <li>
                <div>
                    <div><?= $profe["nombre"] ?></div>
                    <div><?= $profe["carrera"] ?></div>
                </div>
                <a class="red" href="<?= $profe["enviarCorreo"] ?>">
                    Mandar correo
                </a>
            </li>
        <?php endforeach ?>
    </ul>
</body>
</html>