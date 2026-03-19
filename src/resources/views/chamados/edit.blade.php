@extends('layouts.app')

@section('title', 'Editar chamado')
@section('lista_de', 'Lista de Chamados')

@section('content')
<div>
    <form method="POST" action="{{ route('chamados.update', $chamado) }}">
        @csrf
        @method('PUT')
        @include('chamados._form', ['chamado' => $chamado])

        <div>
            <button>Atualizar</button>
            <a href="{{ route('chamados.index') }}">Voltar</a>
        </div>
    </form>
</div>
@endsection
