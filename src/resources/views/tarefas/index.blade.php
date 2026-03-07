@extends('layouts.app')

@section('title', 'Tarefas')

@section('content')

<div>
    <a href="{{ route('tarefas.create') }}">
        Nova tarefa
    </a>
</div>

<div>
    @forelse($tarefas as $tarefa)
    <div>
        <div>
            <div>{{ $tarefa->titulo }}</div>
            <div>{{ $tarefa->descricao }}</div>
            <div>{{ $tarefa->status }}</div>
        </div>

        <div>
            <a href="{{ route('tarefas.show', $tarefa) }}">Ver</a>
            <a href="{{ route('tarefas.edit', $tarefa) }}">Editar</a>

            <form method="POST" action="{{ route('tarefas.destroy', $tarefa) }}" onsubmit="return confirm('Remover esta tarefa?')">
                @csrf
                @method('DELETE')
                <button>Remover</button>
            </form>
        </div>
    </div>
    @empty
    <p>Nenhuma tarefa cadastrada</p>
    @endforelse
</div>
@endsection