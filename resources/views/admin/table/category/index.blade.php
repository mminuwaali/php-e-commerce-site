@extends('layout.admin')


@section('content')
    <div class="w-full flex flex-col font-bold gap-6">
        <h2 class="text-base md:text-2xl text-gray-600">Category:</h2>
        <div class="w-full flex flex-col gap-4 shadow p-2 rounded">
            <div class="w-full flex items-center uppercase bg-gray-50 py-2 px-4">
                <span class="w-8"><input onchange="toggleAllInputs" type="checkbox" name="check-all" id=""></span>
                <span class="w-full">name</span>
                <span class="w-1/3">actions</span>
            </div>
            @foreach ($categories as $category)
                <div class="w-full flex items-center capitalize py-2 px-4 hover:bg-gray-100">
                    <span class="w-8"><input type="checkbox" name="" id=""></span>
                    <span class="w-full">{{ $category->name }}</span>
                    <span class="w-1/3 text-blue-300 underline lowercase flex gap-2">
                        <form action="{{ route('admin.category.destroy', ['category' => $category]) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" style="font-variant: small-caps;" class="underline">delete</button>
                        </form>
                        <a href="{{ route('admin.category.edit', ['category' => $category]) }}"
                            style="font-variant: small-caps;">
                            edit
                        </a>
                    </span>
                </div>
            @endforeach
            <div class="w-full flex items-center capitalize py-2 px-4 border-t-2 border-t-black -mb-4">
            </div>
            {{ $categories->links() }}
        </div>
    </div>
@endsection
