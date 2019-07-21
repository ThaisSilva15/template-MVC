<?php

function ehPost() {
    return $_SERVER["REQUEST_METHOD"] == "POST";
}

function mm($valor) { 
    echo "<pre>";
    print_r($valor);
    echo "</pre>";
    die();
}

?>