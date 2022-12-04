@extends('layouts.main')

@section('content')
    <!-- slideshow -->
    <section id="slideshow"
        class="w-full md:aspect-video bg-green-400 flex justify-start overflow-hidden relative text-white">
        @for ($i = 1; $i <= 3; $i++)
            <div
                class="grow shrink-0 bg-black py-14 md:py-10 p-10 flex flex-col items-center md:items-start justify-center w-full gap-2 md:gap-10">
                <h2
                    class="text-[clamp(1.4em,5vw,5em)] w-[max(10em,50%)] capitalize leading-[1] font-bold text-center md:text-left">
                    a new online shop experience</h2>
                <p class="w-full md:w-[max(10em,50%)] text-[clamp(0.6em,1vw,5em)]">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie
                    eros. Sed viver ra velit venenatis fermentum luctus.
                </p>
                <a href="#" class="border-white border-2 px-8 py-2 text-xs hover:text-black hover:bg-white">shop now</a>
            </div>
        @endfor
        <div class="flex items-center justify-start gap-2 md:gap-4 p-1 px-8 md:p-8 absolute bottom-0 left-0 w-full z-10">
            @for ($i = 1; $i <= 3; $i++)
                <span class="text-white font-black cursor-pointer hover:text-green-500">0{{ $i }}.</span>
            @endfor
        </div>
    </section>

    <!-- hero section -->
    <section id="hero" class="w-full flex flex-wrap gap-8">
        <div class="h-96 grow basis-80 relative bg-green-200">
            <div class="absolute inset-8 border-white border-2"></div>
        </div>
        <div class="h-96 basis-96 relative grow-[8] bg-orange-400">
            <div class="absolute inset-8 bg-black bg-opacity-60 right-24"></div>
        </div>
    </section>
    <!-- products section -->
    <section id="products" class="flex flex-wrap justify-center gap-8">
        @for ($i = 0; $i < 12; $i++)
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
    </section>

    <!-- banner section -->
    <section id="banner" class="w-full bg-black p-12 flex items-center justify-center md:justify-end">
        <div class="w-96 bg-red-500 text-white flex flex-col items-start justify-center gap-4 p-10">
            <h2 class="text-2xl md:text-3xl w-[max(6em,80%)] capitalize leading-[1] font-bold text-center md:text-left">a
                new online shop experience</h2>
            <p class="w-full text-[clamp(0.6em,1vw,5em)]">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie eros.
                Sed viver ra velit venenatis fermentum luctus.
            </p>
            <a href="#" class="text-white border-b-white border-b-2" style="font-variant: small-caps;">read more</a>
        </div>
    </section>

    <form class="flex flex-col gap-10 items-center" method="POST" action="{{ route('subscribe') }}">
        @csrf
        <div class="flex items-center justify-center flex-col gap-2">
            <h3 class="text-3xl capitalize font-thinbold">subscribe to our news letter</h3>
            <p class="text-center text-gray-400 w-4/5 leading-none">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie eros.
                Sed viver ra velit venenatis fermentum luctus.
            </p>
        </div>
        <input type="email" name="email" required
            class="border-b-2 text-center outline-none border-b-gray-600 w-[max(20em,60%)] @error('email')border-b-red-500 @enderror" />
        @if (session('status'))
            <span class="text-red 800 capitalize italic text-sm">{{ session('status') }}</span>
        @endif
        <button
            class="border-2 px-8 py-2 capitalize font-thinbold text-gray 600 border-black hover:bg-black hover:text-white text-2xl">subscribe</button>
    </form>
@endsection
