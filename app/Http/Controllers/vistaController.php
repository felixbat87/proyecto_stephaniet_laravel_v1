<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class vistaController extends Controller
{
    //

    public function usuario(){
    return view ('usuario');
    }

    public function admin(){
     return view ('admin');
    }

    
}
