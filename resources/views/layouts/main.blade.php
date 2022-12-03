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
    <header class="w-screen py-8 px-8 md:px-14 flex items-center justify-between z-20 bg-white top-0 sticky">
        <h1 class="text-gray-500 font-bold text-lg flex items-center"><span class="uppercase text-3xl text-green-500">e</span>-commerce</h1>
        <nav class="grow h-full hidden md:flex items-center justify-center font-thinbold gap-6 uppercase font-bold text-gray-400">
            <a href="{{route('index')}}" class="text-sm md:text-md hover:text-green-400 transition-colors">home</a>
            <a href="{{route('index')}}" class="text-sm md:text-md hover:text-green-400 transition-colors">category</a>
            <a href="{{route('about')}}" class="text-sm md:text-md hover:text-green-400 transition-colors">about us</a>
            <a href="{{route('index')}}" class="text-sm md:text-md hover:text-green-400 transition-colors">contact us</a>
        </nav>
        <div class="h-full flex items-center justify-center gap-2 text-md">
            <a href="{{route('index')}}" style="font-variant: small-caps;">cart [<i class="not-italic font-thin">10</i>]</a>
            <a href="{{route('index')}}" style="font-variant: small-caps;">favorite [<i class="not-italic font-thin">40</i>]</a>
        </div>
    </header>
    <!-- main content -->
    <main class="w-screen flex flex-col gap-8 px-8 md:px-16 my-4">
        @yield('content')
    </main>
    <footer class="w-screen py-12 bg-black px-8 md:px-16 flex items-center justify-between"></footer>
</body>

</html>