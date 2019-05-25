<?php
namespace core\C;

use core\M\User as User;

class UserController 
{

    function __construct(){
        echo "constructor";
    }
    static function useFunction($functionName){
        // exit($functionName);
    
        call_user_func([new UserController,'CreateUser']);
    }
    function CreateUser(){
        $user = new User;
        $user->CreateUser();
    }
}
