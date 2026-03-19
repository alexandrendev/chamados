@extends('layouts.app')

@section('title', 'Home')
@section('lista_de', 'Painel de Navegacao')

@section('content')
<div class="space-y-6">
    <div>
        <h2 class="text-lg font-semibold text-slate-900">Atalhos rapidos</h2>
        <p class="mt-1 text-sm text-slate-500">Escolha uma entidade para listar registros ou criar um novo cadastro.</p>
    </div>

    <div class="grid grid-cols-1 gap-4 md:grid-cols-3">
        <article class="rounded-lg border border-slate-200 bg-white p-4 shadow-sm">
            <h3 class="text-base font-semibold text-slate-900">Chamados</h3>
            <p class="mt-1 text-sm text-slate-500">Gerencie os tickets de atendimento, status e prioridade.</p>
            <div class="mt-4 flex flex-wrap gap-2">
                <a href="{{ route('chamados.index') }}" class="inline-flex items-center rounded-md border border-slate-300 px-3 py-1.5 text-sm font-medium text-slate-700 hover:bg-slate-50">Ver chamados</a>
                <a href="{{ route('chamados.create') }}" class="inline-flex items-center rounded-md bg-slate-900 px-3 py-1.5 text-sm font-medium text-white hover:bg-slate-700">Novo chamado</a>
            </div>
        </article>

        <article class="rounded-lg border border-slate-200 bg-white p-4 shadow-sm">
            <h3 class="text-base font-semibold text-slate-900">Categorias</h3>
            <p class="mt-1 text-sm text-slate-500">Organize os chamados por tipo e mantenha o SLA por categoria.</p>
            <div class="mt-4 flex flex-wrap gap-2">
                <a href="{{ route('categorias.index') }}" class="inline-flex items-center rounded-md border border-slate-300 px-3 py-1.5 text-sm font-medium text-slate-700 hover:bg-slate-50">Ver categorias</a>
                <a href="{{ route('categorias.create') }}" class="inline-flex items-center rounded-md bg-slate-900 px-3 py-1.5 text-sm font-medium text-white hover:bg-slate-700">Nova categoria</a>
            </div>
        </article>

        <article class="rounded-lg border border-slate-200 bg-white p-4 shadow-sm">
            <h3 class="text-base font-semibold text-slate-900">Tecnicos</h3>
            <p class="mt-1 text-sm text-slate-500">Cadastre tecnicos e controle a atribuicao de chamados.</p>
            <div class="mt-4 flex flex-wrap gap-2">
                <a href="{{ route('tecnicos.index') }}" class="inline-flex items-center rounded-md border border-slate-300 px-3 py-1.5 text-sm font-medium text-slate-700 hover:bg-slate-50">Ver tecnicos</a>
                <a href="{{ route('tecnicos.create') }}" class="inline-flex items-center rounded-md bg-slate-900 px-3 py-1.5 text-sm font-medium text-white hover:bg-slate-700">Novo tecnico</a>
            </div>
        </article>
    </div>
</div>
@endsection
