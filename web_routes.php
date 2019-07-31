<?php

use core\Route as Route;
use core\C\PageViewController as PageViewController;
use core\C\UserController as UserController;
use core\C\StatsController as StatsController;

// Route::set('store_file','get',function(){
//     PageViewController::CreateView('header');
// });
// Route::set('welcome','get',function(){
//     echo "some welcome";
// });

// Create User
// Route::set('create_user','post',function(){
//     UserController::useFunction('CreateUser');
// });

Route::set('stats','get',function(){
    PageViewController::CreateView('header');
});


Route::set('user_id','post',function(){
    $some= StatsController::getUserID();

    echo json_encode($some);
    // return StatsController::getUserID();
});

