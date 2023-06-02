<?php 

$profesores = [
    [
        "nombre" => "Rensso Mora",
        "telefono" => "987 654 321",
        "carrera" => "CCOMP",
        "horario_salida" => 8,
        "enviarCorreo" => "https://www.google.com"
    ],
    [
        "nombre" => "Julio Santisteban",
        "telefono" => "124 542 233",
        "carrera" => "CCOMP",
        "horario_salida" => 9,
        "enviarCorreo" => "https://www.google.com"
    ],
    [
        "nombre" => "Manuel Loaiza",
        "telefono" => "432 532 643",
        "carrera" => "IET",
        "horario_salida" => 10,
        "enviarCorreo" => "https://www.google.com"
    ],
];

$mis_profes = array_filter($profesores, function($profe) {
    return $profe["horario_salida"] < 10;
});

require "index.view.php";