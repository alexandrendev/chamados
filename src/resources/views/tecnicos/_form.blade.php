@php
    $tecnico = $tecnico ?? null;
@endphp

<div class="grid gap-4">
    <div>
        <label for="nome" class="mb-1 block text-sm font-medium text-slate-700">Nome *</label>
        <input id="nome" name="nome" type="text" required value="{{ old('nome', $tecnico?->nome) }}"
            class="w-full rounded-md border border-slate-300 px-3 py-2 text-sm shadow-sm focus:border-slate-500 focus:outline-none focus:ring-2 focus:ring-slate-200">
        @error('nome')
            <p class="mt-1 text-xs text-rose-600">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="email" class="mb-1 block text-sm font-medium text-slate-700">Email *</label>
        <input id="email" name="email" type="email" required value="{{ old('email', $tecnico?->email) }}"
            class="w-full rounded-md border border-slate-300 px-3 py-2 text-sm shadow-sm focus:border-slate-500 focus:outline-none focus:ring-2 focus:ring-slate-200">
        @error('email')
            <p class="mt-1 text-xs text-rose-600">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="telefone" class="mb-1 block text-sm font-medium text-slate-700">Telefone</label>
        <input id="telefone" name="telefone" type="text" value="{{ old('telefone', $tecnico?->telefone) }}"
            class="w-full rounded-md border border-slate-300 px-3 py-2 text-sm shadow-sm focus:border-slate-500 focus:outline-none focus:ring-2 focus:ring-slate-200">
        @error('telefone')
            <p class="mt-1 text-xs text-rose-600">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="especialidade" class="mb-1 block text-sm font-medium text-slate-700">Especialidade</label>
        <input id="especialidade" name="especialidade" type="text" value="{{ old('especialidade', $tecnico?->especialidade) }}"
            class="w-full rounded-md border border-slate-300 px-3 py-2 text-sm shadow-sm focus:border-slate-500 focus:outline-none focus:ring-2 focus:ring-slate-200">
        @error('especialidade')
            <p class="mt-1 text-xs text-rose-600">{{ $message }}</p>
        @enderror
    </div>

    <label class="inline-flex items-center gap-2 text-sm text-slate-700">
        <input type="hidden" name="ativo" value="0">
        <input type="checkbox" name="ativo" value="1" @checked((int) old('ativo', $tecnico?->ativo ?? 1) === 1)
            class="h-4 w-4 rounded border-slate-300 text-slate-900 focus:ring-slate-300">
        Tecnico ativo
    </label>

    <div class="pt-2">
        <button type="submit" class="inline-flex items-center rounded-md bg-slate-900 px-4 py-2 text-sm font-medium text-white hover:bg-slate-700">
            Salvar
        </button>
        <a href="{{ route('tecnicos.index') }}" class="ml-2 inline-flex items-center rounded-md border border-slate-300 px-4 py-2 text-sm font-medium text-slate-700 hover:bg-slate-50">Cancelar</a>
    </div>
</div>
