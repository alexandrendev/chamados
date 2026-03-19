@extends('layouts.app')

@section('title', 'Novo tecnico')

@section('content')
<div class="mx-auto max-w-3xl">
    <div class="mb-6">
        <h1 class="text-2xl font-semibold text-slate-900">Novo tecnico</h1>
        <p class="mt-1 text-sm text-slate-600">Preencha os dados para cadastrar um tecnico.</p>
    </div>

    <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm">
        <form action="{{ route('tecnicos.store') }}" method="POST" class="space-y-4">
            @csrf
            @include('tecnicos._form')
        </form>
    </div>
</div>
@endsection
