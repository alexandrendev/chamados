@extends('layouts.app')
@section('title', 'Nova categoria')
@section('lista_de', 'Lista de Categorias')

@section('content')
<div>
    <form method="POST" action="{{ route('categorias.store') }}">
        @csrf
        @include('categorias._form')
        <div>
            <button>Salvar</button>
            <a href="{{ route('categorias.index') }}">Voltar</a>
        </div>
    </form>
</div>
@endsection