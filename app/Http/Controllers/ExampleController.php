<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    // public function homePage() {
    //  return   "<h1> Homepage </h1> <a href='/about'> About Us </a>"; 
    // }


    // public function aboutPage() {
    //     return     "<h1> Homepage </h1> <a href='/about'> About Us </a>"; 
    // }


    //returning blade template
public function homePage() {

    //imagine we loaded data from the database

    $ourName = "Brandon";
    //to var name assigning ourName var
     return  view("homePage", ['name' => $ourName, "catname"=> "MeowsALot"]);
    }


    public function aboutPage() {
        return     "<h1> Homepage </h1> <a href='/about'> About Us </a>"; 
    }


    
}
