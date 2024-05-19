<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "<h1> Homepage </h1> <a href='/about'> About Us </a>"; 
});

//about us route
Route::get('/about', function (){
    return  "<h1> About Page </h1> <a href='/'> Back to home page </a>"; 
});