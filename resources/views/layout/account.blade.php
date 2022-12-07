<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
    @vite('resources/js/alpine.min.js')
</head>

<body class="w-screen">
    @include("component.modal")
    <!-- ====== Navbar Section Start -->
    <header x-data="{ navbarOpen: false }" class="flex w-full items-center bg-white px-12">
        <div class="container mx-auto">
            <div class="relative -mx-4 flex items-center justify-between">
                <div class="w-60 max-w-full px-4">
                    <a href="{{ route('index') }}" class="block w-full py-5">
                        <img src="assets/images/logo/logo.svg" alt="logo" class="w-full" />
                    </a>
                </div>
                <div class="flex w-full items-center justify-between px-4">
                    <div>
                        <button @click="navbarOpen = !navbarOpen" :class="navbarOpen && 'navbarTogglerActive'"
                            id="navbarToggler"
                            class="absolute right-4 top-1/2 block -translate-y-1/2 rounded-lg px-3 py-[6px] ring-primary focus:ring-2 lg:hidden">
                            <span class="relative my-[6px] block h-[2px] w-[30px] bg-body-color"></span>
                            <span class="relative my-[6px] block h-[2px] w-[30px] bg-body-color"></span>
                            <span class="relative my-[6px] block h-[2px] w-[30px] bg-body-color"></span>
                        </button>
                        <nav :class="!navbarOpen && 'hidden'" id="navbarCollapse"
                            class="absolute right-4 top-full w-full max-w-[250px] rounded-lg bg-white py-5 px-6 shadow lg:static lg:block lg:w-full lg:max-w-full lg:shadow-none">
                            <ul class="blcok lg:flex capitalize">
                                <li>
                                    <a href="{{ route('index') }}"
                                        class="flex py-2 text-base font-medium text-dark hover:text-primary lg:ml-12 lg:inline-flex">
                                        home
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('about') }}"
                                        class="flex py-2 text-base font-medium text-dark hover:text-primary lg:ml-12 lg:inline-flex">
                                        about us
                                    </a>
                                </li>
                                <li>
                                    {{-- <a href="{{ route('category') }}"
                                        class="flex py-2 text-base font-medium text-dark hover:text-primary lg:ml-12 lg:inline-flex">
                                        category
                                    </a> --}}
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ====== Navbar Section End -->

    <main class="w-screen flex flex-col gap-8 px-8 md:px-16 my-4 h-auto">
        @yield('body')
    </main>
    <footer class="w-screen py-12 bg-black text-white px-8 md:px-16 flex  items-center justify-between">
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
