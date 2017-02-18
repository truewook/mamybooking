<?php

if(!function_exists('getControllerName')){
    function getControllerName(){
        $routeArray = app('request')->route()->getAction();
        $controllerAction = class_basename($routeArray['controller']);
        list($controller, $action) = explode('@', $controllerAction);

        return $controller;
    }
}