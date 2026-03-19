@extends('layouts.app')

@section('title', 'Detalhes do chamado')
@section('lista_de', 'Lista de Chamados')

@section('content')
<div>
    <div><span>Titulo:</span> {{ $chamado->titulo }}</div>
    <div><span>Descricao:</span> {{ $chamado->descricao }}</div>
    <div><span>Prioridade:</span> {{ $chamado->prioridade }}</div>
    <div><span>Status:</span> {{ $chamado->status }}</div>
    <div><span>Data de abertura:</span> {{ optional($chamado->data_abertura)->format('d/m/Y') }}</div>
    <div><span>Servico ID:</span> {{ $chamado->servico_id }}</div>
    <div><span>Categoria:</span> {{ $chamado->categoria?->nome ?? 'Sem categoria' }}</div>
    <div><span>Tecnico:</span> {{ $chamado->tecnico?->nome ?? 'Nao atribuido' }}</div>

    <div>
        <a href="{{ route('chamados.edit', $chamado) }}">Editar</a>
        <a href="{{ route('chamados.index') }}">Voltar</a>
    </div>
</div>
@endsection
