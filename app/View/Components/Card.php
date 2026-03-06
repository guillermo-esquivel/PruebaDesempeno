<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
    public $imagen;
    public $nombre;
    public $precio;
    public $descripcion;

    public function __construct($imagen, $nombre, $precio, $descripcion)
    {
        $this->imagen = $imagen;
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->descripcion = $descripcion;
    }

    public function render()
    {
        return view('components.card');
    }
}