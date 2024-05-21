<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;

// old way to use
// Route::get('/', function () {
//     return "<h1> Homepage </h1> <a href='/about'> About Us </a>"; 
// });

// //about us route, example of adding controller
// Route::get('/about', function (){
//     return  "<h1> About Page </h1> <a href='/'> Back to home page </a>"; 
// });


//new way to use


Route::get('/', [ExampleController::class, "homePage"]);

Route::get('/about', [ExampleController::class, "aboutPage"]);

Route::post("/register", [UserController::class, "register"] );