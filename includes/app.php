<?php
    require 'funciones.php';
    require 'config/database.php';
    Debuguear("Hola");
    require __DIR__ . '/../vendor/autoload.php';
    $db = conectarDB();
    use Model\ActiveRecord;
    ActiveRecord::setDB($db);
?>