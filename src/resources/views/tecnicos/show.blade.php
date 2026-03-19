@extends('layouts.app')

@section('title', 'Detalhes do tecnico')

@section('content')
<div class="mx-auto max-w-3xl">
    <div class="mb-6 flex items-center justify-between">
        <h1 class="text-2xl font-semibold text-slate-900">Detalhes do tecnico</h1>
        <a href="{{ route('tecnicos.edit', $tecnico) }}" class="inline-flex items-center rounded-md bg-slate-900 px-4 py-2 text-sm font-medium text-white hover:bg-slate-700">Editar</a>
    </div>

    <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm">
        <dl class="grid grid-cols-1 gap-4 sm:grid-cols-2">
            <div>
                <dt class="text-xs font-semibold uppercase tracking-wide text-slate-500">Nome</dt>
                <dd class="mt-1 text-sm text-slate-900">{{ $tecnico->nome }}</dd>
            </div>
            <div>
                <dt class="text-xs font-semibold uppercase tracking-wide text-slate-500">Email</dt>
                <dd class="mt-1 text-sm text-slate-900">{{ $tecnico->email }}</dd>
            </div>
            <div>
                <dt class="text-xs font-semibold uppercase tracking-wide text-slate-500">Telefone</dt>
                <dd class="mt-1 text-sm text-slate-900">{{ $tecnico->telefone ?? '-' }}</dd>
            </div>
            <div>
                <dt class="text-xs font-semibold uppercase tracking-wide text-slate-500">Especialidade</dt>
                <dd class="mt-1 text-sm text-slate-900">{{ $tecnico->especialidade ?? '-' }}</dd>
            </div>
            <div>
                <dt class="text-xs font-semibold uppercase tracking-wide text-slate-500">Ativo</dt>
                <dd class="mt-1 text-sm text-slate-900">{{ $tecnico->ativo ? 'Sim' : 'Nao' }}</dd>
            </div>
        </dl>

        <div class="mt-6">
            <a href="{{ route('tecnicos.index') }}" class="inline-flex items-center rounded-md border border-slate-300 px-4 py-2 text-sm font-medium text-slate-700 hover:bg-slate-50">Voltar</a>
        </div>
    </div>
</div>
@endsection
