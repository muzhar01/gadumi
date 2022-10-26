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
    
    {{-- @vite('resources/css/listing/bootstrap.css') --}}
    @vite('resources/css/listing/custom.css')
    <link href='https://fonts.googleapis.com/css?family=Outfit' rel='stylesheet'>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/duotone.css" integrity="sha384-R3QzTxyukP03CMqKFe0ssp5wUvBPEyy9ZspCB+Y01fEjhMwcXixTyeot+S40+AjZ" crossorigin="anonymous"/>
    <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>


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