<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PainelController extends Controller
{
    public function mostrar_dashboard(){
        return view("painel");
    }
    
    

}
