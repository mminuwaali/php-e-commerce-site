@extends('layout.admin')


@section('content')
    <div class="w-full flex items-center justify-start p-8">
        <a href="{{ url()->previous() }}" class="font-bold hover:text-green-500" style="font-variant: small-caps;">go back</a>
    </div>
    <form action="{{ route('admin.category.store') }}" method="POST"
        class="flex flex-col grow-[3] basis-80 gap-8 w-4/5 mx-auto">
        @csrf
        <div class="flex flex-col items-start justify-center gap-2">
            <h3 class="font-bold capitalize text-2xl">create a category</h3>
            <span class="text-gray-400 capitalize font-bold">say hello</span>
        </div>
        <div class="flex flex-wrap w-full gap-4">
            <div class="gap-2 flex flex-col basis-96 grow">
                <label for="name" class="font-bold capitalize text-gray-500">name*</label>
                <input type="text" name="name" class="w-full  placeholder:capitalize bg-gray rounded p-4 py-2 h-12"
                    placeholder="product name" />
            </div>
        </div>
        <button
            class="border-2 border-black text-gray-400 capitalize font-bold self-start px-8 py-4 hover:text-white hover:bg-black">
            post category
        </button>
    </form>
@endsection
