<?php
namespace core;

class Route{

    public static $validRoutes=[];
    public static $closure;
    public static function set($route,$method,$function){
        self::$validRoutes[$route]=array(
            'method'=>$method,
            'function'=>$function
        );
        self::$closure=$function;
        if($_GET['url']==$route)
            self::$closure->__invoke();
            // self::$validRoutes[$route]['function']();
    }

    // public static function post($route,$function){
    //     self::$validRoutes[]=$route;
    //     if($_GET['url']==$route)
    //         $function->__invoke();
    // }
}