@extends('layout.admin')


@section('content')
    <div class="w-full flex flex-col font-bold gap-6">
        <h2 class="text-base md:text-2xl text-gray-600">Product:</h2>
        <div class="w-full flex flex-col gap-4 shadow p-2 rounded">
            <div class="w-full flex items-center uppercase bg-gray-50 py-2 px-4">
                <span class="w-8"><input onchange="toggleAllInputs" type="checkbox" name="check-all" id=""></span>
                <span class="w-full">name</span>
                <span class="w-1/3">actions</span>
            </div>
            @foreach ($products as $product)
                <div class="w-full flex items-center capitalize py-2 px-4 hover:bg-gray-100">
                    <span class="w-8"><input type="checkbox" name="" id=""></span>
                    <span class="w-full">{{ $product->name }}</span>
                    <span class="w-1/3 text-blue-300 underline lowercase flex gap-2">
                        <a href="{{ route('admin.category.destroy', ['category' => $category]) }}"
                            style="font-variant: small-caps;">
                            delete
                        </a>
                        <a href="{{ route('admin.category.edit', ['category' => $category]) }}"
                            style="font-variant: small-caps;">
                            edit
                        </a>
                    </span>
                </div>
            @endforeach
            <div class="w-full flex items-center capitalize py-2 px-4 border-t-2 border-t-black">
                <span class="w-1/4 flex items-center justify-start">
                    <a href="{{ route('admin.product.create') }}"
                        class="bg-blue-500 text-white font-bold flex items-center justify-center px-6 py-1 rounded hover:brightness-200">
                        create
                    </a>
                </span>
                <span class="flex items-center justify-end w-full gap-4 text-white lowercase"
                    style="font-variant: small-caps;">
                    <a href="#" class="bg-gray-800 px-4 flex items-center justify-center rounded">prev</a>
                    <a href="#" class="bg-gray-800 px-4 flex items-center justify-center rounded">next</a>
                </span>
            </div>
        </div>
    </div>
@endsection
