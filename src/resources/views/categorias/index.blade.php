@extends('layouts.app')

@section('title', 'Categorias')

@section('lista_de', 'Lista de Categorias')

@section('content')

<div>
    <a href="{{ route('categorias.create') }}">
        Nova Categoria
    </a>
</div>

<div>
    @forelse($categorias as $categoria)
    <div>
        <div>
            <div>{{ $categoria->nome }}</div>
            <div>{{ $categoria->cor }}</div>
            <div>{{ $categoria->descricao }}</div>
        </div>

        <div>
            <a href="{{ route('categorias.show', $categoria) }}">Ver</a>
            <a href="{{ route('categorias.edit', $categoria) }}">Editar</a>

            <form method="POST" action="{{ route('categorias.destroy', $categoria) }}" onsubmit="return confirm('Remover esta categoria?')">
                @csrf
                @method('DELETE')
                <button>Remover</button>
            </form>
        </div>
    </div>
    @empty
    <p>Nenhuma categoria cadastrada</p>
    @endforelse
</div>
@endsection