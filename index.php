<?php
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
require_once(__DIR__ . DIRECTORY_SEPARATOR . 'Autoload.php');
spl_autoload_register(['Autoload', 'loader']);
$asus = new application\Asus('I3', 4000, 512, 512, 'ONO');
$asus->start();
try {
    $asus->printParameters();
} catch (Exception $exception) {
    echo "<br>Опять это говно - ";
    echo $exception->getMessage();
}



