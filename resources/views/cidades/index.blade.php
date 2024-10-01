@extends('layouts.app')

@section('content')
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="bg-white p-8 rounded shadow-md">
            <h1 class="text-center text-2xl font-bold mb-4">Cidades Brasileiras</h1>
            <ul class="list-disc pl-5">
                @foreach($cidades as $cidade)
                    <li class="mb-2">
                        <a href="{{ route('cidades.show', $cidade->id) }}" class="text-blue-500 hover:underline">
                            {{ $cidade->nome }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection