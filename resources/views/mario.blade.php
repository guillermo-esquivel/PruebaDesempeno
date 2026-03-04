@extends('layouts.app')
@section('content')
<header class="masthead">
    <div class="container">
        <div class="masthead-heading text-uppercase">
            Figuras de Mario
        </div>
    </div>
</header>
<section class="page-section bg-light">
    <div class="container">
        <h2 class="text-center">Colección</h2>
        <div class="row">
            <div class="col-lg-4">
                <img src="{{ asset('assets/img/Mario/1.jpg') }}" class="img-fluid">
                <h4>Mario</h4>
                <p>$800</p>
            </div>
        </div>
    </div>
</section>
@endsection