@extends('layouts.app')

@section('title', 'Tecnicos')

@section('content')
<div class="mx-auto max-w-6xl">
    <div class="mb-6 flex items-center justify-between">
        <h1 class="text-2xl font-semibold text-slate-900">Tecnicos</h1>
        <a href="{{ route('tecnicos.create') }}" class="inline-flex items-center rounded-md bg-slate-900 px-4 py-2 text-sm font-medium text-white hover:bg-slate-700">Novo tecnico</a>
    </div>

    @if (session('ok'))
        <div class="mb-4 rounded-md border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm text-emerald-700">
            {{ session('ok') }}
        </div>
    @endif

    <div class="overflow-hidden rounded-xl border border-slate-200 bg-white shadow-sm">
        <table class="min-w-full divide-y divide-slate-200">
            <thead class="bg-slate-50">
                <tr>
                    <th class="px-4 py-3 text-left text-xs font-semibold uppercase tracking-wide text-slate-500">Nome</th>
                    <th class="px-4 py-3 text-left text-xs font-semibold uppercase tracking-wide text-slate-500">Email</th>
                    <th class="px-4 py-3 text-left text-xs font-semibold uppercase tracking-wide text-slate-500">Especialidade</th>
                    <th class="px-4 py-3 text-left text-xs font-semibold uppercase tracking-wide text-slate-500">Ativo</th>
                    <th class="px-4 py-3 text-right text-xs font-semibold uppercase tracking-wide text-slate-500">Acoes</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                @forelse ($tecnicos as $tecnico)
                    <tr>
                        <td class="px-4 py-3 text-sm text-slate-800">{{ $tecnico->nome }}</td>
                        <td class="px-4 py-3 text-sm text-slate-800">{{ $tecnico->email }}</td>
                        <td class="px-4 py-3 text-sm text-slate-700">{{ $tecnico->especialidade ?? '-' }}</td>
                        <td class="px-4 py-3 text-sm text-slate-700">{{ $tecnico->ativo ? 'Sim' : 'Nao' }}</td>
                        <td class="px-4 py-3 text-right text-sm">
                            <a href="{{ route('tecnicos.show', $tecnico) }}" class="text-slate-700 hover:text-slate-900">Ver</a>
                            <a href="{{ route('tecnicos.edit', $tecnico) }}" class="ml-3 text-blue-600 hover:text-blue-700">Editar</a>
                            <form action="{{ route('tecnicos.destroy', $tecnico) }}" method="POST" class="ml-3 inline" onsubmit="return confirm('Deseja remover este tecnico?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-rose-600 hover:text-rose-700">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-4 py-8 text-center text-sm text-slate-500">Nenhum tecnico cadastrado.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
