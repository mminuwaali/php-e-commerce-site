@extends('layout.page')

@section('body')
    <section id="indicator"
        class="w-full md:h-64 bg-black p-16 flex flex-col items-center md:items-start justify-center text-white gap-2 text-xl">
        <h2 class="capitalize font-bold text-green-500 text-xl md:text-5xl">product category</h2>
        <div class="flex gap-2 text-sm md:text-md" style="font-variant: small-caps">
            <a href="{{ route('index') }}" class="font-bold">home</a>
            /
            <span class="text-green-500 font-bold">product</span>
        </div>
    </section>
    <section id="product" class="gap-14 w-full grid grid-rows-2 grid-cols-1 lg:grid-rows-1 lg:grid-cols-2">
        <div class="flex flex-col p-12 gap-1">
            <div class="grow w-full bg-black aspect-square relative">
                <img src="{{ url($product->image) }}" alt=""
                    class="absolute top-0 left-0 w-full h-full object-cover">
            </div>
        </div>
        <div class="flex flex-col p-12 gap-4">
            <h3 class="capitalize font-bold text-3xl text-gray-400">{{ $product->name }}</h3>
            <p class="text-gray-600">
                {{ $product->description }}
            </p>
            <form method="POST" class="w-full flex items-center justify-start gap-8" action="#">
                @csrf
                <input type="number" name="quantity" min="1"
                    class="border-2 border-bg-gray-50 h-14 text-center outline-none" value="1" />
                <button type="submit"
                    class="px-12 py-4 border-2 border-gray-100 flex items-center justify-center capitalize font-bold hover:bg-black hover:text-white">
                    add to cart
                </button>
            </form>
        </div>
    </section>

    <section id="related" class="flex flex-col w-full gap-8">
        <div class="flex items-center justify-center p-8">
            <h3 class="capitalize font-thinbold text-center text-3xl">related products</h3>
        </div>
        <div class="flex flex-wrap justify-center gap-8">
            @for ($i = 0; $i < 8; $i++)
                <div class="w-64 h-80 flex flex-col shadow rounded">
                    <div class="grow bg-green-400"></div>
                    <div class="w-full px-4 py-8 flex flex-col items-start justify-center">
                        <a href="{{ route('product', ['product' => $i]) }}"
                            class="capitalize font-bold text-gray-500 text-md">
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
