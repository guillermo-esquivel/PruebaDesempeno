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
                <x-enlace-boton route="mario" title="Mario" image="assets/img/mario/vista-mario.png" />
            </div>

            <div class="col-lg-4">
                <x-enlace-boton route="zelda" title="Zelda" image="assets/img/zelda/vista-zelda.png" />
            </div>

            <div class="col-lg-4">
                <x-enlace-boton route="pokemon" title="Pokémon" image="assets/img/Pokemon/vista-pokemon.png" />
            </div>
        </div>
    </div>
</section>

@endsection