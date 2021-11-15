<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index (){
        $nome = "Rafael";
        $idade = 21;
        $arr = [10,20,30,40,50]; 
        $arrNomes = ["Rafael - 2", "Lili", "Vivi", "Marilene", "Cassiane "];
        
        return view('welcome', 
            ['nome' => $nome, 
             'idade' => $idade,
             'arr' => $arr,
             'arrNomes' => $arrNomes
            ]);
            
    }

    public function create(){
        return view ('events.create');
    }
}
