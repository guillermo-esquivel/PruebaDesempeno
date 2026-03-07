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
                descripcion="Un Pokémon tipo Lucha/Acero que puede leer el aura de los seres vivos. Es leal, serio y muy popular por su diseño heroico."  />
            <x-card 
                imagen="assets/img/Pokemon/2.jpg"
                nombre="Fuecoco"
                precio="750"  
                descripcion="El cocodrilo de fuego de Paldea. Es relajado, le encanta comer y tiene una llama interna que se escapa por su cabeza cuando se emociona."/>
            <x-card 
                imagen="assets/img/Pokemon/3.jpg"
                nombre="Lechonk"
                precio="900"
                descripcion="El cerdito de tipo normal que se volvió viral. Tiene un olfato increíble para buscar bayas y es más fuerte de lo que parece."  />
            <x-card 
                imagen="assets/img/Pokemon/4.jpg"
                nombre="Mew"
                precio="450" 
                descripcion="El Pokémon Nueva Especie. Se dice que contiene el ADN de todos los Pokémon existentes, lo que le permite aprender cualquier ataque. Es juguetón y extremadamente raro." />
            <x-card 
                imagen="assets/img/Pokemon/5.jpg"
                nombre="Ditto"
                precio="800"  
                descripcion="Una masa gelatinosa que puede transformar su estructura celular en cualquier cosa que vea. Es el alma de la crianza Pokémon."/>
            <x-card 
                imagen="assets/img/Pokemon/6.jpg"
                nombre="Mimikyu"
                precio="750" 
                descripcion="Un Pokémon fantasma que se disfraza de Pikachu porque solo quiere que lo quieran tanto como al ratón amarillo. Su verdadera forma es un misterio (y algo aterradora)." />
            <x-card 
                imagen="assets/img/Pokemon/7.jpg"
                nombre="Chikorita"
                precio="340" 
                descripcion="Un tipo planta de Johto con una hoja en la cabeza que usa para emitir fragancias relajantes. Muy tierno, aunque a veces un poco celoso de su entrenador." />
            <x-card 
                imagen="assets/img/Pokemon/8.jpg"
                nombre="Psyduck"
                precio="890"
                descripcion="Vive con un dolor de cabeza constante. Cuando el dolor se vuelve insoportable, libera poderes psíquicos asombrosos, aunque luego no recuerda nada."  />
        </div>
    </div>
</section>

@endsection
