@extends('layouts.app')
@section('title', 'Detalhes')
@section('lista_de', 'Lista de Categorias')

@section('content')
<div class="mx-auto max-w-2xl rounded border border-gray-200 bg-white p-5">
    <h2 class="mb-4 text-lg font-semibold">Detalhes da categoria</h2>

    <div class="space-y-2 text-sm">
        <div><span class="font-medium">ID:</span> {{ $categoria->id }}</div>
        <div><span class="font-medium">Nome:</span> {{ $categoria->nome }}</div>
        <div><span class="font-medium">SLA (horas):</span> {{ $categoria->sla_horas }}</div>
    </div>

    <div class="mt-5 flex items-center gap-2">
        <a class="rounded bg-blue-600 px-4 py-2 text-sm font-medium text-white hover:bg-blue-700" href="{{ route('categorias.edit', $categoria) }}">Editar</a>
        <a class="rounded border border-gray-300 px-4 py-2 text-sm hover:bg-gray-100" href="{{ route('categorias.index') }}">Voltar</a>
    </div>
</div>
@endsection