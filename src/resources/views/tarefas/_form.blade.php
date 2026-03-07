@php
$statusOptions = ['pendente' => 'Pendente', 'fazendo' => 'Fazendo', 'finalizada' => 'Finalizada'];
@endphp

<div>
    <div>
        <label>Título</label>
        <input name="titulo" value="{{ old('titulo', $tarefa->titulo ?? '') }}" required>
        @error('titulo') <div>{{ $message }}</div> @enderror
    </div>

    <div>
        <label>Descrição</label>
        <textarea name="descricao" rows="4">{{ old('descricao', $tarefa->descricao ?? '') }}</textarea>
        @error('descricao') <div>{{ $message }}</div> @enderror
    </div>

    <div>
        <label>Status</label>
        <select name="status" required>
            @foreach($statusOptions as $valor => $label)
            <option value="{{ $valor }}"
                @selected(old('status', $tarefa->status ?? 'pendente') === $valor)>
                {{ $label }}
            </option>
            @endforeach
        </select>
        @error('status') <div>{{ $message }}</div> @enderror
    </div>
</div>