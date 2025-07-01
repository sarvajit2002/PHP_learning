<?php
class Router {
    public static function route($url) {
        $parts = explode('/', $url);
        $controller = !empty($parts[0]) ? ucfirst($parts[0]) . 'Controller' : 'HomeController';
        $method = isset($parts[1]) ? $parts[1] : 'index';

        require_once "controllers/$controller.php";
        $controllerObj = new $controller();
        if (method_exists($controllerObj, $method)) {
            $controllerObj->$method();
        } else {
            echo "Method $method not found.";
        }
    }
}
