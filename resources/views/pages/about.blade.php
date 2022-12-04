@extends('layouts.main')

@section('content')
    <section id="indicator"
        class="w-full md:h-64 bg-black p-16 flex flex-col items-center md:items-start justify-center text-white gap-2 text-xl">
        <h2 class="capitalize font-bold text-green-500 text-xl md:text-5xl">get to know us</h2>
        <div class="flex gap-2 text-sm md:text-md" style="font-variant: small-caps">
            <a href="{{ route('index') }}" class="font-bold">home</a>
            /
            <span class="text-green-500 font-bold">about us</span>
        </div>
    </section>
    <section id="about" class="flex flex-col">
        <div class="flex items-center justify-center p-8">
            <h2 class="capitalize font-bold text-xl md:text-5xl text-gray-500">about us</h2>
        </div>
        <div class="gap-14 w-full grid grid-rows-2 grid-cols-1 lg:grid-rows-1 lg:grid-cols-2">
            <div class="flex aspect-video p-8 bg-black"></div>
            <div class="flex flex-col aspect-video p-8 gap-4">
                <h3 class="uppercase font-bold text-3xl">about us</h3>
                <p class="text-gray-600">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis aliquam a impedit labore.
                    Culpa adipisci excepturi, et itaque maiores odit, nobis quibusdam eos similique repellat nesciunt
                    nemo voluptatibus ratione quae?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis aliquam a impedit labore.
                    Culpa adipisci excepturi, et itaque maiores odit, nobis quibusdam eos similique repellat nesciunt
                    nemo voluptatibus ratione quae?
                </p>
            </div>
        </div>
    </section>
@endsection
