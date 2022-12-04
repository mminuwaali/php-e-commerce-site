@extends('layouts.main')

@section('content')
    <section id="indicator"
        class="w-full md:h-64 bg-black p-16 flex flex-col items-center md:items-start justify-center text-white gap-2 text-xl">
        <h2 class="capitalize font-bold text-green-500 text-xl md:text-5xl">happy shopping</h2>
        <div class="flex gap-2 text-sm md:text-md" style="font-variant: small-caps">
            <a href="{{ route('index') }}" class="font-bold">home</a>
            /
            <span class="text-green-500 font-bold">categories</span>
        </div>
    </section>

    <section id="category" class="w-full flex flex-col">
        <div class="w-full p-8 flex it4ems-center justify-center">
            <h2 class="capitalize font-bold text-3xl md:text-5xl text-center text-gray-600">all categories</h2>
        </div>
        <div class="w-full flex flex-wrap items-center justify-center gap-8">
            @for ($i = 1; $i <= 20; $i++)
                <div
                    class="basis-72 h-16 flex p-8 items-center justify-center shadow-md bg-gray-50 gap-4 rounded hover:bg-gray-800 hover:text-white transition-all">
                    <a href="{{ route('category', ['id' => $i]) }}" class="capitalize font-bold text-md">
                        category number {{ $i }}
                    </a>
                    <span
                        class="h-10  w-10 flex items-center justify-center font-black rounded-full bg-green-400 text-white shadow-md">
                        10
                    </span>
                </div>
            @endfor
        </div>
    </section>
    <section id="recent" class="flex flex-col w-full gap-8 mt-8">
        <div class="flex items-center justify-center p-8">
            <h3 class="capitalize font-thinbold text-center text-3xl">recent products</h3>
        </div>
        <div class="flex flex-wrap justify-center gap-8">
            @for ($i = 0; $i < 8; $i++)
                <div class="w-64 h-80 flex flex-col shadow rounded">
                    <div class="grow bg-green-400"></div>
                    <div class="w-full px-4 py-8 flex flex-col items-start justify-center">
                        <a href="{{ route('product', ['id' => $i]) }}" class="capitalize font-bold text-gray-500 text-md">
                            product name
                        </a>
                        <div class="w-full flex items-center justify-between gap-2">
                            <span>&dollar; {{ $i + 1 }},000</span>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </section>
@endsection
