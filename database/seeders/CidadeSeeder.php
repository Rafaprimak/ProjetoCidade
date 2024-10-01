<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cidade;

class CidadeSeeder extends Seeder
{
    public function run()
    {
        Cidade::create([
            'nome' => 'São Paulo',
            'estado' => 'SP',
            'populacao' => 12300000,
            'area' => 1521.11,
            'pais' => 'Brasil'
        ]);

        Cidade::create([
            'nome' => 'Rio de Janeiro',
            'estado' => 'RJ',
            'populacao' => 6748000,
            'area' => 1182.3,
            'pais' => 'Brasil'
        ]);

        // Adicione mais cidades conforme necessário
    }
}