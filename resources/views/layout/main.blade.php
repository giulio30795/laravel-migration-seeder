<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="{{ route('packages') }}">Pacchetti</a></li>
            <li><a href="">About</a></li>
        </ul>

    </header>

    <main>
        @yield('main-content')
    </main>

    <footer>
        Footer Here, Project Made By Giulio
    </footer>
</body>
</html>