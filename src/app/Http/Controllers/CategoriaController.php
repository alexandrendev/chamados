<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CategoriaController extends Controller
{
    public function index(): View
    {
        $categorias = Categoria::query()
            ->orderBy('nome')
            ->get();

        return view('categorias.index', compact('categorias'));
    }

    public function create(): View
    {
        return view('categorias.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $dados = $request->validate([
            'nome' => ['required', 'string', 'max:255'],
            'sla_horas' => ['required', 'integer', 'min:0'],
        ]);

        Categoria::query()->create($dados);

        return redirect()
            ->route('categorias.index')
            ->with('ok', 'Categoria criada com sucesso.');
    }

    public function show(Categoria $categoria): View
    {
        return view('categorias.show', compact('categoria'));
    }

    public function edit(Categoria $categoria): View
    {
        return view('categorias.edit', compact('categoria'));
    }

    public function update(Request $request, Categoria $categoria): RedirectResponse
    {
        $dados = $request->validate([
            'nome' => ['required', 'string', 'max:255'],
            'sla_horas' => ['required', 'integer', 'min:0'],
        ]);

        $categoria->update($dados);

        return redirect()
            ->route('categorias.index')
            ->with('ok', 'Categoria atualizada com sucesso.');
    }

    public function destroy(Categoria $categoria): RedirectResponse
    {
        $categoria->delete();

        return redirect()
            ->route('categorias.index')
            ->with('ok', 'Categoria removida com sucesso.');
    }
}
