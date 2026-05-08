<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Cebra')</title>
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: system-ui, sans-serif; line-height: 1.6; max-width: 900px; margin: 0 auto; padding: 1rem; }
        h1 { margin-bottom: 1rem; }
        a { color: #6366f1; text-decoration: none; }
        a:hover { text-decoration: underline; }
        .card { border: 1px solid #e5e7eb; border-radius: 8px; padding: 1rem; margin-bottom: 1rem; }
        .badge { display: inline-block; background: #e0e7ff; color: #4338ca; padding: 0.2rem 0.5rem; border-radius: 4px; font-size: 0.8rem; }
        .warning { background: #fef3c7; border-left: 3px solid #f59e0b; padding: 0.5rem; margin-top: 0.5rem; font-size: 0.9rem; }
        form { margin-bottom: 1.5rem; }
        input[type="search"] { padding: 0.5rem; width: 70%; border: 1px solid #d1d5db; border-radius: 4px; }
        button { padding: 0.5rem 1rem; background: #6366f1; color: white; border: none; border-radius: 4px; cursor: pointer; }
    </style>
</head>
<body>
    <header style="margin-bottom: 2rem; padding-bottom: 1rem; border-bottom: 1px solid #e5e7eb;">
        <a href="{{ route('doctors.index') }}"><strong>Cebra</strong></a>
        <small style="color: #6b7280;">— Directorio comunitario de doctores</small>
    </header>
    @yield('content')
</body>
</html>
