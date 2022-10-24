<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gadumi</title>

    @viteReactRefresh
    @vite('resources/js/app.js')
    @vite('resources/css/login-page/css/bootstrap.css')
    @vite('resources/css/login-page/css/stylee.css')
    
    @vite('resources/css/listing/gadumi.css')
    @vite('resources/css/listing/custom.css')

    {{-- @vite("resources/scripts/App.tsx"); --}}

</head>
<body>
    <div id="root"></div>
    
    @vite('resources/css/login-page/js/jquery-3.js')
    @vite('resources/css/login-page/js/main.js')
    @vite('resources/css/login-page/js/imagesloaded.js')
    @vite('resources/css/login-page/js/validator.js')
    @vite('resources/css/listing/bootstrap.js')
</body>
</html>