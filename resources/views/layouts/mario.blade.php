@extends('layouts.app')

@section('content')
    <header class="mario-bg text-white py-5">
        <div class="container text-center">
            <h1>Mario</h1>
        </div>
    </header>

    @yield('mario-content')
@endsection