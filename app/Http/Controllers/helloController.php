<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class helloController extends Controller
{
public function index(Request $Request){
    
    return view("Hello",[
        'nom'=>$Request->nom ,
        'prenom'=>$Request->prenom ,
    ]);
}
}
