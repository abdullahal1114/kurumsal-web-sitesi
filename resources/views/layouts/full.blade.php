<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="m-0 p-0">
    @yield('content')
    <livewire:quote-request-modal />
    <livewire:contact-modal />
    @livewireScripts
</body>
</html>