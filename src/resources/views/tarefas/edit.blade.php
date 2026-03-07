@extends('layouts.app')
@section('title', 'Editar tarefa')

@section('content')
<div>
    <form method="POST" action="{{ route('tarefas.update', $tarefa) }}">
        @csrf
        @method('PUT')
        @include('tarefas._form', ['tarefa' => $tarefa])
        <div>
            <button>Atualizar</button>
            <a href="{{ route('tarefas.index') }}">Voltar</a>
        </div>
    </form>
</div>
@endsection