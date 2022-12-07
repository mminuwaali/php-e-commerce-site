@extends('layout.admin')

@section('content')
    <div class="w-full p-6 flex flex-wrap items-center justify-evenly rounded font-bold text-lg capitalize">
        <div class="flex flex-col w-full gap-8">
            <h2 class="text-base md:text-2xl">Reports:</h2>
            <div
                class="w-full p-6 flex flex-wrap items-center justify-evenly shadow-md rounded font-bold text-lg capitalize">
                <div class="basis-96 p-4 flex items-center shadow rounded gap-4 px-10 grow hover:bg-white bg-gray-50 cursor-pointer">
                    <i
                        class="fa fa-chart-mixed bg-red-400 w-16 h-16 text-white shadow flex items-center justify-center rounded-full"></i>
                    <div class="flex flex-col items-start justify-center grow">
                        <h3 class="uppercase text-xl text-gray-600 -mb-2">analytics</h3>
                        <span class="font-black text-gray-600 text-sm">200</span>
                    </div>
                </div>
                <div class="basis-96 p-4 flex items-center justify-center shadow rounded gap-4 px-10 grow hover:bg-white bg-gray-50 cursor-pointer">
                    <i
                        class="fa-regular fa-bags-shopping bg-blue-400 w-16 h-16 text-white shadow flex items-center justify-center rounded-full"></i>
                    <div class="flex flex-col items-start justify-center grow">
                        <h3 class="uppercase text-xl text-gray-600 -mb-2">succeesull orders</h3>
                        <span class="font-black text-gray-600 text-sm">200,000</span>
                    </div>
                </div>
                <div class="basis-96 p-4 flex items-center justify-center shadow rounded gap-4 px-10 grow hover:bg-white bg-gray-50 cursor-pointer">
                    <i
                        class="fa-brands fa-product-hunt bg-green-400 w-16 h-16 text-white shadow flex items-center justify-center rounded-full"></i>
                    <div class="flex flex-col items-start justify-center grow">
                        <h3 class="uppercase text-xl text-gray-600 -mb-2">products count</h3>
                        <span class="font-black text-gray-600 text-sm">135.465</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
