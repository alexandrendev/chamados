<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTecnicoRequest;
use App\Http\Requests\UpdateTecnicoRequest;
use App\Models\Tecnico;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class TecnicoController extends Controller
{
    public function index(): View
    {
        $tecnicos = Tecnico::query()->latest('id')->get();

        return view('tecnicos.index', compact('tecnicos'));
    }

    public function create(): View
    {
        return view('tecnicos.create');
    }

    public function store(StoreTecnicoRequest $request): RedirectResponse
    {
        $data = $request->validated();
        $data['ativo'] = (bool) ($data['ativo'] ?? false);

        Tecnico::query()->create($data);

        return redirect()
            ->route('tecnicos.index')
            ->with('ok', 'Tecnico criado com sucesso.');
    }

    public function show(Tecnico $tecnico): View
    {
        return view('tecnicos.show', compact('tecnico'));
    }

    public function edit(Tecnico $tecnico): View
    {
        return view('tecnicos.edit', compact('tecnico'));
    }

    public function update(UpdateTecnicoRequest $request, Tecnico $tecnico): RedirectResponse
    {
        $data = $request->validated();
        $data['ativo'] = (bool) ($data['ativo'] ?? false);

        $tecnico->update($data);

        return redirect()
            ->route('tecnicos.index')
            ->with('ok', 'Tecnico atualizado com sucesso.');
    }

    public function destroy(Tecnico $tecnico): RedirectResponse
    {
        $tecnico->delete();

        return redirect()
            ->route('tecnicos.index')
            ->with('ok', 'Tecnico removido com sucesso.');
    }
}
