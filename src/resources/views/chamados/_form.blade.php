@php
    $prioridades = [
        'baixa' => 'Baixa',
        'media' => 'Media',
        'alta' => 'Alta',
    ];

    $statusOptions = [
        'aberto' => 'Aberto',
        'em_atendimento' => 'Em atendimento',
        'resolvido' => 'Resolvido',
        'fechado' => 'Fechado',
    ];
@endphp

<div class="grid grid-cols-1 gap-5 md:grid-cols-2">
    <div class="md:col-span-2">
        <label class="mb-1 block text-sm font-medium text-slate-700">Titulo</label>
        <input
            name="titulo"
            value="{{ old('titulo', $chamado->titulo ?? '') }}"
            required
            class="w-full rounded-md border border-slate-300 px-3 py-2 text-sm outline-none ring-slate-300 transition focus:border-slate-500 focus:ring"
        >
        @error('titulo') <div class="mt-1 text-sm text-red-600">{{ $message }}</div> @enderror
    </div>

    <div class="md:col-span-2">
        <label class="mb-1 block text-sm font-medium text-slate-700">Descricao</label>
        <textarea
            name="descricao"
            rows="4"
            class="w-full rounded-md border border-slate-300 px-3 py-2 text-sm outline-none ring-slate-300 transition focus:border-slate-500 focus:ring"
        >{{ old('descricao', $chamado->descricao ?? '') }}</textarea>
        @error('descricao') <div class="mt-1 text-sm text-red-600">{{ $message }}</div> @enderror
    </div>

    <div>
        <label class="mb-1 block text-sm font-medium text-slate-700">Prioridade</label>
        <select
            name="prioridade"
            required
            class="w-full rounded-md border border-slate-300 bg-white px-3 py-2 text-sm outline-none ring-slate-300 transition focus:border-slate-500 focus:ring"
        >
            @foreach($prioridades as $valor => $label)
                <option value="{{ $valor }}" @selected(old('prioridade', $chamado->prioridade ?? 'media') === $valor)>
                    {{ $label }}
                </option>
            @endforeach
        </select>
        @error('prioridade') <div class="mt-1 text-sm text-red-600">{{ $message }}</div> @enderror
    </div>

    <div>
        <label class="mb-1 block text-sm font-medium text-slate-700">Status</label>
        <select
            name="status"
            required
            class="w-full rounded-md border border-slate-300 bg-white px-3 py-2 text-sm outline-none ring-slate-300 transition focus:border-slate-500 focus:ring"
        >
            @foreach($statusOptions as $valor => $label)
                <option value="{{ $valor }}" @selected(old('status', $chamado->status ?? 'aberto') === $valor)>
                    {{ $label }}
                </option>
            @endforeach
        </select>
        @error('status') <div class="mt-1 text-sm text-red-600">{{ $message }}</div> @enderror
    </div>

    <div>
        <label class="mb-1 block text-sm font-medium text-slate-700">Data de abertura</label>
        <input
            type="date"
            name="data_abertura"
            value="{{ old('data_abertura', isset($chamado) && $chamado->data_abertura ? $chamado->data_abertura->format('Y-m-d') : now()->toDateString()) }}"
            required
            class="w-full rounded-md border border-slate-300 px-3 py-2 text-sm outline-none ring-slate-300 transition focus:border-slate-500 focus:ring"
        >
        @error('data_abertura') <div class="mt-1 text-sm text-red-600">{{ $message }}</div> @enderror
    </div>

    <div>
        <label class="mb-1 block text-sm font-medium text-slate-700">Servico ID</label>
        <input
            type="number"
            name="servico_id"
            value="{{ old('servico_id', $chamado->servico_id ?? '') }}"
            min="1"
            class="w-full rounded-md border border-slate-300 px-3 py-2 text-sm outline-none ring-slate-300 transition focus:border-slate-500 focus:ring"
        >
        @error('servico_id') <div class="mt-1 text-sm text-red-600">{{ $message }}</div> @enderror
    </div>

    <div>
        <label class="mb-1 block text-sm font-medium text-slate-700">Tecnico</label>
        <select
            name="tecnico_id"
            class="w-full rounded-md border border-slate-300 bg-white px-3 py-2 text-sm outline-none ring-slate-300 transition focus:border-slate-500 focus:ring"
        >
            <option value="">Sem tecnico</option>
            @foreach(($tecnicos ?? collect()) as $tecnico)
                <option value="{{ $tecnico->id }}" @selected((string) old('tecnico_id', $chamado->tecnico_id ?? '') === (string) $tecnico->id)>
                    {{ $tecnico->nome }}
                </option>
            @endforeach
        </select>
        @error('tecnico_id') <div class="mt-1 text-sm text-red-600">{{ $message }}</div> @enderror
    </div>

    <div class="md:col-span-2">
        <label class="mb-1 block text-sm font-medium text-slate-700">Categoria</label>
        <select
            name="categoria_id"
            required
            class="w-full rounded-md border border-slate-300 bg-white px-3 py-2 text-sm outline-none ring-slate-300 transition focus:border-slate-500 focus:ring"
        >
            <option value="" disabled @selected((string) old('categoria_id', $chamado->categoria_id ?? '') === '')>Selecione uma categoria</option>
            @foreach(($categorias ?? collect()) as $categoria)
                <option value="{{ $categoria->id }}" @selected((string) old('categoria_id', $chamado->categoria_id ?? '') === (string) $categoria->id)>
                    {{ $categoria->nome }}
                </option>
            @endforeach
        </select>
        @error('categoria_id') <div class="mt-1 text-sm text-red-600">{{ $message }}</div> @enderror
    </div>
</div>
