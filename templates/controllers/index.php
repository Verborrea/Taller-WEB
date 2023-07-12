<?php

$profesor_actual = [
    'id' => 1,
    'nombre' => "Profe 1", 
    'curso' => "Mate", 
];

$profesores = [
    [
        'id' => 1,
        'nombre' => "Profe 1", 
        'curso' => "Mate", 
    ],
    [
        'id' => 2,
        'nombre' => "Profe 2", 
        'curso' => "Comu", 
    ],
    [
        'id' => 3,
        'nombre' => "Profe 3", 
        'curso' => "Otro curso", 
    ],
    [
        'id' => 4,
        'nombre' => "Profe 4", 
        'curso' => "Y otro más", 
    ]
];

if (array_key_exists( "prof_id", $_GET)) {
    
    // Reemplazar por una lógica de select en la BD
    $profesor_actual = array_values(array_filter($profesores, function($profe) {
        return strval($profe['id']) === $_GET['prof_id'];
    }))[0];
}

require 'views/index.view.php';