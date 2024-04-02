@extends('layouts.app')

@section('content')
    <header class="bg-header text-text">
        <div class="grid grid-cols-3">
            <div></div>
            <div class="mx-auto py-3 w-fit text-3xl">{{ config('app.name') }}</div>
            <span class="p-3 text-right">
                @auth
                    <a href="/admin"
                        class="font-semibold text-text bg-hover p-1 rounded hover:opacity-90 transition-colors capitalize">{{ Auth::user()->name }}</a>
                    <a href="{{route('logout')}}"
                        class="font-semibold text-text bg-hover p-1 rounded hover:opacity-90 transition-colors capitalize">Logout</a>
                @else
                    <button class="font-semibold text-text bg-hover p-1 rounded hover:opacity-90 transition-colors"
                        id="login-opener">Login/Signup</button>
                    <div id="login-dialog" title="Login">
                        <form action="{{route('authenticate')}}" method="post" class="grid grid-cols-1 place-items-center">
                            @csrf
                            <label for="email">Email</label>
                            <input class="rounded p-2 focus:border-hover" type="text" name="email" id="email" required>
                            <label for="password">Password</label>
                            <input class="rounded p-2 focus:border-hover" type="password" name="password" id="password" required>
                            <button class="bg-hover rounded px-4 py-2 hover:opacity-90" type="submit">Login</button>
                        </form>
                    </div>
                    <script>
                        $("#login-dialog").dialog({
                            autoOpen: false
                        });
                        $("#login-opener").click(function() {
                            $("#login-dialog").dialog("open");
                        });
                    </script>
                @endauth
            </span>
        </div>
        <nav class="mx-auto w-fit grid grid-cols-4 gap-1">
            <a href="{{route('home')}}" class="p-2 text-center transition-colors bg-hover">Home</a>
            <a href="#" class="p-2 text-center transition-colors hover:bg-hover">Recipe</a>
            <a href="#" class="p-2 text-center transition-colors hover:bg-hover">Product</a>
            <a href="#" class="p-2 text-center transition-colors hover:bg-hover">About</a>
        </nav>
    </header>
    <main class="p-8">
        @livewire('daftar-produk')
    </main>
@endsection
