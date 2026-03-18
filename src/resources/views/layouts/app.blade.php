<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Lista de Tarefas')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50 text-gray-900">
    <div class="min-h-screen">
        <header class="border-b bg-white">
            <div class="mx-auto flex w-full max-w-5xl items-center justify-between px-4 py-4 sm:px-6">
                <h1 class="text-xl font-semibold">@yield('lista_de', 'Lista de Tarefas')</h1>
                <nav class="flex items-center gap-3 text-sm">
                    <a class="rounded border border-gray-300 px-3 py-1.5 hover:bg-gray-100" href="{{ route('categorias.index') }}">Categorias</a>
                </nav>
            </div>
        </header>

        <main class="mx-auto w-full max-w-5xl px-4 py-6 sm:px-6">
            @if(session('ok'))
            <div class="mb-4 rounded border border-green-200 bg-green-50 px-4 py-3 text-sm text-green-800">
                {{ session('ok') }}
            </div>
            @endif

            @if($errors->any())
            <div class="mb-4 rounded border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-800">
                <p class="font-medium">Verifique os campos abaixo:</p>
                <ul class="mt-2 list-disc pl-5">
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            @yield('content')
        </main>
    </div>
</body>

</html>