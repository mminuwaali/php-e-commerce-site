@extends('layout.account')

@section('body')
    <section id="indicator" class="w-full md:h-64 bg-black p-16 flex items-center justify-start text-white gap-2 text-xl">
        <a href="{{ route('index') }}" class="capitalize font-bold">home</a>
        /
        <span class="text-green-500 capitalize font-bold">contact</span>
    </section>
    <section id="contact" class="flex flex-wrap w-full px-8">
        <form action="{{ route('contact.post') }}" method="post" class="flex flex-col grow-[3] basis-80 gap-8">
            @csrf
            <div class="flex flex-col items-start justify-center gap-2">
                <h3 class="font-bold capitalize text-2xl">get in touch</h3>
                <span class="text-gray-400 capitalize font-bold">say hello</span>
            </div>
            <div class="flex flex-wrap w-full gap-4">
                <div class="gap-2 flex flex-col basis-96 grow">
                    <label for="name" class="font-bold capitalize text-gray-500">name*</label>
                    <input type="text" name="name" class="w-full bg-gray-100 rounded p-4 py-2 h-12" />
                </div>
                <div class="gap-2 flex flex-col basis-96 grow">
                    <label for="email" class="font-bold capitalize text-gray-500">email*</label>
                    <input type="text" name="email" class="w-full bg-gray-100 rounded p-4 py-2 h-12" />
                </div>
                <div class="gap-2 flex flex-col basis-96 grow">
                    <label for="subject" class="font-bold capitalize text-gray-500">subject*</label>
                    <input type="text" name="subject" class="w-full bg-gray-100 rounded p-4 py-2 h-12" />
                </div>
                <div class="gap-2 flex flex-col basis-[100%] grow">
                    <label for="message" class="font-bold capitalize text-gray-500">message*</label>
                    <textarea type="text" name="message" class="w-full bg-gray-100 rounded p-4 py-2 resize-none" rows="8"></textarea>
                </div>
            </div>
            <button
                class="border-2 border-black text-gray-400 capitalize font-bold self-start px-8 py-4 hover:text-white hover:bg-black">send
                message</button>
        </form>
        <div class="grow basis-40"></div>
    </section>
@endsection
