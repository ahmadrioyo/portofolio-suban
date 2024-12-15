<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Portofolio Suban</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/logo.png') }}">
</head>
<body>
    {{-- header start --}}
    @include('navbar')
    {{-- header end --}}

    {{-- hero section start --}}
    @include('hero')
    {{-- hero section end --}}

    {{-- about section start --}}
    @include('about')
    {{-- about section end --}}

    {{-- project section start --}}
    @include('project')
    {{-- project section end --}}

    {{-- tools section start --}}
    @include('tools')
    {{-- tools section end --}}

    <script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>