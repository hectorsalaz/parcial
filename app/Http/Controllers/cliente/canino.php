<?php

namespace App\Http\Controllers\cliente;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class canino extends Controller
{
    //
    public function dog(){
        $concentrado =[
            'nombre: dogshaw',
            'peso: 2kg ',
            'precio: 10000'
        ];
        $concentra =[
            'nombre: locion masculina',
            'peso: 1lt ',
            'precio: 5000'
        ];
        $concen =[
            'nombre: collar',
            'peso: 2g ',
            'precio: 20000'
        ];
       
      
            
        return view('PERROS.cachorro', ['dogy' => $concentrado], ['dog' => $concentra], );
    }
 
}
