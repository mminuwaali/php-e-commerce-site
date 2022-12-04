<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.js')
    @vite('resources/css/app.css')
</head>

<body class="w-screen">
    <!-- header section -->
    <header class="w-screen py-8 px-10 md:px-14 flex items-center justify-between z-20 bg-white top-0 sticky">
        <a href="{{ route('index') }}">
            <h1 class="text-gray-500 font-bold text-lg flex items-center">
                <span class="uppercase text-3xl text-green-500">emy</span>
                <i class="not-italic hidden md:flex">-shop</i>
            </h1>
        </a>
        <nav
            class="grow h-full hidden md:flex items-center justify-center font-thinbold gap-6 uppercase font-bold text-gray-400">
            <a href="{{ route('index') }}" class="text-sm md:text-md hover:text-green-400 transition-colors">
                [ home ]
            </a>
            <a href="{{ route('categories') }}" class="text-sm md:text-md hover:text-green-400 transition-colors">
                [ category ]
            </a>
            <a href="{{ route('about') }}" class="text-sm md:text-md hover:text-green-400 transition-colors">
                [ about us ]
            </a>
            <a href="{{ route('contact') }}" class="text-sm md:text-md hover:text-green-400 transition-colors">
                [ contact us ]
            </a>
            @if (auth()->user())
                <a href="{{ route('logout') }}" class="text-sm md:text-md hover:text-green-400 transition-colors">
                    [log out]
                </a>
            @else
                <a href="{{ route('signin') }}" class="text-sm md:text-md hover:text-green-400 transition-colors">
                    [log in]
                </a>
            @endif
        </nav>
        <div class="h-full flex items-center justify-center gap-2 text-md">
            @auth
                <a href="{{ route('index') }}" style="font-variant: small-caps;">{{ auth()->user()->username }}</a>
            @endauth
            <a href="{{ route('cart') }}" style="font-variant: small-caps;">
                cart [<i class="not-italic font-thin">10</i>]
            </a>
            <a href="{{ route('fav') }}" style="font-variant: small-caps;">
                fav [<i class="not-italic font-thin">40</i>]
            </a>
        </div>
    </header>
    <!-- main content -->
    <main class="w-screen flex flex-col gap-8 px-8 md:px-16 my-4 h-auto">
        @yield('content')
    </main>
    <footer class="w-screen py-12 bg-green-200 px-8 md:px-16 flex items-center justify-between">
        <a href="{{ route('index') }}">
            <h1 class="text-gray-500 font-bold text-lg flex items-center">
                <span class="uppercase text-3xl text-green-900">emy</span>
                <i class="not-italic hidden md:flex">-shop</i>
            </h1>
        </a>
        <span class="text-center font-thin">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
        </span>

        <div class="flex items-center-justify-center gap-4">
            <span class="w-8 h-8 rounded-full bg-black cursor-pointer hover:bg-green-500"></span>
            <span class="w-8 h-8 rounded-full bg-black cursor-pointer hover:bg-green-500"></span>
            <span class="w-8 h-8 rounded-full bg-black cursor-pointer hover:bg-green-500"></span>
            <span class="w-8 h-8 rounded-full bg-black cursor-pointer hover:bg-green-500"></span>
            <span class="w-8 h-8 rounded-full bg-black cursor-pointer hover:bg-green-500"></span>
        </div>
    </footer>
</body>

</html>
