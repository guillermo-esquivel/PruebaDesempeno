@extends('layouts.mario')
@section('mario-content')

<section class="page-section bg-light">
    <div class="container">
        <h2 class="text-center">Colección</h2>
        <div class="row">

            <x-card 
                imagen="assets/img/Mario/1.jpg"
                nombre="Mario"
                precio="800"
            />

            <x-card 
                imagen="assets/img/Mario/2.jpg"
                nombre="Luigi"
                precio="750"
            />

            <x-card 
                imagen="assets/img/Mario/3.jpg"
                nombre="Juan"
                precio="900"
            />

            <x-card 
                imagen="assets/img/Mario/4.jpg"
                nombre="Daniel"
                precio="450"
            />

        </div>
    </div>
</section>

@endsection

