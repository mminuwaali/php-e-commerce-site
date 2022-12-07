@extends('layout.shopping')

@section('body')
    <section id="indicator" class="w-full md:h-64 bg-black p-16 flex items-center justify-start text-white gap-2 text-xl">
        <a href="{{ route('index') }}" class="capitalize font-bold">home</a>
        /
        <a href="{{ route('category') }}" class="capitalize font-bold">category</a>
        /
        <span class="text-green-500 capitalize font-bold">shopping cart</span>
    </section>
@endsection
