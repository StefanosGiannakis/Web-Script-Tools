<?php

namespace core\M;
require_once __DIR__.'/../Connection_pdo.php';

class User {

    
    function __construct(){
        
        // $this->con=\Connection_pdo::connect(); 
        
        // $sql = "INSERT INTO `users` (`id`, `username`, `email`, `password`, `created`) VALUES (NULL, 'stefan', 'stefan@gmail.com', '123123', TIMESTAMP('2019-05-30 07:21:00.000000'));
        // ";
        // var_dump("called");
        // // use exec() because no results are returned
        // $this->con->exec($sql);
    }

    function CreateUser(){

        $user_email='stefan@gmail.com';
        \Connection_pdo::connect();
        $user= \Connection_pdo::isExist($user_email);
        if(!$user)
            \Connection_pdo::insert();
        else
            exit('user already exists');
    }
    
}