<?php

namespace App\Http\Controllers\cliente;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class felino extends Controller
{
    //
    public function felix(){
        $concentrado =[
            'nombre: catshaw',
            'peso: 2kg ',
            'precio: 10000'
        ];
        $concentra =[
            'nombre: locion felina',
            'peso: 1lt ',
            'precio: 5000'
        ];
      
            
        return view('Gatos.gatitos', ['dogy' => $concentrado], ['dog' => $concentra], );
    }
}
