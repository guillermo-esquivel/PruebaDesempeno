<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class EnlaceBoton extends Component
{
    public $route;
    public $title;
    public $image;

    public function __construct($route, $title, $image)
    {
        $this->route = $route;
        $this->title = $title;
        $this->image = $image;
    }

    public function render(): View|Closure|string
    {
        return view('components.enlace-boton');
    }
}