@extends('layouts.app')
@section('title', 'Nova tarefa')

@section('content')
<div>
    <form method="POST" action="{{ route('tarefas.store') }}">
        @csrf
        @include('tarefas._form')
        <div>
            <button>Salvar</button>
            <a href="{{ route('tarefas.index') }}">Voltar</a>
        </div>
    </form>
</div>
@endsection