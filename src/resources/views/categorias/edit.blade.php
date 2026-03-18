@extends('layouts.app')
@section('title', 'Editar categoria')
@section('lista_de', 'Lista de Categorias')


@section('content')
<div class="mx-auto max-w-2xl rounded border border-gray-200 bg-white p-5">
    <h2 class="mb-4 text-lg font-semibold">Editar categoria</h2>
    <form method="POST" action="{{ route('categorias.update', $categoria) }}">
        @csrf
        @method('PUT')
        @include('categorias._form', ['categoria' => $categoria])
        <div class="mt-5 flex items-center gap-2">
            <button class="rounded bg-blue-600 px-4 py-2 text-sm font-medium text-white hover:bg-blue-700">Atualizar</button>
            <a class="rounded border border-gray-300 px-4 py-2 text-sm hover:bg-gray-100" href="{{ route('categorias.index') }}">Voltar</a>
        </div>
    </form>
</div>
@endsection