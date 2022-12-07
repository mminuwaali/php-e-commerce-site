@extends('layout.page')

@section('body')
    <section class="w-full flex flex-col gap-8">
        <div class="flex flex-col items-center justify-center capitalize">
            <span class="font-bold text-blue-500">grouped by category</span>
            <h2 class="font-bold text-5xl">recent products</h2>
        </div>
        <div class="flex flex-col gap-16">
            <div
                class="flex flex-wrap items-center justify-evenly md:justify-center text-white font-bold gap-4 capitalize px-12">
                @foreach ($categories as $category)
                    <a href="#"
                        class="bg-blue-600 py-2 px-8 rounded hover:brightness-110 grow md:grow-0">{{ $category->name }}</a>
                @endforeach
            </div>
            <div class="flex flex-wrap items-center justify-center gap-8 gap-y-40">
                @forelse ($products as $product)
                    <div class="relative rounded-md shadow-md flex items-end justify-center basis-96">
                        <img src="assets/images/portfolio/portfolio-01/image-01.jpg" alt="portfolio"
                            class="w-full object-cover" />
                        <div
                            class="w-9/12 absolute bottom-0 translate-y-1/2 rounded-md shadow-xl bg-white p-8 z-10 flex flex-col items-center justify-center gap-2">
                            <span class="text-blue-500 font-black">N{{ $product->price }}</span>
                            <h3 class="text-xl font-bold text-dark">{{ $product->name }}</h3>
                            <a href="{{ route('product', ['product' => $product]) }}"
                                class="rounded-md border py-3 px-8 text-sm font-semibold transition hover:border-primary hover:bg-primary hover:text-white">
                                View Details
                            </a>
                        </div>
                    </div>
                @empty
                    <span class="text-center bg-gray-800 font-bold capitalize text-3xl underline">no product at the
                        moment</span>
                @endforelse
            </div>
        </div>
    </section>
@endsection
