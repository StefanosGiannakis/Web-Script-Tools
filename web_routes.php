<?php

use core\Route as Route;
use core\C\PageViewController as PageViewController;
use core\C\UserController as UserController;

Route::set('store_file','get',function(){
    PageViewController::CreateView('header');
});
Route::set('welcome','get',function(){
    echo "some welcome";
});

// Create User
Route::set('create_user','post',function(){
    UserController::useFunction('CreateUser');
});

Route::set('stats','get',function(){
    PageViewController::CreateView('header');
});
