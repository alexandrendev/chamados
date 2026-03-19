@extends('layouts.app')

@section('title', 'Editar tecnico')

@section('content')
<div class="mx-auto max-w-3xl">
    <div class="mb-6">
        <h1 class="text-2xl font-semibold text-slate-900">Editar tecnico</h1>
        <p class="mt-1 text-sm text-slate-600">Atualize os dados do tecnico.</p>
    </div>

    <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm">
        <form action="{{ route('tecnicos.update', $tecnico) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')
            @include('tecnicos._form', ['tecnico' => $tecnico])
        </form>
    </div>
</div>
@endsection
