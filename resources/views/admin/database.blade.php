@extends('layout.admin')

@section('content')
    <div class="w-full flex flex-col font-bold gap-6">
        <h2 class="text-base md:text-2xl text-gray-600">Databases:</h2>
        <div class="w-full flex flex-col gap-4 shadow p-2 rounded">
            <div class="w-full flex items-center uppercase bg-gray-50 py-2 px-4">
                <span class="w-1/2">name</span>
                <span class="w-1/4">number of data</span>
                <span class="w-1/4">action</span>
            </div>
            @foreach ($tables as $key => $table)
                <div class="w-full flex items-center capitalize py-2 px-4 hover:bg-gray-300">
                    <span class="w-1/2">{{ $key }}</span>
                    <span class="w-1/4">{{ $table::count() }}</span>
                    <span class="w-1/4"><a href="{{ route('admin.db') }}/{{ $key }}"
                            class="text-blue-300 underline lowercase" style="font-variant: small-caps;">check</a></span>
                </div>
            @endforeach
        </div>
    </div>
@endsection
