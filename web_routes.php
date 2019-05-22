<?php

use core\Route as Route;
use core\C\PageViewController as PageViewController;

Route::set('store_file',function(){
    PageViewController::CreateView('header');
});
Route::set('welcome',function(){
    echo "some welcome";
});