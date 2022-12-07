@extends('layout.account')

@section('body')
    <form action="{{ route('register.store') }}" method="post"
        class="w-full md:w-3/4 bg-gray-50 p-4 self-center flex flex-col gap-8">
        @csrf
        <div class="w-full flex flex-col items-center justify-center">
            <h2 class="capitalize font-bold text-3xl">sign up</h2>
            <span class="text-center text-gray-400">welcome to my <span
                    class="text-green-500 capitalize font-bold">e</span>-commerce website</span>
        </div>
        <div class="flex flex-wrap items-center justify-center gap-8 px-10">
            <div class="flex flex-col items-start justify-center basis-80 gap-1 grow">
                <label for="name" class="capitalize font-bold ml-2">name</label>
                <input type="text" name="name" required value="{{ old('name') }}"
                    class="placeholder:capitalize w-full p-2 rounded bg-gray-100 outline-none @error('name') border-2 border-red-500 @enderror"
                    placeholder="enter your full name" />
                @error('name')
                    <span class="text-red 800 capitalize italic text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex flex-col items-start justify-center basis-80 gap-1 grow">
                <label for="email" class="capitalize font-bold ml-2">email</label>
                <input type="email" name="email" required value="{{ old('email') }}"
                    class="placeholder:capitalize w-full p-2 rounded bg-gray-100 outline-none @error('email') border-2 border-red-500 @enderror"
                    placeholder="enter a valid email" />
                @error('email')
                    <span class="text-red 800 capitalize italic text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex flex-col items-start justify-center basis-80 gap-1 grow">
                <label for="username" class="capitalize font-bold ml-2">username</label>
                <input type="text" name="username" required value="{{ old('username') }}"
                    class="placeholder:capitalize w-full p-2 rounded bg-gray-100 outline-none @error('username') border-2 border-red-500 @enderror"
                    placeholder="enter username of your choice" />
                @error('username')
                    <span class="text-red 800 capitalize italic text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex flex-col items-start justify-center basis-80 gap-1 grow">
                <label for="password" class="capitalize font-bold ml-2">password</label>
                <input type="password" name="password" required
                    class="placeholder:capitalize w-full p-2 rounded bg-gray-100 outline-none @error('password') border-2 border-red-500 @enderror"
                    placeholder="enter a strong password" />
                @error('password')
                    <span class="text-red 800 capitalize italic text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex flex-col items-start justify-center basis-80 gap-1 grow">
                <label for="password_confirmation" class="capitalize font-bold ml-2">repeat password</label>
                <input type="password" name="password_confirmation" required
                    class="placeholder:capitalize w-full p-2 rounded bg-gray-100 outline-none @error('password_confirmation') border-2 border-red-500 @enderror"
                    placeholder="repeat your password" />
            </div>
        </div>
        <button
            class="px-8 py-2 uppecase font-bold border-2 w-56 self-center uppercase rounded-full text-gray-400 hover:bg-gray-400 hover:text-white">register</button>
        <a href="{{ route('login.create') }}" class="text-gray-600 font-thinbold">Having an account? <span
                class="text-green-500">sign in</span></a>
    </form>
@endsection
