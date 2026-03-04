@extends('layouts.app')
@section('content')

<section class="page-section bg-light">
    <div class="container">
        <h2 class="text-center">Colección</h2>
        <div class="row">

            <x-card 
                imagen="assets/img/Mario/mario-odyssey-amiibo.jpg"
                nombre="Mario"
                precio="800"
            />

            <x-card 
                imagen="assets/img/Mario/marioydestello-amiibo.jpg"
                nombre="Luigi"
                precio="750"
            />

            <x-card 
                imagen="assets/img/Mario/luigi-amiibo.jpg"
                nombre="Juan"
                precio="900"
            />

            <x-card 
                imagen="assets/img/Mario/toad-amiibo.jpg"
                nombre="Daniel"
                precio="450"
            />

            <x-card 
                imagen="assets/img/Mario/yoshi-amiibo.jpg"
                nombre="Daniel"
                precio="450"
            />

            <x-card 
                imagen="assets/img/Mario/bowser-amiibo.jpg"
                nombre="Daniel"
                precio="450"
            />
        </div>
    </div>
</section>

@endsection

