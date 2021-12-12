<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"> --}}

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="/css/custom.css">


    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased">
    <div class="w-screen h-screen text-white" style="background-color:#000039;">
        <header class="px-5 lg:px-0 max-w-6xl py-8 mx-auto flex items-center justify-between">
            <a href="/"><img class="w-32" src="/img/logo.png" alt="KOLLECT"></a>

            <a href="https://www.instagram.com/we_kollect/" class="cursor-pointer">
               <img class="w-10" src="/img/instagram.png" alt="Instagram">
            </a>
        </header>
        <div class="max-w-xl lg:px-0 px-6 text-center w-full mx-auto lg:mt-10 mt-16 flex flex-col items-center">
            <h1 class="text-3xl lg:text-5xl leading-tight">Buy & Sell Cryptocurrency coins at a good rate.</h1>
            <p class="lg:text-lg text-sm leading-normal mt-3">On Kollect, you can sell or buy any cryptocurrency coin at a good rate
                and get paid instantly. Our web app is currently under construction, you can get in touch with us on
                Whatsapp or Instagram.</p>
            <a href="tel:07049149371"
                class="bg-secondary px-6 hover:bg-black cursor-pointer py-5 mt-5 rounded text-white text-xl font-bold flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                </svg>Get in touch
            </a>
        </div>
    </div>

</body>

</html>
