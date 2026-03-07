<div>
    <div>
        <label>Nome</label>
        <input name="nome" value="{{ old('nome', $categoria->nome ?? '') }}" required>
        @error('nome') <div>{{ $message }}</div> @enderror
    </div>

    <div>
        <label>Cor</label>
        <input name="cor" value="{{ old('cor', $categoria->cor ?? '') }}">
        @error('cor') <div>{{ $message }}</div> @enderror
    </div>

    <div>
        <label>Descrição</label>
        <textarea name="descricao" rows="4">{{ old('descricao', $categoria->descricao ?? '') }}</textarea>
        @error('descricao') <div>{{ $message }}</div> @enderror
    </div>
</div>