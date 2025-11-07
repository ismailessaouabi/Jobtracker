<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <title>JobTracker</title>
        @livewireStyles
    </head>

    <body >
        <section class="bg-[#f8f9fa] flex justify-center items-center w-full h-fit">
            {{ $slot }}
        </section>
        @livewireScripts   
    </body>
</html>