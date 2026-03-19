<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Lista de Tarefas')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-slate-50 text-slate-800">
    <div class="mx-auto max-w-5xl px-4 py-8 sm:px-6 lg:px-8">
        <header class="mb-8 flex flex-wrap items-center justify-between gap-4 border-b border-slate-200 pb-4">
            <h1 class="text-2xl font-semibold tracking-tight">@yield('lista_de', 'Lista de Tarefas')</h1>
            <a
                href="{{ route('chamados.index') }}"
                class="inline-flex items-center rounded-md bg-slate-900 px-4 py-2 text-sm font-medium text-white transition hover:bg-slate-700"
            >
                Ir para chamados
            </a>
        </header>

        @if(session('ok'))
            <div class="mb-6 rounded-md border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm text-emerald-700">
                {{ session('ok') }}
            </div>
        @endif

        <main class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm sm:p-6">
            @yield('content')
        </main>
    </div>
</body>

</html>
