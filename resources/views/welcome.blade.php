<!DOCTYPE html>
<html class="scroll-smooth" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Posyandu Bungur</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <!-- Call main.css-->
        <link rel="stylesheet" href="{{ asset('assets/main.css') }}">

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
    </head>
    <body class="antialiased">
    <div class="absolute w-full z-50 sm:flex sm:justify-center sm:items-center selection:text-white">
            <div class="mt-4 border-b border-gray-100 fixed top-0 p-6 text-center bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none">
                <div class="max-w-7xl mx-auto px-4">
                    <img src="https://1.bp.blogspot.com/-vNcUzj8YRPo/YNaCWN7kmLI/AAAAAAAAFaE/Q0YIFTjsM-kDUxl8VXWNHN86WZtELt8MwCLcBGAsYHQ/s1600/Logo%2BPosyandu.png" class="mx-auto" alt="Posyandu" width="100" height="100">
                    <div class="flex flex-wrap justify-between md:h-8 items-center">
                        <a href="#beranda" class="ml-2 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:outline-red-500">Beranda</a>
                        <a href="#tentangkami" class="ml-2 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:outline-red-500">Tentang Kami</a>
                        <a href="#program" class="ml-2 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:outline-red-500">Program Kami</a>
                        <a href="#kontak" class="ml-2 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:outline-red-500">Kontak</a>
                    </div>
                </div>
            </div>
    </div>
    <div class="mx-auto p-6 lg:p-8 poto-background min-h-screen" id="beranda">
        <br>
            <h1 class="md:mt-16" style="font-weight: bold; font-size: 50px; color: blue;">Perawatan Kesehatan</h1>
            <h1 class="mb-8 font-bold text-[50px]">untuk Keluarga Bahagia</h1>
            <h2 style="font-weight: bold; font-size: 25px;">Menyediakan Perawatan Kesehatan Terintegrasi</h2>
            <h2 style="font-weight: bold; font-size: 25px;">untuk Keluarga Anda dan Mendukung Pertumbuhan Anak-anak</h2>
            <h2 style="font-weight: bold; font-size: 25px;">yang Sehat serta Bahagia</h2>
        <div class="mt-16">
                @auth
                    <a href="{{ url('/dashboard') }}" class="inline-block mt-8 p-6 font-bold bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="inline-block mt-8 p-6 font-bold rounded-lg bg-gradient-to-r from-green-400 to-blue-500 hover:from-pink-500 hover:to-yellow-500">Masuk</a>

                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-16 mt-8 p-6 font-bold rounded-lg bg-gradient-to-r from-blue-400 to-green-500 hover:from-yellow-500 hover:to-pink-500">Daftar</a>
                    @endif
                @endauth
        </div>
    </div>
    <div class="mx-auto p-6 lg:p-8  min-h-screen" style="background: linear-gradient(to right, #00CED1 20%, white 70%);" id="tentangkami">
        <h1 class="mt-16" style="font-weight: bold; font-size: 55px; color: blue;">Tentang Kami</h1>
        <h2 style="font-weight: bold; font-size: 50px;" class="mb-8">Posyandu Kranggan Bungur 2</h2>
        <img src="https://bungko.desa.id/wp-content/uploads/2023/03/sedang_1595396217_POSYANDU.jpg"
        alt="gambarposyandu" style="height: 300px; width: 300px;" class="sm:items-center">
        <p>Posyandu (pos pelayanan terpadu) merupakan upaya pemerintah untuk memudahkan masyarakat Indonesia dalam memperoleh pelayanan kesehatan ibu dan anak. Tujuan utama posyandu adalah mencegah peningkatan angka kematian ibu dan bayi saat kehamilan, persalinan, atau setelahnya melalui pemberdayaan masyarakat. blablablablala about posyandu Keranggan.</p>
        <p>Alamat : Kranggan RW 03 , Bekasi andjbw jnjcnq dwjcbjan  nkcnq blablbalblbalbla</p>
    </div>

            <div class="mx-auto p-6 lg:p-8 min-h-screen" style="background-image: linear-gradient(to right, #f0e68c 20%, #f8f6e3 70%);" id="program">
            <h1 style="font-weight: bold; font-size: 50px; color: blue;">Program Kami</h1>
            <h2 style="font-weight: bold; font-size: 50px;">Posyandu Kranggan Bungur 2</h2>
                <div class="">
                    <div class=" flex flex-col md:flex-row justify-center items-center">
                        <div class="mt-16 scale-75 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div class="">
                                <div class="flex flex-col items-center justify-center">
                                    <img src="https://res.cloudinary.com/dk0z4ums3/image/upload/v1679362858/attached_image/imunisasi-kejar.jpg" alt="balita" width="300" height="250">
                                </div>
                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Imunisasi Balita</h2>
                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                Imunisasi balita adalah program pemberian vaksin kepada anak-anak berusia balita, yang biasanya mencakup anak-anak dari usia 0 hingga 5 tahun. Tujuan utama imunisasi balita adalah untuk melindungi anak-anak dari penyakit-penyakit yang dapat menyebabkan komplikasi serius, cacat, atau bahkan kematian. Imunisasi balita membantu membangun sistem kekebalan tubuh balita.
                                </p>
                            </div>
                        </div>

                    <div class="mt-16 ml-4 scale-75 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                        <div>
                            <div class="flex flex-col items-center justify-center">
                                <img src="https://d1bpj0tv6vfxyp.cloudfront.net/articles/176931_2-11-2020_10-10-12.jpeg" alt="lansia" width="300" height="250">
                            </div>
                            <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Kesehatan Lansia</h2>
                            <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                Program kesehatan lansia di Posyandu  bertujuan untuk memberikan perawatan kesehatan, dukungan sosial, dan pendidikan kepada populasi lansia dalam masyarakat. Program ini dirancang untuk menjaga kesejahteraan fisik dan mental lansia, memantau kondisi kesehatan mereka, serta mencegah atau mengatasi masalah kesehatan yang umum terjadi pada usia lanjut.
                            </p>
                        </div>
                    </div>

                    <div class="mt-16 ml-4 scale-75 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                        <div>
                            <div class="flex flex-col items-center justify-center">
                                <img src="https://static.vecteezy.com/system/resources/previews/014/226/433/large_2x/pregnant-woman-with-protective-mask-talking-to-nurse-at-waiting-room-photo.jpg" alt="ibu hamil" width="300">
                            </div>
                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Kesehatan Ibu Hamil</h2>
                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Program kesehatan ibu hamil di Posyandu (Pos Pelayanan Terpadu) merupakan inisiatif penting untuk memantau dan meningkatkan kesehatan ibu hamil, serta memastikan kehamilan berjalan dengan baik. Program ini bertujuan untuk mengurangi angka kematian ibu dan bayi serta meningkatkan kesejahteraan ibu hamil.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mx-auto lg:p-8" style="background: linear-gradient(to right, #00CED1 20%, white 70%);" id="kontak">
            <h1 class="text-center" style="font-weight: bold; font-size: 55px; color: black;">Hubungi Kami</h1>
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <p><i class="fas fa-phone"> </i> No Telepon : +62 857-7218-4601</p><br>
                    <i class="fas fa-phone"> </i> WhatsApp: <a href="https://wa.me/6285772184601" style="color: white; text-decoration: underline;">Klik Disini</a>
                </div>
            </div>
        </div>
        <div class="mx-auto lg:p-4 text-center bg-[#f0e68c]">
            <h1 style="font-weight: bold; font-size: 15px; color: black;">Copyright © Posyandu Kranggan</h1>
        </div>

    <div class="fixed bottom-4 right-4 text-center">
        <div class="mx-auto">
            <div class="flex justify-between items-center">
                <div class="icon" id="toggle-icon">
                    <p class="text-center font-bold text-indigo-900">Ask Chat Bot</p>
                    <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto" width="70" height="70" viewBox="0 0 36 36"><path fill="indigo" d="M18 2.5c-8.82 0-16 6.28-16 14s7.18 14 16 14a18 18 0 0 0 4.88-.68l5.53 3.52a1 1 0 0 0 1.54-.84v-6.73a13 13 0 0 0 4-9.27C34 8.78 26.82 2.5 18 2.5Zm10.29 22.11a1 1 0 0 0-.32.73v5.34l-4.38-2.79a1 1 0 0 0-.83-.11a16 16 0 0 1-4.76.72c-7.72 0-14-5.38-14-12s6.28-12 14-12s14 5.38 14 12a11.08 11.08 0 0 1-3.71 8.11Z" class="clr-i-outline clr-i-outline-path-1"/><path fill="indigo" d="M25 15.5H11a1 1 0 0 0 0 2h14a1 1 0 0 0 0-2Z" class="clr-i-outline clr-i-outline-path-2"/><path fill="indigo" d="M21.75 20.5h-7.5a1 1 0 0 0 0 2h7.5a1 1 0 0 0 0-2Z" class="clr-i-outline clr-i-outline-path-3"/><path fill="indigo" d="M11.28 12.5h13.44a1 1 0 0 0 0-2H11.28a1 1 0 0 0 0 2Z" class="clr-i-outline clr-i-outline-path-4"/><path fill="none" d="M0 0h36v36H0z"/></svg>
                </div>
                <div class="wrapper" id="chatbot-wrapper">
                    <div class="title relative">Posyandu Kranggan <div class="absolute top-0 right-0 mr-6 cursor-pointer" id="chatbot-close">x</div></div>
                        <div class="form">
                            <div class="bot-inbox inbox">
                                <div class="icon">
                                    <i class="fas fa-user"></i>
                                </div>
                                <div class="msg-header">
                                    <p>Hai, ada yang bisa saya bantu?</p>
                                </div>
                            </div>
                        </div>
                    <div class="typing-field">
                        <div class="input-data">
                            <input id="text-pesan" type="text" placeholder="Ketikkan sesuatu disini..." required>
                            <button id="send-btn">Kirim</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <script>
            const toggleIcon = document.getElementById("toggle-icon");
            const toggleIconClose = document.getElementById("chatbot-close");
            const chatbotWrapper = document.getElementById("chatbot-wrapper");

            chatbotWrapper.style.display = "none";

            let chatbotVisible = false;

            toggleIcon.addEventListener("click", function() {
                chatbotVisible = !chatbotVisible;

                if (chatbotVisible) {
                    chatbotWrapper.style.display = "block";
                    toggleIcon.style.display ="none";
                } else {
                    chatbotWrapper.style.display = "none";
                    toggleIcon.style.display ="block";
                }
            });
            toggleIconClose.addEventListener("click", function() {
                chatbotVisible = !chatbotVisible;

                if (chatbotVisible) {
                    chatbotWrapper.style.display = "block";
                    toggleIcon.style.display ="none";
                } else {
                    chatbotWrapper.style.display = "none";
                    toggleIcon.style.display ="block";
                }
            });

            $(document).ready(function(){
                $("#send-btn").on("click", function() {
                    var pesan = $("#text-pesan").val();
                    var msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + pesan + '</p></div></div>';

                    $(".form").append(msg);

                    $("#text-pesan").val('');

                    $.ajax({
                        url : "{{ route('chat_bot') }}",
                        type : 'POST', //Karna input
                        data : {
                            '_token': "{{ csrf_token() }}",
                            'pesan': pesan,
                        },
                        success : function(result){
                            var balasan = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>'+ result +'</p></div>';
                            $(".form").append(balasan);
                            $(".form").scrollTop($(".form")[0].scrollHeight);
                        }
                    });
                });
            });
        </script>
    </body>
</html>
