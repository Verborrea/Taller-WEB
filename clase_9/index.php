<?php

require "functions.php";
require "Database.php";

$db = new Database;

$usuario = $db->query('select * from profesores');

foreach ($profes as $profesor) {
    echo "<li> {$profesor['nombre']} </li>";
}

