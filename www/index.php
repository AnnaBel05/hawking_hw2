<?php

spl_autoload_register(
    function (string $className) 
    {
        require_once __DIR__ . '/../Models/' . $className . '.php';
    }
);

var_dump($_GET['route']);

$controller = new \HW_2\Controllers\MainController();
$controller->main();

?>