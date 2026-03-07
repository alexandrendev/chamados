@extends('layouts.app')
@section('title', 'Detalhes')
@section('lista_de', 'Lista de Categorias')

@section('content')
<div>
    <div><span>Nome:</span> {{ $categoria->nome }}</div>
    <div><span>Cor:</span> {{ $categoria->cor }}</div>
    <div><span>Descrição:</span> {{ $categoria->descricao }}</div>

    <div>
        <a href="{{ route('categorias.edit', $categoria) }}">Editar</a>
        <a href="{{ route('categorias.index') }}">Voltar</a>
    </div>
</div>
@endsection