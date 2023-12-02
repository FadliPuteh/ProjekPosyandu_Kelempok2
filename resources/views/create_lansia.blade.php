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
    <body class="font-sans antialiased">
        <div class="min-h-screen" style="background: #388CAB;">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-black">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
    <x-guest-layout>
    <form method="POST" action="{{ route('store_lansia') }}">
        <p class="text-center">Pendaftaran Lansia</p>
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="nama" :value="__('Nama')" class="mt-2 text-sm text-black-600" />
            <x-text-input id="nama" class="block mt-1 w-full" type="text" name="nama" :value="old('name')" required autofocus autocomplete="name" placeholder="Nama Lengkap"/>
            <x-input-error :messages="$errors->get('nama')" class="mt-2" />
        </div>

        <!-- Umur Balita -->
        <div class="mt-4">
            <x-input-label for="umur" :value="__('Umur')" />
            <x-text-input id="umur" class="block mt-1 w-full" type="text" name="umur" :value="old('name')" required autocomplete="umur" placeholder="Umur, Contoh = 45 Tahun"/>
            <x-input-error :messages="$errors->get('umur')" class="mt-2" />
        </div>

        <!-- Nama Ortu -->
        <div class="mt-4">
            <x-input-label for="gejala" :value="__('Gejala')" />
            <x-text-input id="gejala" class="block mt-1 w-full" type="text" name="gejala" :value="old('name')" required autocomplete="gejala" placeholder="Apabila Tidak Ada, Tulis Tidak Ada"/>
            <x-input-error :messages="$errors->get('gejala')" class="mt-2" />
        </div>

        <!-- Alamat -->
        <div class="mt-4">
            <x-input-label for="alamat" :value="__('Alamat')" />
            <x-text-input id="alamat" class="block mt-1 w-full" type="text" name="alamat" :value="old('name')" required autocomplete="alamat" placeholder="Alamat"/>
            <x-input-error :messages="$errors->get('alamat')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ml-4" style="background-color: black;">
                Submit
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
        </div>
    </body>
</html>
