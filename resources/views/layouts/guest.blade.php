<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link rel="stylesheet" type="text/css" href="styles.css">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
<body class="font-sans text-gray-900 antialiased POSYANDU">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 POSYANDU">
            <div style="display: flex; align-items: center; justify-content: center;">
                    <img src="https://1.bp.blogspot.com/-vNcUzj8YRPo/YNaCWN7kmLI/AAAAAAAAFaE/Q0YIFTjsM-kDUxl8VXWNHN86WZtELt8MwCLcBGAsYHQ/s1600/Logo%2BPosyandu.png" alt="Posyandu" width="200" height="200">
            </div>
            <span style="display: flex; align-items: center; font-weight: bold; font-size: 25px;">Posyandu Kranggan RW 03</span>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 shadow-md overflow-hidden sm:rounded-lg" style="background-color: #388CAB;">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>

<style>
    .POSYANDU {
    background-image: url('https://img.freepik.com/free-photo/arrangement-family-concept-with-copy-space_23-2148485793.jpg?w=1060&t=st=1697908967~exp=1697909567~hmac=d1389f8001bb4ba6947397be0568328a4550306784140a0563313478725a7952');
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    }
</style>

