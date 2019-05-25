<?php
namespace core;

class Route{

    public static $validRoutes=[];

    public static function set($route,$method,$function){
        self::$validRoutes[$route]=$method;
        // array_push(self::$validRoutes[$route],);
        if($_GET['url']==$route)
            $function->__invoke();
    }

    // public static function post($route,$function){
    //     self::$validRoutes[]=$route;
    //     if($_GET['url']==$route)
    //         $function->__invoke();
    // }
}