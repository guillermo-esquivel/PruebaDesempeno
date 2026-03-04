<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
    public $imagen;
    public $nombre;
    public $precio;

    public function __construct($imagen, $nombre, $precio)
    {
        $this->imagen = $imagen;
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    public function render()
    {
        return view('components.card');
    }
}