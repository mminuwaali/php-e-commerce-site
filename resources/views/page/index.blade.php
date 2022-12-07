@extends('layout.page')

@section('asset')
@endsection

@section('body')
    <!-- slideshow -->
    <section id="slideshow" style="--x: 1;"
        class="w-full h-[clamp(20em,calc(100vw/2),90vh)] bg-green-400 flex justify-start overflow-hidden relative text-white">
        @for ($i = 1; $i <= 3; $i++)
            <div
                class="transition-all grow shrink-0 bg-black py-14 md:py-10 p-10 flex flex-col items-center md:items-start justify-center w-full gap-2 md:gap-10 relative -translate-x-[calc(100%*var(--x))]">
                <img src="{{ url('/images/products/1670423010.jpg') }}" alt=""
                    class="absolute w-full h-full top-0 left-0 z-0" />
                <h2
                    class="text-[clamp(1.4em,5vw,5em)] w-[max(10em,50%)] capitalize leading-[1] font-bold text-center md:text-left z-10">
                    a new online shop experience</h2>
                <p class="w-full md:w-[max(10em,50%)] text-[clamp(0.6em,1vw,5em)] z-10">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie
                    eros. Sed viver ra velit venenatis fermentum luctus.
                </p>
                <a href="{{ route('index') }}"
                    class="border-white border-2 px-8 py-2 text-xs hover:text-black hover:bg-white z-10">shop now</a>
            </div>
        @endfor
        <div class="flex items-center justify-start gap-2 md:gap-4 p-1 px-8 md:p-8 absolute bottom-0 left-0 w-full z-10">
            @for ($i = 1; $i <= 3; $i++)
                <span data-slideshow-count="{{ $i - 1 }}"
                    class="text-white font-black cursor-pointer hover:text-green-500">0{{ $i }}.</span>
            @endfor
        </div>
    </section>

    <!-- products section -->
    <section id="products" class="flex flex-wrap justify-center gap-8">

        @forelse ($products as $product)
            <div class="w-64 h-80 flex flex-col shadow rounded">
                <div class="grow bg-blue-300 relative">
                    <img src="{{ url($product->image) }}" alt="" class="w-full h-full object-cover absolute"
                        loading="lazy" />
                </div>
                <div class="w-full px-4 py-8 flex flex-col items-start justify-center">
                    <a href="{{ route('product', ['product' => $product]) }}"
                        class="capitalize font-bold text-gray-500 text-md">
                        {{ $product->name }}
                    </a>
                    <div class="w-full flex items-center justify-between gap-2">
                        <span>&dollar; {{ $product->price }}</span>
                    </div>
                    <div class="w-full shrink-0 flex items-center justify-center p-2">
                        <a href="{{ route('product', ['product' => $product]) }}"
                            class="w-3/5 bg-blue-500 text-center capitalize font-bold text-white rounded py-1 hover:bg-blue-700 transition-all">
                            add to cart
                        </a>
                    </div>
                </div>
            </div>
        @empty
            <span class="text-center bg-gray-800 font-bold capitalize text-3xl underline">no products at the moment</span>
        @endforelse
    </section>

    <!-- banner section -->
    <section id="banner" class="w-full bg-black p-12 flex items-center justify-center md:justify-end">
        <div class="w-96 bg-red-500 text-white flex flex-col items-start justify-center gap-4 p-10 relative">
            <h2 class="text-2xl md:text-3xl w-[max(6em,80%)] capitalize leading-[1] font-bold text-center md:text-left">a
                new online shop experience</h2>
            <p class="w-full text-[clamp(0.6em,1vw,5em)]">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie eros.
                Sed viver ra velit venenatis fermentum luctus.
            </p>
            <a href="#" class="text-white border-b-white border-b-2" style="font-variant: small-caps;">read more</a>
        </div>
    </section>

    <form class="flex flex-col gap-10 mt-8 items-center" method="POST" id="subscribe" action="{{ route('subscribe') }}">
        @csrf
        <div class="flex items-center justify-center flex-col gap-2">
            <h3 class="text-3xl capitalize font-thinbold">subscribe to our news letter</h3>
            <p class="text-center text-gray-400 w-4/5 leading-none">
                we promise not to spam you with messages
            </p>
        </div>
        <input type="email" name="email" required
            class="border-b-2 text-center outline-none border-b-gray-600 w-[max(20em,60%)] @error('email') border-red-500 @enderror" />
        @error('email')
            <span class="text-red 800 capitalize italic text-sm">{{ $message }}</span>
        @enderror
        <button
            class="border-2 px-8 py-2 capitalize font-thinbold text-gray-600 border-black hover:bg-black hover:text-white text-2xl">
            subscribe
        </button>
    </form>
@endsection
