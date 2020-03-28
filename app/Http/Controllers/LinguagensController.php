<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request; // Esta é a classe que representa uma requisição HTTP no Laravel.
use App\Http\Controllers\varname;

class LinguagensController extends Controller
{

    public function index(Request $request){
        /*
        echo $request->url();
        exit();
        */

        $linguagens = ["JavaScript",
                    "PHP",
                    "C#",
                    "Ruby"];
        
        return view('linguagens.index', compact('linguagens'));
    }

    public function create(){
        return view('linguagens.create');
    }

}