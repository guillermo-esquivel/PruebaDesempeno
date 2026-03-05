@extends('layouts.app')

@section('content')

<header class="masthead text-center">
    <div class="container">
        <h1 class="text-uppercase">Colección de Figuras Nintendo</h1>
        <p>Selecciona una colección</p>
    </div>
</header>

<section class="page-section bg-light">
    <div class="container text-center">

        <div class="row">

            <div class="col-lg-4">
                <a href="{{ route('mario') }}">
                    <h3>Mario</h3>
                </a>
            </div>

            <div class="col-lg-4">
                <a href="{{ route('zelda') }}">
                    <h3>Zelda</h3>
                </a>
            </div>

            <div class="col-lg-4">
                <a href="{{ route('pokemon') }}">
                    <h3>Pokémon</h3>
                </a>
            </div>

        </div>

    </div>
</section>

@endsection