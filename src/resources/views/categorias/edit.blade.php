@extends('layouts.app')
@section('title', 'Editar categoria')
@section('lista_de', 'Lista de Categorias')


@section('content')
<div>
    <form method="POST" action="{{ route('categorias.update', $categoria) }}">
        @csrf
        @method('PUT')
        @include('categorias._form', ['categoria' => $categoria])
        <div>
            <button>Atualizar</button>
            <a href="{{ route('categorias.index') }}">Voltar</a>
        </div>
    </form>
</div>
@endsection