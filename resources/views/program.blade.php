<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Program Posyandu') }}
        </h2>
        <h3 class="mt-3">Program Posyandu dirancang untuk menyediakan layanan kesehatan dan gizi kepada masyarakat,
            terutama kepada ibu hamil, ibu menyusui, bayi, balita, dan anak-anak di bawah lima tahun.</h3>
    </x-slot>
    @if(Session::has('success'))
        <div class="text-center bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mt-4" role="alert">
            <strong class="font-bold">Sukses!</strong>
            <span class="block sm:inline">{{ Session::get('success') }}</span>
        </div>
    @endif
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="font-semibold text-xl text-gray-800 leading-tight">Silahkan Klik untuk mendaftar :</h1>
                    <div class="mt-16">
                    <!-- <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8"> -->
                    <div class="flex flex-wrap justify-center gap-6 lg:gap-8">

                            <a href="/balita/daftar" class="scale-100 w-[100%] md:w-[45%] p-6 dark:bg-gray-800 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500" style="background: #5EAECB;">
                                <div>
                                    <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 64 64"><path fill="#ffdd67" d="M57 27C57 10 45 2 32 2S7 10 7 27c-3.5 0-5 2.5-5 5s1.5 5 5 5c0 6.7 7 16 25 16s25-9.3 25-16c3.5 0 5-2.5 5-5s-1.5-5-5-5"/><path fill="#ffb300" d="M33 15c-4-3-2-7-2-7s8 5 15 3c0 0-4-1-5-4c0 0 4 1 7 0c-4-3-9-5-16-5S20 4 16 7c4 5 8 8 17 8"/><path fill="#ff717f" d="M56 37.4c-.4-2.4-3.3-3.9-6.6-3.2c-3.3.6-5.7 3.1-5.3 5.5c.4 2.4 3.3 3.9 6.6 3.2c3.2-.7 5.6-3.1 5.3-5.5m-41.4-3.3c-3.2-.6-6.2.9-6.6 3.3c-.4 2.4 2 4.9 5.3 5.5c3.3.6 6.3-.8 6.6-3.2c.4-2.5-2-4.9-5.3-5.6" opacity=".5"/><path fill="#fff" d="M26 27.5c0 3.6-2.9 6.5-6.5 6.5S13 31.1 13 27.5s2.9-6.5 6.5-6.5s6.5 2.9 6.5 6.5"/><circle cx="19.5" cy="27.5" r="4.5" fill="#664e27"/><path fill="#231f20" d="M21 27.5c0 .8-.7 1.5-1.5 1.5s-1.5-.7-1.5-1.5s.7-1.5 1.5-1.5s1.5.7 1.5 1.5"/><path fill="#fff" d="M51 27.5c0 3.6-2.9 6.5-6.5 6.5S38 31.1 38 27.5s2.9-6.5 6.5-6.5s6.5 2.9 6.5 6.5"/><circle cx="44.5" cy="27.5" r="4.5" fill="#664e27"/><circle cx="44.5" cy="27.5" r="1.5" fill="#231f20"/><path fill="#61c2ff" d="M47 43.8C47 52.1 40.3 56 32 56s-15-3.9-15-12.2c0-8.4 6.8-4.8 15-4.8c8.3 0 15-3.6 15 4.8"/><ellipse cx="32" cy="47" fill="#6235a8" rx="6" ry="5"/><path fill="#fbbf67" d="M32 46c-6.1 0-11-.7-11 5.2c0 6 4.9 10.8 11 10.8s11-4.8 11-10.7c0-6-4.9-5.3-11-5.3m0 12.4c-4.3 0-8.3-2.9-8.3-7.1s4-3.2 8.3-3.2c4.3 0 8.3-1 8.3 3.2s-4 7.1-8.3 7.1"/><path fill="#42ade2" d="M36 48.8c0 .6-.5 1.2-1.1 1.2h-5.8c-.6 0-1.1-.5-1.1-1.2v-2.7c0-.6.5-1.2 1.1-1.2h5.8c.6 0 1.1.5 1.1 1.2v2.7"/>
                                        <path fill="#eba352" d="M32 38c-4.2 0-6.3-3-4.2-3h8.4c2.1 0 0 3-4.2 3"/>
                                    </svg>
                                    </div>
                                    <h2 class="mt-6 text-xl font-semibold text-black-900 dark:text-white">Imunisasi Balita</h2>
                                    <p class="mt-4 text-black-500 dark:text-black-400 text-sm leading-relaxed">
                                        Pemberian vaksin untuk melindungi tubuh dari penularan penyakit tertentu.
                                    </p>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3h8a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H9m6-9l-4-4m4 4l-4 4m4-4H5"/></svg>
                            </a>

                            <a href="/lansia/daftar" class="scale-100 w-[100%] md:w-[45%] p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500" style="background: #5EAECB;">
                                <div>
                                    <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" viewBox="0 0 72 72"><path fill="#92D3F5" d="M55 60.998V57c0-4.994-5.006-9-10-9c-6 5-12 5-18 0c-4.992 0-10 4.006-10 9v3.998h38z"/><path fill="#D0CFCE" d="M25 39c-2 0-4-10-4-13c0-4 5-14 15-14s15 8 15 14c0 5-3 14-5 14"/><path fill="#fadcbc" d="M25 31.5C25 39.786 29 46 35.937 46C43 46 47 39.786 47 31.5c0-6.214-3-11.393-4-12.429C41 17 40 17 40 17c-2 1.036-9 0-11 2.071c-1 1.036-4 6.215-4 12.429z"/><path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M27.096 41c-4-2-5.448-8.03-6-13c-1-9 6-16 15-16c10 0 16 7 15 16.154c-.743 6.806-3 11.846-6 12.846"/><path fill="none" stroke="#000" stroke-linejoin="round" stroke-width="2" d="M25.096 31.5c0 8.286 4 14.5 10.936 14.5c7.064 0 11.064-6.214 11.064-14.5c0-6.214-1.216-8.102-2-9.321c-2-3.108-4-5.179-4-5.179c-2 1.036-10 0-12 2.071c-1 1.036-4 6.215-4 12.429z"/><path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 60v-3c0-4.994 5.008-9 10-9c6 5 12 5 18 0c4.994 0 10 4.006 10 9v3M38.127 38.438c-1.248.75-2.582.75-4 0m-3-2c0 1-1 2-1 2m11-2c0 1 1 2 1 2"/><path d="M42 29.438a2 2 0 1 1-4 0a2 2 0 0 1 4 0m-8 0a2 2 0 1 1-4 0a2 2 0 0 1 4 0"/></svg>
                                    </div>
                                    <h2 class="mt-6 text-xl font-semibold text-black-900 dark:text-white">Kesehatan Lansia</h2>
                                    <p class="mt-4 text-black-500 dark:text-black-400 text-sm leading-relaxed">
                                        Pemberian vaksin untuk melindungi tubuh dari penularan penyakit tertentu.
                                    </p>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3h8a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H9m6-9l-4-4m4 4l-4 4m4-4H5"/></svg>
                            </a>
                            <a href="/bumil/daftar" class="scale-100 w-[100%] md:w-[45%] p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500" style="background: #5EAECB;">
                                <div>
                                    <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 64 64"><path fill="#e84d88" d="m39.9 27.3l-8.5-.6c0 4.8-10.4 7-10.4 10.8c0 2.7 2.5 3.4 2.5 3.4s-7.9 3-7.9 11.4c0 6.7 5.3 9.6 11.6 9.6h10.3s.7-2-.6-9.1c-2.5-13.9 7.6-11.6 3-25.5"/><path fill="#ffdd67" d="m20.4 46.7l.6-1.4l1.1-.3c2.7 0 3.5 1.7 4.9 1.7v5.7s-1.1 1-5.4 1c-2.1 0-3.5-1.4-4.1-4.4c-.7-2.4 2.9-2.3 2.9-2.3"/><path fill="#eba352" d="M22.1 45s-1.2.3-1.2 1c0 .4 1.4-.1 2.4 1c-1.4-.7-3-.3-3-.3c-.6-.6-.1-1.7 1.8-1.7"/><path fill="#231f20" d="M26 46.2c5.8-1.2 11.6-3.1 11.6-3.1l-.9 7.6l.2 1.2s-3.5 1.9-10.8 2.5v-.6s-5.4.8-7.1-1.2c2.7 1.2 7-.2 7-.2v-6.2m9.8-14.7l4.1 7.2l-1.3 2.5z" opacity=".3"/><path fill="#e84d88" d="M42.2 27.3s7.7 11.8 6.7 16.7c-1.1 5.6-22.3 8.8-22.3 8.8l-.3-6.4s13.1-3.1 14.8-5.4c-1.1-2.5-5.3-9.6-5.3-9.6l6.4-4.1"/><path fill="#eba352" d="m28.4 26.3l8.4-14.8l.2 15.3c-3.5 1.5-5.5 0-5.5 0c-1.1-2-3.1-.5-3.1-.5"/><path fill="#ffb300" d="M40.3 9.1c-3.4-6.7-8.9-6.3-8.9-6.3c-6.9-3.1-14.3 3.6-15.7 7.4c-2.9 7.7 3.8 10.8 4.7 10.1l14.3-4.5s2.9 3 1.6 9C35 30.7 41 35.1 41 35.1s5.9-12.8-.7-26"/><path fill="#ffdd67" d="M17.2 12.4c-.2-2.1 4.1-1.7 6.4.6c5 5.1 6.5 3.8 6.5 3.8c-.3-.4-.5-.9-.6-1.4c-.5-2 .2-3.9 1.7-4.2c1.5-.3 3.2 1.1 3.7 3.1c.5 1.8-.1 3.5-1.3 4.1c1.8 5.5.1 5.6-2.5 7.6c-5.6 4.6-6.5 3.4-7.1 1.6c-.3-.8-.9-.4-1.6-.5c0 0-.1-.5-.6-1.8c-.4-1.3-1.7-1.1-1.3-1.8c.4-.7.6-1.1.3-1.5c-.1-.2-1.4.4-1.8-.3c-.7-1.1 1.1-1.4.8-3.6c0-1.2-2.2-1.4-2.6-5.7"/><path fill="#c94747" d="M22.4 24.2c-.4 0-.7-.1-1-.2c-.3-.1-.6-.3-.6-.8c-.2.1-.2.4-.2.7c.1.3.3.5.5.7c.2.2.4.3.6.4c-.1.2-.1.5 0 .8c.1.3.2.5.3.7c.2.2.3.4.5.5c0-.5-.1-.9-.1-1.2c0-.1.1-.3.1-.4c.1-.1.2-.3.3-.4l.5-.8h-.9"/><path fill="#664e27" d="M31.3 12.4c-.4.2-.7.5-.8.9c-.2.4-.2.9-.1 1.3s.2.7.4 1c-.2 0-.3.1-.4.2c.2 0 .4.1.5.2c.1.1.3.2.4.3c.1.1.2.2.3.4c.1.1.1.3.2.6c.2-.1.3-.4.3-.6c0-.3-.1-.6-.3-.8c-.2-.2-.4-.4-.7-.4h-.2c-.1-.8-.1-1.4.1-2c.1-.3.3-.6.6-.8c.2-.2.5-.5.8-.7c-.3.1-.7.2-1.1.4"/><path fill="#eba352" d="M20.9 17.8c-.1-.4-.2-.6-.4-.8c-.2-.2-.4-.5-.6-.8c-.2-.3-.3-.8-.3-1.2c.1-.4.3-.7.6-.8c-.1.3-.1.7-.1.9c0 .3.1.5.3.8c.1.3.4.6.5.9c.2.2.3.7 0 1"/><path fill="#664e27" d="M23.7 15c-.3.3-.4.7-.6 1.1c-.1.4-.3.8-.6 1.1c-.2.4-.6.7-1 .9c-.4.2-1 .2-1.4-.1c.8-.3 1.2-.8 1.6-1.4c.2-.3.4-.6.7-1c.4-.4.8-.7 1.3-.6"/></svg>
                                    </div>
                                    <h2 class="mt-6 text-xl font-semibold text-black-900 dark:text-white">Kesehatan Ibu Hamil</h2>
                                    <p class="mt-4 text-black-500 dark:text-black-400 text-sm leading-relaxed">
                                        Pemberian vaksin untuk melindungi tubuh dari penularan penyakit tertentu.
                                    </p>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3h8a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H9m6-9l-4-4m4 4l-4 4m4-4H5"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
