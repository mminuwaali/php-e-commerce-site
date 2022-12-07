@extends('layout.admin')


@section('content')
    <form action="{{ route('admin.category.update', ["category"=> $category]) }}" method="POST" class="p-8 shadow m-auto flex flex-col gap-4">
        @csrf
        @method('PUT')
        <div class="w-full p-4 flex items-center justify-start capitalize font-bold">
            <h2 class="text-lg" style="font-variant: small-caps">edit {{ $category->name }}</h2>
        </div>
        <div class="flex flex-wrap items-center justify-center gap-2 shadow p-4 rounded">
            <div class="flex flex-col items-start justify-center gap-1 basis-96">
                <label for="name" class="capitalize font-bold">name</label>
                <input type="text" name="name" value="{{ $category->name }}"
                    class="w-full outline-none shagow px-2 p-1 border rounded border-gray-400 placeholder:capitalize placeholder:font-thin"
                    required placeholder="enter a new category name" />
            </div>
        </div>
        <input type="submit" value="edit"
            class="w-full p-2 bg-blue-500 text-white font-black flex items-center justify-center uppercase rounded cursor-pointer">
    </form>
@endsection
