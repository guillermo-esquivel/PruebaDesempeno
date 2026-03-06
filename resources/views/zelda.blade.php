@extends('layouts.zelda')
@section('zelda-content')
<section class="page-section bg-light">
    <div class="container">
        <h2 class="text-center mb-4">Colección Zelda</h2>
        <div class="row">
            <x-card 
                imagen="assets/img/zelda/1.jpg"
                nombre="Link"
                precio="800"
                descripcion="Figura Amiibo de Mario Wedding del juego Super Mario Odyssey."  />
            <x-card 
                imagen="assets/img/zelda/2.jpg"
                nombre="Pinchecha"
                precio="750"
                descripcion="Figura Amiibo de Mario Wedding del juego Super Mario Odyssey."  />
            <x-card 
                imagen="assets/img/zelda/3.jpg"
                nombre="Ganondorf"
                precio="900"
                descripcion="Figura Amiibo de Mario Wedding del juego Super Mario Odyssey."  />
            <x-card 
                imagen="assets/img/zelda/4.jpg"
                nombre="Hyrule"
                precio="450"
                descripcion="Figura Amiibo de Mario Wedding del juego Super Mario Odyssey."  />
            <x-card 
                imagen="assets/img/zelda/5.jpg"
                nombre="Toon Link"
                precio="800"
                descripcion="Figura Amiibo de Mario Wedding del juego Super Mario Odyssey."  />
            <x-card 
                imagen="assets/img/zelda/6.jpg"
                nombre="Epona"
                precio="750" 
                descripcion="Figura Amiibo de Mario Wedding del juego Super Mario Odyssey." />
            <x-card 
                imagen="assets/img/zelda/7.jpg"
                nombre="Goron"
                precio="690"
                descripcion="Figura Amiibo de Mario Wedding del juego Super Mario Odyssey."  />
            <x-card 
                imagen="assets/img/zelda/8.jpg"
                nombre="Yunobo"
                precio="470"
                descripcion="Figura Amiibo de Mario Wedding del juego Super Mario Odyssey."  />
        </div>
    </div>
</section>

@endsection
