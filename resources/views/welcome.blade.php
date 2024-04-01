@extends('layouts.app')

@section('content')
    <header class="bg-header text-text">
        <div class="mx-auto py-3 w-fit text-3xl">{{ config('app.name') }}</div>
        <nav class="mx-auto w-fit grid grid-cols-4 gap-1">
            <a href="#" class="p-2 text-center transition-colors bg-hover">Home</a>
            <a href="#" class="p-2 text-center transition-colors hover:bg-hover">Recipe</a>
            <a href="#" class="p-2 text-center transition-colors hover:bg-hover">Product</a>
            <a href="#" class="p-2 text-center transition-colors hover:bg-hover">About</a>
        </nav>
        {{-- @if (Route::has('login'))
            <div class="p-6 text-right sm:fixed sm:top-0 sm:right-0">
                @auth
                    <a href="{{ route('home') }}"
                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-indigo-500">Home</a>
                @else
                    <a href="{{ route('login') }}"
                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-indigo-500">Log
                        in</a>
    
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-indigo-500">Register</a>
                    @endif
                @endauth
            </div>
        @endif --}}
    </header>
    <main class="p-8">
        @livewire('daftar-produk')
    </main>
@endsection
