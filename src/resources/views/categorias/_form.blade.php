<div class="space-y-4">
    <div>
        <label class="mb-1 block text-sm font-medium text-gray-700" for="nome">Nome</label>
        <input id="nome" name="nome" class="w-full rounded border border-gray-300 px-3 py-2 outline-none ring-blue-500 focus:ring" value="{{ old('nome', $categoria->nome ?? '') }}" required>
        @error('nome') <div class="mt-1 text-sm text-red-600">{{ $message }}</div> @enderror
    </div>

    <div>
        <label class="mb-1 block text-sm font-medium text-gray-700" for="sla_horas">SLA (horas)</label>
        <input id="sla_horas" name="sla_horas" type="number" min="0" class="w-full rounded border border-gray-300 px-3 py-2 outline-none ring-blue-500 focus:ring" value="{{ old('sla_horas', $categoria->sla_horas ?? '') }}" required>
        @error('sla_horas') <div class="mt-1 text-sm text-red-600">{{ $message }}</div> @enderror
    </div>
</div>