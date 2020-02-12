<?php
require_once __DIR__ . '/controller.php';
require_once __DIR__ . '/view.php';

$url = (isset($_SERVER['REQUEST_URI'])) ? $_SERVER['REQUEST_URI'] :  '/';

if($url === '/') {
    $controller = new Controller();
    $view = new View();
    $controller->checklogin($view);
}
?>
