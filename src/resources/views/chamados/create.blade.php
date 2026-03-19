@extends('layouts.app')

@section('title', 'Novo chamado')
@section('lista_de', 'Lista de Chamados')

@section('content')
<div>
    <form method="POST" action="{{ route('chamados.store') }}">
        @csrf
        @include('chamados._form')

        <div>
            <button>Salvar</button>
            <a href="{{ route('chamados.index') }}">Voltar</a>
        </div>
    </form>
</div>
@endsection

