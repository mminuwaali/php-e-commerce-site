<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>MINI-ECOMMERCE</title>
    <meta name="description" content="Sublime project">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />
    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
</head>

<body>
    @include('component.modal')
    <section class="w-screen h-screen flex flex-col" onclick="toggleAllInputs()">
        <header class="w-screen flex px-8 py-4 items-center justify-between ap-4 bg-gray-800">
            <h1 class="uppercase text-green-500 font-black text-md md:text-lg">mimi-shop</h1>
            <nav class="flex gap-4 items-center justify-center"></nav>
        </header>
        <main class="grow w-full h-full flex flex-col-reverse md:flex-row bg-white">
            <div
                class="md:h-full bg-gray-800 w-full md:w-1/6 flex md:flex-col gap-4 md:gap-0 items-start md:pl-2 capitalize font-bold text-white">
                <a href="{{ route('admin') }}"
                    class="w-full p-2 flex items-center justify-center md:justify-start gap-2 hover:text-gray-800 hover:bg-white transition-all">
                    <i class="fa fa-home"></i>
                    <span>dashboard</span>
                </a><a href="{{ route('admin.db') }}"
                    class="w-full p-2 flex items-center justify-center md:justify-start gap-2 hover:text-gray-800 hover:bg-white transition-all">
                    <i class="fa fa-database"></i>
                    <span>tables</span>
                </a>
                </a><a href="{{ route('admin.db') }}"
                    class="w-full p-2 flex items-center justify-center md:justify-start gap-2 hover:text-gray-800 hover:bg-white transition-all">
                    <i class="fa fa-users"></i>
                    <span>users</span>
                </a>
            </div>
            <div class="grow w-full h-full flex overflow-auto p-4 flex-col">
                @yield('content')
            </div>
        </main>
    </section>
</body>
@vite('resources/js/app.js')

</html>
