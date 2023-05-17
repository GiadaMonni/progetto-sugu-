    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Sugu-Travel</title>
        
        {{-- Swiper CDN --}}
        <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>

    <body>

    <x-navbar/>

  
    <div class="min-vh-100">

        {{$slot}}
        
    </div>

    <x-footer/>

    <script src="https://kit.fontawesome.com/603356db11.js" crossorigin="anonymous"></script>
    @livewireScripts
    </body>

    </html>