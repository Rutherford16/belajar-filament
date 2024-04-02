@extends('layouts.base')

@section('body')
    @yield('content')
    @yield('login')

    @isset($slot)
        {{ $slot }}
    @endisset
@endsection
