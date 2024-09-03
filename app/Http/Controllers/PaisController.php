<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaisController extends Controller
{
    public function index(){
        $paises = [
            ['nome' => 'Brasil', 'capital' => 'Brasília'],
            ['nome' => 'Argentina', 'capital' => 'Buenos Aires'],
            ['nome' => 'Chile', 'capital' => 'Santiago'],
        ];

        //retornar a view
    }

    public function show($nome){
        
        switch($nome){
            case 'Brasil':
                echo 'Brasilia';
                break;
            case 'Argentina':
                echo 'Buenos Aires';
                break;
            case 'Chile':
                echo 'Santiago';
                break;
        }
        //retornar a view
    }
}
