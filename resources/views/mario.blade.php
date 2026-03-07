@extends('layouts.mario')
@section('mario-content')
<section class="page-section bg-light">
    <div class="container">
        <h2 class="text-center mb-4">Colección Mario Bros</h2>
        <div class="row">

            <x-card 
                imagen="assets/img/Mario/mario-odyssey-amiibo.jpg"
                nombre="Mario Weeding"
                precio="800"
                descripcion="Figura Amiibo de Mario Wedding del juego Super Mario Odyssey."
            />

            <x-card 
                imagen="assets/img/Mario/marioydestello-amiibo.jpg"
                nombre="Mario y Destello"
                precio="750"
                descripcion="Figura Amiibo de Mario y Destello de Super Mario Galaxy"
            />

            <x-card 
                imagen="assets/img/Mario/luigi-amiibo.jpg"
                nombre="Luigi"
                precio="900"
                descripcion="Figura coleccionable de Super Mario Bros"
            />

            <x-card 
                imagen="assets/img/Mario/toad-amiibo.jpg"
                nombre="Toad"
                precio="450"
                descripcion="Figura coleccionable de Super Mario Bros"
            />

            <x-card 
                imagen="assets/img/Mario/yoshi-amiibo.jpg"
                nombre="Yoshi"
                precio="450"
                descripcion="Figura coleccionable de Super Mario Bros"
            />

            <x-card 
                imagen="assets/img/Mario/bowser-amiibo.jpg"
                nombre="Bowser"
                precio="450"
                descripcion="Figura coleccionable de Super Mario Bros"
            />

            <x-card 
                imagen="assets/img/Mario/peach-amiibo.jpg"
                nombre="Peach"
                precio="850"
                descripcion="Figura coleccionable de Super Mario Bros"
            />

            <x-card 
                imagen="assets/img/Mario/bowserjr-amiibo.jpg"
                nombre="Bowser Jr"
                precio="650"
                descripcion="Figura coleccionable de Super Mario Bros"
            />
        </div>
    </div>
</section>
@endsection