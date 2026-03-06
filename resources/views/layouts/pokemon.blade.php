@extends('layouts.app')

@section('content')
    <header class="pokemon-bg text-white py-5">
        <div class="container text-center">
            <h1>Pokémon</h1>
        </div>
    </header>

    @yield('pokemon-content')
@endsection