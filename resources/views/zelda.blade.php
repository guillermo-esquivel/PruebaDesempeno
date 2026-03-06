@extends('layouts.zelda')
@section('zelda-content')
<section class="page-section bg-light">
    <div class="container">
        <h2 class="text-center">Colección</h2>
        <div class="row">
            <x-card 
                imagen="assets/img/zelda/1.jpg"
                nombre="Link"
                precio="800"  />
            <x-card 
                imagen="assets/img/zelda/2.jpg"
                nombre="Pinchecha"
                precio="750"  />
            <x-card 
                imagen="assets/img/zelda/3.jpg"
                nombre="Ganondorf"
                precio="900"  />
            <x-card 
                imagen="assets/img/zelda/4.jpg"
                nombre="Hyrule"
                precio="450"  />
            <x-card 
                imagen="assets/img/zelda/5.jpg"
                nombre="Toon Link"
                precio="800"  />
            <x-card 
                imagen="assets/img/zelda/6.jpg"
                nombre="Epona"
                precio="750"  />
            <x-card 
                imagen="assets/img/zelda/7.jpg"
                nombre="Goron"
                precio="690"  />
            <x-card 
                imagen="assets/img/zelda/8.jpg"
                nombre="Yunobo"
                precio="470"  />
            <x-card 
                imagen="assets/img/zelda/9.jpg"
                nombre="Bokoblin"
                precio="470"  />
            <x-card 
                imagen="assets/img/zelda/10.jpg"
                nombre="Tulin"
                precio="470"  />
            <x-card 
                imagen="assets/img/zelda/11.jpg"
                nombre="Majoras Mask Link"
                precio="470"  />
            <x-card 
                imagen="assets/img/zelda/12.jpg"
                nombre="Link Skyward"
                precio="470"  />
        </div>
    </div>
</section>

@endsection
