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
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <x-guest-layout>
    <form method="POST" action="{{ route('store_balita') }}">
    <p class="text-center">Pendaftaran Balita</p>
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="nama" :value="__('Nama')" class="mt-2 text-sm text-black-600" />
            <x-text-input id="nama" class="block mt-1 w-full" type="text" name="nama" :value="old('name')" required autofocus autocomplete="name" placeholder="Nama Lengkap"/>
            <x-input-error :messages="$errors->get('nama')" class="mt-2" />
        </div>

        <!-- Umur Balita -->
        <div class="mt-4">
            <x-input-label for="umur_balita" :value="__('Umur Balita')" />
            <x-text-input id="umur_balita" class="block mt-1 w-full" type="text" name="umur_balita" :value="old('name')" required autocomplete="umur_balita" placeholder="Umur Balita, Contoh = 1 Bulan"/>
            <x-input-error :messages="$errors->get('umur_balita')" class="mt-2" />
        </div>

        <!-- Jenis Imunisasi -->
        <div class="mt-4">
            <x-input-label for="jenis_imunisasi" :value="__('Jenis Imunisasi')" />
            <select id="jenis_imunisasi" class="block mt-1 w-full" name="jenis_imunisasi" :value="old('jenis_imunisasi')" required autofocus>
                <option value="" disabled selected>Pilih Jenis Imunisasi</option>
                <option value="Imunisasi 1">Imunisasi 1</option>
                <option value="Imunisasi 2">Imunisasi 2</option>
                <option value="Imunisasi 3">Imunisasi 3</option>
            <!-- Tambahkan opsi-opsi lain sesuai kebutuhan -->
            </select>
            <x-input-error :messages="$errors->get('jenis_imunisasi')" class="mt-2" />
        </div>

        <!-- Nama Ortu -->
        <div class="mt-4">
            <x-input-label for="nama_ortu" :value="__('Nama Orang Tua')" />
            <x-text-input id="nama_ortu" class="block mt-1 w-full" type="text" name="nama_ortu" :value="old('name')" required autocomplete="nama_ortu" placeholder="Nama Orang Tua"/>
            <x-input-error :messages="$errors->get('nama_ortu')" class="mt-2" />
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
