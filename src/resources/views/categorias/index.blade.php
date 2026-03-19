@extends('layouts.app')

@section('title', 'Categorias')

@section('lista_de', 'Lista de Categorias')

@section('content')
<div class="mb-4 flex items-center justify-between">
    <h2 class="text-lg font-semibold">Categorias cadastradas</h2>
    <a class="rounded bg-blue-600 px-4 py-2 text-sm font-medium text-white hover:bg-blue-700" href="{{ route('categorias.create') }}">
        Nova categoria
    </a>
</div>

<div class="overflow-hidden rounded border border-gray-200 bg-white">
    <table class="min-w-full text-sm">
        <thead class="bg-gray-100 text-left text-gray-700">
            <tr>
                <th class="px-4 py-3 font-medium">ID</th>
                <th class="px-4 py-3 font-medium">Nome</th>
                <th class="px-4 py-3 font-medium">SLA (horas)</th>
                <th class="px-4 py-3 font-medium">Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse($categorias as $categoria)
            <tr class="border-t border-gray-200">
                <td class="px-4 py-3">{{ $categoria->id }}</td>
                <td class="px-4 py-3">{{ $categoria->nome }}</td>
                <td class="px-4 py-3">{{ $categoria->sla_horas }}</td>
                <td class="px-4 py-3">
                    <div class="flex flex-wrap items-center gap-2">
                        <a class="rounded border border-gray-300 px-3 py-1.5 hover:bg-gray-100" href="{{ route('categorias.show', $categoria) }}">Ver</a>
                        <a class="rounded border border-gray-300 px-3 py-1.5 hover:bg-gray-100" href="{{ route('categorias.edit', $categoria) }}">Editar</a>
                        <form method="POST" action="{{ route('categorias.destroy', $categoria) }}" onsubmit="return confirm('Remover esta categoria?')">
                            @csrf
                            @method('DELETE')
                            <button class="rounded border border-red-300 px-3 py-1.5 text-red-700 hover:bg-red-50">Remover</button>
                        </form>
                    </div>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="4" class="px-4 py-5 text-center text-gray-600">Nenhuma categoria cadastrada.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection