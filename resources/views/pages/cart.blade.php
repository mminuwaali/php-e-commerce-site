@extends('layouts.main')

@section('content')
    <section id="indicator"
        class="w-full md:h-64 bg-black p-16 flex flex-col items-center md:items-start justify-center text-white gap-2 text-xl">
        <div class="flex gap-2 text-sm md:text-xl" style="font-variant: small-caps">
            <a href="{{ route('index') }}" class="font-bold">home</a>
            /
            <a href="{{ route('categories') }}" class="font-bold">shopping</a>
            /
            <span class="text-green-500 font-bold">cart</span>
        </div>
    </section>
@endsection
