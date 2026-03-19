<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreChamadoRequest;
use App\Http\Requests\UpdateChamadoRequest;
use App\Models\Chamado;
use App\Models\Tecnico;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ChamadoController extends Controller
{
    public function index(): View
    {
        $chamados = Chamado::query()
            ->with('tecnico:id,nome')
            ->latest('id')
            ->get();

        return view('chamados.index', compact('chamados'));
    }

    public function create(): View
    {
        $tecnicos = Tecnico::query()->where('ativo', true)->orderBy('nome')->get(['id', 'nome']);

        return view('chamados.create', compact('tecnicos'));
    }

    public function store(StoreChamadoRequest $request): RedirectResponse
    {
        Chamado::query()->create($request->validated());

        return redirect()
            ->route('chamados.index')
            ->with('ok', 'Chamado criado com sucesso.');
    }

    public function show(Chamado $chamado): View
    {
        $chamado->load('tecnico:id,nome');

        return view('chamados.show', compact('chamado'));
    }

    public function edit(Chamado $chamado): View
    {
        $tecnicos = Tecnico::query()->where('ativo', true)->orderBy('nome')->get(['id', 'nome']);

        return view('chamados.edit', compact('chamado', 'tecnicos'));
    }

    public function update(UpdateChamadoRequest $request, Chamado $chamado): RedirectResponse
    {
        $chamado->update($request->validated());

        return redirect()
            ->route('chamados.index')
            ->with('ok', 'Chamado atualizado com sucesso.');
    }

    public function destroy(Chamado $chamado): RedirectResponse
    {
        $chamado->delete();

        return redirect()
            ->route('chamados.index')
            ->with('ok', 'Chamado removido com sucesso.');
    }
}
