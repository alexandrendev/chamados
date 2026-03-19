@extends('layouts.app')

@section('title', 'Chamados')
@section('lista_de', 'Lista de Chamados')

@section('content')
<div class="mb-6 flex items-center justify-between gap-3">
    <p class="text-sm text-slate-500">Acompanhe e gerencie os chamados cadastrados.</p>
    <a
        href="{{ route('chamados.create') }}"
        class="inline-flex items-center rounded-md bg-slate-900 px-4 py-2 text-sm font-medium text-white transition hover:bg-slate-700"
    >
        Novo chamado
    </a>
</div>

<div class="space-y-4">
    @forelse($chamados as $chamado)
        <div class="rounded-lg border border-slate-200 p-4">
            <div class="mb-3 flex flex-wrap items-center justify-between gap-2">
                <h3 class="text-base font-semibold text-slate-900">{{ $chamado->titulo }}</h3>
                <span class="rounded-full bg-slate-100 px-3 py-1 text-xs font-medium text-slate-700">
                    {{ optional($chamado->data_abertura)->format('d/m/Y') }}
                </span>
            </div>

            <div class="mb-4 flex flex-wrap gap-2 text-xs">
                <span class="rounded-full bg-sky-100 px-3 py-1 font-medium text-sky-700">Prioridade: {{ $chamado->prioridade }}</span>
                <span class="rounded-full bg-emerald-100 px-3 py-1 font-medium text-emerald-700">Status: {{ $chamado->status }}</span>
                <span class="rounded-full bg-amber-100 px-3 py-1 font-medium text-amber-700">Tecnico: {{ $chamado->tecnico?->nome ?? 'Nao atribuido' }}</span>
            </div>

            <div class="flex flex-wrap items-center gap-2">
                <a href="{{ route('chamados.show', $chamado) }}" class="inline-flex rounded-md border border-slate-300 px-3 py-1.5 text-xs font-medium text-slate-700 transition hover:bg-slate-100">Ver</a>
                <a href="{{ route('chamados.edit', $chamado) }}" class="inline-flex rounded-md border border-slate-300 px-3 py-1.5 text-xs font-medium text-slate-700 transition hover:bg-slate-100">Editar</a>

                <form method="POST" action="{{ route('chamados.destroy', $chamado) }}" onsubmit="return confirm('Remover este chamado?')" class="inline-flex">
                    @csrf
                    @method('DELETE')
                    <button class="inline-flex rounded-md border border-red-300 px-3 py-1.5 text-xs font-medium text-red-700 transition hover:bg-red-50">Remover</button>
                </form>
            </div>
        </div>
    @empty
        <p class="rounded-lg border border-dashed border-slate-300 p-6 text-center text-sm text-slate-500">Nenhum chamado cadastrado.</p>
    @endforelse
</div>
@endsection
