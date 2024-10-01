<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cidade;

class CidadeController extends Controller
{
    public function index()
    {
        $cidades = Cidade::all();
        return view('cidades.index', compact('cidades'));
    }

    public function show($id)
    {
        $cidade = Cidade::findOrFail($id);
        return view('cidades.show', compact('cidade'));
    }
}