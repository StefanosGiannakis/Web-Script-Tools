<?php
namespace core\C;

class Controller{

    public static function CreateView($param){
        
        // require_once("app/V/parent.view.php");
        require_once("app/V/$param.php");
    }
}