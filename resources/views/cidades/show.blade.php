@extends('layouts.app')

@section('content')
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="bg-white p-8 rounded shadow-md">
            <h1 class="text-center text-2xl font-bold mb-4">{{ $cidade->nome }}</h1>
            <p><strong>Estado:</strong> {{ $cidade->estado }}</p>
            <p><strong>População:</strong> {{ $cidade->populacao }}</p>
            <p><strong>Área:</strong> {{ $cidade->area }} km²</p>
            <p><strong>País:</strong> {{ $cidade->pais }}</p>
            <a href="{{ route('cidades.index') }}" class="text-blue-500 hover:underline">Voltar para a lista</a>
        </div>
    </div>
@endsection