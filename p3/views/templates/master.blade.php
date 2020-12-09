<!doctype html>
<html lang='en'>
<head>

    <title>@yield('title', $app->config('app.name'))</title>

    <meta charset='utf-8'>

    <link rel='shortcut icon' href='/favicon.ico'>
    <link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates" rel="stylesheet">
    <link href='/css/app.css' rel='stylesheet'>

    @yield('head')

</head>
<body>
    <header>
        <img id='logo' src='/images/rps-icon.png' alt='Rock Paper Scissors'>
        <div id="retro-background">
            <h1>{{ $app->config('app.name') }}</h1>
            <h1 id="retro">{{ $app->config('app.name') }}</h1>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
    @yield('body')
</body>
</html>
