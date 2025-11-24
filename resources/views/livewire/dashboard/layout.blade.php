<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <section class="w-full flex ">
        <div class="w-[20%] h-screen flex relative ">
            <div class=" flex w-full h-fit bg-white items-center justify-start  flex-col border-r border-gray-200    p-4 absolute top-0 right-0">
                <h1 class="text-[#1A1A1A]  text-4xl font-bold leading-normal">JobTracker</h1>
                <nav class="flex w-full flex-col gap-2">
                    <ul class="flex flex-col p-4 pl-2 ">
                        <li><a href="{{ route('dashboard') }}" class="flex gap-1 hover:bg-gray-200 p-2 @if (request()->routeIs('dashboard')) bg-gray-200 @endif">
                            <x-heroicon-o-home class="w-6 h-6 text-gray-600" />Dashboard</a>
                        </li>
                        <li><a href="{{ route('list.condidatures') }}" class="flex gap-1 hover:bg-gray-200 p-2 @if (request()->routeIs('list.condidatures')) bg-gray-200 @endif">
                            <x-heroicon-o-newspaper class="w-6 h-6 text-gray-600" />Mes condidature</a>
                        </li>
                        <li><a href="{{-- route('add.condidature') --}}" class="flex gap-1 hover:bg-gray-200 p-2 @if (request()->routeIs('add.condidature')) bg-gray-200 @endif">
                            <x-heroicon-o-plus-circle class="w-6 h-6 text-gray-600" />Website de recrutement</a>
                        </li>
                        <li><a href="{{-- route('add.condidature') --}}" class="flex gap-1 hover:bg-gray-200 p-2 @if (request()->routeIs('add.condidature')) bg-gray-200 @endif">
                            <x-heroicon-o-plus-circle class="w-6 h-6 text-gray-600" />Secteur public</a>
                        </li>
                        <li><a href="{{-- route('add.condidature') --}}" class="flex gap-1 hover:bg-gray-200 p-2 @if (request()->routeIs('add.condidature')) bg-gray-200 @endif">
                            <x-heroicon-o-plus-circle class="w-6 h-6 text-gray-600" />Secteur prive</a>
                        </li>
                        <li><a href="{{-- route('add.condidature') --}}" class="flex gap-1 hover:bg-gray-200 p-2 @if (request()->routeIs('add.condidature')) bg-gray-200 @endif">
                            <x-heroicon-o-plus-circle class="w-6 h-6 text-gray-600" />Les stages</a>
                        </li>
                    </ul>
                </nav>
            </div>

        </div>
        {{ $slot }}
    </section>
    @livewireScripts
</body>
</html>