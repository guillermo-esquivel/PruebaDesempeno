@extends('layouts.pokemon')
@section('pokemon-content')

<section class="page-section bg-light">
    <div class="container">
        <h2 class="text-center mb-4">Colección Pokémon</h2>
        <div class="row">
            <x-card 
                imagen="assets/img/Pokemon/1.jpg"
                nombre="Lucario"
                precio="800"
                descripcion="Figura Amiibo de Mario Wedding del juego Super Mario Odyssey."  />
            <x-card 
                imagen="assets/img/Pokemon/2.jpg"
                nombre="Fuecoco"
                precio="750"  
                descripcion="Figura Amiibo de Mario Wedding del juego Super Mario Odyssey."/>
            <x-card 
                imagen="assets/img/Pokemon/3.jpg"
                nombre="Lechonk"
                precio="900"
                descripcion="Figura Amiibo de Mario Wedding del juego Super Mario Odyssey."  />
            <x-card 
                imagen="assets/img/Pokemon/4.jpg"
                nombre="Mew"
                precio="450" 
                descripcion="Figura Amiibo de Mario Wedding del juego Super Mario Odyssey." />
            <x-card 
                imagen="assets/img/Pokemon/5.jpg"
                nombre="Ditto"
                precio="800"  
                descripcion="Figura Amiibo de Mario Wedding del juego Super Mario Odyssey."/>
            <x-card 
                imagen="assets/img/Pokemon/6.jpg"
                nombre="Mimikyu"
                precio="750" 
                descripcion="Figura Amiibo de Mario Wedding del juego Super Mario Odyssey." />
            <x-card 
                imagen="assets/img/Pokemon/7.jpg"
                nombre="Chikorita"
                precio="340" 
                descripcion="Figura Amiibo de Mario Wedding del juego Super Mario Odyssey." />
            <x-card 
                imagen="assets/img/Pokemon/8.jpg"
                nombre="Psyduck"
                precio="890"
                descripcion="Figura Amiibo de Mario Wedding del juego Super Mario Odyssey."  />
        </div>
    </div>
</section>

@endsection
