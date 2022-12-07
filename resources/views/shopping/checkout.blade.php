@extends('layout.shopping')

@section('body')
<section id="indicator" class="w-full md:h-64 bg-black p-16 flex items-center justify-start text-white gap-2 text-xl">
    <a href="{{ route('index') }}" class="capitalize font-bold">home</a>
    /
    <a href="{{ route('cart') }}" class="capitalize font-bold">shopping cart</a>
    /
    <span class="text-green-500 capitalize font-bold">checkout</span>
</section>
    <section class="w-full grid grid-cols-1 md:grid-cols-2 grid-rows-2 md:grid-rows-1 p-8">
        <div class="flex flex-col gap-4 p-8 bg-white">
            <div class="w-full flex items-start justify-center flex-col gap-1">
                <h2 class="font-bold capitalize text-3xl">billing address</h2>
                <span class="text-gray-300">Enter your details info</span>
            </div>
            <div class="flex flex-wrap items-center justify-center gap-4">
                <div class="flex flex-col items-start justify-center gap-2 basis-60 grow">
                    <label for="first_name" class="capitalize font-bold text-gray-200">first name*</label>
                    <input type="text" name="first_name" class="bg-gray-200 w-full py-4 px-2" />
                </div>
                <div class="flex flex-col items-start justify-center gap-2 basis-60 grow">
                    <label for="last_name" class="capitalize font-bold text-gray-200">last name*</label>
                    <input type="text" name="first_name" class="bg-gray-200 w-full py-4 px-2" />
                </div>
                <div class="flex flex-col items-start justify-center gap-2 basis-80 grow">
                    <label for="company" class="capitalize font-bold text-gray-200">company</label>
                    <input type="text" name="company" class="bg-gray-200 w-full py-4 px-2" />
                </div>
                <div class="flex flex-col items-start justify-center gap-2 basis-80 grow">
                    <label for="address" class="capitalize font-bold text-gray-200">address*</label>
                    <input type="text" name="address" class="bg-gray-200 w-full py-4 px-2" />
                </div>
                <div class="flex flex-col items-start justify-center gap-2 basis-80 grow">
                    <label for="email" class="capitalize font-bold text-gray-200">email*</label>
                    <input type="email" name="email" class="bg-gray-200 w-full py-4 px-2" />
                </div>
                <div class="flex flex-col items-start justify-center gap-2 basis-80 grow">
                    <label for="phone_number" class="capitalize font-bold text-gray-200">phone number*</label>
                    <input type="tel" name="phone_number" class="bg-gray-200 w-full py-4 px-2" />
                </div>
            </div>
        </div>
        <div class="flex flex-col gap-12 p-8 bg-gray">
            <div class="w-full flex items-start justify-center flex-col gap-2">
                <h2 class="font-bold capitalize text-5xl">your order</h2>
                <span class="text-gray-300">Order details</span>
            </div>
            <div class="flex flex-col items-center justify-center gap-8">
                <div class="flex item-center justify-between gap-4 w-full">
                    <span class="capitalize fomt-bold text-gray-400 text-left">products</span>
                    <span class="capitalize fomt-bold text-gray-400 text-right">4</span>
                </div>
                <div class="flex item-center justify-between gap-4 w-full">
                    <span class="capitalize fomt-bold text-gray-400 text-left">total</span>
                    <span class="capitalize fomt-bold text-gray-400 text-right">$590.90</span>
                </div>
                <div class="flex item-center justify-between gap-4 w-full">
                    <span class="capitalize fomt-bold text-gray-400 text-left">cocktail yellow dress</span>
                    <span class="capitalize fomt-bold text-gray-400 text-right">$59.90</span>
                </div>
                <div class="flex item-center justify-between gap-4 w-full font-bold mt-8 text-lg">
                    <span class="capitalize fomt-bold text-gray-400 text-left">subtotal</span>
                    <span class="capitalize fomt-bold text-gray-400 text-right">$590.90</span>
                </div>
            </div>
        </div>
    </section>
@endsection
