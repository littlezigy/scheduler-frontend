<?php
require_once __DIR__ . '/controller.php';
require_once __DIR__ . '/view.php';
require_once __DIR__ . '/model.php';

$url = (isset($_SERVER['REQUEST_URI'])) ? $_SERVER['REQUEST_URI'] :  '/';

if(!isset($page))  $page = new Page();
if(!isset($model))  $model = new Model();
if(!isset($controller))  $controller = new Controller();

switch($url) {
    case '/':
        $controller->login($model);
        $page->homepage($model);
        break;
    case '/home':
        $page->static('home');
        break;
    case '/dashboard':
        $page->app();
        break;
    case '/login':
        if(isset($_POST['username'])) $controller->login($model);
        $page->login($model);
        break;
    default:
        $page->static();
        break;
}
?>
