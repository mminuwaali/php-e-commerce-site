@extends('layout.admin')


@section('content')
<div class="w-full flex items-center justify-start p-8">
    <a href="{{ url()->previous() }}" class="font-bold hover:text-green-500" style="font-variant: small-caps;">go back</a>
</div>
    <form action="{{ route('admin.product.store') }}" method="POST"
        class="flex flex-col grow-[3] basis-80 gap-8 w-4/5 mx-auto">
        @csrf
        <div class="flex flex-col items-start justify-center gap-2">
            <h3 class="font-bold capitalize text-2xl">create a product</h3>
            <span class="text-gray-400 capitalize font-bold">say hello</span>
        </div>
        <div class="flex flex-wrap w-full gap-4">
            <div class="gap-2 flex flex-col basis-96 grow">
                <label for="name" class="font-bold capitalize text-gray-500">name*</label>
                <input type="text" name="name" class="w-full  placeholder:capitalize bg-gray rounded p-4 py-2 h-12"
                    placeholder="product name" />
            </div>
            <div class="gap-2 flex flex-col basis-96 grow">
                <label for="price" class="font-bold capitalize text-gray-500">price*</label>
                <input type="number" min="1" name="price"
                    class="w-full  placeholder:capitalize bg-gray rounded p-4 py-2 h-12" placeholder="price in naira" />
            </div>
            <div class="gap-2 flex flex-col basis-96 grow">
                <label for="discount" class="font-bold capitalize text-gray-500">discount</label>
                <input type="number" min="0" max="100" name="discount"
                    class="w-full  placeholder:capitalize bg-gray rounded p-4 py-2 h-12" value="0" />
            </div>
            <div class="gap-2 flex flex-col basis-96 grow">
                <label for="subject" class="font-bold capitalize text-gray-500">file*</label>
                <input type="file" name="subject" class="w-full  placeholder:capitalize bg-gray rounded p-4 py-2 h-12" />
            </div>
            <div class="gap-2 flex flex-col basis-96 grow">
                <label for="subject" class="font-bold capitalize text-gray-500">categories*</label>
                <select name="category" class="w-full  placeholder:capitalize bg-gray rounded p-4 py-2 h-12">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="gap-2 flex flex-col basis-[100%] grow">
                <label for="description" class="font-bold capitalize text-gray-500">description*</label>
                <textarea type="text" name="description" class="w-full  placeholder:capitalize bg-gray rounded p-4 py-2 resize-none"
                    rows="8" placeholder="add a nice description"></textarea>
            </div>
        </div>
        <button
            class="border-2 border-black text-gray-400 capitalize font-bold self-start px-8 py-4 hover:text-white hover:bg-black">
            post product
        </button>
    </form>
@endsection
