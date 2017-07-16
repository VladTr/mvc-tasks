<?php
class Route {
    static function startRoute(){
        $route = explode('/', $_SERVER['REQUEST_URI']);
        $controller = 'Home';
        $action = 'index';
        $param = '';
        $page = 1;
        if(!empty($route[1])){
            $controller = $route[1];
        }
        if(!empty($route[2])){
            $action = $route[2];
        }
        if(!empty($route[3])){
            $param = $route[3];
        }
        if(!empty($route[4])){
            $page = $route[4];
        }
        $controller = $controller.'_controller';
        $action = $action.'_action';
        $controllerFile = strtolower($controller).'.php';
        if (file_exists('app/controllers/'.$controllerFile)){
            include 'app/controllers/'.$controllerFile;
            $controllerName = ucfirst($controller);
            $controllerInstance = new $controllerName;
            if (method_exists($controllerInstance, $action)){
                $controllerInstance->$action($param, $page);
            } else {
                Route::errorPage();
            }
        } else {
            Route::errorPage();
        }




    }
    static function errorPage(){
        header("HTTP/1.0 404 Not Found");
        exit('страницы не существует');
    }
}