<?php

function debug_var($variable) {
    echo "<pre>";

    var_dump($variable);

    echo "</pre>";

    die();
}

function sessionIs($current_page) {       
    if ($_SESSION['current'] == $current_page){
        return true;
    }
    return false;
}

function urlIs($url_comparacion) {
    $url = $_SERVER["REQUEST_URI"];
   
    $path = parse_url($url)["path"];
    
    if ($path == $url_comparacion){
        return true;
    }
    return false;
}